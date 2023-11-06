<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\RentLogs;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarRentController extends Controller
{
    public function index()
    {
        $users = User::where('id','!=', 1 )->where('status', '!=', 'inactive')->get();
        $cars = Car::all();
        return view('car-rent',['users'=>$users, 'cars'=> $cars]);
    }

    public function store (Request $request)
    {
        $request['rent_date']= Carbon::now()->toDateString();
        $request['return_date']= Carbon::now()->addDay(3)->toDateString();

        $car = Car::findOrFail($request->car_id)->only('status');

        if($car['status'] != "ready"){
            Session::flash('message', 'Tidak bisa dipinjam, kendaraan tidak tersedia');
            Session::flash('alert-class', 'alert-danger');
            return redirect('car-rent');
        }

        else {
            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();

            if($count >= 3){
                Session::flash('message', 'Tidak bisa dipinjam, pengguna mencapai limit peminjaman');
                Session::flash('alert-class', 'alert-danger');
                return redirect('car-rent');
            }
            else{
                try {
                    DB::beginTransaction();
                    RentLogs::create($request->all());
                    $car = Car::findOrFail($request->car_id);
                    $car->status='no ready';
                    $car->save();
                    DB::commit();

                    Session::flash('message', 'Peminjaman kendaraan berhasil');
                    Session::flash('alert-class', 'alert-success');
                    return redirect('car-rent');
                   } catch (\Throwable $th) {
                    DB::rollBack();
                   }
            }

        }
    }

    public function returnCar()
    {
        $users = User::where('id','!=', 1 )->where('status', '!=', 'inactive')->get();
        $cars = Car::all();
        return view('return-car', ['users'=>$users, 'cars'=>$cars]);
    }

    public function saveCar(Request $request)
    {
        $rent = RentLogs::where('user_id', $request->user_id)->where('car_id', $request->car_id)->where('actual_return_date',  null);
        $rentData = $rent->first();
        $countData = $rent->count();

        if($countData ==1){
            $rentData->actual_return_date = Carbon::now()->toDateString();
            $rentData->save();

            Session::flash('message', 'Kendaraan telah berhasil dikembalikan');
            Session::flash('alert-class', 'alert-success');
            return redirect('car-return');
        }
        else{
            Session::flash('message', 'There is error in proccess');
            Session::flash('alert-class', 'alert-success');
            return redirect('car-return');
        }
    }
}

@extends('layouts.mainlayout')

@section('tittle', 'Pengembalian Kendaraan')

@section('content')

    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
        <h2 class="mb-5">-</h2>
        <div class="mt-5">
            @if (session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form action="car-return" method="post"></form>
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Form Pengembalian Kendaraan</h4>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Input Kendaraan </h4>

                            <form action="car-return" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="user" class="col-sm-2 col-form-label">Pilih Pengguna</label>
                                    <div class="col-sm-10">
                                        <select name="user_id" id="user" class="form-control ">
                                            @foreach ($users as $item )
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="car" class="col-sm-2 col-form-label">Pilih Kendaraan</label>
                                    <div class="col-sm-10">
                                        <select name="car_id" id="car" class="form-control">
                                            @foreach ($cars as $item )
                                            <option value="{{ $item->id }}">{{ $item->car_code }}  ||  {{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div >
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </form>




                            </div>
                        </div>
                    </div>
                            <!-- Page body end -->
                </div>
    </div>

@endsection

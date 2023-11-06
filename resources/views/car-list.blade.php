@extends('layouts.mainlayout')

@section('tittle', 'Dashboard')

@section('page-name,', 'dashboard')

@section('content')

    {{-- <form action="" method="get">
        <div class=" row p-5">
            <div class="col-12 col-sm-6">
                <select name="category" id="category" class="form-control">
                    <option value="">Cari Kategori</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id}}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-sm-6">
                <div class="input-group ">
                    <input type="text" name="title" class="form-control" placeholder="Cari Kendaraan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
    <div class="p-5 ">
        <div class=" row">
            @foreach ($cars as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card h-100" >
                    <div class="card-header h-100">
                        <h5>Kendaraan</h5>
                        <img src="{{$item->cover !=null ? asset ('storage/cover/'.$item->cover) : asset('image/cover-not-fond.jpeg')}}" class="card-img-top" draggable="false">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->car_code }}</h5>
                        <p class="card-text">{{ $item->title }}</p>
                        <P class="card-text text-right  {{ $item->status =='ready' ? 'text-success' : 'text-danger'}}" style="font-weight: bold;">
                            {{ $item->status }}
                        </P>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection

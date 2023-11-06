@extends('layouts.mainlayout')

@section('tittle', 'Deleted List Car')

@section('content')
    <h1>Daftar Kendaraan Deleted</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="/cars" class="btn btn-secondary mr-3 ">Back</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="my-5">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Plat Nomor</th>
                    <th>Nama Kendaraan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($deletedCars as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->car_code }}</td>
                    <td>{{ $item->title}}</td>
                    <td>
                        <a href="/car-restore/{{ $item->slug }}">Restore</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

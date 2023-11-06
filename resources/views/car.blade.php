

@extends('layouts.mainlayout')

@section('tittle', 'Dashboard')

@section('page-name,', 'dashboard')

@section('content')
<div class="mt-5 d-flex justify-content-end p-3">
    <a href="car-deleted" class="btn btn-secondary mr-3 ">View Deleted Data</a>
    <a href="car-add" class="btn btn-primary ">Add Data</a>
</div>
<div class="">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="pcoded-inner-content  ">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Kendaraan</h2>
                        <span>Kendaraan Diskominfo Jawa Tengah</span>
                        <div class="card-header-right">

                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Plat No</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $cars as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->car_code }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            @foreach ($item->categories as $category)
                                                {{ $category->name }} <br>
                                            @endforeach
                                        </td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="/car-edit/{{ $item->slug }} "class="btn btn-primary">edit</a>
                                            <a href="/car-delete/{{ $item->slug }}" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>
    {{-- <h1>Daftar Kendaraan</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="car-deleted" class="btn btn-secondary mr-3 ">View Deleted Data</a>
        <a href="car-add" class="btn btn-primary ">Tambah Data</a>
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
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Plat No</th>
                    <th>Nama Kendaraan</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $cars as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->car_code }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        @foreach ($item->categories as $category)
                            {{ $category->name }} <br>
                        @endforeach
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/car-edit/{{ $item->slug }}">edit</a>
                        <a href="/car-delete/{{ $item->slug }}">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div> --}}
@endsection


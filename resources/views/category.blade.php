@extends('layouts.mainlayout')

@section('tittle', 'Category')

@section('content')

    <div class="mt-5 d-flex justify-content-end p-3">
        <a href="category-deleted" class="btn btn-secondary mr-3 ">View Deleted Data</a>
        <a href="category-add" class="btn btn-primary ">Add Data</a>
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
                            <h5>Daftar Kategori</h5>
                            <span>Kendaraan Diskominfo Jawa Tengah</span>
                            <div class="card-header-right">

                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >No#</th>
                                            <th >Nama Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a href="category-edit/{{ $item->slug }}" class="btn btn-primary">Edit</a>
                                                <a href="category-delete/{{ $item->slug }}" class="btn btn-danger">Delete</a>
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
@endsection

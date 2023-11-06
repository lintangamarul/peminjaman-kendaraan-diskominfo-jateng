@extends('layouts.mainlayout')

@section('tittle', 'Users')

@section('content')
<div class="mt-5 d-flex justify-content-end p-5">
    <a href="user-banned" class="btn btn-secondary mr-3 ">View Banned User</a>
    <a href="/registered-users" class="btn btn-primary ">New Resistered User</a>
</div>
<div class="pcoded-inner-content  ">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Pengguna Login</h2>
                        <span>Diskominfo Jawa Tengah</span>
                        <div class="card-header-right">

                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>
                                            <a href="/user-detail/{{ $item->slug }}"class="btn btn-primary">detail</a>
                                            <a href="/user-ban/{{ $item->slug }}"class="btn btn-danger">ban user</a>
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
    {{-- <h1>User List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="user-banned" class="btn btn-secondary mr-3 ">View Banned User</a>
        <a href="/registered-users" class="btn btn-primary ">New Resistered User</a>
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
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>
                        <a href="/user-detail/{{ $item->slug }}">detail</a>
                        <a href="/user-ban/{{ $item->slug }}">ban user</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div> --}}
@endsection

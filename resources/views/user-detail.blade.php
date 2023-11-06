@extends('layouts.mainlayout')

@section('tittle', 'Users')

@section('content')
    <h1>Detail User</h1>

    <div class="mt-2 d-flex justify-content-end">
        @if ($user->status=='inactive')
            <a href="/user-approve/{{ $user->slug }}" class="btn btn-info "> Approved User </a>
        @endif
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-5 w-25">
        <div class="mb-3">
            <label for="" class="form-label">NIK</label>
            <input type="text" class="form-control" readonly value="{{ $user->username }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" readonly value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jabatan</label>
            <input type="text" class="form-control" readonly value="{{ $user->jabatan }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="{{ $user->status }}">
        </div>
    </div>

    <div class="mt-5">
        <h1 class="mb-4 text-center">Daftar Peminjaman Pengguna</h1>
        <x-rent-log-table :rentlog='$rent_logs'/>
    </div>
@endsection

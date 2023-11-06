@extends('layouts.mainlayout')

@section('tittle', 'Daftar Peminjaman')

@section('content')
    <div class="mt-5">
        <x-rent-log-table :rentlog='$rent_logs'/>

    </div>
@endsection

@extends('layouts.mainlayout')

@section('tittle', 'Profile')

@section('content')

<div class="mt-5">
    <h1 class="mb-4 text-center">-</h1>
    <x-rent-log-table :rentlog='$rent_logs'/>
</div>

@endsection

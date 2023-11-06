@extends('layouts.mainlayout')

@section('tittle', 'Delete Car')

@section('content')
    <h2> Are you sure to delete car {{ $car->title }} ?</h2>
    <div class="mt-5">
        <a href="/car-destroy/{{ $car->slug }}" class="btn btn-danger mr-5">Sure</a>
        <a href="/cars" class="btn btn-primary">Cancel</a>

    </div>
@endsection

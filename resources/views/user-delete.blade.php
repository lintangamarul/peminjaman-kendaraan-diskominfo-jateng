@extends('layouts.mainlayout')

@section('tittle', 'Delete User')

@section('content')
    <h2> Are you sure to delete user {{ $user->name }} ?</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger mr-5">Sure</a>
        <a href="/users" class="btn btn-primary">Cancel</a>
    </div>
@endsection

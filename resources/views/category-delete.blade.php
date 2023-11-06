@extends('layouts.mainlayout')

@section('tittle', 'Delete Category')

@section('content')
    <h2> Are you sure to delete category {{ $category->name }} ?</h2>
    <div class="mt-5">
        <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger mr-5">Sure</a>
        <a href="/categories" class="btn btn-primary">Cancel</a>

    </div>
    <div class="card-header-left">
        <h5>Color States</h5>
    </div>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><i class="fa fa fa-wrench open-card-option"></i></li>
            <li><i class="fa fa-window-maximize full-card"></i></li>
            <li><i class="fa fa-minus minimize-card"></i></li>
            <li><i class="fa fa-refresh reload-card"></i></li>
            <li><i class="fa fa-trash close-card"></i></li>
        </ul>
    </div>
@endsection

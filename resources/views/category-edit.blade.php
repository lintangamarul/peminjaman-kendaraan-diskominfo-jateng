@extends('layouts.mainlayout')

@section('tittle', 'Edit Category')

@section('content')


    <div class="col-lg p-5 ">
        <div class="card">
            <div class="card-header">
                <h5>Edit Category</h5>
            </div>
            <div class=" card-block">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  class="form-material" action="/category-edit/{{ $category->slug }}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control"  placeholder="Edit Category Here">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success"  type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

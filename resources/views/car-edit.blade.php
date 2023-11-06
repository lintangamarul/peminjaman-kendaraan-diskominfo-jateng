@extends('layouts.mainlayout')

@section('tittle', 'Edit Car')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="path/to/select2.min.css" rel="stylesheet" />
    <h1>-</h1>
    <div class="col-lg p-5 ">
        <div class="card">
            <div class="card-header">
                <h5>Edit Kendaraan</h5>
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
                <form class="form-material" action="/car-edit/{{ $car->slug }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="code" class="form-label">Plat Nomor</label>
                        <input type="text" name="car_code" id="code" class="form-control" placeholder="Edit Plat Nomor" >
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Kendaraan</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Edit Nama Kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Tambah Gambar</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Pilih Kategori</label>
                        <select name="categories[]" id="category" class="form-control select-multiple" >
                            <option value="">Choose Category</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success"  type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-material" action="/car-edit/{{ $car->slug }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="code" class="form-label">Plat Nomor</label>
                <input type="text" name="car_code" id="code" class="form-control" placeholder="Edit Plat Nomor" >
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Nama Kendaraan</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Edit Nama Kendaraan">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Tambah Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Pilih Kategori</label>
                <select name="categories[]" id="category" class="form-control select-multiple" >
                    <option value="">Choose Category</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mt-3">
                <button class="btn btn-success"  type="submit">Simpan</button>
            </div>
        </form>
    </div> --}}

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="path/to/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select-multiple').select2();
    });
</script>
@endsection

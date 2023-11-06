@extends('layouts.mainlayout')

@section('tittle', 'Banned Users')

@section('content')
    <h1>Banned User List</h1>

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
                @foreach ($bannedUsers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>
                        <a href="/user-restore/{{ $item->slug }}">Restore</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    </div>
@endsection

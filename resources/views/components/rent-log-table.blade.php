
<div class="pcoded-inner-content  ">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h2>Daftar Peminjaman</h2>
                        <span>Kendaraan Diskominfo Jawa Tengah</span>
                        <div class="card-header-right">

                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pengguna</th>
                                        <th>Kendaraan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Dikembalikan Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $rentlog as $item)
                                    <tr class="{{ $item->actual_return_date == null ?'' : ($item->return_date < $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success') }}">
                                        <td>{{  $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->car->title}}</td>
                                        <td>{{ $item->rent_date }}</td>
                                        <td>{{ $item->return_date }}</td>
                                        <td>{{ $item->actual_return_date }}</td>
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
{{-- <div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pengguna</th>
                <th>Kendaraan</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Dikembalikan Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $rentlog as $item)
            <tr class="{{ $item->actual_return_date == null ?'' : ($item->return_date < $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success') }}">
                <td>{{  $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->car->title}}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->actual_return_date }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div> --}}

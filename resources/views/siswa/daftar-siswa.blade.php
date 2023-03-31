@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">

        </div>
    </div>
@endsection

@section('content')

    <body>
        <div class="container py-5">
            <h4>Daftar User</h4>
            &nbsp;
            @if (auth()->user()->role_id == '1')
                <a href="/tambah-siswa">
                    <button type="button" class="btn btn-success">Tambah Data</button>
                </a>
            @endif
            <table class="table table-bordered border-primary">
                <thead>
                    <tr class="text-center">
                        <th>ID Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Tahun Lulus</th>
                        <th>Asal Sekolah</th>
                        @if (auth()->user()->role_id == '1')
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $x)
                        <tr class="text-center">
                            <td>{{ $x->id }}</td>
                            <td>{{ $x->nama }}</td>
                            <td>{{ $x->tahun_lulus }}</td>
                            <td>{{ $x->asal_sekolah }}</td>

                            <!--role user 1 sebagai admin-->
                            @if (auth()->user()->role_id == '1')
                                <td>
                                    <a href="/edit-siswa/{{ $x->id }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="/delete-siswa/{{ $x->id }}" onclick=""
                                        class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash3"></i> Delete
                                    </a>
                                </td>
                            @endif

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <html>

        </html>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </div>

    </div>
@endsection

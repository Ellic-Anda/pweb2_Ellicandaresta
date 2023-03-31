@extends('main')

@section('title','Dashboard')

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
    <div class="card">
        <div class="card-body">
            <div class="container py-5">
                <h4>Tambah Pelamar</h4>
                &nbsp;
                &nbsp;
                <!--insertsiswa ada di routes di web.php-->
            <form action="{{route('insertsiswa')}}" method="POST">
                @csrf
                <div class="form-group form-default">
                    <label class="float-label">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control">
                    <span class="form-bar"></span>

                </div>
                <div class="form-group form-default">
                    <label class="float-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" class="form-control">
                    <span class="form-bar"></span>

                </div>
                    <label class="float-label">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control">
                    <span class="form-bar"></span>

                </div>


                <a href="/daftar-siswa">
                    <button type="button" class="btn btn-warning">Kembali</button>
                </a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
    </div>

    <html>
</html>
</body>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
            </div>

        </div>
@endsection


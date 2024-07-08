<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('home.index') }}" class="h1"><b>PPKD</b> Jakarta Pusat</a>
  </div>
  <!-- /.login-logo -->
  <div class="card card_register" style="width: 800px; right:200px">
    <div class="card-body" style="width: 800px; right: 200px">
      <h4 class="login-box-msg">Pendaftaran Peserta PPKD Jakarta Pusat</h4>

      <form action="{{ route('register.store') }}" class="peserta" method="post">
        @csrf
        <div class="input-group">
            <input name="nik" type="text" class="mb-4 form-control"
                id=""
                placeholder="Masukan NIK KTP Anda">
        </div>
        <div class="input-group">
            <input name="nama" type="text" class="mb-4 form-control"
                id=""
                placeholder="Masukan Nama Lengkap Anda">
        </div>
        <div class="input-group">
            <input name="email" type="email" class="mb-4 form-control"
                id=""
                placeholder="Masukan Email Anda">
        </div>
        <div class="input-group">
            <input name="no_hp" type="tel" class="mb-4 form-control"
                id=""
                placeholder="Masukan Nomor HP Anda">
        </div>
        <div class="input-group">
            <select name="jenis_kelamin" id="" class="mb-4 form-control">
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="input-group">
            <select name="pendidikan" id="" class="mb-4 form-control">
                <option value="" disabled selected>Pendidikan Terakhir</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="D1-D3">D1-D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>

        <div class="input-group">
            <select name="id_jurusan" id="" class="mb-4 form-select form-control">
                <option value="" disabled selected>Pilih Jurusan</option>
                @foreach ($jurusan as $item)
                    <option value="{{ $item->id_jurusan }}">{{ $item->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <input type="text" readonly value="{{ $gelombang->nama_gelombang }}" class="mb-4 form-control" placeholder="Nama Gelombang">
            <input type="hidden" name="id_gelombang" value="{{ $gelombang->nama_gelombang }}" class="form-control">
        </div>

        <div class="input-group">
            <textarea name="alamat" id="" class="form-control" cols="auto" rows="3" placeholder="Masukan Alamat Anda"></textarea>
        </div>
        <button name="register" type="submit" class="mt-5 btn btn-primary btn btn-block">
            Daftar
        </button>   
    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
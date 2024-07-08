<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PPKD Jakarta Pusat</title>
    @include('inc.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  @include('inc.navbar')

  @include('inc.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <form action="{{ route('user.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Nama</label>
            <input value="{{ $edit->name }}" name="name" type="text" class="form-control" placeholder="Masukan Nama Anda">
        </div>
        <div class="form-group mb-3">
          <label for="">Level</label>
          <select name="id_level" class="form-control">
            <option value="" disabled>Pilih Level</option>
            @foreach ($data as $key => $d)
            <option value="{{ $d->id }}" {{ $edit->id_level == $d->id ? 'selected' : '' }}>{{ $d->nama_level }}</option>
            {{-- <option value="{{ $d->id }}">{{ $d->nama_level }}</option> --}}
            @endforeach
          </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input value="{{ $edit->email }}" name="email" type="text" class="form-control" placeholder="Masukan Email Anda">
        </div>
        <div class="form-group mb-3">
            <label for="">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Masukan Password Anda">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Reset">
            <a href="{{ url()->previous() }}" class=" btn btn-info">Kembali</a>
        </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @include('inc.js')
</body>
</html>

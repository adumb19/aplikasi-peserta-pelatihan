@php
    function isActive($status){
        switch ($status) {
          case 1:
            $display = 'Aktif';
            break;
          default:
            $display = 'Tidak Aktif';
            break;
        }
        return $display;
      }
@endphp
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
            <h1 class="m-0">Gelombang</h1>
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
    <div class="table-responsive">
      <div align='right' class="mb-3">
        <a href="{{ route('gelombang.create') }}" class="btn btn-primary">Tambah Data</a>
      </div>
        <table class="table table-bordered" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Gelombang</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_gelombang }}</td>
                    <td>{{ isActive($d->status) }}</td>
                    <td>
                      <a href="{{ route('gelombang.edit', $d->id) }}" class="btn btn-ss bg-success"><i class="fas fa-edit"></i></a>
                      <form action="{{ route('gelombang.destroy', $d->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-ss bg-danger"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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

@php
    function statusPeserta($status) {
      switch ($status) {
        case 1:
          $pesan = "Lolos Sortir";
          break;
        case 2:
          $pesan = "Lolos Wawancara";
          break;
        case 3:
          $pesan = "Lolos Seleksi";
          break;
        
        default:
          $pesan = "Tidak Lolos";
          break;
      }
      return $pesan;
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
            <h1 class="m-0">Peserta</h1>
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
        <table class="table table-bordered" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Gelombang</th>
                    <th>Tahun</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Handphone</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->jurusan->nama_jurusan }}</td>
                    <td>{{ $item->gelombang->nama_gelombang }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->pendidikan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ statusPeserta($item->status) }}</td>
                    <td>
                      <a href="">Ubah</a>
                      <a href="">Hapus</a>
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

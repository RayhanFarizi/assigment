@extends('layout.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Hi, Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="main">
        <div class="row">
          <!-- ./col -->
          
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jumlah_user}}</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-arrow-circle-bottom"></i></a>
              <a class="small-box-footer"><i class="fas fa-arrow-circle-bottom"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_member}}</h3>
                <p>Total member</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-arrow-circle-bottom"></i></a>
              <a class="small-box-footer"><i class="fas fa-arrow-circle-bottom"></i></a>
            </div>
          </div>
         
          <div class="col-12 col-sm-6 col-md-5">
            <div class="one">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">laki - laki</span>
                <span class="info-box-number">{{$jumlah_laki}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>
            <!-- /.info-box -->
            <div class="two">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">perempuan</span>
                <span class="info-box-number">{{$jumlah_girl}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <div class="body">
    <div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="q" value="{{ $q}}" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>Gender</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($rows as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama_user }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->level }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('user.edit', $row) }}">Edit</a>
                    <form method="POST" action="{{ route('user.destroy', $row) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
    </div>
<style>
  .body {
    padding-left: 100px;
    padding-right: 100px;
    padding-bottom: 100px;
  }
  .main {
    padding-left: 100px; 
  }
 
  
  

</style>
</div>
    <!-- /.content-header -->

@endsection






















@extends('layout.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Users</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">User Create</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <div class="body">
      <div class="row" >
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
              @endforeach
              @endif
              <form action="{{ route('user.store') }}" method="POST">
                @csrf
                  <div class="form-group">
                      <label>Nama User <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}" />
                  </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                    </div>
                      <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password" />
                      </div>
                        <div class="form-group">
                          <label>gender <span class="text-danger">*</span></label>
                          <select class="form-control" name="gender" />
                          @foreach($genders as $key => $val)
                          @if($key==old('gender'))
                          <option value="{{ $key }}" selected>{{ $val }}</option>
                          @else
                          <option value="{{ $key }}">{{ $val }}</option>
                          @endif
                          @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Level <span class="text-danger">*</span></label>
                        <select class="form-control" name="level" />
                        @foreach($levels as $key => $val)
                        @if($key==old('level'))
                        <option value="{{ $key }}" selected>{{ $val }}</option>
                        @else
                        <option value="{{ $key }}">{{ $val }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>
                        <div class="form-group">
                          <button class="btn btn-primary">Simpan</button>
                          <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
                          </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
            <style>
              .body {
                padding-left: 100px;
              }
            </style>
    </div>
    <!-- /.content-header -->
@endsection


@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Pegawai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Pegawai</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.pegawai.update', ['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Edit Pegawai</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputNama1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputNama1" value="{{ $data->name }}" name="nama" placeholder="Enter Name">
                            @error('nama')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputnip1">Nip</label>
                            <input type="number" class="form-control" name="nip" value="{{ $data->nip }}" id="exampleInputnip1" placeholder="nip">
                            @error('nip')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputemail1">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $data->email }}" id="exampleInputemail1" placeholder="Enter email">
                            @error('email')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputaddress1">Alamat</label>
                            <textarea  class="form-control" name="address"  id="exampleInputaddress1" placeholder="Enter address">{{ $data->address }}</textarea>
                            @error('address')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputimage1">Foto</label>
                            <input type="file" class="form-control" name="image" value="{{ $data->iamge }}" id="exampleInputimage1" placeholder="Enter profil">
                            @error('image')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
        
                  </div>
                  <!--/.col (left) -->
                </div>

            </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>
@endsection
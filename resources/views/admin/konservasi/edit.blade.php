@extends('layouts.admin.app')

@section('title', 'Edit Konservasi')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Konservasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{ route('konservasi.update', $konservasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="nama_kegiatan">Nama Kegiatan</label>
              <input type="text" name="nama_kegiatan" class="form-control" value="{{ $konservasi->nama_kegiatan }}">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" class="form-control">{{ $konservasi->keterangan }}</textarea>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" class="form-control">
              <img src="{{ asset('konservasi/' . $konservasi->gambar) }}" class="img img-fluid mt-2" alt="">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

@endsection

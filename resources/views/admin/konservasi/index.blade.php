@extends('layouts.admin.app')

@section('title', 'Konservasi')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>Kegiatan</th>
                  <th>keterangan Lanjut</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($konservasi as $item)
                    <tr>
                      <td><img class="img img-fluid" src="{{ asset('konservasi/' . $item->gambar) }}" alt=""></td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->keterangan }}</td>
                      <td>{{ $item->gambar }}</td>
                      <td>
                        <a href="{{ route('konservasi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('konservasi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                      </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
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

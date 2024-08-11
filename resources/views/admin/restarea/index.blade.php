@extends('layouts.admin.app')

@section('title', 'Restarea')

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
                <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>Type</th>
                  <th>Rest Area</th>
                  <th>keterangan Lanjut</th>
                  <th>Action</th>
                </thead>
                <tbody>
                @foreach($restarea as $item)
                    <tr>
                      <td><img class="img img-fluid" src="{{ asset('restarea/' . $item->gambar) }}" alt=""></td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->type->nama }}</td>
                      <td>{{ $item->keterangan }}</td>
                      <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
                </tfoot>
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
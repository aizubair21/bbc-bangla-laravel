@extends('back_end.app');
@section('content')
    <div class="alert alert-info">All Cat</div>
    <div >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Category</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All Category Data</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Sl </th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created by</th>
                        <th>Post Count</th>
                        <th>Action</th>
                      </tr>
                      </thead>

                      <tbody>
                      @foreach ($category as $key => $item)
                        <tr>
                          <td> {{ ++$key }}</td>
                          <td> {{ $item->name }}</td>
                          <td> {{ $item->slug }}</td>
                          <td> {{ $item->author_name }}</td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-danger">
                              <div class="fas fa-trash" ></div>
                            </a>
                            <a href="#" class="btn btn-primary">
                              <div class="fas fa-pen"></div>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>

                      <tfoot>
                      <tr>
                        <th>{{ $category->count()}}</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th></th>
                        <th>CSS grade</th>
                      </tr>
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
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
@endsection
@extends('back_end.app');
@section('content')
    <div class="alert alert-info">Category</div>
    <div >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                @if(session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('status') }}
                      <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
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
                    @if($category->count() < 1 )
                      <div class="alert alert-warning p-3 w-100 text-align-center">No Category Were Found !</div>
                    @else 
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
                          <td> {{ $item->user->user_name }}</td>
                          <td> P
                            {{ 
                                $post->where('category',$item->id)->count();
                            }}
                          </td>
                          <td>
                            <a href="{{ route('category.delete', $item->id) }}" class="btn btn-danger">
                              <div class="fas fa-trash" ></div>
                            </a>
                            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">
                              <div class="fas fa-pen"></div>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>

                      <tfoot>
                      <tr>
                        <th colspan="5">

                        </th>
                        <th> Total : {{ $category->count()}}</th>
                      </tr>
                      </tfoot>

                    </table>
                    @endif
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
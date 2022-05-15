@extends('back_end.app');
@section('content')
<div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Post</a></li>
              <li class="breadcrumb-item active">All post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All post</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Sl </th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Image Caption</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach ($post as $key => $item)
                    <tr>
                      <td> {{ ++$key }}</td>
                      <td> {{ $item->title }}</td>
                      <td> {{ 
                        
                        $item->description
                        
                        }}</td>
                      <td> {{ $item->category }}</td>
                      <td> {{ $item->iamge }}</td>
                      <td> {{ $item->iamge_caption }}</td>
                      <td>
                       <div class="d-flex justify-content-evenly align-items-center">
                          {{-- <form action="{{ route('post.destroy', $item->id) }}" method="DELETE" style="margin: 0">
                            @csrf
                              <button type="submit" class="btn btn-danger"><i class="fas fa-trash" ></i></button>
                           </form> --}}
                          <a href="{{ route('post.destroy', $item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          <a href=" {{ route('post.edit', $item->id) }}" class="btn btn-primary">
                            <i class="fas fa-pen"></i>
                          </a>
                       </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>

                  <tfoot>
                  <tr>
                    <th>Total Count : {{ $post->count() }}</th>
                    <td colspan=""></td>
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
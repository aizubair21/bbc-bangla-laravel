@extends('back_end.app');
@section('content')

        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="alert alert-info p-3">Category</div>
    <div class="row p-3">
        <div class="col-6">
            <div class="bg-primary text-white text-align-center p-3 font-middle">
                Add New Category
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data"> 
                        @csrf

                        <div class="input-grou mb-3">
                            <div class="d-block mb-3 ">
                                <label for="name">Category Name :</label>
                                <input type="text" name="name" id="name" placeholder="category name" autofocus class="form-control form-input @error('name') is-invalid @enderror">
                                <div>
                                    @error('name')
                                        <strong class="text text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-block mb-3">
                                <label for="sug">Category Slug :</label>
                                <input type="text" name="slug" id="slug" placeholder="category slug" autofocus class="form-control form-input @error('slug') is-invalid @enderror">
                                <div>
                                    @error('slug')
                                        <strong class="text text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('category.index') }}" class="btn btn-danger">
                                <i class="fas fa-xmark"></i>
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fab fa-telegram-plane pe-2"></i>
                                Add Category
                            </button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
        <div class="col-5" style="height: 80vh; overflow:scroll">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">Total : </td>
                            <td  style="txt-align:right">{{$categories->count()}}</td>
                        </tr>
                        <thead>
                            <tr>
                                <th>SL : </th>
                                <th>Name : </th>
                                <th>Action : </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
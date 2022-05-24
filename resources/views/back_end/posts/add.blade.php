@extends('back_end.app')
@section('content')
{{-- summer note  --}}
<head>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>

    <div>
        <style>
            body {
                overflow-x: hidden;
            }
            .container {
                background-color: rgba(0,0,0, .1);
                
            }
            label {
                font-weight: 800;
            }
            /* .form-input {
            } */
            .section {
                padding: 5px;
                margin: 5px 0px;;
            }
        </style>
            <div class="breadcrumb my-3">
                Post
            </div>
        <div class="container" style="padding:10px">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card mt-3">
                <div class="card-body">
                    @if($category->count() < 1)
                        <div class="alert alert-warning w-70 p-3 text-align-center d-inline">No Category Found. <br> Please add altest one category to create post</div>
                        <a href="{{ route('category.create') }}" class="d-inline btn btn-primary p-3 text-align-center">
                            Add Category
                        </a>
                    @else
                    <div class="card">
                        <div class="bg-primary text-white p-2">
                            Add Post
                        </div>
                        <div class="card-body">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="section">
                                    <label for="title" class="form-label">Post Title :</label>
                                    <input type="text" name="title" id="title" placeholder="Your Post Title...." class="form-input form-control" required>
                                    <div class="form-text text text-info">Give a unique post title. </div>
                                </div>
        
                                <div class="section">
                                    <label  class="form-label" for="Category">Category :</label>
                                    <select name="category" id="catefory" class="form-control" required>
                                        <option value="0" >Select Your Category</option>
                                        @foreach ($category as $key => $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>   
                                        @endforeach
                                    </select>
                                    <div class="form-text text text-info">Give a category name. It is required to find it easily.</div>
                                </div>
        
        
                                <div class="section">
                                    <label for="summernote" class="form-label">Description :</label>
                                    <strong class="form-text text text-info">Fully descrive your post.</strong>
                                    <textarea class="table-input form-control" name="description" id="summernote" cols="30" rows="10" placeholder="Post Descripton......." style="text-indent: 5px; padding:2px;" required></textarea>
                                </div>
        
                                <div class="mb-3">
                                    <div class="section">
                                        <label class="form-label" for="post_image">Post Image :</label>
                                        <input type="file" name="image" id="post_image" class="form-input form-file form-control">
                                    </div>
                                    <div class="section" >
                                        <label class="form-label" for="image_caption">Imapge Caption :</label>
                                        <input type="text" name="caption" id="image_caption" class="form-control form-input" placeholder="This is lorem image">
                                    </div>
        
                                    <div>
                                        <label for="video" class="form-label"> Post Video :</label>
                                        <input type="file" name="video" id="video" class="form-control form-input" placeholder="Video Related Post...">
                                    </div>
                                </div>
        
                                <div class="d-flex justify-content-between aign-items-baseline pt-10">
                                    <input type="submit" class="btn btn-primary pe-3" value="Add Post" style="float:right">
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Your Post Content..........',
            tabsize: 2,
            height: 250
        });
        </script>
@endsection
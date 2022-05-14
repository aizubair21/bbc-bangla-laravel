@extends('back_end.app')
@section('content')
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
        <div class="container" style="padding:10px">
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                       
                        <div class="card-body">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="section">
                                    <label for="title" class="form-label">Post Title :</label>
                                    <input type="text" name="title" id="title" placeholder="Your Post Title...." class="form-input form-control" required>
                                </div>
    
                                <div class="section">
                                    <label  class="form-label" for="Category">Category :</label>
                                    <select name="category" id="catefory" class="form-control" required>
                                        <option value="0" >Select Your Ctegory</option>
                                          @foreach ($category as $key => $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>   
                                          @endforeach
                                    </select>
                                </div>
    
    
                                <div class="section">
                                    <label for="description" class="form-label">Description :</label>
                                    <textarea class="table-input form-control" name="description" id="description" cols="30" rows="10" placeholder="Post Descripton......." style="text-indent: 5px; padding:2px;" required></textarea>
                                </div>
    
                                <div class="mb-3">
                                    <div class="section">
                                        <label class="form-label" for="post_image">Post Image :</label>
                                        <input type="file" name="image" id="post_image" class="form-input form-control">
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
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection
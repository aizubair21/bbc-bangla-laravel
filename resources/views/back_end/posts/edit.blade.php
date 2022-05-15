@extends('back_end.app')
@section('content')
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
                    @foreach ($post as $posts)
                    <form action="{{ route('post.update',$posts->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="section">
                            <label for="title" class="form-label">Post Title :</label>
                            <input type="text" name="title" id="title" value="{{  $posts->title ?? old('title') }}" class="form-input form-control" required>
                        </div>

                        <div class="section">
                            <label  class="form-label" for="Category">Category :</label>
                            <select name="category" id="catefory" class="form-control" required>
                                <option value="0" >Select Your category</option>
                                  @foreach ($category as $key => $item)
                                    <option value="{{ $item->name }}" @if($item->name == $posts->category) selected @endif>{{ $item->name }}</option>   
                                  @endforeach
                            </select>
                        </div>


                        <div class="section">
                            <label for="description" class="form-label">Description :</label>
                            <input type="text" class="form-input form-control" value="{{$posts->description}}" name="description" id="description" style="text-indent: 5px; padding:2px;" required>
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
                            <input type="submit" class="btn btn-primary pe-3" value="Update" style="float:right">
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
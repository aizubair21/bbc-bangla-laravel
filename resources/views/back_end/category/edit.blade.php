@extends('back_end.app');
@section('content')
    <div class="container">
        {{-- @foreach ($category as $key => $category) --}}
       <div class="row">
           <div class="col-2"></div>
           <div class="col-6">
               <div class="card" style="margin-top: 10px">
                    <div class="w-100 bg-primary text-white p-3" style="font-weight: 800; font-size:20px;">
                        Edit category
                    </div>
                   <div class="card-body">
                       <style>

                           input{
                               padding-bottom: 3px;

                           }
                       </style>
                        <form action="{{ route('category.update', $category->id) }}" method="patch" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div>
                                <label for="name" class="form-label">Name :</label>
                                <input type="text" name="name" id="name" placeholder="Cat Name" value="{{ $category->name ?? old('name') }}" class="form-input form-control @error('name') is-invalid @enderror">
                                <div>
                                    @error('name')
                                        <strong class="text text-danger"> {{ $message }} </strong>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" id="slug" value="{{ $category->slug ?? old('slug') }}" class="form-input form-control @error('slgu') is-invalid @enderror">
                                <div>
                                    @error('slug')
                                        <strong class="text text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="author_name" class="form-label">Created By :</label>
                                <select name="author_name" id="author_name" class="form-control form-select" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if($user->id == $category->author) selected @endif> {{ $user->user_name }} </option>   
                                    @endforeach
                                </select>
                                <div>
                                    @error('author_name')
                                        <strong class="text text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="old_name" value="{{ $category->name }}">
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                   </div>
               </div>
           </div>
           <div class="col-4"></div>
       </div>
        {{-- @endforeach --}}
    </div>
@endsection;
@extends('back_end.app');
@section('content');
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('image_test') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="image">Upload Your Image :</label>
                        <input type="file" name="image" id="image" class=" form-control"><br>
                        <button type="submit">Submit</button>
                    </form>
                
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
@endsection
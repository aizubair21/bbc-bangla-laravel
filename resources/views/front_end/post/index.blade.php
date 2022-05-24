@extends('front_end.app')
@section('content')
<div class="container">
    <div class="content-body d-flex justify-content-evenly alitn-items-center">
        <div class="content" style="width:70%; border:1px solid red; padding:3px; margin-top:20px padding:5px;">
            <div class="pb-5">
                <img width="100%" height="auto" src="images/{{ $latestPost->image }}" alt="Image Not Found">
            </div>
        </div>

        <div class="right-sidebar" style="width: 25%; border:1px solid green; padding:3px; margin-top:20px">
            <div class="catender">
                <h3>Catender</h3>
                <ul class="list">
                    <li>A</li>
                    <li>A</li>
                    <li>A</li>
                    <li>A</li>
                    <li>A</li>
                    <li>A</li>
                    <li>A</li>
                </ul>
            </div>

            <div class="Category">
                <h3>Category</h3>
                <ul>
                    <li>CAT</li>
                    <li>CAT</li>
                    <li>CAT</li>
                    <li>CAT</li>
                    <li>CAT</li>
                    <li>CAT</li>
                </ul>
            </div>

            <div class="latestPost">
                <h3>latest post</h3>
            </div>



        </div>
    </div>
</div>    
@endsection
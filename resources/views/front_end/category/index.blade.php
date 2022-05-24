@extends('front_end.app')
@section('content')
<section id="top-news-two">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                <a href="#">
                    <img class="col-xm-4 w-100"  src="images/{{ $latestPost->image }}" alt="BBC" class="col-xm-3">
                    <div class="col-sm-8"> 
                        <h2>{{ $latestPost->title }}</h2><br>
                        <span>২ ঘন্টা আগে</span><hr>
                        <div>{!! $latestPost->description !!}</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>    
@endsection
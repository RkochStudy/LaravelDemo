@extends('shared.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Learning Laravel</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="{{route('blog.post',['id'=>1])}}">Read more...</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">The next steps</h1>
            <p>Undestanding the basis it's ok but you need to be able to make the next steps</p>
            <p><a href="{{route('blog.post',['id'=>2])}}">Read more...</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Landing on Mars</h1>
            <p>I'm the spaceship that lands on Mars</p>
            <p><a href="{{route('blog.post',['id'=>3])}}">Read more...</a></p>
        </div>
    </div>
@endsection

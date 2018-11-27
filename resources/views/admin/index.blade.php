@extends('shared.master')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <a href="{{route('admin.create')}}}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Learning Laravel</strong><a href="{{route('admin.edit')}}">Edit</a></p>
        </div>
    </div>
@endSection()

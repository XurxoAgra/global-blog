@extends('main')
@section('title', $post->title)
@section('subtitle', '#'.$post->id . ' created at: ' . $post->created_at)

@section('content')
    <div class="col-12">
        <div class="post-image">
            <img src="{{$post->image}}" alt="">
        </div>
        <div class="post-body">
            <p class="text-left">{{$post->body}}</p>
        </div>
    </div>
@endsection
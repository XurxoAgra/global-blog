@extends('main')
@section('title', $post->title)
@section('subtitle', 'Show the recent posts: '.$post->id)

@section('content')
    <div class="post-body">
        <p>{{$post->body}}</p>
    </div>
@endsection
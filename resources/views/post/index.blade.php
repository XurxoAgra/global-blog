@extends('main')

@section('title', 'Recent Posts!')
@section('subtitle', 'Show the recent posts')

@section('content')
    @foreach ($posts as $post)
    <div class="col-sm-3 post-column">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">#{{$post->id}} {{$post->title}}</h5>
                <p class="card-text">{{ substr($post->body, 0, 50) }}...</p>
                <small>Created at: {{$post->created_at}}</small>
                <a href="{{ route('web.posts.view', $post->id) }}" class="btn btn-primary">Show</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection
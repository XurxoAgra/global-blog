@extends('main')

@section('title', 'Recent Posts')
@section('subtitle', 'Show the recent posts')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th>
                    <p>{{ $post->id}}</p>
                </th>
                <th>
                    <p>{{ $post->title }}</p>
                </th>
                <th>
                    <p>{{ substr($post->body, 0, 50) }}...</p>
                </th>
                <th>
                    <a href="{{ route('web.posts.view', $post->id) }}" type="button" class="btn btn-primary">Show</a>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
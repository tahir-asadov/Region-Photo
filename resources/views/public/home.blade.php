@extends('layouts.public')

@section('body_class', 'home')

@section('title', 'Region Photo - Register')

@section('content')

<div class="posts">
  @foreach ($posts as $post)
  <div>

    <a class="post_link" href="{{$post->path()}}"><img src="{{$post->thumbnail()}}" alt=""></a>
    <h2><a href="{{$post->path()}}">{{$post->title}}</a></h2>
    <div class="info">
      <div>Region: <a href="/r/{{$post->region->slug}}">{{$post->region->title}}</a></div>
      <div>Author: <a href="/u/{{$post->user->id}}">{{$post->user->name}}</a></div>
    </div><!-- .info -->
  </div>
  @endforeach
</div><!-- .posts -->
<div class="pagination">
  {{ $posts->links('vendor.pagination.default') }}
</div><!-- .pagination -->
@endsection

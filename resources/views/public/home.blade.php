@extends('layouts.public')

@section('content')

<div class="posts">
  @foreach ($posts as $post)
  <div>

    <a class="post_link" href="#"><img src="{{$post->thumbnail()}}" alt=""></a>
    <h2><a href="#">{{$post->title}}</a></h2>
    <div class="info">
      <div>Region: <a href="/r/{{$post->region->slug}}">{{$post->region->title}}</a></div>
      <div>Müəllif: <a href="/u/{{$post->user->id}}">{{$post->user->name}}</a></div>
    </div><!-- .info -->
  </div>
  @endforeach
</div><!-- .posts -->
<div class="load_more flex-center p-25">
  <span class="button more">Load more</span>
</div><!-- .load_more -->
@endsection

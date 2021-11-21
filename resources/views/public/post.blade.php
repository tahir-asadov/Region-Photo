@extends('layouts.public')

@section('body_class', 'post')

@section('title', 'Region Photo - ' . $post->title)

@section('content')

<div class="single_post">
  <div class="left">
    <h1>{{$post->title}}</h1>
    <div class="post_info">
      <div><b>Date: </b><a href="#">{{$post->created_at}}</a></div>
      <div><b>Author: </b><a href="#">{{$post->user->name}}</a></div>
      <div><b>Region: </b><a href="#">{{$post->region->title}}</a></div>
      <div><b>City: </b><a href="#">{{$post->city->title}}</a></div>
      <div><b>Village: </b><a href="#">{{$post->village->title ? $post->village->title : '-'}}</a></div>
    </div><!-- .post_info -->
    <div class="post_gallery">
      @foreach ($post->galleries as $gallery)
      <div>
        <img src="{{str_replace('public', '', $gallery->path)}}" alt="">
      </div>
      @endforeach
    </div><!-- .post_gallery -->
  </div><!-- .left -->
  <div class="right">
    <img src="{{str_replace('public', '', $post->galleries->first()->path)}}" alt="">
  </div><!-- .right -->
</div><!-- .single_post -->
@endsection
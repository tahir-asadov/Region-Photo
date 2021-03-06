@extends('layouts.admin')

@section('content')
  <div class="mb-2 d-flex justify-content-end">
    <a href="{{route('post.create')}}" class="btn btn-success">New post</a>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Region</th>
        <th>City</th>
        <th>Village</th>
        <th>User</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->slug }}</td>
        <td>{{ $post->region->title }}</td>
        <td>{{ $post->city->title }}</td>
        <td>{{ $post->village->title }}</td>
        <td>{{ $post->user->name }}</td>
        <td><a href="{{route('post.edit', ['post' => $post->id])}}">Edit</a></td>
        <td>
          <form action="{{route('post.destroy', ['post' => $post->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
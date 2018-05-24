@extends('layouts.admin')



@section('content')

<h1>Posts</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        
        <th>Title</th>
        <th>Subtitle</th>
        <th>Excerpt</th>
        <th>Author</th>
        <th>Content</th>
        <th>Post Link</th>
        <th>Comments</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>


      @if($posts)  

        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/50x50'}} " alt=""></td>
                <td><a href="{{route('admin.posts.edit',  $post->id)}}">{{ $post->user->name}}</a></td>
                <td>{{$post->category ? $post->category->name : 'No Category Assigned'}}</td>
                
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->excerpt}}</td>
                <td>{{$post->author}}</td>
                <td>{{str_limit($post->content, 30)}}</td>
                <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>

                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
      
        @endforeach

    @endif

    </tbody>
  </table>

@stop
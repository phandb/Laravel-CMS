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
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>


      @if($posts)  

        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->excerpt}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
      
        @endforeach

    @endif

    </tbody>
  </table>

@stop
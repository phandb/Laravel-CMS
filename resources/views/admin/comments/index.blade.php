@extends('layouts.admin')




@section('content')


@if(count($comments) > 0)


<h1>Comments</h1>
<table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Author</th>                        
            <th>email</th>
            <th>Body</th>
            <th>Post</th>
          </tr>
        </thead>
        <tbody>


          
    
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                                     
                    <td>{{$comment->author}}</a></td>
                                      
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td><a href="{{route('home.post', $comment->post->id)}}">View Post</a></td>
                </tr>
          
            @endforeach
    
       
    
        </tbody>
      </table>
      @else
        <h1 class="text-center">No Comments</h1>
      @endif

@stop
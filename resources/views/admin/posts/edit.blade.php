@extends('layouts.admin')



@section('content')

@include('includes.tinyeditor')
<style>
    #mceu_39{
        display: none;
    }
</style>

<h1>Edit Post</h1>



<div class="row">
        <div class="col-sm-3">

                <img src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="" class="img-responsive img-rounded">
        
        </div>
         <div class="col-sm-9">
        {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'file'=>true]) !!}
            <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('subtitle', 'Subtitle:') !!}
                    {!! Form::text('subtitle', null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('excerpt', 'Excerpt:') !!}
                    {!! Form::text('excerpt',  null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('author', 'Author:') !!}
                    {!! Form::text('author',  null, ['class'=>'form-control']) !!}
                </div>

                
                
                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    
                    {!! Form::select('category_id',  $categories, null, ['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                
                
                <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::textarea('content',  null, ['class'=>'form-control', 'row'=>3]) !!}
                </div>
                
                
                
                <div class="form-group">
                    
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-2' ])!!}
                </div>
            
        {!! Form::close() !!}


            <!----Add Delete button------------------------>
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

                <div class="form-group">

                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-2 pull-right']) !!}
                </div>

        {!! Form::close() !!}

         </div>

</div>

   
<div class="row">
     @include('includes.form_error')

</div>




 


@stop
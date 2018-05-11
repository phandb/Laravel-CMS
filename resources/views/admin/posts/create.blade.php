@extends('layouts.admin')



@section('content')

<h1>Create Post</h1>

<div class="row">

{!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'file'=>true]) !!}
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
        
        {!! Form::select('category_id', array('0' => 'Advent', '1'=>'Christmas'), null, ['class'=>'form-control']) !!}
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
        
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    </div>
    
    {!! Form::close() !!}

</div>
<div class="row">
     @include('includes.form_error')

</div>



@stop
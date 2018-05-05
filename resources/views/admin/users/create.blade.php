@extends('layouts.admin')



@section('content')

<h1>Create Users</h1>
{!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files' => true]) !!}
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', ['' => 'Choose Option'] + $roles, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('is_active', 'Status:') !!}
    <!--Set status either active or not active with default of not active-->
    {!! Form::select('is_active', array(1 => 'Acive', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('file', 'Choose File:') !!}
    {!! Form::file('file', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    
    {!! Form::password('password',  ['class'=>'form-control']) !!}
</div>





<div class="form-group">
    
    {!! Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
</div>

{!! Form::close() !!}

<!--We create form error and save in resources/views/includes folder under file
    name form_error.blade.php-->
@include('includes.form_error')


@stop
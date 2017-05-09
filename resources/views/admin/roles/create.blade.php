@extends('layouts.admin')
@section('content')
    <h1>Create Role</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminRolesController@store']) !!}
    <div class="form-group">
        {!! Form::label('name','Role Title:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Role',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.form_error');
    @stop
@extends('layouts.admin')
@section('content')
    <h1>Edit Role</h1>
    {!! Form::model($role,['method'=>'PATCH','action'=>['AdminRolesController@update',$role->id]]) !!}
    <div class="form-group">
        {!! Form::label('name','Role Title:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Role',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE','action'=>['AdminRolesController@destroy',$role->id]]) !!}
    {!! Form::submit('Delete Role',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    @stop
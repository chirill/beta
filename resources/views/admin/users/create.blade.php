@extends('layouts.admin')
@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('username','Username:') !!}
        {!! Form::text('username',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','Status:') !!}
        {!! Form::select('status',[ 1 => 'Active', 0 => 'Not active'],0,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=>'Choose role'] + $roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location_id','Location:') !!}
        {!! Form::select('location_id',[''=>'Choose Location'] + $locations,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Username',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('includes.form_error');
    @stop
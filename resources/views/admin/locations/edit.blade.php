@extends('layouts.admin')
@section('content')
    <h1>Edit Location</h1>
    {!! Form::model($location,['method'=>'PATCH','action'=>['AdminLocationsController@update',$location->id]]) !!}
    <div class="form-group">
        {!! Form::label('name','Location Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('street','Street:') !!}
        {!! Form::text('street',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone','Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fax','fax:') !!}
        {!! Form::text('fax',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Location',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['AdminLocationsController@destroy',$location->id]]) !!}
    {!! Form::submit('Delete Location',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

    @stop
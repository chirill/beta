@extends('layouts.admin')
@section('content')
    <h1>Add Location</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminLocationsController@store']) !!}
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
        {!! Form::submit('Create Location',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @stop
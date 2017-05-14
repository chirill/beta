@extends('layouts.admin')
@section('content')
    <h1>Add PC for broker</h1>
    {!! Form::open(['method'=>'POST','action'=>'BrokerCompsController@store']) !!}
    <div class="form-group">
        {!! Form::label('name','Computer Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('os','Operating system:') !!}
        {!! Form::text('os',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('owner','Owner:') !!}
        {!! Form::text('owner',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('teamviewer','Teamviewer ID:') !!}
        {!! Form::number('teamviewer',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('detalii','Detalii:') !!}
        {!! Form::text('detalii',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location_id','Location:') !!}
        {!! Form::select('location_id',[''=>'Choose Location']+$locations,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Computer',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @stop
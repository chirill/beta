@extends('layouts.admin')
@section('content')
    <h1>Edit PC for broker</h1>
    {!! Form::model($comp,['method'=>'PATCH','action'=>['BrokerCompsController@update',$comp->id]]) !!}
    <div class="form-group">
        {!! Form::label('name','Role Title:') !!}
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
        {!! Form::submit('Update Computer',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['BrokerCompsController@destroy',$comp->id]]) !!}
    {!! Form::submit('Delete Computer',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop
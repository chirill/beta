@extends('layouts.admin')
@section('content')
    <h1>Edit Printer</h1>
    {!! Form::model($printer,['method'=>'PATCH','action'=>['AdminPrintersController@update',$printer->id],'files'=>true,]) !!}
    <div class="form-group">
        {!! Form::label('name','Printer Name/Model:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ip','Printer IP:') !!}
        {!! Form::text('ip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location_id','Location:') !!}
        {!! Form::select('location_id',[''=>'Choose Location'] + $locations,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('localizare','Location on the floor:') !!}
        {!! Form::text('localizare',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('user','User:') !!}
        {!! Form::text('user',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Pass:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('path','Drivers:') !!}
        {!! Form::file('path',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Update Printer',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE','action'=>['AdminPrintersController@destroy',$printer->id]]) !!}
    {!! Form::submit('Delete Printer',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop
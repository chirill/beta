@extends('layouts.admin')
@section('content')
    <h1>Show Printer</h1>
    {{$printer->id}}<br>
    {{$printer->name}}<br>
    {{$printer->ip}}<br>
    {{$printer->location_id?$printer->location->name:'location not defined'}}



    @stop
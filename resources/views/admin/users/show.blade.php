@extends('layouts.admin')
@section('content')
    <h1>{{$user->name}}</h1>
    <h2>Username: {{$user->username}}</h2>
    <p>Email: {{$user->email}}</p>
    @stop
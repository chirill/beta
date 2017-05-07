@extends('layouts.admin')
@section('content')
    <h1>Role</h1>
    <div style="padding-top: 50px;">
        <p class="text-primary"><strong>{{$role->name}}</strong></p>
    </div>
    @foreach($role->users as $user)
        <a href="{{route('users.show',$user->id)}}">{{$user->name}}</a><br>
    @endforeach


    @stop
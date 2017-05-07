@extends('layouts.admin')
@section('content')
    <h1>Roles</h1>
    @if(count($roles)>=1)
    <table class='table'>
        <thead>
            <tr>
                <th>id</th>
                <th>Role name</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td><a href="{{route('roles.show',$role->id)}}">{{$role->name}}</a></td>
                <td><a href="{{route('roles.edit',$role->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <br><br>
    <h2>no roles defined</h2>
    @endif

    @stop
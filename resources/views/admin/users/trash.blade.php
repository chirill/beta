@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    @if(count($users)>=1)
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Location</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Restore</th>
                <th>Restore</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->location_id?$user->location->name:'No location assigned'}}</td>
                    <td>{{$user->role_id?$user->role->name:'No role assigned'}}</td>
                    <td>{{$user->status==1?'active':'not active'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->deleted_at}}</td>
                    <td><a href="/admin/users/restore/{{$user->id}}">Restore</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <br>
        <h2>No users to display</h2>
    @endif

@stop
@extends('layouts.admin')
@section('content')
    <h1>deleted roles</h1>
    @if(count($roles)>=1)
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Role Name</th>
                <th>Created</th>
                <th>Deteled at</th>
                <th>Restore</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->created_at}}</td>
                    <td>{{$role->deleted_at}}</td>
                    <td><a href="/admin/roles/restore/{{$role->id}}">Restore</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <br>
        <h2>No roles to display</h2>
    @endif

@stop
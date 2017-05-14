@extends('layouts.admin')
@section('content')
    <h1>Show Location</h1>
    <h2>{{$location->name}}</h2>
    <h3>{{$location->street}} - {{$location->phone}} - {{$location->fax}}</h3>
    <div class="row">
        <div class="col-md-3">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>role</th>
                </tr>
                </thead>
                <tbody>
                @foreach($location->users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->role_id?$user->role->name:'role not set'}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if(count($location->printers)>=1)
        <div class="col-sm-4">
            <table class='table'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Printer Name</th>
                        <th>IP</th>
                        <th>Amplasare</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($location->printers as $printer)
                    <tr>
                        <td>{{$printer->id}}</td>
                        <td>{{$printer->name}}</td>
                        <td>{{$printer->ip}}</td>
                        <td>{{$printer->localizare}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>








    @stop
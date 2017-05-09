@extends('layouts.admin')
@section('content')
    <h1>Printers</h1>
    @if(count($printers)>=1)
    <table class='table'>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>location</th>
                <th>Amplasare</th>
                <th>ip</th>
                <th>user</th>
                <th>parola</th>
                <th>driver</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach($printers as $printer)
            <tr>
                <td>{{$printer->id}}</td>
                <td><a href="{{route('printers.show',$printer->id)}}">{{$printer->name}}</a></td>
                <td>{{$printer->location_id?$printer->location->name:'location not defined'}}</td>
                <td>{{$printer->localizare}}</td>
                <td>{{$printer->ip}}</td>
                <td>{{$printer->user}}</td>
                <td>{{$printer->password}}</td>
                <td><a href="{{$printer->path}}">download driver</a></td>
                <td><a href="{{route('printers.edit',$printer->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <h2>No printers defined</h2>
    @endif
    
    
    
    
    @stop
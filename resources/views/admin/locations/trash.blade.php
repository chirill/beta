@extends('layouts.admin')
@section('content')
    <h1>Locations</h1>
    @if(count($locations)>=1)
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Street</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Deleted at</th>
                <th>Restore</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
                <tr>
                    <td>{{$location->id}}</td>
                    <td><a href="{{route('locations.show',$location->id)}}">{{$location->name}}</a></td>
                    <td>{{$location->street}}</td>
                    <td>{{$location->phone}}</td>
                    <td>{{$location->fax}}</td>
                    <td>{{$location->deleted_at}} ({{$location->deleted_at->diffForHumans()}})</td>
                    <td><a href="{{route('locations.restore',$location->id)}}">Restore</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2>No locations found</h2>
    @endif

@stop
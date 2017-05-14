@extends('layouts.admin')
@section('content')
    <h1>Locations</h1>
    @if(count($locations)>=1)
    <table class='table table-hover'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Street</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)

            @if (!stristr($location->name,'raif'))
            <tr>
                <td>{{$location->id}}</td>
                <td><a href="{{route('locations.show',$location->id)}}">{{$location->name}}</a></td>
                <td>{{$location->street}}</td>
                <td>{{$location->phone}}</td>
                <td>{{$location->fax}}</td>
                <td><a href="{{route('locations.edit',$location->id)}}">Edit</a></td>
            </tr>
            @else
                @php $raif[]=$location;  @endphp
                @endif
        @endforeach
        </tbody>
    </table>
    @else
    <h2>No locations found</h2>
    @endif


    @if(count($raif>0))
        <h2>Locatii/echipe Raiff</h2>
        <table class='table table-hover'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Street</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
        @foreach($raif as $raf)
            <tr>
                <td>{{$raf->id}}</td>
                <td><a href="{{route('locations.show',$raf->id)}}">{{$raf->name}}</a></td>
                <td>{{$raf->street}}</td>
                <td>{{$raf->phone}}</td>
                <td>{{$raf->fax}}</td>
                <td><a href="{{route('locations.edit',$raf->id)}}">Edit</a></td>
            </tr>
    @endforeach
            </tbody>
        </table>
    @endif
    @stop
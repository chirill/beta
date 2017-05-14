@extends('layouts.admin')
@section('content')
    <h1>All Broker Staff</h1>

    {{--@if(count($comps)>=1)--}}
        {{--<h3>PC broker</h3>--}}
    {{--<table class='table'>--}}
        {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>id</th>--}}
                {{--<th>Name comp</th>--}}
                {{--<th>Operation System</th>--}}
                {{--<th>Owner</th>--}}
                {{--<th>teamviewer id</th>--}}
                {{--<th>Detalii</th>--}}
                {{--<th>Location</th>--}}
                {{--<th>Edit</th>--}}
            {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($comps as $comp)--}}
            {{--<tr>--}}
                {{--<td>{{$comp->id}}</td>--}}
                {{--<td>{{$comp->name}}</td>--}}
                {{--<td>{{$comp->os}}</td>--}}
                {{--<td>{{$comp->owner}}</td>--}}
                {{--<td>{{$comp->teamviewer}}</td>--}}
                {{--<td>{{$comp->detalii}}</td>--}}
                {{--<td>{{$comp->location_id?$comp->location->name:'no location set'}}</td>--}}
                {{--<td><a href="{{route('comps.edit',$comp->id)}}">Edit</a></td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-6 col-sm-offset-5">--}}
                {{--{{$comps->appends(['sort'=>'name'])->links()}}--}}
            {{--</div>--}}
        {{--</div>--}}
    @php $count=0; @endphp
        @foreach($locations as $location)

            @if(count($location->comps)>=1 && stristr($location->name,'Raiffensen'))
                <strong>{{$location->name}}</strong>
            <table class='table'>
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name comp</th>
                    <th>Operation System</th>
                    <th>Owner</th>
                    <th>teamviewer id</th>
                    <th>Detalii</th>
                    <th>Location</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
            @foreach($location->comps as $comp)
                @php $count++; @endphp
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$comp->name}}</td>
                    <td>{{$comp->os}}</td>
                    <td>{{$comp->owner}}</td>
                    <td>{{$comp->teamviewer}}</td>
                    <td>{{$comp->detalii}}</td>
                    <td>{{$comp->location_id?$comp->location->name:'no location set'}}</td>
                    <td><a href="{{route('comps.edit',$comp->id)}}">Edit</a></td>
                </tr>
            @endforeach
            @php $count=0; @endphp
                </tbody>
            </table>
            @endif
@endforeach

    {{--@endif--}}


    @stop
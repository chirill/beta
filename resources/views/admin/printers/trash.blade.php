@extends('layouts.admin')
@section('content')
    <h1>Printers Trash</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>ip</th>
                <th>restore</th>
            </tr>
        </thead>
        <tbody>
        @foreach($printers as $printer)
            <tr>
                <td>{{$printer->id}}</td>
                <td>{{$printer->name}}</td>
                <td>{{$printer->ip}}</td>
                <td><a href="{{route('printers.restore',$printer->id)}}">Restore</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



    @stop
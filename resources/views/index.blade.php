
@extends('layouts.layout')

@section('title', 'Главная')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Warehouse's last events:</p>
    @isset($histories)
        <table class="table">
            <thead style="background-color: #28a745">
            <tr>
                <th scope="col">FIO</th>
                <th scope="col">Model</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($histories as $history)
            <tr>
                <th scope="row">{{$history->userFullName}}</th>
                <td>{{$history->artModel}}</td>
                <td>{{$history->updated_at}}</td>
                <td>taken</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endisset
@endsection
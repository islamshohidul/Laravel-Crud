@extends('layout.layout')

@section('content')
    <div class="container">
        <p>Name:{{$bank->name}}</p>
        <p>Description:{{$bank->description}}</p>
        <p>Corporate Address:{{$bank->corporate_address}}</p>
    </div>
    @endsection
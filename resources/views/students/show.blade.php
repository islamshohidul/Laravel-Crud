@extends('layout.layout')

@section('content')

    <div class="container">
        <div>
            <strong>Name of the student:</strong>
            <p>{{$detail->name}}</p>
        </div>

        <div>
            <strong>Roll of the student:</strong>
            <p>{{$detail->roll}}</p>
        </div>
        <div>
            <strong>Birth day of the student:</strong>
            <p>{{$detail->dob}}</p>
        </div>
        <div>
            <strong>Email of the student:</strong>
            <p>{{$detail->email}}</p>
        </div>
    </div>

    @endsection
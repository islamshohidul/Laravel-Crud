@extends('layout.layout')

@section('content')

    <div>
        <tr>
            <th> Title</th>
            <th>Body</th>


        </tr>
        <tr>
            <td class="table-text">
                <div>{{$post->title}}</div>
            </td>

            <td class="table-text">
                <div>{{$post->body}}</div>
            </td>
        </tr>

    </div>



@endsection
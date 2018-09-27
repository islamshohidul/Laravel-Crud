@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                 <div class="btn btn-info pull-right glyphicon-tent" >
                     <a href="{{route('students.create')}}">+Add Information</a>

                 </div>
                </tr>

                <thead>

                <tr>
                    <th  width="10px"> Name</th>
                    <th width="10px">Roll</th>
                    <th width="10px">DOB</th>
                    <th width="10px">Email</th>
                    <th width="50px">Action</th>

                </tr>

                </thead>

                <tbody>
                @foreach($details as $detail)

                <tr>
                    <td class="tab-content"> {{$detail->name}} </td>



                    <td class="tab-content"> {{$detail->roll}} </td>



                    <td class="tab-content"> {{$detail->dob}} </td>


                    <td class="tab-content"> {{$detail->email}} </td>

                    <td>
                        <a class="btn btn-info" href="{{route('students.show', $detail->id)}}"> <span class="glyphicon glyphicon-eye-open"> </span> </a>

                        <a class="btn btn-primary" href="{{route('students.edit', $detail->id)}}"> <span class=" glyphicon glyphicon-pencil"></span> </a>

                        <form action="{{route('students.destroy',$detail->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"> </span></button>
                        </form>

                    </td>







                </tr>
@endforeach
                </tbody>

            </table>

        </div>
    </div>

    @endsection
@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="text-right">

            <a class=" btn btn-info  glyphicon glyphicon-plus btn-lg  " href="{{route('banks.create')}}">Create</a>


        </div>

        <div >
            <table class="table table-bordered ">

                <thead class="thread-light">
                <tr>
                    <th style="width:10px">#</th>
                    <th style="width:10px">Name</th>
                    <th style="width:20px">Description</th>
                    <th style="width:10px">Corporate-Address</th>
                    <th style="width:20px">Logo</th>

                    <th style="width:10px">View</th>
                    <th style="width:10px">Edit</th>
                    <th style="width:10px">Delete</th>
                </tr>

                </thead>

                <tbody>
                @foreach($banks as $bank)
                <tr>
                    <td class="table-text">
                        <div>{{$bank->id}}</div>
                    </td>

                        <td class="table-text">
                            <div>{{$bank->name}}</div>
                        </td>

                         <td class="table-text">
                             <div>{{$bank->description}}</div>
                         </td>


                        <td class="table-text">
                            <div>{{$bank->corporate_address}}</div>
                        </td>

                        <td class="table-text">
                            <div>{{$bank->logo}}</div>
                            <img src="{{ asset('photos/'.$bank->logo) }}">
                        </td>


                        <td class="table-text">

                            <a class="btn btn-primary glyphicon glyphicon-eye-open " href="{{route('banks.show' ,$bank->id)}}"></a>
                         </td>
                        <td class="table-text">
                            <a class="btn btn-info glyphicon glyphicon-pencil" href="{{route('banks.edit' , $bank->id)}}"></a>
                            {{--<a class=" btn btn-danger glyphicon glyphicon-trash" href="{{'banks.destroy' ,$bank->id}}"></a>--}}
                        </td>

                        <td class="table-text">
                            <form action="{{route('banks.destroy',$bank->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger"  onclick="return confirm('Are you sure?')" type="submit"><span class="glyphicon glyphicon-trash"> </span></button>
                            </form>

                        </td>




                </tr>
                @endforeach

                </tbody>

            </table>

        </div>

    </div>

    @endsection
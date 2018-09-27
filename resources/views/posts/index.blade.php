@extends('layout.layout')



@section('content')


    <div class="container">


        <div class="row">
            <div class="col-xm-12 col-sm-12 col-md-12">

                <div class="box">
                    <br>
                    <div class="text-right">
                        <a class=" btn btn-info  " href="{{route('posts.create')}}">+Create New Contact</a>

                    </div>


                    <div class="box-header with-border">
                        <h3 class="box-title">Bordered Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>

                                <th style="width: 10px">#</th>
                                {{--<th style="width: 10px">User ID</th>--}}

                                <th style="width: 10px">Title</th>
                                <th style="width: 10px">Body</th>
                                <th style="width: 10px">Action</th>


                            </tr>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$post->id}}</div>
                                    </td>

                                    {{--<td class="table-text">--}}
                                    {{--<div>{{$contact->user->id}}</div>--}}
                                    {{--</td>--}}

                                    <td class="table-text">
                                        <div>{{$post->title}}</div>
                                    </td>

                                    <td class="table-text">
                                        <div>{{$post->body}}</div>
                                    </td>





                                    <td class="table-text">

                                        <a class="btn btn-info" href="{{route('posts.show',$post->id)}}">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}"><span class="glyphicon glyphicon-pencil"></span></a>

                                        <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></button>
                                       </form>
                                    </td>



                                </tr>


                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>

    </div>



@endsection




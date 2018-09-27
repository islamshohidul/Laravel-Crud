@extends('layout.layout')

@section('content')

    <div class="container d-flex justify-content-center align-items-center">


        <div class="row">
            <div class="col-md-6  " >

                <div class="box">



                    <div class="box-body  ">

                        <form class="form-horizontal"  action="{{route('posts.store')}}" method="POST">
                            {{ csrf_field() }}





                            <div class="box-body">


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Body</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="body" class="form-control" id="inputEmail3" placeholder="Body">
                                    </div>
                                </div>
                                </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-default"> <a href="{{route('posts.index')}}" >Back</a></button>
                                <button type="submit" class="btn btn-info pull-right">Submit</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection




@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="text-right">

            <a class=" btn btn-info  glyphicon glyphicon-arrow-left btn-lg  " href="{{route('banks.index')}}"></a>

        </div>

        <div >
            <h2 class="text-center text-primary">User Details Information</h2>
            <form class="form-horizontal"  enctype="multipart/form-data" action="{{route('banks.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control"  placeholder="Enter name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Description:</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" rows="3" placeholder="Enter description..." name="description" ></textarea>
                        {{--<input type="password"  id="pwd" placeholder="Enter password" name="pwd">--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="corporate_address">Corporate Address:</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" rows="3" placeholder="Enter corporate address..." name="corporate_address" ></textarea>
                        {{--<input type="password"  id="pwd" placeholder="Enter password" name="pwd">--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="logo" class="control-label col-sm-5">Upload your recent photo:</label>
                    <input type="file" class="form-control-file col-sm-3 " id="logo" name="logo">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    @endsection
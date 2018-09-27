@extends('layout.layout')

@section('content')

    <div class="container">

        <form class="form-horizontal" action="{{route('students.store')}}" method="POST">
            {{csrf_field()}}

            <div class="row form-group" >
                <label class="col-md-2" for="name">Student name </label>
                <div class="col-md-4">
                    <input class="form-control" name="name">
                </div>
            </div>

            <div class="row form-group" >
                <label class="col-md-2" for="roll">Student Roll </label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="roll">
                </div>
            </div>

            <div  class="row form-group" >
                <label class="col-md-2" for="dob">Date of birth</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="dob">
                </div>
            </div>

            <div  class="row form-group" >
                <label class="col-md-2" for="email">Email</label>
                <div class="col-md-4">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

            <div class="box-footer form-group col-md-6">
                <button type="submit" class="btn btn-default"> <a href="{{route('students.index')}}" >Back</a></button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>




        </form>

    </div>


    @endsection
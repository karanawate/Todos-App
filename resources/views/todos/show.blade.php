@extends('layouts.app')
@section('title')
Single todo:{{$todo->name}}
@endsection
@section('content')
<h1 class="text-center my-5">

            {{$todo->name}}
         </h1>
         <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="card card-default">
                  <div class="card-header">
                     Details
                  </div>
                  <div class="card-body">
                     {{ $todo->description }}
                  </div>
               </div>
                    <a href="{{ url('/edit/'.$todo->id) }}" ><button class="btn btn-danger my-5">Edit</button></a>
                       <a href="{{ url('/del/'.$todo->id) }} "><button class="btn btn-danger my-2">Delete</button></a>
            </div>1
         </div>
@endsection

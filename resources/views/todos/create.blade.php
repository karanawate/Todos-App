@extends('layouts.app')

@section('title')
   insert Data
@endsection
@section('content')
<form  method="post" action="{{url('/store-todos')}}">
@csrf
    <div class="text-center my-5">Create Page</div>
    @if ($errors->any())
       <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="alert alert-danger ">
                        <ul>
                            @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                            @endforeach
                        </ul>
                </div>
            </div>
       </div>
    @endif
     <div class="row justify-content-center">

        <div class="col-md-8">
        @if(Session::has('message'))
         <p class="alert alert-success"><strong>Success!</strong>{{ Session::get('message') }}</p>
         @endif
            <div class="card default-card">
                <div class="card-header">
                    Create Todo
                </div>
                <div class="card-body">

                        <div class="form-group">
                            <input  type="text"  name="fname" class="form-control" placeholder=""/>
                        </div>
                        <div class="form-group">
                            <textarea  name="description" class="form-control" placeholder="Enter Decription">
                            </textarea>
                        </div>
                        <input type="submit" value="Create Todo" class="btn btn-primary text-center"/>
                  </form>
                </div>
            </div>
        </div>
     </div>
    </form>

@endsection

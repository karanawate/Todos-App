@extends('layouts.app')

@section('title')
   Edit Data
@endsection
@section('content')
<form action="todos/{{ $todoEdit->id }}/update-todos" method="POST">
   {{ csrf_field() }}
    <div class="text-center my-5">Edit Page</div>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card default-card">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <input  type="text" name="fname" class="form-control" value="{{$todoEdit->fname}}"/>
                        </div>
                        <div class="form-group">
                            <textarea  name="description"  class="form-control">
                                {{$todoEdit->description}}
                            </textarea>
                        </div>
                        <input type="submit" value="Create Todo" class="btn btn-primary text-center"/>
                </div>
            </div>
        </div>
     </div>
    </form>

@endsection

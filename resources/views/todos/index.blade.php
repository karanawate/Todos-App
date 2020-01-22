@extends('layouts.app')
@section('title')
 Todos List
@endsection
@section('content')
<h1 class="text-center my-5">Todo Page</h1>
         <div class="row.justify-content-center">
            <div class="col-md-8 offset-md-2">
               <div class="card card-default">
                  <div class="card-header">
                     Todos
                  </div>
                  <div class="card-body">
                     <ul class="list-group">
                        @foreach($todos as $todo)
                        <li class="list-group-item">
                           {{$todo->fname}}
                           <a href="todos-show/{{ $todo->id }}"><button  style="margin:5px" class="btn btn-primary float-right">view</button></a>
                           <!-- <a href="del/{{ $todo->id }}"><button style="margin:5px;" class="btn btn-danger float-right">Delete</button></a> -->
                           <!-- <a href="Edit/{{ $todo->id }}"><button style="margin:5px;" class="btn btn-danger float-right">Edit</button></a> -->

                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <?php echo $todos->links(); ?>
         </div>
@endsection

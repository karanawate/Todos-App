<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
class TodosController extends Controller
{
    public function index()
    {

        $todos = \DB::table('todos')->paginate(5);
        //dd($todos);
        return view('todos.index', compact('todos'));
    }
    public function create()
    {
       return view('todos.create');
    }
    public function show($todo)
    {
        $todo = Todo::findOrFail($todo);

        return view('todos.show', compact('todo'));
    }
    public function store(request $request)
    {
        // dd(Input::all());
        //dd(Request()->all());
        $this->validate($request,[
            'fname' => 'required|alpha_num',
            'description' => 'required'
        ]);
        $todo = new Todo();
        $todo->fname = $request->fname;
        $todo->description	 = $request->description;
        $todo->save();
        Session::flash('message', 'Data inserted succeessfully');
        return redirect()->back();
    }
    public function destroy($todo)
    {
    $todoData = Todo::findOrFail($todo);
   // dd($todoData);
     $todoData->delete();
     return redirect()->back();
    }
    public function edittodo($todo)
    {
        $todoEdit = Todo::findOrFail($todo);
        return view('todos.edit',['todoEdit'=>$todoEdit]);
    }
    public function updatetodo(Request $request, $todoId)
    {
        //echo "Hi";
          //dd($request->all());
           $todoupdate = Todo::findOrFail($todoId);
            $todoupdate->update(Input::all());
            return redirect()->back();
    }
}

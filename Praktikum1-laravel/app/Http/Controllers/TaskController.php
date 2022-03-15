<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $request){
        Tasks::create([
            'task'=>$request->task,
            'user'=>$request->user
        ]);
      return redirect('/tasks');
    }
    
    public function index(Request $request){
        if($request->search){
          $tasks =Tasks::where('task','LIKE',"%$request->search%")
           ->paginate(3);

           return $tasks;
        }
        $tasks= Tasks::paginate(3);
        return view('task.index',[
            'data'=>$tasks
        ]);
    }

    public function create(){

        return view('task.create');
    }

    public function edit($id){
        $task = Tasks::find($id);

        return view('task.edit', compact('task'));
    }

    public function show($id){
        $tasks = Tasks::find($id);
        return $tasks;
    }

    public function update(Request $request ,$id){
        $tasks = Tasks::find($id);

        $tasks->update([
            'task'=>$request->task,
            'user'=>$request->user
        ]);
        
        return redirect('/tasks');
    }

    public function destroy(Request $request, $id){
        $tasks = Tasks::find($id);
       $tasks->delete();
        
       return redirect('/tasks');
    }
}

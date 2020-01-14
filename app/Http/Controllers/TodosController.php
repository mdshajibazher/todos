<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\todosValidationRequest;
use Session;

class TodosController extends Controller
{
    public function index(){

    	return view('todos.todos')->with('tasks', Todo::all());
    }



    public function show($todoid){

    	$todo = Todo::find($todoid);
    	
    	return view('todos.show')->with('todo', $todo);
    }


    public function create(){

    	return view('todos.create');
    }


    public function store(todosValidationRequest $request){

    	$data = $request->all();


    	$todo = new Todo;

    	$todo->name = $data['name'];
    	$todo->description = $data['description'];
    	$todo->completed = false;

    	$todo->save();
		Session::flash('insert', 'Task successfully Inserted To Database');
    	return redirect(route('todos.index'));
    }

    public function edit($todoId){
    	$todo = Todo::find($todoId);



    	return view('todos.edit')->with('todo', $todo);
    }


    public function update(todosValidationRequest $request, $id){

    	$data = $request->all();
    	$todo = Todo::find($id);

    	$todo->name = $data['name'];
    	$todo->description = $data['description'];

    	$todo->save();
	    Session::flash('update', 'Task Updated successful!');
    	return redirect('/todos');

    }


    public function destroy($todoId){
    	$todo = Todo::find($todoId);

    	$todo->delete();

		Session::flash('delete', 'Task Deleted successful!');
    	return redirect('/todos');
    }


}

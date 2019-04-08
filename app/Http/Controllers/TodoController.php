<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller{
    //
    public function create(Request $request) {
        $todo =new Todo;

        $todo->name = $request->name;
        $todo->description = $request->description;

        $todo->save();

        return view('todos.index');

    }
    public function showAll(){
        $todos = Todo::all();
        $data['todos'] = $todos;
        return view('todos.index', $data);

    }

}

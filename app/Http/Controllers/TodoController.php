<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Todo;

class TodoController extends Controller
{

    // public function index(){
    //     $todos = Todo::all();
    // }

    public function createTodo(Request $request){
        $request->validate([
            'title' => 'required|string',
        ]);

        $model = new Todo();
        $model->title = $request->input('title'); 
        $model->save();

        return response()->json(['message' => 'Record created successfully'], 201);
    }

    public function displayTodo ($id){
        $model = Todo::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);

        return response()->json($model);
    }

    public function updateTodo($request, $id){
        $model = Todo::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);

        $request->validate([
            'title' => 'required|string',
        ]);

        $model->title = $request->input('title');
        $model->save();

        
        return response()->json(['message' => 'Record updated successfully'], 201);
    }

    public function deleteTodo($id){
        $model = Todo::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);

        $model->delete();

        return response()->json(['message' => 'Record deleted successfully'], 201);
    }
}

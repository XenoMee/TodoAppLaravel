<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Task;

class TaskController extends Controller
{
    public function createTask(Request $request){
        $request->validate([
            'title' => 'required|string',
        ]);

        $model = new Task();
        $model->title = $request->input('title');
        $model->save();
        
        return response()->json(['message' => 'Record created successfully'], 201);
    }

    public function displayTask($id){
        $model = Task::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);

        return response()->json($model);
    }

    public function updateTask($request, $id){
        $model = Task::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);

        $request->validate([
            'title' => 'required|string',
        ]);

        $model->title = $request->input('title');
        $model->save();

        return response()->json(['message' => 'Record updated successfully'], 201);
    }

    public function deleteTask($id){
        $model = Task::find($id);

        if(!$model) return response()->json(['message' => 'Record not found'], 404);
        
        $model->delete();

        return response()->json(['message' => 'Record deleted successfully'], 201);
    }
}

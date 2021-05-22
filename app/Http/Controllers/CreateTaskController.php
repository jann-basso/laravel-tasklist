<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Task;

class CreateTaskController extends Controller
{

    function getUsersAndCategories() {
        $users = User::all('id', 'name');
        $categories = Category::all('id', 'name');
        return view('createtask', compact(['users', 'categories'])); 
    }


    function getData(Request $req) {
        $task = new Task;
        $task->user_id = $req->user_id;
        $task->category_id = $req->category_id;
        $task->name = $req->name;
        $task->description = $req->description;
        $task->save();
        return redirect('create-task')->with('message', 'Task added!');
    }



}

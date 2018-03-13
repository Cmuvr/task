<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Http\Requests\CommentRequest;
use App\Task;
use App\Comment;

class AddingController extends Controller
{
    public function addtask(StatusRequest $request){
        Task::create($request->all());
        return redirect("/");
    }

    public function comment(CommentRequest $request){
        Comment::create($request->all());
        return redirect("/");
    }

    public  function getidtask(){
        $id = $_POST['id'];
        return "<input name='task_id' type='text' value='".$id."' hidden>";
    }
}

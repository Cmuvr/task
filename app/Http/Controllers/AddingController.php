<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Http\Requests\CommentRequest;
use App\Task;
use App\Comment;
use Illuminate\View\View;

class AddingController extends Controller
{
    public function addtask(StatusRequest $request){
        Task::create($request->all());
        return redirect("/");
    }

    public function addcomment(CommentRequest $request){
        Comment::create($request->all());
        return redirect("/");
    }

    public function updatetask(StatusRequest $request){
        Task::find($request['id'])->update($request->all());
        return redirect("/");
    }

    public  function getformcom(){
        $id = isset($_POST['id'])? $_POST['id']: null;
        $task_name = $id != null ? Task::find($id)->name : '';
        return view('includes.form_comm', compact('id','task_name'));
    }

    public  function getformtask(){
        $task = isset($_POST['id'])? Task::find($_POST['id']): null;
        $status_name = $task != null ? $task->status->find($task->status_id)->name: '';

        return view('includes.form_task', compact('task', 'status_name'));
    }
}

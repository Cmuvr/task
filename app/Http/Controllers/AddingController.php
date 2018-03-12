<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Task;

class AddingController extends Controller
{
    public function addtask(StatusRequest $request){
        Task::create($request->all());
        return redirect("/");
    }
}

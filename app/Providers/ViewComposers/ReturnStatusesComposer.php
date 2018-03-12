<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Status;
use App\Task;


class returnStatusesComposer
{
    public function compose(View $view){
        $statuses = Status::get();
        $view->with('statuses', $statuses);
    }
}
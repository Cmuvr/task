<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function task(){
        return $this->hasMany('App\Task','status_id')->orderBy('created_at','desc');
    }
}

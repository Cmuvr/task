<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'status_id',
    ];

    public function status(){
        return $this->belongsTo('App\Status', 'id');
    }
}

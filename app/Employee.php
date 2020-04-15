<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function task() {
        return $this->hasMany(Task::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getDueDateAttribute($deadline) {
        return $deadline->format('Y-m-d');
    }
}

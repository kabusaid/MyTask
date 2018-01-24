<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [ 'name', 'notes', 'due', 'status', 'archived'  ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

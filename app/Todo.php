<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'fname',
         'description'
     ];
     protected $dates = ['created_at', 'updated_at'];

}

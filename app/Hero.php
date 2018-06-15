<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['id', 'name'];
    protected $hidden = ['created_at', 'updated_at'];
}

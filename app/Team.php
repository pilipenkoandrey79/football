<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['id', 'name', 'country_id'];
    protected $hidden = ['id', 'created_at', 'updated_at'];
}

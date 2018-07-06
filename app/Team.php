<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['id', 'name', 'country_id'];
    protected $hidden = ['created_at', 'updated_at', 'country_id'];
}

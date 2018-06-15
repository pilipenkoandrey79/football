<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['id', 'name'];
    protected $hidden = ['created_at', 'updated_at'];
}

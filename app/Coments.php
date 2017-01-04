<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    protected $fillable = [
    	'content',
    	'id_user',
    ];
}

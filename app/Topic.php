<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
    	'name',
    	'content',
    	'id_user',
    	'id_coment',
    ];

    public function coments()
    {
    	$this->hasMany('App\Coments', 'id_coment');
    }
}

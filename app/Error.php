<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    public $timestamps = false;
	protected $table = 'errors';
	
    protected $fillable = [
        'id',
		'controller',
		'method',
		'message',
		'line',
		'date'
    ];
}

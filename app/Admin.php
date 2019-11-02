<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
	protected $table = 'admins';
	
    protected $fillable = [
        'id',
		'firstname',
		'lastname',
		'email',
		'password',
		'created',
		'modified'
    ];
}

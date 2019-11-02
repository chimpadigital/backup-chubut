<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = false;
	protected $table = 'banners';
	
    protected $fillable = [
        'id',
		'description',
		'image',
		'url'
    ];
}

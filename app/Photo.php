<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	public $timestamps = true;
	protected $table = 'photos';
	protected $fillable = [
		'title',
		'picture',
		'desc'
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	public $timestamps = true;
	protected $table = 'reviews';
	protected $fillable = [
		'content',
		'author'
	];
}

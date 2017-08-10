<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public $timestamps = true;
	protected $table = 'articles';
	protected $fillable = [
		'title',
		'picture',
		'desc',
		'content',
		'type'
	];
}

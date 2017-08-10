<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public $timestamps = true;
	protected $table = 'orders';
	protected $fillable = [
		'name',
		'phone',
		'email',
		'from',
		'to',
		'persons_num',
		'house',
		'has_food',
		'comments'
	];

	private static $months = [
		'января',
		'февраля',
		'марта',
		'апреля',
		'мая',
		'июня',
		'июля',
		'августа',
		'сентября',
		'октября',
		'ноября',
		'декабря'
	];

	public static function convertMonth($v)
	{
		if ($v < 0 || $v > 11) {
			$v = 0;
		}

		return self::$months[$v];
	}
}

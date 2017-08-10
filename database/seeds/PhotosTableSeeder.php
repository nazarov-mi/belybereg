<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$titles = [
			'Оазис среди бескрайних степей',
			'Вид на Волгу с базы Белый Берег',
			'Пляж',
			'Ресторан',
			'Зал ресторана',
			'Белый амур - заслуженный трофей',
			'Отличный улов',
			'Удержание рекорда - непростое дело! Трофей - толстолобик',
			'Рыбалка с берега',
			'Тихая рыбалка на закате',
			'Большой улов',
			'Маленький оазис',
			'Бассейн',
			'Водные лыжи',
			'Катание на плюшке',
			'Праздник Нептуна',
			'Гостеприимство на свежем воздухе',
			'Прекрасное творение Природы - лотосовые поля',

		];
		$data = [];

		for ($i = 0; $i < count($titles); ++ $i) {
			$data[] = [
				'title' => $titles[$i],
				'src' => 'assets/slider/' . ($i + 1) . '.jpg'
			];
		}

		\DB::table('photos')->delete();
		\DB::table('photos')->insert($data);
	}
}

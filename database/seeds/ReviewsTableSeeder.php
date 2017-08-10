<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = [
			[
				'author' => 'Михаил',
				'content' => 'Отдыхал на базе весной, с друзьями. Всё понравилось: достаточный комфорт проживания, обходительный персонал, рыбалка. Повар Роза - отдельный разговор. Кормила на убой. Никогда не думал, что столько всего можно приготовить из мяса и рыбы :) Домой приехали довольные.',
			],
			[
				'author' => 'Денис',
				'content' => 'База находится в лесочке, пляж приличный- песочек с лежаками и плавным заглублением (для детей в самый раз). Рядом с базой две ямы, а напротив коса (где можно днем оторваться по лещу), короче место для рыбалки очень хорошее! Не большие недочеты есть конечно как и везде, но по цене-качество отличный вариант! Роза кстати уволилась, вместо нее Зина - готовит еще лучше!',
			],
			[
				'author' => 'Алексей',
				'content' => 'Вчера вернулся с базы.Уже скучаю.Середина октября-погода класс трофеев не поймал но рыбалка обалденная. Лучшие егеря на базе МИХАИЛ ИВАНОВИЧ и его правая рука САША за неделю проведенную на базе показали и рассказали о любом виде рыбалке и просто отличные мужики, огромное им спасибо. Обязательно вернусь при первой возможности.Большой привет ДИМЕ, кто хочет поохотится обращайтесь к нему - без дичи не останетесь.
					ВСЕ СУПЕР ОТОРВАЛСЯ ОТ ДУШИ!',
			],
			[
				'author' => 'Александр',
				'content' => '3 год подряд отдыхаю на базе, нареканий нет, рыбы вдоволь. Егеря - засолят, закоптят, почистят. Кухня пожарит сварит. Стрелять есть в кого. В общем КЛАСС! Особая благодарность ДМИТРИЮ!',
			],
			[
				'author' => 'Владимир',
				'content' => 'База находится на берегу. вокруг лес, что удивительно для этого региона. пляж, сауна, бар (всегда ледяное пиво с рыбкой). Семья довольна, рыбы вдоволь при чем любой. Ловишь на русле, с берега и по озерам. Везде ловится. питание отличное. Главное имеются морозильники для хранения рыбы. Говорят охота отличная осенью. поеду в этом году пострелять. Спасибо егерям и администрации.
					МИХАИЛУ ИВАНОВИЧУ И ДИМЕ ОСОБЫЙ ПРИВЕТ!!!',
			],
			[
				'author' => 'Сергей',
				'content' => 'Отдыхал несколько раз на базе. Класс! Планирую ездить постоянно. Единственный минус это ветер (не постоянный, но когда начинается на русле тяжеловато). Зато в это время на пойме по щуке отрываешься. За три года база изменилась. стало намного лучше. фото старые. там уже все по другому. пляж, берег, территория облагородились. С каждым годом что - нибудь улучшается.
					СПАСИБО АДМИНИСТРАТОРУ И ЕГЕРЯМ ЗА ТЕПЛЫЙ ПРИЕМ!!!',
			],
			[
				'author' => 'Николай и Галина',
				'content' => 'Спасибо за прекрасный отдых, не омраченный даже вездесущей мошкой :). Размещение и питание отлично, рыбалка тоже хорошо, привезли домой целый морозильник.',
			],
			[
				'author' => 'Рыбачки',
				'content' => 'Белый берег Привет! Жди нас в гости, скоро приедем!',
			],
			[
				'author' => 'Владислав',
				'content' => 'Не согласен с отрицательными отзывами. С 2008 года мы с отцом ежегодно приезжаем порыбачить на наш любимый Белый берег. И всегда нам рады. Приезжаем оторваться по рыбалке, а не водки попить, как это делают некоторые, отсюда и отзывы у них такие. Питание отличное, всегда можно добавки попросить, но, как правило, всегда наедаешься. Могут по желанию приготовить настоящую уху, шашлык-машлык, копчуху. Кстати, много перекоптил рыбы дома, но такой вкусной у меня не получается. Еще нам всегда мастерски разделывают трофеи, и домой мы привозим чистенькое филе. Лодки на выбор есть всегда, в домике все условия, санузел, горячая вода, холодильник, телевизор. Что еще надо? Так что не надо здесь ля ля. Конечно, природа сделала свое дело, но ведь это же природа, а не люди. Для того чтобы привести базу в первоначальный вид, необходимо много сил и средств. В связи с этим, хочу поддержать коллектив Белого берега и передать всем привет, особенно директору Валентине, зам. директора Олегу, повару Татьяне, охраннику Александру и конечно же молодому человеку который нам разделывал рыбу, к сожалению забыл как его зовут.
					P.S. В апреле едем с супругой, будем недалеко от вас, обязательно заглянем.',
			],
			[
				'author' => 'Инна',
				'content' => 'Замечательное место! Есть всё необходимое для отдыха. Сотрудники базы были отзывчивыми. Спасибо!',
			],
		];

		foreach ($data as &$val) {
			$val['created_at'] = date('Y-m-d', time() - rand(10, 120) * 60 * 60 * 24);
			$val['active'] = true;
		}

		\DB::table('reviews')->delete();
		\DB::table('reviews')->insert($data);
	}
}

@extends('layouts.page')

@section('page-content')
	<section class="section section_strip">
		<div class="advantages">
			<div class="container">
				<div class="row">
					<div class="advantage-item col-xs">
						<div class="advantage-item__icon advantage-item__icon_1"></div>
						<div class="advantage-item__text">
							Кристально чистый воздух и природная чистота воды
						</div>
					</div>
					<div class="advantage-item col-xs">
						<div class="advantage-item__icon advantage-item__icon_2"></div>
						<div class="advantage-item__text">
							Низовья Волги изобилуют самыми разнообразными породами рыб
						</div>
					</div>
					<div class="advantage-item col-xs">
						<div class="advantage-item__icon advantage-item__icon_3"></div>
						<div class="advantage-item__text">
							Высококвалифицированные шеф-повара приготовят ваш улов
						</div>
					</div>
					<div class="advantage-item col-xs">
						<div class="advantage-item__icon advantage-item__icon_4"></div>
						<div class="advantage-item__text">
							Прекрасный отдых для всей семьи
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h3>Потрясающий отдых и увлекательная рыбалка на базе в Астрахани</h3>
			<p>В этом регионе активно и комфортно отдохнуть помогает сама природа. Условия, которые она создала для отдыхающих, могут считаться идеальными и для азартных спиннингистов, и для мечтательных поплавочников. Причем, использования местной природы для отдыха «всесезонно»: можно качественно отдохнуть и зимой и летом. Всегда кристально чистый воздух и природная чистота воды, тишина, которая тревожится только пением птиц и всплесками рыбы по водной глади.</p>
			<p>Регион Нижней Волги является богатейшим по разнообразию видов рыб и по количеству экземпляров для трофейного улова. Играет серебром белая рыба (плотва, лещ, тарань), просматриваются в глубине «колоды» малахитовых щук и сомов, играют красными плавниками окунь и красноперка. Царица-река раскинула свои воды не только по быстрому руслу, но и по тихим протокам, прогретым мелям и глубоким омутам.</p>
		</div>
	</section>

	@if (!empty($photos))
		<section>
			<div class="photos owl-carousel" id="photos_slider">
				@foreach($photos as $photo)
					<div class="photo-item">
						<a href="{{ $photo->src }}" data-caption="{{ $photo->title }} | {{ $photo->desc }}" data-fancybox>
							<div class="photo-item__overlap">
								<h4>{{ $photo->title }}</h4>
								<p>{{ $photo->desc }}</p>
							</div>
							<img class="photo-item__image" src="{{ $photo->src }}" />
						</a>
					</div>
				@endforeach
			</div>
		</section>
	@else
		<hr/>
	@endif

	<section class="section" id="questions_section">
		<div class="questions">
			<div class="container">
				<h4 class="has-text-center">Часто задаваемые вопросы</h4>
				<div class="nav-tabs" id="questions_tabs">
					<div class="nav-tabs__list">
						<div class="nav-tabs__item" data-target="questions_tab_1">Чем привлекательна наша рыболовная база?</div>
						<div class="nav-tabs__item" data-target="questions_tab_2">Как добраться?</div>
					</div>
					<div class="nav-tabs__wrapper">
						<div class="nav-tabs__content" id="questions_tab_1">
							<p>Прежде всего – это берег величественной Волги. Место уютное и комфортное. От ветров и зноя участок оберегает с трех сторон лес. И пляж с золотистым песком также имеется.</p>
							<p>Для проживания отдыхающих база предоставляет 12 деревянных коттеджа из вологодской сосны. Деревянные домики органично вписываются в ландшафт базы рыболовов и охотников, абсолютно экологичны, греют не только тело, но и душу.</p>
							<p>Есть на девственной территории и удобства современного общества:</p>
							<ul>
								<li>Автостоянка</li>
								<li>Лежаки на пляже</li>
								<li>Ресторан</li>
								<li>Спортивные площадки</li>
								<li>Места для проведения пикников компаниями</li>
								<li>Два бассейна</li>
								<li>Две бани</li>
							</ul>
						</div>
						<div class="nav-tabs__content" id="questions_tab_2">
							<ol>
								<li>Самолетом до Волгограда или Астрахани, далее трансфер до базы «Белый берег».</li>
								<li>Поездом до железнодорожной станции Волгоград, далее — трансфер до базы «Белый берег».</li>
								<li>Личным транспортом — по федеральной трассе М6 Москва-Астрахань через г. Волгоград по правому берегу Волги в сторону Астрахани. Не доезжая (примерно 1 км) до п. Цаган-Аман (1208 километр трассы М6) по указателю рекламного щита базы «Белый берег» свернуть на паромную переправу. О приблизительном времени своего прибытия сообщите по тел.: 8 (960) 897-10-82, 8 (937) 891-38-93. Переправившись на другой берег Волги (паромная переправа), следуйте 4 км по указателям до базы «Белый берег». Желающие могут оставить автомобиль на правом берегу, на территории нашего офиса в п. Цаган-Аман, и будут доставлены до базы нашим транспортом.</li>
							</ol>
							<p>
								<img class="is-fullwidth" src="{{ asset('assets/schema.gif') }}" />
							</p>
							<p>
								<img class="is-fullwidth" src="{{ asset('assets/map.jpg') }}" />
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if (!empty($reviews))
		<section class="section section_strip">
			<div class="reviews">
				<div class="container">
					<h4 class="has-text-center">Отзывы</h4>
					<div class="owl-carousel" id="reviews_slider">
						@foreach($reviews as $review)
							<div class="review-item">
								<div class="review-item__text">{{ $review->content }}</div>
								<div class="review-item__author">{{ $review->author }}</div>
								<div class="review-item__date">{{ substr($review->created_at, 0, 10) }}</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	@else
		<hr/>
	@endif

	<section class="section">
		<div class="reviews">
			<div class="container">
				<form class="form" id="review_form" method="POST" action="{{ route('review') }}">
					<div class="reviews__icon"></div>
					<h4 class="has-text-center">Вы можете оставить свой отзыв</h4>
					<div class="form__control">
						<input type="text" name="author" placeholder="Ваше имя" require />
					</div>
					<div class="form__control">
						<textarea name="content" placeholder="Ваш отзыв" require></textarea>
					</div>
					<button class="is-centered">Отправить</button>
				</form>
			</div>
		</div>
	</section>

	@component('widjects.prices', ['houses' => $houses])
	@endcomponent

	@component('widjects.order', ['houses' => $houses])
	@endcomponent

	<script type="text/javascript">
		$(function () {

			// Forms
			$('#review_form').ajaxForm({
				successText: 'Ваш отзыв успешно отправлен'
			});

			// Navigation tabs
			$('#questions_tabs')
				.navTabs()
				.on('selectTab', function () {
					$('#questions_section').scrollTo();
				});
			
			// Owl carousel
			$('#photos_slider').owlCarousel({
				items: 1,
				center: true,
				loop: true,
				autoWidth: true,
				autoplay: true,
				autoplayTimeout: 5000,
				autoplaySpeed: 1000,
				autoplayHoverPause: true,
				nav: true,
				navText: ['', '']
			});

			$('#reviews_slider').owlCarousel({
				items: 1,
				loop: true,
				autoHeight: true,
				nav: true,
				navText: ['', '']
			});
		});
	</script>
@endsection

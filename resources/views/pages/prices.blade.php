@extends('layouts.page')

@section('page-content')
	@component('widjects.prices', ['houses' => $houses])
	@endcomponent

	<section class="section">
		<div class="container">
			<h4>Условия проживания</h4>

			<p>Двухместный люкс <b>(45м2)</b>. Спальня, гостиная, прихожая, ТВ, холодильник с морозильной камерой, сплит-система, обогреватель, душ с горячей водой, умывальник и туалет.</p>
			<p>Двухместный полулюкс в коттедже с отдельным входом <b>(25м2)</b>. Спальня, прихожая, в номере две кровати, раскладывающийся диван, ТВ, холодильник с морозильной камерой, сплит-система, обогреватель, душ, умывальник и туалет.</p>

			<h4>Скидки на проживание</h4>

			<ul>
				<li>Для детей до <b>10</b> лет — бесплатно</li>
				<li>Для детей от <b>10</b> до <b>14</b> лет — <b>50%</b></li>
				<li>В период с <b>1 ноября</b> по <b>31 марта</b> — <b>20%</b></li>
			</ul>

			<h4>Питание</h4>

			<p>Трехразовое питание в ресторане — 900 рублей с человека в сутки. На базе работает бар, летнее кафе, магазин.</p>

			<h4>Дополнительные услуги</h4>

			<ul>
				<li>Трансфер Волгоград — «Белый берег» — Волгоград или Астрахань — «Белый берег» — Астрахань: цена договорная, в зависимости от числа гостей и вида транспорта</li>
				<li>Переправа на НАШЕМ пароме — <b>500 руб</b></li>
				<li>Русская баня с бассейном (группа до 6 человек) — <b>800 руб/час</b></li>
				<li>Водные лыжи и катание на плюшке — оплата по факту</li>
			</ul>

			<h6>Прокат лодок и моторов</h6>

			<ul>
				<li>Весельные лодки: пелла, казанка — <b>150 руб/день</b>.</li>
				<li>
					Моторные лодки:
					<ul>
						<li>Кайман (ПВХ) 4-местная с мотором 15 л.с. — <b>550 руб/день</b></li>
						<li>Казанка с мотором 15 л.с. — <b>650 руб/день</b></li>
						<li>Ока с мотором 20 л.с. — <b>750 руб/день</b></li>
						<li>Крым с мотором Mercury 30 л.с. — <b>800 руб/день</b></li>
						<li>Крым с мотором Yamaha 40 л.с. и эхолотом — <b>1000 руб/день</b></li>
					</ul>
				</li>
			</ul>
			
			<p>ГСМ оплачиваются отдельно. Права на управление водными видами транспорта обязательны.</p>

			<h4>Егерское обслуживание</h4>

			<ul>
				<li>Обслуживание — <b>800 руб/световой день</b></li>
				<li>Аренда скоростного катера с двигателем Mercury 75 л.с. (в сопровождении егеря) — <b>3000 руб/день (ГСМ оплачиваются отдельно)</b></li>
				<li>Обслуживание с автомобилем (на пойме) — <b>1500 руб/день</b></li>
				<li>Организован прокат рыболовных снастей</li>
			</ul>
			
			<p>Возможен <b>почасовой</b> прокат лодки Крым с мотором Yamaha 40 л.с. и эхолотом — в сопровождении егеря — <b>300 руб/час</b></p>

			<h4>Дополнительно</h4>

			<p>В стоимость включена развлекательная программа: волейбол, минифутбол, бадминтон, настольный теннис, выезды на песчаный остров, вечерний костер, анимация.</p>

			<p>На нашей базе Вы также можете заказать по договорной цене:</p>

			<ul>
				<li>Организацию праздников и банкетов</li>
				<li>Деликатесные блюда</li>
				<li>Блюда из ваших трофеев</li>
				<li>Организацию шашлыков на природе</li>
				<li>Прокат инвентаря (снасти, мангалы, коптильни и т.д.)</li>
				<li>Экскурсии в Элисту и на лотосовые поля</li>
				<li>...и многое другое</li>
			</ul>

			<p>
				<b>Бар с прохладительными и спиртными напитками — c 8 утра до 1 часа ночи.</b>
			</p>

			<div class="gallery">
				<div class="row">
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/1.jpg') }});">
							<a href="{{ asset('assets/prices/1.jpg') }}" data-caption="Коттеджный домик-люкс" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Коттеджный домик-люкс</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/2.jpg') }});">
							<a href="{{ asset('assets/prices/2.jpg') }}" data-caption="Номер-люкс" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Номер-люкс</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/3.jpg') }});">
							<a href="{{ asset('assets/prices/3.jpg') }}" data-caption="Номер-полулюкс" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Номер-полулюкс</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/4.jpg') }});">
							<a href="{{ asset('assets/prices/4.jpg') }}" data-caption="Гостиная номера-люкс" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Гостиная номера-люкс</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/5.jpg') }});">
							<a href="{{ asset('assets/prices/5.jpg') }}" data-caption="Общий зал ресторана" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Общий зал ресторана</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/6.jpg') }});">
							<a href="{{ asset('assets/prices/6.jpg') }}" data-caption="Банкетный зал ресторана" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Банкетный зал ресторана</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/7.jpg') }});">
							<a href="{{ asset('assets/prices/7.jpg') }}" data-caption="Баня" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Баня</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="gallery-item" style="background-image: url({{ asset('assets/prices/8.jpg') }});">
							<a href="{{ asset('assets/prices/8.jpg') }}" data-caption="Бассейн" data-fancybox>
								<div class="gallery-item__overlap">
									<h5>Бассейн</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	@component('widjects.order', ['houses' => $houses])
	@endcomponent
@endsection
@extends('layouts.app')

@section('app-content')
<section class="section">
	<div class="header">
		<div class="container">
			<div class="menu menu_top">
				<div class="row">
					<div class="col-xs-2">
						<a href="/">
							<img src="{{ asset('assets/logo.png') }}" title="Рыболовная база Белый берег" alt="Рыболовная база Белый берег" />
						</a>
					</div>
					<div class="col-xs-10">
						<nav class="navigation has-text-right">
							<a class="navigation__link" href="{{ route('home') }}">Главная</a>
							<a class="navigation__link" href="{{ route('prices') }}">Услуги и цены</a>
							<a class="navigation__link" href="{{ route('news') }}">Новости</a>
							<a class="navigation__link" href="{{ route('articles') }}">Интересные статьи</a>
							<a class="navigation__link" href="{{ route('contacts') }}">Контакты</a>
						</nav>
					</div>
				</div>
			</div>
			<div class="cover">
				<div class="row">
					<div class="col-xs-6">
						<div class="cover__subtitle">рыболовная база</div>
						<div class="cover__title">БЕЛЫЙ БЕРЕГ</div>
						<div class="cover__desc">Потрясающий отдых и увлекательная рыбалка на базе в Астрахани</div>
					</div>
					<div class="col-xs-6 has-text-right">
						<div class="cover__contacts">
							+7 (905) 789-92-34<br/>
							+7 (927) 594-23-26<br/>
							+7 (960) 897-10-82
						</div>
						<div class="cover__contacts-desc">
							(администратор базы)
						</div>
						<div class="cover__contacts">
							belybereg@yandex.ru
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@yield('page-content')

<section class="section section_strip">
	<div class="footer">
		<div class="container">
			<div class="cover">
				<div class="row">
					<div class="col-xs-2">
						<a href="/">
							<img src="{{ asset('assets/logo.png') }}" title="Рыболовная база Белый берег" alt="Рыболовная база Белый берег" />
						</a>
					</div>
					<div class="col-xs-6">
						<div class="cover__subtitle">рыболовная база</div>
						<div class="cover__title">БЕЛЫЙ БЕРЕГ</div>
						<div class="cover__desc">Потрясающий отдых и увлекательная рыбалка на базе в Астрахани</div>
					</div>
					<div class="col-xs-4 has-text-right">
						<div class="cover__contacts">
							+7 (905) 789-92-34<br/>
							+7 (927) 594-23-26<br/>
							+7 (960) 897-10-82
						</div>
						<div class="cover__contacts-desc">
							(администратор базы)
						</div>
						<div class="cover__contacts">
							belybereg@yandex.ru
						</div>
					</div>
				</div>
			</div>
			<div class="menu menu_bottom">
				<nav class="navigation has-text-center">
					<a class="navigation__link" href="{{ route('home') }}">Главная</a>
					<a class="navigation__link" href="{{ route('prices') }}">Услуги и цены</a>
					<a class="navigation__link" href="{{ route('news') }}">Новости</a>
					<a class="navigation__link" href="{{ route('articles') }}">Интересные статьи</a>
					<a class="navigation__link" href="{{ route('contacts') }}">Контакты</a>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
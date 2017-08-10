@extends('layouts.app')

@section('app-content')
<section class="section section_gradient login-section">
	<form id="login_form" class="form form_fill login-form" method="POST" action="{{ route('login') }}">
		<h4 class="has-text-center">Вход</h4>
		{{ csrf_field() }}
		<div class="form__control">
			<input type="text" name="username" placeholder="Логин" require autofocus />
		</div>
		<div class="form__control">
			<input type="password" name="password" placeholder="Пароль" require />
		</div>
		<div class="form__control">
			<label>
				<input type="checkbox" name="remember" />
				Запомнить меня
			</label>
		</div>
		<button>Войти</button>
	</form>
</section>
<script type="text/javascript">
	$(function () {
		$('#login_form').ajaxForm({
			successText: 'Добро пожаловать :username. Подождите немного..',
			errorText: 'Неправильный логин или пароль',
			success: function () {
				window.location.reload(true);
			}
		});
	});
</script>
@endsection
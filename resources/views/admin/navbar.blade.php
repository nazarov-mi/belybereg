<li>
	<a href="/" target="_blank">
		<i class="fa fa-btn fa-globe"></i> На сайт
	</a>
</li>
<li style="margin-right: 20px;">
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">
		<i class="fa fa-btn fa-sign-out"></i> Выйти
	</a>
	<form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</li>
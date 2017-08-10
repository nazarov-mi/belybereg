<section class="section section_strip">
	<div class="prices">
		<div class="container">
			<h4 class="has-text-center">Услуги и цены</h4>
			<div class="row center-xs">
				@foreach($houses as $house)
					<div class="col-xs-3 price-item">
						<h6 class="price-item__title">{{ $house->title }}, {{ $house->persons_num }} места</h6>
						<p class="price-item__desc">{{ $house->price }} руб</p>
						<button class="price-item__button is-outlined">Заказать</button>
					</div>
				@endforeach
				<!--
				<div class="col-xs-3 price-item">
					<h6 class="price-item__title">Полулюкс, 2 места</h6>
					<p class="price-item__desc">1500 руб/чел</p>
					<button class="price-item__button is-outlined">Заказать</button>
				</div>
				<div class="col-xs-3 price-item">
					<h6 class="price-item__title">Полулюкс, 3 места</h6>
					<p class="price-item__desc">1250 руб/чел</p>
					<button class="price-item__button is-outlined">Заказать</button>
				</div>
				<div class="col-xs-3 price-item">
					<h6 class="price-item__title">Люкс, 2 места</h6>
					<p class="price-item__desc">2500 руб/чел</p>
					<button class="price-item__button is-outlined">Заказать</button>
				</div>
				<div class="col-xs-3 price-item">
					<h6 class="price-item__title">Дополнительное место*</h6>
					<p class="price-item__desc">750 руб/чел</p>
					<button class="price-item__button is-outlined">Заказать</button>
				</div>
				-->
			</div>
			<!-- <p class="prices__desc">* В номерах люкс и полулюкс, с учетом дополнительных мест, может быть размещено до 4 гостей.</p> -->
		</div>
	</div>
</section>
<script type="text/javascript">
	$(function () {
		$('.price-item__button').on('click', function () {
			$('#order_section').scrollTo();
		});
	});
</script>
<section class="section section_gradient" id="order_section">
	<div class="order">
		<div class="container">
			<form class="form form_fill" id="order_form" method="POST" action="{{ route('order') }}">
				<h4 class="has-text-center">Предварительный заказ</h4>
				<p>Рыболовная база «Белый Берег» предлагает Вам удобную возможность сделать предварительный заказ прямо на нашем сайте.</p>
				<p>Заполните краткую форму, и мы свяжемся с Вами для окончательного оформления путевки.</p>

				<div class="form__control">
					<input type="text" name="name" placeholder="Ваше ФИО" require />
				</div>

				<div class="form__control">
					<div class="form__group">
						<div class="form__control">
							<input type="text" name="phone" placeholder="Контактный телефон" require>
						</div>
						<div class="form__control">
							<input type="text" name="email" placeholder="E-Mail">
						</div>
					</div>
				</div>

				<div class="form__label">
					<div class="row">
						<div class="col-xs">Дата прибытия</div>
						<div class="col-xs-offset-1 col-xs">Дата отъезда</div>
					</div>
				</div>
				
				<div class="form__control">
					<div class="row middle-xs">
						<div class="col-xs">
							<div class="form__group">
								<div class="form__control">
									<span class="select">
										<select name="from_day">
											@for($i = 1; $i <= 31; ++ $i)
												<option value="{{ $i }}">{{ $i }}</option>
											@endfor
										</select>
									</span>
								</div>
								<div class="form__control">
									<span class="select">
										<select name="from_month">
											<option value="0">января</option>
											<option value="1">февраля</option>
											<option value="2">марта</option>
											<option value="3">апреля</option>
											<option value="4">мая</option>
											<option value="5">июня</option>
											<option value="6">июля</option>
											<option value="7">августа</option>
											<option value="8">сентября</option>
											<option value="9">октября</option>
											<option value="10">ноября</option>
											<option value="11">декабря</option>
										</select>
									</span>
								</div>
							</div>
						</div>
						<div class="col-xs-1">
							<h4 class="is-marginless has-text-center">—</h4>
						</div>
						<div class="col-xs">
							<div class="form__group">
								<div class="form__control">
									<span class="select">
										<select name="to_day">
											@for($i = 1; $i <= 31; ++ $i)
												<option value="{{ $i }}">{{ $i }}</option>
											@endfor
										</select>
									</span>
								</div>
								<div class="form__control">
									<span class="select">
										<select name="to_month">
											<option value="0">января</option>
											<option value="1">февраля</option>
											<option value="2">марта</option>
											<option value="3">апреля</option>
											<option value="4">мая</option>
											<option value="5">июня</option>
											<option value="6">июля</option>
											<option value="7">августа</option>
											<option value="8">сентября</option>
											<option value="9">октября</option>
											<option value="10">ноября</option>
											<option value="11">декабря</option>
										</select>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form__control">
					<input type="number" min="0" pattern="[0-9]*" inputmode="numeric" name="persons_num" placeholder="Количество человек" require />
				</div>

				<div class="form__control">
					@foreach($houses as $house)
						<p>
							<label>
								<input
									type="radio"
									name="house"
									value="{{ $house->title }}, {{ $house->persons_num }} места"
									data-price="{{ $house->price }}"
									data-persons-num="{{ $house->persons_num }}"
									checked
								/>
								{{ $house->title }}, {{ $house->persons_num }} места
							</label>
						</p>
					@endforeach
				</div>

				<div class="form__control">
					<label>
						<input type="checkbox" name="has_food" />
						Включить трехразовое питание в ресторане — 900 рублей с человека в сутки
					</label>
				</div>

				<div class="form__control">
					<textarea name="comments" placeholder="Дополнительные пожелания"></textarea>
				</div>

				<p>Информация, которую Вы сообщаете посредством заявки, ни при каких условиях не передается третьим лицам.</p>
				<p>Окончательное оформление путевки происходит в представительстве компании</p>

				<div class="order-form__price"></div>

				<button class="is-centered">Отправить заявку</button>
			</form>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(function () {
		var form = $('#order_form');

		form.ajaxForm({
			successText: 'Ваша заявка успешно отправлена'
		});

		form.find(':input').on('change', function () {

			var data = form.getFormData()

			  , timeline1
			  , timeline2

			  , check;

			calcTimelines();
			calcCheck();

			form.find('.order-form__price').html(check);


			// Calculate timelines

			function calcTimelines()
			{
				var TO_DAY = 1 / (1000 * 60 * 60 * 24)

				  , now      = new Date()
				  , nowDay   = now.getDate()
				  , nowMonth = now.getMonth()
				  , nowYear  = now.getFullYear()

				  , fromDay       = parseInt(data.from_day, 10)
				  , fromMonth     = parseInt(data.from_month, 10)
				  , fromYear      = nowYear + (fromMonth == nowMonth ? (fromDay >= nowDay ? 0 : 1) : (fromMonth > nowMonth ? 0 : 1))
				  , fromTimestamp = new Date(fromYear, fromMonth, fromDay).getTime()

				  , toDay       = parseInt(data.to_day, 10)
				  , toMonth     = parseInt(data.to_month, 10)
				  , toYear      = fromYear + (toMonth == fromMonth ? (toDay >= fromDay ? 0 : 1) : (toMonth > fromMonth ? 0 : 1))
				  , toTimestamp = new Date(toYear, toMonth, toDay).getTime()

				  , startTimestamp = new Date(fromYear, 10, 1).getTime()
				  , endTimestamp   = new Date(toYear, 2, 31).getTime()

				  , flag = false;

				if (endTimestamp < startTimestamp) {
					var n = endTimestamp;
					endTimestamp = startTimestamp;
					startTimestamp = n;
					flag = true;
				}

				timeline1 = ~~((toTimestamp - fromTimestamp) * TO_DAY);
				timeline2 = ~~((Math.min(toTimestamp, endTimestamp) - Math.max(fromTimestamp, startTimestamp)) * TO_DAY)

				if (flag) {
					timeline2 = timeline1 - Math.max(timeline2, 0);
				}
			}


			// Calculate check

			function calcCheck()
			{
				var personsNum      = parseInt(data.persons_num, 10) || 0
				  , house           = data.house
				  , input           = form.find('input[value="' + house + '"]')
				  , housePrice      = input.data('price')
				  , housePersonsNum = input.data('persons-num')
				  , hasFood         = data.has_food
				  , hasDiscount     = timeline2 > 0

				  , price = 0
				  , n;
				
				check = '';

				if (timeline1 > 0 && personsNum > 0) {
					check += '<hr/>'
						  +  '<p>Ваш отдых продлится: <b>' + timeline1 + ' дней</b></p>';

					// House

					n = housePrice * Math.ceil(personsNum / housePersonsNum) * timeline1;
					price += n;

					check += '<p>Проживание в ' + house + ': <b>' + ftPrice(n) + ' руб.</b></p>';

					// Discount

					if (hasDiscount) {
						n = ~~(price * .2 * (timeline2 / timeline1));
						price -= n;
						check += '<p>'
							  +  'В период с <b>1 ноября</b> по <b>31 марта</b>, на проживание предоставляется скидка — <b>20%</b><br/>'
							  +  'Ваша скидка: <b>' + ftPrice(n) + ' руб.</b>'
							  +  '<p>';
					}

					// Food

					if (hasFood) {
						n = 900 * personsNum * timeline1;
						price += n;
						check += '<p>Трехразовое питание в ресторане: <b>' + ftPrice(n) + ' руб.</b></p>';
					}

					// Check

					check += '<div class="has-text-center">'
						  +  '<p><b>Итого, стоимость предоставлемых услуг ' + (hasDiscount ? 'с учетом скидки' : '') + ' составит:</b></p>'
						  +  '<h3>' + ftPrice(price) + ' руб.</h3>'
						  +  '</div>';
				}
			}


			function ftPrice(n)
			{
				n = String(n);
				var i = n.length - 3;

				while (i > 0) {
					n = n.slice(0, i) + ' ' + n.slice(i);
					i -= 3;
				}

				return n;
			}
		});
	});
</script>
(function ($) {

	var Alert = {
		add: function (text, isError, data) {
			var keys = text.match(/:[a-z]+/ig)
			  , alert = $('<div/>');

			if (keys && data) {
				$.each(keys, function (k, v) {
					text = text.replace(v, data[v.slice(1)] || '');
				});
			}

			if (isError) {
				alert.addClass('alert_error');
			}

			$('.alert').remove();
			alert
				.addClass('alert')
				.html(text)
				.appendTo($('body'));

			setTimeout(function () {
				alert.slideUp(200, function () {
					alert.remove();
				})
			}, 4000);

			return alert;
		}
	};

	$.fn.scrollTo = function (offset) {
		offset = offset || 0;

		var target = this.first()
		  , win = $(window)
		  , targetOffset = Math.max(target.offset().top - offset, 0)
		  , winOffset = win.scrollTop()
		  , dist = (targetOffset - winOffset)
		  , num = Math.max(Math.floor(Math.abs(dist / 50)), 1)
		  , step = dist / num
		  , i = 0
		  , intervalId;

		if (dist === 0) return;

		intervalId = setInterval(function () {
			if (++ i >= num) {
				clearInterval(intervalId);
			}
			win.scrollTop(winOffset + step * i);
		}, 20);

		return target;
	}

	$.fn.navTabs = function () {
		return this.each(function (i, el) {
			var target = $(this)
			  , tabList = target.find('.nav-tabs__list')
			  , tabAll = target.find('.nav-tabs__item')
			  , tabWrapper = target.find('.nav-tabs__wrapper')
			  , contentAll = target.find('.nav-tabs__content')
			  , list = [];

			function setTab(i, trigger) {
				if (i < 0 || i >= list.length) return

				var data = list[i];

				tabAll.removeClass('nav-tabs__item_active');
				contentAll.hide();
				data.tab.addClass('nav-tabs__item_active');
				data.content.show();

				tabList.trigger("sticky_kit:recalc");
				tabWrapper.trigger("sticky_kit:recalc");

				if (trigger) {
					target.trigger('selectTab', i);
				}
			}

			function init() {
				tabAll.each(function () {
					var tab = $(this)
					  , contentId = tab.data('target')
					  , content = target.find('#' + contentId)
					  , i = list.length;

					list[i] = {
						tab: tab,
						content: content
					};

					tab.on('click', function () {
						setTab(i, true);
					});
				});
			}

			init();
			setTab(0);
			tabList.stick_in_parent();
			tabWrapper.stick_in_parent();
		});
	}

	$.fn.getFormData = function () {
		var target = this.first()
		  , data = {}
		  , name, val;

		target.find(':input').each(function (i, el) {
			name = el.name;

			if (name !== 'undefined' || name !== '') {
				if (el.type == 'checkbox') {
					val = el.checked ? 1 : 0;
				} else
				if (el.type != 'radio' || el.checked) {
					val = $(el).val();
				}

				data[name] = val;
			}
		});

		return data;
	}

	$.fn.ajaxForm = function (settings) {
		var options = $.extend({
			successText: 'Отправлено',
			errorText: 'Произошла ошибка. Функция временно недоступна.'
		}, settings);

		return this.each(function () {
			var target = $(this)
			  , method = target.attr('method')
			  , action = target.attr('action')
			  , fields = target.find('input, select, textarea')
			  , required = fields.filter('[require]');

			function checkField(field) {
				var val = field.val()
				  , error = (val === undefined || val === '');

				if (error) {
					field.addClass('has-error');
				} else {
					field.removeClass('has-error');
				}

				return error ? field : null;
			}

			function checkFields() {
				return required.filter(function () {
						var el = $(this);
						return checkField(el) !== null;
					});
			}

			function submit() {
				var uncorrectable = checkFields();
				if (uncorrectable.length > 0) {
					uncorrectable.scrollTo(20)
					return;
				}

				var data = target.getFormData();

				target.addClass('form_loading');

				$.ajax({
					cache: false,
					dataType: 'json',
					method: method,
					url: action,
					data: data,
					success: function (data) {
						console.log('success', data);
						Alert.add(options.successText, false, data);
						if (options.success) {
							options.success(data);
						}
					},
					error: function (data) {
						console.log('error', data);
						Alert.add(options.errorText, true, data);
						if (options.error) {
							options.error(data);
						}
					},
					complete: function (xhr) {
						console.log('complete');
						target.removeClass('form_loading');
						if (options.complete) {
							options.complete(xhr);
						}
					}
				})
			}

			required.blur(function (e) {
				var el = $(this);
				checkField(el);
			});

			target.on('submit', function (e) {
				e.preventDefault();
				submit();
			})
		})
	}
})(jQuery);

$(function () {
	var token = document.head.querySelector('meta[name="csrf-token"]');

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': token.content
		}
	});
});
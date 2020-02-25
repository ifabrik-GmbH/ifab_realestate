$(document).ready(function ($) {
	var form = $('.real_estate_ajax');

	var service = {
		ajaxCall: function (data) {
			$.ajax({
				url: form.attr('data-xhr'),
				cache: false,
				method: 'POST',
				data: data.serialize(),
				success: function (result) {
					$('.foundProperties').empty().append(result);

				},
				error: function (jqXHR, textStatus, errorThrow) {

				}
			});
		}
	};

	$('form.real_estate_ajax select').on('change', function (ev) {
		ev.preventDefault();
		service.ajaxCall($(this));
	});
	$('form.real_estate_ajax input').on('keyup', function (ev) {
		ev.preventDefault();
		service.ajaxCall($(this));
	});
});

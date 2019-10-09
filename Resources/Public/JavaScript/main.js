$(document).ready(function ($) {
	var form = $('.real_estate_ajax');

	var service = {
		ajaxCall: function (data) {
			$.ajax({
				url: form.attr('data-xhr'),
				cache: false,
				data: form.serialize(),
				success: function (result) {
					$('.foundProperties').empty().append(result);

				},
				error: function (jqXHR, textStatus, errorThrow) {

				}
			});
		}
	};

	$('form select, form input').on('change', function (ev) {
		ev.preventDefault();
		service.ajaxCall($(this));
	});
});

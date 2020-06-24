require('./bootstrap');

$('#btnReceiveNews').click(function (e) {
	e.preventDefault();
	swal({
		title: "Đăng ký nhận tin",
		content: {
			element: "input",
			attributes: {
				placeholder: "Mời bạn nhập email...",
				type: "email",
				id: "emailReceiveNews"
			},
		},
	});
});

$(window).scroll(function (event) {
	$('#navbar-bottom').addClass('fixed-top');
	var scroll = $(this).scrollTop();
	if (scroll == 0) {
		$('#navbar-bottom').removeClass('fixed-top');
	}
});

$(function () {
	$(document).click(function (event) {
		if(!$(event.target).is('#navbar-bottom')){
      $('.navbar-collapse').collapse('hide');
		}
	});
});
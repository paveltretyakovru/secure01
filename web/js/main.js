(function () {
	var swiper = new Swiper('.swiper-container', {
		autoplay: 5000,
		loop: true,
		direction: 'horizontal',
		mousewheelControl: false,
		keyboardControl: true,
		mousewheelReleaseOnEdges: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev'
	});
	var swiper2 = new Swiper('.swiper-container2', {
		loop: true,
		direction: 'horizontal',
		mousewheelControl: false,
		keyboardControl: true,
		mousewheelReleaseOnEdges: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev'
	});

	$('#menu-title').click( function () {
		$('.overlay').css('left', '-100%');
		$('body').removeAttr('style');
	});

	$('#mobile-menu').click ( function () {
		$('.overlay').css('left', '0');
		$('body').css('overflow','hidden');
	});

 //    $('.navigation__item').click( function (e) {
 //    	e.stopPropagation();
 //        if ($(this).hasClass('active')) {
 //            $('.navigation__item').removeClass('active');
 //            $('.navigation__panel').css('top', '-100%');
 //        } else {
 //            $('.navigation__item').removeClass('active');
 //            $(this).addClass('active');
 //            $('.navigation__panel').css('top', '-100%');
 //            var target = $(this).data('target');
 //            $(target).css('top', '0');
 //        }
 //    });
	// $(document).on('click', function(e){
 //         if(!$(event.target).closest('.navigation__panel').length ) {
 //         	$('.navigation__panel').css('top', '-100%');
 //         	$('.navigation__item').removeClass('active');
 //         }
 //    });

	// $('.cta').ripple({
	// 	color:'white',
	// 	time:'0.8s'
	// });

	$('.swiper-button-prev').ripple({
		color:'white',
		time:'0.5s'
	});

	$('.swiper-button-next').ripple({
		color:'white',
		time:'0.5s'
	});

	// $('.callback').ripple({
	// 	color:'white',
	// 	time:'0.8s'
	// });


}());
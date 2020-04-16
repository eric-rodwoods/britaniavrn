$('.burger-menu').on('click', openMenu);

function openMenu() {
	if ($('.hidden-menu').hasClass('close')){
		$('.hidden-menu').addClass('open');
		$('.hidden-menu').removeClass('close');
	} else if ($('.hidden-menu').hasClass('open')) {
		$('.hidden-menu').addClass('close');
		$('.hidden-menu').removeClass('open');
	}
}

$(".show-more__button").on('click', function () {
		$(this).addClass("hide");
  		$(this).nextAll(".hide").addClass("show");
  		$('.hide-more__button').addClass('show');
  		$('.show-more__button').addClass('hide');
	});

$(".hide-more__button").on('click', function () {
		$('.show').removeClass("show");
		$('.show-more__button').removeClass('hide');
	});

// $(document).ready(function () {
//   //initialize swiper when document ready
//   var mySwiper = new Swiper ('.swiper-container', {
//     // Optional parameters
//     direction: 'vertical',
//     loop: true
//   })
// });

    var swiper = new Swiper('.swiper-container', {
   		loop: true,
  		centeredSlides: true,
  		parallax:true,
  		autoplay: {
    		delay: 5000,
    		disableOnInteraction: false,
  		},
  		pagination: {
    		el: '.swiper-pagination',
    		clickable: true,
  		},
      navigation: {
    		nextEl: '.swiper-button-next',
    		prevEl: '.swiper-button-prev',
  		},
	});

jQuery(document).ready(function () {

jQuery('.wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

jQuery(window).scroll(function(){
	var topScroll = jQuery(window).scrollTop();
	if(topScroll >= 20){
		jQuery('header').addClass('et-fixed-header');
	}
	else{
		jQuery('header').removeClass('et-fixed-header');
	}
});  

});
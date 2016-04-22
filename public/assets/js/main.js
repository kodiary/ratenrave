jQuery(document).ready(function($){
 
    $(document).on('click','.close',function() {
     
  $(this).parent().parent().hide( "slow" );
});
	/*$(window).load("bind", function(){*/

		/*** Masonary ***/
		var $container = $('.grid');
        // initialize
        $container.masonry({
        	itemSelector: '.grid > li'
       /* });*/

    });

	/*** Sidebar ***/
	$(window).resize(function(){
		if($(window).width() < 768){			
		}else{
			var offset= $('.sidebar_left').offset().top ;
			$(window).scroll(function(){
				if(($(this).scrollTop() + 100) > offset){
					$('#sticky-sidebar').css('position','fixed');
					$('.fixed-sidebar').addClass('sidebar-fixed');
				}else{
					$('#sticky-sidebar').css('position','static');
					$('.fixed-sidebar').removeClass('sidebar-fixed');
				}
			});
		}
	}).resize();


	/*** Sidebar active for li ***/
	$('.fixed-sidebar li').click(function () {
		$('active').toggleClass('menuOpen');
		$(this).toggleClass('active');
	});

	$('fixed-sidebar li').click(function () {
		$('active').removeClass('menuOpen');
		$('.fixed-sidebar li').removeClass('active');
	});


	/*** Scroll to top ***/
	$("#topcontrol").hide();

	$(window).scroll(function () {

		if ($(this).scrollTop() > 100) {

			$('#topcontrol').fadeIn();

		} else {

			$('#topcontrol').fadeOut();

		}

	});

	$('#topcontrol').click(function () {

		$('body,html').animate({scrollTop: 0}, 800);

		return false;

	});


/*
	$(window).load("bind", function(){
	$('.grid li').addClass('wow animated fadeInUp');
	$('.resturant-wrapper').addClass('wow animated fadeInUp');


   wow = new WOW(
   {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
  }
  )
   wow.init();
});
*/
/** view popup **/
$( ".view a" ).click(function() {
  $( "#adiv" ).show( "slow" );
});





/** Review popup **/
$( ".review a" ).click(function() {
  $( "#bdiv" ).show( "slow" );
});




$('#input-id').on('rating.clear', function(event) {
    console.log("rating.clear");
});

});

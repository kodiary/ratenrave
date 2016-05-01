<!DOCTYPE html>

<html> 
<!--<![endif]-->
<head>
	<title>Rating</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel='stylesheet' id='rating-style-css'  href="{{ asset('assets/style.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css'  href="{{ asset('assets/css/bootstrap.css') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='responsive-css'  href="{{ asset('assets/css/responsive.css') }}" type='text/css' media='all' />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<link rel='stylesheet' id='animate-css'  href='css/animate.css' type='text/css' media='all' />
	
	<!--Rating -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('assets/css/star-rating.min.css') }}" media="all" rel="stylesheet" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="{{ asset('assets/js/star-rating.min.js') }}" type="text/javascript"></script>

	
	<script type='text/javascript' src="{{ asset('assets/js/html5.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/js/main.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/js/wow.js') }}"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="page">
      @include('layouts.includes.header')  




<div class="container-fluid">
    @include('common.alert_messages')
</div>

<div class="container">
	<div class="content row clearfix">
		<div class="content_right col-md-9 col-sm-8" >
            @yield('content')
        </div>
        <div class="sidebar_left col-md-3 col-sm-4">
    			<div id="sticky-sidebar" class="fixed-sidebar" style="position: static;">
    				@include('layouts.includes.leftsidebar')
    			</div>
            </div><!-- .sidebar_left  -->            
            <div class="clearfix"></div>
    </div>
</div>

 <div class="footer">
    @include('layouts.includes.footer') 
    	
    </div><!-- .footer  -->
    
    <div id="topcontrol" style="position: fixed; bottom: 22px; right: 10px; opacity: 1; cursor: pointer;" title="Scroll Back to Top"><i class="fa fa-arrow-up"></i>Top
    </div>
    
    <div class="view-popup-wrapper" id="adiv" style="display:none;">
    	<!-- .view-popup-->
    </div><!-- .view-popup-wrapper -->
    
    		<div class="review_rating_wrapper" id="bdiv" style="display:none;">
    			<!-- .review_rating  -->
    		</div><!-- .review_rating_wrapper -->
    
  

</div><!-- #page  -->
<script>
$(function(){
    $(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
    var url  = $('.nxtPage').text();
    if(url)
    {
        $('.nxtPage').remove();
        
           $.ajax({
            url:url,
            type:'post',
            success:function(msg)
            {
                $('.collegelists').append(msg);
            }
           })
      }
   }
});
})
</script>
</body>
</html>

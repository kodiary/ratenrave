<div class="review_rating">
	<div class="close">x</div>
	<h3 class="product_title">{{$college->name}}</h3>
	<div class="detail-ratings clearfix">
     <?php $ratings = \App\Http\Models\RatingDefine::where('type','college')->get();
            foreach($ratings as $rating)
            {?>
            	<div class="ratings">
				<span>{{$rating->title}}</span>
				<img src="{{ asset('assets/images/stars.png') }}">
			 </div>
    <?php }?>
		
	</div><!-- .detail_ratings  -->
</div>
<div class="view-popup">
	<div class="close" >x</div>
	<div class="img_detail col-md-4 col-sm-6">
		<img alt="" class="img-full" src="{{ asset('assets/images/colleges/'.$college->logo) }}">
	</div><!-- .img_detail -->

	<div class="detail_rating col-md-8 col-sm-6">
		<h3 class="product_title">{{$college->name}}</h3>
		<div class="description">
			{{$college->description}} 
		</div><!-- .description  -->

		<div class="detail-ratings clearfix">
         <?php $ratings = \App\Http\Models\RatingDefine::where('type','college')->get();
                        foreach($ratings as $rating)
                        {?>
			<div class="ratings">
				<span>{{$rating->title}}</span>
				<img src="{{ asset('assets/images/stars.png') }}">
			</div>
        <?php }?>
			
		</div><!-- .detail-ratings  -->
	</div><!-- .detail_rating  -->
</div>
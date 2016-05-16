<div class="view-popup">
	<div class="close" >x</div>
	<div class="img_detail col-md-4 col-sm-6">
      
		<img alt="" class="img-full" src="<?php echo asset('assets/images/'.show_img('$college->logo'));?>">
        <h2>Faculites</h2>
        <?php
            $faculties = \App\Http\Models\CollegeFaculties::where('coll_id',$college->id)->get();
            foreach($faculties as $fac)
            {
                echo $fac->title."<br/>";
            }
        ?>
        
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
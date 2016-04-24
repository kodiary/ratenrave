<?php
    foreach($colleges as $college){
 ?>       
    
        <li class="col-md-3 col-sm-4 col-xs-12 no-padding">
    		<div class="product-item">
                <div class="img_btn_wrap">
    				<img alt="" class="img-responsive" src="{{ asset('assets/images/colleges/'.$college->logo) }}" />
    				<div class="hover_item">
                        <?php $ratings = \App\Http\Models\RatingDefine::where('type','college')->get();
                        foreach($ratings as $rating)
                        {?>
                       	    <div class="ratings">
        						<span>{{$rating->title}}</span>
        						<img src="{{ asset('assets/images/stars.png') }}">
    					    </div>
                        <?php   
                        }
                        ?>
    				
    
    				</div><!-- .hover-item -->
    				<div class="product_btn">
    					<div class="view"><a href="javascript:void(0)" onclick="popupload('adiv','{{$college->id}}')">view</a></div>
    					<div class="review"><a href="javascript:void(0)"onclick="popupload('bdiv','{{$college->id}}')">review</a></div>
    				</div>
    			</div>
    
    			<div class="product-details">
    				<h3 class="product_title">{{$college->name}}</h3>
    				<div class="ratings">
    					<span>Ratings</span>
    					<input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="lg" >
                        <img src="{{ asset('assets/images/stars.png') }}">
    				</div>				
    			</div>
    		</div>

      </li>
<?php }?>
               
    

<?php
if($colleges->hasMorePages()){?>
<div class="nxtPage" style="display: none;">{{$colleges->nextPageUrl()}}</div>
<?php }
if (isset($_GET['page']) && $_GET['page']==$colleges->lastPage())
    echo "No more results found!";
?>


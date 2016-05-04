<div class="review_rating" id="rate_{{ $college->id }}">
	<div class="close">x</div>
	<h3 class="product_title">{{$college->name}}</h3>
	<div class="detail-ratings clearfix">		
	</div><!-- .detail_ratings  -->
</div>
<script>
var dt = false;
var pid = 0;
(function() {

    'use strict';

    // SHOP ELEMENT
    var shop = document.querySelector('.detail-ratings');

    // DUMMY DATA
    var data = [
    <?php $ratings = \App\Http\Models\RatingDefine::where('type','college')->get();
            foreach($ratings as $rating)
            {?>
      {
        title: "<?php echo $rating->title;?>",
        cid: "<?php echo $college->id;?>",
        rating: 0,
        ctarget:"<?php echo $rating->id;?>"
      },
      <?php }?>
      
    ];

    // INITIALIZE
    (function init() {
      for (var i = 0; i < data.length; i++) {
        addRatingWidget(buildShopItem(data[i]), data[i]);
      }
    })();

    // BUILD SHOP ITEM
    function buildShopItem(data) {
      var shopItem = document.createElement('div');

      var html ='<div class="c-shop-item__details">' +
          '<div class="col-md-4">' + data.title + '</div>' +
          '<ul class="col-md-8 c-rating" id="ctarget'+data.ctarget+'"></ul>' +
          '<span class="rated" style="display:none;">Rated</span>'+
        '<div class="clearfix"></div></div>';

      shopItem.classList.add('c-shop-item');
      shopItem.classList.add('ratings');
      shopItem.innerHTML = html;
      shop.appendChild(shopItem);

      return shopItem;
    }





function addRatingWidget(shopItem, data) {
    dt = data;
    console.log(dt);
      var ratingElement = shopItem.querySelector('.c-rating');
      var currentRating = data.rating;
      var maxRating = 5;
      //alert(ratingElement.closest('.review_rating').attr('id'));
      var callback = function(rating) { 
        var rate = rating;
        var college = dt.cid;
        var rating_id = pid;
        //alert(rating+'_'+dt.cid);alert(pid) 
        $.ajax({
            url:"<?php echo url('/home/submitRate/');?>",
            data:'target_id='+college+'&rating_id='+rating_id+'&rating='+rate,
            type:'post',
            success:function(){
                $('#ctarget'+rating_id+' .rated').show();
            }
        })
        };
      var r = rating(ratingElement, currentRating, maxRating, callback);
    }
    })();
</script>

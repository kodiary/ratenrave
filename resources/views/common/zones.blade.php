<div class="col-md-12">
    <select name="zone" class="zones">
    <option value="">Select zone</option>
    <?php
        $zones = \App\Http\Models\Zones::where('id','>','0')->get();
        foreach($zones as $zone)
        {
            if((isset($restaurant) &&(strtolower($zone->title)==strtolower($restaurant->zone)|| $zone->id == $restaurant->zone))
                || (isset($_GET['zone'])&&$_GET['zone']==$zone->id."_".$zone->title))
                $selected = "selected='selected'";
            else
                $selected = '';
            ?>
           
            <option value="<?php echo isset($from_search)?$zone->id."_".$zone->title:$zone->id;?>" <?php echo $selected;?> ><?php echo $zone->title;?></option>
        <?php
        }
    
    ?>
</select>
</div>   
<div class="district col-md-6">


</div>
<div class="addressbox col-md-12">
    <input type="text" name="address" class="address" placeholder="Address" value="<?php echo isset($restaurant)?$restaurant->address: (isset($_GET['address'])?$_GET['address']:'');?>" />

</div>

<script>
$(function(){
    $('.zones').change(function(){
        var search = '';
        var z_id = $(this).val();
        if(z_id== '')
        {
            $('.district').html('');
            $('.district').show();
        }
        if(id = z_id.split('_'))
            z_id = id[0];
        <?php if(isset($from_search)){?>
                search = '?search';
        <?php }?>
        $.ajax({
            type:"POST",
            url:"{{url('college/getdistrict')}}/"+z_id+search,
            success:function(res){
                $('.district').show();
                $('.district').html(res);
            }
        })
    })
    if( $('.zones').val()!="")
    {
        
        var z_id = $('.zones').val();
        if(id = z_id.split('_'))
            z_id = id[0];
        
        var coll_id = '';
        var district = '';
        <?php if(isset($restaurant)){?>
                coll_id = '/'+<?php echo $restaurant->id;?>;
        <?php }?>
        <?php if(isset($_GET['district'])){?>
                district = '?district=<?php echo $_GET['district'];?>';
        <?php }?>
         
        $.ajax({
            type:"POST",
            url:"{{url('college/getdistrict')}}/"+z_id+coll_id+district,
            success:function(res){
                $('.district').show();
                $('.district').html(res);
            }
        })
    }
})
</script>
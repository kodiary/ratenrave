<div class="col-md-6">
    <select name="zones" class="zones">
    <option value="">Select zone</option>
    <?php
        $zones = \App\Http\Models\Zones::where('id','>','0')->get();
        foreach($zones as $zone)
        {
            echo "<option value='".$zone->id."'>".$zone->title."</option>";
        }
    
    ?>
</select>
</div>   
    <div class="district col-md-6">

    
    </div>

<script>
$(function(){
    $('.zones').change(function(){
        var z_id = $(this).val();
        $.ajax({
            type:"POST",
            url:"{{url('college/getdistrict')}}/"+z_id,
            success:function(res){
                $('.district').show();
                $('.district').html(res);
            }
        })
    })
})
</script>
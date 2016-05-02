<ul>
    <?php if(!\Session::get('fb_id'))
                            {?>
    <li class="blue-bg">
        <a href="{{url('/facebook/redirect/')}}" title="Login With Facebook" rel="fblogin"><i class="fa fa-facebook"></i><h2>Login with facebook</h2></a>
                            
    </li>
    <?php }?>
    <li class="act">
        <a>
        <i class="fa fa-search"></i>
        <h2>Advance Search</h2>
        </a>
    </li>
	<li class="act">
        <a href="#" onClick="$('#tog').toggle();">
            <i class=""></i>
            <h2>Faculties</h2>
			<div class="sidebar-filter" id="tog" style="display:block;">
            <?php $faculties = faculties();?>
                <h3>Availability</h3>
                	<div class="checkbox-list">
                <?php foreach($faculties as $fac){?>
                    <label><div class="checker"><span><input type="checkbox"></span></div><?php echo $fac->title;?></label>
                <?php }?>
			</div>
                <h3>Price</h3>
				<p>
					<label for="amount">Range:</label>
					<input type="text" style="border:0; color:#f6931f; font-weight:bold;" id="amount">
				</p>
				<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 40%;">
                    </div>
                    <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 10%;"></a>
                    <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 50%;"></a>
                </div>
            </div>
        </a>
	</li>

	<li>
        <a href="">
            <i class="fa fa-user"></i>
			<h2>Food Name</h2>
        </a>
    </li>
	<li>
        <a href="">
            <i class="fa fa-location-arrow"></i>
			<h2>Location</h2>
        </a>
    </li>
</ul>

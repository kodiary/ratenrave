<?php
    printfile("views/dashboard/restaurant/restaurant.blade.php");
    //var_dump(get_defined_vars());

    $name = iif($new, "restname", "name");//why does it change to restname?
    if (!isset($is_disabled)) {
        $is_disabled = false;
    }
    if (!isset($minimum)) {
        $minimum = false;
    }

    if(!isset($new) || !$new){
        $new = false;
        $searchcode= "";
    } else {
        $searchcode = ' ONKEYUP="restsearch(event);"';
    }
    
    if(isset($restaurant->name)){
         $GLOBALS['thisIdentity']="Restaurant%20Name:%20%20%20".$restaurant->name."%20%20(Restaurant ID:%20".Session::get('session_restaurant_id').",%20Profile ID:%20".Session::get('session_ID').")";
    }

    $alts = array(
            "browse" => "Browse for a picture to upload",
            "logo" => "The restaurant's current picture"
    );

echo newrow($new, "Name", "",true); ?>
    <input name="initialRestSignup" type="hidden" value="1" />
    <input type="text" name="restname" id="restname" class="form-control" {{ $is_disabled }} value="{{ (isset($restaurant->name) && $restaurant->name)?$restaurant->name: old("restname") }}" required
    <?= $searchcode; ?>>
    @if($new)
        <DIV ID="restsearch" CLASS=""></DIV>
        <INPUT TYPE="hidden" name="claim" id="claim">

    @endif
<? echo newrow(); ?>

<?= newrow($new, "Phone Number", "", true); ?>
    <input type="text" name="phone" id="phone" class="form-control" {{ $is_disabled }} value="{{ (isset($restaurant->phone))?$restaurant->phone: old("phone")}}" required>
</div></div>
<div class="form-group row editaddress ">
    <label id="email_label" class="col-md-3 text-md-right required">Email</label>
    <div class="col-md-9">    
        <input type="text" required="" value="{{$restaurant->email}}" class="form-control" id="email" name="email">
    </div>
</div>
<div class="form-group row editaddress ">
    <label id="website_label" class="col-md-3 text-md-right required">Website</label>
    <div class="col-md-9">    
        <input type="text" required="" value="{{$restaurant->website}}" class="form-control" id="website" name="website">
    </div>
</div>
<?php if(!$new){
    echo newrow($new, "Description", "", false, 9);
    echo '<textarea name="description" id="messageArea" class="form-control"' . $is_disabled . '>';
    if (isset($restaurant->description)){ echo $restaurant->description; } else { echo old('description');}
    echo '</textarea>' . newrow();

    if($restaurant->is_complete){
        echo newrow($new, "Accept Online Orders", "", false, 9) . '<label class="c-input c-checkbox"><input name="open" type="checkbox" value="1"';
        if($restaurant->open){echo " CHECKED";}
        echo '>Yes<span class="c-indicator"></span></label></DIV></DIV>';
    }
}
echo '<DIV id="cuisinelist">';
echo newrow($new, "Faculties", "", true, 9, '<br>');
echo '<input name="cuisines" type="hidden" /><div class="row">';
$cuisineExpl = faculties_college($restaurant->id);

/*
if (isset($restaurant->cuisine)) {
    $cuisineExpl = explode(",", $restaurant->cuisine);
}
*/
//var_dump($cuisine_list); die();
$cnt = 0;
$cuisinesChkd = 0;
$cuisineListA = $cuisine_list;
//sort($cuisineListA);
foreach ($cuisine_list as $name) {
    
    echo "<div class='cuisineCB col-sm-6 col-xs-6'><LABEL class='c-input c-checkbox'><input name='cuisine" . $cnt . "' type='checkbox' onclick='this.checked=chkCBs(this.checked)' value='" . $name->title . "'";
    if (isset($cuisineExpl)) {
        if (in_array($name->title, $cuisineExpl)) {
            echo " checked";
            $cuisinesChkd++;
        }
    }
    echo " />" . $name->title . "<span class='c-indicator'></span></LABEL></div>";
    $cnt++;
}

echo '</div><DIV STYLE="color: red; display: none;" ID="cousine-error">You must select at least one cuisine in order to continue. You may make adjustments later.</DIV><script>var cuisineCnt = ' . $cnt . '; var cbchkd = ' . $cuisinesChkd . ';</script></div></div></div>';

if(!$minimum && isset($restaurant->id)){
        echo newrow($new, "Logo", "", "", 7);
        $logoname = 'assets/images/restaurants/'. $restaurant->id .'/small-' . $restaurant->logo;
        ?>
        <a href="javascript:void(0);" id="uploadbtn" class="btn btn-success pull-left rightmarg" title="{{ $alts["browse"] }}">Browse</a><div id="browseMsg" class="label smRd"></div>

        <div class="clearfix pull-left">
            <input type="hidden" name="logo" id="hiddenLogo"/>

            <img id="picture" class="logopic" alt="{{ $alts["logo"] }}"
                @if(isset($restaurant->logo) && $restaurant->logo != "")
                    title="{{ $logoname }}"
                    src="{{ asset($logoname) ."?" . date('U') }}"/>
                @else
                    src="{{ asset('assets/images/small-smiley-logo.png') }}"/>
                @endif
                    <!-- <span id="fullSize" class="smallT"></span> -->
        </div>
    </div></div>
    <div class="form-group row editaddress ">
        <label id="import_csv" class="col-md-3 text-md-right">Import Menu CSV</label>
        <div class="col-md-7">
            <input type="file" name="import_csv" class="form-control" />
        </div>
    </div>
 
    <?= newrow($new, "", "", "", 12, true);?>
        <hr class="m-y-1" align="center"/>
        <input name="restLogoTemp" type="hidden" id="restLogoTemp"/>
        <button type="submit" class="btn btn-primary pull-right">Save</button>
    <?= newrow();
}
?>


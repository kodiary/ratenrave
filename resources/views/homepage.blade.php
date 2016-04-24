@extends('layouts.default')
@section('content')
<ul class="product-list  effect-2 collegelists" id="grid">
    @include('colleges',$colleges)
</ul>
<script>
function popupload(div, cid)
{
    if(div == 'adiv')
        var url = '{{url("/college/getdetail")}}/'+cid;
    else
        var url ='{{url("/college/getdetail")}}/'+cid+'?review'
    
    $.post( url, function( data ) {
  $( "#"+div ).html( data );
});
    
}
</script>
@stop
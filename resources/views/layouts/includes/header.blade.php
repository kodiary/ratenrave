<?php 
?>
<div class="header clearfix">
    			<div class="container">
    				<div class="col-md-12 col-sm-12">
    					<div class="row">
    						<div class="logo col-md-3 col-sm-5 no-padding">
    							<a href="{{url()}}" title="Rating" rel="home"><img src="{{ asset('assets/images/logo.png') }}" style="height:55px;" /></a>
    						</div><!-- .logo -->
                            <div class="fblogin col-md-3">
                                <a href="" title="Login With Facebook" rel="fblogin"><img src="{{ asset('assets/images/fblogin.png') }}" /></a>
                            </div>
    						<div class="header_right col-md-6 col-sm-7 no-padding">
                            <?php
if(isset($_GET['search'])&& $_GET['search']!="")
    echo "Search results for '<b>".$_GET['search']."</b>'";
?>
  
    							<div class="search_btn">
    								<form id="searchForm" name="searchForm" method="get" action="{{url('/college/search/')}}">
    									<input class="search-field" name="search" type="text" value="" maxlength="200" />
    									<input class="search-submit" type="submit" value="Search" />
    								</form>
    							</div><!-- .search_btn  -->
    
    					</div><!-- .header_right  -->
    				</div><!-- .row  -->
    			</div><!-- .col  -->
    		</div><!-- .container  -->
    </div><!-- .header  -->
@extends('layouts.default')
@section('content')
<ul class="product-list grid effect-2" id="grid">
                    <li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    					<div class="product-item">
                            <div class="img_btn_wrap">
    							<img alt="" class="img-responsive" src="{{ asset('assets/images/single-1.jpg') }}" />
								<div class="hover_item">
									<div class="ratings">
										<span>food</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>color</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>size</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>taste</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>Style</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>

								</div><!-- .hover-item -->
								<div class="product_btn">
									<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
									<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
								</div>
    						</div>
    
							<div class="product-details">
								<h3 class="product_title">Product</h3>
								<div class="ratings">
									<span>Ratings</span>
									<input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="lg" >
								</div>				
							</div>
    					</div>
    				</li>
                    <li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    					<div class="product-item">
    						<div class="img_btn_wrap">
    							<img alt="" class="img-responsive" src="{{ asset('assets/images/single-2.jpg') }}"/>
								<div class="hover_item">
									<div class="ratings">
										<span>food</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>color</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>size</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>taste</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>
									<div class="ratings">
										<span>Style</span>
										<img src="{{ asset('assets/images/stars.png') }}">
									</div>

								</div><!-- .hover-item -->
								<div class="product_btn">
									<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
									<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
								</div>
    						</div>
    
							<div class="product-details">
								<h3 class="product_title">Product</h3>
								<div class="ratings">
									<span>Ratings</span>
									<img src="{{ asset('assets/images/stars.png') }}">
								</div>
							</div>			
    					</div>
    				</li>
                    <li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    					<div class="product-item">
    						<div class="img_btn_wrap">
    							<img alt="" class="img-responsive" src="{{ asset('assets/images/single-3.jpg') }}"/>
    							<div class="hover_item">
    								<div class="ratings">
    									<span>food</span>
    									<img src="{{ asset('assets/images/stars.png') }}">
    								</div>
    								<div class="ratings">
    									<span>color</span>
    									<img src="{{ asset('assets/images/stars.png') }}">
    								</div>
    								<div class="ratings">
    									<span>size</span>
    									<img src="{{ asset('assets/images/stars.png') }}">
    								</div>
    								<div class="ratings">
    									<span>taste</span>
    									<img src="{{ asset('assets/images/stars.png') }}">
    								</div>
    								<div class="ratings">
    									<span>Style</span>
    									<img src="{{ asset('assets/images/stars.png') }}">
    								</div>
    
    							</div><!-- .hover-item -->
    							<div class="product_btn">
    								<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    								<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    							</div>
    						</div>
    
    						<div class="product-details">
    							<h3 class="product_title">Product</h3>
    							<div class="ratings">
    								<span>Ratings</span>
    								<img src="{{ asset('assets/images/stars.png') }}">
    							</div>
    						</div>
    					</div>
    				</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-4.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-5.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-6.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-7.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-8.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-9.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-6.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    										</div>
    					</li>
    
    					<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-7.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    											
    										</div>
    				</li>
    
    				<li class="col-md-4 col-sm-4 col-xs-12 no-padding">
    										<div class="product-item">
    											<div class="img_btn_wrap">
    												<img alt="" class="img-responsive" src="{{ asset('assets/images/single-8.jpg') }}">
    												<div class="hover_item">
    													<div class="ratings">
    														<span>food</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>color</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>size</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>taste</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    													<div class="ratings">
    														<span>Style</span>
    														<img src="{{ asset('assets/images/stars.png') }}">
    													</div>
    
    												</div><!-- .hover-item -->
    												<div class="product_btn">
    													<div class="view"><a href="javascript:hideshow(document.getElementById('adiv'))">view</a></div>
    													<div class="review"><a href="javascript:hideshow(document.getElementById('bdiv'))">review</a></div>
    												</div>
    											</div>
    
    											<div class="product-details">
    												<h3 class="product_title">Product</h3>
    												<div class="ratings">
    													<span>Ratings</span>
    													<img src="{{ asset('assets/images/stars.png') }}">
    												</div>
    											</div>
    
    										</div>
    				</li>
    
    			</ul>
                @stop
@extends('layouts.website')
@section('main_body')
<!-- Slider Area -->
<section class="hero-slider">
	<div class="single-slider">
		<div class="container-fluid">
		<div class="row">
			<!-- <div class="col-lg-3"></div> -->
				<div class="col-lg-9 offset-lg-3 slider-single-part">
					<div class="owl-carousel owl-theme custom1">
						
						<div class="slider-part item" style=" background-image:  url('{{ asset('website/images/91.jpg') }}');">
							<div class="text-inner">
								<div class="row">
									<div class="col-lg-7 col-12 middle">
									
										
											
									</div>
								</div>
							</div>
						</div>
						<div class="slider-part item" style=" background-image:  url('{{ asset('website/images/92.jpg') }}');">
							<div class="text-inner">
								<div class="row">
									<div class="col-lg-7 col-12 middle">
										
											
											
									
									</div>
								</div>
							</div>
						</div>
						<div class="slider-part item" style=" background-image:  url('{{ asset('website/images/93.jpg') }}');">
							<div class="text-inner">
								<div class="row">
									<div class="col-lg-7 col-12 middle">
									
										
											
							
									</div>
								</div>
							</div>
						</div>
						<div class="slider-part item" style=" background-image:  url('{{ asset('website/images/92.jpg') }}');">
							<div class="text-inner">
								<div class="row">
									<div class="col-lg-7 col-12 middle">
									
											
							
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Start Small Banner  -->
<section class="small-banner section">
		<div class="container-fluid single-part-bg">
			<div class="section-title">
					<h2>Todays Deal</h2>
				</div>
			<div class="row">
				<div class="owl-carousel custom-slider2">
				<!-- Single Banner  -->
				
						<div class="single-banner tab-height  card slider-card">
							
								<img src="{{ asset('website/images/81.jpg') }}" alt="#">
								<div class="content">
									<p>Man's Collectons</p>
									<h3 class="single-banner-title">Summer travel <br> collection</h3>
									<a class="discover-btn" href="#">Discover Now</a>
								</div>
							
						</div>
				
					<!-- /End Single Banner  -->
					<!-- Single Banner  -->
					
						<div class="single-banner card tab-height slider-card">
							<img src="{{ asset('website/images/82.jpg') }}" alt="#">
							<div class="content">
								<p>Flash Sale</p>
								<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
								<a href="#" class="discover-btn">Discover Now</a>
							</div>
						</div>
			
					<!-- /End Single Banner  -->
					<!-- Single Banner  -->
				
						<div class="single-banner card tab-height slider-card">
							<img src="{{ asset('website/images/83.jpg') }}" alt="#">
							<div class="content">
								<p>Flash Sale</p>
								<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
								<a href="#" class="discover-btn">Discover Now</a>
							</div>
						</div>
						<div class="single-banner card tab-height slider-card">
							<img src="{{ asset('website/images/84.jpg') }}" alt="#">
							<div class="content">
								<p>Flash Sale</p>
								<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
								<a href="#" class="discover-btn">Discover Now</a>
							</div>
						</div>

						<div class="single-banner card tab-height slider-card">
							<img src="{{ asset('website/images/85.jpg') }}" alt="#">
							<div class="content">
								<p>Flash Sale</p>
								<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
								<a href="#" class="discover-btn">Discover Now</a>
							</div>
						</div>
						<div class="single-banner card tab-height slider-card">
							<img src="{{ asset('website/images/84.jpg') }}" alt="#">
							<div class="content">
								<p>Flash Sale</p>
								<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
								<a href="#" class="discover-btn">Discover Now</a>
							</div>
						</div>
			

				<!-- /End Single Banner  -->
				</div>
			</div>
		</div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
        <div class="container single-part-bg">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2 class="trending-heading">Trending Item</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/26.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/26.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/27.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/27.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/28.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/28.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/29.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/29.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/30.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/30.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/blue-shoes-29507491.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/blue-shoes-29507491.jpg') }}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/28.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/28.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/29.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/29.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/30.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/30.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/blue-shoes-29507491.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/blue-shoes-29507491.jpg') }}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="women" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/2.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/2.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/3.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/3.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
									
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/5.jpg') }}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/bd.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="kids" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/14.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/14.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" class="cart-btn" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/15.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/15.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/18.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/18
														.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/17.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/17.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/18.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/18.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="accessories" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/11.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/11.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/14.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/14.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/15.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/15.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/17.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/17.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/18.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/18.jpg') }}" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="essential" role="tabpanel">
								<div class="tab-single">
									<div class="row"> 
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/26.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/26.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/13.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/20.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/11.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/11.jpg') }}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3 col-sm-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
														<img class="hover-img" src="{{ asset('website/images/12.jpg') }}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										
									
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						</div>
					</div>
				</div>
			</div>
        </div>
</div>
<!-- End Product Area -->

<!-- Start Midium Banner  -->
<section class="midium-banner">
	<div class="container single-part-bg">
		<div class="section-title">
					<h2> Dealing With Customers </h2>
				</div>
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12 banner">
				<div class="single-banner two-part">
					<img src="{{ asset('website/images/111.jpg') }}" alt="#">
					<div class="content">
						<p>Man's Collectons</p>
						<h3>Man's items <br>Up to<span> 50%</span></h3>
						<a href="#">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12 banner">
				<div class="single-banner two-part">
					<img src="{{ asset('website/images/112.jpg') }}" alt="#">
					<div class="content">
						<p>shoes women</p>
						<h3>mid season <br> up to <span>70%</span></h3>
						<a href="#" class="btn">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section ">
    <div class="container single-part-bg">
        <div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Hot Item</h2>
				</div>
			</div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="{{ asset('website/images/61.jpg') }}" alt="#">
								<img class="hover-img" src="{{ asset('website/images/61.jpg') }}" alt="#">
								<span class="out-of-stock">Hot</span>
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" class="hot-item" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
							<div class="product-price">
								<span class="old">$60.00</span>
								<span>$50.00</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('website/images/62.jpg') }}" alt="#">
                                <img class="hover-img" src="{{ asset('website/images/62.jpg') }}" alt="#">
                            </a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Women Hot Collection</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('website/images/63.jpg') }}" alt="#">
                                <img class="hover-img" src="{{ asset('website/images/63.jpg') }}" alt="#">
								<span class="new">New</span>
                            </a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{ asset('website/images/64.jpg') }}" alt="#">
                                <img class="hover-img" src="{{ asset('website/images/64.jpg') }}" alt="#">
                            </a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
					<!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->


<section class="shop-home-list section">
	<div class="container single-part-bg">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title sale-title">
							<h1>On sale</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/111.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
								<p class="price with-discount">$59</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row"> 
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/112.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$44</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/113.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$89</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Best Seller</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/a.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$65</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/d.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$33</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/c.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$77</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Top viewed</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/b.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 col-sm-6 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$22</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/a.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$35</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="list-image overlay">
								<img src="{{ asset('website/images/e.jpg') }}" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6  col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
								<p class="price with-discount">$99</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Home List  -->

<!-- Start Cowndown Area -->
<section class="cown-down">
	<div class="section-inner single-part-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 padding-right">
					<div class="image comming-product">
						<img src="{{ asset('website/images/130.jpg') }}" alt="#">
					</div>	
				</div>	
				<div class="col-lg-6 col-12 padding-left">
					
						<div class="main-content" id="main-body">
							<h1>Comming Soon Product</h1>
							<div class="countdouwn">
								<div>
									<div id="days">00</div>
									<span>Days</span>
								</div>
								<div>
									<div id="hours">00</div>
									<span>Hours</span>
								</div>
								<div>
									<div id="minute">00</div>
									<span>Minute</span>
								</div>
								<div>
									<div id="secend">00</div>
									<span>Secend</span>
								</div>
								

							</div>
							<div class="image comming-image">
								<img src="{{ asset('website/images/c.jpg') }}" alt="#">
							</div>
						</div>
						
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
	<div class="container single-part-bg">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>From Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6  col-sm-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{ asset('website/images/141.jpg') }}" alt="#" class="single-blog-image">
					<div class="content">
						<p class="date">22 July , 2020. Monday</p>
						<a href="#" class="title">Sed adipiscing ornare.</a>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
						<a href="#" class="more-btn read-more">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{ asset('website/images/142.jpg') }}" alt="#" class="single-blog-image">
					<div class="content">
						<p class="date">22 July, 2020. Monday</p>
						<a href="#" class="title">Man’s Fashion Winter Sale</a>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
						<a href="#" class="more-btn">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{ asset('website/images/143.jpg') }}" alt="#" class="single-blog-image">
					<div class="content">
						<p class="date">22 July, 2020. Monday</p>
						<a href="#" class="title">Women Fashion Festive</a>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,</p>
						<a href="#" class="more-btn">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
		</div>
	</div>


</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section hom single-part-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12 work">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12 work">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12 work">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12 work">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section" style="background-image: url('{{ asset('website/images/formbg.jpg') }}');">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
								<div class="product-gallery">
									<div class="quickview-slider-active">
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
									</div>
								</div>
							<!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2>Flared Shift Dress</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#"> (1 customer review)</a>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <h3>$29.00</h3>
                                <div class="quickview-peragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                </div>
								<div class="size">
									<div class="row">
										<div class="col-lg-6 col-12">
											<h5 class="title">Size</h5>
											<select>
												<option selected="selected">s</option>
												<option>m</option>
												<option>l</option>
												<option>xl</option>
											</select>
										</div>
										<div class="col-lg-6 col-12">
											<h5 class="title">Color</h5>
											<select>
												<option selected="selected">orange</option>
												<option>purple</option>
												<option>black</option>
												<option>pink</option>
											</select>
										</div>
									</div>
								</div>
                                <div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>
									<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
								</div>
                                <div class="default-social">
									<h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
	
    @endsection

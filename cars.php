<?php require 'include/header.php'; ?>
        
		<div class="responsive-header">
			<div class="res-top">
				<ul>
					<li><a href="#" title="Home"><i class="flaticon-home"></i></a></li>
					<li><a href="#" title="Faq's"><i class="flaticon-info"></i></a></li>
					<li><a href="#" title="Support center"><i class="flaticon-support"></i></a></li>
					<li><a href="#" title="Login"><i class="flaticon-unlocked"></i></a></li>
					<li><a href="#" title="New register"><i class="flaticon-checked"></i></a></li>
					<li class="post-new"><a href="#" title="New post">+Post</a></li>
				</ul>
			</div>
			<div class="logomenu-bar">
				<div class="logo"><a href="index.html" title=""><img src="images/logo-black.png" alt=""></a></div>
				<span class="responsviemenu-btn"><i class="flaticon-menu-1"></i></span> 
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="flaticon-error-1"></i></span>
				<ul>
					<li><a href="index.html" title="">Home</a></li>
					<li class="menu-item-has-children"><a href="#" title="">cars</a>
						<ul class="sub-menu">
							<li><a href="index-after-login.html" title="">page after login</a></li>
							<li><a href="cars.html" title="">cars</a></li>
							<li><a href="car-profile.html" title="">car profile</a></li>
							<li><a href="car-detail.html" title="">cars detail</a></li>
							<li><a href="create-route-notification.html" title="">route notification</a></li>
							<li><a href="submit-car-intro.html" title="">Submit car introduction</a></li>
							<li><a href="submit-car-for-rent.html" title="">submit car for rent</a></li>
							<li><a href="submit-route.html" title="">submit car route</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">rides</a>
						<ul class="sub-menu">
							<li><a href="ride-listing.html" title="">ride listing</a></li>
							<li><a href="ride-request.html" title="">ride request</a></li>
							<li><a href="ride-detail.html" title="">ride detail</a></li>
							<li><a href="ride-requests-list.html" title="">ride request list</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">leasing</a>
						<ul class="sub-menu">
							<li><a href="leasing.html" title="">Leasing Page</a></li>
							<li><a href="leasing-car-step1.html" title="">leasing Step 1</a></li>
							<li><a href="leasing-car-step2.html" title="">leasing step 2</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">profiles</a>
						<ul class="sub-menu">
							<li><a href="user-profile.html" title="">Profile user</a></li>
							<li><a href="user-profile-v2.html" title="">Profile user v2</a></li>
							<li><a href="my-profile.html" title="">My profile</a></li>
							<li><a href="profile-balance.html" title="">profile balance</a></li>
							<li><a href="profile-earning.html" title="">profile earning</a></li>
							<li><a href="profile-edit.html" title="">profile edit page</a></li>
							<li><a href="profile-invite-friend.html" title="">profile invite friend</a></li>
							<li><a href="profile-points.html" title="">profile points</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="#" title="">more pages</a>
						<ul class="sub-menu">
							<li><a href="login.html" title="">Login page</a></li>
							<li><a href="register.html" title="">Register Page</a></li>
							<li><a href="how-this-work.html" title="">how it's work</a></li>
							<li><a href="faq.html" title="">faq's</a></li>
							<li><a href="points.html" title="">poinst</a></li>
							<li><a href="coming-soon.html" title="">Coming Soon</a></li>
							<li><a href="404.html" title="">404 Page</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- Responsive Header -->
		
        <section>
        	<div class="space no-space">
        		<div class="container-fluid">
                	<div class="cola-page">
                        <div class="row merged">
                            <div class="col-lg-7 scroll">
                                <div class="pickup-time">
                                  	<span class="find">
                                  		<i class="fa fa-location-arrow"></i>
                                  		Find a car next to you ...
                                  		<a href="#" title="" class="theme-btn slim">
                                  		<i class="fa fa-map-marker"></i>
                                  		use my location</a>
                                  	</span>
                                    <div class="date-n-time">
                                        <p>
                                            <label><i class="fa fa-calendar"></i></label>
                                            <input id="datetimepicker1" type="text" placeholder="Pickup">
                                        </p>  
                                        <p>  
                                            <label><i class="fa fa-clock-o"></i></label>
                                            <input id="datetimepicker2" type="text" placeholder="Time">
                                        </p>
                                        <p>
                                            <label><i class="fa fa-calendar"></i></label>
                                            <input id="datetimepicker3" type="text" placeholder="Return">
                                        </p>  
                                        <p>  
                                            <label><i class="fa fa-clock-o"></i></label>
                                            <input id="datetimepicker4" type="text" placeholder="Time">
                                        </p>
                                        <span><i class="fa fa-search"></i>Filter by model or brand ...</span>
                                        <a href="#" title="" class="theme-btn slim fiter-car"><i class="fa fa-filter"></i>filters</a>
                                    </div>
                                </div>
                                <div class="cars-listing">
                                	<div class="filter-popup">
                                		<div class="filter-meta">
                                			<span>price / day</span>
											<div id="slider-range"></div>
											<input type="text" id="amount" readonly>
										</div><!-- range slider -->
                               			<div class="filter-meta">
                               				<span>style</span>
                               				<ul>
                               					<li><a href="#" title=""><img src="images/resources/mockup-1.png" alt=""><i>micro</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-2.png" alt=""><i>Hatchback</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-3.png" alt=""><i>Coupe</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-4.png" alt=""><i>CUV</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-5.png" alt=""><i>SUV</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-6.png" alt=""><i>Cabriolet</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-7.png" alt=""><i>Super Car</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-8.png" alt=""><i>Pickup</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-9.png" alt=""><i>Van</i></a></li>
                               					<li><a href="#" title=""><img src="images/resources/mockup-10.png" alt=""><i>Caravan</i></a></li>
                               				</ul>
                               			</div><!-- car mockup -->
                               			<div class="filter-meta">
                               				<span>fule type</span>
                               				<form method="post" class="fule-type">
												<p>
													<input type="checkbox">
													<label></label>
													Bi-Fuel
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Diesel
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Electric
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Hybrid
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Petrol
												</p>
											</form>
                               			</div><!-- enging select -->
                               			<div class="filter-meta">
                               				<span>Seats</span>
                               				<select>
                               					<option>2+</option>
                               					<option>4+</option>
                               					<option>6+</option>
                               				</select>
                               			</div><!-- seats -->
                               			<div class="filter-meta">
                               				<span>Additional</span>
                               				<form method="post" class="fule-type additional">
												<p>
													<input type="checkbox">
													<label></label>
													ABS 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Cruise control 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Front fog lights 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Alarm
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Electric door mirrors 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Heated door mirrors  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Audio remote control
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Electrically drivers seat 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Passenger airbag  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Bluetooth connection  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Folding rear seats  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Rear electric windows  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Climate control 
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Front electric windows  
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Remote central locking 
												</p>
											</form>
                               			</div><!-- additional info -->
                               			<div class="filter-meta">
                               				<span>Preferences</span>
                               				<form method="post" class="fule-type">
												<p>
													<input type="checkbox">
													<label></label>
													80% acceptance rate
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Replies within 1 hr
												</p>
												<p>
													<input type="checkbox">
													<label></label>
													Long time renting
												</p>
												
											</form>
                               			</div><!-- preferences -->
                               			<div class="filter-btns">
                               				<a href="#" title="" class="del-filter"><i class="fa fa-trash-o"></i>Delete Filters</a>
                               				<a href="#" title="" class="cancel">Cancel</a>
                               				<a href="#" title="" class="theme-btn slim"><i class="fa fa-refresh"></i>refresh search</a>
                               			</div>
                                	</div>
                                	<span>40 of 765 cars available for renting</span>
                                    <div class="more-find">
                                        <i class="flaticon-favorites"></i>
                                        <div class="kola-met">
                                            <h4>Car East points</h4>
                                            <span>Earn points everytime you reserve a seat or rent a car &amp; get discounts.</span>
                                        </div>
                                        <a class="theme-btn slim" title="" href="#">find out more</a>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-1.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Citroen C4 Picasso 1.6 e-HDi Airdream <span>2012</span></a></h5>
                                            <p>I keep the car very tidy and always great</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>01000 New York</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-1.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>89% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$25/day</span>
                                        </div>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-2.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Ford Focus 1.8 ZETEC 5d 125 <span>2012</span></a></h5>
                                            <p>Ideal for weekend trips.</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>01000 New York</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-2.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>89% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$20/day</span>
                                        </div>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-3.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Masrati Mustang GT Premium <span>2012</span></a></h5>
                                            <p>I keep the car very tidy and always great</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>09345 Belfast</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-3.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>89% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$30/day</span>
                                        </div>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-4.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Citroen C1 AIRSCAPE FEEL EDITION <span>2012</span></a></h5>
                                            <p>Ideal car for going to work or just driving</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>08667 Bradford</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-4.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>89% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$35/day</span>
                                        </div>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-5.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Ford Focus 1.8 ZETEC 5d 125 <span>2014</span></a></h5>
                                            <p>Ideal for weekend trips.</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>09345 Belfast</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-5.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>90% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$35/day</span>
                                        </div>
                                    </div>
                                    <div class="cars-list">
                                        <figure>
                                            <img alt="" src="images/resources/car-6.jpg">
                                        </figure>
                                        <div class="car-inf">
                                            <h5><a title="" href="#">Ford Mustang GT Premium<span>2008</span></a></h5>
                                            <p>Ideal car for going to work or just driving</p>
                                            <span class="locatio"><i class="fa fa-location-arrow"></i>08667 Bradford</span>
                                            <div class="car-owner">
                                                <div class="owner-thmb">
                                                    <img alt="" src="images/resources/owner-thumb-6.jpg">
                                                </div>
                                                <div class="car-meta">
                                                	
                                                	<ul class="stars-rating">
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                        <li><i class="fa fa-star checked"></i></li>
                                                    </ul>
                                                    <span>95% acceptance rate <i>replies within 1hr</i></span>
                                                </div>	
                                            </div>
                                            <span class="tag bottom">$15/day</span>
                                        </div>
                                    </div>
                                    
									<ul class="pagination">
										<li><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#" title="">1</a></li>
										<li><a href="#" title="">2</a></li>
										<li><a href="#" title="">3</a></li>
										<li><a href="#" title="">4</a></li>
										<li><a href="#" title="">5</a></li>
										<li><span>.....</span></li>
										<li><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
                               		<div class="more-find">
                                        <div class="kola-invite">
                                            <p><span>Didn´t find the car you are looking for?</span> Invite your friends to rent their cars.</p>
                                            <a href="#" title="" class="theme-btn facebook"><i class="fa fa-facebook"></i>Share Car East with your Friends</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="g-mapfull">
                                    <div id="map-canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        		</div>
        	</div>
        </section><!-- points section -->
    </div>

	<script src="js/apps.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script>
	  $( function() {
		$( "#slider-range" ).slider({
		  range: true,
		  min: 0,
		  max: 500,
		  values: [ 75, 300 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  } );
  </script>
    
        
</body>	
</html>		
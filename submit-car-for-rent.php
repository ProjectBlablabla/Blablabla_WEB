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
        
		<div class="sub-head blackish ext-low-opacity">
			<div class="bg-image" style="background-image: url(images/resources/subhead-bg.jpg)"></div>
        	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cola-head">
							<div class="head-meta">
								<h4>Submit your car for rent</h4>
								<p>( Earning extra money with your car has never been so easy. )</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
        </div><!-- subhead -->
                
        <section>
        	<div class="space">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-12">
                        	<div id="wizard" class="aiia-wizard" style="display: none;">
								
								<div class="aiia-wizard-step">
									<div class="step-content">
										<div class="car-detail">
											<h1>Car Details</h1>
											<form method="post">
												<div class="row">
													<div class="offset-lg-3 col-lg-3">
														<label>Make:</label>
														<select>
															<option>select</option>
															<option>london</option>
															<option>galaxco</option>
															<option>local city</option>
														</select>
													</div>
													<div class="col-lg-3">
														<label>Model:</label>
														<select>
															<option>select</option>
															<option>london</option>
															<option>galaxco</option>
															<option>local city</option>
														</select>
													</div>
													<div class="offset-lg-3 col-lg-3">
														<label>Year:</label>
														<select>
															<option>select</option>
															<option>london</option>
															<option>galaxco</option>
															<option>local city</option>
														</select>
													</div>
													<div class="col-lg-3">
														<label>Milage:</label>
                                                		<input type="text">
													</div>
													<div class="offset-lg-3 col-lg-6">
														<div class="car-specific">
															<span>Specificatons:</span>
															<p>
																<input type="checkbox">
																<label></label>
																At least 21 yrs. old
															</p>
															<p>
																<input type="checkbox">
																<label></label>
																Minimum 2 yrs. of driving experience
															</p>
															<p>
																<input type="checkbox">
																<label></label>
																Minimum 4 hrs. of rental
															</p>
															<p>
																<input type="checkbox">
																<label></label>
																No smoking
															</p>
															<p>
																<input type="checkbox">
																<label></label>
																No pets
															</p>
														</div>
													</div>
													<div class="offset-lg-3 col-lg-6">
														<div class="car-style">
															<span>Style:</span>
															<ul>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-1.png"><i>micro</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-2.png"><i>Hatchback</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-3.png"><i>Coupe</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-4.png"><i>CUV</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-5.png"><i>SUV</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-6.png"><i>Cabriolet</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-7.png"><i>Super Car</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-8.png"><i>Pickup</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-9.png"><i>Van</i></a></li>
																<li><a title="" href="#"><img alt="" src="images/resources/mockup-10.png"><i>Caravan</i></a></li>
															</ul>
														</div>
													</div>
													<div class="offset-lg-3 col-lg-3">
														<label>Plate #</label>
                                                		<input type="text">
													</div>
													<div class="col-lg-3">
														<label>Reg. Exp. Date:</label>
                                                		<input type="text">
													</div>
													<div class="offset-lg-3 col-lg-6">
														<div class="about-car">
															<span>Features:</span>
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
															
														</div>
													</div>
													<div class="offset-lg-3 col-lg-6">
														<div class="description">
															<span>Car description:</span>
															<textarea cols="30" rows="4"></textarea>
														</div>
													</div>
												</div>												
											</form>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Car Location</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="heading">
												<h3>Where can driver pick up your car?</h3>
												<span>Your exact pickup address will be shared with confirmed drivers.</span>
											</div>
											<div class="row">
												<div class="offset-lg-3 col-lg-6">
													<form method="post">
														<div class="row">
															<div class="col-md-4">
																<label>Street:</label>
																<input type="text" placeholder="Street">
															</div>
															<div class="col-md-4">
																<label>Number:</label>
																<input type="text" placeholder="H/Apt No">
															</div>
															<div class="col-md-4">
																<label>City:</label>
																<input type="text" placeholder="City">
															</div>
															<div class="col-md-6">
																<label>State::</label>
																<select>
																	<option>New york</option>
																	<option>washington</option>
																	<option>maxico</option>
																	<option>malta</option>
																</select>
															</div>
															<div class="col-md-6">
																<label>Zip:</label>
																<input type="text" placeholder="">
															</div>
															<div class="col-md-4">
																<label>Phone:</label>
																<input type="text" placeholder="+44">
															</div>
															<div class="col-md-8">
																<label>#</label>
																<input type="text" placeholder="">
															</div>
															<div class="col-md-12">
																<div class="note-box">
																	<p>
																		Note: We will send you messages on your phone each time a user is interested in renting your car.	
																	</p>
																</div>
															</div>
															<div class="col-md-12">
																<span>Car pickup instructions:</span>
																<textarea rows="4" placeholder="e.g details about car pickup such as location, time, etc."></textarea>
															</div>
														</div>
													</form>
													<div class="g-map">
														<div id="map-canvas" style="height: 300px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Upload Image</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="row">
												<div class="offset-lg-3 col-lg-6">
													<div class="upload-box">
														<span><i><img src="images/upload-icon.png" alt=""></i>upload here</span>
													</div>
													<div class="upload">
														<form>
															<label class="fileContainer">
																<i class="fa fa-paperclip"></i>
																browse registration
																<input type="file">
															</label>
															<label class="fileContainer">
																<i class="fa fa-paperclip"></i>
																browse lift inspection
																<input type="file">
															</label>
															<label class="fileContainer">
																<i class="fa fa-paperclip"></i>
																browse personal insurance
																<input type="file">
															</label>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Calendar</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="row">
												<div class="offset-lg-3 col-lg-6">
													<div class="heading">
														<h3>Renting Calendar</h3>
														<span>Boos your chances with 80% to rent your car.</span>
													</div>
													<div class="inline-calendar">
														<div id="datepicker"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Pricing</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="row">
												<div class="offset-lg-3 col-lg-6">
													<div class="heading">
														<h3>Set your own price</h3>
														<span>Your exact pickup address will be shared with confirmed drivers.</span>
													</div>
													<form class="setprice">
														<label>Price per day ($):</label>
														<input class="qty" type="text" name="value" value="1">
													</form>
													<div class="fees">
														<span>fees:</span>
														<a href="#" title="">read more <i class="fa fa-info-circle"></i></a>
														<ins>-$2</ins>
													</div>
													<div class="fees">
														<span>The price you get:</span>
														<p>Each amount needs a 24h process time to get in your account.</p>
														<ins class="big-price">$19</ins>
													</div>
													<div class="about-car">
														<form method="post">
														<p>
															<input type="checkbox">
															<label></label>
															Instantly accept the requests
														</p>
														<p>
															<input type="checkbox">
															<label></label>
															Accept partial route requests
														</p>
														</form>
													</div>
												</div>
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
	        
        <?php require 'include/footer.php'; ?>
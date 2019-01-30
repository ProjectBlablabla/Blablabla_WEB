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
								<h4>Submit Route</h4>
								<p>( Find passengersa close to you. )</p>
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
        				<div class="col-lg-7">
                        	<div id="wizard" class="aiia-wizard" style="display: none;">
								
								<div class="aiia-wizard-step">
									<div class="step-content">
										<div class="car-detail submit-route">
											<h1>Route</h1>
											<form method="post" class="cola-form">
												<div class="row">
													<div class="col-lg-12">
														<label>Pick up place::</label>
														<input type="text" placeholder="Search a location">
														<div class="center-point">
															<label>via:</label>
															<input type="text" placeholder="Search a location">
															<i><img src="images/icon-17.png" alt=""></i>
														</div>
														<label>Place of arrival:</label>
														<input type="text" placeholder="Search a location">
														<span class="add-center-point">+ Add intermediate point</span>
													</div>
												</div>												
											</form>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Departure</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="departure">
												<div class="inline-calendar">
													<div id="datepicker"></div>
												</div>
												<div class="depart-time">
													<label>Departure Time:</label>
													<select>
														<option>14</option>
														<option>15</option>
														<option>16</option>
														<option>17</option>
													</select>
													<select>
														<option>30</option>
														<option>40</option>
														<option>50</option>
														<option>60</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Details</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="col-md-12">
												<div class="route-detail">
													<form method="post">
													<label>Free seats (without the driver’s seat included):</label>
													<select>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
													</select>
													<label>Departure Time:</label>
													<select>
														<option>Unspecified</option>
														<option>specified</option>
													</select>
													<div class="route-option">
														<span>Comfort</span>
														<p>
															<input type="checkbox">
															<label></label>
															Accept partial route requests
														</p>
														<div class="prefer">
															<span>Preferences</span>
															<ul>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Music
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Smoking
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Pets
																	</p>
																</li>
																<li>
																	<p>
																		<input type="checkbox">
																		<label></label>
																		Children
																	</p>
																</li>
															</ul>
														</div>
													</div>
													<textarea cols="30" rows="3" placeholder="e.g. departure location, capacity for the baggage, etc."></textarea>
													<div class="note-box">
														<p>
															Note: We will send you messages on your phone each time a user is interested in renting your car.	
														</p>
													</div>
													<span>Highway:</span>
													<p>
														<input type="checkbox">
														<label></label>
														Highway routes
													</p>
													</form>
													
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="aiia-wizard-step">
									<h1>Price</h1>
									<div class="step-content">
										<div class="car-detail">
											<div class="submit-route">
												<div class="seat-pirces">
													<em>Price per seat ($):</em>
													<span>
														<i class="fa fa-location-arrow"></i>
														<em>Bristol</em>
														<em>Cambridge</em>
													</span>
												</div>
												<form class="setprice">
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
                        <div class="offset-lg-1 col-lg-4">
                        	<div class="g-map">
								<div id="map-canvas"></div>
							</div>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
	        
		<?php require 'include/footer.php'; ?>
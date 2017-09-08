<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="UTF-8">
        <!-- created this meta tag as it is required for responsiveness; telling phone screens for example not to zoom out but to start
from a scale of 1.0 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- adding SEO via the meta tag. This will contain a description of the site with a few key words, but limit it to 160 characters -->
		<meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible.">
		
		<!-- for this project we've linked to a css we downloaded called normalize & placed it in the vendor folder
		For an unspoken reason, we are required to list this one first -->
		<link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
		<!-- copy and paste or highlight and used ctrl + D to copy.
		The grid used is an augmented file pulled from responsivegridsystem.com -->
		<link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
		<!-- after downloading icons fonts and css files from ionicons.com, we are able to add them to the page -->
		<link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
		<!-- animate.css was added to the vendors folder to allow for animated effects like fadeins & outs -->
		<link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
		<!-- for this project we've linked to a specific css file in the resources folder that we created -->
		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <!-- for this project we've linked back to the queries.css file in resources to that are media queries apply -->
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
		<!-- pulled this from Google Fonts, cutomizing the font type Lato -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700" rel="stylesheet">

		<title>Megan's Omnifood Udemy Project</title>
		
		<!-- created a favicon for various browsers and devices. Below is the generated code -->
		<link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
		<link rel="manifest" href="resources/favicons/manifest.json">
		<link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="resources/favicons/favicon.ico">
		<meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

	</head>

	<body>
		<header>
			<!-- did have a nav class="sticky" but once it was defined in jQuery we no longer needed it here 
			reverting back to simply nav -->
			<nav>
				<div class="row">
					<img src="resources/img/logo-white.png" alt="Omnifood (white) Logo" class="logo">
					<img src="resources/img/logo.png" alt="Omnifood (black) Logo" class="logo-black">
					<!-- created class for js navigation -->
						<ul class="main-nav js--main-nav">
							<!-- defining the anchors for js -->
							<li><a href="#features">Food Delivery</a></li>
							<li><a href="#works">How It Works</a></li>
							<li><a href="#cities">Our Cities</a></li>
							<li><a href="#plans">Sign Up</a></li>
						</ul>
					<!-- adding responsive naviation icon + js class for jQuery -->
					<a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
				</div>
			</nav>
			
				<div class="hero-text-box">
					<h1>Goodbye junk food. <br>Hello super healthy meals.</h1>
					<!-- adding in js classes for scrolling mobility on site -->
					<a class="btn btn-full js--scroll-to-plans" href="#">I'm Hungry</a>
					<a class="btn btn-ghost js--scroll-to-start" href="#">Show Me More</a>
				</div>
		</header>
		
		<!-- like headers, sections are containers (the 2nd class starting with js is for the sticky nav waypoint-->
		<!-- features id created to correspond with the features anchor & for the js -->
		<section class="section-features js--section-features" id="features">
			<div class="row">
				<h2>Get food fast &mdash; not fast food.</h2>
				<!-- watch copy and pasting things like apostrophies and slashes. They need to be replaced with typed ' -->
				<p class="long-copy">Hello, we're Omnifood, your new premium food delivery service. 
				We know you're always busy. No time for cooking. So let us take care of that, 
				we're really good at it, we promise!</p>
			</div>
			<!-- assigning a waypoint animation to all of the following rows in this section -->
			<div class="row js--wp-1">
				<!-- we have to create a col div, using the grid.css, and there will be four of them in this example embedded within the row class -->
				<div class="col span-1-of-4 box">
				<!-- after downloading icons from ionicons.com, we add them to the page by placing them in an i class"" -->
				<i class="ion-android-calendar icon-big"></i>
					<h3>Up to 365 days/year</h3>
					<p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year 
					coverage. You can also choose to order more flexibly if that's your style.</p>
				</div>
			
				<div class="col span-1-of-4 box">
				<i class="ion-clock icon-big"></i>
					<h3>Ready in 20 minutes</h3>
					<p>You're only twenty minutes away from your delicious and super healthy meals delivered 
					right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
				</div>
				
				<div class="col span-1-of-4 box">
				<i class="ion-earth icon-big"></i>
					<h3>100% organic</h3>
					<p>All our vegetables are fresh, organic and local. 
					Animals are raised without added hormones or antibiotics. 
					Good for your health, the environment, and it also tastes better!</p>
				</div>
				
				<div class="col span-1-of-4 box">
				<i class="ion-fork icon-big"></i>
					<h3>Order anything</h3>
					<p>We don't limit your creativity, which means you can order whatever you feel like. 
					You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
				</div>
			
			</div><!-- end of row div -->
		</section>
		
		<!-- start of new section, lecture 43 -->
		<section class="section-meals">
			<ul class="meals-showcase clearfix">
				<li>
					<!-- compressed primary food images, phone, etc..., while scaling down city images -->
					<figure class="meal-photo">
						<img src="resources/img/1-min.jpg" alt="Korean bibimbap with egg and vegetables">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/2-min.jpg" alt="Simple italian pizza with cherry tomatoes">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/3-min.jpg" alt="Chicken breast steak with vegetables">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/4-min.jpg" alt="Autumn pumpkin soup">
					</figure>
				</li>
			</ul>
		
		<!-- start of 2nd meal-showcase -->
			<ul class="meals-showcase clearfix">
				<li>
					<figure class="meal-photo">
						<img src="resources/img/5-min.jpg" alt="Paleo beef steak with vegetables">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/6-min.jpg" alt="Healthy baguette with egg and vegetables">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/7-min.jpg" alt="Burger with cheddar and bacon">
					</figure>
				</li>
				
				<li>
					<figure class="meal-photo">
						<img src="resources/img/8-min.jpg" alt="Granola with cherries and strawberries">
					</figure>
				</li>
			</ul>
		</section> 
		<!-- end of meal-showcase with images -->
		
		<!-- start of section 3 -->
		<section class="section-steps" id="works">
			<div class="row">
				<h2>How it works &mdash; Simple as 1, 2, 3</h2>
			</div>
			
			<div class="row">
				<div class="col span-1-of-2 steps-box">
					<!-- added an animation.css via js waypoint to the image -->
					<img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
				</div>
				
				<div class="col span-1-of-2 steps-box">
					<div class="works-step">
						<div>1</div>
						<p>Choose the subscription plan that best fits your needs and sign up today.</p>
					</div>
				
					<div class="works-step">
						<div>2</div>
						<p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
					</div>
				
					<div class="works-step">
						<div>3</div>
						<p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
					</div>
					
					<a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="Apple App Store Button"></a>
					<a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Google Play Store Button"></a>
					
				</div> <!-- end of 2nd col span 1 of 2 -->
			</div> <!-- end of row -->
		</section>
		<!-- end of section-steps -->
		
		
		<section class="section-cities" id="cities">
			<div class="row">
				<h2>We're currently in these cities</h2>
			</div>
			<!-- added a animate.css js waypoint effect to the cities text -->
				<div class="row js--wp-3">
					<!-- so these are styled the same as the above col + box -->
					<div class="col span-1-of-4 box">
			<!-- City images were scalled down from 900x600 to 750x500, taking the smallest image ratio of 361x240
and roughly estimating an ideal scale of 375 x 2 in order to keep an ideal image quality online. -->
						<img src="resources/img/lisbon-3.jpg" alt="Lisbon">
						<h3>Lisbon</h3>
							<div class="city-feature">
							<i class="ion-happy-outline icon-small"></i>
							1600+ happy eaters
							</div>
							
							<div class="city-feature">
							<i class="ion-star icon-small"></i>
							60+ top chefs
							</div>
							
							<div class="city-feature">
							<i class="ion-social-twitter-outline icon-small"></i>
							<a href="#">@omnifood_lx</a>
							</div>
					</div>
					
					<!-- so these are styled the same as the above col + box -->
					<div class="col span-1-of-4 box">
						<img src="resources/img/san-francisco.jpg" alt="San Francisco, California">
						<h3>San Francisco</h3>
							<div class="city-feature">
							<i class="ion-happy-outline icon-small"></i>
							3700+ happy eaters
							</div>
							
							<div class="city-feature">
							<i class="ion-star icon-small"></i>
							160+ top chefs
							</div>
							
							<div class="city-feature">
							<i class="ion-social-twitter-outline icon-small"></i>
							<a href="#">@omnifood_sf</a>
							</div>
					</div>
					
					
					<!-- so these are styled the same as the above col + box -->
					<div class="col span-1-of-4 box">
						<img src="resources/img/berlin.jpg" alt="Berlin, Germany">
						<h3>Berlin</h3>
							<div class="city-feature">
							<i class="ion-happy-outline icon-small"></i>
							2300+ happy eaters
							</div>
							
							<div class="city-feature">
							<i class="ion-star icon-small"></i>
							110+ top chefs
							</div>
							
							<div class="city-feature">
							<i class="ion-social-twitter-outline icon-small"></i>
							<a href="#">@omnifood_berlin</a>
							</div>
					</div>
					
					<!-- so these are styled the same as the above col + box -->
					<div class="col span-1-of-4 box">
						<img src="resources/img/london.jpg" alt="London, England">
						<h3>London</h3>
							<div class="city-feature">
							<i class="ion-happy-outline icon-small"></i>
							1200+ happy eaters
							</div>
							
							<div class="city-feature">
							<i class="ion-star icon-small"></i>
							50+ top chefs
							</div>
							
							<div class="city-feature">
							<i class="ion-social-twitter-outline icon-small"></i>
							<a href="#">@omnifood_london</a>
							</div>
					</div>
				</div><!-- end of row class in cities -->
		</section>
		<!-- end of cities -->
		
		
		<!-- start of customer testimonials section -->
		<section class="section-testimonials">
			<div class="row">
				<h2>Our customers can't live without us</h2>
			</div>
			
			<div class="row">
				<div class="col span-1-of-3">
					<blockquote>
					Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, 
					so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
					<cite><img src="resources/img/customer-1.jpg" alt="customer one image">Alberto Duncan</cite>
					</blockquote>
				</div>
				
				<div class="col span-1-of-3">
					<blockquote>
					Inexpensive, healthy and great-tasting meals, delivered right to my home. 
					We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. 
					Me and my family are so in love!
					<cite><img src="resources/img/customer-2.jpg" alt="customer two image">Joana Silva</cite>
					</blockquote>
				</div>
				
				<div class="col span-1-of-3">
					<blockquote>
					I was looking for a quick and easy food delivery service in San Franciso. 
					I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. 
					Keep up the great work!
					<cite><img src="resources/img/customer-3.jpg" alt="customer three image">Milton Chapman</cite>
					</blockquote>
				</div>
			</div>
		</section>
		<!-- end of customer testimonials section -->
		
		<!-- start of sign up section -->
		<!-- adding in js classes for scrolling mobility on site -->
		<section class="section-plans js--section-plans" id="plans">
			<div class="row">
				<h2>Start eating healthy today</h2>
			</div>
		
			<div class="row">
				<div class="col span-1-of-3">
					<!-- added animate.css js waypoint class to the plans section -->
					<div class="plan-box js--wp-4">
						<div><!-- the plan -->
							<h3>Premium</h3>
							<!-- giving this paragraph a class makes it easier to isolate later for this project -->
							<!-- span allows us to style the element within the paragraph easier -->
							<p class="plan-price">$399 <span>/ month</span></p>
							<p class="plan-price-meal">That's only $13.30 per meal</p>
						</div>
						
						<div><!-- the details -->
							<ul>
								<!-- using prestyle class icon-small alongside these icons as well -->
								<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
							</ul>
						</div>
						
						<div>
						<!-- reusing styled button class from earlier -->
							<a href="#" class="btn btn-full">Sign Up Now</a>
						</div>
						
					</div><!-- end of plan box div -->
				</div><!-- col div -->
				
				<div class="col span-1-of-3">
					<div class="plan-box">
						<div><!-- the plan -->
							<h3>Pro</h3>
							<!-- giving this paragraph a class makes it easier to isolate later for this project -->
							<p class="plan-price">$149 <span>/ month</span></p>
							<p class="plan-price-meal">That's only $14.90 per meal</p>
						</div>
						
						<div><!-- the details -->
							<ul>
								<!-- using prestyle class icon-small alongside these icons as well -->
								<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
							</ul>
						</div>
						
						<div>
						<!-- reusing styled button class from earlier -->
							<a href="#" class="btn btn-ghost">Sign Up Now</a>
						</div>
						
					</div><!-- end of plan box div -->
				</div><!-- col div -->
				
				<div class="col span-1-of-3">
					<div class="plan-box">
						<div><!-- the plan -->
							<h3>Starter</h3>
							<!-- giving this paragraph a class makes it easier to isolate later for this project -->
							<p class="plan-price">$19 <span>/ meal</span></p>
							<!-- used a special character to create a space so the layout of the plans looks more polished -->
							<p class="plan-price-meal"> &nbsp; </p>
						</div>
						
						<div><!-- the details -->
							<ul>
								<!-- using prestyle class icon-small alongside these icons as well -->
								<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
								<li><i class="ion-ios-close-empty icon-small"></i></li>
								<li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
							</ul>
						</div>
						
						<div>
						<!-- reusing styled button class from earlier -->
							<a href="#" class="btn btn-ghost">Sign Up Now</a>
						</div>
						
					</div><!-- end of plan box div -->
				</div><!-- col div -->
				
			</div><!-- end of row -->
		</section>
		<!-- end of sign up section -->
		
		<!-- start of contact form & map; removed section-form and replaced with map-box -->
		<div class="map-box">
			<!-- map in background -->
			<div class="map" id="map"></div>
			
			<!-- New code: Used suggested PHP Code from forum -->
            
			<script>
                function initMap() {
                    var uluru = {lat: 28.2928938, lng: -81.4387};
                    var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: uluru
                    });                    
                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
                    });
                    map.setCenter({lat: 28.2928938, lng: -81.4387});
                }
            </script>
            <!-- End new code -->
			
				<!-- form set to the right atop map; id="form" for php form -->
				<div class="form-box" id="form">
					<div class="row">
						<h2>We're happy to hear from you</h2>
					</div>

					<div class="row">
						<!-- we're only going to build the form, not enable it as it requires other languages.
						The action, for example, could define the script (language) of the active form -->
						<form method="post" action="mailer.php" class="contact-form">
							<!-- each field within the form gets it's own row in order to keep the layout aligned properly -->
							<div class="row">
								<?php
									if($_GET['success'] == 1) {
										echo "<div class=\"form-messages success\">Thank You! Your message has been sent.</div>";
									}
									if($_GET['success'] == -1) {
										echo "<div class=\"form-messages error\">Opps! Message not sent. Please try again.</div>";
									}
								?>
							
							</div>
								
							
							<div class="row">
								<div class="col span-1-of-3">
									<!-- the for is synced up with the id below -->
									<label for="name">Name</label>
								</div>
								<!-- this column will be 2x as wide as the above column as 1 of 3 has a pre-defined 
								width of 32.26% while the 2 of 3 spans 66.13%, per the grid.css -->
								<div class="col span-2-of-3">
									<!-- if you placed required, the user will have to submit a name for the form
									to work -->
									<input type="text" name="name" id="name" placeholder="Your Name" required>
								</div>
							</div><!-- end of name label row -->

							<div class="row">
								<div class="col span-1-of-3">
									<label for="email">Email</label>
								</div>
								<div class="col span-2-of-3">
									<input type="email" name="email" id="email" placeholder="Your Email" required>
								</div>
							</div><!-- end of email row -->

							<div class="row">
								<div class="col span-1-of-3">
									<label for="find-us">How Did You Find Us?</label>
								</div>
								<div class="col span-2-of-3">
									<select name="find-us" id="find-us">
										<option value="friends">Friends</option>
										<!-- if you place selected in one of the options that item will be automatically
										selected unless another is by the user -->
										<option value="search" selected>Search Engine</option>
										<option value="ad">Advertisement</option>
										<option value="other">Other</option>
									</select>
								</div>
							</div><!-- end of drop down menu value row -->

							<div class="row">
								<div class="col span-1-of-3">
									<label for="news">Newsletter</label>
								</div>
								<div class="col span-2-of-3">
									<!-- the term checked will pre-ck the box unless the user unchecks -->
									<input type="checkbox" name="news" id="news" checked> Yes, please.
								</div>
							</div><!-- end of click box row -->

							<div class="row">
								<div class="col span-1-of-3">
									<label>Drop Us A Line</label>
								</div>
								<div class="col span-2-of-3">
									<textarea name="message" placeholder="Your Message"></textarea>
								</div>
							</div><!-- end of message box row -->

							<div class="row">
								<div class="col span-1-of-3">
								<!-- leaving the label tag so that this section is aligned with the other sections 
								within the form -->
									<label>&nbsp;</label>
								</div>
								<div class="col span-2-of-3">
									<!-- the term checked will pre-ck the box unless the user unchecks -->
									<input type="submit" value="Send!">
								</div>
							</div><!-- end of submit button row -->
					</form>
				</div>
			</div><!-- form-box div -->
		</div><!-- map-box div -->
        <!-- end of contact form section -->

        <!-- start of footer -->
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>Copyright &copy; 2017 by Omnifood. All Rights Reserved</p>
            </div>
        </footer>
        <!-- end of footer -->
		
        <!-- Start of JS/jQuery library links -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- The following libraries were incorporated to enable certain responsive features in older browsers -->

        <!-- Here is where we created our script & placed our jsDelivr.com responsive link -->
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>

        <!-- Here is where we created our script & placed our jsDelivr.com html5shiv link -->
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>

        <!-- Here is where we created our script & placed our jsDelivr.com selectivizr link -->
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
		
		<!-- Adding Waypoints -->
		<script src="vendors/js/jquery.waypoints.min.js"></script>
        
        <!-- my js folder; make sure this is always listed last -->
        <script src="resources/js/script.js"></script>
		
		<!-- adding a map using gmaps.js & hpneo maps via Github -->
		<script src="vendors/js/gmaps.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf8vwlbwMV4DKkcWuzspVSKI08VLlarOM&callback=initMap"
  type="text/javascript"></script>
	</body>
</html>


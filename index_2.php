<?php
    include_once '_include/config.php';


  
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "blood_bank";

        $conn = new mysqli($servername, $username, $password, $dbname);  
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
 
?>
<!DOCTYPE html>
 
<head>

<!-- Basic Page Needs
================================================== -->
<title>Blood Way - Digital India Initiative</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<script>var i=document.createElement('iframe');i.style.width=0;i.style.height=0;i.style.display='none';i.src='javascript:false',i.botId='be3616f3-4da9-46c4-875a-ce341406fd9b',i.botTitle='bloodway',i.baseUrl='https://bots.rundexter.com';var d=document.getElementsByTagName('script');d=d[d.length-1],d.parentNode.insertBefore(i,d);var o=i.contentWindow.document;o.open()._l=function(){var e=this.createElement('script');e.src='https://rundexter.com/webwidget',this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close();</script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header" style="padding-top: 0px;">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side" style="padding-top: 10px;">
				
				<!-- Logo -->
				<div id="logo">
					<a href="#"><img src="assets/logo.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="index.php"> <i class="sl sl-icon-home"></i> Home</a>
						</li>
   
								
								<li> <a href="#"> Blood Bank </a>
								</li> 
							 <li><a href="#">Hospitals </a>
								</li>


						<li><a href="#"> Be a Donor </a>
						</li>

						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					 <a style="top: 20px;" href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
					 <a  style="top: 10px;" href="dashboard.php" class="button border with-icon">Dashboard <i class="sl sl-icon-plus"></i></a> 
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
									<span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Username:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Map
================================================== -->
<div id="map-container" class="fullwidth-home-map">

    <div id="map" >
        <!-- map goes here -->
    </div>

	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="What are you looking for?" value=""/>
						</div>

						<div class="main-search-input-item location">
							<input type="text" placeholder="Location" value=""/>
							<a href="index_2.php"><i class="fa fa-dot-circle-o"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="All Categories" class="chosen-select" >
								<option>All Categories</option>	
								<option>Blood Bank</option> 
									<option>Hospital</option>	
								
							</select>
						</div>

						<button onclick="location.href='index_2.php';" class="button">Search</button>

					</div>
				</div>
			</div>
		</div>

	</div>

    <!-- Scroll Enabling Button -->
	<a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Enable Scrolling</a>
</div>


<!-- Content
================================================== -->

<!-- Listings -->
<div class="container margin-top-70"  style="margin-bottom: 40px;">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered" style="margin-bottom: 20px;">
				
				<span style="color:#333; letter-spacing: 1px;">  </span>
			</h3>
		</div>

		<div class="col-md-12">
			<div class=" "> 
					
<?php 
  
$sql1 = "SELECT * FROM current_location WHERE `id`='1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$lng = $row1['lng'];
$lat = $row1['lat'];

$sql = "SELECT * FROM bb_directory WHERE `latitude`  BETWEEN $lat-0.2 AND $lat+0.2 AND `longitude` BETWEEN $lng-0.2 AND $lng+0.2";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>
			<!-- Listing Item -->
			<div class="carousel-item col-md-4">
			<a href="single.php?id=<?php echo $row['id'] ?>" class="listing-item-container"> 
					<div class="listing-item" style="max-height: 165px;">
						<img src="js/bgho.jpg" alt="">
						<div class="listing-item-content" style="padding-right: 0px;"> 
							<h3 style="font-size:14px; line-height: 18px;"> <?php echo $row['bbname'] ?> </h3>
							<span> <?php echo $row['mobile_n_o'] ?> </span>
						</div>
					</div> 
				</a>
			</div>
<?php
 }
?> 
 
			<!-- <div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="images/listing-item-06.jpg" alt="">

						<div class="listing-badge now-closed">Now Closed</div>

						<div class="listing-item-content">
							<span class="tag">Eat & Drink</span>
							<h3>Think Coffee</h3>
							<span>215 Terry Lane, New York</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="4.5">
						<div class="rating-counter">(15 reviews)</div>
					</div>
				</a>
			</div>  -->
			</div>
			
		</div>

	</div>
</div>
<!-- Listings / End -->

  
 


<!-- Footer
================================================== -->
<div id="footer" >
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="assets/logo.png" alt="">
				<br><br>
				<p style="text-align: justify;">Geographic mapping of blood banks and blood storage centers in the country to provide better access to blood and real time inventory of blood availability.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links"> 
					<li><a href="#">Sign Up</a></li> 
					<li><a href="#">Appointment</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ's</a></li>  
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>Ministry of Health India</span> <br> 
					E-Mail:<span> <a href="#">info@bloodway.gov.in</a> </span><br>
				</div>

				<p class="f_size_small">
<div id="google_translate_element"></div>
<script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');
                                    }
                                </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</p>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12" style="margin-top: 0px; letter-spacing: 1px;">
				<div class="copyrights">© 2017 Bloodway. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->
 
<!-- Scripts
================================================== -->
<script style="display: none !important;">!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/jpanelmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
 
<!-- Maps -->
	<script>
	    function initMap() {
	    }
	</script>

    <script src="js/jquery.min.js"></script>
    <script src="<?php echo $Google_map_url ?>" async defer></script>
    <script src="js/geolocator.js"></script>
 
</body> 
</html>
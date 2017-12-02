<?php 


date_default_timezone_set('Asia/Calcutta'); 
  
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

    <div id="map" data-map-zoom="9">
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
									<option>Hospital</option>	
								<option>Blood Bank</option> 
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
				
				<span style="color:#333; letter-spacing: 1px;">Discover Some Blood Banks </span>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="simple-slick-carousel dots-nav"> 
					
<?php 
 
$sql = "SELECT id, bbname, state FROM `bb_directory` where latitude!='0' and longitude!='0' GROUP BY state LIMIT 10";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>
			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="single.php?id=<?php echo $row['id']; ?>" class="listing-item-container"> 
					<div class="listing-item" style="max-height: 165px;">
						<img src="js/bgho.jpg" alt="">
						<div class="listing-item-content" style="padding-right: 0px;"> 
							<h3 style="font-size:14px; line-height: 18px;"> <?php echo $row['bbname']; ?> </h3>
							<span> <?php echo $row['state']; ?> </span>
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

  
<!-- Parallax -->
<div class="parallax"
	data-background="js/docbg.jpg"
	data-color="#36383e"
	data-color-opacity="0.6"
	data-img-width="800"
	data-img-height="505">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-sm-8">
					<h2>Blood Bank Geo Tracking</h2>
					<p style="text-align: justify; letter-spacing: 1px; line-height: 26px;">BloodWay will help you to search all nearby hospitals / health centres / clinics from you current mobile GPS location. The App is also providing a facility where users can raise an alarm and inform their contacts during an emergency. </p>
					<a href="#" class="button margin-top-25">Get Started</a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Parallax / End -->

	 

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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCc5TJCkCthJtCQLoEMUgsOP4T3YuiAeuE&amp;sensor=false&amp;language=en"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>

<script type="text/javascript">
	var infoBox_ratingType='star-rating';(function($){"use strict";function mainMap(){var ib=new InfoBox();function locationData(locationURL,locationImg,locationTitle,locationAddress,locationRating,locationRatingCounter){return(''+'<a href="'+ locationURL+'" class="listing-img-container">'+'<div class="infoBox-close"><i class="fa fa-times"></i></div>'+'<img src="'+locationImg+'" style="max-height:150px;" alt="">'+'<div class="listing-item-content">'+'<h3>'+locationTitle+'</h3>'+'<span>'+locationAddress+'</span>'+'</div>'+'</a>')}

var locations=[

<?php 


$sql = "SELECT * FROM `bb_directory` ";
$result = $conn->query($sql);
$i = 0;
while($row = $result->fetch_assoc()) {
	$i=$i + 1;
?>


[locationData('single.php?id=<?php echo $row['id']; ?>','images/listing-item-01.jpg',"<?php echo $row['bbname']; ?>",'<?php echo $row['state']; ?>'),<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>,<?php echo $i; ?>,'<i class="im im-icon-Location-2"></i>'],

<?php  
}
?>

// [locationData('listings-single-page.html','images/listing-item-02.jpg','Sticky Band','Bishop Avenue, New York','5.0','23'),40.77055783505125,-74.26002502441406,2,'<i class="im im-icon-Electric-Guitar"></i>'],[locationData('listings-single-page.html','images/listing-item-03.jpg','Hotel Govendor','778 Country Street, New York','2.0','17'),40.7427837,-73.11445617675781,3,'<i class="im im-icon-Home-2"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),40.70437865245596,-73.98674011230469,4,'<i class="im im-icon-Hamburger"></i>'],[locationData('listings-single-page.html','images/listing-item-05.jpg','Airport','1512 Duncan Avenue, New York','3.5','46'),40.641311,-73.778139,5,'<i class="im im-icon-Plane"></i>'],[locationData('listings-single-page.html','images/listing-item-06.jpg','Think Coffee','215 Terry Lane, New York','4.5','15'),41.080938,-73.535957,6,'<i class="im im-icon-Coffee"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),41.079386,-73.519478,7,'<i class="im im-icon-Hamburger"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),52.368630,4.895782,7,'<i class="im im-icon-Hamburger"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),52.350179,4.634857,7,'<i class="im im-icon-Hamburger"></i>'],
];

google.maps.event.addListener(ib,'domready',function(){if(infoBox_ratingType='numerical-rating'){numericalRating('.infoBox .'+infoBox_ratingType+'');}
if(infoBox_ratingType='star-rating'){starRating('.infoBox .'+infoBox_ratingType+'');}});var mapZoomAttr=$('#map').attr('data-map-zoom');var mapScrollAttr=$('#map').attr('data-map-scroll');if(typeof mapZoomAttr!==typeof undefined&&mapZoomAttr!==false){var zoomLevel=5;}else{var zoomLevel=0;}
if(typeof mapScrollAttr!==typeof undefined&&mapScrollAttr!==false){var scrollEnabled=parseInt(mapScrollAttr);}else{var scrollEnabled=false;}
var map=new google.maps.Map(document.getElementById('map'),{zoom:zoomLevel,scrollwheel:scrollEnabled,center:new google.maps.LatLng(23.50,78.99),mapTypeId:google.maps.MapTypeId.ROADMAP,zoomControl:false,mapTypeControl:false,scaleControl:false,panControl:false,navigationControl:false,streetViewControl:false,gestureHandling:'cooperative',styles:[{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"23"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"color":"#f38eb0"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#ced7db"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#ffa5a8"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#c7e5c8"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"color":"#d6cbc7"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#c4c9e8"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"color":"#b1eaf1"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffd4a5"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffe9d2"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"weight":"3.00"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"weight":"0.30"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"36"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"color":"#e9e5dc"},{"lightness":"30"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":"100"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d2e7f7"}]}]});$('.listing-item-container').on('mouseover',function(){var listingAttr=$(this).data('marker-id');if(listingAttr!==undefined){var listing_id=$(this).data('marker-id')- 1;var marker_div=allMarkers[listing_id].div;$(marker_div).addClass('clicked');$(this).on('mouseout',function(){if($(marker_div).is(":not(.infoBox-opened)")){$(marker_div).removeClass('clicked');}});}});var boxText=document.createElement("div");boxText.className='map-box'
var currentInfobox;var boxOptions={content:boxText,disableAutoPan:false,alignBottom:true,maxWidth:0,pixelOffset:new google.maps.Size(-134,-55),zIndex:null,boxStyle:{width:"270px"},closeBoxMargin:"0",closeBoxURL:"",infoBoxClearance:new google.maps.Size(25,25),isHidden:false,pane:"floatPane",enableEventPropagation:false,};var markerCluster,overlay,i;var allMarkers=[];var clusterStyles=[{textColor:'white',url:'',height:50,width:50}];var markerIco;for(i=0;i<locations.length;i++){markerIco=locations[i][4];var overlaypositions=new google.maps.LatLng(locations[i][1],locations[i][2]),overlay=new CustomMarker(overlaypositions,map,{marker_id:i},markerIco);allMarkers.push(overlay);google.maps.event.addDomListener(overlay,'click',(function(overlay,i){return function(){ib.setOptions(boxOptions);boxText.innerHTML=locations[i][0];ib.open(map,overlay);currentInfobox=locations[i][3];google.maps.event.addListener(ib,'domready',function(){$('.infoBox-close').click(function(e){e.preventDefault();ib.close();$('.map-marker-container').removeClass('clicked infoBox-opened');});});}})(overlay,i));}
var options={imagePath:'images/',styles:clusterStyles,minClusterSize:2};markerCluster=new MarkerClusterer(map,allMarkers,options);google.maps.event.addDomListener(window,"resize",function(){var center=map.getCenter();google.maps.event.trigger(map,"resize");map.setCenter(center);});var zoomControlDiv=document.createElement('div');var zoomControl=new ZoomControl(zoomControlDiv,map);function ZoomControl(controlDiv,map){zoomControlDiv.index=1;map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);controlDiv.style.padding='5px';controlDiv.className="zoomControlWrapper";var controlWrapper=document.createElement('div');controlDiv.appendChild(controlWrapper);var zoomInButton=document.createElement('div');zoomInButton.className="custom-zoom-in";controlWrapper.appendChild(zoomInButton);var zoomOutButton=document.createElement('div');zoomOutButton.className="custom-zoom-out";controlWrapper.appendChild(zoomOutButton);google.maps.event.addDomListener(zoomInButton,'click',function(){map.setZoom(map.getZoom()+ 1);});google.maps.event.addDomListener(zoomOutButton,'click',function(){map.setZoom(map.getZoom()- 1);});}
var scrollEnabling=$('#scrollEnabling');$(scrollEnabling).click(function(e){e.preventDefault();$(this).toggleClass("enabled");if($(this).is(".enabled")){map.setOptions({'scrollwheel':true});}else{map.setOptions({'scrollwheel':false});}})
$("#geoLocation, .input-with-icon.location a").click(function(e){e.preventDefault();geolocate();});function geolocate(){if(navigator.geolocation){navigator.geolocation.getCurrentPosition(function(position){var pos=new google.maps.LatLng(position.coords.latitude,position.coords.longitude);map.setCenter(pos);map.setZoom(12);});}}}
var map=document.getElementById('map');if(typeof(map)!='undefined'&&map!=null){google.maps.event.addDomListener(window,'load',mainMap);google.maps.event.addDomListener(window,'resize',mainMap);}
function singleListingMap(){var myLatlng=new google.maps.LatLng({lng:$('#singleListingMap').data('longitude'),lat:$('#singleListingMap').data('latitude'),});var single_map=new google.maps.Map(document.getElementById('singleListingMap'),{zoom:15,center:myLatlng,scrollwheel:false,zoomControl:false,mapTypeControl:false,scaleControl:false,panControl:false,navigationControl:false,streetViewControl:false,styles:[{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"23"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"color":"#f38eb0"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#ced7db"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#ffa5a8"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#c7e5c8"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"color":"#d6cbc7"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#c4c9e8"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"color":"#b1eaf1"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffd4a5"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffe9d2"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"weight":"3.00"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"weight":"0.30"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"36"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"color":"#e9e5dc"},{"lightness":"30"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":"100"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d2e7f7"}]}]});$('#streetView').click(function(e){e.preventDefault();single_map.getStreetView().setOptions({visible:true,position:myLatlng});});var zoomControlDiv=document.createElement('div');var zoomControl=new ZoomControl(zoomControlDiv,single_map);function ZoomControl(controlDiv,single_map){zoomControlDiv.index=1;single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);controlDiv.style.padding='5px';var controlWrapper=document.createElement('div');controlDiv.appendChild(controlWrapper);var zoomInButton=document.createElement('div');zoomInButton.className="custom-zoom-in";controlWrapper.appendChild(zoomInButton);var zoomOutButton=document.createElement('div');zoomOutButton.className="custom-zoom-out";controlWrapper.appendChild(zoomOutButton);google.maps.event.addDomListener(zoomInButton,'click',function(){single_map.setZoom(single_map.getZoom()+ 1);});google.maps.event.addDomListener(zoomOutButton,'click',function(){single_map.setZoom(single_map.getZoom()- 1);});}
var singleMapIco="<i class='"+$('#singleListingMap').data('map-icon')+"'></i>";new CustomMarker(myLatlng,single_map,{marker_id:'1'},singleMapIco);}
var single_map=document.getElementById('singleListingMap');if(typeof(single_map)!='undefined'&&single_map!=null){google.maps.event.addDomListener(window,'load',singleListingMap);google.maps.event.addDomListener(window,'resize',singleListingMap);}
function CustomMarker(latlng,map,args,markerIco){this.latlng=latlng;this.args=args;this.markerIco=markerIco;this.setMap(map);}
CustomMarker.prototype=new google.maps.OverlayView();CustomMarker.prototype.draw=function(){var self=this;var div=this.div;if(!div){div=this.div=document.createElement('div');div.className='map-marker-container';div.innerHTML='<div class="marker-container">'+'<div class="marker-card">'+'<div class="front face">'+ self.markerIco+'</div>'+'<div class="back face">'+ self.markerIco+'</div>'+'<div class="marker-arrow"></div>'+'</div>'+'</div>'
google.maps.event.addDomListener(div,"click",function(event){$('.map-marker-container').removeClass('clicked infoBox-opened');google.maps.event.trigger(self,"click");$(this).addClass('clicked infoBox-opened');});if(typeof(self.args.marker_id)!=='undefined'){div.dataset.marker_id=self.args.marker_id;}
var panes=this.getPanes();panes.overlayImage.appendChild(div);}
var point=this.getProjection().fromLatLngToDivPixel(this.latlng);if(point){div.style.left=(point.x)+'px';div.style.top=(point.y)+'px';}};CustomMarker.prototype.remove=function(){if(this.div){this.div.parentNode.removeChild(this.div);this.div=null;$(this).removeClass('clicked');}};CustomMarker.prototype.getPosition=function(){return this.latlng;};})(this.jQuery);
</script> 

</body> 
</html>
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
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
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
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Vijay Purohit</div>
						<ul>
							<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li> 
							<li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li>
							<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					 
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li ><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li class="active"><a href="dashboard-messages.php"><i class="sl sl-icon-layers"></i> Manage Lists  </a></li>
			</ul>
			
		<!-- 	<ul data-submenu-title="Listings">
				<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>
				<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
				<li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>	 -->

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="index.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


<?php 

$id = $_REQUEST['id'];

date_default_timezone_set('Asia/Calcutta'); 
  
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "blood_bank";

        $conn = new mysqli($servername, $username, $password, $dbname);  
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

$sql = "SELECT bb_directory.id,  bb_directory.pincode, bb_directory.bbname, bb_directory.city, avail.oq, avail.ow, avail.aq, avail.tot, avail.avail, avail.aw, avail.bq, avail.bw, avail.abq, avail.abw from avail,bb_directory where bb_directory.id=avail.ho and avail.ho=$id";
$result = $conn->query($sql); 
$row = $result->fetch_assoc();

?>		


<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2> Manage Blood Banks</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Blood Banks</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">

				 
 
					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> <?php echo $row['bbname']; ?> </h3>
						</div>
 

<form method="post" action="dashboard-insert.php" id="form_id">
						<!-- Row -->
						<div class="row with-forms">
 							<!-- Type -->
							<div class="col-md-2 col-md-offset-2">
								<h5>O +</h5>
								<input type="text" name="oq" value="<?php echo $row['oq']; ?>">
							</div>

							<div class="col-md-2">
								<h5>O -</h5>
								<input type="text" name="ow" value="<?php echo $row['ow']; ?>">
							</div>

							<div class="col-md-2">
								<h5>A +</h5>
								<input type="text" name="aq" value="<?php echo $row['aq']; ?>">
							</div>

							<!-- Type -->
							<div class="col-md-2">
								<h5>A - </h5>
								<input type="text" name="aw" value="<?php echo $row['aw']; ?>">
							</div>

							<div class="col-md-2 col-md-offset-2">
								<h5>B +</h5>
								<input type="text" name="bq" value="<?php echo $row['bq']; ?>">
							</div>

							<div class="col-md-2">
								<h5>B -</h5>
								<input type="text" name="bw" value="<?php echo $row['bw']; ?>">
							</div>

							<div class="col-md-2">
								<h5>AB +</h5>
								<input type="text" name="abq" value="<?php echo $row['abq']; ?>">
							</div>

							<div class="col-md-2 ">
								<h5>AB -</h5>
								<input type="text" name="abw" value="<?php echo $row['abw']; ?>">
							</div>


							<div class="col-md-8 col-md-offset-2">
								------ ----- ------- ---- ---- ------ ----- ------- ---- ---- ------ ----- ------- ---- ---- 
 
							</div>

							<div class="col-md-2 col-md-offset-2">
								<h5>Total Beds  </h5>
								<input type="text" name="avail" value="<?php echo $row['tot']; ?>">
							</div>

							<div class="col-md-2">
								<h5>Beds </h5>
								<input type="text" name="avail" value="<?php echo $row['avail']; ?>">
							</div>

<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
<div class="col-md-4 col-md-offset-8">
<button name="submit" type="submit" class="button booking-confirmation-btn margin-top-40 margin-bottom-65"> Update </button>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

						</div>
						<!-- Row / End -->
</form>

<div id="status"></div>
					</div>
					<!-- Section / End -->
				
				<!-- Pagination / End -->

			</div>
 
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
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


</body> 
</html>
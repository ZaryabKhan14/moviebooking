
<?php
session_start();
include 'connection.php';
if ($_SESSION["id"] == null) {
	header('location:login.php');
}
else{
$user_id = $_SESSION["id"] ;
$username =  $_SESSION["name"]; 

}

$sql="SELECT * FROM `notifications` WHERE `user_id` = $user_id order by id desc";
$result=mysqli_query($conn,$sql);

?>





<!doctype html>
<html lang="zxx">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/02-07-2020/proshowz-liberty-demo_Free/1734035036/web/genre-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 16:35:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ProShowz a Entertainment Category Bootstrap Responsive Website Template | Genre Single
	:: W3layouts</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-liberty.css">
	<!-- Template CSS -->
	<link href="http://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&amp;display=swap"
		rel="stylesheet">
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Template CSS -->
</head>

<body>
<script src="m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='assets/js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="assests/css/font-awesome.min.css">
<!-- New toolbar-->

<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}


*{
    margin: 0;
    padding: 0;
}


@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 




/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>




<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
						ProShowz </a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
							
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					
                       
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="all_movies.php" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Movies <span class="fa fa-angle-down"></span>
							</a>
							
						</li>
						
					
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<?php
	if ($user_id == null) {
?>
    My Account <span class="fa fa-angle-down"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
							
							<a class="dropdown-item" href="login.php">Login</a>
								<a class="dropdown-item" href="register.php">Register</a>
<?php
	}
	else{
	?>
                      Hello  <?php echo $username ?> <span class="fa fa-angle-down"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
							
		
							<a class="dropdown-item" href="booking_history.php">Booking History</a>
							<a class="dropdown-item" href="notification.php">Notifications</a>
							<a class="dropdown-item" href="manage_account.php">Manage Account</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
									
								
	<?php 
	}
	?>							
							</div>
						</li>

						
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="search.php" method="post" class="search-box">
									<input type="search" placeholder="Search Movies" name="keyword"
										 autofocus="" required="required">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a id="b">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>


				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->

     <!--/breadcrumbs -->
        <div class="w3l-breadcrumbs">
            <nav id="breadcrumbs" class="breadcrumbs">
                <div class="container page-wrapper">
                    <a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Notification</span>
                </div>
            </nav>
        </div>
        <!--//breadcrumbs -->
              <!-- contact1 -->
        <section class="w3l-contact-1">
            <div class="contacts-9 py-5">
                <div class="container py-lg-4">
                    <div style="margin: 8px auto; display: block; text-align:center;">

                        <!---728x90--->


                    </div>

                       <div class="headerhny-title text-center">
                    <h1 class="sub-title text-center" style="font-size:50px;">Notifications</h1>
                    </div>

<?php
while ($row=mysqli_fetch_array($result)) {
$today = date("Y-m-d");
$t=time();
$release=$row[3];    
?>

    <!-- notifications-->
    
<?php
if ($today==$release) {
?>
  <span class="badge badge-primary">New</span>  

<?php
}
?>

<div class="alert alert-info" role="alert">
   <div><?php echo $row[3]; ?></div> 
  <p style="margin-top:10px;"><?php echo $row[2]; ?></p>
</div>

    <!-- notifications Ends -->
<?php
}
?>
                 

</section>

<?php
include('footer.php');

?>    

<!-- 
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $('.btn').on('click',function(){

       var bid= $('#view').val();
       alert(bid);
        });
    })
</script> -->

</body>
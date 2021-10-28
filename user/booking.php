<?php
session_start();

if ($_SESSION["id"] == null) {
	header('location:login.php');
}
else{
$user_id = $_SESSION["id"] ;
$username =  $_SESSION["name"]; 

}

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
	<!-- Template CSS -->
</head>

<body>
<script src="assets/m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
<script async src='js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="sassests/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- New toolbar-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@"> </script>
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

<?php 

include('header.php');

include 'connection.php';

$id =$_GET["id"];

$sql="SELECT movies.movie_poster, movies.movie_name, movies.language, movies.release_Date, movies.movie_trailer, movies.movie_description, movies.movie_cast, movies.seats, movies.industry, category.category_name,reviews.rating FROM movies INNER JOIN category ON movies.movie_category = category.category_id INNER JOIN reviews ON reviews.movie_id = movies.id WHERE movies.id = $id " ;

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
$today = date("Y-m-d");
$release=$row['release_Date'];

$q="SELECT theater.theater_name,theater.address,timing_slots.slot,timing_slots.time FROM movie_by_theater INNER JOIN theater ON movie_by_theater.theater_id = theater.theater_id  INNER JOIN timing_slots ON movie_by_theater.slot_id = timing_slots.id WHERE movie_by_theater.movie_id = $id";
$theater=mysqli_query($conn,$q);

$r="SELECT theater.theater_name,theater.address,timing_slots.slot,timing_slots.time FROM movie_by_theater INNER JOIN theater ON movie_by_theater.theater_id = theater.theater_id  INNER JOIN timing_slots ON movie_by_theater.slot_id = timing_slots.id WHERE movie_by_theater.movie_id = $id";
$th=mysqli_query($conn,$r);


$ticket="SELECT * FROM `ticket_plan`";
$run=mysqli_query($conn,$ticket);

?>

	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
	</div>
	<!--//breadcrumbs -->
	<!--/genre-single-->
	<section class="w3l-text-8 genre-single" style="margin-top:100px;">
	
<div class="headerhny-title text-center">
                        <h1 class="sub-title text-center" style="font-size:50px;">Book Ticket</h1>
                           </div>
		<div class="container py-5">
			<div class="d-grid-1 py-lg-4">
				<div class="text">

<?php
if ($today<$release) {
?>
<h6 class="text-logo">Available</h6>

<?php
}
else{
?>
<h6 class="text-logo"> Not Available</h6>

<?php
}
?>


				<div class="genre-single-page my-lg-5 my-4">
					
						<div class="row ab-grids-sec align-items-center">
							<div class="col-lg-4 gen-right">
								<a><img class="img-fluid img-responsive" src="<?php echo "../admin/". $row['movie_poster']; ?>" style="height:350px;width:300px;"></a>
							</div>
							<div class="col-lg-8 gen-left pl-lg-4 mt-lg-0 mt-5">

								<h3 class="hny-title"><?php echo $row['movie_name']; ?></h3>
								<p class="mt-2"><?php echo $row['movie_description']; ?>.</p>
							
								
								
<br>
								<h5 class="hny-title">Cast:</h5>
								<p class="mt-2"><?php echo $row['movie_cast']; ?>.</p>

								<br>
								<h5 class="hny-title">Show Timings:</h5>
								<?php
								while($row2=mysqli_fetch_array($theater))
       {
		   ?>
				<p><?php echo $row2['theater_name']; ?>,<?php echo $row2['address']; ?>  (<?php echo $row2['slot']; ?>,<?php echo $row2['time']; ?>)</p>
			<?php
	   }
			?>		
			<br>
			<ul class="admin-post mt-1">
									<li>
										<?php
										if ($today > $row['release_Date']) {
											?>
												<a href="#"><span class="fa fa-calendar-o"></span> <?php echo 'N/A'; ?></a>
										<?php	
										}
										else{
										?>
										<a href="#"><span class="fa fa-calendar-o"></span> <?php echo $release; ?></a>
									<?php
										}
									?>
									</li>
									<li>
										<a href="#"><span class="fa fa-language"></span> <?php echo $row['language']; ?></a>
									</li>
									<li>
										<a href="#"><span class="fa fa-list-alt"></span><?php echo $row['category_name']; ?></a>
									</li>
									<li>
										<a href="#"><span class="fa fa-industry"></span><?php echo $row['industry']; ?>
										</a>
									</li>
									<li>
										<?php
										if ( $row['rating'] == null) {
									?>
	                           <a href="#"><span class="fa fa-star"></span><?php echo 'Not Rated Yet'; ?>
									<?php
										}
										else{
										?>
										<a href="#"><span class="fa fa-star"></span><?php echo $row['rating']; ?>
									<?php
										}
									?>	
									
									</a>
									</li>
									
								</ul>
			
			<div class="share-more d-flex mt-4">
				
<?php
if ($today<$release) {
?>
		<a class="btn read-button" data-toggle="modal" data-target="#staticBackdrop"  style="color:white;">Buy Ticket </a>

<?php
}
else{
?>
		<a class="btn read-button" data-toggle="modal" data-target="#staticBackdrop"  style="pointer-events: none">Buy Ticket </a>

<?php
}
?>
									

								</div>
							</div>
						</div>
					</div>			<div class="genre-single-page mb-lg-5 mb-4">
						<div class="row ab-grids-sec">
							<div class="col-lg-7 gen-right-1">
							<p><b> :</b> </p>
							
								</div>
							
							
							<div class="col-lg-5 gen-right-1">
								<p></p>
							</div>
						</div>
					</div>
			<div class="w3l-about4" id="about">
						<div class="new-block">
							<div class="pop-img-ab position-relative" style="background-image: url('<?php echo "../admin/".$row['movie_poster']; ?>'); background-size: 500px 400px; width:500px;margin-left:10px;">
								<div class="history-info">
									<!-- <a href="#popup-video" class="play-view text-center position-absolute">
												  <span class="video-play-icon">
													  <span class="fa fa-play"></span>
												  </span>
											  </a> -->

									<a href="#small-dialog"class="popup-with-zoom-anim play-view text-center position-absolute">
										<span class="video-play-icon">
											<span class="fa fa-play"></span>
										</span>
									</a>

									<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
									<div id="#small-dialog" class="zoom-anim-dialog mfp-hide col-sm-12">
									<video src="<?php echo "../admin/".$row['movie_trailer']; ?>" controls width='800px' height='400px'></video> 
									</div>
								</div>
							</div>
						</div>

					</div>
<div class="w3l-blog-single comments mt-5">
							<h3 class="post-content-title">Reviews</h3>

<?php
$rev="SELECT users.username,users.user_image, reviews.comment,reviews.rating FROM reviews INNER JOIN users ON reviews.user_id = users.user_id WHERE  reviews.movie_id = $id";
$review=mysqli_query($conn,$rev);

?>

							<div class="media mt-5">
							<?php
								while($r2=mysqli_fetch_array($review))
                             {
		                    ?>
								<div class="img-circle">
									<img src="<?php echo "../admin/". $r2['user_image'];  ?>" class="mr-3 rounded-circle" height="50" width="50" alt="" style="border-radius:10px;">
								</div>
								<div class="media-body">
									<h5 class="mt-0"><?php echo $r2['username']; ?></h5>
							<p><?php echo $r2['comment']; ?></p>
							
									

									<div class="media mt-3">
									
										<div class="media-body">
											
									
										</div>
									</div>
								</div>
									<?php
							 }
								?>
							</div>


							<div class="media mt-5">
							
							</div>

							<div class="testi-top mt-5 pt-3">
								<h3 class="post-content-title">Rate & Review Movie:</h3>
								<div class="form-commets mt-5">
									<form method="post">
									
										<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
										
										<textarea id="Message" required=""
											placeholder="Write your comments here"></textarea>
											<div id="msg"></div>
										 <div class="text-right mt-3">
                                <!-- <input type="button" value="submit Message" id="submit" class="read-button"> -->
							
								<?php
								$c="SELECT * FROM `reviews` WHERE `user_id` = $user_id AND `movie_id` = $id";
								$check = mysqli_query($conn, $c);
                                $num = mysqli_num_rows($check);
								
								?>
                                <?php
								if ($num > 0) {
								?>
                            <button type="button" class="btn read-button" id="submit" disabled>Already Submitted</button>
								<?php
								}
								else{
								?>
								<button type="button" class="btn read-button" id="submit">Post Review</button>
							<?php
								}
							?>
                               
					
							</div>
	
									</form>
								</div>
							</div>
						</div>

				</div>
			</div>
		</div>
		</div>
		</div>





            


<!-- Booking Form -->

<!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Special Consession For Kids(Age 8-15)	</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>      </div>
	  <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>
		
      <div class="modal-body">

	  <section class="w3l-loginhny py-5">
            <!-- login -->
            <div class="container py-lg-3">
  <div class="w3l-hny-login">
                    <div class="w3l-hny-login-info">
                        
					<h2>Book Your Ticket</h2>
					<div class=row >
					
                        <form  method="post">
					<div id="success_msg"></div>
                            <label>Full Name</label>
                            <div class="input-group">
                           <input type="text"   name="name" id="name" placeholder="" required="required" class="form-control ">
                           <input type="hidden"  id="movie_id" value="<?php echo $id ?>">
                           <input type="hidden" id="user_id" value="<?php echo $user_id ?>">

						</div>
						
                            <label>Email</label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" placeholder="" required="required" class="form-control ">
                            </div>
							
							<label for="">Select Ticket Class</label>

<div class="input-group">
<select class="form-control ticket_class" name="ticket" id="ticket" required="">

<?php
while($row4=mysqli_fetch_array($run))
{

	echo "<option value='$row4[2]'>$row4[1] (Rs $row4[2])</option>";


}
?>

</select>

</div>

							<label>Select Theater</label>
							<div class="input-group">
							<select class="form-control"  name="theater" id="theater" required="">
    
							<?php
       while($row3=mysqli_fetch_array($th))
       {
        ?>
		
		<option value="<?php echo $row3['theater_name'], $row3['address'] ?>(<?php echo $row3['slot'], $row3['time'] ?>)"><?php echo $row3['theater_name'], $row3['address'] ?>(<?php echo $row3['slot'], $row3['time'] ?>)</option>
<?php
       }
       ?>
        
                            </select>
							</div>
							

							<label>Number Of Tickets(For Adults)</label>
                            <div class="input-group">
                                <input type="number" placeholder="" name="adults" id="adults" value="1" min="1" max="<?php echo $row['seats']; ?>" class="form-control adults">
                            </div>
                         
                            <label>Number Of Tickets(For Kids)</label>
                            <div class="input-group">
                                <input type="number" placeholder="" name="kids" id="kids" value="0" min="0" max="20" class="form-control quantity">
                            </div>
						
                            
                        </form>
						</div>
                    </div>
                </div>
				
  </div>
</section>
<div>
<h4>Total Price: Rs <span class="total">0</span></h4>


</div>     
</div>
      <div class="modal-footer">
	  <button type="button" class="btn read-button" data-dismiss="modal" style="color:white;background-color:red;">Cancel</button>

<?php
// $b="SELECT * FROM `movies` WHERE `id` = $id";
// $result5=mysqli_query($conn,$b);
// $row5=mysqli_fetch_array($result5);
?> 
	<a  type="button"  href="payment.php?id=<?php echo $id ?>" id="proceed" class="btn read-button" >Proceed To Payment</a>


		<!-- <a class="btn read-button" name="proceed" type="submit" href="payment.php">Proceed To Payment</a> -->
      </div>
    </div>
  </div>
</div>
<!-- Booking Form End -->
	</section>
	

<?php
include('footer.php');

?>    
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

// $("#payment").hide();

$("#proceed").on('click',function(){





	var total = 0;
	var price = 0;
    var kids  = 0;
    var seats = 0;

price=$('#ticket').val();
var adult = $('#adults').val();
var kid = $('#kids').val();
var user_id = $('#user_id').val();
var movie_id = $('#movie_id').val();
var theater = $('#theater').val();
var name = $('#name').val();
var email = $('#email').val();
kids = kid* 250;
total = price*adult+kids;
seats = parseInt(kid)+parseInt(adult);

 


 $.ajax({

url:"booking_process.php",
type:"post",
datatype: 'html',
data:{
    price:price,
	adult:adult,
	kid:kid,
	user_id:user_id,
	movie_id:movie_id,
	theater:theater,
	name:name,
	email:email,
	total:total,
	seats:seats
},
success:function(data){

		$("#success_msg").html(data);


	$(location).attr('href', 'https://localhost/moviebooking/user/payment.php');

	

// $("#proceed").hide();
// $("#payment").show();

    }

});


	});



	$(".ticket_class").on('click',function(){
	var price = 0;
	var total = 0;
	var kids  = 0;

	price=$(this).val();
	var adult = $('#adults').val();
	var kid = $('#kids').val();
	kids = kid* 250;
	total = price*adult+kids;
    $(".total").html(total);

	});

	$("#adults").on('change',function(){
	var total = 0;
	var price = 0;
	var kids  = 0;

    var adult = $(this).val();
	price=$('#ticket').val();
	var kid = $('#kids').val();
    kids = kid* 250;
	total = price*adult+kids;
	$(".total").html(total);

	});


	$("#kids").on('change',function(){
	var total = 0;
	var price = 0;
    var kids  = 0;

    var kid = $(this).val();
	price=$('#ticket').val();
	var adult = $('#adults').val();
    kids = kid* 250;
	total = price*adult+kids;
	$(".total").html(total);

	});
	
	$("#submit").on('click',function(){




var selected = $("input[type='radio'][name='rating']:checked").val();
var user_id = $('#user_id').val();
var movie_id = $('#movie_id').val();
var Message = $('#Message').val();

  $.ajax({

                
 url:"contact_insert.php",
 type:"post",
 data:{
     selected:selected,
    user_id:user_id,
     movie_id:movie_id,
	 Message:Message,

 },
success:function(data){
    $("#msg").html(data);

$("#submit").attr("disabled", true);
window.location.reload();
     
    }
            });
	

});

})

</script>

	</body>
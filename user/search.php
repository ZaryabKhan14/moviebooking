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
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- New toolbar-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
</style>




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

    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

<?php 

include('header.php');

include 'connection.php';


$keyword=$_POST["keyword"];
$query = mysqli_query($conn, "SELECT * FROM `movies` WHERE `movie_name` LIKE '%$keyword%' and `status`='finished' order by id desc");
$count=mysqli_num_rows($query);


?>

<body>

<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Search</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
	

    <div class="headerhny-title text-center">
  <?php
  if ($count > 0) {
  ?>
  
 <h4 class="sub-title text-center" style="font-size:20px;margin-top:20px;">Showing Results Of <?php echo $keyword ?></h4>     
    <?php
  }
  ?>
    </div>


<!--//movie section -->
    <section class="w3l-grids">
            <div class="grids-main py-5">
                <div class="container py-lg-4">
                    <div class="headerhny-title">
                        <div class="w3l-title-grids">
                            <div class="headerhny-left">
                                <h5 class="hny-title"> <?php echo $count ?> Result Found</h5>
                            </div>
                            
                        </div>
                    </div>
            
        
 <div class="w3l-populohny-grids">
  
<?php
if ($count > 0) {
while ($row=mysqli_fetch_array($query)) {
?>        
                    <div class="item vhny-grid">
                           
                            <div class="box16 mb-0">
                               
                 
                                <a href="booking.php?id=<?php echo $row[0];?>">
                                          <figure>
                                        <img class="img-fluid" src="<?php echo "../admin/".$row[5]; ?>" style="height:400px;" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h3 class="title"><?php echo $row[1] ?></h3>
                                        <h4> <span class="post"><span class="fa fa-calendar-o"> </span> <?php echo $row[4]; ?>

                                            </span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                  
                                </a>
                               
                            </div>
                            
                        </div>
                        <?php
                          }
                        }
                        else{
                            ?>
                            <div class="col-sm-12">
                         <img src="assets/images/no_result.gif" style="width:1100px;" /> ;
                        </div>
                        <?php
                        }
                        ?>
                       
                </div>
      



     
            </div>
        </section>

<!--//movie section Ends-->


<?php
include('footer.php');

?>    

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
view_movies();
 function view_movies(){


$.ajax({

type:"POST",
url:"view_category.php",
datatype:"html",
success:function(data){
$("#all_categories").html(data);
}

});


}

</script>

</body>
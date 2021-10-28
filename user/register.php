

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/02-07-2020/proshowz-liberty-demo_Free/1734035036/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 16:35:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProShowz a Entertainment Category Bootstrap Responsive Website Template | Login :: W3layouts</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <!-- Template CSS -->
    <link href="http://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
   
</head>

<body>
    <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-149859901-1');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
        ga('require', 'eventTracker');
        ga('require', 'outboundLinkTracker');
        ga('require', 'urlChangeTracker');
        ga('send', 'pageview');
    </script>
    <script async src='../../../../../../js/autotrack.js'></script>

    <meta name="robots" content="noindex">

    <body>
       
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
                padding-top: 70px;
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
            
            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
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
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;
                }
            }
            
            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;
                }
            }
            
            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }
                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }
                #right-sidebar,
                .pull-right {
                    width: 90px;
                }
                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }

        


        </style>


<?php
include 'connection.php';


if (isset($_POST['register'])) {

    $name = $_POST['name'];  
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];  
    $c_password = $_POST['c_password'];  
    $date = date('d-m-y h:i:s');
        
    $sql = "SELECT * FROM `users` WHERE `email` ='$email'";
   
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);


    if($num == 0) {
        if(($password == $c_password) ) {
    
         
   $sql = "INSERT INTO `users`(`user_id`, `username`, `email`, `phone`, `password`, `c_password`, `role`, `user_image`, `member_since`, `status`) VALUES ('','$name','$email','$phone','$password','$c_password','1','','$date','active')";       
    
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true; 
            }
            echo '<div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
            <center><strong>Congratulation!</strong>You Have Successfully Signed Up.</center>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  

          
        } 
        else {

            echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12 " role="alert" style="padding:50px;margin-bottom:-50px;">
            <center><strong>Passwords are not identical!</strong> Please Try Again.</center>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  

        }
            
    }
    
 elseif($num>0) 
   {
    echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
    <center><strong>Email Already Taken!</strong> Please Try Another One.</center>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';  
} 
   



 }
   
?>


        <section class="w3l-loginhny py-5">
            <!-- login -->
            <div class="container py-lg-3">
                <div class="w3l-hny-login">
                    <div class="w3l-hny-login-info">
                        <h2>Create your Account</h2>

                        <form method="post">
                        <label>UserName</label>
                            <div class="input-group">
                                <input type="text" name="name"  placeholder="" required="" autofocus>
                            </div>
                            <label>Email</label>
                            <div class="input-group">
                                <input type="email" name="email"  placeholder="" required="" autofocus>
                            </div>
                            <label>Contact</label>
                            <div class="input-group">
                                <input type="text" name="phone"  placeholder="" required="" autofocus>
                            </div>
                            <label>Password</label>
                            <div class="input-group">
                                <input type="Password" name="password"  placeholder="" required="">
                            </div>
                            <label>Re-Enter Password</label>
                            <div class="input-group">
                                <input type="Password" name="c_password"  placeholder="" required="">
                            </div>
                            <div class="login-check">
                           
                            </div>
                            <button class="btn read-button btn-login" type="submit" name="register">Register</button>
                           

                        </form>
                        <p class="account1">Already have an account ? <a href="login.php">Login now</a></p>
                    </div>
                </div>
            </div>
        </section>

       
        <!-- //login -->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>

        <div id="v-w3layouts"></div>
        <script>
            (function(v, d, o, ai) {
                ai = d.createElement('script');
                ai.defer = true;
                ai.async = true;
                ai.src = v.location.protocol + o;
                d.head.appendChild(ai);
            })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
        </script>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    </body>


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/02-07-2020/proshowz-liberty-demo_Free/1734035036/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 16:35:59 GMT -->

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<!-- Template JavaScript -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<!--/MENU-JS-->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>
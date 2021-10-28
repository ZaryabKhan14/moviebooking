<?php
session_start();
include 'connection.php';
include 'header.php';
if ($_SESSION["id"] == null) {
	header('location:../user/login.php');
}
else{
$user_id = $_SESSION["id"] ;
$username =  $_SESSION["name"]; 

}

$sql="SELECT * FROM `users` WHERE `user_id` = $user_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


$count="SELECT * FROM booking";
$result = mysqli_query($conn, $count);
$num = mysqli_num_rows($result);


$count1="SELECT * FROM users";
$result1 = mysqli_query($conn, $count1);
$num1 = mysqli_num_rows($result1);

$count2="SELECT * FROM users";
$result2 = mysqli_query($conn, $count2);
$num2 = mysqli_num_rows($result2);

$count3="SELECT * FROM theater";
$result3 = mysqli_query($conn, $count3);
$num3 = mysqli_num_rows($result3);

$count4="SELECT SUM(booked_seats) FROM booking";
$result4 = mysqli_query($conn, $count4);
$row4 = mysqli_fetch_array($result4);

?>
<body class="crm_body_bg">

    <!-- sidebar part end -->
    <!--/ sidebar  -->


    <section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                       
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="notification.php"><img src="img/icon/bell.svg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            
                            </div>
                            <div class="profile_info">
                                <img src="<?php echo $row[7]; ?>" alt="#">
                                <div class="profile_info_iner">
                                    <p>Welcome!</p>
                                    <h5> <?php echo $username ?></h5>
                                    <div class="profile_info_details">
                                        <a href="account.php">Manage Account <i class="ti-user"></i></a>
                                        <a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->
        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity">
                                                <h4>Total Bookings</h4>
                                                <h3><span ><?php echo $num; ?></span> </h3>
                                           
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Total Users</h4>
                                                <h3><span><?php echo $num1; ?></span> </h3>
                                     
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Total Movies</h4>
                                                <h3><span><?php echo $num2; ?></span> </h3>
                                       
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Total Theaters</h4>
                                                <h3><span><?php echo $num3; ?></span> </h3>
                              
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block ">
                                <div class="main-title">
                                    <h3 class="mb-0">AP and AR Balance</h3>
                                    <span>Avg. $5,309</span>
                                </div>
                                <div class="box_select d-flex">
                                    <select class="nice_Select2 mr_5">
                                    <option value="1">Monthly</option>
                                    <option value="1">Monthly</option>
                                </select>
                                    <select class="nice_Select2 ">
                                    <option value="1">Last Year</option>
                                    <option value="1">this Year</option>
                                </select>
                                </div>
                            </div>
                            <div id="bar_active"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 ">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">% of Income Budget</h3>
                                </div>
                            </div>
                            <div id="radial_2"></div>
                            <div class="radial_footer">
                                <div class="radial_footer_inner d-flex justify-content-between">
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                                        <p>-$18,570</p>
                                    </div>
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                                        <p>$31,430</p>
                                    </div>
                                </div>
                                <div class="radial_bottom">
                                    <p><a href="#">View Full Report</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="white_box min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">% of Expenses Budget</h3>
                                </div>
                            </div>
                            <div id="radial_1"></div>
                            <div class="radial_footer">
                                <div class="radial_footer_inner d-flex justify-content-between">
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                                        <p>-$18,570</p>
                                    </div>
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                                        <p>$31,430</p>
                                    </div>
                                </div>
                                <div class="radial_bottom">
                                    <p><a href="#">View Full Report</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">EBIT (Earnings Before Interest & Tax)</h3>
                                </div>
                            </div>
                            <canvas height="200" id="visit-sale-chart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="white_box mb_30 min_430">
                            <div class="box_header  box_header_block align-items- ">
                                <div class="main-title">
                                    <h3 class="mb-0">Cost of goods / Services</h3>
                                </div>
                                <div class="title_info">
                                    <p>1 Jan 2020 to 31 Dec 2020 <br>
                                        <div class="legend_style text-right">
                                            <li> <span style="background-color: #A4A1FB;"></span> Services</li>
                                            <li class="inactive"> <span style="background-color: #A4A1FB;"></span> Avarage</li>
                                        </div>
                                    </p>
                                </div>
                            </div>

                            <canvas height="200" id="visit-sale-chart2"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="white_box mb_30 min_400">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Disputed vs Overdue Invoices</h3>
                                </div>
                            </div>
                            <canvas height="220px" id="doughutChart"></canvas>
                            <div class="legend_style mt_10px ">
                                <li class="d-block"> <span style="background-color: #DF67C1;"></span> Disputed Invoices</li>
                                <li class="d-block"> <span style="background-color: #6AE0BD;"></span> Avarage</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="white_box mb_30 min_400 ">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">Disputed Invoices</h3>
                                </div>
                                <div class="legend_style mt-10">
                                    <li> <span></span> Disputed Invoices</li>
                                    <li class="inactive"> <span></span> Avarage</li>
                                </div>
                            </div>
                            <div class="title_btn">
                                <ul>
                                    <li><a class="active" href="#">All time</a></li>
                                    <li><a href="#">This year</a></li>
                                    <li><a href="#">This week</a></li>
                                    <li><a href="#">Today</a></li>
                                </ul>
                            </div>
                            <canvas height="120px" id="sales-chart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="white_box mb_30 min_400">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">Disputed vs Overdue Invoices</h3>
                                </div>
                            </div>
                            <canvas height="220px" id="doughutChart2"></canvas>
                            <div class="legend_style legend_style_grid mt_10px">
                                <li class="d-block"> <span style="background-color: #FF7B36;"></span> 30 Days</li>
                                <li class="d-block"> <span style="background-color: #E8205E;"></span> 60 Days</li>
                                <li class="d-block"> <span style="background-color: #3B76EF"></span> 90 Days</li>
                                <li class="d-block"> <span style="background-color:#00BFBF;"></span> 90+Days</li>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="white_box min_400">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">EBIT (Earnings Before Interest & Tax)</h3>
                                </div>
                                <div class="title_info">
                                    <p>1 Jan 2020 to 31 Dec 2020</p>
                                </div>
                            </div>
                            <div id="area_active"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_box mb_30 min_400">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Inventory Turnover</h3>
                                </div>

                            </div>
                            <div id="stackbar_active"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer part -->
        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by
                                <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content part end -->

    <!-- footer  -->
    <!-- jquery slim -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sidebar menu  -->
    <script src="js/metisMenu.js"></script>
    <!-- waypoints js -->
    <script src="vendors/count_up/jquery.waypoints.min.js"></script>
    <!-- waypoints js -->
    <script src="vendors/chartlist/Chart.min.js"></script>
    <!-- counterup js -->
    <script src="vendors/count_up/jquery.counterup.min.js"></script>
    <!-- swiper slider js -->
    <script src="vendors/swiper_slider/js/swiper.min.js"></script>
    <!-- nice select -->
    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <!-- owl carousel -->
    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <!-- gijgo css -->
    <script src="vendors/gijgo/gijgo.min.js"></script>
    <!-- responsive table -->
    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="js/chart.min.js"></script>
    <!-- progressbar js -->
    <script src="vendors/progressbar/jquery.barfiller.js"></script>
    <!-- tag input -->
    <script src="vendors/tagsinput/tagsinput.js"></script>
    <!-- text editor js -->
    <script src="vendors/text_editor/summernote-bs4.js"></script>

    <script src="vendors/apex_chart/apexcharts.js"></script>

    <!-- custom js -->
    <script src="js/custom.js"></script>

    <!-- active_chart js -->
    <script src="js/active_chart.js"></script>
    <script src="vendors/apex_chart/radial_active.js"></script>
    <script src="vendors/apex_chart/stackbar.js"></script>
    <script src="vendors/apex_chart/area_chart.js"></script>
    <!-- <script src="vendors/apex_chart/pie.js"></script> -->
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/chartjs/chartjs_active.js"></script>
    <!-- <?php ?> -->

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 18:55:55 GMT -->

</html>
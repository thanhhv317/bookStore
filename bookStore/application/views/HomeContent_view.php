<!DOCTYPE html>
<html>
<!-- Mirrored from shamsoft.net/flaty/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:23:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Book Store - Thành</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
    <!--page specific css styles-->
    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaty-responsive.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>img/favicon.html">
    <!-- ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
</head>

<body>
    <!-- BEGIN Theme Setting -->
    <div id="theme-setting">
        <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
        <ul>
            <li>
                <span>Skin</span>
                <ul class="colors" data-target="body" data-prefix="skin-">
                    <li class="active">
                        <a class="blue" href="#"></a>
                    </li>
                    <li>
                        <a class="red" href="#"></a>
                    </li>
                    <li>
                        <a class="green" href="#"></a>
                    </li>
                    <li>
                        <a class="orange" href="#"></a>
                    </li>
                    <li>
                        <a class="yellow" href="#"></a>
                    </li>
                    <li>
                        <a class="pink" href="#"></a>
                    </li>
                    <li>
                        <a class="magenta" href="#"></a>
                    </li>
                    <li>
                        <a class="gray" href="#"></a>
                    </li>
                    <li>
                        <a class="black" href="#"></a>
                    </li>
                </ul>
            </li>
            <li>
                <span>Navbar</span>
                <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                    <li class="active">
                        <a class="blue" href="#"></a>
                    </li>
                    <li>
                        <a class="red" href="#"></a>
                    </li>
                    <li>
                        <a class="green" href="#"></a>
                    </li>
                    <li>
                        <a class="orange" href="#"></a>
                    </li>
                    <li>
                        <a class="yellow" href="#"></a>
                    </li>
                    <li>
                        <a class="pink" href="#"></a>
                    </li>
                    <li>
                        <a class="magenta" href="#"></a>
                    </li>
                    <li>
                        <a class="gray" href="#"></a>
                    </li>
                    <li>
                        <a class="black" href="#"></a>
                    </li>
                </ul>
            </li>
            <li>
                <span>Sidebar</span>
                <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                    <li class="active">
                        <a class="blue" href="#"></a>
                    </li>
                    <li>
                        <a class="red" href="#"></a>
                    </li>
                    <li>
                        <a class="green" href="#"></a>
                    </li>
                    <li>
                        <a class="orange" href="#"></a>
                    </li>
                    <li>
                        <a class="yellow" href="#"></a>
                    </li>
                    <li>
                        <a class="pink" href="#"></a>
                    </li>
                    <li>
                        <a class="magenta" href="#"></a>
                    </li>
                    <li>
                        <a class="gray" href="#"></a>
                    </li>
                    <li>
                        <a class="black" href="#"></a>
                    </li>
                </ul>
            </li>
            <li>
                <span></span>
                <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
                <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
            </li>
        </ul>
    </div>
    <!-- END Theme Setting -->
    <!-- BEGIN Navbar -->
    <div id="navbar" class="navbar">
        <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
            <span class="fa fa-bars"></span>
        </button>
        <a class="navbar-brand" href="#">
            <small>
				<i class="fa fa-desktop"></i>
				Trang quản trị
			</small>
        </a>
        <!-- BEGIN Navbar Buttons -->
        <ul class="nav flaty-nav pull-right">
            <!-- BEGIN Button Tasks -->
            <li class="hidden-xs">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge badge-warning">4</span>
                </a>
                <!-- BEGIN Tasks Dropdown -->
                <ul class="dropdown-navbar dropdown-menu">
                    <li class="nav-header">
                        <i class="fa fa-check"></i> 4 Tasks to complete
                    </li>
                    <li>
                        <a href="#">
                            <div class="clearfix">
                                <span class="pull-left">Software Update</span>
                                <span class="pull-right">75%</span>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:75%" class="progress-bar progress-bar-warning"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="clearfix">
                                <span class="pull-left">Transfer To New Server</span>
                                <span class="pull-right">45%</span>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:45%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="clearfix">
                                <span class="pull-left">Bug Fixes</span>
                                <span class="pull-right">20%</span>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:20%" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="clearfix">
                                <span class="pull-left">Writing Documentation</span>
                                <span class="pull-right">85%</span>
                            </div>
                            <div class="progress progress-mini progress-striped active">
                                <div style="width:85%" class="progress-bar progress-bar-success"></div>
                            </div>
                        </a>
                    </li>
                    <li class="more">
                        <a href="#">See tasks with details</a>
                    </li>
                </ul>
                <!-- END Tasks Dropdown -->
            </li>
            <!-- END Button Tasks -->
            <!-- BEGIN Button Notifications -->
            <li class="hidden-xs">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-important">5</span>
                </a>
                <!-- BEGIN Notifications Dropdown -->
                <ul class="dropdown-navbar dropdown-menu">
                    <li class="nav-header">
                        <i class="fa fa-warning"></i> 5 Notifications
                    </li>
                    <li class="notify">
                        <a href="#">
                            <i class="fa fa-comment orange"></i>
                            <p>New Comments</p>
                            <span class="badge badge-warning">4</span>
                        </a>
                    </li>
                    <li class="notify">
                        <a href="#">
                            <i class="fa fa-twitter blue"></i>
                            <p>New Twitter followers</p>
                            <span class="badge badge-info">7</span>
                        </a>
                    </li>
                    <li class="notify">
                        <a href="#">
                            <img src="<?php echo base_url() ?>img/demo/avatar/avatar2.jpg" alt="Alex" />
                            <p>David would like to become moderator.</p>
                        </a>
                    </li>
                    <li class="notify">
                        <a href="#">
                            <i class="fa fa-bug pink"></i>
                            <p>New bug in program!</p>
                        </a>
                    </li>
                    <li class="notify">
                        <a href="#">
                            <i class="fa fa-shopping-cart green"></i>
                            <p>You have some new orders</p>
                            <span class="badge badge-success">+10</span>
                        </a>
                    </li>
                    <li class="more">
                        <a href="#">See all notifications</a>
                    </li>
                </ul>
                <!-- END Notifications Dropdown -->
            </li>
            <!-- END Button Notifications -->
            <!-- BEGIN Button Messages -->
            <li class="hidden-xs">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-success">3</span>
                </a>
                <!-- BEGIN Messages Dropdown -->
                <ul class="dropdown-navbar dropdown-menu">
                    <li class="nav-header">
                        <i class="fa fa-comments"></i> 3 Messages
                    </li>
                    <li class="msg">
                        <a href="#">
                            <img src="<?php echo base_url() ?>img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                            <div>
                                <span class="msg-title">Sarah</span>
                                <span class="msg-time"><i class="fa fa-clock-o"></i><span>a moment ago</span>
                                </span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </a>
                    </li>
                    <li class="msg">
                        <a href="#">
                            <img src="<?php echo base_url() ?>img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                            <div>
                                <span class="msg-title">Emma</span>
                                <span class="msg-time"><i class="fa fa-clock-o"></i><span>2 Days ago</span>
                                </span>
                            </div>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                        </a>
                    </li>
                    <li class="msg">
                        <a href="#">
                            <img src="<?php echo base_url() ?>img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                            <div>
                                <span class="msg-title">John</span>
                                <span class="msg-time"><i class="fa fa-clock-o"></i><span>8:24 PM</span>
                                </span>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in ...</p>
                        </a>
                    </li>
                    <li class="more">
                        <a href="#">See all messages</a>
                    </li>
                </ul>
                <!-- END Notifications Dropdown -->
            </li>
            <!-- END Button Messages -->
            <!-- BEGIN Button User -->
            <li class="user-profile">
                <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                    <img class="nav-user-photo" src="<?php echo base_url() ?>img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
                    <span class="hhh" id="user_info">Penny</span>
                    <i class="fa fa-caret-down"></i>
                </a>
                <!-- BEGIN User Dropdown -->
                <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                    <li class="nav-header">
                        <i class="fa fa-clock-o"></i> Logined From 20:45
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cog"></i> Account Settings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i> Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-question"></i> Help
                        </a>
                    </li>
                    <li class="divider visible-xs"></li>
                    <li class="visible-xs">
                        <a href="#">
                            <i class="fa fa-tasks"></i> Tasks
                            <span class="badge badge-warning">4</span>
                        </a>
                    </li>
                    <li class="visible-xs">
                        <a href="#">
                            <i class="fa fa-bell"></i> Notifications
                            <span class="badge badge-important">8</span>
                        </a>
                    </li>
                    <li class="visible-xs">
                        <a href="#">
                            <i class="fa fa-envelope"></i> Messages
                            <span class="badge badge-success">5</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-off"></i> Logout
                        </a>
                    </li>
                </ul>
                <!-- BEGIN User Dropdown -->
            </li>
            <!-- END Button User -->
        </ul>
        <!-- END Navbar Buttons -->
    </div>
    <!-- END Navbar -->
    <!-- BEGIN Container -->
    <div class="container" id="main-container">
        <!-- BEGIN Sidebar -->
        <div id="sidebar" class="navbar-collapse collapse">
            <!-- BEGIN Navlist -->
            <ul class="nav nav-list">
                <!-- BEGIN Search Form -->
                <li>
                    <!-- <form target="#" method="GET" class="search-form"> -->
                        <span class="search-pan">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<input type="text" name="search" placeholder="Search ..." autocomplete="off" />
						</span>
                    <!-- </form> -->
                </li>
                <!-- END Search Form -->
                
                <li>
                    <a href="<?php echo base_url(); ?>Home">
                        <i class="fa fa-home"></i>
                        <span>Trang bán sách</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-book"></i>
                        <span>Quản lý sách</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>
                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li><a href="#" class="loadBook">Sách</a></li>
                        <li><a href="#" class="loadKindBook">Thể loại</a></li>
                        <li><a href="#" class="loadPublisher">Nhà xuất bản</a></li>
                        <li><a href="#" class="loadAuthor">Tác giả</a></li>
                    </ul>
                    <!-- END Submenu -->
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        <span>Quản lý nhân sự</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>
                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li><a href="#" class="loadEmployee">Nhân viên</a></li>
                        <li><a href="#" class="loadCustomer">Khách hàng</a></li>
                    </ul>
                    <!-- END Submenu -->
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-list"></i>
                        <span>Trang front-end</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>
                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li><a href="#" class="topBanner">Top banner</a></li>
                        
                    </ul>
                    <!-- END Submenu -->
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-clipboard"></i>
                        <span>Thống kê</span>
                        <b class="arrow fa fa-angle-right"></b>
                    </a>
                    <!-- BEGIN Submenu -->
                    <ul class="submenu">
                        <li><a href="#">Sách</a></li>
                        <li><a href="#">Thu nhập</a></li>
                        <li><a href="#">Hóa đơn đã thanh toán</a></li>
                        <li><a href="#">Hóa đơn chưa thanh toán</a></li>
                    </ul>
                    <!-- END Submenu -->
                </li>
                
            </ul>
            <!-- END Navlist -->
            <!-- BEGIN Sidebar Collapse Button -->
            <div id="sidebar-collapse" class="visible-lg">
                <i class="fa fa-angle-double-left"></i>
            </div>
            <!-- END Sidebar Collapse Button -->
        </div>
        <!-- END Sidebar -->
        
        <!-- BEGIN Content -->
        <div id="main-content">
            <!-- BEGIN Page Title -->
            <div class="page-title">
                <div>
                    <h1><i class="fa fa-file-o"></i> eBook</h1>
                    <h4>Sách mở ra chân trời kiến thức</h4>
                </div>
            </div>
            <!-- END Page Title -->
            <!-- BEGIN Breadcrumb -->
            <div id="breadcrumbs">
                <ul class="breadcrumb">
                    <li class="active"><i class="fa fa-home"></i> Admin</li>
                </ul>
            </div>
            <!-- END Breadcrumb -->
            <!-- BEGIN Tiles -->
            
    <!-- BEGIN Main Content -->
    <?php include 'popup_view.php'; ?>

    <div class="table-include">
    
        
    </div>
    
            
    <!-- END Container -->
    <!--basic scripts-->
    <script>
        $(".loadBook").click(function(event) {
            $.ajax({
                url: 'LoadListBook',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
        $(".loadKindBook").click(function(event) {
            $.ajax({
                url: 'LoadKindOfBook',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
        $(".loadPublisher").click(function(event) {
            $.ajax({
                url: 'loadPublisher',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
        $(".loadAuthor").click(function(event) {
            $.ajax({
                url: 'loadAuthor',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
        // page front-end
        $(".topBanner").click(function(event) {
            $.ajax({
                url: '../Page/loadTopBanner',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
        $(".loadCustomer").click(function(event) {
            $.ajax({
                url: '../Customer/loadData',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
         $(".loadEmployee").click(function(event) {
            $.ajax({
                url: '../Employee/loadData',
                success: function(data) {
                    $('.table-include').html(data);
                }
            });  
        });
       
        
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/jquery/jquery-2.1.1.min.js"><\/script>')
    </script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jquery-cookie/jquery.cookie.js"></script>
    <!--page specific plugin scripts-->
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url() ?>assets/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/sparkline/jquery.sparkline.min.js"></script>
    <!--flaty scripts-->
    <script src="<?php echo base_url() ?>js/flaty.js"></script>
    <script src="<?php echo base_url() ?>js/flaty-demo-codes.js"></script>
</body>
<!-- Mirrored from shamsoft.net/flaty/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:24:12 GMT -->

</html>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EBook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<?php include 'header.php'; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo base_url(); ?>Home">EBook</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="<?php echo base_url(); ?>Home">Trang chủ</a></li>
                            <li><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url(); ?>Home/blog">Blog</a>
                                
                            </li>
                            <li  class="active"><a href="<?php echo base_url(); ?>Home/about">About</a></li>
                            <li ><a href="<?php echo base_url(); ?>Home/contact">Liên hệ</a></li>
                            <?php 
                                if(isset($user)){
                                    $html = '<li class="has-dropdown">
                                        <a href="'.base_url().'Home/user">Tài khoản</a>
                                        <ul class="dropdown">
                                        <li><a href="'.base_url().'Home/user">Xem thông tin</a></li>
                                        <li><a href="'.base_url().'Home/logout">Đăng xuất</a></li>
                                        </ul>
                                        </li>';
                                    echo $html;
                                    
                                }
                                else{
                                    echo '<li><a href="'.base_url().'Home/login">Đăng nhập</a></li>';
                                }
                            ?>
                            <li><a href="<?php echo base_url() ?>Home/cart"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                            </li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(https://hostpapa.blog/blog/wp-content/uploads/2013/01/Blog-Promotion.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<h1></h1>
										<h2></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-about">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
					<h3>Lịch sử phát triển</h3>
					<p>Được thành lập vào những năm đầu của thế kỉ 21, có bề dày lịch sử phát triển lâu bền.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center animate-box">
					<p><img src="https://stmed.net/sites/default/files/ho-chi-minh-city-wallpapers-28633-4519388.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
				</div>
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<div class="about-desc">
						<h3>Hi! I'm Thanh</h3>
						<p>Các doanh nghiệp được sinh ra từ những ý tưởng, tuy nhiên không phải tất cả những ý tưởng đều tuyệt vời. Nhưng bạn cần phải có một điểm khác biệt để tồn tại, đó là những gì bạn cung cấp là đặc biệt, và thêm một cái gì đó mới mẻ vào thị trường. Đó là sứ mệnh của bạn! Và sứ mệnh đó, lợi thế đó, đã được chúng tôi đúc kết xây dựng bấy lâu nay thành 1 cộng đồng mà chúng tôi gọi nó là EBook!</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/thanhfuzu18"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>Thông tin về EBook</h4>
					<p>Với sứ mạng mang đến cho bạn đọc cái nhìn tích cực về cuộc sống, chúng tôi cam kết những sản phẩm luôn luôn đáp ứng đúng với chất lượng.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Chủ đề nổi bật</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Mua sách online</a></li>
						<li><a href="#">15 cuốn sách nên đọc khi bạn còn trẻ</a></li>
						<li><a href="#">Blog chia sẽ kinh nghiệm cuộc sống</a></li>
							
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo base_url(); ?>Home">Trang chủ</a></li>
						<li><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
						<li><a href="<?php echo base_url(); ?>Home/blog">Blog</a></li>
						<li><a href="<?php echo base_url(); ?>Home/about">Thông tin</a></li>
						<li><a href="<?php echo base_url(); ?>Home/contact">Liên hệ</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Thông tin liên hệ</h4>
					<ul class="fh5co-footer-links">
						<li>100Q Hùng vương <br> Phường 9 Quận 5 TP Hồ Chí Minh</li>
						<li><a href="tel://1234567920">+ 0332 072 363</a></li>
						<li><a href="mailto:info@yoursite.com">thanhhoang317@gmail.com</a></li>
						
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2019 Created by Thanh Hoang.</small> 
						
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/thanhfuzu18"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<?php include 'footer.php'; ?>
	</body>
</html>


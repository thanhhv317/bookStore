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
						<div id="fh5co-logo"><a href="index.html">Neat</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="<?php echo base_url(); ?>Home">Trang chủ</a></li>
                            <li><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
                            <li class="has-dropdown active">
                                <a href="<?php echo base_url(); ?>Home/blog">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Home/about">About</a></li>
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
			   	<li style="background-image: url(https://connectnigeria.com/articles/wp-content/uploads/2018/07/Starting-a-blog.png);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                <div class="slider-text-inner">
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

<div id="fh5co-blog">
	<div class="row">
	<div class="container-wrap">
		
			<?php 
				$blogName = $name.'_view.php';
				
				include $blogName;
			?>
	
	</div>
</div>
</div>

		<div id="fh5co-blog">
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php echo base_url() ?>Home/blog/muoi-lam-cuon-sach-nen-doc" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 15th 2018</span>
							<h3><a href="<?php echo base_url() ?>Home/blog/muoi-lam-cuon-sach-nen-doc">15 cuốn sách nên đọc khi bạn còn trẻ</a></h3>
							<p>Mỗi người có một thế mạnh riêng, và nếu bạn biết phát huy thế mạnh của mình thì bạn sẽ thành công.</p>
							<ul class="stuff">
								<li><i class="icon-heart3"></i>359</li>
								<li><i class="icon-eye2"></i>1,508</li>
								<li><a href="<?php echo base_url() ?>Home/blog/muoi-lam-cuon-sach-nen-doc">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php echo base_url() ?>Home/blog/tieu-thuyet-bo-gia" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 25th 2018</span>
							<h3><a href="<?php echo base_url() ?>Home/blog/tieu-thuyet-bo-gia">Những triết lý kinh doanh không thể bỏ qua học từ các nhân vật trong tiểu thuyết Bố già</a></h3>
							<p>“Tôi sắn sàng bỏ ra 4 triệu để có thể đi tiểu mà không thấy đau.” — Hyman Roth, Quyển II.</p>
							<ul class="stuff">
								<li><i class="icon-heart3"></i>249</li>
								<li><i class="icon-eye2"></i>1,308</li>
								<li><a href="<?php echo base_url() ?>Home/blog/tieu-thuyet-bo-gia">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
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

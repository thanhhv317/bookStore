<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ebook</title>
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
                            <li class="active"><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url(); ?>Home/blog">Blog</a>
                                
                            </li>
                            <li><a href="<?php echo base_url(); ?>Home/about">About</a></li>
                            <li><a href="<?php echo base_url(); ?>Home/contact">Liên hệ</a></li>
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
			   	<li style="background-image: url(https://png.pngtree.com/thumb_back/fw800/back_pic/03/95/59/1957ed207f75613.jpg);">
			   		<div class="overlay-gradient"></div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                            <div class="slider-text-inner">
                                <h1>Nhà sách eBook</h1>
                                    <h2>Bay cao cùng những trang sách</h2>
                                    
                    		</div>
                    	</div>
                    </div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>
	</div>

	<div class="container-wrap">
	    <nav class="navbar navbar-default">
		    <div class="container-fluid">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">eBook</a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav">
		                <!-- <li><a href="#" class="author">Tác giả <span class="sr-only">(current)</span></a>
		                </li>
		                <li><a href="#">Nhà xuất bản</a>
		                </li> -->
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể loại <span class="caret"></span></a>
		                    <ul class="dropdown-menu">
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K001">Truyện tranh</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K007">Văn học</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K005">Sách giáo khoa</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K003">Tiểu thuyết</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K004">Văn hóa- xã hội</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K006">Truyện học đường</a>
		                        </li>
		                        <li><a href="<?php echo base_url() ?>Home/getListBookByKind/K002">Trinh thám</a>
		                        </li>
		                    </ul>
		                </li>
		            </ul>
		            <form class="navbar-form navbar-right">
		                <div class="form-group">
		                    <input type="text" class="form-control nameBook" placeholder="Search by Name">
		                </div>
		                <button type="button" class="btn btn-primary searchBook">Tìm kiếm</button>
		            </form>
		            
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container-fluid -->
		</nav>
	</div>
	<h3 class="text-center"><?php if(isset($book[0]['NameTL']))echo $book[0]['NameTL']; ?></h3>
	
	<div class="container-wrap">		
		<div id="fh5co-work">
			<div class="row contentBook">
				<?php include_once 'Notification_view.php'; ?>				

				<?php foreach ($book as $key => $value): ?>
					<div class="col-md-4 text-center animate-box">
	                    <div class="work"  style="background-image: url(<?php echo $value['Image'] ?>);">
	                        <div class="desc">
	                            <h3><a class="btn btn-primary add-cart" onclick="getID('<?php echo $value['ID']; ?>','<?php echo $value['Name'] ?>','<?php echo $value['Price'] ?>','<?php echo $value['Image'] ?>','<?php echo $value['NameTG'] ?>')" >Thêm vào giỏ hàng</a></h3>
	                            <span><a class="btn btn-outline-dark view-detail" data-toggle="modal" data-target="#Notification" onclick="getID('<?php echo $value['ID']; ?>')" >Xem chi tiết</a></span>
	                        </div>
	                    </div>
	                    <p><?php echo $value['Name']; ?></p>
	                </div>
				<?php endforeach ?>
				
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

<script>
	var id 	   ="";
	var name   ="";
	var price  ="";
	var imgage ="";
	var author ="";
    function getID(idReceive,iname,iprice,img,iauthor){
        id 		= idReceive;
        name 	= iname;
        price 	= iprice;
        image 	= img;
        author 	= iauthor;
    }

	$('.view-detail').click(function(event) {
		$.ajax({
            url: '../detailBook/'+id,
            success: function(data) {
                $('.modal-body').html(data);
            }
        });
		
	});
	$('.add-cart').click(function(event) {
		var item = {id:id, name:name, quantity:1, price:price, image:image, author:author};
		item = JSON.stringify(item);
		localStorage.setItem('ca-'+id,item);
		swal("Thông báo!", "Bạn đã thêm vào giỏ hàng thành công !", "success");
	});
	$('.searchBook').click(function(event) {
		nameBook = $('.nameBook').val();
		$.ajax({
			url: '../searchBook/'+nameBook,
			success: function(data){
				$('.contentBook').html(data);
			}
		});

	});


</script>
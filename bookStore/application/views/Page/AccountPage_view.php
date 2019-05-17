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

	<!-- jquery upload -->
    
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
                            <li><a href="<?php echo base_url(); ?>Home/about">About</a></li>
                            <li ><a href="<?php echo base_url(); ?>Home/contact">Liên hệ</a></li>
                            <?php 
                                if(isset($user)){
                                    $html = '<li class="has-dropdown active">
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
	<div id="fh5co-contact">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-font"></i> Tài khoản của bạn</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
					
				
                    <div class="row">
                        <div class="col-md-12">

                            <div class="tabbable">
                                <ul id="myTab1" class="nav nav-tabs">
                                    <li class="active"><a href="#home1" data-toggle="tab"><i class="fa fa-home"></i> Thông tin</a>
                                    </li>
                                    <li><a href="#profile1" data-toggle="tab"><i class="fa fa-user"></i> Chỉnh sửa</a>
                                    </li>

                                </ul>

                                <div id="myTabContent1" class="tab-content">
                                    <div class="tab-pane fade in active" id="home1">
                                        <div class="row">
                                            <br>
                                            <div class="col-md-3 col-md-push-1 animate-box">
                                                <img class="img-responsive img-thumbnail" src="<?php echo $user['Image'] ?>" alt="">
                                            </div>
                                            <div class="col-md-7 col-md-push-1 animate-box">
                                                <div class="row">
                                                    <ul class="contact-info">
                                                        <li><i class="icon-info"></i><?php echo $user['Name']; ?></li>
                                                        <li><i class="icon-phone3"></i><?php echo $user['Phone'] ?></li>
                                                        <li><i class="icon-location"></i><?php echo $user['Address'] ?>
                                                        </li>
                                                        <li><i class="icon-mail"></i><?php echo $user['Mail'] ?>
                                                        </li>
                                                        <li><i class="icon-calendar"></i><?php echo $user['Birthday'] ?>
                                                        </li>
                                                    </ul>
                                                    <button class="btn btn-primary btn-modify">xem các hàng hóa đã mua</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile1">
										
                                        <div class="row">
										<div class="form-group">
					                      <div class="col-sm-9 col-lg-10 controls">
					                          <div class="fileupload fileupload-new" data-provides="fileupload">
					                              <div class="fileupload-new img-thumbnail picture" style="width: 200px; height: 150px;">
					                                  <img src="<?php echo $user['Image']; ?>" alt="" style="width: 200px; height: 150px;"/>
					                              </div>
					                              <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
					                                <input type="text" hidden="" value="<?php echo $user['Image']; ?>" class="imageAvatar_old" >
					                                
					                              </div>
					                              <div>
					                                  <input type="file[]" class="imageAvatar" />
					                                  <input type="file" class="imageAvatar" />
					                              </div>
					                          </div>
					                      </div>
					                    </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tên:</label>
                                                    <input type="text" class="form-control Name" value="<?php echo $user['Name'] ?>" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                    <input type="text" class="form-control Birthday" value="<?php echo $user['Birthday'] ?>" placeholder="Birthday">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Số điện thoại:</label>
                                                    <input type="text" value="<?php echo $user['Phone'] ?>" class="form-control Phone" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" class="form-control Mail" placeholder="Email" value="<?php echo $user['Mail'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Địa chỉ</label>
                                                    <input type="text" value="<?php echo $user['Address'] ?>" class="form-control Address" placeholder="Address">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="button" value="Cập nhật" class="btn btn-primary btn-modify update-data">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
	</div>
	</div>






	<!-- END container-wrap -->

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
	$( document ).ready(function() {

		// upload file using jquery
		var imageName=$('.imageAvatar_old').val();
			$('.imageAvatar').fileupload({
			url: 'uploadFile',
			dataType: 'json',
			done: function (e, data) {
			    $.each(data.result.files, function (index, file) {
			       imageName = file.url;
			       pic ='<img src="'+ imageName +'" alt="" style="width: 200px; height: 150px;" />';
			       $('.picture').html(pic);
			    });
			}
		});


    	$('.update-data').click(function(event) {
    		$.ajax({
    			url: 'updateUser',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				Name: $('.Name').val(),
    				Birthday: $('.Birthday').val(),
    				Phone: $('.Phone').val(),
    				Mail: $('.Mail').val(),
    				Address: $('.Address').val(),
    				Image: imageName
    			},
    			success: function(data){
    				if(data ==1){
    					 swal("Chúc mừng!", "Bạn đã cập nhật thành công dữ liệu !", "success");
    				}
    				else{
    					swal("Thất bại!", "Dữ liệu không hợp lệ, Vui lòng kiểm tra lại dữ liệu !", "error");
    				}
    			}
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    			swal("Thất bại!", "Dữ liệu không hợp lệ, Vui lòng kiểm tra lại dữ liệu !", "error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    		
    	});
	});
	
</script>
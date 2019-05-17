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
                            <li><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url(); ?>Home/blog">Blog</a>
                                
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
                            <li class="active"><a href="<?php echo base_url() ?>Home/cart"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                            </li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
<?php include_once 'Notification_view.php'; ?>
	<div class="container-wrap">
		<hr>
		<div class="col-sm-12" style="background-color:powderblue;height: 50px"></div>
		<hr>
	</div>
	<div class="container-wrap">
		<div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            	<h1>TIẾN HÀNG ĐẶT HÀNG</h1>
            </div>
        </div>
      	<hr>
      	<?php
      		$id ="anonymous";  // =anonymous new customer , ='1002...' customer logined
      		$name ="";
      		$phone ="";
      		$mail ="";
      		$address ="";
	      	if(isset($user)){
	      		$id = $user['ID']; 
	      		$name = $user['Name'];
	      		$phone = $user['Phone'];
	      		$mail = $user['Mail'];
	      		$address = $user['Address'];
	      	}
      	?>
        <div>
        	<div class="row">
	            
		     	<div class="col-md-12">
		     		<div class="col-md-6">
		     			<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="">Tên khách hàng:</label>
								<input type="text" class="form-control Name" value="<?php echo $name; ?>" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="">Số điện thoại:</label>
								<input type="text" class="form-control Phone" value="<?php echo $phone; ?>" placeholder="Phone">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="">Email:</label>
								<input type="text" class="form-control Mail" value="<?php echo $mail; ?>" placeholder="Email">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="">Địa chỉ:</label>
								<input type="text" value="<?php echo $address; ?>" class="form-control Address">
							</div>
						</div>
		     		</div>
		     	</div>
	     		<div class="col-md-6">
	     			<div class="row cart">
	     				<!-- book -->
	     				<!-- <div class="col-md-3">
		     				<img src="http://localhost:8080/php_mvc/bookStore/files/toi_thay_hoa_vang.jpg" style="max-height: 100px;max-width: 100px;" alt="">
		     			</div>
		     			<br>
		     			<label>Tôi thấy hoa vàng bên cỏ xanh</label>
		     			<p>Giá : 40000 đ</p>
		     			<p>Số lượng : x2</p>
		     			<hr> -->
		     			<!-- end book -->
	     			</div>
	     			<div class="form-group row">
	     				<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Số lượng</th>
									<th scope="col">Thành tiền</th>
								</tr>
							</thead>
								<tbody>
									<tr>
									<th scope="row" class="total-quantity">0</th>
									<td style="color: red" ><label class="total-money">0 </label> Đ</td>
								</tr>
							</tbody>
						</table>
	     			</div>

	     		</div>

     			</div>
		    </div><hr>
		    <div class="col-md-2"></div>
		    <div class="col-md-8">
		    	

		    	<div id="payment">
                    <ul class="payment_methods methods">
                        <li class="payment_method_bacs">
                            <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                            <label for="payment_method_bacs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chuyển tiền trực tiếp qua ngân hàng </font></font></label>
                            <div class="payment_box payment_method_bacs">
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. </font><font style="vertical-align: inherit;">Vui lòng sử dụng ID đặt hàng của bạn làm tài liệu tham khảo thanh toán. </font><font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được gửi cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font></font></p>
                            </div>
                        </li>
                        <li class="payment_method_cheque">
                            <input type="radio" data-order_button_text="" value="home" name="payment_method" class="input-radio" checked="" id="payment_method_cheque">
                            <label for="payment_method_cheque"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thanh toán tiền mặt khi nhận hàng </font></font></label>
                            <div style="display:none;" class="payment_box payment_method_cheque">
                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                        </li>
                        <li class="payment_method_paypal">
                            <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                            <label for="payment_method_paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PayPal </font></font><img alt="Dấu chấp nhận PayPal" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="PayPal là gì?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">là gì?</font></font></a>
                            </label>
                            <div style="display:none;" class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="form-row place-order">
					<div class="col-md-4"></div>
                    <div class="form-group">
								<input type="submit" style="width: 200px" value="Đặt hàng" class="btn btn-primary btn-modify order-book">
							</div>
                    </div>


                </div>
		    </div>
        </div>

		
        
	

	<!-- footer -->
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
	
	function showCart(){
		for (var i = 0; i < localStorage.length; i++) {
			var key = localStorage.key(i);
			
			if(key.charAt(0)=='c' && key.charAt(1)=='a'){
				//cart is not null
				var product = $.parseJSON(localStorage.getItem(key));
				var item = '<div class="col-md-3">';
				item += '<img src="'+product.image+'" style="max-height: 100px;max-width: 100px;" alt="">';
				item += '</div><br>';
				item += '<label>'+product.name+'</label>';
				item += '<p>Giá : '+product.price+' đ</p>';
				item += '<p>Số lượng : x'+product.quantity+'</p>';
				item += '<hr>';
				$('.cart').append(item);
			}
		}
	}

	var totalQuantity = 0;
	var totalMoney = 0;
	var book = [];
	function getInfo(){
		for (var i = 0; i < localStorage.length; i++) {
			var key = localStorage.key(i);
			
			if(key.charAt(0)=='c' && key.charAt(1)=='a'){
				// it's the book order
				
				var product = $.parseJSON(localStorage.getItem(key));
				totalQuantity += product.quantity;
				totalMoney += product.quantity*product.price;
			}
		}
		$('.total-quantity').html(totalQuantity);
		$('.total-money').html(totalMoney);
	}

	function sendDataToOrder(){
		for (var i = 0; i < localStorage.length; i++) {
			var key = localStorage.key(i);
			
			if(key.charAt(0)=='c' && key.charAt(1)=='a'){
				// it's the book order
				book.push(localStorage.getItem(key));
				var product = $.parseJSON(localStorage.getItem(key));
				totalQuantity += product.quantity;
				totalMoney += product.quantity*product.price;
			}
		}
	}

	$(document).ready(function($) {
    	showCart();
    	getInfo();
    });

	var id ="<?php echo $id; ?>";

    $('.order-book').click(function(event) {
    	sendDataToOrder();
    	$.ajax({
    		url: '../Home/orderBook',
    		type: 'POST',
    		dataType: 'json',
    		data: {
    			id:id ,
    			name: $('.Name').val(),
    			mail: $('.Mail').val(),
    			phone: $('.Phone').val(),
    			address: $('.Address').val(),
    			data : book
    		},
    		success: function(data){
    			if(data==1){
    				swal("Thành công!", "Đội ngũ nhân viên đang bàn giao hàng hóa để gửi cho bạn !", "success");
    				localStorage.clear();
    				setTimeout(location.reload.bind(location), 3000);
    			}
    			else if(data==-1){
    				swal("Lỗi!", "Vui lòng nhập thông tin của bạn!", "warning");
    			}
    			else {
    				swal("Lỗi phát sinh!", "Hiện tại trang web đang quá tải, mời bạn quay lại sau !", "error");
    			}
    		}
    	})
    	.done(function() {
    		console.log("success");
    	})
    	.fail(function() {
    		console.log("error");
    		swal("Lỗi phát sinh!", "Hiện tại trang web đang quá tải, mời bạn quay lại sau !", "error");
    	})
    	.always(function() {
    		console.log("complete");

    	});
    	
    });


</script>
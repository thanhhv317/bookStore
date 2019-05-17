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
            	<h1>Giỏ hàng của bạn</h1>
            </div>
        </div>
        <div >
	        	<div class="row">
		            <div class="col-md-12 animate-box">

		            	<div class="col-md-9 cart">
		            		<!-- book -->
		            		
		            	<!-- sum money -->
		            	</div>
		            	<div class="col-md-3 bill">
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
							<button class="btn btn-succes order" style="width: 100%">Đặt hàng</button>
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
	var totalQuantity =0;
	var totalMoney = 0;
	var idBook="";
	function showCart(){
		//var totalQuantity =0;
		//var totalMoney = 0;
		for (var i = 0; i < localStorage.length; i++) {
			var key = localStorage.key(i);
			
			if(key.charAt(0)=='c' && key.charAt(1)=='a'){
				//cart is not null
				var product = $.parseJSON(localStorage.getItem(key));
				
				totalQuantity += product.quantity;
				totalMoney += (product.quantity * product.price);

				var item = '<div class="row">';
				item += '<div class="col-md-3" >';
				item += '<img src="'+product.image+'" style="max-height: 166;max-width: 150px;" alt="">';
				item += '</div><div class="col-md-6">';
				item += '<h3>'+product.name+'</h2>';
				item += '<p><label>Giá: '+product.price+' VND</label></p>';
				item += '<p>Tác giả : '+product.author+'</p>';
				item += '<p><a href="#" style="text-decoration:none" class="view-detail" data-toggle="modal" data-target="#Notification" onclick ="getID('+"'"+product.id+"'"+')" >Xem chi tiết </a><i class ="glyphicon glyphicon-eye-open"> </i></p>';
				item += '<a href="#" style="text-decoration:none" class="delete-book" onclick ="getID('+"'"+product.id+"'"+')">Xóa sản phẩm </a><i class ="glyphicon glyphicon-trash"></i>';
				item += '</div>';
				item += '<div class="col-md-3">';
				item += '<br><span>Số lượng:</span><br><br>';
				item += '<div class="quantity-block" style="width: 110px"><div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" onclick ="sub('+"'"+product.id+"'"+')" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="tel" readonly class="form-control quantity-r2 quantity product-'+product.id+'" value="'+product.quantity+'" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" onclick ="plus('+"'"+product.id+"'"+')" type="button">+</button></span></div>';
				item += '</div></div></div><hr>';
				
				$('.cart').append(item);
				
			}
		}
		$('.total-quantity').html(totalQuantity);
		$('.total-money').html(totalMoney);

	}

	function plus(id){
		var tmp = $.parseJSON(localStorage.getItem('ca-'+id));
		var quantity = tmp.quantity + 1;
		var item = {
			id:tmp.id,
			name:tmp.name, 
			quantity:quantity, 
			price: tmp.price, 
			image: tmp.image, 
			author: tmp.author
		};

		item = JSON.stringify(item);

		localStorage.setItem('ca-'+id,item);

		//set count for quantity
		$('.product-'+tmp.id).attr('value', quantity);

		totalQuantity++;
		$('.total-quantity').html(totalQuantity);

		totalMoney += parseInt(tmp.price);
		$('.total-money').html(totalMoney);

	}

	function sub(id){
		var tmp = $.parseJSON(localStorage.getItem('ca-'+id));
		var quantity = tmp.quantity;
		if(quantity>1){
			quantity--;
			totalQuantity--;
			totalMoney -= parseInt(tmp.price);
		}
		var item = {
			id:tmp.id,
			name:tmp.name, 
			quantity:quantity, 
			price: tmp.price, 
			image: tmp.image, 
			author: tmp.author
		};

		item = JSON.stringify(item);

		localStorage.setItem('ca-'+id,item);
		//set count for quantity
		$('.product-'+tmp.id).attr('value', quantity);


		$('.total-quantity').html(totalQuantity);
		$('.total-money').html(totalMoney);

	}

	function getID(id){
		idBook = id;
	}

    // showCart();

    $(document).ready(function($) {
    	showCart();
    	$('.view-detail').click(function(event) {
			$.ajax({
	             url: '../Home/detailBook/'+idBook,
	            success: function(data) {
	                $('.modal-body').html(data);
	            }
	        });

		});

		$('.delete-book').click(function(event) {
			localStorage.removeItem('ca-'+idBook);
			swal("Thông báo!", "Đã xóa thành công sản phẩm !", "success");
			setTimeout(location.reload.bind(location), 500);
		});

		$('.order').click(function(event) {
			if(totalMoney >0 && totalQuantity >0){
				window.location="<?php echo base_url(); ?>Home/checkout";
			}
			else{
				swal("Lỗi!", "Giỏ hàng bạn đang trống!", "warning");
			}
		});
    });





</script>
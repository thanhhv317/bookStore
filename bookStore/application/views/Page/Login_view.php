<!DOCTYPE html>
<html>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:26:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Đăng nhập</title>
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

<body class="login-page">

    <!-- BEGIN Main Content -->
    <div class="login-wrapper">
        <!-- BEGIN Login Form -->
        <form id="form-login">
            <h3>Đăng nhập vào hệ thống</h3>
            <hr/>
            <div class="form-group">
                <div class="controls">
                    <input type="text" placeholder="Username" class="form-control username" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="password" placeholder="Password" class="form-control password" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" value="remember" />Ghi nhớ
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <button type="button" class="btn btn-primary form-control login">Đăng nhập</button>
                </div>
            </div>
            <hr/>
            <p class="clearfix">
                <a href="#" class="goto-forgot pull-left">Quên mật khẩu</a>
                <a href="#" class="goto-register pull-right">Chưa có tài khản</a>
            </p>
        </form>
        <!-- END Login Form -->

        <!-- BEGIN Forgot Password Form -->
        <form id="form-forgot" action="http://shamsoft.net/flaty/index.html" method="get" style="display:none">
            <h3>QUÊN MẬT KHẨU</h3>
            <hr/>
            <div class="form-group">
                <div class="controls">
                    <input type="text" placeholder="Email" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary form-control">Cấp mật khẩu mới</button>
                </div>
            </div>
            <hr/>
            <p class="clearfix">
                <a href="#" class="goto-login pull-left">← Trở lại trang đăng nhập</a>
            </p>
        </form>
        <!-- END Forgot Password Form -->

        <!-- BEGIN Register Form -->
        <form id="form-register" action="http://shamsoft.net/flaty/index.html" method="get" style="display:none">
            <h3>Đăng ký</h3>
            <hr/>
            <div class="form-group">
                <div class="controls">
                    <input type="text" placeholder="Email" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="text" placeholder="Username" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="password" placeholder="Password" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="password" placeholder="Repeat Password" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" value="remember" /> Tôi chấp nhận <a href="#">thỏa thuận người dùng</a>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary form-control">Đăng ký</button>
                </div>
            </div>
            <hr/>
            <p class="clearfix">
                <a href="#" class="goto-login pull-left">← Trở lại trang đăng nhập</a>
            </p>
        </form>
        <!-- END Register Form -->
    </div>
    <!-- END Main Content -->

    <script>
    	
    	$('.login').click(function(event) {
    		$.ajax({
    			url: 'checkAccount',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				username:$('.username').val(),
    				password:$('.password').val(),
    			},
    			success: function(data){
    				if(data ==1){
    					check=1;
    					window.location.replace('<?php echo base_url() ?>Home');
    				}
    				else{
    					 swal("Đăng nhập không thành công!", "Sai tên tài khoản hoặc mật khẩu!", "error");
    				}
    			}
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    		
    	});
    	
    </script>


    <!--basic scripts-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/jquery/jquery-2.1.1.min.js"><\/script>')
    </script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function goToForm(form) {
            $('.login-wrapper > form:visible').fadeOut(500, function() {
                $('#form-' + form).fadeIn(500);
            });
        }
        $(function() {
            $('.goto-login').click(function() {
                goToForm('login');
            });
            $('.goto-forgot').click(function() {
                goToForm('forgot');
            });
            $('.goto-register').click(function() {
                goToForm('register');
            });
        });
    </script>
</body>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2015 07:26:32 GMT -->

</html>
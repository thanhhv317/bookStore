<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eBook &mdash; website bán sách</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FreeHTML5.co
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <?php include 'header.php'; ?>

    </head>
    <body>
        
    <div class="fh5co-loader"></div>

    <?php 
        $page = $result[0];
        $book = $result[1];
        $author = $result[2];
 
    ?>
    
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
                            <li class="active"><a href="<?php echo base_url(); ?>Home">Trang chủ</a></li>
                            <li><a href="<?php echo base_url(); ?>Home/work">Sản phẩm</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url(); ?>Home/blog">Blog</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul> -->
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
                <li style="background-image: url(<?php echo $page[0]['image']; ?>);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1><?php echo $page[0]['title']; ?></h1>
                                        <h2><?php echo $page[0]['description']; ?></h2>
                                        <p><a class="btn btn-primary btn-demo" href="<?php echo $page[0]['linkbtn']; ?>"></i> <?php echo $page[0]['textbtn']; ?></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?php echo $page[1]['image']; ?>);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1><?php echo $page[1]['title']; ?></h1>
                                        <h2><?php echo $page[1]['description']; ?></h2>
                                        <p><a class="btn btn-primary btn-demo" href="<?php echo $page[1]['linkbtn']; ?>"></i><?php echo $page[1]['textbtn']; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?php echo $page[2]['image']; ?>);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1><?php echo $page[2]['title']; ?></h1>
                                        <h2 style=""><?php echo $page[2]['description']; ?></h2>
                                        <p><a class="btn btn-primary btn-demo" href="<?php echo $page[2]['linkbtn']; ?>"></i> <?php echo $page[2]['textbtn']; ?></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?php echo $page[3]['image']; ?>);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1><?php echo $page[3]['title']; ?></h1>
                                        <h2><?php echo $page[3]['description']; ?></h2>
                                        <p><a class="btn btn-primary btn-demo" href="<?php echo $page[3]['linkbtn']; ?>"></i> <?php echo $page[3]['textbtn']; ?></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>       
                </ul>
            </div>
        </aside>
        <div id="fh5co-services">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-diamond"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Sản phẩm chất lượng</a></h3>
                            <p>Những đầu sách mà eBook cung cấp đều có chất lượng tốt nhất được nhập từ những nhà xuất bản hàng đầu Việt Nam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-lab2"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Đội ngũ nhân viên chuyên nghiệp</a></h3>
                            <p>Quá trình xử lý diễn ra nhanh chóng, đơn giản, an toàn,...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-settings"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Dịch vụ số 1</a></h3>
                            <p>Cam kết quá trình vận chuyển sản phẩm đến tay bạn diễn ra nhanh chóng và không phát sinh lỗi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-work" class="fh5co-light-grey">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Nổi bật</h2>
                    <p>Những cuốn sách của các tác giả nổi tiếng được bán chạy nhất trong thời gian qua.</p>
                </div>
            </div>
            <div class="row">
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
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <a href="Home/work" class="btn btn-success">Xem thêm sách ở mục sản phẩm</a>
                </div>
            </div>

        </div>

        <div id="fh5co-counter" class="fh5co-counters">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box">
                    <p>Chúng tôi có những con số thống kê đáng tự hào. Xuyên suốt quá trình hình thành - eBook đã nhận được sự ủng hộ mạnh mẽ của các bạn độc giả.</p>
                    </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Đầu sách chất lượng</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="6000" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Lượng truy cập</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="852" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Phản hồi tích cực</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="4370" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Hài lòng về eBook</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog" class="blog-flex">
            <div class="featured-blog" style="background-image: url(http://localhost:8080/php_mvc/bookStore/files/sach-toi-la-ai-va-neu-vay-thi-bao-nhieu.jpg);">
                <div class="desc-t">
                    <div class="desc-tc">
                        <span class="featured-head">Chuyên mục blog</span>
                        <h3><a href="<?php base_url() ?>Home/blog/muoi-lam-cuon-sach-nen-doc">Mười lăm cuốn sách nên đọc khi bạn còn trẻ</a></h3>
                        <span><a href="<?php base_url() ?>Home/blog/muoi-lam-cuon-sach-nen-doc" class="read-button">Xem chi tiết</a></span>
                    </div>
                </div>
            </div>
            <div class="blog-entry fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-12">
                        <h2>Top Tác giả</h2>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($author as $key => $value): ?>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url(<?php echo $value['Image'] ?>);"></span>
                            <div class="desc">
                                <h3>Tác giả :<?php echo $value['Name'] ?></h3>
                                <span class="cat">Chi tiết</span>
                            </div>
                        </a>
                    </div>    
                    <?php endforeach ?>
                    <!-- <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url(images/blog-1.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url(images/blog-3.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div> -->
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
    <?php include_once 'Notification_view.php'; ?>
    
    <?php include 'footer.php'; ?>

    </body>
</html>

<script>
    var id     ="";
    var name   ="";
    var price  ="";
    var imgage ="";
    var author ="";
    function getID(idReceive,iname,iprice,img,iauthor){
        id      = idReceive;
        name    = iname;
        price   = iprice;
        image   = img;
        author  = iauthor;
    }

    $('.view-detail').click(function(event) {
        $.ajax({
             url: '<?php echo base_url(); ?>Home/detailBook/'+id,
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
</script>
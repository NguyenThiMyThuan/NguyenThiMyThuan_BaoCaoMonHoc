<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mỹ Thuận Shop</title>
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>037 4162 620</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>mythuan@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img width="100px" src="{{asset('public/frontend/images/logo.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                                <li><a href="#"><i class="fa fa-star"></i>Yêu thích</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Đầm</a></li>
                                        <li><a href="product-details.html">Chân váy</a></li>
                                        <li><a href="checkout.html">Yếm</a></li>
                                        <li><a href="cart.html">Áo thun</a></li>
                                        <li><a href="login.html">Áo khoác</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Khuyến mãi<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Sale 25%</a></li>
                                        <li><a href="blog-single.html">Sale 30%</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">Liên hệ</a></li>
                                <li><a href="contact-us.html">Tin Tức</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <!--slider-->
    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Mỹ Thuận</span>-SHOP</h1>
									<h2>Chào mừng bạn đến Shop Thời Trang 2023</h2>
							
									<button type="button" class="btn btn-default get">Xem thêm</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/slider1.webp')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>Mỹ Thuận</span>-SHOP</h1>
									<h2>Chào mừng bạn đến Shop Thời Trang 2023</h2>
									<button type="button" class="btn btn-default get">Xem thêm</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/slider2.webp')}}" class="girl img-responsive" alt="" />

								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>Mỹ Thuận</span>-SHOP</h1>
									<h2>Chào mừng bạn đến Shop Thời Trang 2023</h2>
                                        	<button type="button" class="btn btn-default get">Xem thêm</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/slider3.webp')}}" class="girl img-responsive" alt="" />

								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->



    <!--/slider-->
    

    

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            @foreach ($category as $key => $cate )
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/' .$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                                                            
                            @endforeach
                        </div>
                        
                            
                        {{-- <div class="shipping text-center"><!--shipping-->
                            <img width="500px" src="{{ 'public/frontend/images/dam18.jpg' }}" alt="" />
                        
                        </div><!--/shipping--> --}}

                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach ($brand as $key => $brand )
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/' .$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/' .$brand->brand_id)}}"> <span class="pull-right">(56)</span>{{$brand->brand_name}}</a></li>
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/' .$brand->brand_id)}}"> <span class="pull-right">(27)</span>{{$brand->brand_name}}</a></li>
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/' .$brand->brand_id)}}"> <span class="pull-right">(32)</span>{{$brand->brand_name}}</a></li>
                                    
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->



                    </div>
                </div>

                @yield('content')
            </div>

        </div>
        <!--/category-tab-->


    </section>

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Mỹ Thuận</span>Shop</h2>
                            <p>720A Điện Biên Phủ, phường 22 quận Bình Thạnh, thành phố Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>SẢN PHẨM</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Đầm Maxi</a></li>
                                <li><a href="#">Đầm Suông</a></li>
                                <li><a href="#">Đầm Ôm Body</a></li>
                                <li><a href="#">Đầm Đi Biển</a></li>
                                <li><a href="#">Đầm Đi Du Lịch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>HỖ TRỢ KHÁCH HÀNG</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tìm kiếm sản phẩm</a></li>
                                <li><a href="#">Đăng nhập mua hàng</a></li>
                                <li><a href="#">Hướng dẫn mua hàng</a></li>
                                <li><a href="#">Chính sách hoạt động</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>KHUYẾN MÃI</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>TIN TỨC CỦA SHOP</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Mỹ Thuận-Shop</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="@gmail.com" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Thông tin cập nhật mới nhất <br /> từ trang web của chúng tôi.</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </footer><!--/Footer-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
</body>

</html>

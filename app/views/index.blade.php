<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SanFord Retail</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<img src="images/logo.png" alt=""/>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-11">
	            	<div class="well">
	                    <form action="">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-5">
	                <div class="well">
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
	                            <span class="pull-left">Shopping Cart:</span>
	                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
	                        </button>
	                        <ul class="dropdown-menu cart-content" role="menu">
                                <li>
                                    <a href="">
                                        <b>First Product</b>
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <b></b>
                                        <span></span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href=""></a></li>
                            </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
	            	<div class="well">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a> 
	                </div>
	            </div>
	        </div>
	    </div>
    </header>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="">SanFord Retail</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="">Catalogue</a></li>
                    <li><a href="">Shopping Cart</a></li>
                    <li><a href="">Checkout</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
        <div class="row">

        	<!-- Slider -->
        	<div class="col-lg-12 col-md-12">
                <div class="slider">
                    <ul class="bxslider">
                        <li>
                            <a href="">
                                <img src="images/banner_slider-1.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/banner_slider-2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/banner_slider-3.jpg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Slider -->

        </div>

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">CATEGORIES</span>
	            	</div>
					<div class="list-group list-categ">
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
						<a href="" class="list-group-item">Category </a>
					</div>
				</div>
				<!-- End Categories -->

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
					<div class="hero-feature">
		                <div class="thumbnail text-center">
		                	<a href="" class="link-p">
		                    	<img src="images/product-8.jpg" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="">Penn State College T-Shirt</a></h4>
		                        <p>Product Description</p>
		                        <p>
		                        	<div class="btn-group">
		                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                	<a href="" class="link-p">
		                    	<img src="images/product-9.jpg" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="">Ohio State College T-Shirt</a></h4>
		                        <p>Product Description</p>
		                        <p>
		                        	<div class="btn-group">
		                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		            </div>
				</div>
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Featured -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">FMCG PRODUCTS</span>
            	</div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-2.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Aashirvaad Atta </a></h4>
	                        <p>5 Kg Pack</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 170.00</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-3.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Horlicks</a></h4>
	                        <p>1 Kg Chocolate flavour</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 356.00</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-4.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Saffola</a></h4>
	                        <p>5 Kg Pack</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 700.00</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-5.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Prestige </a></h4>
	                        <p>Omega non stick kadai, frypan set</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 899.99</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-6.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Live Nation ACDC Gray T-Shirt</a></h4>
	                        <p>Product Description</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-7.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Live Nation Aerosmith Ivory T-Shirt</a></h4>
	                        <p>Product Description</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
        	</div>
        	<!-- End Featured -->

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="col-lg-12 col-sm-12">
            		<span class="title">GARMENTS</span>
            	</div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-10.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
	                        <p>Product Description</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-11.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Adidas Men Flame Black T-shirt</a></h4>
	                        <p>Product Description</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="images/product-12.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="">Adidas Men Red Printed T-shirt</a></h4>
	                        <p>Product Description</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default"><i class="fa fa-rupee"></i> 999.99</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
			</div>
			<!-- End Adidas Category -->

        </div>
	</div>

	<footer>
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>More Information</h4>
        			<ul>
        				<li><a href="">About Us</a></li>
        				<li><a href="">Policy Privacy</a></li>
        				<li><a href="">Terms and Conditions</a></li>
        				<li><a href="">Shipping Methods</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Categories</h4>
        			<ul>
        				<li><a href="">Category </a></li>
        				<li><a href="">Category </a></li>
        				<li><a href="">Category </a></li>
        				<li><a href="">Category </a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="">Contact Us</a></li>
        				<li><a href="#"></a></li>
        				<li><a href="#"></a></li>
        				<li><a href="#"></a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Follow Us</h4>
        			<ul class="social">
        				<li><a href="#">Google Plus</a></li>
        				<li><a href="#">Facebook</a></li>
        				<li><a href="#">Twitter</a></li>
        				<li><a href="#">RSS Feed</a></li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="navbar-inverse text-center copyright">
        	Copyright &copy; 2013 Mimity All right reserved
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.blImageCenter.js"></script>
    <script src="js/mimity.js"></script>
</body>
</html>

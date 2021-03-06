<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | NK-COLLECTION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
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

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username_search = " select * from prarj where username = '$username' ";
	$query = mysqli_query($con , $username_search);

	$username_count = mysqli_num_rows($query);

	if($username_count){
		$username_pass=mysqli_fetch_assoc($query);
		
		$db_pass = $username_pass['password'];

		if($db_pass != $password){
			echo '<script>alert("please enter correct password!!");</script>';
		}
		
	}
	else{
		echo '<script>alert("Please Enter Correct Username and Password!!!");</script>';
	}
	
	
}
?>
<script>

function ss(){
	alert("Logged In Successfully!!!!......Enjoy Your Shopping.");
	window.open("index.html");
}

</script>





	<header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +91 7702120291</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Nikeshcol@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/nikesh.patil.5209"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/mr.nikesh.5597/"><i class="fa fa-instagram"></i></a></li>
				    			<li><a href="https://twitter.com/ArjunJa18065565"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-4 clearfix">
                        <div class="logo pull-left">
                            <img src="cn-logo4.png" width="350" height="270" alt="Logo" /></a>
			            </div>
                    </div>-->
                    <div class="col-md-12 clearfix">
                        <div class="shop-menu clearfix pull-left">
                            <img src="cn-logo4.png" width="200" height="170" alt="Logo" /></a>
                        </div>
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="contact-us.html"><i class="fa fa-phone"></i>Contact</a></li>
                                <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="product-details.html"><i class="fa fa-crosshairs"></i> Products</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/header-->	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off" method="post">
							<input type="text" name="username" placeholder="Username" required />
							<input type="password" name="password" placeholder="Password" required />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" onclick="ss()" name="submit" class="btn btn-default" target="index.html">Login</button>
						</form>
					</div><!--/login form-->
				</div>
                                                                    <div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
                                                                   <div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.html" autocomplete="off" method="post">

							<button type="submit" class="btn btn-default">Signup</button>
						</form>
                  
					</div><!--/sign up form-->
				</div>
				</div>
			       </div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NK</span>-Collection</h2>
							<p>We dont Flatter,We Believe in Mediocrity & provide essential trustworthy relations to Consumers</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>VAIBHAV JADHAV</p>
								<a> <i class="fa fa-phone"></i> +91 7769809291</a>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/nik.png" alt="Nikesh" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Nikesh Jadhav</p>
								<a><i class="fa fa-phone"></i> +91 7769809291</li></a>
							</div>
						</div>

					</div>
					<div class="col-sm-3">
						<div class="address">
						<h3>To get more updates</h3>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button> 
							</form>
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
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">FAQ???s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Under Garmets</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								
								<li><a href="">Privacy Policy</a></li>
								<li><a href="">Refund Policy </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li
								<li><a  target="_blank" href="https://www.google.com/maps/place/Nikesh+Collection+Dresses/@19.1129083,77.322717,17z/data=!3m1!4b1!4m5!3m4!1s0x3bce29ce5c9ec8bf:0xdae1156b2378bb8e!8m2!3d19.1129068!4d77.324911">Store Location</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2018 Nikesh Collection Inc. All rights reserved.</p>
					<p class="pull-right">Managed by <span><a target="_blank" href="https://github.com/arjundhav">Prasanna & Arjun</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php

if(isset($_POST['username'])){
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("conection die due to ".mysqli_connect_error());
    }
    //echo "Successfully Connected to db";

    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $mnumber = $_POST['mobilenumber'];

    $sql = "INSERT INTO `prarj`.`prarj` (`username`, `emailid`, `password`, `mobilenumber`) VALUES ('$username', '$emailid', '$password', '$mnumber');";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "succesfully Inserted";
      }
  
      else{
        echo "ERROR: $sql <br> $con->error";
      }
  
      $con->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Signup | NK-COLLECTION</title>
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
</head><!--/head secion-->


<body>
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
                                <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
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
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.php" autocomplete="off" method="post">
							<form action="signup.php" autocomplete="off" method="post">
                                                                                                                 
							<input id="uname" type="text"  onblur="user('uname','1')" name="username" placeholder="Username"/>
                                                                                                                  <div id="1" value=""></div>
                                                                                                                <input id ="email" name="emailid" type="text" onblur="eval('email','2')"  placeholder="Email Address"/>
                                                                                                                    <div id="2" value=""></div>
                                                                                                                    <input id="pass" type="password" onblur="pasd('pass','4')" name="password" placeholder="Set Password"/>
                                                                                                                    <div id="4" value=""></div>
                                                                                                                  <input id ="mno" name = "mobilenumber" type="text" onblur="phno('mno','3')"  placeholder="Mobile Number"/>
                                                                                                                    <div id="3" value=""></div>
							 
							<button type="submit" class="btn btn-default" onclick="final()">Signup</button>
						</form>
  <script>
	  var flag1=0;
          var flag2=0;
          var flag3=0;
          var flag4=0;
                                                                                                                  
function user(id,lb)
  {
     var x = document.getElementById(id).value ;
     var txt = document.getElementById(lb).value ;
    
    if(x != ""){
       if(isNaN(x) == false)
         document.getElementById(lb).innerHTML =" <font color=red> Username can't be Number</font>";
       else
        {
         document.getElementById(lb).innerHTML = null;
         flag1++;
        }
      }
   else
    document.getElementById(lb).innerHTML = "<font color=red>   *Required</font>";
 }
	  
function eval(id,lb)
  {
      var x = document.getElementById(id).value ;
      var txt = document.getElementById(lb).value ;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(x != ""){
       if(reg.test(x) == false)
         document.getElementById(lb).innerHTML =" <font color=red>   Enter a valid email address</font>";
       else
         {
          document.getElementById(lb).innerHTML = null;
          flag2++;
         }
      }
   else
      document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
  }

function phno(id,lb)
{
     var x = document.getElementById(id).value ;
     var txt = document.getElementById(lb).value ;
    var reg =/^\d{10}$/;
  if(x != ""){
    if(reg.test(x) == false)
       document.getElementById(lb).innerHTML =" <font color=red>   Enter a valid Mobile Number</font>";
    else
      {
       document.getElementById(lb).innerHTML = null;
       flag3++;
      }
   }
 else
    document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
}

function pasd(id,lb)
   {
    var x = document.getElementById(id).value ;
    var txt = document.getElementById(lb).value ;
    var reg =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
   if(x != ""){
     if(reg.test(x) == false)
        document.getElementById(lb).innerHTML =" <font color=red>Password must be of 6 to 20 characters with at least one digit, one uppercase & one lowercase letter.</font>";
    else
     {
      document.getElementById(lb).innerHTML = null;
      flag4++;
     }
  }
  else
   document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
 }


function final()
 {
   if (flag1 !=0 && flag2 !=0 && flag3 !=0 && flag4!=0)
     {
       //alert("Logged-In, Enjoy Shopping !!!");
        window.open("login.php");
     }
  else
    alert("Please fill the correct Credentials");
 }     
                                                            
</script>  
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--login form-->
						<h2>Already have an Account?Log-in</h2>
						<form action="login.php" autocomplete="off" method="post">
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
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
								<li><a href="">Company Information</a></li>
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


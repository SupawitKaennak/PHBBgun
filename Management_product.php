<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHBBgun</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<?php			
		session_start();

			require_once('conn.php');
				// require_once('Employee_page.php');
				if($_SESSION['status'] == "EMPLOYEE")
  				{
  					require_once('Employee_page.php');
 				}
 					else
  				{
  					require_once('Customer_page.php');
 				} 	 	
	?>


	</head>
	<body>	

	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<a href="https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php">PHBBgun</a>
				</div>
				<div class="col-xs-12 text-right menu-1">						
				<h6><a style="color:orange;">สถานะ</a>	  <a style="color:skyblue;"><?php echo $result["status"];?></a>
					<a style="color:orange">ชื่อผู้ใช้</a>	   <a style="color:skyblue;"><?php echo $result["username"];?></a>
					<a style="color:orange">ชื่อ</a> 		<a style="color:skyblue;"><?php echo $result["name"];?></a>
					<a style="color:orange">นามสกุล</a>    <a style="color:skyblue;"><?php echo $result["last_name"];?></a></h6>

				<ul>
						<li><a href="https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php">หน้าแรก</a></li>
						<li class="has-dropdown">
							<a href="#">สินค้าภายในเว็บไซด์</a>
							<ul class="dropdown">
								<li><a href="Product1.html">อาวุธปืนบีบีกัน</a></li>
								<li><a href="Product2.html">ของแต่งปืนบีบีกัน</a></li>								
							</ul>
						</li>						
						<li><a href="https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/UnitWebDesing1/">บทเรียน</a></li>
						<li><a href="Document.html">UML</a></li>	
						<li><a href="profiles.html">ผลงาน</a></li>	
						<li class="btn-cta"><a href="edit_profile.php"><span>แก้ไขบัญชี</span></a></li>						
						<li class="btn-cta"><a href="logout.php"><span>ออกจากระบบ</span></a></li>
												
					</ul>
				</div>
			</div>		
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/picture_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">										
					<div class="row row-mt-15em">
						<div class="col-md-20 mt-text animate-box" data-animate-effect="fadeInUp">						
							<h1 class="cursive-font">BBgun Thailand </h1>	
									  </div>
  								   </div>
								</div>
							</div>
						</div>
					</div>																
			  </header>
	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">สินค้าขายดี</h2>
					<p>Top Product</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_1.png" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="themify-icons"></i></div>
							<img src="images/img_1.png" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Colt 1911</h2>
							<p><span class="price cursive-font">4,300 ฿</span></p>					
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.png" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="themify-icons"></i></div>
							<img src="images/img_2.png" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Glock 19</h2>
							<p><span class="price cursive-font">4,500 ฿</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.png" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="themify-icons"></i></div>
							<img src="images/img_3.png" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Double Bell M4 DB079</h2>
							<p><span class="price cursive-font">5,900 ฿</span></p>

						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/picture_2.png)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; เป็นครอบครัวเดียวกัน กับ PHBBgun สิ &rdquo;</h1>

					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2">
						<form class="form-inline">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-default btn-block">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			

				</div>	
			</div>
		</div>
	</div>

						

		

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>ติดต่อเราได้ที่</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>065-941-4451</a></li>
							<li><a href="#"><i class="icon-mail2"></i>64301280013@cmtc.ac.th</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100002786199906"><i class="icon-facebook"></i> Facebook</a></li>
						</ul>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>099-143-7795</a></li>
							<li><a href="#"><i class="icon-mail2"></i>64301280018@cmtc.ac.th</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100010221936825"><i class="icon-facebook"></i> Facebook</a></li>
						</ul>
					</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
				</div>
			</div>
		</div>			

	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

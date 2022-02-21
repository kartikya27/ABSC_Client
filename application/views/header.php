<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
	
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

			
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header One
			============================================== 
			-->
			<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="index"><img src="https://www.biznpsstat-absc.solutions/my_content/uploads/2020/11/login.png" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Address:</h6>
									<p>F-305, BL-2C, Paramount Residency <br> Nagaram, Rangareddi TG -500 083, India</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6>Mail us:</h6>
									<p>enquiry@biznpsstat-absc.solutions</p><p>anup@biznpsstat-absc.solutions</p>
								</li>
								<li class="quotes"><a href="#" style="padding: 0 10px;">Download</a></li>
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class=""><a href="index">Home</a>
									    	
									    </li>
									   <li><a href="about">About</a>
									    	
									    </li>
									    <li><a href="#">Service</a>
									    	<ul class="dropdown">
									        	
									        <?php foreach($serviceList as $list){ ?>	
									        	<li>
									        	    <a href="services?content=<?= $list->serviceName; ?>&id=<?= $list->id; ?>"><?= $list->serviceName; ?> &nbsp;&nbsp;&nbsp;
									        	        </a>
									        	</li>
									        <?php } ?>
									        	
									       </ul>
									    </li>
									   
									    <li><a href="blog">Blog</a>
									    	
									    </li>
									    <li><a href="contact">contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="https://www.facebook.com/ABSConsultancy-100290401922198"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="https://chat.whatsapp.com/LeKCKGdD7me4vCy6tfxgby"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
											<li><a href="https://www.linkedin.com/in/anupkumarbiznpsstatabscsolutions"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/abs_consultancy/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
					   				</li>
					   			
					   			
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->

	
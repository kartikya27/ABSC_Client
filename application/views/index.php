
			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">
					
					
					
					<?php $x=1; foreach($serviceList as $list){if($x<=4){?>	
					
					<div class="item" style="">
						<div class="main-content" style="background:#f6f6f6; min-height:375px;">
							<img src="images/icon/<?= $list->img; ?>" alt="">
							    <h4><a href="services?content=<?= $list->serviceName; ?>&id=<?= $list->id; ?>"><?= $list->serviceName; ?></a></h4>
							<p><?= $list->text; ?></p>
						</div> 
					</div> 
					
				<?php $x++; }} ?>
					
					
			
				
				
				</div> 
			</div>


			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
					    <?php foreach($contentObj as $contentData) ?>
						<div class="col-lg-6 col-12"><img src="images/home/<?= $contentData->img1 ?>" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2><?= $contentData->section ?></h2>
									<p><b><?= $contentData->title ?></b></p>
									<p style="text-align:justify;">
                                    <?= $contentData->text ?>
                                     &nbsp; &nbsp; &nbsp;<a href="about" style="color:blue;">Read More...</a></p>

								</div> <!-- /.theme-title-one -->
								<ul class="mission-goal clearfix">
									<li><a href="#mission">
										<i class="icon flaticon-star"></i>
										<h4>Vision</h4></a>
									</li>
									<li><a href="#mission">
										<i class="icon flaticon-medal"></i>
										<h4>Missions</h4></a>
									</li>
									<li><a href="#mission">
										<i class="icon flaticon-target"></i>
										<h4>Goals</h4></a>
									</li>
								</ul> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>We do not train learners in 10-20 hours. If you cannot clear interviews within three attempts, we
fail and not you.</h2>
						<a href="#enquiryPop" data-toggle="modal" data-target="#myModal" class="theme-button-one">GET A QUOTES</a>
					
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->



<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
					    <?php foreach($contentAboutINdex as $contentAboutINdexData)?>
						<div class="col-lg-6 col-12"><img src="images/home/<?= $contentAboutINdexData->img1 ?>" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2><?= $contentAboutINdexData->section ?></h2>
									<p>
									    <b><?= $contentAboutINdexData->title ?>
                                        </b>
                                    </p>
                                    <p style="text-align:justify;"><?= $contentAboutINdexData->text ?></p>
								</div> <!-- /.theme-title-one -->
							
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


<div class="top-feature section-spacing" id="mission">
				<div class="row">
				    
				    <div class="col-md-12 text-center">	
				    	<div class="theme-title-one">
									<h2>We Serve Better than Other
Business Company!!</h2>
				    <p><b>We sign a trust and not a contract.
                        </b></p></div></div>

                    <?php foreach($contentMission as $mission){ ?>
					<div class="item col-md-6" style="">
						<div class="main-content" style="background:#fafafa;min-height:375px;">
							<img src="images/icon/<?= $mission->img1; ?>" alt="">
							<h4><a href="#"><?= $mission->title; ?></a></h4>
							<p>
							<?= $mission->text; ?>
							</p>
						</div> 
					</div> 
					<?php } ?>
					
		</div></div>



			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our SERVICES</h2>
						<p>We stand apart because of win-win partnership we enable for your stakeholders.</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							
								<?php foreach($serviceList as $list){?>	
					
				<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="images/home/3.jpg" alt=""></div>
									<div class="text" style="min-height:150px;">
										<h5 style="font-size:16px;"><a href="services?content=<?= $list->serviceName; ?>&id=<?= $list->id; ?>"><?= $list->serviceName; ?></a></h5>
									
										<a href="services?content=<?= $list->serviceName; ?>&id=<?= $list->id; ?>" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> 
								</div> 
							</div> 
					
				<?php $x++; } ?>
							
							
							
							
							
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<div class="contact-text">
						<h4>You can also send us an email and we’ll get in touch shortly, or Call us</h4>
						<h5><a href="#">enquiry@biznpsstat-absc.solutions</a>  (or)  <a href="#">(+91) 93545 12954</a></h5>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->





			<!--
			=====================================================
				Our Team
			=====================================================
			-->
			<div class="our-team section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our TEAM</h2>
						<p>A Team with a single motto " UNCONDITIONAL CUSTOMER EXPERIENCE"</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							
							
							
							
							<div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="images/team/1.jpg" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>The government they survive as soldiers of fortune.</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text">
										<h6>Richards Mills</h6>
										<span>Sales Consultant</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							
						
						
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>Company Success</h6>
						<h2>Some fun facts about our consulting</h2>

						<div class="cunter-wrapper">
							<div class="row">
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="800" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Happy Trainees</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="50" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>High Impact Projects</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="20" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Years of Experience</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="3000" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Hours of Training Sessions</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						<!--<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>-->
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>FREE CONSULTATION</h2>
						<p>ABSC believes in understanding the "As Is" or "Status Quo" of Business. We Conduct gap analysis at no cost using a sample data.</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Name *"></div>
										<div class="col-md-6"><input type="text" placeholder="Phone *"></div>
										<div class="col-md-6"><input type="email" placeholder="Email *"></div>
										<div class="col-md-6">
											<select class="form-control" id="exampleSelect1">
										      <option>Service you’re looking for?</option>
										      <option>Business Services</option>
										      <option>Consumer Product</option>
										      <option>Financial Services</option>
										      <option>Software Research</option>
										    </select>
										</div>
										<div class="col-12"><textarea placeholder="Message"></textarea></div>
									</div> <!-- /.row -->
									<button class="theme-button-one">GET A QUOTES</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->


<!-- New design here-->


<link rel="stylesheet" src="https://projects.letsgolive.in/absc/demo2/fonts/icon/font/flaticon.css">

<style>
    /*--------------------------------- Contact Style One -----------------------*/
.contact-style-one {margin:120px 0 110px 0;}
.contact-style-one .google-map {height: 460px;}
.contact-style-one h2 {
  font-size: 42px;
  font-weight: 900;
  margin-bottom: 50px;
}
.gm-style .gm-style-iw {
  text-align: center;
  padding: 10px;
  background: #fff;
  border: none;
}
.gm-style .gm-style-iw p {
  margin: 15px 0 0 0;
}
.contact-style-one form {
  padding: 30px;
  box-shadow: 0px 0px 24px 0px rgba(69, 69, 69, 0.07);
  border: 1px solid #f3f3f3;
  border-radius: 3px;
}
.contact-style-one form label {
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  color: #a8acb9;
  display: block;
  letter-spacing: 1.5px;
}
.contact-style-one form input,.contact-style-one form textarea {
  border: none;
  background: #eff0f4;
  border-radius: 5px;
  padding: 15px;
  margin-bottom: 25px;
  width: 100%;
  max-width: 100%;
}
.contact-style-one form input {height: 42px;}
.contact-style-one form .row {margin: 0 -10px;}
.contact-style-one form .row [class*="col-"] {padding: 0 10px;}
.contact-style-one form textarea {
  height: 120px;
  max-height: 120px;
  resize:none;
}
.contact-style-one form button {
  width: 100%;
  border-radius: 5px;
  line-height: 48px;
  text-transform: uppercase;
  color: #fff;
  font-size: 13px;
  border-width: 1px;
}
.contact-style-one form input:focus,.contact-style-one form textarea:focus {
  box-shadow: 0px 9px 18px 0px rgba(173, 178, 199, 0.52);
}
.contact-style-one .contact-address ul li {
  width: 33.3333333%;
  padding: 0 10px 0 105px;
  position: relative;
  margin-top: 40px;
}
.contact-style-one .contact-address ul li h5 {margin-bottom: 10px;}
.contact-style-one .contact-address ul li i {
  width: 85px;
  height: 85px;
  line-height: 81px;
  border-radius: 50%;
  border: 2px solid #e8e8e8;
  font-size: 32px;
  position: absolute;
  left:0;
  top:0;
  text-align: center;
}
.contact-style-one .contact-address ul li:first-child i {color: #1ecde2;}
.contact-style-one .contact-address ul li:nth-child(2) i {color: #d765f0;}
.contact-style-one .contact-address ul li:last-child i {color: #ffcd61;}
.contact-style-one .contact-address ul {margin-top: 50px;}


body .theme-button {
    line-height: 50px;
    border-radius: 30px;
    text-transform: uppercase;
    text-align: center;
    color: #fff;
    font-size: 14px;
}
</style>



                    <div class="theme-title-one">
						<h2>TESTIMONIALS</h2>
						<!--<p>ABSC believes in understanding the "As Is" or "Status Quo" of Business. We Conduct gap analysis at no cost using a sample data.</p>-->
					</div> <!-- /.theme-title-one -->
					  <br><br>  
<div class="testimonial-section section-spacing">
   
				<div class="overlay">
				    
				     
					<div class="container">
					    
					  
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									
								<?php foreach($testimonial as $t) {?>	
									
									<div class="item">
										<p>“ <?= $t->msg; ?> ”</p>
										<div class="name">
											<h6><?= $t->name; ?></h6>
											<span><?= $t->company; ?></span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
								<?php }?>	
								
								</div> <!-- /.testimonial-slider -->
							</div> <!-- /.bg -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.testimonial-section -->






<section class="contact-style-one">
				<div class="container ">
					<div class="row">
						<div class="col-lg-8 col-md-7 col-xs-12">
							<h2>We Are Everywhere</h2>
							<div id="google-map-area">
								<div class="google-map" id="contact-google-map" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/logo/map.png" data-map-title="Find Map" data-map-zoom="10" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; left: -100000px; top: -100000px;"></button></div><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -185, -53);"><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -12px; top: -24px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -185, -53);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 990; transform: matrix(1, 0, 0, 1, -185, -53);"><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i384!4i256!2m3!1e0!2sm!3i580305097!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=90554" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i385!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=77799" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i385!4i256!2m3!1e0!2sm!3i580305097!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=60326" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i383!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=98610" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i384!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=108027" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i383!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=7184" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i299!3i385!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=121255" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i383!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=52897" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i384!4i256!2m3!1e0!2sm!3i580305097!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=5196" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i299!3i384!4i256!2m3!1e0!2sm!3i580305072!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=56711" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i385!4i256!2m3!1e0!2sm!3i580305097!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=106039" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i299!3i383!4i256!2m3!1e0!2sm!3i580305108!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;token=50640" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="Bizcop Main Office" aria-label="Bizcop Main Office" role="button" tabindex="0" style="width: 24px; height: 24px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -12px; top: -24px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 24px; height: 24px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div><div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" aria-label="Zoom in" title="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" aria-label="Zoom out" title="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div></div></div></div><div></div><div></div><div></div><div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div><div></div><div></div><div></div><div></div><div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; bottom: 14px; right: 0px; display: none;"><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;"><button draggable="false" aria-label="Rotate map clockwise" title="Rotate map clockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Rotate map counterclockwise" title="Rotate map counterclockwise" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Tilt map" title="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button></div></div></div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.925372,-74.276544&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 377px; bottom: 0px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Keyboard shortcuts</button></div></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 256px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Map Data</button><span>Map data ©2021 Google</span></div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 173px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>5 km&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 96px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@40.925372,-74.276544,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-5 col-xs-12">
							<h2>Send Message</h2>
							<form action="#">
								<label>please enter your e-mail</label>
								<input type="text" placeholder="denis@getcraftwork.com">
								<div class="row">
									<div class="col-sm-6">
										<label>First Name</label>
										<input type="text" placeholder="Zubayer">
									</div>
									<div class="col-sm-6">
										<label>Last Name</label>
										<input type="text" placeholder="Hasan">
									</div>
								</div>
								<label>Your Message</label>
								<textarea></textarea>
								<button class="tran3s p-bg-color hvr-float-shadow">SEND MESSAGE</button>
							</form>
						</div>
					</div> <!-- /.row -->

					<!--<div class="contact-address">-->
					<!--	<ul class="clearfix">-->
					<!--		<li class="float-left">-->
					<!--			<i class="flaticon-call"></i>-->
					<!--			<h5>Contact Info</h5>-->
					<!--			<p>Dummy text here Dummy text here.</p>-->
					<!--		</li>-->
					<!--		<li class="float-left">-->
					<!--			<i class="flaticon-globe"></i>-->
					<!--			<h5>Location</h5>-->
					<!--			<p>Dummy text here Dummy text here.</p>-->
					<!--		</li>-->
					<!--		<li class="float-left">-->
					<!--			<i class="flaticon-chacktwo"></i>-->
					<!--			<h5>Office Hour</h5>-->
					<!--			<p>Dummy text here Dummy text here./p&gt;-->
					<!--		</p></li>-->
					<!--	</ul>-->
					<!--</div>-->
				</div> <!-- /.container -->
			</section>

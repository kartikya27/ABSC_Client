


<!-- New design here-->


			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								<?php foreach($client as $logo){ ?>
								<div class="item"><img src="images/clients/<?= $logo->icon ?>" alt="">
								</div>
							<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section -->


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">About OUR Consulting</h6>
								<p>Regd. Address: F-305, BL-2C, Paramount<br>
Residency Nagaram, Rangareddi<br>
TG -500 083, India<br>
Phone: (+91) 93545 12954 <br>
Email: anup@biznpsstat-absc.solutions<br>
enquiry@biznpsstat-absc.solutions

</p>
								<div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">(+91) 93545 12954 / (+91) 7303522952<br>Whatsapp: +919354512954</a></div>
							</div> <!-- /.about-widget -->
							<div class="col-xl-3 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">Navigation</h6>
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Contact us</a></li>
							
								</ul>






							</div> <!-- /.footer-recent-post -->
							<div class="col-xl-3 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">Services</h6>
								<ul>
									<li><a href="#">Business Excellence Consultancy</a></li>
									<li><a href="#">Business Analytics, Machine Learning and Six Sigma Programs</a></li>
									<li><a href="#">Contact Center Managemen</a></li>
									
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-2 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2022. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="#">Career</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Social</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->
			

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title"> Send Your Enquiry </h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         
      </div>
      <div class="modal-body">
       <div class="container">
                

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-12">
                           
                            <form id="contact_form" class="form well-form" action="Home/sendEnquiry" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="fullname" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <input name="email" placeholder="Email Address" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                                </div>

                                <!-- Phone Number-->
                                <div class="form-group">
                                    <input name="phone" placeholder="Phone Number" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your phone number" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>
                                
                                <div class="form-group">
                                    <input name="CompanyName" placeholder="Company Name" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your COMPANY NAME" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>
                                
                                <div class="form-group">
                                    <input name="NatureOfBusiness" placeholder="Nature Of Business" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your NATURE OF BUSINESS" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>
                                
                                <div class="form-group">
                                    <input name="Employees" placeholder="No. Of Employees" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your NO. OF EMPLOYEES" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>
                                
                                
                                  <div class="form-group" required>
                                    <select class="form-control"  name='subject'>
                                          <option class="form-control" value=" ">Select Services</option>
                                       <?php foreach($serviceList as $list){ ?>
                                        <option class="form-control" value="<?= $list->serviceName ?>"><?= $list->serviceName ?></option>
                                       <?php } ?>
                                    </select>
                                </div>
                                

                                <!-- Text area -->
                                <div class="form-group">
                                    <textarea class="form-control" name="msg" placeholder="Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </form>
                        </div>

                        
                    </div>

                </section>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 



	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3pAn-b0AJNStKXJbqaowuEEB33v3ysnA&amp;callback=gMapHome" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>

</html>
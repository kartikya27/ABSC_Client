	<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Contact Us</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
			<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>GET IN TOUCH</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-lg-6 col-12 ">
						    
						   <ul class="best-list-item" style="background: #fff;
    padding: 65px 20px 65px 50px; border-radius: 5px 0 0 5px;">
									<li style="position: relative;
    margin-bottom: 50px;
    ">
									
										<h5><a href="#" >OUR ADDRESS:</a></h5>
									<?php
                                        foreach($contact as $details){
                                            if($details->type=="address"){ ?>
                                                <p><?php  echo $details->content; ?></p><br>

                                    <?php }
                                            }
                                    ?>  
									</li>
									<li style="position: relative;
    margin-bottom: 50px;
    ">
									
										<h5><a href="#" >FOR COMPLETE GAP ANALYSIS OF BUSINESS</a></h5>
											<?php
                                        foreach($contact as $details){
                                            if($details->type=="email"){ ?>
                                                <p><?php  echo $details->content; ?></p>

                                    <?php }
                                            }
                                    ?>  
									</li>
									<li style="position: relative;
    margin-bottom: 50px;
    ">
									
										<h5><a href="#" >OUR PHONES:</a></h5>
											<?php
                                        foreach($contact as $details){
                                            if($details->type=="call"){ ?>
                                                <p><?php  echo $details->content; ?></p>

                                    <?php }
                                            }
                                    ?>  
									</li>
								</ul>
						    
						    
						    </div>
						<div class="col-lg-6 col-12">
							<div class="form-wrapper">
								<form action="http://html.creativegigs.net/charles/inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off">
									<div class="row">
										<div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
										<div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone"></div>
										<div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
										<div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web"></div>
										<div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
									</div> <!-- /.row -->
									<button class="theme-button-one">SEND MESSAGE</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-section -->



			
		
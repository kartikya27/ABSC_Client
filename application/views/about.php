<style>
    .why-we-best .wrapper .best-list-item{
        padding: 35px 20px 45px 50px;
    }
</style>
			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2><?= $title; ?></h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				CallOut Banner 
			============================================== 
			-->
			<div class="callout-banner no-bg">
				<div class="container clearfix">
					<h3 class="title">Our Experience Is <br>Our Confidence</h3>
					<?php foreach($content as $about) ?>
					<p><?= $about->subTitle; ?> </p>
					<a href="#" class="theme-button-one">CONTACT US</a>
				</div>
			</div> <!-- /.callout-banner -->
			
			
			
			<!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->
			<div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-12 text order-lg-last">
								<div class="theme-title-one">
									<h2><?= $about->title; ?></h2>
								</div> 
								<p style="text-align:justify;"><?= $about->text; ?></p>
								
							</div> 
							<div class="col-lg-6 col-12 order-lg-first">
							    	<div style="padding:15px 0px; ">
								<img width="100%" src="images/home/<?= $about->img1; ?>" alt="" class="left-img">
								</div>
								<div style="padding:15px 0px; ">
								    
								<video width="100%" height="auto" poster="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-mTfs4YR0xbmeEOFhUSbqyp6lvVj-5Bprww&usqp=CAU" controls>
                                <source src="images/Assignment-video.mp4" type="video/mp4">
                                </video>
									</div>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->


			<!--
			=====================================================
				Why We Best
			=====================================================
			-->
			<div class="why-we-best">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>WE ARE ALWAYS BEST</h2>
							
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
							<div class="col-lg-6 col-12 order-lg-first">
								<ul class="best-list-item">
								<?php foreach($contentExtra as $text){ ?>
								
									<li>
										<i class="icon <?= $text->img1;?>"></i>
										<h5><a href="#"><?= $text->title;?></a></h5>
										<p style="font-size:16px">
										    <?= $text->text;?>
										</p>
                                    </li>
                                    <?php } ?>

								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.why-we-best -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="" >
						<h6 style="text-align: center;">Profile Summary</h6>
						<h2 style="text-align: center;">Founder and Mentor of ABSC Pvt. Ltd.</h2>

						<div class="">
							<div class="row">
							
							<?php foreach($contentProfile as $profile) ?>
							
							
							<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        			
				        			<img src="<?= base_url();?>images/home/<?= $profile->img1; ?>">	
				        				
				        			</div> 
								</div> 
							
								<div class="col-md-9 col-6">
									<div class="single-counter-box" style="text-align:justify;">
				        			<p style="margin-top: 0px;">
				        			A Customer Experience enthusiast with 17 years of experience in Banking, Telecom, Contact Center, Supply Chain, Logistic, ecommerce, Education space. Transforming business processes from ‘Reactive to Predictive and Proactive mode. Expertise in applying Lean, Six Sigma, Machine Learning, Artificial Intelligence, PDCA, ISO 9001 methodologies and tools Excellent understanding of work culture, customer needs and markets of Africa and India.
				        			</p>		
				        			</div> 
				        			<a href="profile" class="theme-button-one">Read More</a>
								</div>  
								
								
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						<!--<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>-->
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter -->


			<!-- 
			=============================================
				Core Values
			============================================== 
			-->
			<div class="core-values">
				<div class="container">
					<div class="theme-title-one">
						<h2>CORE VALUES</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="core-value-slider">
							
						<?php foreach($coreValue as $corevalue) {?>	
							
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/<?= $corevalue->img?>" alt="">
										<!--<div class="overlay"><a href="#" class="theme-button-one">READ MORE</a></div>-->
									</div> <!-- /.image-box -->
									<div class="text">
										<h5><a href="#"><?= $corevalue->title?></a></h5>
										<!--<p>The Love Boat soon will be making other run plore strange tools.</p>-->
									</div> <!-- /.text -->
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
						<?php } ?>	
						
							
						</div> <!-- /.core-value-slider -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.core-values -->


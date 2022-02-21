
			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>SERVICES</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Our Solution
			============================================== 
			-->
			<div class="our-solution section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2><?= $title ?></h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<?php foreach($services as $service){ ?>
							
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-solution-block">
								
									<h5><a href="service-details.html"><?= $service->name ;?></a></h5>
									<p><?= $service->text ;?></p>
								</div> 
							</div>
							
							<?php } ?>
							
						</div> 
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-solution -->
	
	<?php foreach($content as $contents) ?>		
<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12"><img src="images/home/<?= $contents->img1 ?>" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
								
									<p><b><?= $contents->subTitle ?>
</b></p>
	<h2></h2>
<p style="text-align:justify;"><?= $contents->text ?></p>

								</div> <!-- /.theme-title-one -->
							
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
						<h2>We provide high quality services &amp; innovative solutions for the realiable growth</h2>
						<a href="#" class="theme-button-one">GET A QUOTES</a>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


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
							    <h4><a href="#"><?= $list->serviceName; ?></a></h4>
							<p><?= $list->text; ?></p>
						</div> 
					</div> 
					
				<?php $x++; }} ?>
					<!--<div class="item" style="">-->
					<!--	<div class="main-content" style="background:#efefef; min-height:375px;">-->
					<!--		<img src="images/icon/3.png" alt="">-->
					<!--		<h4><a href="#">Contact Center Management</a></h4>-->
					<!--		<p>Contact Center in form of BPO (Business Process Outsourcing)</p>-->
					<!--	</div> -->
					<!--</div> -->
					
				
				
				
				</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->


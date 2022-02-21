<style>
   .order-lg-first li{
    padding: 10px;
    list-style: decimal-leading-zero;
        border-bottom: 6px solid #09266b;
    }
</style>
			
		
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2><?= $title; ?></h2>
					</div> 
				</div> 
			</div> 


		
			<div class="callout-banner no-bg">
				<div class="container clearfix">
					<h3 class="title">Anup Kumar</h3>
					
					<p>(Lean Six Sigma Black Belt and Data Scientist)
Customer Success & Business Value Service Expert </p>
				
				</div>
			</div> 
			
			<?php foreach($content as $about) ?>
			
		
			<div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-12 text order-lg-last">
								<div class="theme-title-one">
								    <h5>Founder and Mentor of ABSC Pvt. Ltd.</h5>
									<p><?= $about->title; ?></p>
								</div> 
								<p style="text-align:justify;"><?= $about->text; ?></p>
								
							</div> 
							<div class="col-lg-4 col-12 order-lg-first">
							    <div style="padding:30px 30px; ">
								    <img width="100%" src="images/<?= $about->img1; ?>" alt="" class="left-img">
								</div>
								<br>
								 <?= $about->subTitle; ?>
								
							</div>
						</div> 
					</div> 
				</div> 
			</div> 






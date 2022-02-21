
			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Blog</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Our Blog
			============================================== 
			-->
			<div class="blog-grid section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12 our-blog">
							<div class="post-wrapper row">
								
							<?php foreach($blogs as $blog){ ?>	
								
								<div class="col-md-4 col-12">
									<div class="single-blog">
										<div class="image-box">
											<img src="images/<?= $blog->img; ?>" alt="">
											<div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
										</div> <!-- /.image-box -->
										<div class="post-meta">
											<h5 class="title">
											   <a href="blog-details.html"><?= $blog->title ?></a></h5>
											<p>
											   <?= $blog->blogContent ?> 
											</p>
											<a href="blog-details?id=<?= $blog->id ?>" class="read-more">READ MORE</a>
										</div> <!-- /.post-meta -->
									</div> <!-- /.single-blog -->
								</div> <!-- /.col- -->
								
							<?php } ?>
							
							
								
							</div> <!-- /.post-wrapper -->
							<div class="theme-pagination">
								<ul>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- ===================== Blog Sidebar ==================== -->
						<!--<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">-->
							<!--<div class="sidebar-container sidebar-search">-->
							<!--	<form action="#">-->
							<!--		<input type="text" placeholder="Search...">-->
							<!--		<button><i class="fa fa-search" aria-hidden="true"></i></button>-->
							<!--	</form>-->
							<!--</div> <!-- /.sidebar-search -->
							<!--<div class="sidebar-container sidebar-categories">-->
							<!--	<h5 class="title">Categories</h5>-->
							<!--	<ul>-->
							<!--		<li><a href="#">Business Excellence Consultancy</a></li>-->
							<!--		<li><a href="#">Six Sigma and Data Science</a></li>-->
							<!--		<li><a href="#">Contact Center Management</a></li>-->
							<!--		<li><a href="#">Research & Survey</a></li>-->
								
							<!--	</ul>-->
							<!--</div> <!-- /.sidebar-categories -->
							
						<!--</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.blog-inner-page -->
			

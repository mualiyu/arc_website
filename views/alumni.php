<!DOCTYPE html>
<html lang="en">

  <?php 
	  	$title="Secondary School"; 
	  	$page="About us";
  		include(__DIR__."/layouts/_header.php"); 
  ?>

	<body>
		<?php include(__DIR__."/layouts/_navigation.php"); ?>

		<section class="about-us-hero" style="background:url(../images/ARC-73.jpg) no-repeat center center;">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption" style="text-transform: uppercase;">
						<h2>Alumni</h2>
					</div>
				</div>
			</div>
		</section>
<!-- 		
		<section class="about-us-achievements ">
			<div class="container">
				<div class="row">
					<div class="section-content clearfix">
						<div class="col-sm-3">
							<h3 class="home-count">2000</h3>
							<p>Year Founded</p>
						</div>
						<div class="col-sm-3">
							<h3 class="about-count">34</h3>
							<p>Certified Teachers</p>
						</div>
						<div class="col-sm-3">
							<h3 class="about-count">2409</h3>
							<p>Graduated Students</p>
						</div>
						<div class="col-sm-3">
							<h3 class="about-count">23</h3>
							<p>Awards Winner</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<section class="about-us-content">
			<div class="container">
				<div class="row">
					
					<div class="section-content-icons" style="text-transform: uppercase;">
						<div class="row">
							<div class="col-sm-12">
									<h3> Alumni</h3>
									<p>For over two decades, ARC has produced mature and independent school leavers with excellent results. We are proud of our alumni and value our continued connection with them. Alumni are invited back to guide and inspire our present students and lend their support to the school in various ways.</p>

                                    <p>Alumni who have photographs of their time in the school, or wish to leave a message here may add them to the school <a class="link color-blue" style="color: blue;;" href="https://web.facebook.com/people/Ahmadu-Ribadu-College/100053110550222/">Facebook page</a>.</p>
							</div>
                        </div>

					</div>
				</div>
			</div>
		</section>
		
		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		
		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
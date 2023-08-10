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
						<h2>Environment</h2>
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
									<h3> Environment</h3>
									<p>The College's serene and secure environment makes it conducive for students to learn and enjoy. We care about our environment. We love the atmosphere and we love the green with an abundance of trees and flowers. Our Geographical Garden provides a relaxing corner filled with geographical facts.</p>
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
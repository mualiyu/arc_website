<!DOCTYPE html>
<html lang="en"> 

  <?php 
	  	$title="Contact"; 
	  	$page="Contact";
  		include(__DIR__."/layouts/_header.php"); 
  ?>

	<body>
		<?php include(__DIR__."/layouts/_navigation.php"); ?>

		<section class="contact-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption" style="text-transform: uppercase;">
						<h2>Get in Touch with Us</h2>

					</div>
				</div>
			</div>
		</section>
		
		<section class="contact-form">
			<div class="container">
				<div class="section-content clearfix">
					<h3>Send us a Message</h3>
					<form action="/contact" method="post">
						<div class="row">
							<div class="form-group col-sm-6">
								<label>Full Name</label>
								<input type="text" required name="f_name" class="form-control" placeholder="">
							</div>
							<div class="form-group col-sm-6">
								<label>Email</label>
								<input type="email" required name="email" class="form-control" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12 col-md-12">
								<label>Message</label>
								<textarea name="msg" required></textarea>
							</div>
						</div>
						<input class="hvr-push" type="submit" value="Send">
					</form>
				</div>
			</div>
		</section>
		
		<section class="contact-information">
			<div class="container">
				<div class="section-content">
					<h3>Contact Information</h3>
					<ul>
						<li> 
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							1 modibbo Raji road off bypass. Yola, Nigeria
						</li>
						<li> 
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:+234903 838 8816"> +234903 838 8816</a> 
							<!-- | <a href="tel:999544666">(999) 544 666</a> -->
						</li>
						<li> 
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<a href="mailto:admin@sekolah.sch">info@arc.sch.ng</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		
		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
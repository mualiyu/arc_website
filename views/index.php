<!DOCTYPE html>
<html lang="en">
   <?php 
	  	$title="Home"; 
	  	$page="Home";
  		include(__DIR__."/layouts/_header.php"); 
  ?>
	<body>

	<?php include(__DIR__."/layouts/_navigation.php"); ?>
	 
		<section class="hero-1">
			<div class="container">
				<div class="row">
					<div class="hero-content">
						<div class="hero-caption col-sm-7 col-md-7">
							<br>
							<br>
														<br>
							<br>
														<br>
							<br>
							<h2>Jangu a <span>Moda</span></h2>
						<!-- 	<a href="#" class="action-btn hvr-push">TAKE A TOUR</a> -->
					
						</div>
						<div class="hero-img col-sm-5 col-md-5">
							<img src="images/teacher-1.png" alt="image">
						</div>
						

					</div>
				</div>
			</div>
		</section>
		
		<section class="featured-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="box-1">
							<a href="#"> 
								Academics 
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-2">
							<a href="#">
								Admissions 
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-3">
							<a href="#">
								 Tuition
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="welcome">
			<div class="container">
				<div class="row">

					<div class="col-sm-7 col-md-7">
						<div class="welcome-content">
							<h3><span>Founder</span> WELCOME MESSAGE</h3>
							<p>It is my pleasure to welcome you to Ahmadu Ribadu College, a private secondary school for boys and girls based in Modibbo Raji Road, Shagari low-cost housing estate, Yola, Adamawa State, Nigeria. Ahmadu Ribadu College was established in October 2000 with the motto "Janga a Moda" (Study and be learned). Our guiding principles are inspired by the exceptional qualities of the late educator par excellence, Ambassador Ahmadu Ribadu. It has since grown to become a school community that appreciates, understands, challenges and embraces each child just as they are.
								<br>
								<br>
							
							Ahmadu Ribadu College was established to help groom future leaders who are academically sound and morally upright. The school welcomes all interested and qualified pupils to an atmosphere of inclusivity and service.
							</p>
	
							<strong class="author">Haj. Zainab Tukur <span>Founder</span></strong>
						</div>
					</div>
					
					<div class="col-sm-5 col-md-5">
						<div class="welcome-img">
							<img src="images/DSC_0547.JPG" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="section-content">
						<div class="col-md-6">
							<div class="news-item">

								<div class="item-image">
									<a href="/curriculum">
										<img src="images/shutterstock_1121510045.jpeg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/curriculum">Our Curricullum</a></h3>
									<p>Our curriculum is student-centred with an emphasis on the development of collaborative teaching and learning practice. The college has a strong...</p>
									<a href="/curriculum">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="news-item">

								<div class="item-image">
									<a href="/admission">
										<img src="images/ARC-104.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/admission">Admissions</a></h3>
									<p>Ahmadu Ribadu College serves children from age 11 and above. We welcome students from different ethnic groups, backgrounds, creeds, physical abilities and educational needs.</p>
									<a href="/admission">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="news-item">

								<div class="item-image">
									<a href="/environment">
										<img src="images/ARC-31.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/environment">Environment</a></h3>
									<p>The College's serene and secure environment makes it conducive for students to learn and enjoy. We care about our environment. We love the...</p>
									<a href="/environment">Read More</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		
		
		<section class="call-to-action">
			<div class="container">
				<div class="row">
					<div class="call-to-action-content clearfix">
						<div class="col-md-9">
							<img src="images/call-to-action-img.png" alt="image">
							<p><strong>Our students are talented,</strong>passionate, hard-working and full of good ideas.</p>
						</div>
						<div class="col-md-3">
							<a href="#" class="hvr-push">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="academic-calendar" id="calendar">
			<?php include(__DIR__."/components/calendar.php"); ?>
		</section>
		
		<section class="gallery-list" id="gallery">
			<div class="container">
				<div class="row" align="center">
					<div class="mb-3 m-3 pb-3 p-2">
						<h2>Our Students</h2>
						<p>Our students are talented, hard-working and full of good ideas. We encourage and empower them to bring their ideas to life. Hands-on opportunities are what we're all about.</p>
						<br>
					</div>
				</div>
				<div class="row">
					<?php
					if (count($galleries)>0) {
						foreach ($galleries as $key => $g) {
							?>
							<div class="col-sm-4">
								<a href="#" data-featherlight="#content-<?=$g['id']?>">
									<img src="/uploads/gallery/<?=$g['image']?>" style="height: 300px;" alt="image">
								</a>
								<div id="content-<?=$g['id']?>" class="gallery-lightbox">
									<img src="/uploads/gallery/<?=$g['image']?>" alt="image">
									<div class="gallery-lightbox-content">
										<p><?=$g['description']?></p>
									</div>
								</div>
							</div>
							<?php
						}
					}else{
						?>
						<div class="col-sm-4">
							<p>Oops!!! No Image from gallery.</p>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</section>
		
		<section class="featured-video" id="our-video">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2>Watch Our Video</h2>
						<p>From the teachers, to the assistants, to the students, there is such a family atmosphere that is perfect for nurturing academic ability. 
							<!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. -->
						</p>
						<a href="#" class="primary-link hvr-push">Learn More</a>
					</div>
					<div class="col-sm-6">
						<div class="content-video">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/hX3FJrm3laM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		
		<!-- <section class="sponsor">
			<div class="container">
				<div class="row">
					<div class="sponsor-logo">
						<div class="col-sm-3">
							<img src="images/sponsor-logo-1.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-2.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-3.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-4.png" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		

		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
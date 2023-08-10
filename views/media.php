<!DOCTYPE html> 
<html lang="en">
  <?php 
	  	$title="Media"; 
	  	$page="Media";
  		include(__DIR__."/layouts/_header.php"); 
  ?>

	<body>
		<?php include(__DIR__."/layouts/_navigation.php"); ?>

		<section class="gallery-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption" style="text-transform: uppercase;">
						<h2>Media and Gallery</h2>
					</div>
				</div>
			</div>
		</section>
		
		<section class="gallery-list">
			<div class="container">
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
							Nothin is here
							</div>
						<?php
					}
					?>
				</div>
				<a href="#" class="gallery-load-more">
					<span>Load More <i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>
		
		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		
		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
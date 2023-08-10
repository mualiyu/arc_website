<!DOCTYPE html> 
<html lang="en">
  <?php 
	  	$title="Admission"; 
	  	$page="Admission";
  		include(__DIR__."/layouts/_header.php"); 
  ?>
	<body>
		<?php include(__DIR__."/layouts/_navigation.php"); ?>

		<section class="news-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>ARC Latest News</h2>
					</div>
				</div>
			</div>
		</section>
		

        <!-- blogs -->
        <!-- <section class="search-bar">
			<div class="container">
				<div class="row">
					<input type="text" placeholder="Type any keyword and enter to search">
				</div>
			</div>
		</section> -->
		
		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="section-content">
					<?php 
                    if (count($news)>0) {
                        
                        foreach ($news as $key => $row) {
                         ?>
						   <div class="col-md-6">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="/blogs/<?=$row['id']?>"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin ARC</span></a>
									</div>
									<div class="col-md-4">
										<span><?=date("M d, Y", strtotime($row["date"]))?></span>
									</div>
								</div>
								<div class="item-image">
									<a href="/blogs/<?=$row['id']?>">
										<img src="/uploads/news/<?=$row['image']?>" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/blogs/<?=$row['id']?>"><?=$row['title']?></a></h3>
									<p><?=substr($row['content'], 0, 150)?>...</p>
									<a href="/blogs/<?=$row['id']?>">Read More</a>
								</div>
							</div>
						   </div>
                        <?php
                        }
                    }else{
                        ?>
                        <div class="col-md-12">
							<div class="news-item">
								<p>No News Available.</p>
							</div>
						   </div>
                        <?php
                    }
                        ?>
                    <!-- for loop -->
						

						<!-- <div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="news-single.html"><img src="images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin ARC</span></a>
									</div>
									<div class="col-md-4">
										<span>Aug 15</span>
									</div>
								</div>
								<div class="item-image">
									<a href="news-single.html">
										<img src="images/latest-news-img-3.jpg" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="news-single.html">Apply for Community Scholarships</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
									<a href="news-single.html">Read More</a>
								</div>
							</div>
						</div> -->


					</div>
				</div>
				<!-- <div class="row">
					<div class="news-pagination">
						<ul>
							<li class="prev"><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="active"><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">12</a></li>
							<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div> -->
			</div>
		</section>

		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		
		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
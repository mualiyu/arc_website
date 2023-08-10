<!DOCTYPE html> 
<html lang="en">
  <?php 
	  	$title="Admission"; 
	  	$page="Admission";
  		include(__DIR__."/layouts/_header.php"); 
  ?>
	<body>
		<?php include(__DIR__."/layouts/_navigation.php"); ?>

		<section class="news-single-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2><?=$news["title"]?></h2>
					</div>
				</div>
			</div>
		</section>
		
		<section class="news-single-meta">
			<div class="container">
				<div class="row">
					<p>Published by <a href="#">Admin ARC</a> on <?=date("M d 2:i", strtotime($news["date"]))?></p>
				</div>
			</div>
		</section>

        <section class="news-single-meta">
			<img src="/uploads/news/<?=$news['image']?>" style="width: auto;" alt="image">
		</section>
				
		<section class="news-single-content">
			<div class="container">
				<div class="row">
					<div class="section-content">
						<p><?=$news["content"]?></p>
					</div>
				</div>
			</div>
		</section>

        <!-- <section class="news-single-comments">
			<div class="container">
				<div class="row">
					<div class="comments-form">
						<h3>Comments</h3>
						<div class="row">
							<form>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group col-sm-6">
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group col-sm-12">
									<textarea class="form-control" rows="5" placeholder="Comment Message"></textarea>
								</div>
								<div class="form-group col-sm-12">
									<input class="hvr-push" type="submit" value="Submit">
								</div>
								
							</form>
						</div>
					</div>
					<div class="section-content">
						<ul id="comments" class="comments">
							<li>
								<div class="news-user-comment">
									<div class="col-xs-2 col-sm-1">
										<a href="#">
											<img src="images/news-single-user-4.jpg" alt="image">
										</a>
									</div>
									<div class="col-xs-10 col-sm-11">
										<h3><a href="#">Gloria Robinson</a> <span>July 19</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
										<a href="#">Reply</a>
									</div>
								</div>
							</li>
						</ul>	
					</div>
				</div>
			</div>
		</section> -->

        <section class="latest-news-single">
			<div class="container">
				<h2 class="related-heading"><span>Letest Articles</span></h2>
				<div class="row">
					<div class="section-content">
                        <!-- for -->
                    <?php 
                    if (count($latest_news)>0) {
                        
                        foreach ($latest_news as $key => $row) {
                    ?>
                        <div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="/blogs/<?=$row['id']?>"><img src="/images/latest-news-author-img.jpg" alt="image"></a>
										<a href="#"><span>Admin ARC</span></a>
									</div>
									<div class="col-md-4">
										<span><?=date("M d", strtotime($row["date"]))?></span>
									</div>
								</div>
								<div class="item-image">
									<a href="/blogs/<?=$row['id']?>">
										<img src="/uploads/news/<?=$row['image']?>" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h3><a href="/blogs/<?=$row['id']?>"><?=$row['title']?></a></h3>
									<p><?=substr($row['content'], 0, 80)?>...</p>
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
						
					</div>
				</div>
			</div>
		</section>

		<!-- news subscribe components -->
		<?php include(__DIR__."/components/news_subscribe.php"); ?>
		
		<?php include(__DIR__."/layouts/_footer.php"); ?>

	</body>
</html>
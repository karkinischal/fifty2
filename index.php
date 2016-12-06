<?php
	include "header.php";
?>

	<main class="cd-main-content" >
		<div class="cd-fixed-bg cd-bg-1 smoothScroll" id="home">
			<h1>50 Female Champions</h1>
		</div> <!-- cd-fixed-bg -->

		<div class="cd-scrolling-bg cd-color-2" id="about">
			<div class="cd-container">
			<h1 class="who">WHO ARE WE</h1>
				<?php  
					include('admin/classes/database.php');
    				$obj = new Connection();
    				$conn = $obj->getConnection();
    				$sql = "SELECT * FROM home_posts WHERE post_type LIKE 'about'";
    				$result = $conn->query($sql);
    				if ($result->num_rows > 0){
        				$row = $result->fetch_assoc();
    				}
    				echo '<p>'.$row[post_cont].'</p>';
				?>
			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->

		<div class="cd-fixed-bg cd-bg-2">
			<h2>Our Projects</h2>
		</div> <!-- cd-fixed-bg -->

		<div class="cd-scrolling-bg cd-color-3" id="projects">
			<div class="cd-container">
				<!-- Project list -->
<div id="works" class="portfolio spacer">
<div class="container">
<h2 class="center">PROJECT LIST</h2>

	<ul class="grid effect-2" id="grid">
		<li><img alt="portfolio" src="images/grid-image/1.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/2.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/6.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/7.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/1.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/2.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/6.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/2.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/3.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInUp"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/4.jpg"><div class="overlay animated fadeIn"><span class="animated bounceIn"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
		<li><img alt="portfolio" src="images/grid-image/5.jpg"><div class="overlay animated fadeIn"><span class="animated fadeInDown"><a href="projects.php" target="_blank"><i class="fa fa-link"></i> View Project</a></span></div></li>
	</ul>
</div>

</div>
<!-- Project list -->

			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->
		<!--Champions of the month -->
		<div id ="about" class="cd-fixed-bg cd-bg-3">
			<h2>Champions of the month</h2>
		</div> <!-- cd-fixed-bg -->

		<div class="cd-scrolling-bg cd-color-1">
			<div class="cd-container">
			<?php
				$sql = "SELECT * FROM home_posts WHERE post_type LIKE 'champion'";
    				$result = $conn->query($sql);
    				if ($result->num_rows > 0){
        				$row = $result->fetch_assoc();
    				}
    				echo '<p>'.$row[post_cont].'</p>';
			?>
			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->

		<div class="cd-fixed-bg cd-bg-4">
			<h2>Lorem ipsum dolor sit amet.</h2>
		</div> <!-- cd-fixed-bg -->
	</main> <!-- cd-main-content -->

	<script src="js/jquery.js"></script> <!--SmoothScrool -->
	<script src="js/smoothscroll.js"></script> <!--SmoothScrool -->
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
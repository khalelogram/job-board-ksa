<!DOCTYPE html>
<html>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Customed CSS -->
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/style3.css">
	<link rel="stylesheet" type="text/css" href="./css/carousel.css">
	<link rel="stylesheet" type="text/css" href="./css/message2.css">
	
</head>
<body>
	<?php include_once('nav.php'); ?>
	<!-- Start HTML Here -->
	<div class="header-search" style="background-image: url('./img/header.jpg');">
		<!-- Header  -->
		<form method="GET" action="results.php">
			<h1> The FREE way to find the best JOB for you </h1>	
			<div class="form-box">
				<input type="text" class="search-field job-field" placeholder="Search your job here" name="q">	
				<button class="search-btn" type="button">Job Search</button>	
			</div>
		</form>
	</div>
	<!-- End of Header -->

	<!-- Start of skills -->
	<div class="brows-skill-section"; style="background-color: white !important" >
	<section id="Skills">
		<h4 class="mt-2">BROWSE BY SKILLS</h4>
		<div class="row">
			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/development.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DEVELOPMENT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/marketing.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> MARKETING & SKILLS </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/design-multmedia.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DESIGN & MULTIMEDIA </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/writing-content.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> WRITING & CONTENT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/database-it.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DATABASE & IT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/admin.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> ADMIN </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./img/consulting.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> BUSINESS CONSULTING </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a style="color: black"  href="#">Javascript</a>
					</li>
					<li>
						<a style="color: black"  href="#">CSS</a>
					</li>
					<li>
						<a style="color: black"  href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>
		</div>
	</section>
	</div>
	<!-- End of skill -->


	<!-- Company section2 -->
	<div class="pangkulong"  style="background-color: #F0F3F3">
	<div class="container">
		<h4>BROWSE BY COMPANY</h4>
		<div class="row">
			<div id="carouselExampleInterval" class="carousel slide col-md-8 mx-auto"  data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active" data-interval="10000">
			      <img src="./img/Sanmig.png" class="d-block w-100 ml-0" alt="...">
			    </div>
			    <div class="carousel-item" data-interval="2000">
			      <img src="./img/nokia.jpg" class="d-block w-100 ml-0" alt="...">
			    </div>

			    <div class="carousel-item">
			      <img src="./img/ibm.jpg" class="d-block w-100 ml-0" alt="...">
			    </div>			    
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>		
	</div>
	</div>
	<!-- End of company section -->



	<!-- Start of Fetured jobs -->
	<!-- <div class="fetured-jobs" style="background-color: white; height: 400px" >
		<div class="company-section">
			<h4>FEATURED JOBS</h4>
		</div>

	</div> -->
	<!-- End of Featured jobs -->



	<!-- Start of  Message by creator-->
	<div class="creator-message" style="background-color: gainsboro;" >
		<div class="company-section">
			<!-- <h4>Messages from creators</h4> -->
		</div>
		<div class="row">
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Bam</a>										    
					        <p>I logged in to this Job Board and tried to look for a job that will fit for me. I was very fortunate that I found the right one immediately. I highly recommend this to everyone.</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./img/bam.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Reagan</a>										    
					        <p>I was almost down for more than a year but someone recommended me this site and I just tried then...BOOM! I have a job now! Thanks to the developer of this site.</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./img/gan.jpg">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">MJ</a>										    
					        <p>I got a job immediately after a week of waiting. The employers are very responsive to all the job seekers like me. I am giving this a perfect rating for this site not just only for the features but also being active of everyone.</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./img/mj.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Dexter</a>										    
					        <p>I really wanted to earn more knowledge in creating DASHBOARD and I found an employer which is looking for someone who has at least a basic background in creating DASHBOARD. Thanks for this site!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./img/dexter.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Lawrence</a>										    
					        <p>I highly recoomend this. </p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./img/lorence.png">											
						</div>
					</div> 
	            </div>
			</div>
		</div>
	</div>
	<!-- End of Message by creator -->

	<!-- Footer -->
	<div class="footer" style="background-color: #4591EC">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-4 text-center mt-3">
					<a class="footer-brand" href="#">
						LOGO HERE<img src="">
					</a>					
				</div>
				<div class="col-sm-2 col-xs-4 text-center mt-3">
					<h5 class="footer-title">TALENT</h5>
					<ul class="list-unstyled category-list">
						<li class="footer-list">

							<h6><a style="color: black"  href="#">How it works</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Why we are free</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Agencies</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Browse profiles</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Browse by jobs</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Top countries</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Categories</a></h6>

						</li>
					</ul>
				</div>

				<div class="col-sm-2 col-xs-4 text-center mt-3">
					<h5 class="footer-title">JOB Board</h5>
					<ul class="list-unstyled category-list">
						<li class="footer-list-li">

							<h6><a style="color: black"  href="#">About</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Developers</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Resources</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Contacts</a></h6>

						</li>						
					</ul>
				</div>

				<div class="col-sm-2 col-xs-4 text-center mt-3">
					<h5 class="footer-title">MORE</h5>
					<ul class="list-unstyled category-list">
						<li>

							<h6><a style="color: black"  href="#">Help center</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Blog</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">FAQ</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Email us</a></h6>
						</li>	
						<li>
							<h6><a style="color: black"  href="#">Terms</a></h6>
						</li>
						<li>
							<h6><a style="color: black"  href="#">Privacy</a></h6>
						</li>	
						<li>
							<h6><a style="color: black"  href="#">Content Guidelines</a></h6>

						</li>				
					</ul>
				</div>

				<div class="col-sm-2 col-xs-4 text-center mt-3">
					<h5 class="footer-title">SOCIAL</h5>
					<a class="fa" fa-facebook target="_blank" href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="fa" fa-twitter target="_blank" href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="fa" fa-linkedin target="_blank" href="#">
						<i class="fa fa-linkedin"></i>
					</a>

				</div>	
			
			</div>
		</div>	
	</div>	
	<!-- End of footer -->




	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
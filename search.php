<!DOCTYPE html>
<html>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- Customed CSS -->
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<link rel="stylesheet" href="./lib/style.css">
	<link rel="stylesheet" type="text/css" href="./lib/carousel.css">
	<link rel="stylesheet" type="text/css" href="./lib/message2.css">
</head>
<body>
	<!-- Start HTML Here -->
	<div class="header-search" style="background-image: url('header.jpg');">
		<!-- Header  -->
		<form>
			<h1> The FREE way to find the best JOB for you </h1>	
			<div class="form-box">
				<input type="text" class="search-field job-field" placeholder="Search your job here">	
				<button class="search-btn" type="button">Job Search</button>	
			</div>
		</form>
	</div>
	<!-- End of Header -->

	<!-- BAM -->
	<section id="Skills">
		<h4 class="mt-2">BROWSE BY SKILLS</h4>
		<div class="row">
			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/development.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DEVELOPMENT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/marketing.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> MARKETING & SKILLS </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/design-multmedia.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DESIGN & MULTIMEDIA </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/writing-content.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> WRITING & CONTENT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/database-it.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> DATABASE & IT </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/admin.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> ADMIN </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>

			<div class="col-12 col-sm-4 col-md-3 text-center p-3">
				<div class="skill-img-container">
					<img srcset="./lib/img/consulting.png">					
				</div>
				<div class="kinulong my-3">
				<a class="category-title" href="#"> BUSINESS CONSULTING </a>
				</div>
				<ul class="list-unstyled category-list mb-0">
					<li>
						<a href="#">Javascript</a>
					</li>
					<li>
						<a href="#">CSS</a>
					</li>
					<li>
						<a href="#">Web Development</a>
					</li><br>
					<button class="btn btn-info view-all-skills" type="button" href="#">View all skills</button>	
				</ul>
			</div>



		</div>
	</section>
	<!-- End of skill -->

	<!-- Company section2 -->
	<div class="pangkulong"  style="background-color: #F0F3F3">
	<div class="container">
		<h4>BROWSE BY COMPANY</h4>
		<div class="row">
			<div id="carouselExampleInterval" class="carousel slide col-md-8 mx-auto"  data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active" data-interval="10000">
			      <img src="./lib/img/carjob1.jpg" class="d-block w-100 ml-0" alt="...">
			    </div>
			    <div class="carousel-item" data-interval="2000">
			      <img src="./lib/img/carjob2.jpg" class="d-block w-100 ml-0" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="./lib/img/carjob3.jpg" class="d-block w-100 ml-0" alt="...">
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
	<div class="fetured-jobs" style="background-color: white; height: 400px" >
		<div class="company-section">
			<h4>FEATURED JOBS</h4>
		</div>

	</div>
	<!-- End of Featured jobs -->



	<!-- Start of  Message by creator-->
	<div class="creator-message" style="background-color: gainsboro;" >
		<div class="company-section">
			<h4>Messages from creators</h4>
		</div>
		<div class="row">
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Bam</a>										    
					        <p>Napaka effective ng job search engine na to. makakahanap ka agad ng work dito. PROMISE!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./lib/img/bam.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Reagan</a>										    
					        <p>Napaka effective ng job search engine na to. makakahanap ka agad ng work dito. PROMISE!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./lib/img/gan.jpg">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">MJ</a>										    
					        <p>Napaka effective ng job search engine na to. makakahanap ka agad ng work dito. PROMISE!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./lib/img/mj.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Dexter</a>										    
					        <p>Napaka effective ng job search engine na to. makakahanap ka agad ng work dito. PROMISE!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./lib/img/dexter.png">											
						</div>
					</div> 
	            </div>
			</div>
			<div id="carousel-reviews" class="carousel slide col-12 col-sm-4" data-ride="carousel">
				<div class="item">
					<div class="m-3">
					    <div class="block-text rel zmin">
					        <a title="" href="#">Lorence</a>										    
					        <p>Napaka effective ng job search engine na to. makakahanap ka agad ng work dito. PROMISE!</p>
						    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				        </div>
						<div class="person-text rel"><br><br>
			                <img src="./lib/img/lorence.png">											
						</div>
					</div> 
	            </div>
			</div>
		</div>
	</div>
	<!-- End of Message by creator -->
	<div class="pangkulong" style="background-color: skyblue">
	<div class="container" style="background-color: skyblue;" >
		<div class="footer">
			<h4>Get Started Today</h4>
			<p class="footer"> Find the world’s best agencies and freelancers for FREE </p>
			<p class="footer"> Find the world’s best agencies and freelancers for FREE </p>
			<p class="footer"> Find the world’s best agencies and freelancers for FREE </p>
		</div>
	</div>	




	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
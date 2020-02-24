<?php 
	$UA = $_SERVER["HTTP_USER_AGENT"];
	sorry();
	function sorry(){
	    global $UA;
	    $state = false;
	    if (preg_match("/webzip|httrack|wget|FlickBot|downloader|production
	   bot|superbot|PersonaPilot|NPBot|WebCopier|vayala|imagefetch|
	   Microsoft URL Control|mac finder|
	   emailreaper|emailsiphon|emailwolf|emailmagnet|emailsweeper|
	   Indy Library|FrontPage|cherry picker|WebCopier|netzip|
	   Share Program|TurnitinBot|full web bot|zeus/i",$UA)){
	        $state = true;
	        print ":)";
	        exit(); die();
	    }
	}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="id">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<title>Hafiz Ramadhan | Portfolio</title>
	<meta name="description" content="Hafiz Ramadhan is technology evangelist experienced professional pefroming roles like technology consultation, freelancing, leading technologies and helping startups.">
	<meta name="author" content="Hafiz Ramadhan">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/vendor.css">
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<link rel="icon" type="image/png" href="">
</head>
<body id="top">

	<!-- intro section
   ================================================== -->
	<section id="intro">
		<div class="intro-overlay"></div>
		<div class="intro-content">
			<div class="row">
				<div class="col-twelve">
					<h5>Hello, World.</h5>
					<h1>I'm Hafiz Ramadhan.</h1>

					<p class="intro-position">
						<span>Software Engineer</span>
						<span>Transhybrid Communication</span>
					</p>
					<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
				</div>
			</div>
		</div> <!-- /intro-content -->
		<ul class="intro-social">
			<li><a href="https://www.facebook.com/rmdhfz" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.github.com/rmdhfz" target="_blank"><i class="fa fa-github"></i></a></li>
			<li><a href="https://www.linkedin.com/in/hfzrmd" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://www.instagram.com/hfzrmd" target="_blank"><i class="fa fa-instagram"></i></a></li>
		</ul> <!-- /intro-social -->

	</section> <!-- /intro -->


	<!-- about section
   ================================================== -->
	<section id="about">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>About</h5>
				<h1>Let me introduce myself</h1>

				<div class="intro-info">
					<img src="" alt="profile-picture">

					<p class="lead">
						A 6+ years' experienced technology professional with proven success and experience
						in technical evangelism, business development, product management and software development in
						various industries.
					</p>
				</div>

			</div>
		</div> <!-- /section-intro -->

		<div class="row about-content">

			<div class="col-six tab-full">

				<h3>Profile</h3>

				<ul class="info-list">
					<li>
						<strong>Fullname:</strong>
						<span>Hafiz Ramadhan</span>
					</li>
					<li>
						<strong>Birth Date:</strong>
						<span>December 17, 1999</span>
					</li>
					<li>
						<strong>Job:</strong>
						<span>Software Engineer, Transhybrid Communication</span>
					</li>
					<li>
						<strong>Contact:</strong>
						<span>+62 838 1995 4386</span>
					</li>
					<li>
						<strong>Email:</strong>
						<span>hfzrmd@gmail.com</span>
					</li>

				</ul> <!-- /info-list -->

			</div>

			<div class="col-six tab-full">

				<h3>Skills</h3>

				<ul class="skill-bars">
					<li>
						<div class="progress percent95"><span>95%</span></div>
						<strong>PHP</strong>
					</li>
					<li>
						<div class="progress percent90"><span>95%</span></div>
						<strong>CodeIgniter</strong>
					</li>
					<li>
						<div class="progress percent95"><span>95%</span></div>
						<strong>Web Development</strong>
					</li>
					<li>
						<div class="progress percent70"><span>85%</span></div>
						<strong>Web designing</strong>
					</li>

					<li>
						<div class="progress percent90"><span>95%</span></div>
						<strong>API</strong>
					</li>

				</ul> <!-- /skill-bars -->

			</div>

			<hr>
			<div class="col-twelve tab-full">

				<h3 class="text-center">Other Skills</h3>

				<ul style="list-style: none; margin-left: 0;">
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Programming:</b> JavaScript, C++, Java, Python, Go</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Server:</b> AWS, VPS, Dedicated, Azure, Ubuntu</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Pipeline/Monitoring:</b> Jenkins, TravisCI</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Operating System:</b> Windows, Linux( Ubuntu, Kali Linux)</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Web:</b> HTML, CSS3, LESS, JQuery, AJAX, Apache, Nginx</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Databases:</b> MySQL, MariaDB, MongoDB</li>
					<li><i class="fa fa-check" style="color: #FF0077;"></i> <b>Other:</b> SVN, Git, Web Services, Rest API, Micro-Services, Team Building, Project Management with Agile methodologies, Scrum, Sprint, Business Analysis, Infrastructure, Database Administration</li>
				</ul>
			</div>
		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
				<a href="resumeku" target="_blank" title="Download CV" class="button button-primary">Download CV</a>
			</div>
		</div>
	</section> <!-- /process-->
	<!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">
		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Resume</h5>
				<h1>More of my credentials.</h1>

				<p class="lead">With the multi-domain experience, I have worked on multiple profiles and lead the
					projects and technologies wherever required.</p>

			</div>
		</div> <!-- /section-intro-->

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Work Experience</h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">


				<div class="timeline-wrap">

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>Junior Software Engineer</h3>
							<h6 style="margin-top: 1rem !important;margin-bottom: 1rem !important;">Transhybrid Communication - Jakarta Indonesia</h6>
							<p>September 2018 - Present</p>
						</div>
						<div class="timeline-content">
							<h4>Software Engineer</h4>
							<p>Designing websites, Create, Deploy and Maintance.</p>
						</div>
					</div>
					<br><br><br> 
					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>Ink. Canvas</h3>
							<h6 style="margin-top: 1rem !important;margin-bottom: 1rem !important;">Bogor – Indonesia</h6>
							<p>Juli 2018 - Sept 208</p>
						</div>

						<div class="timeline-content">
							<h4>Frontend Developer</h4>
							<p>Creating a frontend page using AngularJS</p> 
						</div>

					</div> <!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>Senior High School Informatics</h3>
							<h6 style="margin-top: 1rem !important;margin-bottom: 1rem !important;">Bogor – Indonesia</h6>
							<p>Mei 2018 - Agus 208</p>
						</div>

						<div class="timeline-content">
							<h4>IT Support Specialist</h4>
							<p>Creating a frontend page using AngularJS</p> 
						</div>

					</div> <!-- /timeline-block -->


				</div> <!-- /timeline-wrap -->

			</div> <!-- /col-twelve -->

		</div> <!-- /resume-timeline -->

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Education</h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">

				<div class="timeline-wrap">

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3>Bachelor Degree</h3>
							<p>September 2019 - Current</p>
						</div>

						<div class="timeline-content">
							<h4>University of Pamulang</h4>
							<p>In this bachelor's program, I have learnt many of the things related to robotics, computer networks, image processign and speech recognition. Performed multiple projects based on matlab, java, c# and PHP to develop web and desktop apps.</p>
							<p>Also, I was in the ranker list of the University of Pamulang.</p>
						</div>

					</div> <!-- /timeline-block -->

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3>Software Engineering</h3>
							<p>Agustus 2015 - Agustus 2018</p>
						</div>

						<div class="timeline-content">
							<h4>Senior High School</h4>
							<p>In this Senior High School program, I was a part of student council and science association team for multiple competition and projects.</p>
							<p>Also, I was in the ranker list of the Senior High School of SMKN 1 Ciomas.</p>
						</div>

					</div> <!-- /timeline-block -->

					<!-- /timeline-block -->

				</div> <!-- /timeline-wrap -->

			</div> <!-- /col-twelve -->

		</div> <!-- /resume-timeline -->

	</section> <!-- /features -->


	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Services</h5>
				<h1>What Can I Do For You?</h1>

				<p class="lead">
					In these years, I have been a part in the process of conceptualization, development to deployment of the products, in which I was an active participent of the complete SDLC.
				</p>

			</div>
		</div> <!-- /section-intro -->

		<div class="row services-content">

			<div id="owl-slider" class="owl-carousel services-list">

				<div class="service">

					<span class="icon"><i class="icon-window"></i></span>

					<div class="service-content">

						<h3>Web Development</h3>

						<p class="desc">
							I am capable of developing the web apps using PHP, Python, CodeIgniter, YII 2, HTML5, CSS3, Bootstrap, Materialize theme template. Can develop APi's with Slim, JWT and NodeJS.
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-earth"></i></span>

					<div class="service-content">

						<h3>Project Management</h3>

						<p class="desc">
							I can handle the complete SDLC to delivery the project. I am handling the projects on both Agile and Agile-Iterative methodology. I am Handling a SCRUM and Sprints through JIRA.
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-chat"></i></span>

					<div class="service-content">

						<h3>Consultancy</h3>

						<p class="desc">
							I am doing the consultation of multiple startups to achieve their technical goals. Deciding best suitable technology, implementation patterns and orchastration amongs them.
						</p>

					</div>

				</div> <!-- /service -->

			</div> <!-- /services-list -->

		</div> <!-- /services-content -->

	</section> <!-- /services -->


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							40
						</h3>

						<h5 class="stat-title">
							Projects
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							75
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							5
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							15
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							18000
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->


	<!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Contact</h5>
				<h1>I'd Love To Hear From You.</h1>

				<p class="lead">
					If you find me suitable for any of the position in your organization, feel free to reach me.
				</p>

			</div>
		</div> <!-- /section-intro -->



		<div class="row contact-info">

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-pin"></i>
				</div>
				<h5>Where to find me</h5>
				<p>
					Jakarta<br>
					Indonesia
				</p>

			</div>

			<div class="col-four tab-full collapse">
				<div class="icon">
					<i class="icon-mail"></i>
				</div>
				<h5>Email Me At</h5>
				<p>hfzrmd@gmail.com<br></p>
			</div>

			<div class="col-four tab-full">

				<div class="icon">
					<i class="icon-phone"></i>
				</div>

				<h5>Call Me At</h5>

				<p>Mobile: +62 838 1995 4386
				</p>

			</div>

		</div> <!-- /contact-info -->

	</section> <!-- /contact -->


	<!-- footer
   ================================================== -->

	<footer>
		<div class="row">

			<div class="col-six tab-full pull-right social">

				<ul class="footer-social">
					<li><a href="https://www.facebook.com/rmdhfz" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.github.com/rmdhfz" target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://www.linkedin.com/in/rmdhfz" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/hfzrmd" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div>

			<div class="col-six tab-full">
				<div class="copyright">
					<span>© Copyright 2020 </span>
					<span>Design by <a href="index.html">Hafiz Ramadhan</a></span>
				</div>
			</div>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			</div>

		</div> <!-- /row -->
	</footer>

	<div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- Java Script
   ================================================== -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

</body>


<!-- Mirrored from rmdhfz.github.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 07:46:16 GMT -->
</html>
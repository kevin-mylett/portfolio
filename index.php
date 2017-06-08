<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/jQuery.fullPage/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Cardo%7CMontserrat%7CRaleway:300" rel="stylesheet">
<title>Kevin Mylett - Front-End Web Developer Portfolio</title>
</head> 

<body>
	<nav class="site-navigation">
		<ul class="menu">
			<li><a href="#about">About</a></li>
			<li><a href="#skills">Skills</a></li>
			<li><a href="#work">Work</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<div class="nav-toggle">
		  <span class="bar bar1"></span>
		  <span class="bar bar2"></span>
		  <span class="bar bar3"></span>
		</div>
	</nav>

<div id="fullpage">

<h1 class="offscreen">Kevin Mylett - Front-End Web Developer Portfolio</h1>
	<section class="about" data-anchor="about">
		<div class="about-footer diagonal-footer">
			<div><h2 class="section-heading">About</h2></div>
			<svg viewBox="0 0 40 100" preserveAspectRatio="none">
			<polygon points="0,40 40,0 40,100 0,100" />
			</svg>
		</div>
		<div class="container about-container">
			<div class="about-heading">
				<h3>Kevin Mylett</h3>
				<h4>Front-end Web Developer</h4>
			</div>
			<div class="about-text">
				<p>I'm Kevin Mylett, an ambitious self-taught front-end developer from Durham looking for a full-time web development role.</p>
				<p>I enjoy making beautiful websites using HTML, CSS, PHP, JavaScript and jQuery. My code is always clean, maintainable &amp; cross-browser friendly.</p>
			</div>
			<div class="about-text">
				<p>My current passion is delving further into JavaScript, with a particular focus on AngularJS. </p>
				<p>When I'm not coding you'll find me on the golf course or completing a jigsaw. I'm also learning to play guitar and like to keep fit by running and cycling throughout the North-East of England.</p>
			</div>
			<a href="Kevin Mylett - CV 2017.pdf" target="_blank" download="Kevin Mylett - CV 2017.pdf" class="pdf-link">Download CV</a>
		</div>
		<?php include '/templates/next-button.php'; ?>
	</section>
	
	<section class="skills" data-anchor="skills">
		<h2 class="mobile-section-heading">Skills</h2>
		<?php include '/templates/prev-button.php'; ?>
		<div class="skills-footer diagonal-footer reverse">
			<div><h2 class="section-heading">Skills</h2></div>
			<svg viewBox="0 0 40 100" preserveAspectRatio="none">
			<polygon points="0,0 0,100 100,100"/>
			</svg>
		</div>
		<div class="container skills-container">
			<div class="skill-group">
				<h3>Languages</h3>
				<figure>
					<img src="img/icons/html-5.svg" alt="HTML5 logo" class="skills-icon"/>
					<figcaption>HTML</figcaption>
				</figure>
				<figure>
				<img src="img/icons/css3.svg" alt="CSS logo" class="skills-icon"/>
					<figcaption>CSS</figcaption>
				</figure>
				<figure>
					<img src="img/icons/js.svg" alt="Javascript logo" class="skills-icon"/>
					<figcaption>JavaScript</figcaption>
				</figure>
				<figure>
					<img src="img/icons/jQuery.svg" alt="jQuery logo" class="skills-icon"/>
					<figcaption>jQuery</figcaption>
				</figure>
				<figure>
					<img src="img/icons/php.svg" alt="PHP logo" class="skills-icon"/>
					<figcaption>PHP</figcaption>
				</figure>
				<figure>
					<img src="img/icons/sass.svg" alt="Sass logo" class="skills-icon"/>
					<figcaption>Sass</figcaption>
				</figure>
			</div>
			<div class="skill-group">
				<h3>Workflow</h3>
				<figure>
					<img src="img/icons/grunt.svg" alt="Grunt logo" class="skills-icon"/>
					<figcaption>Grunt</figcaption>
				</figure>
				<figure>
					<img src="img/icons/gulp.svg" alt="Gulp logo" class="skills-icon"/>
					<figcaption>Gulp</figcaption>
				</figure>
				<figure>
					<img src="img/icons/github.svg" alt="GitHub logo" class="skills-icon"/>
					<figcaption>Github</figcaption>
				</figure>
				<figure>
					<img src="img/icons/filezilla.svg" alt="FileZilla logo" class="skills-icon"/>
					<figcaption>FileZilla</figcaption>
				</figure>
				<figure>
					<img src="img/icons/xampp.svg" alt="XAMPP logo" class="skills-icon"/>
					<figcaption>XAMPP</figcaption>
				</figure>
				<figure>
					<img src="img/icons/digital-ocean.svg" alt="Digital Ocean logo" class="skills-icon"/>
					<figcaption>Digital Ocean</figcaption>
				</figure>
			</div>
			<div class="skill-group">
				<h3>Software / Misc</h3>
				<figure>
				<img src="img/icons/adobe-illustrator.svg" alt="Adobe Illustrator logo" class="skills-icon"/>
					<figcaption>Illustrator</figcaption>
				</figure>
				<figure>
					<img src="img/icons/adobe-photoshop.svg" alt="Adobe Photoshop logo" class="skills-icon"/>
					<figcaption>Photoshop</figcaption>
				</figure>
				<figure>
					<img src="img/icons/bootstrap-mark.svg" alt="Bootstrap logo" class="skills-icon"/>
					<figcaption>Bootstrap</figcaption>
				</figure>
				<figure>
					<img src="img/icons/google-analytics.svg" alt="Google Analytics Logo" class="skills-icon"/>
					<figcaption>Google Analytics</figcaption>
				</figure>
				<figure>
					<img src="img/icons/wordpress.svg" alt="WordPress logo" class="skills-icon"/>
					<figcaption>WordPress</figcaption>
				</figure>
				<figure>
					<img src="img/icons/woocommerce.svg" alt="WooCommerce logo" class="skills-icon"/>
					<figcaption>WooCommerce</figcaption>
				</figure>
			</div>
		</div>
		<?php include '/templates/next-button.php'; ?>
	</section>
	
	<section class="work" data-anchor="work">
		<?php include '/templates/prev-button.php'; ?>
		<h2 class="offscreen">Work</h2>
	    <div class="slide">
	    	<div class="slide-container">
		    	<img src="img/wonder-bar.jpg" alt="Wonder Bar homepage screenshot">
		    	<div class="project-links">
		    		<h3><a href="https://www.wonder-bar.co.uk" title="Wonder-Bar Website" target="_blank">www.wonder-bar.co.uk</a></h3>
		    		<div class="source-link">
		    			<img src="img/icons/github-white.svg" alt="GitHub logo" class="source-icon"/>
		    			<a href="https://github.com/kevin-mylett/Wonder-Bar" target="_blank">view source</a>
		    		</div>
		    	</div>
		    	<p>An e-commerce site with a custom quote and deposit system integrated into the checkout process, to enable the sites owners to generate personalised quotes for the hire of their mobile bars.</p>
	    	</div>
	    </div>
    	
    	<div class="slide">
    		<div class="slide-container">
		    	<img src="img/wonder-print.jpg" alt="Wonder-Print - Business homepage screenshot">
		    	<div class="project-links">
		    		<h3><a href="https://www.wonder-print.co.uk" title="Wonder-Print Website" target="_blank">www.wonder-print.co.uk</a></h3>
		    		<div class="source-link">
		    			<img src="img/icons/github-white.svg" alt="GitHub logo" class="source-icon"/>
		    			<a href="https://github.com/kevin-mylett/Wonder-Print" target="_blank">view source</a>
		    		</div>
		    	</div>
		    	<p>An e-commerce store which sells various print based products to both domestic and commercial customers. The site was built using WordPress and WooCommerce and launched in February 2017.</p>
	    	</div>
    	</div>
    	<div class="slide">
    		<div class="slide-container">
		    	<img src="img/lottery-number-generator.jpg" alt="Lottery Number Generator">
		    	<div class="project-links">
		    		<h3><a href="#" title="Side Project: Lottery number generator">Lottery Number Generator</a></h3>
		    		<div class="source-link">
		    			<img src="img/icons/github-white.svg" alt="GitHub logo" class="source-icon"/>
		    			<a href="https://github.com/kevin-mylett/lottery-number-generator" target="_blank">view source</a>
		    		</div>
		    	</div>
		    	<p>A little side-project I built in my spare time whilst learning JavaScript.</p>
	    	</div>    		
    	</div>
    	<?php include '/templates/next-button.php'; ?>
	</section>
	

	<section class="contact" data-anchor="contact">
		<?php include '/templates/prev-button.php'; ?>
		<div class="contact-footer diagonal-footer">
			<div><h2 class="section-heading">Contact</h2></div>
			<svg viewBox="0 0 40 100" preserveAspectRatio="none">
			<polygon points="0,40 40,0 40,100 0,100" />
			</svg>
		</div>
		<div class="container">
			<h2 class="mobile-section-heading">Get In Touch</h2>
			<form id="ajax-contact" action="mailer.php" method="post">
				<div class="form-group-half">
					<p>
					<label for="firstname">First Name</label>
					<abbr title="required">*</abbr>
					</p>
					<input type="text" name="firstname" id="firstname" >
				</div>
				
				<div class="form-group-half">
					<p>	
					<label for="lastname">Last Name</label>
					</p>
					<input type="text" name="lastname" id="lastname" >
				</div>
				
				<div class="form-group">
					<p>	
					<label for="email">Email</label>
					</p>
					<input type="email" name="email" id="email">
				</div>

				<div class="form-group">
					<p>
					<label for="message">Message</label>
					</p>
					<textarea name="message" id="message" rows="6"></textarea>
				</div>

				<button type="submit" name="submit" class="submit">Send</button>	
			</form>
			<div id="form-messages"></div>
		</div>
	</section>


</div>

<!-- jQuery fullPage -->
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.js"></script>
<script src="js/myjs.js"></script>		
</body>
</html>
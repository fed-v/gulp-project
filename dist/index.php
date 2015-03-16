<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  
	<head>
		<!-- declare all page rendering and programmatic related tags -->
		<meta charset="utf-8"/>
		
		<!-- Care about IE ? -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		
		<!-- title tag is MANDATORY -->
		<title>Short and relevant, about 64 characters/spaces</title>
		
		<!-- declare Viewport for Mobile Devices -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<meta name="description" content="about 255 characters/spaces WORDS relevant to the content of the actual page" />
		
		<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

		<!-- declare all page rendering cascading style sheets in order of incidence -->
		<link rel="stylesheet" href="css/styles.min.css" />							
	
		<!-- not relevent to subject, declare all javascripts AFTER css linking -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
    </head>
 
   <body>
		
		<div id="main_wrapper">
		
			<header>
				<?php include('includes/header.php'); ?>
			</header>
			
			<main id="content" class="group" role="main">
			
				<article>
					<h1>My article</h1>
					<p>Content</p>
				</article>
		
				<aside>
					<p>More information</p>
				</aside>
			
			</main>
	
			<footer>
				<?php include('includes/footer.php'); ?>
			</footer>
	
		</div>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.min.js"></script>
		
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
	
</html>

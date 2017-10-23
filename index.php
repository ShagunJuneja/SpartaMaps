<?php
session_start();

$_SESSION["lang"]="es";

if(isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
} elseif (isset($_COOKIE['userid'])) {
	$userid = $_COOKIE['userid'];
} else {
	$userid = '';
}

include 'en.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Meera, Sanjeedha, Ojas, Shagun, Diksha">
    <meta name="keyword" content="Sparta Maps">
<meta name="description" content="Sparta Maps">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SpartaMaps</title>
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<!--	<link href="css/style.css" rel="stylesheet">-->
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-77679945-1', 'auto');
ga('send', 'pageview');
</script>
   
</head>

<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1637518353190675";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better  mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<!--				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<?php echo '<li><a href="#intro">'.HO.'</a></li>' ?>
                    <?php echo '<li><a href="Theme/index.php" id="dash">'.DA.'</a></li>' ?>
					<?php echo '<li><a href="map/map.html" id="map">'.MA.'</a></li>' ?>
                    <?php echo '<li><a href="friends.php" id="friends.html">'.FR.'</a></li>' ?>
					<?php echo '<li><a href="#team">'.TE.'</a></li>' ?>
					<?php echo '<li><a href="#" data-toggle="modal" data-target="#modal2" id="si" class="btn btn-blue">'.SI.'</a></li>' ?>
					<?php echo '<li><a href="#" data-toggle="modal" data-target="#modal1" id="su" class="btn btn-blue">'.SU.'</a></li>' ?>
					<?php echo '<li><a href="#" style="display:none;" id="lo" class="btn btn-blue">'.LO.'</a></li>' ?>
					
				</ul>
			</div>


<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="300" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
                            
							<?php echo'<h3 class="light white">'.ME.'</h3>' ?>
                            <?php echo '<h1 class="white typed">'.WE.'</h1>' ?>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Map Landmarks</h5>
                       
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-md-6">
										<h5 class="regular white">Clark's Building</h5>
									</div>
                                    <div class="col-xs-6 text-right">
                                        <h5 class="white"><button><a href="http://www.sjsu.edu/map/docs/SJSU_campus_map.pdf">SJSU Map</a></button></h5>
                                    </div>


								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Martin Luther King Jr. Library</h5>
									</div>

								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Boccardo Business Complex</h5>
									</div>

								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Engineering Building</h5>
									</div>
									
								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Dudley Moorhead Hall</h5>
									</div>


								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Science Building</h5>
									</div>


								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Washington Square hall</h5>
									</div>

								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">Music Building</h5>
									</div>
									
								</div>
								<div class="schedule-row row">
									<div class="col-md-12">
										<h5 class="regular white">MacQuarrie hall</h5>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Health Statistics</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Know about</h4>
							<h4 class="white heading small-pt">Calories and Distance</h4>
							<a href="Theme/HealthStats/index.php" class="btn btn-white-fill expand">Click here</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Friends Finder</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Find your fellow Spartans near you! </h4>
								
							</div>
							<div class="item">
								<h4 class="white heading content">Connect with Them!</h4>
								
							</div>
							<div class="item">
								<h4 class="white heading content">Reach Your destination safe!</h4>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">We offer the best of Spartan Navigation services</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Maps using MapBox API</h4>
						<p class="description">Navigate using our maps to reach your destination. Browse through the 360 degree photos, videos and know more about each location inside the campus.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Friends Finder using PubSub</h4>
						<p class="description">Find which of your friends uses the app and connect with them. Take photos and upload them on your personalized Dashboard.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Health Stats using d3.js</h4>
						<p class="description">Do you know that walking 10000 steps helps you stay healthy? Find out how many calories you have burnt in an interactive way! </p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Team</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/designer.jpg'); background-size:cover;">
							<div class="overlay text-center"></div>
						</div>
						<img src="img/team/sanjeedha.jpeg" width="120" height="120" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Sanjeedha Sanofer Raja</h4>
							<h5 class="muted regular">UI/UX Designer</h5>
						</div>
				     </div>
				</div>
                
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/marketing.jpg'); background-size:cover;">
							<div class="overlay text-center"></div>
						</div>
						<img src="img/team/ojas.jpeg" width="120" height="120" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ojas Milind Kale</h4>
							<h5 class="muted regular">Marketing Head</h5>
						</div>
				     </div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/coder.jpg'); background-size:cover;">
							<div class="overlay text-center"></div>
						</div>
						<img src="img/team/meera.jpeg" width="120" height="120" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Meera Mali</h4>
							<h5 class="muted regular">Backend Developer</h5>
						</div>
				     </div>
				</div>
                <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/tester.jpg'); background-size:cover;">
							<div class="overlay text-center"></div>
						</div>
						<img src="img/team/diksha.jpeg" width="120" height="120" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Diksha Jain</h4>
							<h5 class="muted regular">Tester</h5>
						</div>
				     </div>
				</div>
                <div class="col-md-4">
					
				</div> 
                 <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/content.jpg'); background-size:cover;">
							<div class="overlay text-center"></div>
						</div>
						<img src="img/team/shagun.jpeg" width="120" height="120" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Shagun Juneja</h4>
							<h5 class="muted regular">Content Specialist</h5>
						</div>
				     </div>
				</div> 
			</div>
		</div>
	</section>
<!--
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<a class="twitter-timeline" href="https://twitter.com/hashtag/spartamaps" data-widget-id="726541622335303680">#spartamaps Tweets</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form role="form" class="signup" method="post">
					<input type="text" class="form-control form-white" name="email" placeholder="Email ID">
					<input type="password" class="form-control form-white" name="pass" placeholder="Password">
					
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" id="signup" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign In</h3>
				<form role="form" class="signin" method="post">
					<input type="text" class="form-control form-white" name="email" placeholder="Email ID">
					<input type="password" class="form-control form-white" name="pass" placeholder="Password">
					
					
					<button type="submit" id="signin" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
	<section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div id="map-canvas"></div>
            <div class="row">
                <form method="post" action="contact.php" name="contactform" id="contactform">
                    <div class="col-md-6">
                        <fieldset>
                            <input name="name" type="text" id="name" size="30" placeholder="Name">
                            <br>
                            <input name="email" type="text" id="email" size="30" placeholder="Email">
                            <br>
                            <input name="phone" type="text" id="phone" size="30" placeholder="Phone">
                            <br>
                            <input name="human" type="text" id="human" size="30" placeholder="Prove your not a robot... What is 2+2?">
                            <br>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <textarea name="comments" cols="40" rows="20" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <button type="submit" class="btn btn-lg" id="submit" value="Submit">Send Message</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">Zootopia</a> exclusively for <a href="http://tympanus.net/codrops/">Spartans</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/canvas.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>

	<script type='text/javascript'>
	  var userid = "<?php echo $userid ?>"; 
	</script>

	<script>

    $( document ).ready(function() {
	    console.log( "ready!" );
	    console.log(userid);

	    if (userid.length > 0) {
	    	$("#lo").show();
	    	$("#si").hide();
	    	$("#su").hide();
	    } else {
	    	$("#lo").hide();
	    	$("#si").show();
	    	$("#su").show();
	    }

	    $(".signup").on('submit', function(e){
            $.ajax({
                type: "POST",
                url: "register.php",
                data: $('form.signup').serialize(),
                success: function(msg) {
                	console.log(msg);
                }
                
            });
        });

	    $(".signin").on('submit', function(e){
        	// e.preventDefault();
            $.ajax({
                type: "POST",
                url: "login.php",
                data: $('form.signin').serialize(),
               success: function(msg) {
                    if(msg=="connectedsuccess") {
						console.log("it matched");  		
                   } else {
                       console.log("login credentials do not match!");
                    }
                }
                
            });
            // return false;
        });

	    $("#lo").click(function(){
	    	var k = '<?php session_unset(); ?>'; 
	    	document.cookie = 'userid=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	    	window.location.reload();
        });
	});

    </script>

</body>

</html>
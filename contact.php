<!doctype html>
<html lang="en">
<head>
<!--That's so meta (meta information to ensure content will correctly adapt to screen size)-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Rochester VegFest</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/other/favicon.png"/>

<link rel="stylesheet" href="css/normalize.css">
        <!--Bootstrap CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/sliderstyles.css">

<link href="https://fonts.googleapis.com/css?family=Arimo:700|Cabin+Condensed|Dosis:700|IBM+Plex+Sans+Condensed:500" rel="stylesheet">
		<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="css/header_and_navbar.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/contactstyles.css">

		<!--Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Bootstrap JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

</head>

<body>
<!-- Header image -->
<div class="container-fluid">
	<div class="row">
		<div class="col"><img id="headerImg" src="images/other/vegfestheader.jpg" alt="Rochester VegFest MLK Park Semptember 15th, 2018"></div>
        <div class="col"><img id="headerImgfull" src="images/other/vegfestheader_fullsize.jpg" alt="Rochester VegFest MLK Park Semptember 15th, 2018"></div>
	</div>
</div>

<nav class="navbar">
    <div class="container-fluid navbar-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle toggle-button" data-toggle="collapse" data-target="#navbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
        </div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="navItem"><a class="navLink" href="index.html">HOME</a></li>
				<li class="navItem"><a class="navLink" href="sponsors.html">SPONSORS</a></li>
				<li class="navItem"><a class="navLink navLink-current" href="exhibitors.html">EXHIBITORS</a></li>
				<li class="navItem"><a class="navLink" href="speakers.html">SPEAKERS</a></li>
				<li class="navItem"><a class="navLink" href="volunteer.html">VOLUNTEER</a></li>
				<!-- "Guide" dropdown menu -->
				<li class="navItem dropdown"><a class="navLink dropdown toggle" href="#" id="group-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GUIDE</a>
					<div class="dropdown-menu" aria-labelledby="group-dropdown">
						<a class="dropdown-item" href="https://rocvegfest.org/roc-veg-guide/">ABOUT</a>
						<a class="dropdown-item" href="https://rocvegfest.org/guide/info-for-businesses/">FOR RESTAURANT OWNERS</a>
						<a class="dropdown-item" href="https://rocvegfest.org/guide/flx-vegan-wine-trail/">FLX VEGAN WINE TRAIL</a>
						<a class="dropdown-item" href="https://rocvegfest.org/guide/dining-savings-card/">DINING SAVINGS CARD</a>
					</div>
				</li>
				<li class="navItem"><a class="navLink" href="https://rocvegfest.org/news/">UPDATES</a></li>
				<li class="navItem"><a class="navLink" href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="main">

<h1>CONTACT US!</h1>

<p class="bodytext">You can use the form below to send us an email with your questions or comments. You can also <a class="textlink" href="volunteer.html">join our mailing list,</a><a class="textlink" href="https://www.facebook.com/RocVegFest/?hc_ref=PAGES_TIMELINE" target="_blank">visit us on Facebook,</a> leave a message at ARRoc’s voicemail (585) 445-3599, or write to us at:</p><br>
<p class="bodytext">Rochester VegFest<br>
P.O. Box 20185<br>
Rochester, NY 14602</p>

<div id="contactfield">

<!--Contact form PHP-->
<?php include_once("gbcf-v3/form.php"); ?>

</div>

</div>



<div class="container-fluid" id="footer">
	<div class="row" id="accent">
	</div>

	<div class="row" id="footer-content">	
		<div class="col-xs-12 col-sm-6 footer_section box1">
			<div id="mailingfield">
				<div class="row">
					<div class="col-xs-2">
						<i class="far fa-envelope" aria-hidden="true"></i>
					</div>

					<div class="col-xs-10">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="footerTitle">SUBSCRIBE FOR UPDATES</h3>
							</div>

							<div class="col-xs-12">
								<p id="mailDetail">Join us for latest news and reminders!</p>
							</div>

						</div>
					</div>
				</div>

<!-- Begin MailChimp Signup Form -->
				<div class="row">
					<div id="mc_embed_signup">
						<form action="//rocvegfest.us15.list-manage.com/subscribe/post?u=e7e4acaaab6a1bcbd8ade9f2c&amp;id=64b1bd56bc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    						<div id="mc_embed_signup_scroll">
    								<div class="col-xs-7">
										<div class="mc-field-group">
											<input type="email" value="" name="EMAIL" class="required email footer-email-field" id="mce-EMAIL" placeholder="Email Address">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none">
											</div>
											<div class="response" id="mce-success-response" style="display:none">
											</div>
										</div>    
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    									<div style="position: absolute; left: -5000px;" aria-hidden="true">
    										<input type="text" name="b_e7e4acaaab6a1bcbd8ade9f2c_64b1bd56bc" tabindex="-1" value="">
    									</div>
    								</div>
    								<div class="col-xs-4">
    									<div class="clear">
    										<input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button subscribe">
    									</div>
    								</div>
    						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<!--End mc_embed_signup-->



<!--Social Media-->
<div class="row">
		<div class="col-xs-6 col-sm-4  footer_section box2 socialmedia">
			
				<h3 class="footerTitle socialTitle">FOLLOW US ONLINE!</h3>
					<div class="col-xs-12">
						<div class="row">
							<div id="socialbox">
								<a id="fb" href="https://www.facebook.com/RocVegFest/?hc_ref=PAGES_TIMELINE" target="_blank">
									<i class="fab fa-facebook"></i>
								</a>

								
								<a id="insta" href="https://www.instagram.com/rochestervegfest/?hl=en" target="_blank">
									<i class="fa-inverse fab fa-instagram"></i>
								</a>
								
							
								<a id="twitter" href="https://twitter.com/RocVegFest" target="_blank">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
			</div>
		

		<div class="col-xs-6 col-sm-2 footer_section box3">

					<a href="https://arroc.org" target="blank">
						<img id="arroc" src="images/other/arroc_clr.png" alt="ARroc logo">
					</a>
<a href="https://rochesterveg.org/" target="blank">
					<img id="ravs" src="images/other/ravs_clr.png" alt="RAVS logo">
					</a>

		</div>

	</div>
	</div>



	<div class="row" id="anchor"> 
		<div class="left">
			<a class="anchorlink" href="sitemap.html">SITE MAP</a> 
			&#124; 
			<a class="anchorlink" href="contact.html">CONTACT US</a> 
			&#124; 
			<a class="anchorlink" href="https://www.facebook.com/leanne.morango" target="_blank">WEB DESIGN BY LEANNE MORANGO</a>
		</div>
		<div class="right">
			<a class="anchorlink" href="http://arroc.org/" target="_blank">ARRoc</a> and <a class="anchorlink" href="https://rochesterveg.org/" target="_blank">RAVS</a> are both 501(c)3 charitable nonprofits.
		</div>
	</div>
</div>
</body>
</html>
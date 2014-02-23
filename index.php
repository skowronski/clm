<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'inquiries@cheekylittlemonkey.com';
		$body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'From: CLM Contact Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <meta name="author" content="Anton Skowronski">
	<meta name="description" content="A Dallas based Web Designer providing design services for responsive websites, e-commerce sites, blog themes, banner ads, landing pages and email campaigns.">
	<meta name="keywords" content="dallas web designer, web design dallas, freelance web designer, responsive design, e-commerce, blog theme, banner ads, email, flash, webdesign, Dallas, TX">
	<meta name="google-site-verification" content="ocwmOa22TucOwLUBEMBTrX8p10oNct6u5LUv7B6cs-Q" />
    <title>Web Designer for hire in Dallas, TX.</title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="assets/images/ico/favicon.png">
    
    <script src="assets/js/bootstrap-contact.js" type="text/javascript"></script>                              
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="assets/style/bootstrap.css" type="text/css" />
    
    <!-- WEB FONTS -->
    <script type="text/javascript" src="//use.typekit.net/klp6jtu.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	

</head>
<body>
    <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <div class="nav-logo"><img src="assets/images/logo2.png" alt="Responsive Web Design Dallas Texas"></div>
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="#page-welcome">home</a></li>
                        <li><a href="#page-work">work</a></li>
                        <li><a href="#page-services">capabilities</a></li>
                        <li><a href="#page-about">about</a></li>
                        <li><a href="#page-contact">hire me</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    
                    <div class="social-icons sicon-white hover-big pull-right">
                        <a href="http://www.facebook.com/anton.skowronski" class="sicon-facebook"><i>facebook</i></a>
                        <a href="http://twitter.com/skowronski" class="sicon-twitter"><i>twitter</i></a>
                        <a href="http://www.linkedin.com/in/badass" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <a href="http://www.flikr.com/photos/badass" class="sicon-flickr"><i>flikr</i></a>
                        <a href="https://github.com/skowronski" class="sicon-github"><i>github</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
   
	<?php include("welcome.php"); ?>
	<?php include("work.php"); ?>
	<?php include("services.php"); ?>
    <?php include("about.php"); ?>
    <?php include("contact.php"); ?>
	<?php include("footer.php"); ?>
    <!-- JQUERY -->
    <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    
    <!-- TWITTER BOOTSTRAP -->
    <script src="assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="assets/js/bootstrap/html5shiv.js"></script>
    <![endif]-->
    
    <!-- PLUGINS -->
    <script src="assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.centralized.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.fixedonlater.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.hashloader.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.nav.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.parallax-1.1.3.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
    
    <!-- INITIALIZE -->
    <script src="assets/js/application/application.min.js" type="text/javascript"></script>
    
    
<?php include("analytics.php"); ?>

</body>
</html>

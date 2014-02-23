    <div class="pages white paralax page-welcome" id="page-welcome">
        <div class="overlay"></div>
        <div class="centralized">
            <div class="container">

                    
               <?php if(isset($hasError)) { //If errors are found ?>
					  <div class="span12 center">
					  <p class="alert alert-danger">Message didn't send. <a href="#page-contact">Click here to check</a> if you've filled all the fields with valid information and try again. Thank you.</p>
					  </div>
					<?php } ?>
					
					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
					  <div class="span12 center">
					  <div class="alert alert-success">
					    <p><strong>Message Successfully Sent!</strong></p>
					    <p>Thank you, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
					  </div>
					  </div>
					<?php } ?>

                <div class="row-fluid">
                 	<div class="span4 logo">
                   		<img src="assets/images/logo_big.png" alt="Freelance Web Designer Dallas Texas"/>
                    
                    </div>
                    <div class="span7 offset1 welcome-messages">
                    	<h1>Welcome to my portfolio.</h1>
                    	<p>I am a Web Designer in Dallas, TX. From concept to inception, I can provide user-centric website design that is visually compelling yet doesn't neglect usability.  I can adhere to tight deadlines with minimal preparation and still deliver a quality product. </p> 
	                    <div class="social-icons sicon-white hover-big ">
	                            <a href="#page-contact" class="sicon-mail"><i>email</i></a>
	                            <a href="http://www.facebook.com/anton.skowronski" class="sicon-facebook"><i>facebook</i></a>
	                            <a href="http://twitter.com/skowronski" class="sicon-twitter"><i>twitter</i></a>
	                            <a href="http://www.linkedin.com/in/badass" class="sicon-linkedin"><i>LinkedIn</i></a>
	                            <a href="http://www.flikr.com/photos/badass" class="sicon-flickr"><i>flikr</i></a>
	                        	<a href="https://github.com/skowronski" class="sicon-github"><i>github</i></a>
	                        </div>
	
	                    </div>

                    </div>
				</div>
				<div class="row-fluid scrollmore"><a href="#page-work"><img src="assets/images/pages/welcome/scrolltosee.png" alt="parallax web design"/></a></div>
            </div>
        </div>
    </div>
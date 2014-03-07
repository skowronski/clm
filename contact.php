<div class="pages black-bg white page-contact" id="page-contact">
    <div class="container">
        <!-- Header -->
        <header>
            <h4 class="line-divider">contact</h4>
            <div class="heading"><img src="assets/images/pages/contact/headers_contact.png" alt="Hire Freelance Web Designer"/></div>
            <div class="row">
                <div class="span8 offset2">
                    <p>
                   	Are you looking for a full-time web designer? Download my <a href="http://www.cheekylittlemonkey.com/Antons_Resume.pdf"  >resume</a>, check out what people <a href="http://www.linkedin.com/in/badass"  >have said about me</a>, and drop me line. If I seem like a good fit for your team then here are some options to get a hold of me. I look forward to hearing from you.
                    </p>
                </div>
            </div>
        </header>
        <!-- End Header -->
        
        <article>
            <div class="row-fluid">
                <!-- Contact form -->
                <div class="span6">
                    <h5>Let me know what I can do for you.</h5>
                    
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<input type="text" name="contactname" id="contactname" class="form-control required span12" placeholder="Name" role="input" aria-required="true">
						<div class="company"><input type="text" name="company" id="company" class="form-control required span12" placeholder="Company Name" role="input"></div>
						<input type="text" name="email" id="email" class="span12 form-control required email" name="email" placeholder="Email" role="input" aria-required="true">
						<textarea rows="10" name="message" id="message" class="span12 form-control required" role="textbox" aria-required="true"placeholder="What can we do for you."></textarea>
						<button type="submit" name="submit" id="submitButton" class="btn btn-primary">Send Message</button>
					</form>
					
                </div>
                <!-- End Contact form -->
                <!-- Contact information -->
                <div class="span5 offset1">
                    <h5>availability</h5>
                  	<div class="media">
                        <div class="social-icons sicon-white pull-left">
                            <strong>Yes</strong>
                        </div> 
                        <div class="media-body smallFontBy08">
                           full-time employment
                        </div>
                    </div>                      
                    <div class="media">
                        <div class="social-icons sicon-white pull-left">
                            <strong>Yes</strong>
                        </div> 
                        <div class="media-body smallFontBy08">
                           freelance projects
                        </div>
                    </div>
                    <div class="media">
                        <div class="social-icons sicon-white pull-left">
                            <a href="Antons_Resume.pdf" class="sicon-pdf"><i>Resume</i></a>
                        </div> 
                        <div class="media-body smallFontBy08">
                            <a href="Antons_Resume.pdf">download my resume</a>
                        </div>
                    </div>

                    <h5>location</h5>
                    
                    <div class="media">
                        <div class="social-icons sicon-white pull-left">
                            <a href="#page-contact" class="sicon-place"><i>Location</i></a>
                        </div> 
                        <div class="media-body smallFontBy08">
                            Dallas, TX
                        </div>
                    </div>
                    <div class="media">
                        <div class="social-icons sicon-white pull-left">
                            <a href="#page-contact" class="sicon-clock"><i>Time zone</i></a>
                        </div> 
                        <div class="media-body smallFontBy08">
                            CST / GMT -6
                        </div>
                    </div>
                </div>
                <!-- End Contact information -->
            </div>
        </article>
        
    </div>
    <!-- Background map image -->
    <div id="map-image">
        <img src="assets/images/pages/contact/map_bck.jpg" alt="Dallas Interactive Web Designer">
    </div>
</div>
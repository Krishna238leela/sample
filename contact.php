

<!-- Rights--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact Us</title>
    		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="HCC is a guiding light for the Hindu community, fostering traditions, connecting spirits, and uniting through service. Explore our journey from humble beginnings to a thriving community hub." />
<meta name="keywords" content="Hindu Cultural Center, community hub, traditions, service, unity, Hindu community" />
<link rel="canonical" href="https://hinducc.com" />
<link rel="image_src" href="images/socialmedia-image.jpg" />
<meta property="og:title" content="Hindu Community Center"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://hinducc.com" />
<meta property="og:image" content="images/socialmedia-image.jpg"/>
<meta property="og:site_name" content="Hindu Community Center"/>
<meta property="og:description" content="Uniting Communities, Preserving Traditions" />
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" value="@Hindu Community Center" />
<meta property="twitter:url" content="https://hinducc.com" />
<meta property="twitter:title" content="Hindu Community Center"/>
<meta name="twitter:description" content="Uniting Communities, Preserving Traditions" />	
    <?php include("includes/links.php"); ?>
    
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
    <?php include("includes/header.php"); ?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/contact-banner.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
             
              <h1 class="breadcrumbs-custom-title">Contact Us</h1>
              <p>Reach Out, Connect In: Your Journey with HinduCC Starts Here</p>
            </div>
          
          </div>
        </div>
      </section>
      <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
                  <li><a class="link-default" href="tel:1-800-1234-678">1-800-1234-678</a></li>
                
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:info@hinducc.com">info@hinducc.com</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div>Hindu Community Center<br>
595 S Kimball ave<br>Southlake, TX 76092
</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-gray-light">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Reach Out</span></h3>
                  <!-- RD Mailform-->
				  
				               <?php

$email_to ='info@hinducc.com'; //put your email address here
$subject ='HinduCommunity Center'; //put the email sibject line prefix here
$email_from ='donotreply@hinducc.com'; //put the email address that this form will be sent from
$email_from_nice ='HinduCommunity Center'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
	$phone = $_POST['phone']; 
	
    $message = $_POST['message']; 
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "Name: $name\n\n Last Name: $lname\n\n Email Address: $email\n\nPhone Number: $phone\n\n Message: $message ";
           $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;
//$headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_to;

mail($emailTo, $subject, $body, $headers);
$emailSent = true;
	// create email headers
}
?>
    <?php if(isset($emailSent) && $emailSent == true) {   //If email is sent ?>

        <div class="container">
        <div class="row">
         
            <div class="col-md-6 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you,<br>A member of our team will be in touch with you soon</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" id="name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" id="lname" type="text" name="lname" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" id="phone" type="text" name="phone" data-constraints="@PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Your Message</label>
                          <textarea class="form-input" id="message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer"> 
                        <button class="button button-primary button-winona wow slideInRight" type="submit">Send Message</button>
                      </div>
                      
					</div>
                  </form>
				  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5">
              <div class="map">
           
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6144305698313!2d-97.12007381782794!3d32.93478380552266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dd4e8374474b1%3A0xc1aac07e75a36e78!2s595%20S%20Kimball%20Ave%2C%20Southlake%2C%20TX%2076092%2C%20USA!5e0!3m2!1sen!2sin!4v1708413256324!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
              <?php include("includes/footer.php"); ?> 
    </div>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
     <?php include("includes/script.php"); ?>
</html>

<style>
       li.rd-nav-item.contact a {
    color: #ff6600;
}
</style>
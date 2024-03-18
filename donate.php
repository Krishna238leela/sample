

<!-- Rights--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Donate</title>
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
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/donatin-banner.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
            
              <h1 class="breadcrumbs-custom-title">Donate</h1>
              <p>Donate for a Cause, Ignite Change: Your Support, Our Strength</p>
            </div>
            
          </div>
        </div>
      </section>
      <!-- A Few Words About Us-->
   <section class="section section-lg">
        <div class="container">
          <h3 class="text-center">Why Donate to HCC?</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Pricing Minimal-->
              <article class="pricing-minimal wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                
                <p class="pricing-minimal-price">Cultural Preservation</p>
                <div class="pricing-minimal-divider"></div>
                <p>Your donation helps us preserve and promote the rich cultural heritage of the Hindu community. From festivals to educational programs, we aim to pass down traditions to future generations.</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Pricing Minimal-->
              <article class="pricing-minimal wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                
                <p class="pricing-minimal-price">Community Services</p>
                <div class="pricing-minimal-divider"></div>
                <p>We actively engage in various community service initiatives, including emergency shelters for women, back-to-school programs, IT skills training for women on career breaks, and youth development programs. Your contribution directly supports these impactful services.</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Pricing Minimal-->
              <article class="pricing-minimal wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                
                <p class="pricing-minimal-price">Facility Enhancements</p>
                <div class="pricing-minimal-divider"></div>
                <p>To better serve our community, we continually strive to enhance our facilities. Your donations contribute to the maintenance, improvement, and expansion of the Hindu Community Center, creating a welcoming space for all.</p>
              </article>
            </div>
          </div>
        </div>
      </section>
      
      
      
      
      
      <section class="section section-xs">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 ">
             
              <h4 class="offset-top-3">How Your Donation Helps:</h4>
             <p>
                  Supports educational materials for back-to-school programs,
                  Provides essential resources for emergency shelters for women and
                  Contributes to the maintenance and beautification of our community center.
              </p>
              <h4>Ways to Contribute</h4>
              <h5>One-Time Donation:</h5>
              <p>Make a one-time donation today to support our ongoing initiatives. Your immediate contribution helps us address current needs and plan for the future.</p>
              <h5>Monthly Membership:</h5>
              <p>Become a monthly member of the Hindu Community Center. A recurring donation provides a steady source of support for sustained community development.</p>
               <h5>Sponsorship Opportunities:</h5>
              <p>Explore sponsorship options for specific events or programs. Your sponsorship not only benefits the community but also provides visibility for your commitment to our shared values.</p>
              
              
              <!--<div class="group group-middle"><a class="button button-primary button-winona" href="#our-history" data-waypoint-to="#our-history"><div class="content-original">View our History</div><div class="content-dubbed">View our History</div></a><a class="button button-primary-outline button-winona" href="careers.html"><div class="content-original">Join our Team</div><div class="content-dubbed">Join our Team</div></a></div>-->
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"> <img src="images/donate-1.jpg" alt="" width="500" height="499">
            </div>
          </div>
        </div>
      </section>
      
      
      
      
      
      
      
      <!-- Current Job Positions-->
     <section class="section bg-gray-light">
	 <div class="container">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-12 align-self-center container">
            <div class="row">
              <div class="col-lg-12 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Donation Details</span></h3>
                  <!-- RD Mailform-->
				  
				  <?php

$email_to ='info@hinducc.com'; //put your email address here
$subject ='Hindu Community Center'; //put the email sibject line prefix here
$email_from ='donotreply@hinducc.com'; //put the email address that this form will be sent from
$email_from_nice ='Hindu Community Center'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$first_name = $_POST['name'];
	$last_name = $_POST['lname'];
    $email = $_POST['email'];
	$phone = $_POST['phone']; 
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$amount = $_POST['amount'];
	$frequency = $_POST['donatetype'];
	
	
    
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "First Name: $name\n\n Last Name: $lname\n\n Email Address: $email\n\nPhone Number: $phone\n\nAddress: $address\n\nCity: $city\n\nState: $state\n\nCountry: $country\n\nAmount: $amount\n\ndonatetype: $donatetype";
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
				  
				                                     <form class="rd-form rd-mailform" data-form-output="form-output-global"  method="post" action="" novalidate="">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="first_name">First Name</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="name" type="text" name="name" data-constraints="@Required" fdprocessedid="qertgd"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="last_name">Last Name</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="lname" type="text" name="lname" data-constraints="@Required" fdprocessedid="x0yezq"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="email">E-mail</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="email" type="email" name="email" data-constraints="@Email @Required" fdprocessedid="3d57ah"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="phone">Phone</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="phone" type="text" name="phone" data-constraints="@PhoneNumber" fdprocessedid="dimjm"><span class="form-validation"></span>
                        </div>
                      </div>
					  <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="address">Address</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="address" type="text" name="address" data-constraints="@Required" fdprocessedid="dimjm"><span class="form-validation"></span>
                        </div>
                      </div>
					  <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="city">City</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="city" type="text" name="city" data-constraints="@Required" fdprocessedid="dimjm"><span class="form-validation"></span>
                        </div>
                      </div>
					  <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="state">State</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="state" type="text" name="state" data-constraints="@Required" fdprocessedid="dimjm"><span class="form-validation"></span>
                        </div>
                      </div>
					  <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="country">Country</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="country" type="text" name="country" data-constraints="@Required" fdprocessedid="dimjm"><span class="form-validation"></span>
                        </div>
                      </div>
                       <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                          <label class="form-label-outside" for="amount">Amount</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="amount" type="text" name="amount" data-constraints="@Required" fdprocessedid="dimjm" placeholder="$15.00"><span class="form-validation"></span>
                        </div>
                      </div>
					  <div class="col-md-6 wow-outer">
					  <label class="form-label-outside" for="frequency">Frequency</label>
                
                 <select name="donatetype" id="donatetype"  class="form-select form-control">
                 <option value="">Select</option>
      <option value="once">Once</option>

      <option value="weekly">Weekly</option>

  <option value="Monthly">Monthly</option>

      </select>
	  </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer"> 
                        <button class="button button-primary button-winona wow slideInRight" type="submit" fdprocessedid="p0e3q7" style="visibility: visible; animation-name: slideInRight;"><div class="content-original">Donate</div><div class="content-dubbed">Donate</div></button>
                      </div>
                      
					</div>
                  </form>
				  <?php } ?>
				  </div>
				  </div>
				  </div>
             
          
         
          </div>
		   </div>
        </div>
      </section>
      
      <!-- Page Footer-->
          <?php include("includes/footer.php"); ?>  
    </div>
     <?php include("includes/script.php"); ?>
</html>

<style>
       li.rd-nav-item.donate a {
    color: #ff6600;
}
</style>
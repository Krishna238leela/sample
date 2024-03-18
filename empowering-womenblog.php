

<!-- Rights--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Empowering Women</title>
   	 <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
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
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/empoweringwomenbanner-banner.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">News</h6>
              <h1 class="breadcrumbs-custom-title">Empowering Women in Times of Need</h1>
            </div>
           
          </div>
        </div>
      </section>
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <article class="post-creative">
                <h3 class="post-creative-title">Hindu Cultural Center Launches Empowering Women's Initiative</h3>
                <ul class="post-creative-meta">
                  <li><span class="icon mdi mdi-calendar-clock"></span>
                    <time datetime="2019">Oct 9, 2023 </time>
                  </li>
                  <li><span class="icon mdi mdi-tag-multiple"></span><a href="empowering-womenblog.php">News</a></li>
                </ul>
                <h4>Empowering Women in Times of Need:</h4><img src="images/emwomn-fullview.jpg" alt="" width="770" height="458"/>
                <p>The Emergency Shelters for Women initiative is designed to be a beacon of hope for women experiencing crises, offering temporary housing, counseling, and support services. HinduCC recognizes the importance of immediate safety and well-being, and this program is a dedicated effort to address the urgent needs of women in our community.</p>
				<!-- Quote Light-->
                
				<ul class="post-creative-footer">
                  <li>Share this post!</li>
                  <li>
                    <div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a><a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a></div>
                  </li>
                </ul>
              </article>
              
              <div class="section-sm section-bottom-0">
                <h3>Send a Comment</h3>
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
         
            <div class="col-md-8 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you,<br>For Your Response</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                  <div class="row row-10">
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label-outside" for="comment-first-name">First Name</label>
                        <input class="form-input" id="comment-first-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label-outside" for="comment-last-name">Last Name</label>
                        <input class="form-input" id="comment-last-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label-outside" for="comment-email">E-mail</label>
                        <input class="form-input" id="comment-email" type="email" name="email" data-constraints="@Email @Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label-outside" for="comment-phone">Phone</label>
                        <input class="form-input" id="comment-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-wrap">
                        <label class="form-label-outside" for="comment-message">Your Message</label>
                        <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <button class="button button-primary button-winona" type="submit">Submit</button>
                </form>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-4">

<div class="blog-widget">
<h3>Popular Post</h3>
<article class="popular-post">
<a href="community-supportblog.php" class="blog-thumb">
<img src="images/comminity-support.jpg" alt="blog image">
</a>
<div class="info">
<time datetime="2021-04-08">Nov 8, 2023</time>
<h4>
<a href="community-supportblog.php">Backed by Community Support</a>
</h4>
</div>
</article>



</div>


</div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
           <?php include("includes/footer.php"); ?> 
    </div>
   
    <!-- Global Mailform Output-->
     <?php include("includes/script.php"); ?>
</html>

<style>
       li.rd-nav-item.news a {
    color: #ff6600;
}
</style>


<!-- Rights--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Photo Gallery</title>
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
      <?php include("includes/header.php"); ?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/gallery-banner.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Gallery</h6>
              <h1 class="breadcrumbs-custom-title">Photo Gallery</h1>
            </div>
            
          </div>
        </div>
      </section>
      <section class="section section-lg oh">
        <div class="container">
          <!-- Isotope Filters-->
          <div class="isotope-filters isotope-filters-modern">
            <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
            <ul class="isotope-filters-list" id="isotope-filters">
              <li><a class="active" data-isotope-filter="*" data-isotope-group="portfolio" href="#">All Types</a></li>
              <li><a data-isotope-filter="Type 1" data-isotope-group="portfolio" href="#">Community Service </a></li>
              <li><a data-isotope-filter="Type 2" data-isotope-group="portfolio" href="#">Navaratri Garba Night</a></li>
              <li><a data-isotope-filter="Type 3" data-isotope-group="portfolio" href="#">Educational Empowerment</a></li>
            </ul>
          </div>
          <div class="isotope isotope-condensed row hoverdir" data-isotope-layout="masonry" data-isotope-group="portfolio">
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 2" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/navarathrigallery-1.jpg" alt="" width="390" height="576"/>
                
                <div class="thumbnail-classic-dummy"></div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 1" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/communitygallery-1.jpg" alt="" width="390" height="288"/>
                
                <div class="thumbnail-classic-dummy"></div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 2" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/navarathrigallery-3.jpg" alt="" width="390" height="576"/>
             
                <div class="thumbnail-classic-dummy"></div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 2" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/navarathrigallery-2.jpg" alt="" width="390" height="576"/>
                
                <div class="thumbnail-classic-dummy"></div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 3" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/educationgallery-1.jpg" alt="" width="390" height="288"/>
             
                <div class="thumbnail-classic-dummy"></div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item hoverdir-item" data-filter="Type 1" data-hoverdir-target=".thumbnail-classic-caption">
              <!-- Thumbnail Classic--><img class="thumbnail-classic-image" src="images/communitygallery-2.jpg" alt="" width="390" height="288"/>
                
                <div class="thumbnail-classic-dummy"></div>
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
    a.rd-dropdown-link.photo {
    color: #ff6600 !important;
}
</style>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php if ( is_front_page() ) { ?><title> Sweet Fields </title> <?php } else { ?><title>Sweet Fields | <?php the_title(); ?></title><?php } ?>
<meta name="description" content="An organic farm and education center. Our mission is to increase healthy eating and inspire sustainable living. 
We grow organic produce, donate to food banks, combat food insecurity, increase the accessibility of fresh produce in food deserts, and host educational programs for all ages.">
<meta name="msvalidate.01" content="4F2D0AA19C8DC7185AF99CC5C04B2040" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css"/>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83031110-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1616780891960472',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

  <!-- start second navbar --> 
<nav class="navbar" style="text-align:center">
          <div class="pull-left" style="margin-top: 7px">
            <div class="hidden-xs hidden-sm hidden-md">
       <a href="#"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="50px" width="auto"></a>
     </div>
      <div class="hidden-lg  hidden-xs" style="margin-top: 12px">
       <a href="#"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="30px" width="auto"></a>
     </div>

      <div class="hidden-lg hidden-md hidden-sm">
       <a href="#"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="25px" width="auto"></a>
     </div>
      </div>
  <div class="row hidden-lg hidden-md hidden-sm visible-xs">
    <div class="col-xs-6">

  </div>
   <div class="col-xs-6">
        <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
      </div>
    </div>
      <div class="collapse navbar-collapse" id="example-navbar-collapse">
       <div class="collcenter">
  <ul class="nav navbar-nav" style="text-align:center; padding-top: 10px">
    <!--<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a class="dropdown-item" href="#">Mission & Vision</a>
        <br>
        <a class="dropdown-item" href="#">History</a>
        <br>
        <a class="dropdown-item" href="#">Norristown & Montco</a>
        <br>
        <a class="dropdown-item" href="#">Looking Forward</a>
      </div>
    </li>   -->

     <li class="nav-item dropdown">
      <a  style="text-decoration:none" class="nav-link dropdown-toggle" href="#" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fresh Produce<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a style="text-decoration:none" class="dropdown-item" href="#">Weekly Produce Pick-up & Market</a>
        <br>
        <a style="text-decoration:none" class="dropdown-item" href="#">Growing Practices & Farmer</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a style="text-decoration:none" class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">Education + Community</a>
    </li>
    <li class="hidden-lg hidden-md hidden-sm navliks" style="text-align:center">
     <h5 style="color: #2b4a3e; padding-top: 5px">
 <?php
if ( ! is_user_logged_in() ) { // Display WordPress login form: 
  ?>
    <a href="/index.php/login">Login</a> <?php
    echo "|";
     wp_register('<!--','--><a class="navlinks" href="#">Register</a>');
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " OR ";
       wp_register('<!--','--><a class="navlinks" href="#">Your Profile</a>');
}
?>  </h5>
   <a style="color:white; text-decoration:none" href="#" class="btn btn-donate">Donate</a>

 </li>
<!--    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Everyday Sustainability<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a class="dropdown-item" href="#">Clothing Recycling</a>
        <br>
        <a class="dropdown-item" href="#">Fair Trade</a>
        <br>
        <a class="dropdown-item" href="#">Banking Local</a>
      </div>
    </li>-->
  </ul>
</div>
  <div class="pull-right hidden-xs biglogin" style="margin-top: 15px">
              <a style="color:white; text-decoration:none" href="#" class="btn btn-donate btninline">Donate</a>
     <h5>
 <?php
if ( ! is_user_logged_in() ) { // Display WordPress login form: 
  ?>
    <a href="#">Login</a> <?php
    echo "|";
     wp_register('<!--','--><h5 style="font-size: 14pt; display: inline; color: #2b4a3e"><a href="#">Register</a></h5>');
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " | ";
       wp_register('<!--','--><a href="#">Your Profile</a>');
}
?>  </h5>
</div>
</div>



</nav>


<style>
.slick-prev:before { content: "←"; color: #2b4a3e;}
[dir="rtl"] .slick-prev:before { content: "→";  color: #2b4a3e;}

.slick-next:before { content: "→"; color: #2b4a3e;}
[dir="rtl"] .slick-next:before { content: "←";  color: #2b4a3e;}

.aligncenter{
    margin: 0 auto;
}

/* Carousel */
/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
  text-align: left;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: transparent;
}
.carousel-inner > .item > img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  height: 500px;
}


.carousel-control.right {
background-image: none;
}

.carousel-control.left {
background-image: none;
}

.carousel-control:hover{
    color: #2b4a3e;
}
</style>



<!-- video large -->
<!--
*********************************************
*********************************************
-->
<div class="hidden-sm hidden-xs vid-album" id="vidissue">
        <div class="filter"></div>


        <div style="position:absolute; right: 20px; top: 140px; z-index: 99">
          <img src="<?php bloginfo('template_directory'); ?>/images/snap-badge.png" width="150px" height="auto">  
        </div>
        <div style="position:absolute; z-index: 98; background-color: rgba(255,255,255,.8); text-align:center; border-radius: 7; width: 400px; right: 50px; top: 250px; padding-bottom: 30px">
         <h1> Our Mission </h1>
         <h4 style="font-style:bold;">is to lower barriers to healthy eating by providing educational content and fresh produce for all.  </h4>
                    <a style="color:white; text-decoration:none" href="#" class="btn btn-donate donate-large" >Donate</a>
     </div>

        <video preload="auto" autoplay loop class="fillWidth" poster="<?php bloginfo('template_directory'); ?>/images/DSC_0007.JPG">
         <source src="<?php bloginfo('template_directory'); ?>/MP4/sweet-fields-homepage.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
</div>


<!-- video small -->
<!--
*********************************************
*********************************************
-->

<div class="hidden-md hidden-lg img-album" style="position: relative">

         <div style="top: 50px; position: absolute; width: 300px; z-index: 99; background-color: rgba(255,255,255,.8); text-align:center; border-radius: 7; left: 0; right: 0; margin-left: auto; margin-right: auto;">
         <h1 style="font-size: 18pt"> Our Mission </h1>
         <p style="font-size: 14pt">is to lower barriers to healthy eating by providing educational content and fresh produce for all. </p>
                   <a style="color:white; text-decoration:none" href="#" class="btn btn-donate">Donate</a>
                    <div style="height: 25px"></div>
         </div>


<img src="<?php bloginfo('template_directory'); ?>/images/DSC_0007.JPG">
</div>



<!-- SPONSORS -->
<!--
*********************************************
*********************************************
-->

<div class="row hidden-xs " style="text-align:center">
    <h1> Supporters </h1>
<div class="container" style="text-align:center">
<div class="blog-class" style="height:300px; text-align:center">

<div>
    <a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/fppa.png" /></a>
<h4>Farm Park Preservation Association (FPPA)</h4>
</div>
<!--
<div>
<a href="http://www.farmpark.org/"><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/newmansown.jpg" /></a>
<h4>Net Impact/Newman's Own</h4>
</div>
-->
<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/paipl.png" /></a>
<h4>Pennsylvania Interfaith Power &amp; Light</h4>
</div>

<!--
<div>
<img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/mc3logo.jpg" />
<h4>Montgomery County Community College</h4>
</div>
-->

<div>
<img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/SD-Logo-Retina-small2.png" />
<h4>Seiler + Drury Architecture</h4>
</div>

<div>
    <img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/t-and-m-assosciates.png"/>
<h4>T&amp;M Associates</h4>
</div>

<div>
<img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/hbfrazer.png" />
<h4>H. B. Frazer Company</h4>
</div>

<div>
    <img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/permaculture-education-center.png"/>
<h4>Permaculture Education</h4>
</div>
<!--
<div>
<a href="https://pennstatelaw.psu.edu/faculty/pifer" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/psu-dickinson.png" /></a>
<h4>Penn State Dickinson School of Law</h4>
</div>
-->

<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/colony-logo.png" /></a>
<h4>Colony Hardware</h4>
</div>

<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/dripdepot.png" /></a>
<h4>Drip Depot</h4>
</div>

<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/dripworks.png" /></a>
<h4>DripWorks</h4>
</div>

<!--
<div>
<a href="http://www.uhaul.com/" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/uhaul.png" /></a>
<h4>UHaul</h4>
</div>
-->
<div>
    <img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/chelsea-green.png"/>
<h4>Chelsea Green Publishing</h4>
</div>

<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/focusmedia.JPG" /></a>
<h4>Focus Media Services</h4>
</div>

<div>
<a href="#" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/peacefulvalley.jpg" /></a>
<h4>Peaceful Valley Farm Supply</h4>
</div>
<!--
<div>
<a href="http://www.einstein.edu/" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/einstein.png" /></a>
<h4>Einstein Healthcare Network</h4>
</div>

<div>
<a href="http://www.cadcom.org/" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/cadcom.png" /></a>
<h4>CADCOM</h4>
</div>

<div>
<a href="http://www.cssphiladelphia.org/" ><img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/images/supporters/catholic.png" /></a>
<h4>Catholic Social Services</h4>
</div>
-->
</div>
 </div>
</div> <!-- row -->

<!-- MARATHON -->
<!--
*********************************************
*********************************************
-->
<div class="row hidden-xs">
    <div style="position:relative">
<div style="position:absolute; bottom: 17px; right: 50px;">
<a href="#" class="btn btn-static" >Register</a>
</div>
<img src="https://sweetfields.org/wp-content/uploads/2017/03/Website-Front-Page-Banner-1.png" width="100%" height="auto">
</div>
</div>


<div class="row hidden-lg hidden-md hidden-sm" style="background-color: #5c9a89; text-align:center" >
   <div style="height: 10px"></div>
     <div style="margin: 0 auto">
        <img src="<?php bloginfo('template_directory'); ?>/images/icons/calendar.png" width="150px" height="auto">
        <div class="container">
<h3 style="color:white"> Lettuce Run for Sweet Fields</h3>
<h4> Sunday, April 2nd at 9am </h4>
<h4> Meet @ Sweet Fields </h4>
<a href="#" class="btn btn-blue" >Register</a>
 <div style="height: 10px"></div>

</div>
 </div>
</div>


<!-- WISH LIST -->
<!--
*********************************************
*********************************************
-->
<div class="row hidden-xs">
    <div style="position:relative; text-align: center">


<!-- large -->
<div class="hidden-md hidden-sm hidden-xs">
    <div style="position:absolute; top: 50px; left: 150px">
    <h1 style="font-size: 72pt"> see our wish list </h1>
    <h5 style="font-size: 36pt; color: 5c9a89">find out about our current needs <br>and how you can help</h5>
 <div style="height: 50px"></div> 
 <a style="color: #2b4a3e; text-decoration:none" href="#" class="btn btn-static-large" type="submit">see the list</a>
</div>
</div>

<!-- medium & small -->
<div class="hidden-lg hidden-xs">
    <div style="position:absolute; top: 5px; left: 75px">
    <h1 style="font-size: 36pt"> see our wish list </h1>
    <h5 style="font-size: 24pt; color: 5c9a89">find out about our current needs <br>and how you can help</h5>
 <div style="height: 20px"></div> 
 <a style="color: #2b4a3e; text-decoration:none" href="#" class="btn btn-static" type="submit">see the list</a>
</div>
</div>

<img src="<?php bloginfo('template_directory'); ?>/images/wishlist.png" width="100%" height="auto">
</div>
</div>

<!-- extra small screens -->
<div class="row hidden-lg hidden-md hidden-sm" style="background-color: #2b4a3e; text-align:center">
    <div style="height: 10px"></div>
      <div style="margin: 0 auto;">
        <img src="<?php bloginfo('template_directory'); ?>/images/icons/gift.png" width="150px" height="auto">
<div class="container">
    <h3 style="color:#93cb79; font-style:bold"> see our wish list </h3>
<h4 style="color:white"> find out about our current needs and how you can help </h4>
 <a style="color: #2b4a3e" href="#" class="btn btn-static" type="submit">see the list</a>
 <div style="height: 10px"></div>
</div>
</div>
</div>



<!-- carousel -->
<!--
*********************************************
*********************************************
-->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel" style="margin-top: 20px; ">
      <div class="hidden-xs hidden-sm" style="margin-left: 50px">
<h1> News </h1>
</div>
      <div class="carousel-inner" role="listbox">
<?php 
   $the_query = new WP_Query(array(
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
?>

        <div class="item active">
          <img class="first-slide" src="<?php the_post_thumbnail_url( $size = 'large');?>" alt="First slide" width="auto">
          <div class="container">
            <div class="carousel-caption" style="text-align:center; background-color: rgba(43, 74, 62,.85); border-radius: 15px">
              <h1 style="color: white"><?php the_title();?></h1>
               <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
              <p ><?php the_excerpt();?></p>
              <h4><a class="bloglink"  href="#">Read more...</a></h4>
            </div>
          </div>
        </div>

        <?php 
   endwhile; 
   wp_reset_postdata();
  ?>

  <?php 
   $the_query = new WP_Query(array(
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
        <div class="item">
            <img src="<?php the_post_thumbnail_url( $size = 'large');?>" alt="Second slide" width="auto">

          <div class="container">
            <div class="carousel-caption" style="text-align:center; background-color: rgba(43, 74, 62,.85); border-radius: 15px">
              <h1  style="color: white"><?php the_title();?></h1>
               <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
              <p><?php the_excerpt();?></p>
              <h4><a class="bloglink" href="#">Read more...</a></h4>
            </div>
      </div>
        </div>
<?php 
   endwhile; 
   wp_reset_postdata();
  ?>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div><!-- /.carousel -->

<!-- for extra small screens -->
<div class="row hidden-lg hidden-md" style="background-color: #93cb79; text-align:center">
    <div style="height: 10px"></div>
      <div style="margin: 0 auto;">
        <img src="<?php bloginfo('template_directory'); ?>/images/icons/text-lines.png" width="150px" height="auto">
<div class="container">
    <h1> News</h1>
<h3> Get the latest happenings, as well as fascinating content about sustainable agriculture, nutrition, and gardening.</h3>
     <a style="color: #2b4a3e" href="#" class="btn btn-static" type="submit">read our blog</a>
      <div style="height: 10px"></div>
</div>
</div>
</div>

<div style="height: 30px"></div>

<?php get_footer(); ?>

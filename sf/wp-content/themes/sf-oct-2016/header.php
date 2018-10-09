<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if ( is_front_page() ) { ?><title> Sweet Fields </title> <?php } else { ?><title>Sweet Fields | <?php the_title(); ?></title><?php } ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
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
<link rel="icon" 
      href="images/favicon.ico">
<?php wp_head(); ?>
</head>
<body>



  <!-- start second navbar --> 
<nav class="navbar" style="text-align:center">
          <div class="pull-left" style="margin-top: 7px">
            <div class="hidden-xs hidden-sm hidden-md">
       <a href="/index.php/"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="50px" width="auto"></a>
     </div>
      <div class="hidden-lg  hidden-xs" style="margin-top: 12px">
       <a href="/index.php/"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="30px" width="auto"></a>
     </div>

      <div class="hidden-lg hidden-md hidden-sm">
       <a href="/index.php/"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-lato-bold.png" height="25px" width="auto"></a>
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
      <a style="text-decoration:none" class="nav-link dropdown-toggle" href="http://www.sweetfields.org" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fresh Produce<span class="caret"></span></a>
      <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
        <a style="text-decoration:none" class="dropdown-item" href="/index.php/weeklybox">Weekly Produce Pick-up & Market</a>
        <br>
        <a style="text-decoration:none" class="dropdown-item" href="/index.php/growing-practices">Growing Practices & Farmer</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a style="text-decoration:none" class="nav-link" href="http:/www.sweetfields.org/education" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Education + Community</a>
    </li>
    <li class="hidden-lg hidden-md hidden-sm navliks" style="text-align:center">
     <h5 style="color: #2b4a3e; padding-top: 5px">
 <?php
if ( ! is_user_logged_in() ) { // Display WordPress login form: 
  ?>
    <a href="/index.php/login">Login</a> <?php
    echo "|";
     wp_register('<!--','--><a class="navlinks" href="/index.php/register">Register</a>');
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " OR ";
       wp_register('<!--','--><a class="navlinks" href="/index.php/profile">Your Profile</a>');
}
?>  </h5>
 <a style="color: white; text-decoration: none" href="http://www.sweetfields.org/donate" class="btn btn-donate">DONATE</a>

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
   <a  style="color: white; text-decoration: none" href="http://www.sweetfields.org/donate" class="btn btn-donate btninline">Donate</a>
     <h5>
 <?php
if ( ! is_user_logged_in() ) { // Display WordPress login form: 
  ?>
    <a href="/index.php/login">Login</a> <?php
    echo "|";
     wp_register('<!--','--><h5 style="font-size: 14pt; display: inline; color: #2b4a3e"><a href="/index.php/register">Register</a></h5>');
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " | ";
       wp_register('<!--','--><a href="/index.php/profile">Your Profile</a>');
}
?>  </h5>
</div>
</div>



</nav>


  <div style="height:2px; background-color: #2b4a3e;"></div>
  <div style="height:2px; background-color: transparent"></div>
  <div style="height:2px; background-color: #2b4a3e;"></div>
  <div style="height: 50px"></div>
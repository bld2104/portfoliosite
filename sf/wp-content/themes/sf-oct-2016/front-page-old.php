<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @link http://themes.required.ch/?p=606
 */

get_header(); ?>
<style>
       .button {
    position:absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
margin-top: auto;
top: 0;
bottom: 50px;
    width:500px;
    height:100px;
    z-index:2;
}

       .button2 {
    position:absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
margin-top: auto;
top: 0;
bottom: 5px;
    width:250px;
    height:50px;
    z-index:2;
}



.btn-txt {
    font-size: 36pt;
    color: white;
    
}

.btn-txt2 {
    font-size: 14pt;
    color: white;
    
}

.topm{
  margin-top: 40px
}

.textoverlay {
position: absolute;
z-index:100;
margin-left: 200px;
margin-top: 100px;
}

.textoverlay2 {
position: absolute;
z-index:100;
width:100%;
}
 </style>
</div>

<div id="wrap">
<div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="<?php bloginfo('template_directory'); ?>/Walk-The-Dog.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="WEBM/Walk-The-Dog.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="images/icons/badge" alt="">
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
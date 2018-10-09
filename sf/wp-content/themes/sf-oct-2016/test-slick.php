<?php
/**
 Template Name: test-slick
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

.classbackground{
  color:black;
  background-color:black;
  margin-left: 20px; 
  margin-right: 20px;
  text-align:center;
}
 </style>


</div>
<div class="textoverlay hidden-xs">
<h1>Making healthy living easy.</h1>
<h2 style="font-style: italic; color: white;">CSA shares will be available soon.</h2>
<h2 style="font-style: italic; color: white;">Sustainability events are coming soon too.</h2>
</div>
<div class="textoverlay2 hidden-lg hidden-md hidden-sm" style="text-align: center;">
<h3 style="color: black;">Making healthy living easy.</h3>
<h4 style="font-style: italic; color: white;">CSA shares will be available soon.</h4>
<h5 style="font-style: italic; color: white;">Sustainability events are coming soon too.</h5>
</div>
<img class="img-responsive imagelay" src="<?php bloginfo('template_directory'); ?>/images/vegetables1920x1080.jpeg" width="100%" height="100%" />
<div id="main" class="main"></div>






<script>
$(document).ready(function() {

    $('.blog-class').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                // centerMode: true,

            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                infinite: true,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });


});
</script>

<?php get_footer(); ?>
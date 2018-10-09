<?php
/**
 Template Name: slick-test
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

.aligncenter{
    margin: 0 auto;
}

.landing{
    height:100%;
}

#smallstretch{
height:100%;
}

.slick-prev:before { content: "←"; color: black;}
[dir="rtl"] .slick-prev:before { content: "→";  color: black;}

.slick-next:before { content: "→"; color: black;}
[dir="rtl"] .slick-next:before { content: "←";  color: black;}
 </style>


</div>
<div id="wrap">
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
<div class="hidden-xs">
<img class="img-responsive imagelay" src="<?php bloginfo('template_directory'); ?>/images/vegetables1920x1080.jpeg" width="100%" height="100%" />
</div>
<div class="hidden-lg hidden-md hidden-sm">

<img src="<?php bloginfo('template_directory'); ?>/images/vegetables1920x1080.jpeg">

</div>

<div id="main" class="main"></div>
<div class="container hidden-xs">
    <h2> Click the arrows to see our blog posts </h2>
</div>
<div class="container hidden-xs">
<div class="blog-class" style="height:250px; text-align:center">
<?php $my_query = new WP_Query('posts_per_page=50');
        while ($my_query->have_posts()) : $my_query->the_post();
            ?>
<div>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220), array('class' => 'aligncenter') ); ?></a>
   <h3><?php the_title(); ?></h3>
</div>
<?php endwhile; ?>


</div>
</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
   <script>
$(document).ready(function() {

    $('.blog-class').slick({
        // dots: true,
        infinite: true,

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
                dots: false,
                infinite: true,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });


});
</script>

<?php get_footer(); ?>
<?php get_header(); ?>

<div id="main">
<div id="content" style="padding-left: 30px; padding-right: 30px;">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">
                <h2 style="color:#98d097"><a style="color:#98d097" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
            <div class="pull-left" style="padding-right:20px">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
</div>
                        <?php the_excerpt(__(' Continue reading »','example')); ?>
                
                </div> <!--row-->
               <div style="text-align:center">
                <img src="<?php bloginfo('template_directory'); ?>/images/blogdivider.png">
</div>
            </div><!-- /#post-<?php get_the_ID(); ?> -->

<hr> <?php endwhile; ?>

<?php
        else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>



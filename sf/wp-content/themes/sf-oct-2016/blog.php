<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<div id="wrap">
<div id="main" class="main"></div>
<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
        	<div class="pull-left" style="padding-right:20px">
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
</div>
                		<?php the_excerpt(__(' Continue reading »','example')); ?>
                
                </div> <!--row-->
<h2 style="text-align:center">_______________________</h2>
            </div><!-- /#post-<?php get_the_ID(); ?> -->

        <?php endwhile; ?>

		<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
		</div><!-- /.navigation -->

	<?php else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; wp_reset_query();?>

</div>
</div>
<?php get_footer(); ?>
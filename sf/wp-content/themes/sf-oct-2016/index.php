<?php get_header(); ?>
<div id="wrap">
<div id="main" class="main"></div>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(__('(more...)')); ?>
	</div>
	<?php if(is_single() ){?>
<div class="pull-right" style="text-align:right">
<img src="<?php bloginfo('template_directory'); ?>/images/blogdivider.png">
<p> Previous Post: <?php if(!empty(get_previous_post())){previous_post_link();} else { echo "None"; } ?>  | 
	Next Post:  <?php if(!empty( get_next_post() )) { next_post_link(); } else { echo "None yet!"; } ?></p>
<br>
<p> Back to <a href="index.php/blog">blog >></a></p>
</div>
<?php } ?>
	
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

<div id="delimiter">
</div>
<?php get_footer(); ?>
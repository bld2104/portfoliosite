<php get_header(); ?>

    <div id="content container">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>

        <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
            <div class="pull-left" style="padding-right:20px">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
</div>
                        <?php the_excerpt(__(' Continue reading »','example')); ?>
                
                </div> <!--row-->
<h2 style="text-align:center">~~~~~~~</h2>

            </div><!-- /#post-<?php get_the_ID(); ?> -->

        <?php endwhile; ?>

       

    <?php else: ?>

        <div id="post-404" class="noposts">

            <p><?php _e('None found.','example'); ?></p>

        </div><!-- /#post-404 -->

    <?php endif; wp_reset_query(); ?>

    </div><!-- /#content -->

<?php get_footer(); ?>

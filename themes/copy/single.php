<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marinate
 */
get_header(); 

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
 	$marinate_col_class = "col-lg-8 col-md-8 col-xs-12 col-sm-12 col-lg-offset-2 col-md-offset-2";
}
else {
 	$marinate_col_class = "col-lg-9 col-md-9 col-xs-12 col-sm-12";
}

?>

<div id="content" class="site-content">

			<?php  if ( has_post_thumbnail() ) {?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('marinate-single', array('class' => 'img-responsive')); ?>
                </div>
            <?php } ?>			


	<div class="container">
		<div class="row">

			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-wrapper'); ?>>               
			<?php while ( have_posts() ) : the_post(); //main loop ?>                        
            <div class="<?php echo esc_attr($marinate_col_class); ?>">            
				<div id="primary" class="content-area">
					<main id="main" class="site-main">


					<?php 
					get_template_part( 'template-parts/content', 'single' );                     
					
					do_action('marinate_author_bio');
                    
					if ( comments_open() || get_comments_number() ) :
                    comments_template();
                    endif; 
					?> 


					</main><!-- #main -->
				</div><!-- #primary -->
	    	</div><!-- .col-md-8 -->
			<?php endwhile; // End of the loop. ?>                        
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <?php get_sidebar(); ?>
            </div>
        </article><!-- #post-<?php the_ID(); ?> -->                                                		        
    	</div><!-- .row -->
  </div><!-- .container -->
</div><!-- #content -->

        
<?php get_footer(); ?>
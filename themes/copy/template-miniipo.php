<?php
   /**
    * Template Name: MiniIPO
    *
    * Template for displaying a page without sidebar even if a sidebar widget is published
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
    *
    * @package marinate
    */
get_header(); 
?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">

			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-wrapper'); ?>>               
			<?php while ( have_posts() ) : the_post(); //main loop ?>            
			<?php  if ( has_post_thumbnail() ) {?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('marinate-single', array('class' => 'img-responsive')); ?>
                </div>
            <?php } ?>
			
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 col-lg-offset-2 col-md-offset-2">            
				<div id="primary" class="content-area">
					<main id="main" class="site-main">


					<?php 
					get_template_part( 'template-parts/content', 'page' );                     
                    
					if ( comments_open() || get_comments_number() ) :
                    comments_template();
                    endif; 
					?> 


					</main><!-- #main -->
				</div><!-- #primary -->
	    	</div><!-- .col-md-8 -->
			<?php endwhile; // End of the loop. ?>                        
        </article><!-- #post-<?php the_ID(); ?> -->     		
        
    	</div><!-- .row -->
  </div><!-- .container -->
<?php query_posts( 'cat=3' );
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		?><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br /><?php
	endwhile;
endif;
wp_reset_query();
			 ?>
</div><!-- #content -->

        
<?php  get_footer(); ?>
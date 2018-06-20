<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marinate
 */

get_header(); 
?>

<?php if ( get_header_image() ) : ?>
	<div class="custom-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
        <section class="blog-section">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    <div style = "text-align: center; margin: auto;">
						
						<video autoplay width = "90%">
    <source src="http://mini-ipo.com/wp-content/uploads/suits-walking.mov" type="video/mp4">
</video>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h1>
							About Our Services
						</h1>
</div><br />
						<article id="post-267" class="post post-267 type-post status-publish format-standard hentry category-uncategorized">
   <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="/trading-shells/" class="post-thumbnail">      <img width="700" height="500" src="http://mini-ipo.com/wp-content/uploads/s10.jpeg" class="img-responsive wp-post-image" alt="" />
      </a>
      <header class="entry-header">
         <h3 class="entry-title"><a href="/trading-shells/">Trading Shells</a></h3>
         <div class="entry-meta">
         </div>
      </header>
   </div>
</article>
<!-- #post-267 -->                                                						
<article id="post-226" class="post post-226 type-post status-publish format-standard hentry category-uncategorized">
   <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="/reverse-mergers/" class="post-thumbnail">      <img width="700" height="500" src="http://mini-ipo.com/wp-content/uploads/s10.jpeg" class="img-responsive wp-post-image" alt="" />
      </a>
      <header class="entry-header">
         <h3 class="entry-title"><a href="/category/reverse-mergers/">Reverse Mergers</a></h3>
         <div class="entry-meta">
         </div>
      </header>
   </div>
</article>
<!-- #post-226 -->                                                						
<article id="post-139" class="post post-139 type-post status-publish format-standard has-post-thumbnail hentry category-reverse-mergers">
   <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="/category/mini-ipo/" class="post-thumbnail">
      <img width="700" height="500" src="http://mini-ipo.com/wp-content/uploads/s10.jpeg" class="img-responsive wp-post-image" alt="" />                                </a>
      <header class="entry-header">
         <h3 class="entry-title"><a href="/category/mini-ipo/">Mini IPOs</a></h3>
         <div class="entry-meta">
         </div>
      </header>
   </div>
</article>
<!-- #post-139 -->                                                
<div class='clearfix'></div>
<div class='clearfix'></div>
          <?php

			//if( have_posts() ) :
			if(1==2 ) :
			$count = 1;
			 /* Start the Loop */
			 while ( have_posts() ) : the_post();
			 get_template_part( 'template-parts/content' );
			if ($count % 3 == 0) {
				echo "<div class='clearfix'></div>";
			}
			$count++;			 
			 endwhile;
			 
			echo "<div class='clearfix'></div>";			 
			 
			$post_args =  array(
				'screen_reader_text' => ' ',
				'prev_text' => __( '<div class="chevronne"><i class="fa fa-chevron-left"></i></div>', 'marinate' ),
				'next_text' => __( '<div class="chevronne"><i class="fa fa-chevron-right"></i></div>', 'marinate' ),
				);
	
				the_posts_pagination( $post_args );        
			 
			else :
			//get_template_part( 'template-parts/content', 'none' );
			endif; 
		
		?>
						<style>
#grid-container{text-align:center;margin:auto;}
.grid-box {float:left;max-width: 22%;margin: 1%;
  
   text-align: center;
   background-color:#000080;
   color:white;
}
.grid.text{font-weight:800;
	line-height:200%;
    text-align: center;

}
</style>
<div id = "grid-container">
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s1.jpg" />
		<div class = "grid-text">
			Advertising Agency
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s9.jpeg" />
		<div class = "grid-text">
			Stock Broker / Dealer
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s4.jpg" />
		<div class = "grid-text">
			PCOAB Auditors
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s5.jpg" />
		<div class = "grid-text">
			Research Analysts
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
	<div class='clearfix'></div>
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s6.jpeg" />
		<div class = "grid-text">
			Market Makers
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s7.jpeg" />
		<div class = "grid-text">
			Transfer Agent
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s8.jpeg" />
		<div class = "grid-text">
			Investor Relations
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s2.jpg" />
		<div class = "grid-text">
			Media Buyer
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
	<div class='clearfix'></div>
<div class = "grid-box">
	<div class = "grid-image">
		<img src = "http://mini-ipo.com/wp-content/uploads/s10.jpeg" />
		<div class = "grid-text">
			Platform Developer
		</div><!-- grid-text -->
	</div><!-- grid-image -->
</div><!--grid-box -->
</div><!-- grid-container -->
						<div class='clearfix'></div>
<?php include ("mork-reply.php");?>
                        
                    </div>
                </div>
            </div>
        </section>
        
<?php get_footer(); ?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
				
            	<div class="home-section-text about-section-text">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content' ); ?>
				<?php endwhile; // End of the loop. ?>
				</div>
				<i class="fas fa-quote-right"></i>
        	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="button-wrapper">					
		<button class="other-phrase-btn" type="button" id="other-phrase-btn">Show Me Another!</button>
	</div>
<?php get_footer(); ?>
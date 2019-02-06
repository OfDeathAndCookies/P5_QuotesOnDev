<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
            	<div class="form-section home-section-text about-section-text">
					<h1 class="oops"><?php echo esc_html( 'Oops!' ); ?></h1>
					<div class="page-content">
						<p class="nothing-found-msg"><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>
						<?php get_search_form(); ?>
					</div>	
				</div>
            	<i class="fas fa-quote-right"></i>
        	</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

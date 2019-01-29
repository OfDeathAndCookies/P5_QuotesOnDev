
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
				
            	<div class="home-section-text about-section-text">
					<!--Get 1 random post-->
					<?php	
						$args= array(
						'post_type' => 'post',
						'orderby'   => 'rand',
						'posts_per_page' => '1', 
						);
						
					$the_query = new WP_Query( $args );?>
					<?php if ( have_posts() ) : ?>
						<?php while ( $the_query->have_posts()) : $the_query->the_post(); ?>
							<?php get_template_part( 'template-parts/content' );?>
						<?php endwhile; ?>
					<?php else : ?>
						<p> No posts found. </p>
					<?php endif; ?>
				</div>
            	<i class="fas fa-quote-right"></i>
        	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="button-wrapper">					
		<button class="other-phrase-btn" type="button" id="other-phrase-btn">Show Me Another!</button>
	</div>
<?php get_footer(); ?>
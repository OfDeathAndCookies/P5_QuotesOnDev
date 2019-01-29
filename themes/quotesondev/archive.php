<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
				<div class="home-section-text about-section-text">
					<?php the_archive_title('<h1 class="debugging-title">' , '</h1>') ?> 
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content' );?>
						<div class="dotted-line"> </div>

					<?php endwhile; ?>	
				</div>
            	<i class="fas fa-quote-right"></i>
			</section>
			<?php qod_numbered_pagination(); ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

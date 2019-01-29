
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
            	<div class="form-section home-section-text about-section-text">
					<form class="submit-a-quote-form">
						<h1 class="about-title">Submit a Quote</h1>
						<p>Author of Quote</p>
						<input type="text" name="author-of-quote" class="space-form">
						<p>Quote</p>
						<input type="text" name="quote" class="space-form2">
						<p>Where did you find this quote (e.g.book name)</p>
						<input type="text" name="source-quote" class="space-form">
						<p>Provide the URL of the quote source, if available</p>
						<input type="url" name="source-quote-url" class="space-form">
					</form>
				</div>
            	<i class="fas fa-quote-right"></i>
        	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="button-wrapper">					
	<button class="submit-phrase-btn" type="button" id="submit-phrase-btn">Submit Quote</button>
	</div>
<?php get_footer(); ?>
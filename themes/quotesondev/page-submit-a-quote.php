
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-section">
				<i class="fas fa-quote-left"></i>
            	<div class="form-section home-section-text about-section-text">
					<form class="submit-a-quote-form">
					<h1 class="about-title"> Submit a Quote</h1>

						<?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
							<form action="functions.php" method="post">
								<p>Author of Quote</p>
								<textarea rows="1" name="author-of-quote" id="author" class="space-form"> </textarea>
								<p>Quote</p>
								<textarea rows="3" name="quote" id="author" class="space-form2"> </textarea>
								<p>Where did you find this quote (e.g.book name)</p>
								<textarea rows="1" name="source-quote" id="source-quote" class="space-form"></textarea>
								<p>Provide the URL of the quote source, if available</p>
								<textarea rows="1" name="source-quote-url" id="source-quote-url" class="space-form"> </textarea>
							</form>
						<?php else : ?>
							<p>Sorry, you must be logged in to submit a quote!</p>
							<p><?php echo sprintf( '<a href="%1s"> %2s </a>', esc_url( wp_login_url() ), 'Click here to login.' ); ?></p>
						<?php endif; ?>	 
					</form>
				</div>
            	<i class="fas fa-quote-right"></i>
        	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>
	<div class="button-wrapper">					
		<button class="submit-phrase-btn" type="submit" value="Insert" id="submitNewQuote">Submit Quote</button>
	</div>
	<?php else : ?>
	<p><?php echo "" ?></p>
	<?php endif; ?>	

<?php get_footer(); ?>
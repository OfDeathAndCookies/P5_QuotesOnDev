
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="phrase"><?php the_content(); ?></div>				
		<div>
			<span class="home-title-text" id="author">
				<?php the_title();?>
			</span>
			
			<span class="author-link" id="author-link">

			<?php $sourceUrl = get_post_meta(get_the_ID(), '_qod_quote_source_url', true) ?>
			<?php $source = get_post_meta(get_the_ID(), '_qod_quote_source', true) ?>

			<?php 
			if ($sourceUrl): echo '<a class="source" href=" '.$sourceUrl.' "> '.$source.' </a>'; 
				elseif ($source): echo '<a class="source"> '.$source.' </a>';
			endif?>
			</span>
		</div>

	<div class="entry-content">
	</div><!-- .entry-content -->
</article><!-- #post-## -->

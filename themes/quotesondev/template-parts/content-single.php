
<div id="phrase"><?php the_content(); ?></div>
	<span class="home-title-text" id="author"><?php the_title();?></span>
	<span class="author-link" id="author-link">
		<?php 
		if ($sourceUrl): echo '<a class="source" href=" '.$sourceUrl.' "> '.$source.' </a>'; 
			elseif ($source): echo '<a class="source"> '.$source.' </a>';
			
		endif?>
	</span>

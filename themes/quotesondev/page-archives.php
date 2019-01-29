<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <section class="about-section">
        <i class="fas fa-quote-left"></i>
            <div class="about-section-text">
                <h1 class="about-title">Archives</h1>

                <section class="archives-authors">
                    <h2>Quote Authors</h2>
                    <!-- authors loop-->
                    <?php	
                        $args= array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,);
                        $the_query = new WP_Query( $args );?>
                    <?php if ( have_posts() ) : ?>
                        <ul>
                        <?php while ( $the_query->have_posts()) : $the_query->the_post(); ?>
                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                        <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <p> No authors found. </p>
                    <?php endif; ?>
                </section>

                <section class="archives-categories">
                    <h2>Categories</h2>
                    <ul>
                        <?php wp_list_categories('title_li');?>
                    </ul>
                </section>
                
                <section class="archives-tags">
                    <h2>Tags</h2>
                    <?php wp_tag_cloud( array(
                        'smallest' => 1.25, // size of least used tag
                        'largest'  => 1.25, // size of most used tag
                        'unit'     => 'em', // unit for sizing the tags
                        'number'   => 45, // displays at most 45 tags
                        'orderby'  => 'name', // order tags alphabetically
                        'order'    => 'ASC', // order tags by ascending order
                    ) ); ?>
                </section>

            </div>
            <i class="fas fa-quote-right"></i>
        </section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
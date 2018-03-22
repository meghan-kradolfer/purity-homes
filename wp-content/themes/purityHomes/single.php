<?php get_header(); ?>

<main class="basic">
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

			<?php

				while ( have_posts() ) : the_post();

					get_template_part( 'templates/parts/post/content', get_post_format() );

				endwhile;
			?>

</main>

<?php get_footer();

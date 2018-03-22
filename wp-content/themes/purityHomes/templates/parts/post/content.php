<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('padding-md gray-light'); ?>>

	<div class="container padding-md">
        <div class="col-md-10 col-md-offset-1">
            <?php the_content(); ?>
        </div>
	</div>

</section>


<?php

/* Template Name: Heath Based Living */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>

<main class="basic" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="basic-content">
       <p style="text-align: center;">We provide you with consented house plans from our carefully designed range, all with a true focus on health and sustainable development. Each design and material decision is made with your health as the driver. Not just warm and dry as every home should be, but using natural materials throughout to create a living space that minimises nasty toxins floating in the air, and at the same time create a very high performing home. Efficiency and durability are also core drivers of every Purity Home.</p>
    </section>

</main>
<?php get_footer(); ?>
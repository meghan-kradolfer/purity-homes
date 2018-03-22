
<?php

/* Template Name: Basic */

get_header();
?>

<main  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_sketch.jpg');" class="front-page">
  <section class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_banner1.jpg');">
    <div class="container">
      <div class="row">
        <div class="header">
          <div class="outer-circle">
            <div class="image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_logo_colour.png" alt="Purity Homes" />
            </div>
          </div>
          <h1>Plan | Connect | Audit</h1>
          <h4>Empowering your commitment to health and sustainable development.</h4>

        </div>
      </div>
    </div>
    <a class="banner-tag text-uppercase" href="<?php  bloginfo('url'); ?>/get-started">
      <h4> Get Started Questionnaire <i class="fa fa-angle-double-right" aria-hidden="true"></i></h4>
      <hr style="border-color: white; color: white; background-color: white; width: 100px; margin:0 auto;"/>
    </a>
  </section>

  <section class="padding-lg">
    <div class="container">
      <div class="row about-us-icons ">
          <?php
          $args = array(
              'post_type' => 'post',
              'cat' => 15
          );
          $post_query = new WP_Query($args);

          if($post_query->have_posts() ) {
              while($post_query->have_posts() ) {
                  $post_query->the_post();
                  $icon = null;
                  switch (get_the_title()) {
                      case 'Plan':
                          $icon = "pencil";
                          break;
                      case 'Connect':
                          $icon = "plug";
                          break;
                      case 'Audit':
                          $icon = "check-square-o";
                          break;
                  }

                  ?>
                <div class="col-md-4 text-center col icon-drop">
                  <span class="fa fa-<?php echo $icon ?>" aria-hidden="true"></span>
                  <h4><?php the_title()?></h4>
                  <div class="extended">
                     <?php the_content() ?>
                      <a href="<?php echo esc_url( home_url( '/our-services' ) ); ?>">read more</a>
                  </div>
                  <hr />
                </div>
                  <?php
              }
          }
          ?>
      </div>
    </div>
  </section>

</main>
<script type="text/javascript">
  jQuery(document).ready(function($){
    $('.icon-drop').click(function() {
      if ($(this).hasClass('extend')) {
        $(this).removeClass('extend');
      } else {
        $(this).addClass('extend');
      }

    });
  });
</script>
<?php get_footer(); ?>
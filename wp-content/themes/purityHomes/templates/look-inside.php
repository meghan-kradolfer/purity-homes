
<?php
/* Template Name: Look inside */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="basic floorplan" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>
  <section class="basic-content text-center white">
    <div class="container padding-md">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>

      <div id="floorplan-nav">
        <ul>
          <li data-id="1">
            Terra Lana Insulation
          </li>
          <li data-id="2">
            Magnum Board
          </li>
          <li data-id="3">
            Foreverbreathe™ Paints
          </li>
          <li data-id="4">
            Foreverbreathe™ Oil Coatings
          </li>
          <li data-id="5">
            Foreverbeech Flooring
          </li>
          <li data-id="6">
            LVL Portal Framing Construction
          </li>
          <li data-id="7">
            Foreverbreathe™ Wall System
          </li>
        </ul>
      </div>

      <div id="floorplan-map">
        <img width=1200 height=659 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/interactive_floorplan.jpg" alt="Interactive floorplan, Purity Homes" />

        <svg width="1200" height="659" class="floorplan-sections">

          <polygon id="area_1-0" class="section"
                   points="482,496,102,502,98,179,687,188,706,169,42,159,41,176,86,177,88,518,478,509"
                   data-title="Terra Lana"
                   data-desc="Terra Lana natural wool insulation for floors, walls and ceiling"
                   data-href="http://www.terralana.co.nz/" ></polygon>

          <polygon id="area_2-0" class="section"
                   points="271,323,272,182,564,185,566,325,455,322,452,280,361,279,360,302,355,311,354,324"
                   data-title="Magnum Board"
                   data-desc="Breathable exterior cladding and rigid air barrier and interior lining"
                   data-href="http://www.hardie-thomson.co.nz" ></polygon>
          <polygon id="area_2-1" class="section"
              points="95,177,97,321,262,323,261,267,224,268,226,266,225,210,259,211,259,179"></polygon>
          <polygon id="area_2-2" class="section"
                   points="579,322,579,211,591,186,960,194,836,265,836,278,618,279,617,323"></polygon>
          <polygon id="area_2-3" class="section"
                   points="959,322,958,280,949,282,948,218,960,212,960,208,849,264,882,251,882,279,895,278,895,244,935,225,933,277,941,279,940,323"></polygon>
          <polygon id="area_2-4" class="section"
                   points="101,503,99,348,291,350,294,500,287,500,285,390,269,391,270,487,244,486,238,488,238,501"></polygon>
          <polygon id="area_2-4" class="section"
                   points="307,499,302,346,523,343,525,495,510,494,507,491,507,480,451,481,449,379,399,379,399,484,314,484,311,499"></polygon>
          <polygon id="area_2-5" class="section"
                   points="603,447,615,403,615,447"></polygon>
          <polygon id="area_2-6" class="section"
                   points="821,443,821,346,836,344,838,442"></polygon>
          <polygon id="area_2-7" class="section"
                   points="864,420,864,345,958,342,958,369,952,367,949,449,958,454,959,487,932,476,933,364,913,361,910,467,877,455,878,426"></polygon>
          <polygon id="area_2-8" class="section"
                   points="533,494,543,495,542,385,574,385,575,494,580,494,581,341,533,339"></polygon>

          <polygon id="area_3-0" class="section"
                   points="271,323,272,182,564,185,566,325,455,322,452,280,361,279,360,302,355,311,354,324"
                   data-title="Foreverbreathe™ Paints"
                   data-desc="Breathable exterior and interior paint"
                   data-href="http://www.hardie-thomson.co.nz/" ></polygon>
          <polygon id="area_3-1" class="section"
                   points="95,177,97,321,262,323,261,267,224,268,226,266,225,210,259,211,259,179"></polygon>
          <polygon id="area_3-2" class="section"
                   points="579,322,579,211,591,186,960,194,836,265,836,278,618,279,617,323"></polygon>
          <polygon id="area_3-3" class="section"
                   points="959,322,958,280,949,282,948,218,960,212,960,208,849,264,882,251,882,279,895,278,895,244,935,225,933,277,941,279,940,323"></polygon>
          <polygon id="area_3-4" class="section"
                   points="101,503,99,348,291,350,294,500,287,500,285,390,269,391,270,487,244,486,238,488,238,501"></polygon>
          <polygon id="area_3-5" class="section"
                   points="307,499,302,346,523,343,525,495,510,494,507,491,507,480,451,481,449,379,399,379,399,484,314,484,311,499"></polygon>
          <polygon id="area_3-6" class="section"
                   points="603,447,615,403,615,447"></polygon>
          <polygon id="area_3-7" class="section"
                   points="821,443,821,346,836,344,838,442"></polygon>
          <polygon id="area_3-8" class="section"
                   points="864,420,864,345,958,342,958,369,952,367,949,449,958,454,959,487,932,476,933,364,913,361,910,467,877,455,878,426"></polygon>
          <polygon id="area_3-9" class="section"
                   points="533,494,543,495,542,385,574,385,575,494,580,494,581,341,533,339"></polygon>


          <polygon id="area_4-0" class="section"
                   points="580,493,579,346,630,345,605,448,650,445,650,488,657,493"
                   data-title="Foreverbreathe™ Oil Coatings"
                   data-desc="100% natural timber coatings using breathable plant-based chemistry"
                   data-href="/foreverbreathe-oil-coatings" ></polygon>
          <polygon id="area_4-1" class="section"
                   points="808,489 808,445 834,443 848,449 848,455 947,487"></polygon>
          <polygon id="area_4-2" class="section"
                   points="308,498,312,483,398,483,396,377,448,377,447,481,507,480,508,496"></polygon>
          <polygon id="area_4-3" class="section"
                   points="974,493 1075,491 1075,481 973,439"></polygon>
          <polygon id="area_4-4" class="section"
                   points="237,500,237,488,241,488,242,485,264,486,268,484,267,390,285,389,285,500"></polygon>


          <polygon id="area_5-0" class="section"
                   points="581,494 581,457 604,455 604,447 656,446 650,486 650,486 658,494"
                   data-title="Foreverbeech Flooring"
                   data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                   data-href="http://www.foreverbeech.co.nz" ></polygon>
          <polygon id="area_5-1" class="section"
                   points="808,489 808,445 834,443 848,449 848,455 947,487"
                   data-title="Foreverbeech Flooring"
                   data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                   data-href="http://www.foreverbeech.co.nz" ></polygon>
          <polygon id="area_5-2" class="section"
                   points="307,500 312,483 511,478 511,495"
                   data-title="Foreverbeech Flooring"
                   data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                   data-href="http://www.foreverbeech.co.nz"></polygon>
          <polygon id="area_5-3" class="section"
                   points="238,500 243,486 285,487 285,500"
                   data-title="Foreverbeech Flooring"
                   data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                   data-href="http://www.foreverbeech.co.nz" ></polygon>

          <polygon id="area_6-0" class="section"
                   data-title="LVL Portal Framing Construction"
                   points="580,493,579,183,564,185,538,260,541,465,552,465,549,259,567,207,570,493"></polygon>
          <polygon id="area_6-1" class="section"
                   data-title="LVL Portal Framing Construction"
                   points="91,500,87,176,118,194,121,476,113,476,109,202,97,194,102,506,91,506"></polygon>
          <polygon id="area_6-2" class="section"
                   data-title="LVL Portal Framing Construction"
                   points="972,491,972,191,960,192,834,261,836,441,848,441,849,265,961,206,958,492"></polygon>

          <polygon id="area_7-0" class="section"
                   points="80,179,87,501,109,501,105,179"
                   data-title="Foreverbreathe™ Wall System"
                   data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/foreverbreathe.jpg"
                   data-href="/foreverbreathe"></polygon>
          <polygon id="area_7-1" class="section"
                   points="960,192,958,488,972,489,975,191"></polygon>

        <polygon id="area_8-0" class="section"
                 points="399,481 399,378 450,378 450,483"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_8-2" class="section"
                 points="269,484 268,389 285,389 287,486"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_8-3" class="section"
                 points="665,491 666,452 804,449 804,490"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href="" ></polygon>
        <polygon id="area_8-3" class="section"
                 points="649,486,649,440,791,435,810,443,808,491,663,495"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_8-3" class="section"
                 points="223,323,223,266,233,266,230,259,254,259,255,266,263,266,263,322"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href="" ></polygon>
        <polygon id="area_8-4" class="section"
                 points="544,495,545,385,576,385,575,492"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>

        <polygon id="area_9-0" class="section"
                 points="79,588,78,529,128,529,129,590"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href=""></polygon>
        <polygon id="area_9-1" class="section"
                 points="551,576,551,513,603,512,606,576"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href=""></polygon>
        <polygon id="area_9-2" class="section"
                 points="939,568,940,506,992,505,993,570"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href="" ></polygon>
        </svg>

        <div id="overlay"></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
<script type="text/javascript">

  var $navItem = $('#floorplan-nav li'),
    $polygon = $('#floorplan-map polygon.section');

  function insertHTML(data) {
    var $overlay = $('#overlay'),
      btnLink  = data.link ? '<a class="btn btn-white btn-block" href="'+data.link+'" target="_blank">view more</a>' : '',
      img = data.img ? '<img class="overlay-img" src="'+data.img+'" />' : '',
      desc = data.desc ? '<p>'+data.desc+'</p>' : '';

    $overlay.html('<div class="content"><span class="overlay-close">&times;</span><h3>'+data.title+'</h3>'+desc+img+btnLink+'</div>');
    $overlay.css('opacity', 1);
    $overlay.css('top', (data.cords.y - 200)+'px').css('left', (data.cords.x - 100)+'px');

    // This is inside insertHTML function as .overlay-close only gets defined in here.
    var $closeOverlay = $('.overlay-close');
    $closeOverlay.click(function() {
      $overlay.html('');
      $navItem.removeClass('active');
      $polygon.removeClass('active').removeClass('hover');
    });
  }

  function showArea($this, area, type) {
    var $area = $('#'+area+'-0');

    var overlay = {
      title: $area.data('title'),
      desc: $area.data('desc'),
      link: $area.data('href'),
      img: $area.data('img'),
      cords: $area[0].points[0]
    };


      if(type == 'polygon') {
        $this.hover(function() {
          $polygon.removeClass('hover');
          $('*[id^="'+area+'"]').addClass('hover');
        });

        $this.click(function() {
          $polygon.removeClass('active');
          $('*[id^="'+area+'"]').addClass('active');
          insertHTML(overlay);
        })
      }

    if(type == 'nav') {
      $this.click(function() {
        $navItem.removeClass('active');
        $polygon.removeClass('active');

        $this.addClass('active');
        $('*[id^="'+area+'"]').addClass('active');
        insertHTML(overlay)
      })
    }

  }

  $polygon.each(function(){
    showArea($(this), $(this)[0].id.split('-')[0], 'polygon');
  });

  $navItem.each(function(){
    var $id = $(this).data('id');
    showArea($(this), 'area_' + $id, 'nav');
  });

  $("#floorplan-map").mouseout(function() {
    $polygon.removeClass('hover');
  });



//  $navItem.click(function() {
//    var id = $(this).data('id');
//
//    $('li').removeClass('active');
//    $(this).addClass('active');
//
//    showArea($('#area_'+id), 'click');
//  });
//
//  $navItem.hover(function() {
//    $('polygon').removeClass('active');
//    var id = $(this).data('id');
//    var $class = "area_"+id;
//    $('*[id^="'+$class+'"]').addClass('active');
//  });

</script>

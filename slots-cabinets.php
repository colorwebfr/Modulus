<?php
/*
* Template for displaying Products
*/
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/modulus/incl/header.php"; ?>

<div class="main_All_slots_cabinets">

  <!-- Hero -->
  <section class="textL_imgR" id="the_road_ahead">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft equal-height-short customDataHeroArchive">
          <h2 class="title_Modulus h2_SUBhero light">PRODUCTS<br><span class="bold h2_SUBhero2">SLOT CABINETS</span></h2>
          <div class="line-3-70-stick-B"></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight equal-height-short">
          <p>Our system provides you with handy, accessible building blocks that take care of the basics you need to drive revenue while enabling experimentation and innovation to unlock new sources of income. You get the core functions that you’ve come to expect from any casino system – but you also get a world of possibilities to layer on top. We’ve forged partnerships with technology companies across sectors such as retail, t.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero -->

  <!-- List machines -->
  <div class="grey-light-bg plr-0-767 clearfix sectionListsMachines">
    <div class="white-bg">
      <div class="relative">
        <div class="port-filter text-center text-left-767 itemsNavCat">
          <a href="#" class="filter active allProducts filterDynamiqueArchive" data-filter="*" data-univers-color="#000000" data-univers-logo="" data-unives-title="">
            ALL PRODUCTS
          </a>
          <?php
          $tab_filter = array(
            "igt"                     => "/modulus/uploads/logo-igt.png",
            "merkur-gaming"           => "/modulus/uploads/logo-merkur.png",
            "incredible-technologies" => "/modulus/uploads/logo-incredible.png",
            "alfastreet"              => "/modulus/uploads/logo-alpha-street.png",
          )
          ?>
          <?php foreach ($tab_filter as $Brand_tab_filter => $Thumb_tab_filter) { ?>
            <a href="#" class="filter filterDynamiqueArchive" data-filter=".<?php echo $Brand_tab_filter; ?>" data-univers-color="#005CA8" data-univers-logo="/modulus/uploads/machine-alfastreet.png" data-unives-title="igt">
              <img src="<?php echo $Thumb_tab_filter; ?>" alt="Logo partenaires Modulus">
            </a>
          <?php } ?>
        </div>

        <ul class="port-grid display-hover-on-mobile clearfix" id="items-grid">
          <?php
          $nb_prdct = array(
            "0" => array(
              "brand" => "igt",
              "title" => "AXXIS TRUE 3D",
              "thumbnail" => "/modulus/uploads/machine-alfastreet.png",
              "miniatureBrand" => "/modulus/uploads/logo-igt.png"
            ),
            "1" => array(
              "brand" => "merkur-gaming",
              "title" => "Demo 3D",
              "thumbnail" => "/modulus/uploads/machine-merkur.png",
              "miniatureBrand" => "/modulus/uploads/logo-merkur.png"
            ),
            "2" => array(
              "brand" => "alfastreet",
              "title" => "AXXIS FALSE",
              "thumbnail" => "/modulus/uploads/machine-igt.png",
              "miniatureBrand" => "/modulus/uploads/logo-alpha-street.png"
            ),
            "3" => array(
              "brand" => "incredible-technologies",
              "title" => "Machines 3D",
              "thumbnail" => "/modulus/uploads/machine-incredible.png",
              "miniatureBrand" => "/modulus/uploads/logo-incredible.png"
            ),
            "4" => array(
              "brand" => "alfastreet",
              "title" => "AXXIS FALSE 3D",
              "thumbnail" => "/modulus/uploads/machine-igt.png",
              "miniatureBrand" => "/modulus/uploads/logo-alpha-street.png"
            ),
            "5" => array(
              "brand" => "igt",
              "title" => "AXXIS TRUE 3D",
              "thumbnail" => "/modulus/uploads/machine-alfastreet.png",
              "miniatureBrand" => "/modulus/uploads/logo-igt.png"
            ),
            "6" => array(
              "brand" => "merkur-gaming",
              "title" => "Demo 3D",
              "thumbnail" => "/modulus/uploads/machine-merkur.png",
              "miniatureBrand" => "/modulus/uploads/logo-merkur.png"
            ),
            "7" => array(
              "brand" => "incredible-technologies",
              "title" => "Machines 3D",
              "thumbnail" => "/modulus/uploads/machine-incredible.png",
              "miniatureBrand" => "/modulus/uploads/logo-incredible.png"
            ),
          );
          ?>

          <?php foreach ($nb_prdct as $nb_prdcts) { ?>

            <?php
            $brand_slug = $nb_prdcts['brand']; //slug
            $brand_title = $nb_prdcts['title']; //titre
            $brand_thumb = $nb_prdcts['thumbnail']; //thumbnail
            $brand_miniature = $nb_prdcts['miniatureBrand']; //logo de la marque
            ?>

            <li role="button" class="port-item mix <?php echo $brand_slug; ?> position-relative box_product">
              <a href="portfolio-single1.html">
                <div class="port-img-overlay">
                  <img class="port-main-img" src="<?php echo $brand_thumb; ?>" alt="img">
                </div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html"><?php echo $brand_title; ?></a></h3>
                </div>
                <div class="port-btn-cont">
                  <a href="#" class="permalink btn_learnMore"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                </div>
              </div>
              <img src="<?php echo $brand_miniature; ?>" alt="logo de la marque partenaire" class="miniature">
            </li>

          <?php }
          ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- END List machines -->

  <!-- LAST SECTION -->
  <div class="page-section last_section_betterPlayer box_col3_overlay_bottomPage">
    <div class="container-fluid">
      <div class="row">
        <!-- Section GROW -->
        <div class="col-md-4 col-sm-4 col-xs-12 bg_lastbetterPlayer" style="background-image:url('/modulus/uploads/modulus_casino_system_grow_revenues_poker_chips.jpg');background-position:top;background-size:cover;background-repeat:no-repeat;">
          <div class="fes2-main-text-cont-left wow fadeInLeft equal-height blockDesc_lastPlayer">
            <h3 class="title-fs-40">BETTER PLAYER<br>
              <span class="light_title">EXPERIENCES</span>
            </h3>
            <div class="line-3-70-stick-W m-stick"></div>
            <a href="/modulus/better-player-experiences.php" class="btn_learnMore">Learn More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
        <!-- END Section GROW -->
        <!-- Section MORE VALUE -->
        <div class="col-md-4 col-sm-4 col-xs-12 bg_lastbetterPlayer" style="background-image:url('/modulus/uploads/modulus_casino_system_more_values_from_data.jpg');background-position:top;background-size:cover;background-repeat:no-repeat;">
          <div class="fes2-main-text-cont-left wow fadeInLeft equal-height blockDesc_lastPlayer">
            <h3 class="title-fs-40">MORE VALUE<br>
              <span class="light_title">FROM DATA</span>
            </h3>
            <div class="line-3-70-stick-W m-stick"></div>
            <a href="#" class="btn_learnMore">Learn More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
        <!-- END Section MORE VALUE -->
        <!-- Section CUSTOMER -->
        <div class="col-md-4 col-sm-4 col-xs-12 bg_lastbetterPlayer" style="background-image:url('/modulus/uploads/modulus_casino_system_customer_support.jpg');background-position:top;background-size:cover;background-repeat:no-repeat;">
          <div class="fes2-main-text-cont-left wow fadeInLeft equal-height blockDesc_lastPlayer">
            <h3 class="title-fs-40">CUSTOMER<br>
              <span class="light_title">SUPPORT</span>
            </h3>
            <div class="line-3-70-stick-W m-stick"></div>
            <a href="#" class="btn_learnMore">Learn More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
        <!-- END Section CUSTOMER -->
      </div>
    </div>
  </div>
  <!-- END LAST SECTION -->

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/modulus/incl/footer.php"; ?>
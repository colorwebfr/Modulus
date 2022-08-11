<?php
/*
* Template for displaying Single product
*/
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/modulus/incl/header.php"; ?>

<div class="single-product">

    <!-- Nav Brands -->
    <section class="container navBarBrands">
        <div class="port-filter text-center text-left-767 itemsNavCat">
            <a href="slots-cabinets.php" class="filter allProducts" data-unives-slug="">
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
                <a href="#" class="filter" data-unives-slug="igt">
                    <img src="<?php echo $Thumb_tab_filter; ?>" alt="Logo partenaires Modulus">
                </a>
            <?php } ?>
        </div>
    </section>
    <!-- END Nav Brands -->

    <!-- Section product -->
    <section class="product-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 single-content-left">
                    <h2 class="titleProduct">Crystal Curve™</h2>
                    <div class="stick_black_litle"></div>
                    <div class="contentProductSingle">
                        <ul>
                            <li>Plateforme : ASCENT</li>
                            <li>Rouleaux : Rouleaux</li>
                            <li>Video Ecran 4K Ultra HD (2160×3840) de 43 pouces incurvé</li>
                            <li>Eclairage intelligent qui s’adapte au jeu (SyncSation)</li>
                            <li>Effets visuels synchronisables</li>
                            <li>Dynamic Player Panel</li>
                            <li>Topper vidéo</li>
                            <li>Chargeur USB sur la façade</li>
                            <li>Large sélection de jeux performants</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="popup-gallery">
                        <?php for ($n = 0; $n < 3; $n++) { ?>
                            <div class="post-prev-img">
                                <a href="/modulus/uploads/machine-merkur.png" class="gallery_products_Rbox">
                                    <img src="/modulus/uploads/machine-merkur.png" alt="Produit Modulus">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 single-content-right">
                    <div class="post-prev-img popup-gallery">
                        <a href="/modulus/uploads/machine-merkur.png" class="ThumbProductRbox">
                            <img src="/modulus/uploads/machine-merkur.png" alt="Produit Modulus">
                        </a>
                        <img src="/modulus/uploads/logo-igt.png" alt="Logo du partenaire Modulus" class="miniature_brand miniature">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END Section product -->

    <!-- Section Video -->
    <?php
    $video_embeded = true;
    ?>
    <?php if ($video_embeded == true) : ?>
        <section class="videoSingle">
            <div class="container">
                <iframe class="VideoSingle" width="100%" src="https://www.youtube.com/embed/o1EkruqEUsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    <?php endif; ?>
    <!-- END Section Video -->

    <!-- Section Produit related -->
    <?php
    $relatedProducts = true;
    ?>
    <?php if ($relatedProducts == true) : ?>
        <section class="ProduitRelated">
            <div class="container">
                <h2>SIMILAR PRODUCTS</h2><br>
                <div class="sliderRelatedProduct">
                    <?php for ($k = 0; $k < 8; $k++) { ?>
                        <div class="box_content_related">
                            <div class="boxCarouselRelated">
                                <a href="#">
                                    <img src="/modulus/uploads/machine-alfastreet.png" alt="Produit Modulus">
                                </a>
                            </div>
                            <h3>Crystal Curve™</h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- END Section Produit related -->

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/modulus/incl/footer.php"; ?>
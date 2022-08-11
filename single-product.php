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
            <a href="#" class="filter allProducts" data-filter="*" data-univers-color="#000000" data-univers-logo="" data-unives-title="">
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
                <a href="#" class="filter" data-filter=".<?php echo $Brand_tab_filter; ?>" data-univers-color="#005CA8" data-univers-logo="/modulus/uploads/machine-alfastreet.png" data-unives-title="igt">
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
                <div class="col-md-6 col-sm-12 single-content-right">
                    <div class="post-prev-img popup-gallery">
                        <a href="/modulus/uploads/machine-merkur.png" class="ThumbProductRbox">
                            <img src="/modulus/uploads/machine-merkur.png" alt="Produit Modulus">
                        </a>
                    </div>
                    <div class="row">
                        <div class="popup-gallery">
                            <?php for ($n = 0; $n < 3; $n++) { ?>
                                <div class="col-xs-4 post-prev-img">
                                    <a href="/modulus/uploads/machine-merkur.png" class="gallery_products_Rbox">
                                        <img src="/modulus/uploads/machine-merkur.png" alt="Produit Modulus">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END Section product -->

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/modulus/incl/footer.php"; ?>
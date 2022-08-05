<?php
$path = $_SERVER['REQUEST_URI'];
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$Parse_page = parse_url($actual_link);
$last_path = basename($Parse_page['path']);
$bodyClass = str_replace(".php", "", $last_path);
$title_Breadcrumb = str_replace("-", " ", $bodyClass);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modulus</title>

    <link rel="stylesheet" type="text/css" href="/modulus/rs-plugin/css/settings.min.css" media="screen">
    <link rel="stylesheet" href="/modulus/style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/modulus/style/icons-fonts.css" >	
    <link rel='stylesheet' href="/modulus/style/animate.min.css">
    <link rel="stylesheet" href="/modulus/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@300;500&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $bodyClass; ?>">
    
    <!-- Header globale -->
    <header class="container-fluid">
        <div class="container contain_header">
            <div class="Block_logo_Site_header">
                <a href="/modulus/index.php"><img src="/modulus/uploads/Logo_Modulud.png" alt="Logo Modulus" class="logo_Site_header"></a>
            </div>
            <div class="burger_menu">
                <div class="burgerBar1">|</div>
                <div class="burgerBar2">|</div>
                <div class="burgerBar3">|</div>
            </div>
            <nav class="nav_menu">
                <ul>
                    <li id="menu_ID_1" class="level_0">Best Choice
                        <ul id="submenu_ID_1" class="fade-out-submenu">
                            <li class="level_1"><a href="better-player-experiences.php">Better Experiences</a></li>
                            <li class="level_1"><a href="more-revenues.php">More Revenues</a></li>
                            <li class="level_1"><a href="#">Powerfull Data</a></li>
                            <li class="level_1"><a href="#">Support For Our Business</a></li>
                        </ul>
                    </li>
                    <li id="menu_ID_2" class="level_0"><a href="products.php">Products</a>
                        <ul id="submenu_ID_2"class="fade-out-submenu">
                            <li class="level_1"><a href="#">Systems</a></li>
                            <li class="level_1"><a href="#">Slots Cabinets</a></li>
                        </ul>
                    </li>
                    <li class="level_0"><a href="group.php">Group</a></li>
                    <li class="level_0"><a href="contact.php">Contact</a></li>
                    <li class="level_0"><a id="lang_UK" href="#">UK</a>/<a id="lang_ES" href="#">ES</a></li>
                    <li class="level_0" id="loop_search"><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li class="liSearchBar"><input id="Search_Widget" type="text" placeholder="Recherche ..."></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Breadcrumb -->
    <?php if ( ! strpos($path, "index.php") ) : ?>
    <section class="title_breadCrumb">
        <div class="container">
            <div class="Name_Page">
                <h1><?php echo $title_Breadcrumb; ?></h1>
            </div>
            <div class="breadcrumb">
                <?php include $_SERVER['DOCUMENT_ROOT']."/modulus/incl/breadcrumb.php"; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
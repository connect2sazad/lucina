<?php
include_once "./constants.php";
include_once ___FUNCTIONS___;

$p = str_replace(the_site_url(), '', URI_URL);

if($p == ''){
    $p = 'landing';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?= loadMetaData() ?>

    <?= loadTitleAndFavicon() ?>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <?= loadFonts() ?>

    <?= loadIcons() ?>
    <?= loadStyleSheets() ?>

</head>

<body>
    
    <?php
        include_once ___COMPONENTS___."header.php";
    ?>


    <?php

        page($p);
    
    ?>


    <!-- Footer Start -->
    <?php

        include_once ___COMPONENTS___."footer.php"
    
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <?=customScript('https://code.jquery.com/jquery-3.4.1.min.js')?>
    <?=customScript('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')?>
    
    <?=loadFooterScripts()?>
</body>

</html>
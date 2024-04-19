<?php
    require_once("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    require_once("$rootDir/model/Book/DbBook.php");
    
    require("$rootDir/model/Address/Address.php");
    include("$rootDir/model/Layout/Layout.php");

    include("$rootDir/view/header.php");
    include("$rootDir/view/home_page.php");
    include("$rootDir/view/footer.php");
    
    ?>

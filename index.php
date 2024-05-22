<?php
    require_once("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    require_once("$rootDir/model/Book/DbBook.php");
    require_once("$rootDir/model/Book/DbGenderBook.php");
    require_once("$rootDir/model/Book/DbPublisherBook.php");
    require_once("$rootDir/Database/Database.php");

    include("$rootDir/view/header.php");
    include("$rootDir/view/home_page.php");

    include("$rootDir/view/footer.php");
    
?>

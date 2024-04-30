<?php
    require_once("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    require_once("$rootDir/model/Book/DbBook.php");
    require_once("$rootDir/model/Book/DbGenderBook.php");
    require_once("$rootDir/model/Book/DbPublisherBook.php");

    require("$rootDir/model/Address/Address.php");
    include("$rootDir/model/Layout/Layout.php");

    include("$rootDir/view/header.php");
    include("$rootDir/view/home_page.php");

    $query = DbGenderBook::editGender(70, "teste");
    $result = DbGenderBook::getGenderById(70);
    var_dump($result);
    //var_dump($query);

    include("$rootDir/view/footer.php");
    
?>

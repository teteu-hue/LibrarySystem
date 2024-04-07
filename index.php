<?php
    require("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/Database/books.php");
    require("$rootDir/model/Library/Library.php");
    
    include("$rootDir/model/Layout/Layout.php");
    include("$rootDir/view/header.php");
    include("$rootDir/view/contentPrincipalPage.php");
    include("$rootDir/view/footer.php");

?>

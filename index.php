<?php
    require_once("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    require("$rootDir/controller/Form/Form.php");
    include_once("$rootDir/Database/Database.php");
    
    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/model/Library/Library.php");
    
    echo "<pre>";
    $result = $conn->getAllGender();
    var_dump($result);
    
    include("$rootDir/model/Layout/Layout.php");
    include("$rootDir/view/header.php");
    include("$rootDir/view/contentPrincipalPage.php");
    include("$rootDir/view/footer.php");
    
    ?>

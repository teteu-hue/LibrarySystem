<?php
    require("controller/RootDir/RootDir.php");
    $rootDir = RootDir::getRealPath();
    
    include_once("$rootDir/Database/Database.php");

    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/model/Library/Library.php");

    $result = $conn->getBookById(5);
    var_dump($result);

    echo "<br>";

    $result1 = $conn->getGenderById(2);
    var_dump($result1);

    include("$rootDir/model/Layout/Layout.php");
    include("$rootDir/view/header.php");
    include("$rootDir/view/contentPrincipalPage.php");
    include("$rootDir/view/footer.php");

?>

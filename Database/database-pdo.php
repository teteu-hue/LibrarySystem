<?php

try{

    $file = 'settings-database.ini';
    
    if($database = parse_ini_file($file)){
        
        $driver = $database["driver"];
        $db = $database["db"];
        $charset = $database["charset"];
        $host = $database["host"];
        $port = $database["port"];
        $user = $database["username"];
        $password = $database["password"]; 

        $dsn = "$driver:host=$host;dbname=$db;charset=$charset;port=$port";
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
    }
} catch(Exception $e){
    echo "Unable to open " . $file;
}

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "Connected Sucessfully!<br>";

} catch(PDOException $e) {
    echo "Connected Failed: " . $e->getMessage();
}
?>

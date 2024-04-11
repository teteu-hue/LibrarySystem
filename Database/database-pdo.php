<?php

$database = parse_ini_file('settings-database.ini');
$driver = $database["driver"];
$db = $database["db"];
$charset = $database["charset"];
$host = $database["host"];
$port = $database["port"];
$user = $database["username"];
$password = $database["password"];

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

$dsn = "$driver:host=$host;dbname=$db;charset=$charset;port=$port";

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "Connected Sucessfully!<br>";

} catch(PDOException $e) {
    echo "Connected Failed: " . $e->getMessage();
}

$sth = $pdo->query("SELECT * FROM Livro");
$result = $sth->fetchAll();
echo "<pre>";
var_dump($pdo);
var_dump($result);
?>
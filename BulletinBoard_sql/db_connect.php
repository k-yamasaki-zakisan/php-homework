<?php
$dsn = "mysql:dbname=board; host=localhost";
$username = "root";
$password = "zxcvbnma";
$attr_emulate_prepares = array(PDO::ATTR_EMULATE_PREPARES => false);

ini_set("display_errors", On);
error_reporting(E_ALL);

try {
    $db = new PDO($dsn, $username, $password, $attr_emulate_prepares);
} catch(PODException $e) {
    echo "DB接続失敗" .$e->getMessage() ."\n";
    die();
}
?>
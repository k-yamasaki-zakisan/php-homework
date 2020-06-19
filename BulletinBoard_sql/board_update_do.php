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

    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        try {
            $id = $_REQUEST['id'];
            $db -> exec('UPDATE post SET name="'.$_POST['name'].'", 
                                                    email="'.$_POST['email'].'",
                                                    title="'.$_POST['title'].'",
                                                    content="' .$_POST['content'].'",
                                                    WHERE id="'.$id.'"');
            // header("Location: ./index.php");
        }
        catch(PODException $e) {
            echo "編集失敗接続失敗" .$e->getMessage() ."\n";
            die();
        }
    }

?>
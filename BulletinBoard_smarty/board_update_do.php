<?php 
    require('db_connect.php');

    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        try {
            $id = $_POST['id'];
            $db -> exec('UPDATE post SET name="'.$_POST['name'].'", 
                                        email="'.$_POST['email'].'",
                                        title="'.$_POST['title'].'",
                                        content="' .$_POST['content'].'"
                                        WHERE id="'.$id.'"');
            header("Location: ./index.php");
        }
        catch(PODException $e) {
            echo "編集失敗" .$e->getMessage() ."\n";
            die();
        }
    }

?>
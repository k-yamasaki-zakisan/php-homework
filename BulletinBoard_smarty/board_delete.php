<?php 
    require('db_connect.php');

    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $statement = $db ->query('DELETE FROM post WHERE id="'.$id.'"');
    }

    header("Location: ./index.php");
?>

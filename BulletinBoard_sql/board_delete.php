<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <?php 
        require('db_connect.php');

        if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $statement = $db ->query('DELETE FROM post WHERE id="'.$id.'"');
        }

        header("Location: ./index.php");

        ?>
    </body>
</html>
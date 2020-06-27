<?php
//libs ディレクトリへの絶対パスを指定
define('SMARTY_DIR', 'libs/');
//ファイルの読み込み
require_once(SMARTY_DIR . 'Smarty.class.php');

//DBコネクト
require('db_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $smarty = new Smarty();
    $records = $db ->query('SELECT * FROM post WHERE id="'.$id.'"');
    $record = $records -> fetch();
    $smarty->assign('record', $record);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Smartyテスト</title>
    </head>
    <body>
        <?php
        $smarty->display('board_update.html');
        ?>
    </body>
</html>

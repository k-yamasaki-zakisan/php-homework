<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <h1>投稿編集</h1>
        <a href="./board_input.html">投稿フォーム</a>
        <a href="./index.php">投稿一覧</a>
        <br><br>

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
            $id = $_REQUEST['id'];
            $records = $db ->query('SELECT * FROM post WHERE id="'.$id.'"');
            $record = $records -> fetch();
        }
        ?>

        <form action="board_update_do.php" method="post">
            <table>
                <input type="hidden" name="id" method="post" value="<?php print($record['id'])?>">
                <tr><th width="150">名前: <input type="text" name="name" value="<?php print($record['name'])?>"></th></tr>
                <tr><th width="150">メールアドレス: <input type="text" name="email" value="<?php print($record['email'])?>"></th></tr>
                <tr><th width="150">タイトル: <input type="text" name="title" value="<?php print($record['title'])?>"></th></tr>
                <tr><th width="150">本文：<textarea type="text" name="content"><?php print($record['content'])?></textarea></th></tr>
                <tr><th width="150"><input type="submit" value="変更する"></th></tr>
            </table>
        </form>
    </body>
</html>
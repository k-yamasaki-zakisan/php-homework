<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <h1>掲示板一覧</h1>

        <?php 
        try {
            $db = new PDO('mysql:dbname=board','roo','zxcvbnma');
        } catch(PODException $e) {
            echo 'DB接続失敗' .$e -> getMessage();
        }
        ?>
    </body>
</html>
<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
        <!-- 参考サイト：DB接続 https://www.php.net/manual/ja/pdo.connections.php -->
    </head>

    <body>
        <h1>掲示板一覧</h1>

        <?php 
        $dsn = "mysql:dbname=board; host=localhost";
        $username = "root";
        $password = "zxcvbnma";
        $attr_emulate_prepares = array(PDO::ATTR_EMULATE_PREPARES => false);

        ini_set("display_errors", On);
        error_reporting(E_ALL);

        try {
            $db = new PDO($dsn, $username, $password, $attr_emulate_prepares);
            echo "接続成功\n";
        } catch(PODException $e) {
            echo "DB接続失敗" .$e->getMessage() ."\n";
            die();
        }
        ?>
    </body>
</html>

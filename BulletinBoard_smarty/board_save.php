<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <?php 
        $dsn = "mysql:dbname=board; host=localhost";
        $username = "root";
        $password = "zxcvbnma";
        $attr_emulate_prepares = array(PDO::ATTR_EMULATE_PREPARES => false);

        ini_set("display_errors", On);
        error_reporting(E_ALL);

        // prepare, executeでリファクタリングする必要あり（セキュリティ関連）
        try {
            $db = new PDO($dsn, $username, $password, $attr_emulate_prepares);
            $db -> exec('INSERT INTO post SET name="' .$_POST['name'].'",
                                              email="' .$_POST['email'].'",
                                              title="' .$_POST['title'].'",
                                              content="' .$_POST['content'].'"
                                              ');
            header("Location: ./index.php");
        }
        catch(PODException $e) {
            echo "投稿失敗" .$e->getMessage() ."\n";
            die();
        }
        ?>
    </body>
</html>
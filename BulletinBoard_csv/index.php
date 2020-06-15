<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <h1>掲示板一覧</h1>
        <a href="./board_submit.php">投稿フォーム</a>
        <br><br>

        <?php 
        $board_file = "./board.csv";
        $handle = fopen($board_file,"r") or die("ファイル開けねぇ(ﾟДﾟ)ﾊｧ") ;
        if ($handle !==FALSE) {
            echo "<table border=1>\n";
            while(($board_data = fgetcsv($handle, 1000, ",")) !== FALSE ){
                echo "\t<tr>\n";
                for($i = 0; $i < count($board_data); $i++) {
                    echo "\t\t<td>{$board_data[$i]}</td>\t";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";
            fclose($handle);
        }
        ?>
    </body>
</html>
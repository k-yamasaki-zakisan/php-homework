<html>
    <head>
        <title>F5 Counter</title>
        <!-- 参考サイトhttps://www.javadrive.jp/php/sample/accesscounter/index1.html -->
    </head>
    <body>
        <?php
        $counter_file = "count.txt";
        $counter_lenght = 8;

        //対象ファイルの権限を「chmod 777 count.txt」で変更して読み書き実行を許可した
        $fp = fopen($counter_file, "r+") or die("ファイル読み込み失敗"); // count.txtファイルをfopenで開く

        if($fp){
            if(flock($fp, LOCK_EX)){
                $counter = fgets($fp, $counter_lenght);  // fgets関数でcount.txtに書かれたカウント数を読み込む
                $counter++; //カウント数の増加

                rewind($fp);

                if(fwrite($fp, $counter) === FALSE){
                    print('ファイルの書き込みに失敗しました');
                }
                flock($fp, LOCK_UN); //flock関数でファイルを上書きされないようにファイルをロックする
            }
        }

        fclose($fp);

        print('ページの閲覧回数：'.$counter);

        ?>
    </body>
</html>
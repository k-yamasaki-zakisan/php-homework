<html>
    <head>
        <title>F5 Counter</title>
    </head>
    <body>
        <?php
        $counter_file = "count.txt";
        $counter_lenght = 8;

        $fp = fopen($counter_file, "r+") or die("失敗した"); // count.txtファイルをfopenで開く

        if($fp){
            if(flock($fp, LOCK_EX)){
                $counter = fget($fp, $counter_lenght);  // fgets関数でcount.txtに書かれたカウント数を読み込む
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
<html>
    <head>
        <title>F5 Counter</title>
        <!-- 参考サイト：カウンター https://www.javadrive.jp/php/sample/accesscounter/index1.html -->
        <!-- 参考サイト：ログ https://ysklog.net/php/1264.html -->
    </head>
    <body>
        <?php //閲覧数カウンター用のスクリプト
        $counter_file = "./count.txt";
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
        echo "<br />";

        ?>

        <?php //アクセスログ保存用のスクリプト
        $USER_AGENT = $_SERVER['HTTP_USER_AGENT']; //ブラウザの種類
        $IP_ADDRESS = $_SERVER['REMOTE_ADDR']; //IPアドレス
        $ACCCESS_DATE = date("Y/m/d H:i:s"); //アクセス時刻

        $log_file = "./log.csv";//ログファイル名

        $new_log = [[$USER_AGENT, $IP_ADDRESS, $ACCCESS_DATE]];

        $fpcsv = fopen($log_file, 'a');

        if($fpcsv){
            if(flock($fpcsv, LOCK_EX)){
                foreach($new_log as $line){
                    fputcsv($fpcsv, $line, "\t");
                }
                flock($fp, LOCK_UN);
            }
        }
        fclose($fpcsv);
        ?>

    </body>
</html>
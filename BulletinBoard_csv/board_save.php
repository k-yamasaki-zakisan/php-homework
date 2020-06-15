<?php 
    $NAME=htmlspecialchars($_POST["name"],ENT_QUOTES);
    $EMAIL=htmlspecialchars($_POST['email'],ENT_QUOTES);
    $TITLE=htmlspecialchars($_POST['title'],ENT_QUOTES);
    $CONTENT=htmlspecialchars($_POST['content'],ENT_QUOTES);
    $SUBMIT_DATE = date("Y/m/d H:i:s");

    $board_file = "./board.csv";
    $new_board = [[$NAME, $EMAIL, $TITLE, $CONTENT, $SUBMIT_DATE]];
    $fpcsv = fopen($board_file, "a") or die("ファイル開けねぇ(ﾟДﾟ)ﾊｧ");

    if($fpcsv){
        if(flock($fpcsv, LOCK_EX)){
            foreach($new_board as $line){
                fputcsv($fpcsv, $line);
            }
            flock($fp, LOCK_UN);
        }
    }
    fclose($fpcsv);

    header('Location: ./index.php')
?>
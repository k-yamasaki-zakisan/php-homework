<?php

//libs ディレクトリへの絶対パスを指定
define('SMARTY_DIR', 'libs/');
//ファイルの読み込み
require_once(SMARTY_DIR . 'Smarty.class.php');

$name = 'okutani';

$obj = new StdClass();
$obj->hello = 'こんにちは';

$smarty = new Smarty();
$smarty->assign('name', $name);
$smarty->assign('obj', $obj);

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
    $smarty->display('index.tpl');
    ?>
     
</body>
</html>
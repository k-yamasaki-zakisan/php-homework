<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <h1>投稿フォーム</h1>

        <form action="board_save.php" method="post">
            <table>
                <tr><th width="150">名前: <input type="text" name="name"></th></tr>
                <tr><th width="150">メールアドレス: <input type="text" name="email"></th></tr>
                <tr><th width="150">タイトル: <input type="text" name="title"></th></tr>
                <tr><th width="150">本文：<textarea type="text" name="content"></textarea></th></tr>
                <tr><th width="150"><input type="submit" value="送信する"></th></tr>
            </table>
        </form>

    </body>
</html>
<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 06:57:59
  from '/vagrant/BulletinBoard_smarty/templates/board_update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef6edf702c449_85337297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06c8372aabc984949a4b6faa10b671cd4eb744f3' => 
    array (
      0 => '/vagrant/BulletinBoard_smarty/templates/board_update.html',
      1 => 1593241073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef6edf702c449_85337297 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>投稿編集</h1>
<a href="./templates/board_input.html">投稿フォーム</a>
<a href="./index.php">投稿一覧</a>
<br><br>

<form action="./board_update_do.php" method="post">
    <table>
        <input type="hidden" name="id" method="post" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
">
        <tr>
            <th width="150">名前: <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
"></th>
        </tr>
        <tr>
            <th width="150">メールアドレス: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['email'];?>
"></th>
        </tr>
        <tr>
            <th width="150">タイトル: <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
"></th>
        </tr>
        <tr>
            <th width="150">本文：<textarea type="text" name="content"><?php echo $_smarty_tpl->tpl_vars['record']->value['content'];?>
</textarea></th>
        </tr>
        <tr>
            <th width="150"><input type="submit" value="変更する"></th>
        </tr>
    </table>
</form><?php }
}

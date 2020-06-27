<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 06:54:14
  from '/vagrant/BulletinBoard_smarty/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef6ed166941c2_14799104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e850516a88b099b074b90c2efce0d460ba49a85d' => 
    array (
      0 => '/vagrant/BulletinBoard_smarty/templates/index.html',
      1 => 1593240852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef6ed166941c2_14799104 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- やあ、<?php echo $_smarty_tpl->tpl_vars['obj']->value->hello;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->

<h1>掲示板一覧</h1>
<a href="/BulletinBoard_smarty/templates/board_input.html">投稿フォーム</a>
<br><br>

<table border=1>
     <tr>
          <th>ID</th>
          <th>名前</th>
          <th>メールアドレス</th>
          <th>タイトル</th>
          <th>内容</th>
          <th>投稿時間</th>
          <th>その他1</th>
          <th>その他2</th>
     </tr>

     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
     <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['email'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['content'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['record']->value['created_at'];?>
</td>
          <td><a href="./board_update.php?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
">編集する</a></td>
          <td><a href="./board_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
">削除する</a></td>
     </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

     <?php }
}

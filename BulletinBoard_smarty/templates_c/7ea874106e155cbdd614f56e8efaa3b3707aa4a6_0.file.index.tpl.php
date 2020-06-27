<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 06:15:32
  from '/vagrant/BulletinBoard_smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef6e404ce6548_23356921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea874106e155cbdd614f56e8efaa3b3707aa4a6' => 
    array (
      0 => '/vagrant/BulletinBoard_smarty/templates/index.tpl',
      1 => 1593238528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef6e404ce6548_23356921 (Smarty_Internal_Template $_smarty_tpl) {
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
     </tr>

     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
          <tr>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[3];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[4];?>
</th>
               <th><?php echo $_smarty_tpl->tpl_vars['record']->value[5];?>
</th>
               
               <th><a href="/board_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
”>削除する</a></th>
          </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

     
<?php }
}

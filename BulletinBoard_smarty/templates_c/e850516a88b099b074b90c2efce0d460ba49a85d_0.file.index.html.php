<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-27 04:59:16
  from '/vagrant/BulletinBoard_smarty/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef6d224d2a4f1_74229909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e850516a88b099b074b90c2efce0d460ba49a85d' => 
    array (
      0 => '/vagrant/BulletinBoard_smarty/templates/index.html',
      1 => 1593233947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef6d224d2a4f1_74229909 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Smartyテスト</title>
</head>
<body>
          やあ、<?php echo $_smarty_tpl->tpl_vars['obj']->value->hello;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</body>
</html><?php }
}

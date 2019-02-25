<?php
/* Smarty version 3.1.30, created on 2018-04-12 15:36:58
  from "/var/www/barbershop/views/default/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf36ca63f8e4_72365748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25397a040f6f34211240c436583a90b6c425c936' => 
    array (
      0 => '/var/www/barbershop/views/default/header.tpl',
      1 => 1523529408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf36ca63f8e4_72365748 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<!-- header.tpl -->
<html>
    <head>
       <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>           
       <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
       <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
       <!--link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css" type="text/css"-->
	   <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css">
<!-- end header.tpl --><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-04-09 20:36:19
  from "/var/www/barbershop/views/default/admin/employees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb8873867409_75057945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '374747443c260be22294d62f8419025e81047569' => 
    array (
      0 => '/var/www/barbershop/views/default/admin/employees.tpl',
      1 => 1523018341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb8873867409_75057945 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div id="right_block">
 

    <?php if (isset($_smarty_tpl->tpl_vars['warning']->value)) {?><h1 id="warning_h1"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</h1> <br /><?php } else { ?><h1>Сегодня работают</h1><br /> <?php }?>
<div id="emp_div">
 <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmployee']->value, 'item', false, NULL, 'employees', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="emp_list"><input type="checkbox" name="emp[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
         <?php if ($_smarty_tpl->tpl_vars['item']->value['@checked']) {?> checked <?php }?> />
         <label for="cb1"> <?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</label></li> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
 </ul>
 <br />
 <input type="button" value="Сохранить" id="save_button" onclick="save_shedule();">
</div>
</div><!--right_block--><?php }
}

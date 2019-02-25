<?php
/* Smarty version 3.1.30, created on 2018-04-06 17:39:14
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\admin\employees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac76a727543f1_02431963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4220bb777a08855d6c23f0a09fa9965e91d812df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\admin\\employees.tpl',
      1 => 1523018340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac76a727543f1_02431963 (Smarty_Internal_Template $_smarty_tpl) {
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

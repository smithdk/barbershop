<?php
/* Smarty version 3.1.30, created on 2018-01-17 13:57:57
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\root\operations_vv.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5f485556e442_29406332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7959d1f8627396a8800c3dff435245bf5dbe1115' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\root\\operations_vv.tpl',
      1 => 1516191883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5f485556e442_29406332 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >ОПЕРАЦИИ [НАСТРОЙКИ]</div>   
</div>    
<div class="div_details"> 
   
  <fieldset class="div_details_fs"> 
    <table id="tab_details">    
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ZeroLavel']->value, 'item', false, NULL, 'zl', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
     <tr>
       <td id='tab_details_value'> 
         <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

       </td>
       <td id='tab_details_caption'>
         код
       </td>    
     </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </table>  
  </fieldset>   
   
</div>
<div class="div_buttons">
  <input class="buttons" id="save_op_button" type="button" value=" Новая ">
  <input class="buttons" id="save_op_button" type="button" value=" Сохранить ">
  <input class="buttons" id="save_op_button" type="button" value=" Удалить ">  
</div>    
<div class="div_list">
 <fieldset class="div_list_fs">
  <table id="tab_data">
   <thead>    
    <tr id="new_client_table_tr">
     <th id="new_client_table_td1">Уров.</th>
     <th id="new_client_table_td2">Раздел</th> 	 
     <th id="new_client_table_td4">Код</th>
     <th id="new_client_table_td3">Название</th>
    </tr>
   </thead> 
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsVv']->value, 'item', false, NULL, 'Vv', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <tr id="">
     <td id="new_client_table_td1"><?php echo $_smarty_tpl->tpl_vars['item']->value['lavel'];?>
</td>
     <td id="new_client_table_td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['section'];?>
</td> 	 
     <td id="new_client_table_td4"><?php echo $_smarty_tpl->tpl_vars['item']->value['variable'];?>
</td>
     <td id="new_client_table_td3"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
 </table>    
 </fieldset>   
</div>
</div> <!--end--right_block-->
<?php }
}

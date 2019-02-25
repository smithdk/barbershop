<?php
/* Smarty version 3.1.30, created on 2018-04-17 13:54:10
  from "/var/www/barbershop/views/default/root/operations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5fc82af08f6_37567392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a196d585c08d5acf957a3ad0c7c35347bf0400' => 
    array (
      0 => '/var/www/barbershop/views/default/root/operations.tpl',
      1 => 1516261348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5fc82af08f6_37567392 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >ОПЕРАЦИИ</div>   
</div>    
<div class="div_details"> 
<fieldset class="div_details_fs"> 
 <table id="operation_details"> 
  <tr>
    <td class="operation_details_caption">
      Категория  
    </td>
    <td class="operation_details_value">   
     <select class='operation_details_select' id='category_menu'>
        <option id='0'></option> 
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategory']->value, 'item', false, NULL, 'category', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
       <!--option id=''></option-->
       <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value['variable'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</option>   
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
     </select> 
    </td>
    <td class="operation_details_caption1">ID</td>
    <td class="caption1_value" id='id_value'>1000</td>
  </tr>    
  <tr>
    <td class="operation_details_caption">
      Зал  
    </td> 
    <td class="operation_details_value"> 
     <select class='operation_details_select' id='hall_menu'>
        <option id='0'></option> 
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsHalls']->value, 'item', false, NULL, 'halls', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
       <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value['variable'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
     </select>    
    </td>
    <td class="operation_details_caption1">obj_id</td>
    <td class="caption1_value" id='obj_id_value'>1000</td>
  </tr> 
  <tr>
    <td class="operation_details_caption">
      Тип операции  
    </td> 
    <td class="operation_details_value">  
     <select class='operation_details_select' id='type_menu'>
        <option value='0'></option> 
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTypes']->value, 'item', false, NULL, 'types', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
       <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value['variable'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
     </select>  
    </td>
    <td class="operation_details_caption1">create_date</td>
    <td class="caption1_value" id='create_date_value'>2017-10-23 02:11:29</td> 
  </tr>
  <tr>
    <td class="operation_details_caption">
      Название операции  
    </td> 
    <td class="operation_details_value">
     <input type="text" id='op_name'>
    </td>
    <td class="operation_details_caption1">name_code</td>
    <td class="caption1_value" id='name_code_value'></td>  
  </tr>
  <tr>
    <td class="operation_details_caption">
      Цена  
    </td> 
    <td class="operation_details_value">
     <input type="text" id='op_price'>   
    </td>
   <td class="operation_details_caption1">creator</td>
   <td class="caption1_value" id='creator_value'></td>
  </tr>
  <tr>
    <td class="operation_details_caption">
      Действие  
    </td> 
    <td class="operation_details_value">
      <input type="text" id='op_action'>        
    </td>
    <td class="operation_details_caption1">last_mod_date</td>
    <td class="caption1_value" id='last_mod_date_value'></td>  
  </tr>
  <tr>
    <td class="operation_details_caption">
      Печатать  
    </td> 
    <td class="operation_details_value">
        <input type="checkbox" class="cb_1" id="printable" checked="1">
     <!--select class='operation_details_select' id='printable_menu'>
      <option value='1'>Да</option>
      <option value='0'>Нет</option>
     </select--> 
        <span class="operation_details_caption">Показывать </span>   
        <input type="checkbox" class="cb_1" id="cb_active" checked="1">
    </td>
    <td class="operation_details_caption1">last_modifer</td>
    <td class="caption1_value" id='last_modifer_value'></td>
  </tr>
    <tr>
    <td class="operation_details_caption">
      Комментарии  
    </td> 
    <td id="operation_comments_value" colspan="3"> 
      <textarea name="comment" id="operations_comments"></textarea>  
    </td>
  </tr>    
 </table>     
</fieldset>   
</div>
<div class="div_buttons">
  <input class="buttons" id="save_op_button" type="button" value=" Новая " onclick="new_op_click();">
  <input class="buttons" id="save_op_button" type="button" value=" Сохранить " onclick="save_op_click();">
  <!--input class="buttons" id="save_op_button" type="button" value=" Удалить " onclick="del_op_click();"-->  
</div>    
<div class="div_list">
 <fieldset class="div_list_fs">
  <table id="operations_table">
   <thead>    
    <tr id="operations_table_tr">
     <!--th id="operations_table_td1">ID</th-->
     <th id="operations_table_td3">#</th>
     <th id="operations_table_td2">Категория</th> 	 
     <th id="operations_table_td4">Зал</th>
     <th id="operations_table_td3">Тип операции</th>
     <th id="operations_table_td3">Название операции</th>
     <th id="operations_table_td3">Цена</th>
     <th id="operations_table_td3">Д</th>
     <th id="operations_table_td3">П</th>
    </tr>
   </thead>     
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsOperations']->value, 'item', false, NULL, 'operation', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <tr id="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
">
     <!--td id="new_client_table_td1"></td-->
     <td id='operations_table_td3'><pre class="pre_table_op_str"><?php echo $_smarty_tpl->tpl_vars['item']->value['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['name_code'];?>
</pre></td>
     <td id='operations_table_td2'><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</td>
     <td id='operations_table_td4'><?php echo $_smarty_tpl->tpl_vars['item']->value['hall_name'];?>
</td>
     <td id='operations_table_td3'><?php echo $_smarty_tpl->tpl_vars['item']->value['type_name'];?>
</td>
     <td id='operations_table_td3'><?php echo $_smarty_tpl->tpl_vars['item']->value['name_value'];?>
</td>
     <td id='operations_table_td3'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
     <td id='operations_table_td3'><?php echo $_smarty_tpl->tpl_vars['item']->value['action'];?>
</td>
     <td id='operations_table_td3'><?php echo $_smarty_tpl->tpl_vars['item']->value['printable'];?>
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

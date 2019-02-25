<?php
/* Smarty version 3.1.30, created on 2018-04-09 20:34:02
  from "/var/www/barbershop/views/default/root/summary.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb87ea031a87_02009515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc184d0973ba8dc2ba5e37a43ec110b677236c80' => 
    array (
      0 => '/var/www/barbershop/views/default/root/summary.tpl',
      1 => 1516000238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb87ea031a87_02009515 (Smarty_Internal_Template $_smarty_tpl) {
?>
  

<div id="right_block"><!--start--right_block-->
 <div class="div_caption">
  <div id="div_caption">ИТОГИ</div>   
</div> 
 <div class="wrapper">
   <div class="tabs"> 
    <div class="tab" id='photo'>Общее</div> 
    <?php $_smarty_tpl->_assignInScope('name', '');
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value, 'item', false, NULL, 'employees', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
      <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['item']->value['short_name']);
?>  
      <?php if (!$_smarty_tpl->tpl_vars['name']->value) {?> <?php $_smarty_tpl->_assignInScope('name', 'Из дома');
?>
      <?php }?>
       <div class="tab" id='photo'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
  <br />         
  </div>  
   <div class="tab_content">
    <div class="tab_item"> 
     <div class="top_div">  
      <span class="caption">ВЫРУЧКА на <?php echo $_smarty_tpl->tpl_vars['cur_date']->value;?>
</span>
      <table class="itog_table">
       <tr>
        <td class="itog_table_left_cell">Всего денег в кассе:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allSummary']->value;?>
</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Парикмахерская:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allBsSummary']->value;?>
</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Фото:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allPhotoSummary']->value;?>
</td>
        <td class="itog_table_left_cell">В офисе:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['photo_in_office']->value;?>
</td>
        <td class="itog_table_left_cell">Из дома:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['photo_in_home']->value;?>
</td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Ксерокс:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allXeroxSummary']->value;?>
</td>
        <td class="itog_table_left_cell">Доп. услуги:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allAdditionalSummary']->value;?>
</td>
        <td class="itog_table_left_cell">Продажи:</td>
        <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['allSaleSummary']->value;?>
</td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">З.пл. парикмахерам:</td>
        <td class="itog_table_right_cell blue_text"><?php echo $_smarty_tpl->tpl_vars['emp_sum_salary']->value;?>
</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">З.пл. администратору:</td>
        <td class="itog_table_right_cell blue_text"><?php echo $_smarty_tpl->tpl_vars['adm_salary']->value;?>
</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell maroon_text weight_text">Остаток:</td>
        <td class="itog_table_right_cell red_text weight_text"><?php echo $_smarty_tpl->tpl_vars['sale_to_boss']->value;?>
</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
      </table>
     </div>
     <div class="bottom_div">
      <span class="caption">СЕГОДНЯ РАБОТАЮТ</span><br />
      <?php if (isset($_smarty_tpl->tpl_vars['rsEmps']->value)) {?>
        <div class='emp_summ_div color_adm'>
            <span class='profession_color'>Администратор</span><br />   
         <img src="<?php echo $_smarty_tpl->tpl_vars['rsAdm']->value[0]['image'];?>
"><br />
         <?php echo $_smarty_tpl->tpl_vars['rsAdm']->value[0]['first_name'];?>
<br />
         <?php echo $_smarty_tpl->tpl_vars['rsAdm']->value[0]['last_name'];?>
<br />
         <?php echo $_smarty_tpl->tpl_vars['rsAdm']->value[0]['partonymic'];?>
<br />
        </div>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmps']->value, 'item', false, NULL, 'emp', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
         <div class='emp_summ_div color_emp'>
          <span class='profession_color'>Парикмахер</span><br />    
           <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"><br />
          <?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
<br />
          <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
<br />
          <?php echo $_smarty_tpl->tpl_vars['item']->value['partonymic'];?>
<br />
        </div>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
      <?php }?>  
     </div>   
    </div>  
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value, 'item', false, NULL, 'employees1', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_employees1']->value['iteration']++;
?>
     <div class="tab_item"> 
       <div class="top_div">  
        <span class="caption"><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['partonymic'];?>
</span> 
         <div class='img_emp'>
           <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">    
         </div>
         <!--div class='float_left'-->
         <table class="itog_table">
          <tr>
           <td class="itog_table_left_cell profession_color">Название</td>
           <td class="itog_table_right_cell profession_color">Сумма</td>
           <td class="itog_table_right_cell profession_color">З.пл</td> 
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Парикмахерская:</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['bs_summary'];?>
</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['bs_salary'];?>
</td> 
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Фото:</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['photo_summary'];?>
</td>    
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['photo_salary'];?>
</td>
           <td class="itog_table_left_cell border_none maroon_text weight_text">Общая выручка:</td>
           <td class="itog_table_right_cell border_none red_text weight_text"><?php echo $_smarty_tpl->tpl_vars['item']->value['all_summary'];?>
</td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Ксерокс: </td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['xerox_summary'];?>
</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['xerox_salary'];?>
</td>
           <td class="itog_table_left_cell border_none maroon_text weight_text">Зарплата:</td>
           <td class="itog_table_right_cell border_none red_text weight_text"><?php echo $_smarty_tpl->tpl_vars['item']->value['all_salary'];?>
</td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Доп. парикмахерские услуги:</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['additional_summary'];?>
</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['additional_salary'];?>
</td>
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Продажи:</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['sale_summary'];?>
</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['sale_salary'];?>
</td>
           <td class="itog_table_left_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Работа:</td>
           <td class="itog_table_right_cell">0</td>
           <td class="itog_table_right_cell"><?php echo $_smarty_tpl->tpl_vars['item']->value['work_summary'];?>
</td>
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
         </table>
         <!--/div-->     
       </div>
       <div class="bottom_div">
         <?php $_smarty_tpl->_assignInScope('emp_id', $_smarty_tpl->tpl_vars['item']->value['employee_id']);
?>   
        <table class="op_table" id="tbl_<?php echo $_smarty_tpl->tpl_vars['emp_id']->value;?>
_op">
           
         <tr id="new_client_table_trh">
          <th id="new_client_table_td1">№</th>
          <th id="new_client_table_td2">Время</th>
          <th id="new_client_table_td3">№ оп</th>
          <th id="new_client_table_td4"><pre class="pre">Название операции</pre></th>
          <th id="new_client_table_td5">Цена</th>
          <th id="new_client_table_td6">З.пл</th>
          <th id="new_client_table_td7">Сумма</th>
          <th id="new_client_table_td8"></th>
         </tr>    
          <?php $_smarty_tpl->_assignInScope('emp_iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_employees1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_employees1']->value['iteration'] : null)-1);
?>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'], 'item_op', false, NULL, 'operations', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item_op']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_operations']->value['iteration']++;
?>
           <?php $_smarty_tpl->_assignInScope('op_iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_operations']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_operations']->value['iteration'] : null)-1);
?>  
          <tr id="row_<?php echo $_smarty_tpl->tpl_vars['emp_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['ID'];?>
">
           <td id="new_client_table_td1">
             <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['client_no'];?>

           </td>
           <td id="new_client_table_td2"> 
            <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['create_date'];?>

           </td>
           <td id="new_client_table_td3"> 
            <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['name_code'];?>

            
           </td >
           <td id="new_client_table_td4">
             <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['hall_name'];?>

             <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['type_name'];?>

             <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['name_value'];?>

           </td>
           <td id="new_client_table_td5"> 
            <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['price'];?>

           </td >
           <td id="new_client_table_td6"> 
            <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['salary_by_op'];?>

           </td >
           <td id="new_client_table_td7"> 
            <?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['sum'];?>

           </td >
           <td id="new_client_table_td8">
             <input type="button" value=" X " 
                   class="del_btn" 
                   name="<?php echo $_smarty_tpl->tpl_vars['emp_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['ID'];?>
"
                   onclick="opdel_click(name,
                   '<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['name_code'];?>
',
                   '<?php echo $_smarty_tpl->tpl_vars['rsEmpWorckingToDay']->value[$_smarty_tpl->tpl_vars['emp_iteration']->value]['operation_array'][$_smarty_tpl->tpl_vars['op_iteration']->value]['create_date'];?>
');">
           </td>
          </tr>     
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>    
       </div>
     </div>    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
    </div>         
   </div>    
 </div>  
 <?php echo '<script'; ?>
 type="text/javascript" src="/js/tabs.js"><?php echo '</script'; ?>
>     
</div> <!--end--right_block-->
<?php }
}

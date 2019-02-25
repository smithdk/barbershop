<?php
/* Smarty version 3.1.30, created on 2017-12-29 12:49:23
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\admin\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a45f383eb3c58_01307360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7219e9831ddbe8895e86bad9d6b3509b2f3a7e65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\admin\\main.tpl',
      1 => 1514533537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a45f383eb3c58_01307360 (Smarty_Internal_Template $_smarty_tpl) {
?>
  

<div id="right_block"><!--start--right_block-->
<div class="wrapper"> 
 <div class="tabs"> 
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmps']->value, 'item', false, NULL, 'employees', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="tab" id='tab_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_ct'><?php echo $_smarty_tpl->tpl_vars['item']->value['short_name'];?>
</div> 
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
  <br />         
</div> 
 <div class="tab_content">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmps']->value, 'item', false, NULL, 'employees', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="tab_item">
     <div class="tab_item_top">
      <div id="image_salary_div">
          
       <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['id'];
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['admin_id']->value;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable1 === $_prefixVariable2) {?> 
         <img id="emp_img" src="/images/main/administrator.png">
       <?php } else { ?>
        <!--img id="emp_img" src="/images//emp__bs.png"-->
        <img id="emp_img" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
       <?php }?>         
        <table id="image_salary_table">
          <tr>
            <td class="left_col"> Выручка:</td><td class='light_caption' id="summary_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_bs">
             <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['id'];
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['admin_id']->value;
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable3 === $_prefixVariable4) {?> 
               <?php echo $_smarty_tpl->tpl_vars['allSummary']->value;?>

             <?php } else { ?>
               <?php $_smarty_tpl->_assignInScope('Name', "rsSumm_".((string)$_smarty_tpl->tpl_vars['item']->value['id'])."_bs");
?>  
               <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['Name']->value)]->value;?>

             <?php }?>
            </td>      
          </tr>
          <tr>
            <td class="left_col">Зарплата:</td><td class='light_caption' id="salary_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_bs">
              <?php $_smarty_tpl->_assignInScope('NameS', "Salary_".((string)$_smarty_tpl->tpl_vars['item']->value['id'])."_bs");
?>
              <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['NameS']->value)]->value;?>

            </td>     
          </tr>
         </table>   
      </div> 
      <div id="new_client_div">
       <div id="emp_fio">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['partonymic'];?>
   
       </div> 
       <div  id="div_fs">
         <fieldset id="new_client_fs">
          <legend class="legend"> Новый клиент [операции]</legend>
           <div id="div_fs_top">
             <select id="os_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_ct" class="opreation_sel">
                 <option value=o_0_0></option>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['id'];
$_prefixVariable5=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['admin_id']->value;
$_prefixVariable6=ob_get_clean();
if ($_prefixVariable5 === $_prefixVariable6) {?> 
                 <?php $_smarty_tpl->_assignInScope('select_lis', 'rsAdminOperation');
?> 
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('select_lis', 'rsOperations');
?>   
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['select_lis']->value)]->value, 'operation', false, NULL, 'operation', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['operation']->value) {
?>
                 <option value=o_<?php echo $_smarty_tpl->tpl_vars['operation']->value['ID'];?>
_<?php echo $_smarty_tpl->tpl_vars['operation']->value['action'];?>
>
                   <?php echo $_smarty_tpl->tpl_vars['operation']->value['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['operation']->value['name_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['operation']->value['hall_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['operation']->value['type_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['operation']->value['name_value'];?>
 <?php echo $_smarty_tpl->tpl_vars['operation']->value['price'];?>
 руб.
                  </option>  
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
              </select>
             <br />
             <!--input type='button' id='ab__mf' onclick='open_mf(event);' value="modal form"-->
             <!--p><a href="#" id="go">Ссылка с окном</a></p-->
             <input id="ab_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_ct" class="add_button" type="button" 
              value=" Добавить " onclick="add_operation_onclick(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,event);">  
           </div>     
           <div id="div_fs_middle">
                <table id="nct_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_ct" class="new_client_table">
               <tbody>
               </tbody>    
              </table>    
             </div>  
             <div id="div_fs_bottom">
                <input class="save_op_button" type="button" value=" Сохранить "
                 onclick="save_operations_onclick(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'admin');">  
             </div>
         </fieldset>   
       </div>       
      </div>  
     </div>   
 
     <div class="tab_item_bottom">    
      <fieldset id="summary_fs">   
       <legend class="legend"> Все операции за день</legend> 
<!--div id="div_summary_table"-->
        <table id="summary_table">
          <tr id="new_client_table_trh">
          <th id="new_client_table_td1">№</th>
          <th id="new_client_table_td2">№оп</th>
          <th id="new_client_table_td3">Название</th>
          <th id="new_client_table_td4">Цена</th>
          <th id="new_client_table_td5">Сумма</th>
          </tr>
       <?php $_smarty_tpl->_assignInScope('rsName', "rsOperation_".((string)$_smarty_tpl->tpl_vars['item']->value['id'])."_emp");
?>
       
       <?php ob_start();
echo count($_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['rsName']->value)]->value);
$_prefixVariable7=ob_get_clean();
if ($_prefixVariable7) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['rsName']->value)]->value, 'val', false, NULL, 'operation', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>  
         <tr id="new_client_table_tr">
          <td id="new_client_table_td1"><?php echo $_smarty_tpl->tpl_vars['val']->value['client_no'];?>
</td>
          <td id="new_client_table_td2"><?php echo $_smarty_tpl->tpl_vars['val']->value['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['val']->value['name_code'];?>
</td>
          <td id="new_client_table_td3"><?php echo $_smarty_tpl->tpl_vars['val']->value['hall_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value['type_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value['name_value'];?>
</td>
          <td id="new_client_table_td4"><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</td>
          <td id="new_client_table_td5"><?php echo $_smarty_tpl->tpl_vars['val']->value['sum'];?>
</td>
         </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
       <?php }?>      
      </table>    
     <!--/div-->
       
      </fieldset>      
     </div>     
    </div> 
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
 </div> 
 </div> 
 <?php echo '<script'; ?>
 type="text/javascript" src="/js/tabs.js"><?php echo '</script'; ?>
>
 <!-- Модальное oкнo ввода количества --> 
 <div id="modal_form">
      <!--span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
      <p id="emp_id_modal">qqq</p>
      Введите количество :
 <select id="sel_count">
      <?php
$_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['count']->step = 1;$_smarty_tpl->tpl_vars['count']->total = (int) ceil(($_smarty_tpl->tpl_vars['count']->step > 0 ? 99+1 - (1) : 1-(99)+1)/abs($_smarty_tpl->tpl_vars['count']->step));
if ($_smarty_tpl->tpl_vars['count']->total > 0) {
for ($_smarty_tpl->tpl_vars['count']->value = 1, $_smarty_tpl->tpl_vars['count']->iteration = 1;$_smarty_tpl->tpl_vars['count']->iteration <= $_smarty_tpl->tpl_vars['count']->total;$_smarty_tpl->tpl_vars['count']->value += $_smarty_tpl->tpl_vars['count']->step, $_smarty_tpl->tpl_vars['count']->iteration++) {
$_smarty_tpl->tpl_vars['count']->first = $_smarty_tpl->tpl_vars['count']->iteration == 1;$_smarty_tpl->tpl_vars['count']->last = $_smarty_tpl->tpl_vars['count']->iteration == $_smarty_tpl->tpl_vars['count']->total;?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</option>   
      <?php }
}
?>

 </select>  
 <br /><br />
   <input  type="button" value="  Сохранить  " id="modal_close"
    onclick="save_count();">   
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
 
</div> <!--end--right_block-->
<?php }
}

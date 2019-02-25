<?php
/* Smarty version 3.1.30, created on 2017-12-27 16:48:24
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\root\work.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4388887c8284_60531613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad93a9000d75c041f552309779eaa7e641153e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\root\\work.tpl',
      1 => 1514375301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4388887c8284_60531613 (Smarty_Internal_Template $_smarty_tpl) {
?>
  

<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >РАБОТА</div>   
</div>     
<div class="wrapper"> 
 <div class="tabs"> 
    <div class="tab" id='photo'>Фото из дома</div> 
     <!--div class="tab" id='photo'>Чтото еще</div--> 
  <br />         
</div> 
<div class="tab_content">
 <div class="tab_item">   
<!--------->
     <div class="tab_item_top">
      <div id="new_client_div">
       <div  id="div_fs">
         <fieldset id="new_client_fs">
          <legend class="legend"> Новый клиент </legend>
           <div id="div_fs_top">
             <select id="root_operaton" class="opreation_sel">
              <option value=o_0_0></option>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsRootOperations']->value, 'operation', false, NULL, 'operation', array (
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
             <input id="add_op" class="add_button" type="button" 
              value=" Добавить " onclick="root_add_operation_onclick(<?php echo $_smarty_tpl->tpl_vars['usr_id']->value;?>
,event);">  
           </div>     
           <div id="div_fs_middle">
                <table id="root_new_client_table" class="new_client_table">
               <tbody>
               </tbody>    
              </table>    
             </div>  
             <div id="div_fs_bottom">
                <input class="save_op_button" type="button" value=" Сохранить "
                 onclick="save_operations_onclick(<?php echo $_smarty_tpl->tpl_vars['usr_id']->value;?>
,'root');">  
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
          <th id="new_client_table_td4">Название</th>
          <th id="new_client_table_td5">Цена</th>
          <th id="new_client_table_td6">Сумма</th>
          </tr>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['rsCurOperations']->value;
$_prefixVariable1=ob_get_clean();
if (count($_prefixVariable1)) {?>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCurOperations']->value, 'val', false, NULL, 'operation', array (
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
           <td id="new_client_table_td4"><?php echo $_smarty_tpl->tpl_vars['val']->value['hall_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value['type_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value['name_value'];?>
</td>
           <td id="new_client_table_td5"><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</td>
           <td id="new_client_table_td6"><?php echo $_smarty_tpl->tpl_vars['val']->value['sum'];?>
</td>
          </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        <?php }?>    
      </table>      
      </fieldset>      
     </div>   
<!---------->     
 </div>
 <!--div class="tab_item">   
  Чтото еще  
 </div-->    
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
    onclick="root_save_count();">   
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
</div> <!--end--right_block-->
<?php }
}

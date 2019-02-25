<?php
/* Smarty version 3.1.30, created on 2017-12-25 13:27:09
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\admin\report.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40b65dac6027_71000135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efe7046d198daeac2b1ea329219e905b84ee2605' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\admin\\report.tpl',
      1 => 1514190419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a40b65dac6027_71000135 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php $_smarty_tpl->_assignInScope('cur_emp', '');
$_smarty_tpl->_assignInScope('salary', '');
$_smarty_tpl->_assignInScope('summa', '');
$_smarty_tpl->_assignInScope('root', 0);
?>
<div id="right_block"><!--start--right_block-->
 <div id="report_top">   
 <input type="button" value=" Печать " class="print_button" onclick="PrintElem('#to_print');">
   <h4>ОТЧЕТ</h4>
 </div>
 <div class="print_arrea" id="to_print">
    <h4>Финансовый отчет парикмахерской "<?php echo $_smarty_tpl->tpl_vars['obj_name_rus']->value;?>
" за <?php echo $_smarty_tpl->tpl_vars['curdate']->value;?>
</h4> 
    <span class="font_1">Администратор :</span><span class="font_2"> <?php echo $_smarty_tpl->tpl_vars['adm_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['adm_last_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['adm_partonymic']->value;?>
</span>
    <table class='print_table'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllWorkToDay']->value, 'value', false, NULL, 'AllWorkToDay', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['cur_emp']->value != $_smarty_tpl->tpl_vars['value']->value['first_name']) {?>  
       <?php if ($_smarty_tpl->tpl_vars['cur_emp']->value != '') {?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['root']->value;
$_prefixVariable1=ob_get_clean();
if (!$_prefixVariable1) {?>       
          <tr class='print_table_tr'>
            <td class='print_table_td' colspan='4' rowspan='2'>
            </td> 
            <td class='print_table_td'>
                <span class='italic_caption'>Итого:</span>
            </td>
            <td class='print_table_td'>    
              <span class='italic_underline_caption'><?php echo $_smarty_tpl->tpl_vars['summa']->value;?>
</span>
            </td>
          </tr> 
          <tr class='print_table_tr'>
            <td class='print_table_td'> 
              <span class='italic_caption'>З/пл.:</span> 
            </td>
            <td class='print_table_td'> 
             <span class='italic_caption'><?php echo $_smarty_tpl->tpl_vars['salary']->value;?>
</span>
            </td>
          </tr>  
        <?php }?>  
       <?php }?>   
       <tr class='print_table_tr_fio'> 
         <td class='print_table_td_fio' colspan='6'>
             <span class="italic_caption"><?php echo $_smarty_tpl->tpl_vars['value']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['partonymic'];?>
</span>
         </td>        
       </tr>
       <tr class='print_table_tr'>
          <td class='print_table_td'>
           №
          </td>  
          <td class='print_table_td'>
           Время 
          </td>  
          <td>  
            <pre class='pre'>№ оп   </pre>  
          </td>  
          <td class='print_table_td'>  
           Название операции   
          </td>  
          <td class='print_table_td'>
            Цена
          </td>  
          <td class='print_table_td'> 
           Сумма   
          </td>
       </tr>      

        <tr class='print_table_tr'>
          <td class='print_table_td'>
           <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['client_no'];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

          </td>  
          <td class='print_table_td'>
           <?php echo $_smarty_tpl->tpl_vars['value']->value['create_date'];?>

          </td>  
          <td class='print_table_td'>  
            <?php echo $_smarty_tpl->tpl_vars['value']->value['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['name_code'];?>
 
          </td>  
          <td class='print_table_td'>  
            <?php echo $_smarty_tpl->tpl_vars['value']->value['hall_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['type_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['name_value'];?>
  
          </td>  
          <td class='print_table_td'>
           <?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>

          </td>  
          <td class='print_table_td'> 
            <?php echo $_smarty_tpl->tpl_vars['value']->value['@summa'];?>

          </td>  
       </tr>       
      <?php $_smarty_tpl->_assignInScope('cur_emp', $_smarty_tpl->tpl_vars['value']->value['first_name']);
?>
      <?php } else { ?> 
       <tr class='print_table_tr'>
          <td class='print_table_td'>
           <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['client_no'];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>

          </td>  
          <td class='print_table_td'>
           <?php echo $_smarty_tpl->tpl_vars['value']->value['create_date'];?>

          </td>  
          <td class='print_table_td'>  
            <?php echo $_smarty_tpl->tpl_vars['value']->value['type_code'];?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value['name_code'];?>
 
          </td>  
          <td class='print_table_td'>  
            <?php echo $_smarty_tpl->tpl_vars['value']->value['hall_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['type_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['name_value'];?>
  
          </td>  
          <td class='print_table_td'>
           <?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>

          </td>  
          <td class='print_table_td'> 
            <?php echo $_smarty_tpl->tpl_vars['value']->value['@summa'];?>
   
          </td>  
       </tr>    
      <?php }?>
      <?php $_smarty_tpl->_assignInScope('summa', $_smarty_tpl->tpl_vars['rsSummaryByDay']->value[$_smarty_tpl->tpl_vars['value']->value['employee_id']]);
?>
      <?php $_smarty_tpl->_assignInScope('salary', $_smarty_tpl->tpl_vars['rsSalaryByDay']->value[$_smarty_tpl->tpl_vars['value']->value['employee_id']]);
?>
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['privilegy'];
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 === 'root') {?>
        <?php $_smarty_tpl->_assignInScope('root', 1);
?>
      <?php } else { ?>  
        <?php $_smarty_tpl->_assignInScope('root', 0);
?>  
      <?php }?>      
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['root']->value;
$_prefixVariable5=ob_get_clean();
if (!$_prefixVariable5) {?> 
          <tr class='print_table_tr' >
            <td class='print_table_td' colspan='4' rowspan="2">
            </td> 
            <td class='print_table_td'>
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['privilegy'];
$_prefixVariable6=ob_get_clean();
if (!($_prefixVariable6 === 'root')) {?>  
              <span class='italic_caption'>Итого:</span>
              <?php }?>
            </td>
            <td class='print_table_td'>
              <span class='italic_underline_caption'><?php echo $_smarty_tpl->tpl_vars['rsSummaryByDay']->value[$_smarty_tpl->tpl_vars['value']->value['employee_id']];?>
</span>  
            </td>
          </tr> 
          <tr>
           <td class='print_table_td'>
            <span class='italic_caption'>З/пл.:</span>  
           </td>
           <td class='print_table_td'>
            <span class='italic_caption'><?php echo $_smarty_tpl->tpl_vars['salary']->value;?>
</span>
           </td>
          </tr>  
      <?php }?>    
    </table>
            
    <table id='report_summary_table'>
      <tr>
       <td class='report_summary_table_td_left'>Всего в кассе:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['all_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка парикмахерская:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['bs_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка фото:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['photo_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка ксерокс:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['xerox_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка доп.услуги:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['additional_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка продажи:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['sale_summary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>З.пл. парикмахерам:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['all_bs_salary']->value;?>
</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>З.пл. администратору:</td>
       <td class='report_summary_table_td_right'><?php echo $_smarty_tpl->tpl_vars['admin_salary']->value;?>
</td>
      </tr>
      <tr>
       <td class='italic_caption'>Остаток:</td>
       <td class='italic_underline_caption'><?php echo $_smarty_tpl->tpl_vars['sale_to_boss']->value;?>
</td>
      </tr>
    </table>
    
 
  <!-- ss <br /-->
  
 </div>
</div> <!--end--right_block-->
<?php }
}

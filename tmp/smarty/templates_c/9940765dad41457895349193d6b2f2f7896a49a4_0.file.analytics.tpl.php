<?php
/* Smarty version 3.1.30, created on 2018-03-26 08:59:35
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\root\analytics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab89a57649d02_09515855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9940765dad41457895349193d6b2f2f7896a49a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\root\\analytics.tpl',
      1 => 1519035987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab89a57649d02_09515855 (Smarty_Internal_Template $_smarty_tpl) {
?>
  

<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >АНАЛИТИКА</div>   
</div>     
<div class="wrapper"> 
 <div class="tabs"> 
    <div class="tab" id='month_summary'>Итоги за месяц</div> 
    <div class="tab" id='costs'>Расходы за месяц</div> 
    <!--div class="tab" id='photo'>Чтото еще</div--> 
  <br />         
</div> 
<div class="tab_content">
 <div class="tab_item">   
 <!---------->
  
 <!---------->     
 </div>
 <div class="tab_item">   
 <!---------->
 <div class="costs_tab_item_top">
     
 </div>
 <div class="costs_tab_item_bottom">
     
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
 <!--div id="modal_form"-->
      <!--span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
      <!--p id="emp_id_modal">qqq</p>
      Введите количество :
 <select id="sel_count">
      
        <option value=></option>   
      
 </select>  
 <br /><br />
   <input  type="button" value="  Сохранить  " id="modal_close"
    onclick="root_save_count();">   
</div-->
<!--div id="overlay"></div--><!-- Пoдлoжкa -->
</div> <!--end--right_block-->
<?php }
}

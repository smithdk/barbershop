<?php
/* Smarty version 3.1.30, created on 2018-04-09 20:34:11
  from "/var/www/barbershop/views/default/root/employess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb87f3af9fd7_11278367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c85f955e2d881e2e7bad3ec9b9fd81f6828bd55' => 
    array (
      0 => '/var/www/barbershop/views/default/root/employess.tpl',
      1 => 1523266346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb87f3af9fd7_11278367 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
  
<?php $_smarty_tpl->_assignInScope('arr_index', 0);
?>
<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption">СОТРУДНИКИ</div>   
</div>     
<div class="wrapper"> 
 <div class="tabs"> 
    <div class="tab" id='month_summary'>Список</div> 
    <div class="tab" id='costs'>Сегодня работают</div> 
    <!--div class="tab" id='photo'>Чтото еще</div--> 
  <br />         
</div> 
<div class="tab_content">
 <div class="tab_item">   
 <!---Список------->
  <div class="top_e_div">
 <table id="t_e">
  <tr >
   <td id="t_e_l" class="vert_al_top ">
    <img id="emp_img" src="<?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['image'];?>
">
     <form id='file_form'> 
      <div class='load_file'>
       <input id='e_file' type='file'>
       <span id='val'></span>
       <div id='button'>Обзор 150pX200p</div>
      </div>
     </form> 
     <span id='cur_row' class='cl_hiden'>0</span>
     <span id='is_new' class='cl_hiden'>0</span>
     <input id='e_button_load' class="buttons_e_save" type="button" value=" Загрузить " onclick='e_button_load_click();' disabled>
    </td> 
  <td id="t_e_r">
   <table class='st_e '>
    <tr class='maroon_border'>
     <td class='maroon_text maroon_border'>Фамилия</td>
     <td id="emp_fn" class="maroon_border">
      <span id='emp_fn_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['first_name'];?>
</span>
      <input id='emp_fn_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Логин</td>
     <td id="emp_login" class='maroon_border'>
         <span id='emp_login_span'><?php echo substr($_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['login'],3,100);?>
</span>
       <input id='emp_login_input' type="text" class='e_inp w_100 cl_hiden' >
     </td>
     <td class='all_right maroon_text maroon_border'>Коментарии</td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Имя</td>
     <td id="emp_ln" class='maroon_border'>
      <span id='emp_ln_span'>  <?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['last_name'];?>
</span>
      <input id='emp_ln_input' type="text" class='e_inp w_100 cl_hiden'> 
     </td>
     <td class='maroon_text maroon_border'>Пароль</td>
     <td class="maroon_border">
      <span id='emp_password_span'>********</span>
      <span id='emp_password_span_h' class='cl_hiden'></span>
      <input id='emp_password_input' type="password" class='e_inp w_100 cl_hiden'>
     </td>
    <td rowspan="8" class="vert_al_top maroon_border">   
     <textarea id="emp_comment" class='text_arr disable_events' rows="12" readonly='true'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['comment'];?>

      </textarea>
     </td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Отчество</td>
     <td id="emp_partonymic" class="maroon_border">
      <span id='emp_partonymic_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['partonymic'];?>
</span>
      <input id='emp_partonymic_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Парикмахерская</td>
     <td id="obj_name_rus" class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['name_rus'];?>
</td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Короткое Имя</td>
     <td id="emp_short_name" class="maroon_border">
      <span id='emp_short_name_span'> <?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['short_name'];?>
</span>
      <input id='emp_short_name_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>Запись создал</td>
     <td id="emp_creator" class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['creator'];?>
</td>  
    </tr>
    <tr><td class='maroon_text maroon_border'>Должность</td>
     <?php if (($_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['privilegy'] == 'admin')) {?>
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Администратор</span>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);' >
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>
      </select>
     </td><?php }?>
     <?php if (($_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['privilegy'] == 'employee')) {?>
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Парикмахер</span>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);'>
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>      </select>
     </td><?php }?>
     <?php if (($_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['privilegy'] == 'root')) {?>
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Директор</span>>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);'> 
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>
      </select>
     </td><?php }?>     
     
     <td class='maroon_text maroon_border'>Дата создания</td>
     <td id="emp_create_date" class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['create_date'];?>
</td>  
    </tr>
    <tr><td class='maroon_text maroon_border'>Процент</td>
     <td id="emp_salary" class="maroon_border">
      <span id='emp_salary_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['salary'];?>
</span>
      <input id='emp_salary_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Запись изменил</td>
     <td id="emp_last_modifer" class="maroon_border">
         <?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['last_modifer'];?>

     </td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Пов. процент</td>
     <td id="emp_salary_1" class="maroon_border">
      <span id='emp_salary_1_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['salary_1'];?>
</span>
      <input id='emp_salary_1_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>Дата изменения</td>
     <td id="emp_last_mod_date" class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['last_mod_date'];?>
</td>
    </tr>

    <tr><td class='maroon_text maroon_border'>Телефон</td>
     <td id="emp_phone" class="maroon_border">
      <span id='emp_phone_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['phone'];?>
</span>
      <input id='emp_phone_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>e-mail</td>
     <td id="emp_email" class="maroon_border">
      <span id='emp_email_span'><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['email'];?>
</span>
      <input id='emp_email_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
    </tr>

    <tr><td class='maroon_text maroon_border'>ID</td>
     <td id="e_id" class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['ID'];?>
</td>
     <td class='maroon_text maroon_border'>Работает</td>
     <td class='maroon_text maroon_border'>
      <?php if (($_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['is_work'])) {?>
       <input id="emp_is_work" type="checkbox" class='cb_1' checked disabled >
      <?php } else { ?>
       <input id="emp_is_work" type="checkbox" class='cb_1' disabled>  
      <?php }?>
     </td>
    </tr>
    <tr>
     <td class='maroon_text maroon_border'>Файл фото</td>
     <td id="emp_image" colspan='4' class="maroon_border"><?php echo $_smarty_tpl->tpl_vars['rsEmployesList']->value[$_smarty_tpl->tpl_vars['arr_index']->value]['image'];?>
</td>   
    </tr>    
   </table>
  </td>   
 </tr>    
</table>
</div>
<div class="buttons_e_div">
<input class="buttons" type="button" value=" Новая " onclick="e_button_new_click(this);">
<input id='e_button_edit' class="buttons" type="button" value=" Редактировать " onclick="e_button_edit_click(this);">   
<input id='e_button_save' class="buttons" type="button" value=" Сохранить "  disabled onclick="e_button_save_click(this);"> 
</div>
<div class="bottom_e_div" > 
 <table id='e_list_table' class="list_table" >
  <thead>    
    <tr class="list_table_tr">
     <th class="list_table_td1">Должность</th>   
     <th class="list_table_td2">Фамилия</th>
     <th class="list_table_td3">Имя</th> 	 
     <th class="list_table_td4">Отчество</th>
     <th class="list_table_td5">Короткое имя</th>
     <th class="list_table_td6">Работает</th>
    </tr>
  </thead>     
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsEmployesList']->value, 'item', false, NULL, 'EmployesList', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
   <?php if (($_smarty_tpl->tpl_vars['item']->value['is_work'])) {?>
    <tr id="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" onclick="t_e_r_onclick(this);" >
   <?php } else { ?>   
   <tr  id="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
" class="gray_text" onclick="t_e_r_onclick(this);">   
   <?php }?>    
    <td class="cl_hiden" id="emp_id"><?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
</td>
    <?php if (($_smarty_tpl->tpl_vars['item']->value['privilegy'] == "admin")) {?>
     <td class="list_table_td1">Администратор</td>   
    <?php }?>    
    <?php if (($_smarty_tpl->tpl_vars['item']->value['privilegy'] == "employee")) {?>
     <td class="list_table_td1">Парикмахер</td>   
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['item']->value['privilegy'] == "root")) {?>
     <td class="list_table_td1">Директор</td>   
    <?php }?>
    <td class="list_table_td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</td>
    <td class="list_table_td3"><?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</td>
    <td class="list_table_td4"><?php echo $_smarty_tpl->tpl_vars['item']->value['partonymic'];?>
</td>
    <?php if (($_smarty_tpl->tpl_vars['item']->value['short_name'] == "Администратор")) {?>
     <td class="list_table_td5"></td>
    <?php } else { ?> 
     <td class="list_table_td5"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_name'];?>
</td>   
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['item']->value['is_work'])) {?>
     <td class="list_table_td6">
      Да   
     </td>
    <?php } else { ?>
     <td class="list_table_td6">
      Нет
     </td>   
    <?php }?>    
   </tr>       
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 </table>   
</div>
 <!----End Список------>     
 </div>
 <div class="tab_item">   
 <!---Сегодня работают------->
 <div class='div_47pecents_center bottom_border'>
  <h2 class='navi_text'><?php echo $_smarty_tpl->tpl_vars['employeeCaption']->value;?>
</h2>    
  <div class='div_90pecents_left'>   
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
  </div>
   <div>
      <input type="button" value="Сохранить" class="buttons" onclick="e_save_shedule();">  
   </div>
 </div> 
 <div class='div_51pecents_center'>
  <div class='a_bottom'>   
   <h2 class='navi_text'><?php echo $_smarty_tpl->tpl_vars['adminCaption']->value;?>
</h2>
    <select id="e_adm_select" class='fs_12pt' onchange="e_admchange(this);"> 
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAdmins']->value, 'item', false, NULL, 'admins', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
       <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
' <?php if ($_smarty_tpl->tpl_vars['item']->value['ID'] == $_smarty_tpl->tpl_vars['selectedAdm']->value) {?> selected <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['partonymic'];?>
</option>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
       
    </select>
    <br />
    <img class='i_150x200' id="adm_img" src="<?php echo $_smarty_tpl->tpl_vars['admin_image']->value;?>
">
  </div>
   <div class='a_bottom'>
    <input type="button" value="Сохранить" class="buttons" onclick="e_adm_btn_onclick();">  
   </div>
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

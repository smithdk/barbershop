{*progect name: BARBERSHOP*}  
{*tpl для root контроллера*}  
{$arr_index=0}
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
    <img id="emp_img" src="{$rsEmployesList[$arr_index]['image']}">
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
      <span id='emp_fn_span'>{$rsEmployesList[$arr_index]['first_name']}</span>
      <input id='emp_fn_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Логин</td>
     <td id="emp_login" class='maroon_border'>
         <span id='emp_login_span'>{$rsEmployesList[$arr_index]['login']|substr:3:100 }</span>
       <input id='emp_login_input' type="text" class='e_inp w_100 cl_hiden' >
     </td>
     <td class='all_right maroon_text maroon_border'>Коментарии</td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Имя</td>
     <td id="emp_ln" class='maroon_border'>
      <span id='emp_ln_span'>  {$rsEmployesList[$arr_index]['last_name']}</span>
      <input id='emp_ln_input' type="text" class='e_inp w_100 cl_hiden'> 
     </td>
     <td class='maroon_text maroon_border'>Пароль</td>
     <td class="maroon_border">
      <span id='emp_password_span'>********</span>
      <span id='emp_password_span_h' class='cl_hiden'></span>
      <input id='emp_password_input' type="password" class='e_inp w_100 cl_hiden'>
     </td>
    <td rowspan="8" class="vert_al_top maroon_border">   
     <textarea id="emp_comment" class='text_arr disable_events' rows="12" readonly='true'>{$rsEmployesList[$arr_index]['comment']}
      </textarea>
     </td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Отчество</td>
     <td id="emp_partonymic" class="maroon_border">
      <span id='emp_partonymic_span'>{$rsEmployesList[$arr_index]['partonymic']}</span>
      <input id='emp_partonymic_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Парикмахерская</td>
     <td id="obj_name_rus" class="maroon_border">{$rsEmployesList[$arr_index]['name_rus']}</td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Короткое Имя</td>
     <td id="emp_short_name" class="maroon_border">
      <span id='emp_short_name_span'> {$rsEmployesList[$arr_index]['short_name']}</span>
      <input id='emp_short_name_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>Запись создал</td>
     <td id="emp_creator" class="maroon_border">{$rsEmployesList[$arr_index]['creator']}</td>  
    </tr>
    <tr><td class='maroon_text maroon_border'>Должность</td>
     {if ($rsEmployesList[$arr_index]['privilegy']== 'admin')}
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Администратор</span>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);' >
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>
      </select>
     </td>{/if}
     {if ($rsEmployesList[$arr_index]['privilegy']== 'employee')}
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Парикмахер</span>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);'>
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>      </select>
     </td>{/if}
     {if ($rsEmployesList[$arr_index]['privilegy']== 'root')}
     <td id="emp_privilegy" class="maroon_border">
     <span id='emp_privilegy_span'>Директор</span>>
      <select id='emp_privilegy_select' class='e_inp w_100 cl_hiden' onchange='emp_privilegy_select_change(this);'> 
       <option value='admin'>Администратор</option>
       <option value='employee'>Парикмахер</option>
       <option value='root'>Директор</option>
      </select>
     </td>{/if}     
     
     <td class='maroon_text maroon_border'>Дата создания</td>
     <td id="emp_create_date" class="maroon_border">{$rsEmployesList[$arr_index]['create_date']}</td>  
    </tr>
    <tr><td class='maroon_text maroon_border'>Процент</td>
     <td id="emp_salary" class="maroon_border">
      <span id='emp_salary_span'>{$rsEmployesList[$arr_index]['salary']}</span>
      <input id='emp_salary_input' type="text" class='e_inp w_100 cl_hiden'>
     </td>
     <td class='maroon_text maroon_border'>Запись изменил</td>
     <td id="emp_last_modifer" class="maroon_border">
         {$rsEmployesList[$arr_index]['last_modifer']}
     </td>
    </tr>
    <tr><td class='maroon_text maroon_border'>Пов. процент</td>
     <td id="emp_salary_1" class="maroon_border">
      <span id='emp_salary_1_span'>{$rsEmployesList[$arr_index]['salary_1']}</span>
      <input id='emp_salary_1_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>Дата изменения</td>
     <td id="emp_last_mod_date" class="maroon_border">{$rsEmployesList[$arr_index]['last_mod_date']}</td>
    </tr>

    <tr><td class='maroon_text maroon_border'>Телефон</td>
     <td id="emp_phone" class="maroon_border">
      <span id='emp_phone_span'>{$rsEmployesList[$arr_index]['phone']}</span>
      <input id='emp_phone_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
     <td class='maroon_text maroon_border'>e-mail</td>
     <td id="emp_email" class="maroon_border">
      <span id='emp_email_span'>{$rsEmployesList[$arr_index]['email']}</span>
      <input id='emp_email_input' type="text" class='e_inp w_100 cl_hiden'>   
     </td>
    </tr>

    <tr><td class='maroon_text maroon_border'>ID</td>
     <td id="e_id" class="maroon_border">{$rsEmployesList[$arr_index]['ID']}</td>
     <td class='maroon_text maroon_border'>Работает</td>
     <td class='maroon_text maroon_border'>
      {if ($rsEmployesList[$arr_index]['is_work']) }
       <input id="emp_is_work" type="checkbox" class='cb_1' checked disabled >
      {else}
       <input id="emp_is_work" type="checkbox" class='cb_1' disabled>  
      {/if}
     </td>
    </tr>
    <tr>
     <td class='maroon_text maroon_border'>Файл фото</td>
     <td id="emp_image" colspan='4' class="maroon_border">{$rsEmployesList[$arr_index]['image']}</td>   
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
  {foreach $rsEmployesList as $item name=EmployesList}
   {if ($item['is_work'])}
    <tr id="{$item['ID']}" onclick="t_e_r_onclick(this);" >
   {else}   
   <tr  id="{$item['ID']}" class="gray_text" onclick="t_e_r_onclick(this);">   
   {/if}    
    <td class="cl_hiden" id="emp_id">{$item['ID']}</td>
    {if ($item['privilegy'] == "admin") }
     <td class="list_table_td1">Администратор</td>   
    {/if}    
    {if ($item['privilegy'] == "employee") }
     <td class="list_table_td1">Парикмахер</td>   
    {/if}
    {if ($item['privilegy'] == "root") }
     <td class="list_table_td1">Директор</td>   
    {/if}
    <td class="list_table_td2">{$item['first_name']}</td>
    <td class="list_table_td3">{$item['last_name']}</td>
    <td class="list_table_td4">{$item['partonymic']}</td>
    {if ($item['short_name'] == "Администратор") }
     <td class="list_table_td5"></td>
    {else} 
     <td class="list_table_td5">{$item['short_name']}</td>   
    {/if}
    {if ($item['is_work'])}
     <td class="list_table_td6">
      Да   
     </td>
    {else}
     <td class="list_table_td6">
      Нет
     </td>   
    {/if}    
   </tr>       
  {/foreach}
 </table>   
</div>
 <!----End Список------>     
 </div>
 <div class="tab_item">   
 <!---Сегодня работают------->
 <div class='div_47pecents_center bottom_border'>
  <h2 class='navi_text'>{$employeeCaption}</h2>    
  <div class='div_90pecents_left'>   
   <ul>
    {foreach $rsEmployee as $item name=employees}
        <li class="emp_list"><input type="checkbox" name="emp[]" value="{$item['id']}" 
         {if $item['@checked']} checked {/if} />
         <label for="cb1"> {$item['first_name']} {$item['last_name']}</label></li> 
    {/foreach}   
   </ul>
  </div>
   <div>
      <input type="button" value="Сохранить" class="buttons" onclick="e_save_shedule();">  
   </div>
 </div> 
 <div class='div_51pecents_center'>
  <div class='a_bottom'>   
   <h2 class='navi_text'>{$adminCaption}</h2>
    <select id="e_adm_select" class='fs_12pt' onchange="e_admchange(this);"> 
     {foreach $rsAdmins as $item name=admins}
       <option value='{$item['ID']}' {if $item['ID'] == $selectedAdm } selected {/if}>
        {$item['first_name']} {$item['last_name']} {$item['partonymic']}</option>
     {/foreach}       
    </select>
    <br />
    <img class='i_150x200' id="adm_img" src="{$admin_image}">
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
    
 <script type="text/javascript" src="/js/tabs.js"></script>   
  <!-- Модальное oкнo ввода количества --> 
 <!--div id="modal_form"-->
      <!--span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
      <!--p id="emp_id_modal">qqq</p>
      Введите количество :
 <select id="sel_count">
      {*for  $count=1 to 99*}
        <option value={*$count*}>{*$count*}</option>   
      {*/for*}
 </select>  
 <br /><br />
   <input  type="button" value="  Сохранить  " id="modal_close"
    onclick="root_save_count();">   
</div-->
<!--div id="overlay"></div--><!-- Пoдлoжкa -->
</div> <!--end--right_block-->

{*progect name: BARBERSHOP1*}
<div id="right_block">

 <fieldset class="fieldset" id="change_usr_fs">
 <legend class="legend">     [ Выбор пользователя ]</legend>
  Пользователь
  <select  id ="users_menu" onchange="users_menu_change(this);">
    <option value="NewUser">Новый пользователь</option>
    {foreach $rsUsers as $item name=users}
        <option value="{$item['id']}">{$item['RIGHT(login,LENGTH(login)-3)']}</option>
    {/foreach}     
  </select> 
  <input type="button" value="Создать" id="user_create_button" onclick="usercreate_click();">
  <input type="button" value="Отмена" id="user_cancel_button" onclick="usercancel_click();">
</fieldset>

<fieldset class="fieldset" id="main_user_fields" id="obj_fs">
   <legend class="legend">[ Основное ]</legend>
   <table class="cl_table">
       <tr class="cl_table">
           <td class="cl_table">
             Логин:             
           </td>
           <td>
            <input type="edit" id="user_login">
           </td>
           <td>
            Пароль:   
           </td>
           <td>
             <input type="password" id="user_pass">  
           </td>
           <td>
             Привилегии :  
           </td>
           <td>
             <select id="user_priv_menu" onchange="user_priv_menu_change(this);"> 
               <option value="None">-----</option>
               <option value="employee">Парикмахер</option>
               <option value="admin">Администратор</option>
               <option value="root">root</option>
               <option value="superroot">superroot</option>    
            </select>  
           </td>
       </tr>
       <tr class="cl_table">
           <td>
              e-mail: 
           </td>
           <td>
             <input type="edit" id="user_email">  
           </td>
           <td>
              Тел. 
           </td>
           <td>
             <input type="edit" id="phone" class="edit_field">    
           </td>
           <td>
             <p id="user_obj_caption">Объект:</p>  
           </td>
           <td>
             <select id="user_obj_menu"> 
                 <option value="None">--Выберите объект--</option>
                {foreach $rsObjects as $item name=objects}
                    <option value="{$item['id']}">{$item['name_rus']}</option>
                {/foreach}    
            </select>     
           </td>
       </tr>
   </table>
 <!--
   Логин: <input type="edit" id="user_login">
   Пароль: <input type="password" id="user_pass">
   Привилегии :
   <select id="user_priv_menu"> 
     <option>-----</option>
     <option>Парикмахер</option>
     <option>Администратор</option>
     <option>root</option>
     <option>superroot</option>    
   </select>
--> 
</fieldset>
<fieldset class="fieldset" id="detail_user_fields" id="obj_fs">
   <legend class="legend">[ Подробно ]</legend>
   <table>
     <tr>
       <td><img id="usr_image" src="/images/main/logo.png"></td> 
       <td><p id="user_cooments">Комментарии</p><textarea name="text" id="us_comments"></textarea></td>
     </tr>
     <tr>
       <td> <input type="button" id="load_usr_img" value="Загрузить"></td>
       <td id='c_short_name'>   Короткое имя :<input type="edit" id="short_name" class="edit_field"></td>
     </tr>
   </table>    
   <table class="cl_table">
    <tr>
      <td>Фамилия</td><td><input type="edit" id="first_name" class="edit_field"></td> 
      <td>Имя</td><td><input type="edit" id="last_name" class="edit_field"></td>
      <td>Отчество</td><td><input type="edit" id="partonymic" class="edit_field"></td>
    </tr>
    <tr> 
      <td id="c_salary">Процент</td><td><input type="edit" id="salary" class="edit_field1"></td> 
      <td id="c_salary_1">Повышенный %</td><td><input type="edit" id="salary_1" class="edit_field1"></td>
      <td>Работает</td><td><input type="checkbox" id="is_work" checked></td> 
    </tr>
   </table>
</fieldset>  
  
 <fieldset class="fieldset" id="reference_fs">
   <legend class="legend">[ Справочная информация ]</legend>
   <table>
     <tr>
         <td class="ne_caption_in_table_l">id:</td><td class="ne_caption_in_table_r" id="usr_id">11</td>
         <td></td><td></td>
     </tr>
     <tr>
        <td class="ne_caption_in_table_l">last modifer:</td><td class="ne_caption_in_table_r" id='usr_lm'>barbershop</td>
        <td class="ne_caption_in_table_l">last mod date:</td><td class="ne_caption_in_table_r" id='usr_lmd'>2017-08-30 16:38:11</td>
     </tr>
     <tr>
        <td class="ne_caption_in_table_l">creator:</td><td class="ne_caption_in_table_r" id='usr_cr'>barbershop</td>
        <td class="ne_caption_in_table_l">create date:</td><td class="ne_caption_in_table_r" id='usr_crd'>2017-08-30 16:38:11</td>         
     </tr>    
   </table>
 </fieldset>
  
  
</div>
  

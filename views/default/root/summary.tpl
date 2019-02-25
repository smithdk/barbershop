{*progect name: BARBERSHOP*}  

<div id="right_block"><!--start--right_block-->
 <div class="div_caption">
  <div id="div_caption">ИТОГИ</div>   
</div> 
 <div class="wrapper">
   <div class="tabs"> 
    <div class="tab" id='photo'>Общее</div> 
    {$name=''}
    {foreach $rsEmpWorckingToDay as $item name=employees}
      {$name=$item['short_name']}  
      {if !$name} {$name='Из дома'}
      {/if}
       <div class="tab" id='photo'>{$name}</div>
    {/foreach} 
  <br />         
  </div>  
   <div class="tab_content">
    <div class="tab_item"> 
     <div class="top_div">  
      <span class="caption">ВЫРУЧКА на {$cur_date}</span>
      <table class="itog_table">
       <tr>
        <td class="itog_table_left_cell">Всего денег в кассе:</td>
        <td class="itog_table_right_cell">{$allSummary}</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Парикмахерская:</td>
        <td class="itog_table_right_cell">{$allBsSummary}</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Фото:</td>
        <td class="itog_table_right_cell">{$allPhotoSummary}</td>
        <td class="itog_table_left_cell">В офисе:</td>
        <td class="itog_table_right_cell">{$photo_in_office}</td>
        <td class="itog_table_left_cell">Из дома:</td>
        <td class="itog_table_right_cell">{$photo_in_home}</td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">Ксерокс:</td>
        <td class="itog_table_right_cell">{$allXeroxSummary}</td>
        <td class="itog_table_left_cell">Доп. услуги:</td>
        <td class="itog_table_right_cell">{$allAdditionalSummary}</td>
        <td class="itog_table_left_cell">Продажи:</td>
        <td class="itog_table_right_cell">{$allSaleSummary}</td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">З.пл. парикмахерам:</td>
        <td class="itog_table_right_cell blue_text">{$emp_sum_salary}</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell">З.пл. администратору:</td>
        <td class="itog_table_right_cell blue_text">{$adm_salary}</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
       <tr>
        <td class="itog_table_left_cell maroon_text weight_text">Остаток:</td>
        <td class="itog_table_right_cell red_text weight_text">{$sale_to_boss}</td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
        <td class="itog_table_left_cell"></td>
        <td class="itog_table_right_cell"></td>
       </tr>
      </table>
     </div>
     <div class="bottom_div">
      <span class="caption">СЕГОДНЯ РАБОТАЮТ</span><br />
      {if isset($rsEmps)}
        <div class='emp_summ_div color_adm'>
            <span class='profession_color'>Администратор</span><br />   
         <img src="{$rsAdm[0]['image']}"><br />
         {$rsAdm[0]['first_name']}<br />
         {$rsAdm[0]['last_name']}<br />
         {$rsAdm[0]['partonymic']}<br />
        </div>
       {foreach $rsEmps as $item name=emp}
         <div class='emp_summ_div color_emp'>
          <span class='profession_color'>Парикмахер</span><br />    
           <img src="{$item['image']}"><br />
          {$item['first_name']}<br />
          {$item['last_name']}<br />
          {$item['partonymic']}<br />
        </div>
       {/foreach}    
      {/if}  
     </div>   
    </div>  
    {foreach $rsEmpWorckingToDay as $item name=employees1}
     <div class="tab_item"> 
       <div class="top_div">  
        <span class="caption">{$item['first_name']} {$item['last_name']} {$item['partonymic']}</span> 
         <div class='img_emp'>
           <img src="{$item['image']}">    
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
           <td class="itog_table_right_cell">{$item['bs_summary']}</td>
           <td class="itog_table_right_cell">{$item['bs_salary']}</td> 
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Фото:</td>
           <td class="itog_table_right_cell">{$item['photo_summary']}</td>    
           <td class="itog_table_right_cell">{$item['photo_salary']}</td>
           <td class="itog_table_left_cell border_none maroon_text weight_text">Общая выручка:</td>
           <td class="itog_table_right_cell border_none red_text weight_text">{$item['all_summary']}</td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Ксерокс: </td>
           <td class="itog_table_right_cell">{$item['xerox_summary']}</td>
           <td class="itog_table_right_cell">{$item['xerox_salary']}</td>
           <td class="itog_table_left_cell border_none maroon_text weight_text">Зарплата:</td>
           <td class="itog_table_right_cell border_none red_text weight_text">{$item['all_salary']}</td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Доп. парикмахерские услуги:</td>
           <td class="itog_table_right_cell">{$item['additional_summary']}</td>
           <td class="itog_table_right_cell">{$item['additional_salary']}</td>
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Продажи:</td>
           <td class="itog_table_right_cell">{$item['sale_summary']}</td>
           <td class="itog_table_right_cell">{$item['sale_salary']}</td>
           <td class="itog_table_left_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
          <tr>
           <td class="itog_table_left_cell">Работа:</td>
           <td class="itog_table_right_cell">0</td>
           <td class="itog_table_right_cell">{$item['work_summary']}</td>
           <td class="itog_table_right_cell border_none"></td>
           <td class="itog_table_right_cell border_none"></td>
          </tr>
         </table>
         <!--/div-->     
       </div>
       <div class="bottom_div">
         {$emp_id=$item['employee_id']}   
        <table class="op_table" id="tbl_{$emp_id}_op">
           
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
          {$emp_iteration=$smarty.foreach.employees1.iteration-1}
         {foreach $rsEmpWorckingToDay[$emp_iteration]['operation_array'] as $item_op name=operations}
           {$op_iteration=$smarty.foreach.operations.iteration-1}  
          <tr id="row_{$emp_id}_{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['ID']}">
           <td id="new_client_table_td1">
             {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['client_no']}
           </td>
           <td id="new_client_table_td2"> 
            {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['create_date']}
           </td>
           <td id="new_client_table_td3"> 
            {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['type_code']}-{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['name_code']}
            {*$op_num=$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['type_code']}-{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['name_code']*}
           </td >
           <td id="new_client_table_td4">
             {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['hall_name']}
             {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['type_name']}
             {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['name_value']}
           </td>
           <td id="new_client_table_td5"> 
            {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['price']}
           </td >
           <td id="new_client_table_td6"> 
            {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['salary_by_op']}
           </td >
           <td id="new_client_table_td7"> 
            {$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['sum']}
           </td >
           <td id="new_client_table_td8">
             <input type="button" value=" X " 
                   class="del_btn" 
                   name="{$emp_id}_{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['ID']}"
                   onclick="opdel_click(name,
                   '{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['type_code']}-{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['name_code']}',
                   '{$rsEmpWorckingToDay[$emp_iteration]['operation_array'][$op_iteration]['create_date']}');">
           </td>
          </tr>     
         {/foreach}
        </table>    
       </div>
     </div>    
    {/foreach}   
    </div>         
   </div>    
 </div>  
 <script type="text/javascript" src="/js/tabs.js"></script>     
</div> <!--end--right_block-->

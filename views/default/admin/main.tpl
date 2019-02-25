{*progect name: BARBERSHOP1*}  

<div id="right_block"><!--start--right_block-->
<div class="wrapper"> 
 <div class="tabs"> 
  {foreach $rsEmps as $item name=employees}
    <div class="tab" id='tab_{$item['id']}_ct'>{$item['short_name']}</div> 
  {/foreach}    
  <br />         
</div> 
 <div class="tab_content">
  {foreach $rsEmps as $item name=employees}
    <div class="tab_item">
     <div class="tab_item_top">
      <div id="image_salary_div">
          
       {if {$item['id']}==={$admin_id}} 
         <img id="emp_img" src="/images/main/administrator.png">
       {else}
        <!--img id="emp_img" src="/images/{*$objName*}/emp_{*$item['id']*}_bs.png"-->
        <img id="emp_img" src="{$item['image']}">
       {/if}         
        <table id="image_salary_table">
          <tr>
            <td class="left_col"> Выручка:</td><td class='light_caption' id="summary_{$item['id']}_bs">
             {if {$item['id']}==={$admin_id}} 
               {$allSummary}
             {else}
               {$Name="rsSumm_{$item['id']}_bs"}  
               {${$Name}}
             {/if}
            </td>      
          </tr>
          <tr>
            <td class="left_col">Зарплата:</td><td class='light_caption' id="salary_{$item['id']}_bs">
              {$NameS="Salary_{$item['id']}_bs"}
              {${$NameS}}
            </td>     
          </tr>
         </table>   
      </div> 
      <div id="new_client_div">
       <div id="emp_fio">
        {$item['first_name']} {$item['last_name']} {$item['partonymic']}   
       </div> 
       <div  id="div_fs">
         <fieldset id="new_client_fs">
          <legend class="legend"> Новый клиент [операции]</legend>
           <div id="div_fs_top">
             <select id="os_{$item['id']}_ct" class="opreation_sel">
                 <option value=o_0_0></option>
                {if {$item['id']}==={$admin_id}} 
                 {$select_lis='rsAdminOperation'} 
                {else}
                  {$select_lis='rsOperations'}   
                {/if}
                {foreach ${$select_lis} as $operation name=operation}
                 <option value=o_{$operation['ID']}_{$operation['action']}>
                   {$operation['type_code']}-{$operation['name_code']} {$operation['hall_name']} {$operation['type_name']} {$operation['name_value']} {$operation['price']} руб.
                  </option>  
                {/foreach}   
              </select>
             <br />
             <!--input type='button' id='ab_{*$item['id']*}_mf' onclick='open_mf(event);' value="modal form"-->
             <!--p><a href="#" id="go">Ссылка с окном</a></p-->
             <input id="ab_{$item['id']}_ct" class="add_button" type="button" 
              value=" Добавить " onclick="add_operation_onclick({$item['id']},event);">  
           </div>     
           <div id="div_fs_middle">
                <table id="nct_{$item['id']}_ct" class="new_client_table">
               <tbody>
               </tbody>    
              </table>    
             </div>  
             <div id="div_fs_bottom">
                <input class="save_op_button" type="button" value=" Сохранить "
                 onclick="save_operations_onclick({$item['id']},'admin');">  
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
       {$rsName="rsOperation_{$item['id']}_emp"}
       
       {if {${$rsName}|@count}}
        {foreach ${$rsName} as $val name=operation}  
         <tr id="new_client_table_tr">
          <td id="new_client_table_td1">{$val['client_no']}</td>
          <td id="new_client_table_td2">{$val['type_code']}-{$val['name_code']}</td>
          <td id="new_client_table_td3">{$val['hall_name']} {$val['type_name']} {$val['name_value']}</td>
          <td id="new_client_table_td4">{$val['price']}</td>
          <td id="new_client_table_td5">{$val['sum']}</td>
         </tr>
        {/foreach} 
       {/if}      
      </table>    
     <!--/div-->
       
      </fieldset>      
     </div>     
    </div> 
  {/foreach}    
 </div> 
 </div> 
 <script type="text/javascript" src="/js/tabs.js"></script>
 <!-- Модальное oкнo ввода количества --> 
 <div id="modal_form">
      <!--span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <!-- Тут любoе сoдержимoе -->
      <p id="emp_id_modal">qqq</p>
      Введите количество :
 <select id="sel_count">
      {for  $count=1 to 99}
        <option value={$count}>{$count}</option>   
      {/for}
 </select>  
 <br /><br />
   <input  type="button" value="  Сохранить  " id="modal_close"
    onclick="save_count();">   
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
 
</div> <!--end--right_block-->

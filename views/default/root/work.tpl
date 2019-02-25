{*progect name: BARBERSHOP*}  

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
               {foreach $rsRootOperations as $operation name=operation}
                <option value=o_{$operation['ID']}_{$operation['action']}>
                 {$operation['type_code']}-{$operation['name_code']} {$operation['hall_name']} {$operation['type_name']} {$operation['name_value']} {$operation['price']} руб.
                </option>  
               {/foreach}      
             </select>
             <br />
             <input id="add_op" class="add_button" type="button" 
              value=" Добавить " onclick="root_add_operation_onclick({$usr_id},event);">  
           </div>     
           <div id="div_fs_middle">
                <table id="root_new_client_table" class="new_client_table">
               <tbody>
               </tbody>    
              </table>    
             </div>  
             <div id="div_fs_bottom">
                <input class="save_op_button" type="button" value=" Сохранить "
                 onclick="save_operations_onclick({$usr_id},'root');">  
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
        {if {$rsCurOperations}|@count}
         {foreach $rsCurOperations as $val name=operation}  
          <tr id="new_client_table_tr">
           <td id="new_client_table_td1">{$val['client_no']}</td>
           <td id="new_client_table_td2">{$val['type_code']}-{$val['name_code']}</td>
           <td id="new_client_table_td4">{$val['hall_name']} {$val['type_name']} {$val['name_value']}</td>
           <td id="new_client_table_td5">{$val['price']}</td>
           <td id="new_client_table_td6">{$val['sum']}</td>
          </tr>
         {/foreach} 
        {/if}    
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
    onclick="root_save_count();">   
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->
</div> <!--end--right_block-->

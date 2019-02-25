{*progect name: BARBERSHOP1*}  
<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >ОПЕРАЦИИ</div>   
</div>    
<div class="div_details"> 
<fieldset class="div_details_fs"> 
 <table id="operation_details"> 
  <tr>
    <td class="operation_details_caption">
      Категория  
    </td>
    <td class="operation_details_value">   
     <select class='operation_details_select' id='category_menu'>
        <option id='0'></option> 
      {foreach $rsCategory as $item name=category}
       <!--option id='{*$item['variable']*}'>{*$item['value']*}</option-->
       <option value='{$item['variable']}'>{$item['value']}</option>   
      {/foreach}    
     </select> 
    </td>
    <td class="operation_details_caption1">ID</td>
    <td class="caption1_value" id='id_value'>1000</td>
  </tr>    
  <tr>
    <td class="operation_details_caption">
      Зал  
    </td> 
    <td class="operation_details_value"> 
     <select class='operation_details_select' id='hall_menu'>
        <option id='0'></option> 
      {foreach $rsHalls as $item name=halls}
       <option value='{$item['variable']}'>{$item['value']}</option>
      {/foreach}    
     </select>    
    </td>
    <td class="operation_details_caption1">obj_id</td>
    <td class="caption1_value" id='obj_id_value'>1000</td>
  </tr> 
  <tr>
    <td class="operation_details_caption">
      Тип операции  
    </td> 
    <td class="operation_details_value">  
     <select class='operation_details_select' id='type_menu'>
        <option value='0'></option> 
      {foreach $rsTypes as $item name=types}
       <option value='{$item['variable']}'>{$item['value']}</option>
      {/foreach}    
     </select>  
    </td>
    <td class="operation_details_caption1">create_date</td>
    <td class="caption1_value" id='create_date_value'>2017-10-23 02:11:29</td> 
  </tr>
  <tr>
    <td class="operation_details_caption">
      Название операции  
    </td> 
    <td class="operation_details_value">
     <input type="text" id='op_name'>
    </td>
    <td class="operation_details_caption1">name_code</td>
    <td class="caption1_value" id='name_code_value'></td>  
  </tr>
  <tr>
    <td class="operation_details_caption">
      Цена  
    </td> 
    <td class="operation_details_value">
     <input type="text" id='op_price'>   
    </td>
   <td class="operation_details_caption1">creator</td>
   <td class="caption1_value" id='creator_value'></td>
  </tr>
  <tr>
    <td class="operation_details_caption">
      Действие  
    </td> 
    <td class="operation_details_value">
      <input type="text" id='op_action'>        
    </td>
    <td class="operation_details_caption1">last_mod_date</td>
    <td class="caption1_value" id='last_mod_date_value'></td>  
  </tr>
  <tr>
    <td class="operation_details_caption">
      Печатать  
    </td> 
    <td class="operation_details_value">
        <input type="checkbox" class="cb_1" id="printable" checked="1">
     <!--select class='operation_details_select' id='printable_menu'>
      <option value='1'>Да</option>
      <option value='0'>Нет</option>
     </select--> 
        <span class="operation_details_caption">Показывать </span>   
        <input type="checkbox" class="cb_1" id="cb_active" checked="1">
    </td>
    <td class="operation_details_caption1">last_modifer</td>
    <td class="caption1_value" id='last_modifer_value'></td>
  </tr>
    <tr>
    <td class="operation_details_caption">
      Комментарии  
    </td> 
    <td id="operation_comments_value" colspan="3"> 
      <textarea name="comment" id="operations_comments"></textarea>  
    </td>
  </tr>    
 </table>     
</fieldset>   
</div>
<div class="div_buttons">
  <input class="buttons" id="save_op_button" type="button" value=" Новая " onclick="new_op_click();">
  <input class="buttons" id="save_op_button" type="button" value=" Сохранить " onclick="save_op_click();">
  <!--input class="buttons" id="save_op_button" type="button" value=" Удалить " onclick="del_op_click();"-->  
</div>    
<div class="div_list">
 <fieldset class="div_list_fs">
  <table id="operations_table">
   <thead>    
    <tr id="operations_table_tr">
     <!--th id="operations_table_td1">ID</th-->
     <th id="operations_table_td3">#</th>
     <th id="operations_table_td2">Категория</th> 	 
     <th id="operations_table_td4">Зал</th>
     <th id="operations_table_td3">Тип операции</th>
     <th id="operations_table_td3">Название операции</th>
     <th id="operations_table_td3">Цена</th>
     <th id="operations_table_td3">Д</th>
     <th id="operations_table_td3">П</th>
    </tr>
   </thead>     
  {foreach $rsOperations as $item name=operation}
    <tr id="{$item['ID']}">
     <!--td id="new_client_table_td1">{*$item['ID']*}</td-->
     <td id='operations_table_td3'><pre class="pre_table_op_str">{$item['type_code']}-{$item['name_code']}</pre></td>
     <td id='operations_table_td2'>{$item['category_name']}</td>
     <td id='operations_table_td4'>{$item['hall_name']}</td>
     <td id='operations_table_td3'>{$item['type_name']}</td>
     <td id='operations_table_td3'>{$item['name_value']}</td>
     <td id='operations_table_td3'>{$item['price']}</td>
     <td id='operations_table_td3'>{$item['action']}</td>
     <td id='operations_table_td3'>{$item['printable']}</td>
    </tr>
  {/foreach}     
  </table>    
 </fieldset>   
</div>
</div> <!--end--right_block-->

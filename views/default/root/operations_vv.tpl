{*progect name: BARBERSHOP1*}  
<div id="right_block"><!--start--right_block-->
<div class="div_caption">
 <div id="div_caption" >ОПЕРАЦИИ [НАСТРОЙКИ]</div>   
</div>    
<div class="div_details"> 
   
  <fieldset class="div_details_fs"> 
    <table id="tab_details">    
   {foreach $ZeroLavel as $item name=zl}
     <tr>
       <td id='tab_details_value'> 
         {$item['value']}
       </td>
       <td id='tab_details_caption'>
         код
       </td>    
     </tr>
   {/foreach}
   </table>  
  </fieldset>   
   
</div>
<div class="div_buttons">
  <input class="buttons" id="save_op_button" type="button" value=" Новая ">
  <input class="buttons" id="save_op_button" type="button" value=" Сохранить ">
  <input class="buttons" id="save_op_button" type="button" value=" Удалить ">  
</div>    
<div class="div_list">
 <fieldset class="div_list_fs">
  <table id="tab_data">
   <thead>    
    <tr id="new_client_table_tr">
     <th id="new_client_table_td1">Уров.</th>
     <th id="new_client_table_td2">Раздел</th> 	 
     <th id="new_client_table_td4">Код</th>
     <th id="new_client_table_td3">Название</th>
    </tr>
   </thead> 
  {foreach $rsVv as $item name=Vv}
    <tr id="{*$item['ID']*}">
     <td id="new_client_table_td1">{$item['lavel']}</td>
     <td id="new_client_table_td2">{$item['section']}</td> 	 
     <td id="new_client_table_td4">{$item['variable']}</td>
     <td id="new_client_table_td3">{$item['value']}</td>
    </tr>
  {/foreach}     
 </table>    
 </fieldset>   
</div>
</div> <!--end--right_block-->

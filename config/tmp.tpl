{*progect name: BARBERSHOP*}  

<div id="right_block">
 <!------->
 <div class='main_tab'>
  <div class="wrapper"> 
     <div class="tabs"> 
      {foreach $rsEmps as $item name=Emps}
        <span class="tab">{$item['short_name']}</span>    
      {/foreach}   
         <!--span class="tab">Вкладка 1</span> 
         <span class="tab">Вкладка 2</span> 
         <span class="tab">Вкладка 3</span-->         
     </div> 
     <!--div class="tab_content"--> 
      {foreach $rsEmps as $item name=Emps}
        <div class="tab_item">
         <div id='top_item_div'>
          <div id='img_div'>
            <img id="emp_img" src="/images/main/logo.png" alt="альтернативный текст">
            <table>
              <tr>
                  <td class="t_left_caption">Выручка:</td><td class="t_value">30000</td>   
              </tr>
              <tr>
               <td class="t_left_caption">Зарплата:</td><td class="t_value">2000</td>   
              </tr>    
            </table>    
          </div>
          <div id="client_div">   
           <h3 id='fio'> {$item['first_name']} {$item['last_name']} {$item['partonymic']}</h3>
           
           <fieldset id="new_client_fs">
             <legend class="legend"> Новый клиент [операции]</legend>
             <div id="top_new_client_div">
              <select id="opreation_sel">
                <option value="NewObject">Новый объект</option>
                <option value="NewObject">Новый объект</option>
                <option value="NewObject">Новый объект</option>
              </select>
             <br />
             <input id="add_button" type="button" value=" Добавить "> 
             </div>
             <div id="bottom_new_client_div">
               <table id="new_client_table">
              <!--thead>   
               <tr id="new_client_table_tr">
                 <th >№</th>
                   <div>№</div>
                 <th>Код</th>
                 <th>Название</th>
                 <th>цена</th>
                 <th></th>        
               </tr>
              </thead--> 
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">1</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">2</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">1 400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
             </table>               
             </div>
           </fieldset>
          </div> 
         </div>  
         <div id='bottom_item_div'>  
           <fieldset id="all_operation_fs">
             <legend class="legend"> Все операции за день </legend> 
               <div id="top_all_operation">
                 <input id="save_op_button" type="button" value=" Сохранить ">  
               </div>
               <div id="bottom_all_operation">
                   
               <table id="new_client_table">
              <thead>   
               <tr class="fixed">
                 <th id="new_client_table_td1">№</th>
                 <th id="new_client_table_td2">Код</th>
                 <th id="new_client_table_td3">Название</th>
                 <th id="new_client_table_td4">цена</th>
                 <th id="new_client_table_td5">сумма</th>        
               </tr>
              </thead> 
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">1 400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>
               <tr id="new_client_table_tr">
                 <td id="new_client_table_td1">10</td>
                 <td id="new_client_table_td2">01-01</td>
                 <td id="new_client_table_td3">стрижка волос молодежная</td>
                 <td id="new_client_table_td4">400</td>
                 <td id="new_client_table_td5">Х</td>  
               </tr>               

               
             </table>                        
                   
                   
                   
               </div>          
           </fieldset>
         </div>             
          <!--h3 id='fio'>{*$item['first_name']*} {*$item['last_name']*} {*$item['partonymic']*}</h3-->
        </div>  
      {/foreach}   
 
     <!--/div--> 
 </div>
 </div>        
<!-- Подключаем скрипт для табов --> 
 <script type="text/javascript" src="/js/tabs.js"></script> 
 <!--------->     
</div><!--right_block-->
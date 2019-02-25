{*progect name: BARBERSHOP*}  
{$cur_emp=''}
{$salary=''}
{$summa=''}
{$root=0}
<div id="right_block"><!--start--right_block-->
 <div id="report_top">   
 <input type="button" value=" Печать " class="print_button" onclick="PrintElem('#to_print');">
   <h4>ОТЧЕТ</h4>
 </div>
 <div class="print_arrea" id="to_print">
    <h4>Финансовый отчет парикмахерской "{$obj_name_rus}" за {$curdate}</h4> 
    <span class="font_1">Администратор :</span><span class="font_2"> {$adm_first_name} {$adm_last_name} {$adm_partonymic}</span>
    <table class='print_table'>
    {foreach $rsAllWorkToDay as $value name=AllWorkToDay}
      {if $cur_emp!=$value['first_name']}  
       {if $cur_emp!=''}
        {if !{$root}}       
          <tr class='print_table_tr'>
            <td class='print_table_td' colspan='4' rowspan='2'>
            </td> 
            <td class='print_table_td'>
                <span class='italic_caption'>Итого:</span>
            </td>
            <td class='print_table_td'>    
              <span class='italic_underline_caption'>{$summa}</span>
            </td>
          </tr> 
          <tr class='print_table_tr'>
            <td class='print_table_td'> 
              <span class='italic_caption'>З/пл.:</span> 
            </td>
            <td class='print_table_td'> 
             <span class='italic_caption'>{$salary}</span>
            </td>
          </tr>  
        {/if}  
       {/if}   
       <tr class='print_table_tr_fio'> 
         <td class='print_table_td_fio' colspan='6'>
             <span class="italic_caption">{$value['first_name']} {$value['last_name']} {$value['partonymic']}</span>
         </td>        
       </tr>
       <tr class='print_table_tr'>
          <td class='print_table_td'>
           №
          </td>  
          <td class='print_table_td'>
           Время 
          </td>  
          <td>  
            <pre class='pre'>№ оп   </pre>  
          </td>  
          <td class='print_table_td'>  
           Название операции   
          </td>  
          <td class='print_table_td'>
            Цена
          </td>  
          <td class='print_table_td'> 
           Сумма   
          </td>
       </tr>      

        <tr class='print_table_tr'>
          <td class='print_table_td'>
           {{$value['client_no']}}
          </td>  
          <td class='print_table_td'>
           {$value['create_date']}
          </td>  
          <td class='print_table_td'>  
            {$value['type_code']}-{$value['name_code']} 
          </td>  
          <td class='print_table_td'>  
            {$value['hall_name']} {$value['type_name']} {$value['name_value']}  
          </td>  
          <td class='print_table_td'>
           {$value['price']}
          </td>  
          <td class='print_table_td'> 
            {$value['@summa']}
          </td>  
       </tr>       
      {$cur_emp=$value['first_name']}
      {else} 
       <tr class='print_table_tr'>
          <td class='print_table_td'>
           {{$value['client_no']}}
          </td>  
          <td class='print_table_td'>
           {$value['create_date']}
          </td>  
          <td class='print_table_td'>  
            {$value['type_code']}-{$value['name_code']} 
          </td>  
          <td class='print_table_td'>  
            {$value['hall_name']} {$value['type_name']} {$value['name_value']}  
          </td>  
          <td class='print_table_td'>
           {$value['price']}
          </td>  
          <td class='print_table_td'> 
            {$value['@summa']}   
          </td>  
       </tr>    
      {/if}
      {$summa=$rsSummaryByDay[$value['employee_id']]}
      {$salary=$rsSalaryByDay[$value['employee_id']]}
      {if {$value['privilegy']}==='root'}
        {$root=1}
      {else}  
        {$root=0}  
      {/if}      
    {/foreach}
    {if !{$root}} 
          <tr class='print_table_tr' >
            <td class='print_table_td' colspan='4' rowspan="2">
            </td> 
            <td class='print_table_td'>
              {if !({$value['privilegy']}==='root')}  
              <span class='italic_caption'>Итого:</span>
              {/if}
            </td>
            <td class='print_table_td'>
              <span class='italic_underline_caption'>{$rsSummaryByDay[$value['employee_id']]}</span>  
            </td>
          </tr> 
          <tr>
           <td class='print_table_td'>
            <span class='italic_caption'>З/пл.:</span>  
           </td>
           <td class='print_table_td'>
            <span class='italic_caption'>{$salary}</span>
           </td>
          </tr>  
      {/if}    
    </table>
            
    <table id='report_summary_table'>
      <tr>
       <td class='report_summary_table_td_left'>Всего в кассе:</td>
       <td class='report_summary_table_td_right'>{$all_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка парикмахерская:</td>
       <td class='report_summary_table_td_right'>{$bs_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка фото:</td>
       <td class='report_summary_table_td_right'>{$photo_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка ксерокс:</td>
       <td class='report_summary_table_td_right'>{$xerox_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка доп.услуги:</td>
       <td class='report_summary_table_td_right'>{$additional_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>Выручка продажи:</td>
       <td class='report_summary_table_td_right'>{$sale_summary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>З.пл. парикмахерам:</td>
       <td class='report_summary_table_td_right'>{$all_bs_salary}</td>
      </tr>
      <tr>
       <td class='report_summary_table_td_left'>З.пл. администратору:</td>
       <td class='report_summary_table_td_right'>{$admin_salary}</td>
      </tr>
      <tr>
       <td class='italic_caption'>Остаток:</td>
       <td class='italic_underline_caption'>{$sale_to_boss}</td>
      </tr>
    </table>
    
 {*section name=foo start=1 loop=80 step=1*}
  <!-- ss <br /-->
{*/section*}  
 </div>
</div> <!--end--right_block-->

{*progect name: BARBERSHOP*}  
<div id="right_block">
 

    {if isset($warning)}<h1 id="warning_h1">{$warning}</h1> <br />{else}<h1>Сегодня работают</h1><br /> {/if}
<div id="emp_div">
 <ul>
    {foreach $rsEmployee as $item name=employees}
        <li class="emp_list"><input type="checkbox" name="emp[]" value="{$item['id']}" 
         {if $item['@checked']} checked {/if} />
         <label for="cb1"> {$item['first_name']} {$item['last_name']}</label></li> 
    {/foreach}   
 </ul>
 <br />
 <input type="button" value="Сохранить" id="save_button" onclick="save_shedule();">
</div>
</div><!--right_block-->
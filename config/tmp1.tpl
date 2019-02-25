{*progect name: BARBERSHOP*}  
<!--start--right_block-->
<div id="right_block">
<div class="main">    
 <div class="wrapper"> 
  <div class="tabs"> 
   {foreach $rsEmps as $item name=Emps}
      <span class="tab">{$item['short_name']}</span>    
    {/foreach}      
         <!--span class="tab">Вкладка 1</span> 
         <span class="tab">Вкладка 2</span> 
         <span class="tab">Вкладка 3</span-->         
  </div> 
  <div class="tab_content">
  {foreach $rsEmps as $item name=Emps}
      <div class="tab_item">
      <div class="top_item">    
          {$item['first_name']}
      </div>
      <div class="bottom_item">
      </div>
      </div>  
  {/foreach}    
         <!--div class="tab_item">Содержимое 1</div> 
         <div class="tab_item">Содержимое 2</div> 
         <div class="tab_item">Содержимое 3</div--> 
  </div> 
 </div> 
 </div>        
<!-- Подключаем скрипт для табов --> 
 <script type="text/javascript" src="/js/tabs.js"></script> 
</div>
<!--end--right_block-->
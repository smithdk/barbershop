<?php
/* Smarty version 3.1.30, created on 2017-09-08 10:39:45
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\admin\objects.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b257510d4af0_56605556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a28b5b6f5390d633ca3f47ae9f3ef45a047058' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\admin\\objects.tpl',
      1 => 1504859981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b257510d4af0_56605556 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<div id="right_block">
    
<!--form-->
 <!--fieldset class="fieldset" id="change_obj_fs">
 <legend class="legend">     [ Выбор объекта ]</legend>
  Название объекта
  <select  id ="objects_menu" onchange="objects_menu_change(this);">
    <option value="NewObject">Новый объект</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsObjects']->value, 'item', false, NULL, 'objects', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name_rus'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
   </select> 
  
  <input type="button" value="Создать" id="create_button" onclick="buttoncreate_click();">
  <input type="button" value="Отмена" id="cancel_button" onclick="buttoncancel_click();">
</fieldset-->
<!--/form-->
    
 <!--form>
  <fieldset class="fieldset" id="object_fields" id="obj_fs">
   <legend class="legend">[ Объект ]</legend>  
   <table>
      <tr> 
         <td class="caption_in_table">Название объекта [рус.] :</td>
         <td class="inputs_in_table"><input type="text" id="name_rus" value=" "></td>
         <td class="ne_caption_in_table_l">Id:</td>
         <td class="ne_caption_in_table_r" id='obj_id'>121</td>
      </tr>
      <tr> 
         <td class="caption_in_table">Название объекта [eng.] :</td>
         <td class="inputs_in_table"><input type="text" id="db_name" value=" "></td>
         <td class="ne_caption_in_table_l">create date:</td>
         <td class="ne_caption_in_table_r" id="create_date">2017.07.03</td>
      </tr>      
      <tr> 
         <td class="caption_in_table">Адрес :</td>
         <td class="inputs_in_table"><input type="text" id="location" value=" "></td>
         <td class="ne_caption_in_table_l">creator:</td>
         <td class="ne_caption_in_table_r" id="creator">smithdk</td>
      </tr> 
      <tr>
          <td class="caption_in_table"><p>Изображение</p><img id="obj_image" src="/images/main/logo.png"></td> 
          <td class="inputs_in_table">
              <input type="button" id="load_img" value="Загрузить">
              <input type="text" id="image_location">
          </td>
          <td valign="top">
              <p class="ne_caption_in_table_l">last mod date:</p>
              <p class="ne_caption_in_table_l">last modifer:</p>
          </td>
          <td valign="top"> 
              <p class="ne_caption_in_table_r" id="last_mod_date">2017.07.03</p>
              <p class="ne_caption_in_table_r" id="last_modifer"></p>
          </td>
      </tr>
      <tr> 
          <td id="comments" colspan="2"><p>Коментарии</p><textarea name="text" id="ta_comments"></textarea></td>  
      </tr> 
      
   </table>
  </fieldset>
 </form-->
       
</div><!--right_block--><?php }
}

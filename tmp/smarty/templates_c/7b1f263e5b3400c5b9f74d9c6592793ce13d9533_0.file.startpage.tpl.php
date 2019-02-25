<?php
/* Smarty version 3.1.30, created on 2018-04-09 15:33:52
  from "/var/www/barbershop/views/default/startpage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb87e0450ee1_45121055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1f263e5b3400c5b9f74d9c6592793ce13d9533' => 
    array (
      0 => '/var/www/barbershop/views/default/startpage.tpl',
      1 => 1512046611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb87e0450ee1_45121055 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/templates/default/css/startpage.css" type="text/css"/>
 </head>   
 <body>  
<div class="logo_img">
    <img src="/images/main/barbershop.png">
</div>
<div class="autorezationBox">
    <img src="/images/main/logo.png">
    <br />
    <h1 >
        <p style="margin-top: -80px; margin-bottom: 8px;" >Авторизация </p>
    </h1>
   <table id="startTable">
     <tr>
         <td class="r_align">Логин:</td>
         <td class="l_align"><input id="login" type="text"></td>
     </tr> 
     <tr>
         <td class="r_align">Пароль:</td>
         <td class="l_align"><input id="pwd" type="password"></td>
     </tr>
  </table>    
   <h1>
        <br />
        <input type="button" id="loginButton" onclick="login();" value="Войти">
        <!--input type="button" id="loginButton" onclick="location.href='/user/login/'" value="Войти"-->
    </h1>
</div> 
 <?php }
}

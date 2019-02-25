<?php
/* Smarty version 3.1.30, created on 2017-11-30 13:57:04
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\startpage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2000200c21b6_61403138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c578bb328e4ccfd39d84eb2e9990e850069329' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\startpage.tpl',
      1 => 1512046611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2000200c21b6_61403138 (Smarty_Internal_Template $_smarty_tpl) {
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

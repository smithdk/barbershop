{*progect name: BARBERSHOP1*}
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
 
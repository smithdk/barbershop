<?php
/* Smarty version 3.1.30, created on 2017-08-17 11:34:47
  from "C:\xampp\htdocs\MyProjects\barbershop1\views\default\superroot\headerline.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599563373e84c2_84687318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e31129fa1977b6c15a460288e79121909c42c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProjects\\barbershop1\\views\\default\\superroot\\headerline.tpl',
      1 => 1502962457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599563373e84c2_84687318 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<!-- headerline.tpl -->
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/superroot.css" type="text/css"/>
    </head>
<body>
       <div id="header_block">
         <div id="left_top_block" onclick="show_submenu()">
           <p>SUPERROOT</p> 
         </div>
         <div id="right_top_block">      
         </div><!--right_top_block-->
       </div><!--header_block-->
       <div id="left_block">
          <ul id="privelegy_sub_menu">
              <li><a href="#" id="root_item">ROOT</a></li>
           <li><a href="#" id="admin_item">ADMIN</a></li>
           <li><a href="#" id="user_item">USER</a></li>
          </ul> 
 <!-- end headerline.tpl -->
<?php }
}

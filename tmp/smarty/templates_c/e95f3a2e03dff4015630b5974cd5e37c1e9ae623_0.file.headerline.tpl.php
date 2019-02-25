<?php
/* Smarty version 3.1.30, created on 2018-04-09 15:35:49
  from "/var/www/barbershop/views/default/superroot/headerline.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb8855199ec0_26472953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95f3a2e03dff4015630b5974cd5e37c1e9ae623' => 
    array (
      0 => '/var/www/barbershop/views/default/superroot/headerline.tpl',
      1 => 1502962457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb8855199ec0_26472953 (Smarty_Internal_Template $_smarty_tpl) {
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

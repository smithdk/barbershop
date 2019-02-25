<?php
//$MySQLConnect=null;
 //$_SESSION['mysql_connect'] = mysql_connect("127.0.0.1","bs_barbershop","barbershop");
//progect name: BARBERSHOP1

/**
 *  Файл настроек
 */

 //>Мои Глобальные переменные
 $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
 $MyDateTimeFormat="Y-m-d H:i:s";   //Формат даты времени 
 $MyDateFormat="Y-m-d";             //Формат даты 
 //<
 
 //>Константы для обращения к контроллерам
 define('PathPrefix','../controllers/');
 define('PathPostfix','Controller.php');
 //<
 $footer = 'Barbershop ver 1.0.0 Copyright by Dmitry Korablev 2017 (c)';
 //>используемый шаблон Smarty
 $template = 'default';
 $pageTitle = 'Barbershop';
 //пути к файлам шаблонов (.tpl)
 define ('TemplatePrefix',"../views/{$template}/");
 define ('TemplatePostfix','.tpl');
 
 //пути к файлам шаблонов в вебпространстве
 define ('TemplateWebPath',"/templates/{$template}/");
 //<
 
 //> Инициализация шаблона Smarty
 require ('../library/Smarty/libs/Smarty.class.php');
 $smarty = new Smarty();
 
 $smarty->setTemplateDir(TemplatePrefix);
 $smarty->setCompileDir('../tmp/smarty/templates_c');
 $smarty->setCacheDir('../tmp/smarty/cache');
 $smarty->setConfigDir('../library/Smarty/configs');
 $smarty->assign('templateWebPath',TemplateWebPath);
 $smarty->assign('pageTitle',$pageTitle);
 $smarty->assign('footer',$footer);
 //<

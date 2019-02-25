<?php
//progect name: BARBERSHOP1
//Устанавливаем путь, где будут храниться сессии  
ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'] .'/../sessions/');
//Устанавливаем время сессии (43200 секунд=12 часов) чтобы сайт не вылетал
ini_set('session.gc_maxlifetime', 43200);
ini_set('session.cookie_lifetime', 43200);

session_start(); // стартуем сессию

//если в сессии нет массива то создаем его
if(! isset($_SESSION['user'])){
  $_SESSION['user'] = array();
}

include_once '../config/config.php';        //инициализация настроек
include_once '../config/db.php';            //инициализация БД
include_once '../library/mainFunctions.php';//основные функции   


//Определяем с каким контроллером будем работать
 $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index'; 
 //Определяем с какой функцией будем работать
 $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
 //echo($actionName);
 //если в сессии есть данные об авторизированном пользователе, то передаем 
 //их в шаблон
// if (isset($_SESSION['user'])){
//     $smarty->assign('arUser',$_SESSION['user']);
// }
 //инициализируем переменную шаблонизатора количества элементов в корзине
 //$smarty->assign('cartCntItems',count($_SESSION['cart'])); 
//global $myfoo;
//$myfoo->get_foo("_indexVar");
//$myfoo->do_foo();



if (! loadPage($smarty, $controllerName,$actionName)){
   loadPage($smarty, $controllerName,'index'); 
}


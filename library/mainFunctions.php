<?php
//progect name: BARBERSHOP1
/*
 * Основные функции
 */
/**
 * Формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
 function loadPage($smarty, $controllerName,$actionName = 'index'){
     
  include_once PathPrefix . $controllerName . PathPostfix;
  $function = $actionName . 'Action';
  $function($smarty);
  return true;
 }
/**
 * Загрузка шаблона
 * @param type $smarty
 * @param type $tamplateName
 */ 
 function loadTemlate($smarty,$tamplateName){
   $smarty->display($tamplateName . TemplatePostfix);
 }
 /*
 * Отладочная функция
 * 
 */
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if ($die) die;
}
/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 * 
 * @param recordset $rs Набор строк - результат работы SELECT
 * @return array
 */
 function createSmartyRsArray($rs){
    if (!$rs) return false;
    $smartyRs = array ();
    //while ($row = mysql_fetch_assoc($rs)){
    while ($row = mysqli_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
   //d($smartyRs);     
   return $smartyRs;
}
 
/**
 * Функция шифрования
 * 
 * @param string $word  шифруемое слово[password]
 * @param string $salt  соль[login]
 * @return MD5_hash зашифрованное слово
 * 
 * пример: my_encrypt($pwd,$login)
 * 
 */
/*
function my_encrypt($word,$salt){
    $tmp = md5($word).md5($salt);
    $encryption_word= md5($tmp);
    return $encryption_word;
}
/**
 * Редирект
 * @param string $url адрес для перенаправления
 */
function redirect($url){
    if (! $url) $url='/';
    header("Location: {$url}");
    exit;
} 
/**
 * 
 * @global type $MyTimeZone
 * @global type $MyDateTimeFormat
 * @return type
 */
function getMyDateTime(){
    global $MyTimeZone,$MyDateTimeFormat;

    date_default_timezone_set($MyTimeZone);
    return date($MyDateTimeFormat);
}
function getMyDate(){
    global $MyTimeZone,$MyDateFormat;

    date_default_timezone_set($MyTimeZone);
    return date($MyDateFormat);
}




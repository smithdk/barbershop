<?php
//progect name: BARBERSHOP1

//Объявляем переменные
$dblocation="localhost";   //Расположение БД
$dbname="bs_barbershop";   //Название главной БД
$dblogn='bs_barbershop';
$dbpassword='barbershop';
$imagedir="../www/images/";//Директоря для картинок объекта
/*
$link = mysql_connect($dblocation,$dblogn,$dbpassword);
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}else{
$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected) {
    die ('Не удалось выбрать базу foo: ' . mysql_error());
}
}
 * 
 */
$link = mysqli_connect($dblocation,$dblogn,$dbpassword, $dbname);
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
/*progect name: BARBERSHOP1*/
-- 2017.09.11 Добавлена структура таблицы sedule 
-- 2017.11.17 Добавлена структура таблицы main, bag_main 

-- $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
-- $MyDateTimeFormat="Y-m-d H:i:s"; 


-- запуск скрипта: mysql -uroot [-prootpassword] < main.sql

SET CHARACTER SET utf8;

-- ?.Создаем талицу main
CREATE TABLE `bs_barbershop`.`main` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `employee_id` INT(10) NOT NULL COMMENT 'id сотрудника',
 `operation_id` INT(10) NOT NULL COMMENT 'id операции',
 `client_no` INT(10) NOT NULL COMMENT 'номер клиента',
 `price` INT(10) NOT NULL COMMENT 'Стоимость операции',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator_id` INT(10) NOT NULL COMMENT 'Кто создал запись',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- ?+1.Создаем талицу general 
CREATE TABLE `bs_barbershop`.`general` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `employee_id` INT(10) NOT NULL COMMENT 'id сотрудника',
 `operation_id` INT(10) NOT NULL COMMENT 'id операции',
 `client_no` INT(10) NOT NULL COMMENT 'номер клиента', 
 `price` INT(10) NOT NULL COMMENT 'Стоимость операции',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator_id` INT(10) NOT NULL COMMENT 'Кто создал запись',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;
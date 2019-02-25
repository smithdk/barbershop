/*progect name: BARBERSHOP1*/
-- 2017.09.11 Добавлена структура таблицы sedule 

-- $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
-- $MyDateTimeFormat="Y-m-d H:i:s"; 


-- запуск скрипта: mysql -uroot [-prootpassword] < barbershop.sql
SET CHARACTER SET utf8;

-- 5.Создаем талицу operations_vv переменные операций
CREATE TABLE `bs_barbershop`.`operations_vv` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `lavel` INT(10) NOT NULL COMMENT 'Уровень',
 `section` INT(10) NOT NULL COMMENT 'Раздел',
 `variable` INT(10) NOT NULL COMMENT 'Переменная',
 `value` VARCHAR(150) NOT NULL COMMENT 'Значение',
 `comment` TEXT COMMENT 'Коментарии',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator` VARCHAR(50) NOT NULL COMMENT 'Кто создал пользователя',
 `last_mod_date` DATETIME NOT NULL COMMENT 'Дата время последнего изменения',
 `last_modifer` VARCHAR(50) NOT NULL COMMENT 'Кто изменял запись последний',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- 6.Создаем талицу operations 
CREATE TABLE `bs_barbershop`.`operations` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `active` TINYINT(1) NOT NULL COMMENT 'Операция активна',
 `category_code` INT(10) NOT NULL COMMENT 'код категории',
 `hall_code` INT(10) NOT NULL COMMENT 'Зал',
 `type_code` INT(10) NOT NULL COMMENT 'Код типа операции',
 `name_code` INT(10) NOT NULL COMMENT 'Код названия операции',
 `name_value` VARCHAR(150) NOT NULL COMMENT 'Название операции',
 `price` DECIMAL(5,2) NOT NULL COMMENT 'Цена', 
 `action` INT(10) NOT NULL COMMENT 'Действие',
 `printable` TINYINT(1)  NOT NULL COMMENT 'Печатать в прайсе',
 `comment` TEXT COMMENT 'Коментарии',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator` VARCHAR(50) NOT NULL COMMENT 'Кто создал пользователя',
 `last_mod_date` DATETIME NOT NULL COMMENT 'Дата время последнего изменения',
 `last_modifer` VARCHAR(50) NOT NULL COMMENT 'Кто изменял запись последний',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

/*progect name: BARBERSHOP1*/
-- 2017.09.11 1.Добавлена структура таблицы sedule 
-- 2017.10.18 1.Добавлена структура таблицы operations
--            2.Добавлена структура таблицы operations_vv
--            3.Изменено название таблицы av на vv


-- $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
-- $MyDateTimeFormat="Y-m-d H:i:s"; 


-- запуск скрипта: mysql -uroot [-prootpassword] < barbershop.sql
SET CHARACTER SET utf8;

-- 1.Создаем базу данных bs_barbreshop
CREATE DATABASE IF NOT EXISTS `bs_barbershop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- 2.Создаем таблицу objects 
CREATE TABLE `bs_barbershop`.`objects` (
 `ID` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный идентификатор',
 `type` VARCHAR(10) NOT NULL COMMENT 'Тип объекта', -- bs : парикмахерская 
 `name` VARCHAR(50) NOT NULL COMMENT 'Название объекта латинск', 
 `name_rus` VARCHAR(50) NOT NULL COMMENT 'Название объекта по русски',
 `adress` VARCHAR(50) COMMENT 'Адрес объекта',
 `image` VARCHAR(50)COMMENT 'Путь к изображению объекта',
 `comment` TEXT COMMENT 'Коментарии',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator` VARCHAR(50) NOT NULL COMMENT 'Кто создал объект',
 `last_mod_date` DATETIME NOT NULL COMMENT 'Дата время последнего изменения',
 `last_modifer` VARCHAR(50) NOT NULL COMMENT 'Кто изменял объект последний',
  PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- 3.Создаем таблицу users
CREATE TABLE `bs_barbershop`.`users` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный идентификатор', 
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `login` VARCHAR(50) NOT NULL COMMENT 'Логин',
 `password` VARCHAR(50) NOT NULL COMMENT 'Пароль', 
 `short_name` VARCHAR(50) NOT NULL COMMENT 'Короткое имя',
 `first_name` VARCHAR(50) COMMENT 'Фамиля', 
 `last_name` VARCHAR(50) COMMENT 'Имя', 
 `partonymic` VARCHAR(50) COMMENT 'Отчество', 
 `salary` DECIMAL(5,2) NOT NULL COMMENT 'Зарплата', 
 `salary_1` DECIMAL(5,2) NOT NULL COMMENT 'Зарплата 1', 
 `is_work` TINYINT(1)  NOT NULL COMMENT 'Работает/не работает', 
 `email` VARCHAR(50) NOT NULL COMMENT 'Эл. почта', 
 `phone` VARCHAR(50) NOT NULL COMMENT 'Телефон',
 `privilegy` VARCHAR(50) NOT NULL COMMENT 'Привелегии',
 `image` VARCHAR(50)COMMENT 'Путь к изображению пользователя',
 `comment` TEXT COMMENT 'Коментарии',
 `create_date` DATETIME NOT NULL COMMENT 'Дата время создания',
 `creator` VARCHAR(50) NOT NULL COMMENT 'Кто создал пользователя',
 `last_mod_date` DATETIME NOT NULL COMMENT 'Дата время последнего изменения',
 `last_modifer` VARCHAR(50) NOT NULL COMMENT 'Кто изменял запись последний',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- 4.Создаем талицу main
CREATE TABLE `bs_barbershop`.`main` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

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

-- 7.Создаем талицу shedule 
CREATE TABLE `bs_barbershop`.`shedule` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT,
 `obj_id` INT(10) NOT NULL COMMENT 'id объекта',
 `date` DATE NOT NULL COMMENT 'Дата',
 `adm_id`  INT(10) NOT NULL COMMENT 'ID администратора',
 `emp_ids`  VARCHAR(50) NOT NULL COMMENT 'ID парикмахеров',
 `emp_coming`  VARCHAR(150) NOT NULL COMMENT 'Время прибытия парикмахеров',
 `adm_coming`  VARCHAR(10) NOT NULL COMMENT 'Время прибытия администратора',
 `adm_cleaning_salary`  INT(10) NOT NULL COMMENT 'з.п. администратора за уборку',
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- 8.Создаем талицу vv
CREATE TABLE `bs_barbershop`.`vv` (
 `ID`    INT(10) NOT NULL AUTO_INCREMENT, 
 PRIMARY KEY (`ID`)) ENGINE = MyISAM;

-- 9a.Создаем пользователя bs_barbershop@%
CREATE USER `bs_barbershop`@'%' IDENTIFIED by 'barbershop';
GRANT SELECT, INSERT, UPDATE, DELETE, REFERENCES, CREATE TEMPORARY TABLES, 
LOCK TABLES, SHOW VIEW, EXECUTE ON `bs_barbershop`.* TO `bs_barbershop`@'%' WITH GRANT OPTION;

-- 9b.Создаем пользователя bs_barbershop@localhost
CREATE USER `bs_barbershop`@'localhost' IDENTIFIED by 'barbershop';
GRANT SELECT, INSERT, UPDATE, DELETE, REFERENCES, CREATE TEMPORARY TABLES, 
LOCK TABLES, SHOW VIEW, EXECUTE ON `bs_barbershop`.* TO `bs_barbershop`@'localhost' WITH GRANT OPTION;

-- 10. Добавляем пользователя bs_barbershop в таблицу users
INSERT INTO `bs_barbershop`.`users` (
 `ID`, 
 `obj_id`,
 `login`,
 `password`, 
 `first_name`, 
 `last_name`, 
 `partonymic`, 
 `salary`, 
 `salary_1`, 
 `is_work`,  
 `email`, 
 `phone`,
 `privilegy`,
 `image`,
 `comment`,
 `create_date`,
 `creator`,
 `last_mod_date`,
 `last_modifer`
 ) 
 VALUES (
  NULL, 
  0,
 "bs_barbershop",
 SHA1(CONCAT('barbershop','bs_barbershop')), 
 "first_name", 
 "last_name", 
 "partonymic", 
  0, 
  0, 
  true,  
 "smithdk69@gmail.com", 
 "+7917752273",
 "superroot",
 "image/superroot",
 "comment",
 NOW(),
 "barbershop.sql",
 NOW(),
 "barbershop.sql"
);


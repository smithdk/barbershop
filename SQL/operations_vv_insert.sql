/*progect name: BARBERSHOP1*/
--Скрипт добавления записей в таблицу operations_vv
-- !!! Обратить внимание на поле obj_id, должно соответствовать 
-- obj_id  парикмахерской

-- $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
-- $MyDateTimeFormat="Y-m-d H:i:s"; 

-- запуск скрипта: mysql -uroot [-prootpassword] < operations_vv_insert.sql

USE  bs_barbershop;
SET CHARACTER SET utf8;

-- lavel=0
INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','0','0','1','Категория',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','0','0','2','Зал',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','0','0','3','Типа операции',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

-- lavel=1 section=1 
INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','1','Парикмахерские услуги',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','2','Фото',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','3','Ксерокс',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','4','Дополнительные парикмахерские услуги',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','5','Продажи',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','1','6','Работа в офисе',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

-- lavel=1 section=2
INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','2','1','Женский зал',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','2','2','Мужской зал',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','2','3','Дополнительные парикмахерские услуги',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','2','4','Полиграфические услуги',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','2','5','Материалы',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

-----------------

-- lavel=1 section=3
INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','1','Стрижка волос',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','2','Укладка',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','3','Укладка бигудями',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','4','Долговременная укладка, ламинирование',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','5','Химическая завивка с мытьем головы и бальзамом',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','6','Обесвечивание корней волос препаратом "Блондоран"',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','7','Окрашивание (краска заказчика) с мытьем головы',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','8','Прическа модельная (без препаратов)',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','9','Мелирование  с мытьем головы и бальзамом',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','10','Сушка и мытье',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','11','Применение препаратов',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','12','Мужской зал',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','60','Оформление и окрашивание бровей и ресниц',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','80','Фото',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');

INSERT INTO `operations_vv` 
 (`ID`,`obj_id`,`lavel`,`section`,`variable`,`value`,`comment`,`create_date`,
  `creator`,`last_mod_date`,`last_modifer`) 
VALUES (NULL,'3','1','3','90','Ксерокс',NULL,NOW(),
 'operations_vv_insert.sql',NOW(),'operations_vv_insert.sql');


















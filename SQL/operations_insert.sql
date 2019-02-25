/*progect name: BARBERSHOP1*/
-- Скрипт добавления записей в таблицу operations
-- !!! Обратить внимание на поле obj_id, должно соответствовать 
-- obj_id  парикмахерской

-- $MyTimeZone='Asia/Yekaterinburg';  //Часовой пояс
-- $MyDateTimeFormat="Y-m-d H:i:s"; 

-- запуск скрипта: mysql -uroot [-prootpassword] < operations_insert.sql


USE  bs_barbershop;
SET CHARACTER SET utf8;


INSERT INTO `operations` 
 (`ID`) 
 VALUES 
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),
  (NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL),(NULL);

UPDATE operations SET obj_id=3 WHERE 1;

UPDATE operations SET `category_code`=1 WHERE ID<113; 
UPDATE operations SET `category_code`=2 WHERE ID>112 AND ID<141;
UPDATE operations SET `category_code`=3 WHERE ID>140 AND ID<146;
UPDATE operations SET `category_code`=4 WHERE ID>145 AND ID<149;
UPDATE operations SET `category_code`=5 WHERE ID=149;

UPDATE operations SET `hall_code`=1 WHERE ID<85;
UPDATE operations SET `hall_code`=2 WHERE ID>84 AND ID<113; 
UPDATE operations SET `hall_code`=4 WHERE ID>112 AND ID<146;
UPDATE operations SET `hall_code`=3 WHERE ID>145 AND ID<149;
UPDATE operations SET `hall_code`=5 WHERE ID=149;
  

















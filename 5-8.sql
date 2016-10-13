--задача 5
SELECT * FROM `object5` ORDER BY `price` LIMIT 10

--задача 6
SELECT `priceforone`*`kolvo` as `sum_all` FROM `zadacha6_catalog` WHERE `ispolnitel`='Enigma'

--задача 7
SELECT SUM(priceforone), `vek` FROM `zadacha7_moneta` GROUP BY `vek`
-- Сумма по векам
SELECT SUM(`priceforone`*`kolvo`) as ob_st FROM `zadacha7_moneta`
-- Общая стоимость

--задача 8
UPDATE `zadacha8_jaxta` SET `namejaxta`='Титаник' WHERE `vladelec` = (SELECT `vladelec` FROM `zadacha8_jaxta` WHERE `klass`='Средний класс' AND `regnumber`=33333)
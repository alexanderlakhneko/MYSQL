--������ 5
SELECT * FROM `object5` ORDER BY `price` LIMIT 10

--������ 6
SELECT `priceforone`*`kolvo` as `sum_all` FROM `zadacha6_catalog` WHERE `ispolnitel`='Enigma'

--������ 7
SELECT SUM(priceforone), `vek` FROM `zadacha7_moneta` GROUP BY `vek`
-- ����� �� �����
SELECT SUM(`priceforone`*`kolvo`) as ob_st FROM `zadacha7_moneta`
-- ����� ���������

--������ 8
UPDATE `zadacha8_jaxta` SET `namejaxta`='�������' WHERE `vladelec` = (SELECT `vladelec` FROM `zadacha8_jaxta` WHERE `klass`='������� �����' AND `regnumber`=33333)
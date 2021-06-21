INSERT INTO `products`(`barcode`, `price`, `name`) VALUES ('789','200','paradajz'),('776','50','crni luk'),('761','80','beli luk');

INSERT INTO `sale`(`id`, `barcode`, `quantity`, `price`, `date`) VALUES ('1','789','20'.'200','2021.6.17');

INSERT INTO `sale`(`id`, `barcode`, `quantity`, `price`, `date`) VALUES ('3','789','40','250','2021.6.17'),('4','789','10','220','2021.6.17'),('5','776','30','50','2021.5.1');

INSERT INTO `sale`(`id`, `barcode`, `quantity`, `price`, `date`) VALUES ('6','761','20','200','2021.6.5'),('7','761','30','300','2021.6.21'),('8','761','50','1000','2021.7.5');

DELETE FROM `sale` WHERE barcode='789' AND date='2021.6.16';


SELECT `barcode` FROM `sale` WHERE date='2021.5.1';

SELECT DISTINCT `barcode` FROM `sale` WHERE date='2021.5.1';

UPDATE `sale` SET `price`=price*0.1 WHERE date='2021.6.17' ;
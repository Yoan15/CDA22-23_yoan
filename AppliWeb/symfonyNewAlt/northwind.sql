INTO `suppliers` (`id`, `company_name`, `contact_name`, `contact_title`, `address`, `city`, `region`, `postal_code`, `country`, `phone`, `fax`, `home_page`) VALUES
	(1, 'Exotic Liquids', 'Charlotte Cooper', 'Purchasing Manager', '49 Gilbert St.', 'London', NULL, 'EC1 4SD', 'UK', '(171) 555-2222', NULL, NULL),
	(2, 'New Orleans Cajun Delights', 'Shelley Burke', 'Order Administrator', 'P.O. Box 78934', 'New Orleans', 'LA', '70117', 'USA', '(100) 555-4822', NULL, '#CAJUN.HTM#'),
	(3, 'Grandma Kelly\'s Homestead', 'Regina Murphy', 'Sales Representative', '707 Oxford Rd.', 'Ann Arbor', 'MI', '48104', 'USA', '(313) 555-5735', '(313) 555-3349', NULL),
	(4, 'Tokyo Traders', 'Yoshi Nagase', 'Marketing Manager', '9-8 Sekimai\r\nMusashino-shi', 'Tokyo', NULL, '100', 'Japan', '(03) 3555-5011', NULL, NULL),
	(5, 'Cooperativa de Quesos \'Las Cabras\'', 'Antonio del Valle Saavedra ', 'Export Administrator', 'Calle del Rosal 4', 'Oviedo', 'Asturias', '33007', 'Spain', '(98) 598 76 54', NULL, NULL),
	(6, 'Mayumi\'s', 'Mayumi Ohno', 'Marketing Representative', '92 Setsuko\r\nChuo-ku', 'Osaka', NULL, '545', 'Japan', '(06) 431-7877', NULL, 'Mayumi\'s (on the World Wide Web)#http://www.microsoft.com/accessdev/sampleapps/mayumi.htm#');

INSERT INTO `products` (`id`, `product_name`, `category_id`, `quantity_per_unit`, `unit_price`, `units_in_stock`, `units_on_order`, `reorder_level`, `discontinued`, `supplier_id_id`) VALUES
	(1, 'Chai', 1, '10 boxes x 20 bags', 18.0000, 39, 0, 10, b'0', 1),
	(2, 'Chang', 1, '24 - 12 oz bottles', 19.0000, 17, 40, 25, b'0', 1),
	(3, 'Aniseed Syrup', 2, '12 - 550 ml bottles', 10.0000, 13, 70, 25, b'0', 1),
	(4, 'Chef Anton\'s Cajun Seasoning', 2, '48 - 6 oz jars', 22.0000, 53, 0, 0, b'0', 2);

INSERT INTO `customers` (`id`, `company_name`, `contact_name`, `contact_title`, `address`, `city`, `region`, `postal_code`, `country`, `phone`, `fax`) VALUES
	('ALFKI', 'Alfreds Futterkiste', 'Maria Anders', 'Sales Representative', 'Obere Str. 57', 'Berlin', NULL, '12209', 'Germany', '030-0074321', '030-0076545'),
	('ANATR', 'Ana Trujillo Emparedados y helados', 'Ana Trujillo', 'Owner', 'Avda. de la Constitucin 2222', 'Mxico D.F.', NULL, '05021', 'Mexico', '(5) 555-4729', '(5) 555-3745'),
	('ANTON', 'Antonio Moreno Taquera', 'Antonio Moreno', 'Owner', 'Mataderos  2312', 'Mxico D.F.', NULL, '05023', 'Mexico', '(5) 555-3932', NULL),
	('AROUT', 'Around the Horn', 'Thomas Hardy', 'Sales Representative', '120 Hanover Sq.', 'London', NULL, 'WA1 1DP', 'UK', '(171) 555-7788', '(171) 555-6750'),
	('BERGS', 'Berglunds snabbkp', 'Christina Berglund', 'Order Administrator', 'Berguvsvgen  8', 'Lule', NULL, 'S-958 22', 'Sweden', '0921-12 34 65', '0921-12 34 67');

INSERT INTO `orders` (`id`, `employee_id`, `order_date`, `required_date`, `shipped_date`, `ship_via`, `freight`, `ship_name`, `ship_address`, `ship_city`, `ship_region`, `ship_postal_code`, `ship_country`, `customer_id_id`) VALUES
	(10248, 5, '1996-07-04 00:00:00', '1996-08-01 00:00:00', '1996-07-16 00:00:00', 3, 32.3800, 'Vins et alcools Chevalier', '59 rue de l-Abbaye', 'Reims', NULL, '51100', 'France', 'ANTON'),
	(10249, 6, '1996-07-05 00:00:00', '1996-08-16 00:00:00', '1996-07-10 00:00:00', 1, 11.6100, 'Toms Spezialitten', 'Luisenstr. 48', 'Mnster', NULL, '44087', 'Germany', 'ALFKI'),
	(10250, 4, '1996-07-08 00:00:00', '1996-08-05 00:00:00', '1996-07-12 00:00:00', 2, 65.8300, 'Hanari Carnes', 'Rua do Pao, 67', 'Rio de Janeiro', 'RJ', '05454-876', 'Brazil', 'AROUT'),
	(10251, 3, '1996-07-08 00:00:00', '1996-08-05 00:00:00', '1996-07-15 00:00:00', 1, 41.3400, 'Victuailles en stock', '2, rue du Commerce', 'Lyon', NULL, '69004', 'France', 'BERGS'),
	(10252, 4, '1996-07-09 00:00:00', '1996-08-06 00:00:00', '1996-07-11 00:00:00', 2, 51.3000, 'Suprmes dlices', 'Boulevard Tirou, 255', 'Charleroi', NULL, 'B-6000', 'Belgium', 'ANATR');

INSERT INTO `orderdetails` (`id`, `unit_price`, `quantity`, `discount`, `product_id_id`) VALUES
	(10248, 14.0000, 12, 0, 1),
	(10248, 9.8000, 10, 0, 2),
	(10248, 34.8000, 5, 0, 4),
	(10249, 18.6000, 9, 0, 3),
	(10249, 42.4000, 40, 0, 1),
	(10250, 7.7000, 10, 0, 2),
	(10250, 42.4000, 35, 0, 4),
	(10250, 16.8000, 15, 0, 3),
	(10251, 16.8000, 6, 0, 1),
	(10251, 15.6000, 15, 0, 4),
	(10251, 16.8000, 20, 0, 3),
	(10252, 64.8000, 40, 0, 2),
	(10252, 2.0000, 25, 0, 3),
	(10252, 27.2000, 40, 0, 1);
CREATE DATABASE store_management;
CREATE TABLE goverments (
    `id` integer(11) NOT NULL AUTO_INCREMENT PRIMARY,
    `name` varchar(50) NOT NULL ,
);
CREATE TABLE stores (
    `id` integer(11) NOT NULL AUTO_INCREMENT ,
    `name` varchar(50) NOT NULL ,
    `address` varchar(255) NOT NULL ,
    `government_id` integer(11) NOT NULL ,
    PRIMARY KEY (id),
    FOREIGN KEY (government_id) REFERENCES goverments(id) ON DELETE CASCADE 
);
CREATE TABLE suppliers (
    `id` integer(11) NOT NULL AUTO_INCREMENT ,
    `name` varchar(50) NOT NULL ,
    `phone` varchar(20),
    `email` varchar(100) NOT NULL UNIQUE ,
    `brief_data` text,
    PRIMARY KEY (id),
    
);
CREATE TABLE products(
`id` integer(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(70) NOT NULL ,  
 `code` integer UNIQUE,
 `description`text,
 `price` decimal(10,2),
 `supplier_id` integer(11) ,
 `store_id` integer(11),
 PRIMARY KEY (id),
 FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE SET NULL,
 FOREIGN KEY (store_id) REFERENCES stores(id) 

);


-- Q2 
SELECT  DISTINCT(orderNumber) FROM orderdetails WHERE productCode LIKE  "S18%" AND priceEach > 100;
SELECT  customerNumber , paymentDate FROM payments WHERE paymentDate LIKE  "%_05" OR paymentDate LIKE "%_06";
SELECT  customerNumber , paymentDate FROM payments WHERE DAY(paymentDate) IN (5,6);
SELECT phone , customerName FROM customers WHERE country="usa" AND phone LIKE "%5555%" ORDER BY creditLimit DESC LIMIT 1 OFFSET 4;

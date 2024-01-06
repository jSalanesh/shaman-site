CREATE DATABASE ShamanShawarma;
USE DATABASE ShamanShawarma;
CREATE TABLE menu(
    menu_id int primary key auto_increment,
    menu_name varchar(255),
    menu_desc text,
    menu_price float
);
CREATE TABLE employees(
    emp_ID int primary key auto_increment,
    emp_username varchar(255),
    emp_password varchar(255),
    is_admin boolean
);
CREATE TABLE order(
    order_id int primary key auto_increment,
    order_time datetime
);
CREATE TABLE orderline(
    order_id int NOT NULL,
    menu_id int NOT NULL,
    FOREIGN KEY(order_id) REFERENCES order(order_id),
    FOREIGN KEY(menu_id) REFERENCES menu(menu_id)
);
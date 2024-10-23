CREATE DATABASE IF NOT EXISTS `namedb `;

USE DATABASE `namedb`;


CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name  VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
);

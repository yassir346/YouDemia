CREATE DATABASE Youdemia;

USE Youdemia;

CREATE TABLE categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    description TEXT,
    logo VARCHAR(255)
)ENGINE=INNODB;

CREATE TABLE tags(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (35),
    description TEXT,
    logo VARCHAR(255)
)ENGINE=INNODB;

CREATE TABLE roles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (35),
    description TEXT,
    logo VARCHAR(255)
)ENGINE=INNODB;

CREATE TABLE cours(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(50),
    
)


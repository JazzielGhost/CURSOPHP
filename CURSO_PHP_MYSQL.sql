CREATE DATABASE CURSO_PHP_MYSQL;
 -- DROP DATABASE CURSO_PHP_MYSQL;
USE CURSO_PHP_MYSQL;
DROP TABLE IF EXISTS USERS;
CREATE TABLE USERS(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO USERS(nombre, apellido, email,password) VALUES ("Jazziel", "Briones", "Jazziel@fakeemail.com",1234);
INSERT INTO USERS(nombre, apellido, email,password) VALUES ("Pedro", "Martinez", "Pedro@fakeemail.com",1234); 
INSERT INTO USERS(nombre, apellido, email,password) VALUES ("María", "Martinez", "Maria@fakeemail.com",1234); 

SELECT * FROM USERS;

CREATE TABLE ARTICULOS(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	codigo_articulo VARCHAR(50) NOT NULL,
    CONSTRAINT Unq_codigo UNIQUE(codigo_articulo),
    nombre_articulo VARCHAR(100) NOT NULL,
	CONSTRAINT Unq_articulo UNIQUE(nombre_articulo),
    seccion VARCHAR(50) NOT NULL,
    precio DOUBLE NOT NULL,
	fecha DATE NOT NULL,
    importado VARCHAR(100) NOT NULL,
    pais_origen VARCHAR(100) NOT NULL
);

INSERT INTO ARTICULOS(codigo_articulo,nombre_articulo,seccion,precio,fecha,importado,pais_origen) VALUES
("JX1212","MOTO","JUGUETERIA",4000,"2022-02-01","SI","MEXICO"),
("JX1213","MOTO 2","JUGUETERIA",400,"2022-03-01","SI","MEXICO");

INSERT INTO ARTICULOS(codigo_articulo,nombre_articulo,seccion,precio,fecha,importado,pais_origen) VALUES
("JX1111","MOTO ACUATICA","JUGUETERIA",4000,"2022-02-01","SI","JAPON"),
("JX1333","BICI","JUGUETERIA",400,"2022-03-01","SI","EUU");

SELECT * FROM ARTICULOS;

SELECT * FROM ARTICULOS WHERE SECCIàN like '%RTE';

SELECT * FROM ARTICULOS WHERE SECCIàN like 'CE%';

SELECT * FROM ARTICULOS WHERE SECCIàN like 'CER_MICA';
show tables;

CREATE TABLE USERS(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
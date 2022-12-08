CREATE DATABASE cervezarte;
USE cervezarte;

CREATE TABLE cliente(
	nrodcmnto_cli varchar(20) PRIMARY KEY,
	nombre_cli varchar(50) NOT NULL,
	apellido_cli varchar(50) NOT NULL,
	correo_cli varchar(80) NOT NULL,
	numcelular_cli varchar(15) NOT NULL,
	contrasena_cli varchar(255) NOT NULL,
	tipodocumento_cli varchar(30) NOT NULL,
	fechaexpedicionc_cli DATE NOT NULL
);

CREATE TABLE proveedor (
	nrodcmnto_pro varchar(20) PRIMARY KEY,
	nombre_pro varchar(50) NOT NULL,
	apellido_pro varchar(50) NOT NULL,
	correo_pro varchar(100) NOT NULL,
	numcelular_pro varchar(15) NOT NULL,
	direccion_pro varchar(100) NOT NULL,
	tipodocumento_pro varchar(30) NOT NULL,
	dependencia_pro varchar(50) NOT NULL
);

CREATE TABLE facturaprdo_pro (
	id_facpro int(11) PRIMARY KEY AUTO_INCREMENT,
	cantidad_prdopro int(11) NOT NULL,
	vlrtotal_facpro int(11) NOT NULL,
	nrodcmnto_ven varchar(20) NOT NULL,
	codigo_prdospro varchar(255) NOT NULL,
	lote_prdospro int(11) NOT NULL, 
	fechacompra_facpro DATE NOT NULL,
	FOREIGN KEY (nrodcmnto_ven) REFERENCES proveedor(nrodcmnto_pro)
);

CREATE TABLE producto (
	codigo_prdo int(11) PRIMARY KEY AUTO_INCREMENT,
	nombre_prdo varchar(50) NOT NULL,
	img_prdo varchar(20) NOT NULL,
	vlrunit_prdo int(11) NOT NULL,
	contenido_prdo varchar(10) NOT NULL,
	fermentacion_prdo varchar(15) NOT NULL,
	porcentaje_prdo varchar(5) NOT NULL,
	fechaconsumo_prdo DATE NOT NULL,
	fac_prdo int(11) NOT NULL,
	descrip_prdo varchar(255) NOT NULL,
	FOREIGN KEY (fac_prdo) REFERENCES facturaprdo_pro(id_facpro)
);

CREATE TABLE facturacli_prdo (
	id_facli int(11) PRIMARY KEY AUTO_INCREMENT,
	cantidad_prdos int(11) NOT NULL,
	vlrtotal_facli int(11) NOT NULL,
	nrodcmnto_cmpdr varchar(20) NOT NULL,
	codigo_prdos int(11) NOT NULL,
	fechacompra_facli DATE NOT NULL,
	FOREIGN KEY (nrodcmnto_cmpdr) REFERENCES cliente(nrodcmnto_cli),
	FOREIGN KEY (codigo_prdos) REFERENCES producto(codigo_prdo)
);

CREATE TABLE admins(
	dcmnto_admin varchar(20) PRIMARY KEY,
	nombre_admin varchar(50) NOT NULL,
	contrasena_admin varchar(255) NOT NULL
);

INSERT INTO admins VALUES ('1033177110','J. Pablo','$argon2i$v=19$m=65536,t=4,p=1$RDlWaC9hOWNGZjUxd1pXbQ$NnVd2b8nnABpC4MQSeFd0szibMS1L55GzDx+5E9TDZ8'), ('1001810043','Alejandro','$argon2i$v=19$m=65536,t=4,p=1$M0VVMEw1b0p6WWg0RlpIZA$d0Gz0UsBlIqyV5CPQdgybEit/AMsBac6RElZ+ZuMARM');
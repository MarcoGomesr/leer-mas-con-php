Leer-mas-con-php
================

Ejemplo de como crear el boton de leer mas de un blog desarrollado con php


##Base de datos

``` SQL

CREATE database db;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

```



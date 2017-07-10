CREATE TABLE usuario(
	identificador SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apepat VARCHAR(50) NOT NULL,
	apemat VARCHAR(50),
	sexo VARCHAR(50) NOT NULL,
	pais VARCHAR(50) NOT NULL,
	estado VARCHAR(50) NOT NULL,
	postal VARCHAR(10) NOT NULL,
	ciudad VARCHAR(50) NOT NULL,
	colonia VARCHAR(50) NOT NULL,
	calle VARCHAR(50) NOT NULL,
	correo VARCHAR(50) NOT NULL,
	password VARCHAR(20),
	pasadmin VARCHAR(20),
	tipo VARCHAR(10) NOT NULL,
	`imagen` VARCHAR(50),
	`bandera` BOOLEAN
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `products`.`usuario` (`identificador`, `nombre`, `apepat`, `apemat`, `sexo`, `pais`, `estado`,`postal`,`ciudad`,`colonia`,`calle`,`correo`,`password`,`pasadmin`,`tipo`,`imagen`, `bandera`) 
VALUES ('1', 'Nancy', 'Cruz', 'Ramos', 'Mujer', 'Mexico', 'Veracruz','94500','Cordoba','Nuevo Cordoba','Numero 3','nancy.cruz@utcv.edu.mx','','12345','admin','1040116_gde.jpg', true);
INSERT INTO `products`.`usuario` (`identificador`, `nombre`, `apepat`, `apemat`, `sexo`, `pais`, `estado`,`postal`,`ciudad`,`colonia`,`calle`,`correo`,`password`,`pasadmin`,`tipo`,`imagen`, `bandera`) 
VALUES ('2', 'Francisco','Albino','Flores','Hombre','Mexico','Veracruz','94945','Penuela','El tejar','Numero 2','10899@utcv.edu.mx','12345','','invitado','1040116_gde.jpg',true);
CREATE TABLE `products`(
	`identificador` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`categoria` VARCHAR(50) NOT NULL,
	`genero` VARCHAR(50) NOT NULL,
	`nombre` VARCHAR(50) NOT NULL,
	`descripcion` VARCHAR(50) NOT NULL,
	`tamano` VARCHAR(50),
	`color` VARCHAR(50),
	`existencia` INT NOT NULL,
	`costo` FLOAT NOT NULL,
	`imagen` VARCHAR(50),
	`bandera` BOOLEAN
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `products`(`identificador`, `categoria`,`genero`, `nombre`, `descripcion`, `tamano`, `color`, `existencia`, `costo`, `imagen`, `bandera`) 
VALUES('1', 'Calzado', 'Hombre','Zapatillas', 'Comodas de piel de lagarto', 'Numero 6 y 9', 'Gris y Verde', '10', '100', '1040113_gde.jpg', true);
INSERT INTO `products`(`identificador`, `categoria`, `genero`,`nombre`, `descripcion`, `tamano`, `color`, `existencia`, `costo`, `imagen`, `bandera`) 
VALUES('2', 'Accesorios','mujer', 'Pulcera', 'Adaptable a tu mano', 'Chica y grande', 'Diversos colores', '20', '90', '1040113_gde.jpg', true);



CREATE TABLE compra(
	folioCompra INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	total FLOAT
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE detalleCompra(
	folioCompra INT(10) NOT NULL REFERENCES compra(folioCompra) ON DELETE CASCADE ON UPDATE CASCADE,
	identificador INT(10) NOT NULL REFERENCES products(identificador) ON DELETE CASCADE ON UPDATE CASCADE,
	costo FLOAT NOT NULL,
	cantidad INT(10) NOT NULL,
	subtotal FLOAT
);



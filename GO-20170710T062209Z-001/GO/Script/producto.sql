CREATE TABLE usuario(
	idUsuario SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apPaterno VARCHAR(50) NOT NULL,
	apMaterno VARCHAR(50),
	correo VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	pasadmin VARCHAR(50) NOT NULL,
	tipo VARCHAR(50) NOT NULL,
	`imagen` VARCHAR(50),
	`bandera` BOOLEAN
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `producto`.`usuario` (`idUsuario`, `nombre`, `apPaterno`, `apMaterno`,`correo`,`password`,`pasadmin`,`tipo`,`imagen`, `bandera`) 
VALUES ('1', 'Nancy', 'Cruz', 'Ramos','nancy.cruz@utcv.edu.mx','','12345','admin','', true);
INSERT INTO `producto`.`usuario` (`identificador`, `nombre`, `apepat`, `apemat`, `sexo`, `pais`, `estado`,`postal`,`ciudad`,`colonia`,`calle`,`correo`,`password`,`pasadmin`,`tipo`,`imagen`, `bandera`) 
VALUES ('2', 'Aylin','ortiz','sanchez','10696@utcv.edu.mx','12345','','cliente','',true);

CREATE TABLE `producto`(
	`idProducto` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`categoria` VARCHAR(50) NOT NULL,
	`descripcion` VARCHAR(50) NOT NULL,
	`precio` FLOAT NOT NULL,
	`existencia` int(11) DEFAULT NULL,
	`imagen` VARCHAR(50),
	`bandera` BOOLEAN
	
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `producto`(`idProducto`, `categoria`, `descripcion`,`precio`,`existencia`, `imagen`, `bandera`) 
VALUES('1', 'Dama','xxx', '200', '8','1040113_gde.jpg', true);
INSERT INTO `producto`(`idProducto`, `categoria`, `descripcion`,`precio`,`existencia`, `imagen`, `bandera`) 
VALUES('2', 'Caballero','dcfv', '3454', '4', '1040113_gde.jpg', true);



CREATE TABLE compra(
	folioCompra INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	total FLOAT
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE detalleCompra(
	folioCompra INT(10) NOT NULL REFERENCES compra(folioCompra) ON DELETE CASCADE ON UPDATE CASCADE,
	idProducto INT(10) NOT NULL REFERENCES producto(idProducto) ON DELETE CASCADE ON UPDATE CASCADE,
	precio FLOAT NOT NULL,
	cantidad INT(10) NOT NULL,
	subtotal FLOAT
);




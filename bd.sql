

CREATE DATABASE linkapage CHARACTER SET utf8 COLLATE utf8_general_ci;

use linkapage;

create table calificaciones(
	id_calificacion int unsigned not null auto_increment,
	descripcion     varchar(32)  not null,

	primary key(id_calificacion),
	index (descripcion)
)engine=InnoDB;

create table categorias(
	id_categoria int unsigned not null auto_increment,
	descripcion  varchar(32)  not null,

	primary key(id_categoria),
	index (descripcion)
)engine=InnoDB;

create table usuarios(
	id_usuario int unsigned not null auto_increment,
	nombre     varchar(64)  not null,
	usuario    varchar(32)  not null,
	contrasena varchar(32)  not null,
	correo     varchar(32)  not null,
	fecha      date         not null,
	tipo			 int					not null,

	primary key(id_usuario),
	index (usuario),
	index (correo),
	index (nombre)
)engine=InnoDB;

create table links(
	id_link int unsigned not null auto_increment,
	url             varchar(128) not null,
	descripcion     varchar(128) not null,
	id_usuario      int unsigned not null,
	id_categoria    int unsigned not null,
	id_calificacion int unsigned not null,

	primary key(id_link),
	foreign key(id_categoria)    references categorias(id_categoria),
	foreign key(id_calificacion) references calificaciones(id_calificacion),
	index(descripcion)
)engine=InnoDB;

INSERT INTO `calificaciones` (`id_calificacion`, `descripcion`) VALUES ('1', 'Bueno'), ('2', 'Malo');
INSERT INTO `categorias` (`id_categoria`, `descripcion`) VALUES ('1', 'Videos'), ('2', 'Imagenes'),('3', 'Aprende a programar'),('4', 'Servicio de web fonts');

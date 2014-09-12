drop table usuarios;

create table usuarios (
	id				bigserial		constraint pk_usuarios primary key,
	usuario			varchar(10)		not null constraint uq_usuarios_usuario unique,
	passwd			char(32)		not null
);


drop table presentaciones;

create table presentaciones (
	id				bigserial		constraint pk_presentaciones primary key,
	presentacion	text			not null
);


drop table productos;

create table productos (
	id				bigserial		constraint pk_productos primary key,
	nombre			varchar(20)		not null constraint uq_nombre_productos unique,
	descripcion		text			not null,
	precio			numeric(5,2)	not null
);


/*
*  -----------------
*  TABLA DE SESIONES
*  -----------------
*/
drop table ci_sessions cascade;

CREATE TABLE ci_sessions (
  session_id varchar(40) DEFAULT '0' NOT NULL,
  ip_address varchar(45) DEFAULT '0' NOT NULL,
  user_agent varchar(120) NOT NULL,
  last_activity numeric(10) DEFAULT 0 NOT NULL,
  user_data text NOT NULL,
  PRIMARY KEY (session_id)
);

create index last_activity_idx on ci_sessions (last_activity);
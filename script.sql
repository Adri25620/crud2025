create table clientes (
    cli_id serial primary key,
    cli_nombres varchar(250) not null,
    cli_apellidos varchar(250) not null,
    cli_telefono int not null,
    cli_nit int not null,
    cli_situacion smallint default
);
create database Autoservicio_43;
use Autoservicio_43; 

create table inventario(
nombre varchar (50),
cantidad varchar(50),
precioU varchar(50),
proveedor varchar(50),
perecedero varchar(50),
vencimiento date);

create table proveedores(
nombre varchar(50),
productos text,
correo varchar(50),
telefono1 varchar(50),
telefono2 varchar(50));

create table perdidas(
id int auto_increment,
descripcion text,
precio int,
fecha datetime,
primary key (id));

create table ganancias(
id int auto_increment,
descripcion text,
precio int,
fecha datetime,
primary key (id));

create table PyG(
fecha datetime,
descripcion text,
ganancia int,
inversion int,
total int);

create table total(
total_ganancias int);

create table cronograma(
id int,
titulo varchar(50),
descripcion text,
inicio datetime,
final datetime,
color_evento varchar(6));
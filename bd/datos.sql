CREATE DATABASE datos;
USE datos;
CREATE TABLE Registros(

    id int auto_increment,
    nombre varchar (50),
    matricula int (10),
    turno varchar (15),
    carrera varchar (30),
    correo varchar (50),
    PRIMARY KEY (id)
);
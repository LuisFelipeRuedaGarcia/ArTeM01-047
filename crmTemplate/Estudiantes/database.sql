CREATE DATABASE campus;

CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,
    NOMBRES VARCHAR (50) NOT NULL,
    direccion VARCHAR (50) NOT NULL,
    logros VARCHAR (60) NOT NULL
);
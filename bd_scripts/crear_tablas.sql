CREATE DATABASE IF NOT EXISTS turnos_aulas;
USE turnos_aulas;

CREATE TABLE IF NOT EXISTS profesores(
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    apellido VARCHAR(40) NOT NULL,
    PRIMARY KEY (id)
)ENGINE MyISAM DEFAULT CHARACTER SET=utf8;

CREATE TABLE IF NOT EXISTS cargos(
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20),
    PRIMARY KEY(id)
)ENGINE MyISAM DEFAULT CHARACTER SET=utf8;

CREATE TABLE IF NOT EXISTS cursos(
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(3),
    PRIMARY KEY(id)
)ENGINE MyISAM DEFAULT CHARACTER SET=utf8;

CREATE TABLE IF NOT EXISTS materias(
    id INT NOT NULL AUTO_INCREMENT,
    materia VARCHAR(40) NOT NULL,
    horario_desde TIME NOT NULL,
    horario_hasta TIME NOT NULL,
    dia ENUM('LU','MA','MI','JU','VI','SA','DO') NOT NULL,
    id_curso VARCHAR(3) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_curso) REFERENCES cursos (id)
)ENGINE MyISAM DEFAULT CHARACTER SET=utf8;

CREATE TABLE IF NOT EXISTS profesores_x_materias(
    id INT NOT NULL AUTO_INCREMENT,
    id_materia INT NOT NULL,
    id_profesor INT NOT NULL,
    id_cargo INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_materia) REFERENCES materias (id),
    FOREIGN KEY (id_profesor) REFERENCES profesores (id),
    FOREIGN KEY (id_cargo) REFERENCES cargos (id)
)ENGINE MyISAM DEFAULT CHARACTER SET=utf8;


INSERT INTO cargos (nombre) VALUES ('Coordinador');
INSERT INTO cargos (nombre) VALUES ('JTP');
INSERT INTO cargos (nombre) VALUES ('Ayudante 1');
INSERT INTO cargos (nombre) VALUES ('Ayudante 2');
INSERT INTO cargos (nombre) VALUES ('Otro');
INSERT INTO cargos (nombre) VALUES ('Desconocido');

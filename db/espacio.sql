
-- Equipos --

DROP TABLE IF EXISTS equipos CASCADE;

CREATE TABLE equipos
(
    id          BIGINT          AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(255)    NOT NULL UNIQUE,
    descripcion VARCHAR(255),
    created_at  TIMESTAMP DEFAULT current_timestamp
);

INSERT INTO equipos (nombre, descripcion, created_at)
VALUES ('Equipo personal', 'Descripción de equipo personal', default),
        ('1º DAW', 'Descripción de 1º DAW', default);




-- Tableros --

DROP TABLE IF EXISTS tableros CASCADE;

CREATE TABLE tableros
(
    id          BIGINT       AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(255) NOT NULL,
    created_at  TIMESTAMP    DEFAULT current_timestamp,
    equipo_id   BIGINT       NOT NULL REFERENCES equipos (id)
                             ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO tableros (nombre, equipo_id)
  VALUES ('Prueba', 1), ('Personal', 1), ('Programación', 2), ('Lenguaje de marcas', 1),
          ('Cosas personales', 1), ('Laravel', 1);

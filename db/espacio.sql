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

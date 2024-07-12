CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(900) NOT NULL,
    duracion TIME,
    descripcion TEXT,
    fecha_publicacion DATE,
    categoria VARCHAR(900),
    calificacion FLOAT,
    reproducciones INT,
    url VARCHAR(900)
);
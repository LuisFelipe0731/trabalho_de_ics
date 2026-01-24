CREATE TABLE autores (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE livros (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    editora VARCHAR(50) NOT NULL,
    data_lancamento DATE NOT NULL,
    autor_id INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    KEY autor_id (autor_id),
    CONSTRAINT fk_livros_autores
        FOREIGN KEY (autor_id)
        REFERENCES autores (id)
);

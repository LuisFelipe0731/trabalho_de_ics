CREATE TABLE autores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(50)
);

CREATE TABLE livros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    editora VARCHAR(100),
    data_lancamento DATE,
    autor_id INT,

    FOREIGN KEY (autor_id) REFERENCES autores(id)
);

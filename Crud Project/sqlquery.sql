CREATE DATABASE Pdo;

use pdo;

CREATE TABLE Produtos(
id INT NOT NULL auto_increment,
nome varchar(100),
descricao varchar(200),
PRIMARY KEY (id)
);

SELECT * FROM Produtos;




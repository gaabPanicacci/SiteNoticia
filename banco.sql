CREATE DATABASE IF NOT EXISTS SiteNoticia;
USE SiteNoticia;
-- DROP DATABASE SiteNoticia;

CREATE TABLE tb_login(
id_login					INT NOT NULL AUTO_INCREMENT,
usuario					VARCHAR(255) NOT NULL,
senha						VARCHAR(255) NOT NULL,
PRIMARY KEY (id_login)
);
INSERT INTO tb_login (usuario,senha) VALUES
('admin','123');
SELECT * FROM tb_login;

CREATE TABLE tb_noticia (
id_noticia				INT NOT NULL AUTO_INCREMENT,
titulo					VARCHAR(255) NOT NULL,
noticia					TEXT NOT NULL,
datahora					TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
imagem					VARCHAR(255),
fonte						VARCHAR(255),
autor						VARCHAR(255),
PRIMARY KEY	(id_noticia)
);
INSERT INTO tb_noticia (titulo,noticia,imagem,fonte,autor) VALUES 
('Primeiro POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Segundo POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Terceiro POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Quarto POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Quinto POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Sexto POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
('Setima POST','Criando um site de noticia','exemplo.jpg','Etec Pinhal','Jorge');
SELECT * FROM tb_noticia;
SELECT * FROM tb_noticia ORDER BY RAND() LIMIT 6;
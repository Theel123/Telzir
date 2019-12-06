
CREATE DATABASE telzir;

USE telzir;


CREATE TABLE chamadas 
(
id_chamada INT AUTO_INCREMENT PRIMARY KEY,
origem VARCHAR(3) NOT NULL,
destino VARCHAR(3) NOT NULL,
quantidadeMinutos int(11) NOT NULL,
precoMinutoComPlano VARCHAR(20) NOT NULL,
precoMinutoSemPlano  VARCHAR(20) NOT NULL,
planoSolicitado VARCHAR(10) NOT NULL
);



CREATE TABLE origemdestino 
(
id INT AUTO_INCREMENT PRIMARY KEY,
origem varchar(3) NOT NULL,
destino VARCHAR(3)NOT NULL,
precoMinuto varchar(10)
);

SELECT * FROM origemdestino
SELECT * FROM chamadas

INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(18,11,1.90);
INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(11,11,2,90);
INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(11,17,1.70);
INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(17, 18, 0.90);
INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(11,18,1.90);
INSERT INTO origemdestino 
(origem,destino,precoMinuto)
VALUES
(18,11,1.90);
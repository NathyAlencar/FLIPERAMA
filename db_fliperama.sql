create TABLE jogador(
  id_jogador INT AUTOINCREMENT PRIMARY KEY,
  nick VARCHAR(20) UNIQUE
)

CREATE TABLE contato(
  email VARCHAR(50) INT AUTOINCREMENT PRIMARY KEY,
  menssagem VARCHAR(200),
  nome VARCHAR(20),
  numero INT(15) UNIQUE 
)

create table learderboard(
  id_learderboard INT AUTOINCREMENT PRIMARY KEY,
  pontucao VARCHAR(999),
  FOREIGN KEY (id_jogador) REFERENCES jogador (id_jogador)
)

--Tabela de jogo com chaves estrangeiras (precisa conserta)
CREATE TABLE jogo(
 
  FOREIGN KEY (id_jogador) REFERENCES jogador (id_jogador),
  FOREIGN KEY (id_learderboard) REFERENCES learderboard (id_learderboard)
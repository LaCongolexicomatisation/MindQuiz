DROP DATABASE IF EXISTS mindquiz;
CREATE DATABASE IF NOT EXISTS mindquiz;
USE mindquiz;

DROP TABLE IF EXISTS LOTR;
CREATE TABLE IF NOT EXISTS LOTR (
  idLOTR       INT AUTO_INCREMENT NOT NULL,
  questionLOTR VARCHAR(420),
  reponse1LOTR VARCHAR(420),
  reponse2LOTR VARCHAR(420),
  reponse3LOTR VARCHAR(420),
  reponse4LOTR VARCHAR(420),
  repPiegeLOTR VARCHAR(420),
  PRIMARY KEY (idLOTR)
);

DROP TABLE IF EXISTS HOBBIT;
CREATE TABLE IF NOT EXISTS HOBBIT (
  idHobbit       INT AUTO_INCREMENT NOT NULL,
  questionHobbit VARCHAR(420),
  reponse1Hobbit VARCHAR(420),
  reponse2Hobbit VARCHAR(420),
  reponse3Hobbit VARCHAR(420),
  reponse4Hobbit VARCHAR(420),
  repPiegeHobbit VARCHAR(420),
  PRIMARY KEY (idHobbit)
);

DROP TABLE IF EXISTS THEME;
CREATE TABLE IF NOT EXISTS THEME (
  idTheme  INT AUTO_INCREMENT NOT NULL,
  idLOTR   INT,
  idHobbit INT,
  PRIMARY KEY (idTheme),
  FOREIGN KEY (idLOTR) REFERENCES LOTR (idLOTR),
  FOREIGN KEY (idHobbit) REFERENCES HOBBIT (idHobbit)
);

/*----------------------------------------*/

INSERT INTO LOTR (idLOTR, questionLOTR, reponse1LOTR, reponse2LOTR, reponse3LOTR, reponse4LOTR, repPiegeLOTR)
VALUES (NULL, 'question seigneur', 'reponse1L', 'rep 2 l', 'rep 3 l', 'rep 4 l', 'piege l');
INSERT INTO HOBBIT (idHobbit, questionHobbit, reponse1Hobbit, reponse2Hobbit, reponse3Hobbit, reponse4Hobbit, repPiegeHobbit)
VALUES (NULL, 'question hobbit', 'rep1 h', 'rep2h', 'rep3h', 'rep4h', 'piege hobbit');
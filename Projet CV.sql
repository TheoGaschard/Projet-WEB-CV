--Projet Web:


Drop Table CONTACT;
Drop Table Skills;
Drop Table PERSO;

CREATE TABLE PERSO (
ID INT NOT NULL,
Nom VARCHAR (32),
Prenom VARCHAR (32),
Poste VARCHAR (32),
primary key (ID)
);

INSERT INTO PERSO (ID, Nom, Prenom, Poste) VALUES ('1','GASCHARD','Théo','Etudiant en informatique');

CREATE TABLE Skills (
ID INT NOT NULL,
NOM VARCHAR (32),
VALEUR INT,
primary key (ID)
);

INSERT INTO skills (ID,NOM,VALEUR) VALUES (1,"Anglais",80);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (2,"Espagnol",70);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (3,"C",70);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (4,"Arduino",80);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (5,"Python",70);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (6,"CISCO",70);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (7,"HP",60);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (8,"Virtualisation",60);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (9,"SQL",60);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (10,"HTML/CSS",80);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (11,"JS",40);
INSERT INTO skills (ID,NOM,VALEUR) VALUES (12,"PHP",60);

CREATE TABLE CONTACT (
ID INT NOT NULL,
Mail VARCHAR (32),
Objet VARCHAR (32),
Message VARCHAR (256),
primary key (ID)
);

INSERT INTO CONTACT (ID, Mail, Objet, Message) VALUES ('1',"test@test.com","Test","Ceci est un texte de test");


-- Inserts pour la table PERSONNE
INSERT INTO PERSONNE (nom, prenom, mail, motDePasse, telephone)
VALUES 
('Nom1', 'Prenom1', 'nom1.prenom1@example.com', 'password1', 123456789),
('Nom2', 'Prenom2', 'nom2.prenom2@example.com', 'password2', 987654321),
('Nom3', 'Prenom3', 'nom3.prenom3@example.com', 'password3', 555555555),
('Nom4', 'Prenom4', 'nom4.prenom4@example.com', 'password4', 666666666),
('Nom5', 'Prenom5', 'nom5.prenom5@example.com', 'password5', 777777777),
('Nom6', 'Prenom6', 'nom6.prenom6@example.com', 'password6', 888888888),
('Nom7', 'Prenom7', 'nom7.prenom7@example.com', 'password7', 999999999);

-- Inserts pour la table PRESTATAIRE
INSERT INTO PRESTATAIRE DEFAULT VALUES;
INSERT INTO PRESTATAIRE DEFAULT VALUES;
INSERT INTO PRESTATAIRE DEFAULT VALUES;
INSERT INTO PRESTATAIRE DEFAULT VALUES;
INSERT INTO PRESTATAIRE DEFAULT VALUES;

-- Inserts pour la table INTERLOCUTEUR
INSERT INTO INTERLOCUTEUR DEFAULT VALUES;
INSERT INTO INTERLOCUTEUR DEFAULT VALUES;
INSERT INTO INTERLOCUTEUR DEFAULT VALUES;
INSERT INTO INTERLOCUTEUR DEFAULT VALUES;
INSERT INTO INTERLOCUTEUR DEFAULT VALUES;

-- Inserts pour la table CLIENT
INSERT INTO CLIENT (nomClient, telClient)
VALUES 
('Client1', 987654321),
('Client2', 876543210),
('Client3', 765432109),
('Client4', 654321098),
('Client5', 543210987);

-- Inserts pour la table LOCALITE
INSERT INTO LOCALITE (cp, ville)
VALUES 
('12345', 'Ville1'),
('54321', 'Ville2'),
('67890', 'Ville3'),
('78901', 'Ville4'),
('89012', 'Ville5'),
('90123', 'Ville6'),
('01234', 'Ville7');

-- Inserts pour la table TypeVoie
INSERT INTO TypeVoie (libelle)
VALUES 
('Rue'),
('Avenue'),
('Boulevard'),
('Place'),
('Route'),
('Chemin'),
('Impasse');

-- Inserts pour la table COMMERCIAL
INSERT INTO COMMERCIAL DEFAULT VALUES;
INSERT INTO COMMERCIAL DEFAULT VALUES;
INSERT INTO COMMERCIAL DEFAULT VALUES;
INSERT INTO COMMERCIAL DEFAULT VALUES;
INSERT INTO COMMERCIAL DEFAULT VALUES;

-- Inserts pour la table TYPE
INSERT INTO TYPE (libelle)
VALUES 
('Type1'),
('Type2'),
('Type3'),
('Type4'),
('Type5'),
('Type6');

-- Inserts pour la table GESTIONNAIRE
INSERT INTO GESTIONNAIRE DEFAULT VALUES;
INSERT INTO GESTIONNAIRE DEFAULT VALUES;
INSERT INTO GESTIONNAIRE DEFAULT VALUES;
INSERT INTO GESTIONNAIRE DEFAULT VALUES;
INSERT INTO GESTIONNAIRE DEFAULT VALUES;

-- Inserts pour la table ADRESSE
INSERT INTO ADRESSE (numero, nomVoie, id, idLocalite)
VALUES 
(123, 'NomVoie1', 1, 1),
(456, 'NomVoie2', 2, 2),
(789, 'NomVoie3', 3, 3),
(123, 'NomVoie4', 4, 4),
(456, 'NomVoie5', 5, 5),
(789, 'NomVoie6', 6, 6);

-- Inserts pour la table COMPOSANTE
INSERT INTO COMPOSANTE (nomComposante, id_client, id_adresse)
VALUES 
('Composante1', 1, 1),
('Composante2', 2, 2),
('Composante3', 3, 3),
('Composante4', 4, 4),
('Composante5', 5, 5),
('Composante6', 6, 6);

-- Inserts pour la table BDL
INSERT INTO BDL (id_composante, id_personne_2, annee, mois, signatureInterlocuteur, signaturePrestataire, commentaire, id_personne, id_personne_1)
VALUES 
(2, 2024, 2, 987654321, 'Signature2', 'Commentaire2', 14, 3),
(3, 2024, 3, 876543210, 'Signature3', 'Commentaire3', 15, 4),
(4, 2024, 4, 765432109, 'Signature4', 'Commentaire4', 16, 5),
(5, 2024, 5, 654321098, 'Signature5', 'Commentaire5', 17, 6),
(6, 2024, 6, 543210987, 'Signature6', 'Commentaire6', 18, 7);

-- Inserts pour la table PERIODE
INSERT INTO PERIODE DEFAULT VALUES;
INSERT INTO PERIODE DEFAULT VALUES;
INSERT INTO PERIODE DEFAULT VALUES;
INSERT INTO PERIODE DEFAULT VALUES;
INSERT INTO PERIODE DEFAULT VALUES;

-- Inserts pour la table CRENEAU
INSERT INTO CRENEAU (heure_arrivee, heure_depart, id_composante, id_personne, annee, mois, jourDuMois)
VALUES 
('09:00', '18:00', 2, 2, 2024, 2, 2),
('10:00', '17:30', 3, 3, 2024, 3, 3),
('08:30', '16:30', 4, 4, 2024, 4, 4),
('08:00', '17:00', 5, 5, 2024, 5, 5),
('09:30', '18:30', 6, 6, 2024, 6, 6);

-- Inserts pour la table JOURNEE
INSERT INTO JOURNEE DEFAULT VALUES;
INSERT INTO JOURNEE DEFAULT VALUES;
INSERT INTO JOURNEE DEFAULT VALUES;
INSERT INTO JOURNEE DEFAULT VALUES;
INSERT INTO JOURNEE DEFAULT VALUES;

-- Inserts pour la table id
INSERT INTO id (idType, Id_DEMIJOURNEE, id_composante, id_personne, annee, mois, jourDuMois)
VALUES 
(2, 1, 2, 2, 2024, 2, 2),
(3, 1, 3, 3, 2024, 3, 3),
(4, 1, 4, 4, 2024, 4, 4),
(5, 1, 5, 5, 2024, 5, 5),
(6, 1, 6, 6, 2024, 6, 6);

-- Inserts pour la table REPRESENTE
INSERT INTO REPRESENTE DEFAULT VALUES;
INSERT INTO REPRESENTE DEFAULT VALUES;
INSERT INTO REPRESENTE DEFAULT VALUES;
INSERT INTO REPRESENTE DEFAULT VALUES;
INSERT INTO REPRESENTE DEFAULT VALUES;

-- Inserts pour la table AFFECTE
INSERT INTO AFFECTE DEFAULT VALUES;
INSERT INTO AFFECTE DEFAULT VALUES;
INSERT INTO AFFECTE DEFAULT VALUES;
INSERT INTO AFFECTE DEFAULT VALUES;
INSERT INTO AFFECTE DEFAULT VALUES;

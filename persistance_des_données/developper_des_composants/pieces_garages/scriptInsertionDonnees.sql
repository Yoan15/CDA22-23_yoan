USE atelier;

INSERT INTO Reference (nomReference) VALUES ("12d45fd");
INSERT INTO Reference (nomReference) VALUES ("17887d");
INSERT INTO Reference (nomReference) VALUES ("456232");
INSERT INTO Reference (nomReference) VALUES ("45788");
INSERT INTO Reference (nomReference) VALUES ("45sd544");
INSERT INTO Reference (nomReference) VALUES ("45sd89");

INSERT INTO Marques (nomMarque) VALUES ("tern");
INSERT INTO Marques (nomMarque) VALUES ("zali");
INSERT INTO Marques (nomMarque) VALUES ("Ford");

INSERT INTO TypesPieces (nomTypePiece) VALUES ("Vanne");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Capteur temp");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Verrin");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Levier");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Flexible");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Moteur");
INSERT INTO TypesPieces (nomTypePiece) VALUES ("Bouchon");

INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (13, 1, null, 1);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (140, 2, null, 2);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (56, null, 1, 3);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (13, 3, 2, 4);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (456, 4, null, 5);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (null, 5, 3, 6);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (15, 6, 1, 7);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (18, 6, 1, 7);
INSERT INTO Pieces (numPiece, idReference, idMarque, idTypePiece) VALUES (140, 6, 1, 7);
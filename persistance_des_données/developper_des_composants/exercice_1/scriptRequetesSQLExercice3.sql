--
--A.Les noms des étudiants nés avant l'étudiant « JULES LECLERCQ »
--
SELECT nomEtudiant FROM etudiants WHERE dateNaissanceEtudiant < (SELECT dateNaissanceEtudiant FROM etudiants WHERE nomEtudiant = "LECLERCQ" AND prenomEtudiant = "JULES");

--
--B.Les noms et notes des étudiants qui ont,à l'épreuve 4, une note supérieure à la moyenne de cette épreuve.
--
SELECT et.nomEtudiant, note FROM avoir_note AS an INNER JOIN etudiants AS et ON an.idEtudiant = et.idEtudiant INNER JOIN epreuves AS ep ON an.idEpreuve = ep.idEpreuve WHERE ep.idEpreuve = 4 AND an.note > (SELECT AVG(an.note) FROM avoir_note AS an WHERE an.idEpreuve = 4);

--
--C.Le nom des étudiants qui ont obtenu un 12 ou plus.
--
SELECT et.nomEtudiant, note FROM avoir_note AS an INNER JOIN etudiants AS et ON an.idEtudiant = et.idEtudiant INNER JOIN epreuves AS ep ON an.idEpreuve = ep.idEpreuve WHERE an.note>=12 GROUP BY et.nomEtudiant;

--
--D.Le nom des étudiants qui ont dans l'épreuve 4 une note supérieure à celle obtenue par « LUC DUPONT »(à cette même épreuve).
--


--
--E.
--

--
--F.
--

--
--G.
--

--
--H.
--

--
--I.
--

--
--J.
--

--
--K.
--

--
--L.
--

--
--M.
--

--
--N.
--

--
--O.
--

--
--P.
--
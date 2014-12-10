-- ============================================================
--    suppression des donnees
-- ============================================================
delete from PARTICIPATION ;
delete from ENTREE ; 
delete from JOUEUR ;
delete from ANIMATION ;
delete from RENCONTRE ;
delete from ENTRAINE ;
delete from ENTRAINEUR ;
delete from EQUIPE ;
delete from RESPONSABLE ;
delete from CLUB ; 

commit ;

-- ============================================================
--    creation des donnees
-- ============================================================

-- CLUB

insert into CLUB values (  1 , 'LAKERS'  , 'LOS ANGELES'       ) ;
insert into CLUB values (  2 , 'HEAT'    , 'MIAMI'       ) ;
insert into CLUB values (  3 , 'BULLS'   , 'CHICAGO'         ) ;
insert into CLUB values (  4 , 'SPURS'   , 'SAN ANTONIO'       ) ;
insert into CLUB values (  5 , 'CELTICS' , 'BOSTON'       ) ;

commit ;

-- RESPONSABLE

insert into RESPONSABLE values (1, 1, 'JEAN', 'DUPONT', 'PRESIDENT');
insert into RESPONSABLE values (2, 1, 'JACQUES', 'MARCHAND', 'TRESORIER');
insert into RESPONSABLE values (3, 2, 'FREDERIC', 'LEJEUNE', 'PRESIDENT');
insert into RESPONSABLE values (4, 3, 'JULES', 'LE BRETON', 'PRESIDENT');
insert into RESPONSABLE values (5, 4, 'PASCAL', 'BONHOMME', 'PRESIDENT');
insert into RESPONSABLE values (6, 5, 'CECILE', 'PICARD', 'PRESIDENTE');

commit;

-- EQUIPE

insert into EQUIPE values ( 1, 'SENIOR') ;
insert into EQUIPE values ( 2, 'SENIOR') ;
insert into EQUIPE values ( 3, 'SENIOR') ;
insert into EQUIPE values ( 4, 'SENIOR') ;
insert into EQUIPE values ( 5, 'SENIOR') ;
insert into EQUIPE values ( 6, 'JUNIOR') ;

commit ;

-- ENTRAINEUR

insert into ENTRAINEUR values (1, 'PRENOM ENTRAINEUR 1', 'NOM ENTRAINEUR 1');
insert into ENTRAINEUR values (2, 'PRENOM ENTRAINEUR 2', 'NOM ENTRAINEUR 2');
insert into ENTRAINEUR values (3, 'PRENOM ENTRAINEUR 3', 'NOM ENTRAINEUR 3');
insert into ENTRAINEUR values (4, 'PRENOM ENTRAINEUR 4', 'NOM ENTRAINEUR 4');
insert into ENTRAINEUR values (5, 'PRENOM ENTRAINEUR 5', 'NOM ENTRAINEUR 5');

commit;

-- ENTRAINE 

insert into ENTRAINE values (1, 2);
insert into ENTRAINE values (1, 6);
insert into ENTRAINE values (2, 4);
insert into ENTRAINE values (3, 1);
insert into ENTRAINE values (4, 5);
insert into ENTRAINE values (5, 3);

commit ;

-- RENCONTRE

insert into RENCONTRE values ( 1   , 1	, '2014-01-10', 88 , 95, 1   , 2) ;
insert into RENCONTRE values ( 2   , 1	, '2014-01-10', 110, 91, 3   , 4) ;
insert into RENCONTRE values ( 3   , 2	, '2014-01-11', 99 , 99, 1   , 5) ; 
insert into RENCONTRE values ( 4   , 2	, '2014-01-11', 75 , 86, 2   , 4) ;
insert into RENCONTRE values ( 5   , 3	, '2014-01-13', 87 , 78, 3   , 2) ;
insert into RENCONTRE values ( 6   , 3	, '2014-01-13', 93 , 91, 5   , 4) ;
insert into RENCONTRE values ( 7   , 4	, '2014-01-20', 100, 99, 3   , 1) ; 
insert into RENCONTRE values ( 8   , 4	, '2014-01-20', 87 , 76, 2   , 5) ;
insert into RENCONTRE values ( 9   , 5	, '2014-01-23', 102 , 111, 5 , 3) ;
insert into RENCONTRE values ( 10  , 5	, '2014-01-23', 65 , 100, 1   , 4) ;


commit;

-- ANIMATION 

insert into ANIMATION values (1, 3, '2013-01-31');
insert into ANIMATION values (2, 1, '2013-02-01');
insert into ANIMATION values (3, 5, '2013-01-02');
insert into ANIMATION values (4, 2, '2012-1-10');
insert into ANIMATION values (5, 4, '2012-1-30');

commit;

-- JOUEUR
insert into JOUEUR values (1, '2 RUE DU PETIT NAVIRE', 'CLEMENT', 'MARTIN', '1988-03-15', 4);
insert into JOUEUR values (2, '3 RUE DU PETIT BATEAU', 'ANTOINE', 'MARTIN', '1987-06-14', 4);
insert into JOUEUR values (3, '22 RUE CARNOT', 'MARTIN', 'THOMAS', '1980-02-13', 4);
insert into JOUEUR values (4, '12 RUE DES PLAGES', 'ROMAIN', 'LE PAGE', '1986-04-22', 4);
insert into JOUEUR values (5, '11 RUE DES TULIPES', 'ARNAUD', 'MICHEL', '1990-10-15', 4);
insert into JOUEUR values (6, '3 RUE DU GENERAL DE GAULLE', 'MOHAMED', 'BEN', '1988-08-03', 2);
insert into JOUEUR values (7, '62 RUE GAMBETTA', 'JIMMY', 'FELIX', '1987-12-24', 2);
insert into JOUEUR values (8, '2 RUE DU PETIT NAVIRE', 'ALIX', 'MATURIN', '1977-12-28', 2);
insert into JOUEUR values (9, '14 RUE DE LA GARE', 'HUGO', 'LE BERRE', '1985-01-18', 2);
insert into JOUEUR values (10, '43 RUE DES DOUVES', 'QUENTIN', 'SERIN', '1987-07-01', 2);
insert into JOUEUR values (11, '4 PLACE DE LA BOURSE', 'ALFRED', 'FOURNIER', '1987-12-17', 5);
insert into JOUEUR values (12, '11 ALLEE DES COQUELICOTS', 'VINCENT', 'ANTOINE', '1990-06-16', 5);
insert into JOUEUR values (13, '31 PLACE DES SONNEURS', 'ROBERT', 'LOPEZ', '1988-04-14', 5);
insert into JOUEUR values (14, '1 ALLEE DES FLEURS', 'KEVIN', 'MAHUAS', '1982-05-13', 5);
insert into JOUEUR values (15, '18 ROUTE DE PESSAC', 'BRYAN', 'LESCURE', '1980-09-07', 5);
insert into JOUEUR values (16, '5 AVENUE VICTOR HUGO', 'BERTRAND', 'SIMON', '1990-07-04', 1);
insert into JOUEUR values (17, '38 ROUTE DU STADE', 'GILLES', 'NOBLE', '1992-12-14', 1);
insert into JOUEUR values (18, '57 PLACE DES SPECTACLES', 'BERTRAND', 'PODEUR', '1990-06-16', 1);
insert into JOUEUR values (19, '8 AVENUE DE LA LIBERATION', 'ERIC', 'LHOMME', '1991-01-11', 1);
insert into JOUEUR values (20, '17 ALLEE DES TULIPES', 'JEAN', 'FRANÇOIS', '1989-03-22', 1);
insert into JOUEUR values (21, '6 BOULEVARD RASPAIL', 'FRANCK', 'PETIT', '1989-09-28', 3);
insert into JOUEUR values (22, '11 ALLEE DES COQUELICOTS', 'LIONEL', 'CAPRE', '1984-10-27', 3);
insert into JOUEUR values (23, '15 BOULEVARD GEORGES V', 'LOUIS', 'RAMIREZ', '1984-08-16', 3);
insert into JOUEUR values (24, '123 ROUTE DE BEGLES', 'BENJAMIN', 'BERGER', '1993-06-02', 3);
insert into JOUEUR values (25, '78 ROUTE DU QUAI', 'RONAN', 'BILLARD', '1983-08-27', 3);
insert into JOUEUR values (26, '78 ROUTE DU QUAI', 'MATHIEU', 'BILLARD', '1996-08-01', 6);

commit;

-- ENTREE

insert into ENTREE values (4, 1, '2007-01-10');
insert into ENTREE values (4, 2, '2007-28-09');
insert into ENTREE values (4, 3, '2007-01-10');
insert into ENTREE values (4, 4, '2007-28-09');
insert into ENTREE values (4, 5, '2007-01-10');
insert into ENTREE values (2, 6, '2011-07-31');
insert into ENTREE values (2, 7, '2011-07-30');
insert into ENTREE values (2, 8, '2011-07-31');
insert into ENTREE values (2, 9, '2010-09-30');
insert into ENTREE values (2, 10, '2010-09-30');
insert into ENTREE values (5, 11, '2010-07-25');
insert into ENTREE values (5, 12, '2010-07-25');
insert into ENTREE values (5, 13, '2010-07-26');
insert into ENTREE values (5, 14, '2010-07-24');
insert into ENTREE values (5, 15, '2009-08-30');
insert into ENTREE values (1, 16, '2007-08-12');
insert into ENTREE values (1, 17, '2008-08-30');
insert into ENTREE values (1, 18, '2008-09-01');
insert into ENTREE values (1, 19, '2009-09-20');
insert into ENTREE values (1, 20, '2002-08-12');
insert into ENTREE values (3, 21, '2004-09-04');
insert into ENTREE values (3, 22, '2009-09-04');
insert into ENTREE values (3, 23, '2009-09-03');
insert into ENTREE values (3, 24, '2006-09-05');
insert into ENTREE values (3, 25, '2007-10-04');
insert into ENTREE values (6, 26, '2012-01-15');

commit ;

-- PARTICIPATION



insert into PARTICIPATION values (6,1,2,15);
insert into PARTICIPATION values (7,1,1,20);
insert into PARTICIPATION values (8,1,0,20);
insert into PARTICIPATION values (9,1,3,16);
insert into PARTICIPATION values (10,1,2,24);
insert into PARTICIPATION values (16,1,2,18);
insert into PARTICIPATION values (17,1,4,22);
insert into PARTICIPATION values (18,1,3,10);
insert into PARTICIPATION values (19,1,1,10);
insert into PARTICIPATION values (20,1,3,28);

insert into PARTICIPATION values (1,2,4,12);
insert into PARTICIPATION values (2,2,1,19);
insert into PARTICIPATION values (3,2,3,19);
insert into PARTICIPATION values (4,2,3,19);
insert into PARTICIPATION values (5,2,0,20);
insert into PARTICIPATION values (21,2,4,25);
insert into PARTICIPATION values (22,2,1,20);
insert into PARTICIPATION values (23,2,4,22);
insert into PARTICIPATION values (24,2,3,23);
insert into PARTICIPATION values (25,2,2,20);

insert into PARTICIPATION values (16,3,2,20);
insert into PARTICIPATION values (17,3,2,15);
insert into PARTICIPATION values (18,3,3,15);
insert into PARTICIPATION values (19,3,4,20);
insert into PARTICIPATION values (20,3,3,29);
insert into PARTICIPATION values (11,3,2,13);
insert into PARTICIPATION values (12,3,4,18);
insert into PARTICIPATION values (13,3,3,15);
insert into PARTICIPATION values (14,3,1,28);
insert into PARTICIPATION values (15,3,3,26);

insert into PARTICIPATION values (6,4,2,15);
insert into PARTICIPATION values (7,4,3,16);
insert into PARTICIPATION values (8,4,4,14);
insert into PARTICIPATION values (9,4,4,15);
insert into PARTICIPATION values (10,4,4,15);
insert into PARTICIPATION values (1,4,4,17);
insert into PARTICIPATION values (2,4,1,20);
insert into PARTICIPATION values (3,4,3,13);
insert into PARTICIPATION values (4,4,1,16);
insert into PARTICIPATION values (5,4,2,20);

insert into PARTICIPATION values (21,5,1,18);
insert into PARTICIPATION values (22,5,1,18);
insert into PARTICIPATION values (23,5,1,14);
insert into PARTICIPATION values (24,5,1,17);
insert into PARTICIPATION values (25,5,2,20);
insert into PARTICIPATION values (6,5,1,16);
insert into PARTICIPATION values (7,5,1,16);
insert into PARTICIPATION values (8,5,2,16);
insert into PARTICIPATION values (9,5,1,16);
insert into PARTICIPATION values (10,5,2,14);

insert into PARTICIPATION values (11,6,1,33);
insert into PARTICIPATION values (12,6,1,10);
insert into PARTICIPATION values (13,6,1,15);
insert into PARTICIPATION values (14,6,1,25);
insert into PARTICIPATION values (15,6,2,10);
insert into PARTICIPATION values (1,6,1,25);
insert into PARTICIPATION values (2,6,1,22);
insert into PARTICIPATION values (3,6,1,28);
insert into PARTICIPATION values (4,6,1,7);
insert into PARTICIPATION values (5,6,2,9);

insert into PARTICIPATION values (16,7,1,20);
insert into PARTICIPATION values (17,7,1,15);
insert into PARTICIPATION values (18,7,1,24);
insert into PARTICIPATION values (19,7,1,17);
insert into PARTICIPATION values (20,7,2,23);
insert into PARTICIPATION values (21,7,1,20);
insert into PARTICIPATION values (22,7,1,25);
insert into PARTICIPATION values (23,7,1,15);
insert into PARTICIPATION values (24,7,1,27);
insert into PARTICIPATION values (25,7,2,13);

insert into PARTICIPATION values (11,8,1,15);
insert into PARTICIPATION values (12,8,1,14);
insert into PARTICIPATION values (13,8,1,15);
insert into PARTICIPATION values (14,8,1,14);
insert into PARTICIPATION values (15,8,2,18);
insert into PARTICIPATION values (6,8,1,17);
insert into PARTICIPATION values (7,8,1,17);
insert into PARTICIPATION values (8,8,2,17);
insert into PARTICIPATION values (9,8,1,20);
insert into PARTICIPATION values (10,8,2,16);

insert into PARTICIPATION values (11,9,1,22);
insert into PARTICIPATION values (12,9,1,17);
insert into PARTICIPATION values (13,9,1,23);
insert into PARTICIPATION values (14,9,1,22);
insert into PARTICIPATION values (15,9,2,18);
insert into PARTICIPATION values (21,9,1,26);
insert into PARTICIPATION values (22,9,1,18);
insert into PARTICIPATION values (23,9,2,30);
insert into PARTICIPATION values (24,9,1,22);
insert into PARTICIPATION values (25,9,2,15);

insert into PARTICIPATION values (1,10,1,13);
insert into PARTICIPATION values (2,10,3,13);
insert into PARTICIPATION values (3,10,1,13);
insert into PARTICIPATION values (4,10,3,13);
insert into PARTICIPATION values (5,10,2,13);
insert into PARTICIPATION values (16,10,1,20);
insert into PARTICIPATION values (17,10,3,20);
insert into PARTICIPATION values (18,10,2,20);
insert into PARTICIPATION values (19,10,4,20);
insert into PARTICIPATION values (20,10,2,20);


-- ============================================================
--    verification des donnees
-- ============================================================

select count(*),'= 5 ?','CLUB' from CLUB 
union
select count(*),'= 6 ?','RESPONSABLE' from RESPONSABLE
union
select count(*),'= 10 ?','RENCONTRE' from RENCONTRE 

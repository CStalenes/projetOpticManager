drop database if exists opticien2;
create database opticien2;
use opticien2;


create table Personne(
    idPersonne int(3) not null auto_increment,
    nom varchar(50)  not null,
    prenom varchar(50)  not null,
    adresse varchar(50)  not null,
    email varchar(50)  not null,
    primary key(idPersonne)
);


create table Technicien(
    idPersonne int(3) not null,
    diplome varchar(50)  not null,
    primary key(idPersonne),
    foreign key(idPersonne) references Personne(idPersonne)
);

/* rajouter le champ specialite dans Tech */


create table Client(
    idPersonne int(3) not null,
    age int(3)  not null,
    telephone varchar(50)  not null,
    primary key(idPersonne),
    foreign key(idPersonne) references Personne(idPersonne)
);

/*
create table User(
    idPersonne int(3) not null,
    type_role enum("admin", "user"),
    primary key(idPersonne),
    foreign key(idPersonne) references Personne(idPersonne)
);
*/


create table Magasin(
    idMagasin int(3) not null auto_increment,
    nom varchar(50)  not null,
    adresse varchar(50)  not null,
    email varchar(50)  not null,
    telephone varchar(50)  not null,
    primary key(idMagasin)
);

create table Verre(
    idVerre int(3) not null auto_increment,
    vision varchar(50)  not null,
    couleur varchar(50)  not null,
    matiere varchar(50)  not null,
    laboratoire varchar(50)  not null,
    primary key(idVerre)
);

create table Monture(
    idMonture int(3) not null auto_increment,
    forme varchar(50)  not null,
    matiere varchar(50)  not null,
    primary key(idMonture)
);

/* rajouter le champ resistance dans Monture */

create table Lunette(
    idLunette int(3) not null auto_increment,
    libelle varchar(50)  not null,
    couleur varchar(50) not null,
    genre enum('homme', 'femme', 'enfant')  not null,
    marque varchar(50)  not null,
    prix float(4)  not null,
    quantite int(4)  not null,
    disponibilite text(20)  not null,
    idVerre int(3) not null,
    idMonture int(3) not null,
    primary key(idLunette),
    foreign key(idVerre) references Verre(idVerre),
    foreign key(idMonture) references Monture(idMonture) 
);


create table RDV(
    idRDV int(3) not null auto_increment,
    motif varchar(50) not null,
    dateRDV date not null,
    heuredebut time, 
    heurefin time,
    idPersonne int(3) not null,
    idMagasin int(3) not null,
    primary key(idRDV),
    foreign key(idPersonne) references Personne(idPersonne), 
    foreign key(idMagasin) references Magasin(idMagasin)
);

/*
create table Reservation(
    idReservation int(3) not null auto_increment,
    horaire time not null,
    idLunette int(3) not null,
    primary key(idReservation),
    foreign key(idLunette) references Lunette(idLunette)

);
*/


create table Reservation(
    idReservation int(3) not null auto_increment,
    horaire time not null,
    idPersonne int(3) not null,
    idLunette int(3) not null,
    primary key(idReservation),
    foreign key(idPersonne) references Personne(idPersonne),
    foreign key(idLunette) references Lunette(idLunette)

);


/*
create table Travailler(
    idPersonne int(3) not null,
    idMagasin int(3) not null,
    nbJour int(2) not null,
    nbHeur in(2) not null,
    primary key(idPersonne, idMagasin),
    foreign key(idPersonne) references Personne(idPersonne), 
    foreign key(idMagasin) references Magasin(idMagasin)

);*/


/*
delimiter $
create procedure insertTech(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_typerole enum("admin", "user"), IN p_diplome varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email, p_typerole);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email and p_typerole = typerole;

    insert into Technicien values(p_idPersonne, p_diplome);
end $
delimiter ;
*/


delimiter $
create procedure insertTech(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_diplome varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and adresse = p_adresse and email = p_email;

    insert into Technicien values(p_idPersonne, p_diplome);
end $
delimiter ;


/*
call insertTech("OPPS", "John","12 rue de la Roserais", "op@gmail.com","admin",  "licence");
call insertTech("WIND", "Stella","10 rue Montrouge", "ws@gmail.com","admin", "bts");
call insertTech("YOSHIDA", "Sabrina","53 RUE Ferrerol", "ys@gmail.com","user", "master");
call insertTech("JAGGERJACK", "Bruno","63 rue des Tuileries" , "jb@gmail.com","user", "bac pro");
call insertTech("KONTE", "Anis","10 rue Mo", "ka@gmail.com","user", "licence");
call insertTech("JOJO", "Giorno", "92 Rue de Villmonble", "jg@yahoo.fr","admin","master");
call insertTech("BOLT", "Chochise", "70 Rue de Lyon", "bc@yahoo.fr","user","licence");
*/

call insertTech("OPPS", "John","12 rue de la Roserais", "op@gmail.com", "licence");
call insertTech("WIND", "Stella","10 rue Montrouge", "ws@gmail.com","bts");
call insertTech("YOSHIDA", "Sabrina","53 RUE Ferrerol", "ys@gmail.com","master");
call insertTech("JAGGERJACK", "Bruno","63 rue des Tuileries" , "jb@gmail.com", "bac pro");
call insertTech("KONTE", "Anis","10 rue Mo", "ka@gmail.com", "licence");
call insertTech("JOJO", "Giorno", "92 Rue de Villmonble", "jg@yahoo.fr","master");
call insertTech("BOLT", "Chochise", "70 Rue de Lyon", "bc@yahoo.fr","licence");

/*call insertTech("DON", "Vince","2 rue bar", "dv@gmail.com","user", "bac");
call insertTech("DONA", "VinceS","2 rue baru", "tt@gmail.com","user", "licence");*/


/*
delimiter $
create procedure insertClient(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50),IN p_typerole enum("admin", "user"), IN p_age int(3), IN p_telephone varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email, p_typerole);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email and p_typerole = typerole;

    insert into Client values(p_idPersonne, p_age, p_telephone);
end $
delimiter ;
*/

/*p_idPersonne et non null dans la procedure */

delimiter $
create procedure insertClient(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_age int(3), IN p_telephone varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and adresse = p_adresse and email = p_email;

    insert into Client values(p_idPersonne, p_age, p_telephone);
end $
delimiter ;


/*
call insertClient('DEMBELE', 'Fabrice', '80 Faubourg Saint Honore', 'df@yahoo.fr','user', 24, '01059839');
call insertClient('ZINDAYA', 'Claire', '80 Place de la Madelaine', 'zc@yahoo.fr', 'user',20, '01397347');
call insertClient('NEWGATE', 'Edouard', '3 Rue Edouard Branly', 'ne@yahoo.fr', 'user', 35,'07506283');
call insertClient('MARIA', 'Bethany', '43 Place de Miremont', 'mb@hotmail.com', 'user', 29,'01588846');
call insertClient('BOEDER', 'Alex', '24 Avenue Voltaire', 'ba@hotmail.com', 'user', 23,'07222236');
call insertClient('HERCULES', 'Zack', '65 Rue du Palais', 'hz@hotmail.com', 'user', 50,'07498520');
call insertClient('HERO', 'Zacky', '68 Rue du Palais', 'zh@hotmail.com', 'user', 23,'07498622');
*/


call insertClient('DEMBELE', 'Fabrice', '80 Faubourg Saint Honore', 'df@yahoo.fr',24, '01059839');
call insertClient('ZINDAYA', 'Claire', '80 Place de la Madelaine', 'zc@yahoo.fr',20, '01397347');
call insertClient('NEWGATE', 'Edouard', '3 Rue Edouard Branly', 'ne@yahoo.fr',35,'07506283');
call insertClient('MARIA', 'Bethany', '43 Place de Miremont', 'mb@hotmail.com',29,'01588846');
call insertClient('BOEDER', 'Alex', '24 Avenue Voltaire', 'ba@hotmail.com',23,'07222236');
call insertClient('HERCULES', 'Zack', '65 Rue du Palais', 'hz@hotmail.com',50,'07498520');
call insertClient('HERO', 'Zacky', '68 Rue du Palais', 'zh@hotmail.com',23,'07498622');


/*
delimiter $
create procedure insertUser(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_type_role enum('admin', 'user'))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email;

    insert into User values(p_idPersonne, p_type_role);
end $
delimiter ;

call insertUser("JOJO", "Giorno", "92 Rue de Villmonble", "jg@yahoo.fr", "admin");
call insertUser("BOLT", "Chochise", "70 Rue de Lyon", "bc@yahoo.fr", "user");
call insertUser("SOULANEY", "Julia", " 41 Rue de Strasbourg", "sj@hotmail.com", "user");
call insertUser("OUNOLU", "Thiago", "59 Rue des Coudriers ", "ot@hotmail.com", "user");
*/


/*call insertClient("SOULANEY", "Julia", " 41 Rue de Strasbourg", "sj@hotmail.com", "27", "0741256987", "user");
call insertClient("OUNOLU", "Thiago", "59 Rue des Coudriers ", "ot@hotmail.com", "15", "0147855521", "user");*/


insert into Verre values(null, 'myopie', 'transparent', 'mineral', 'varilux');
insert into Verre values(null, 'hypermetropie', 'noir', 'mineral', 'transition');
insert into Verre values(null, 'astigmatisme', 'transparent', 'mineral', 'eyezn');
insert into Verre values(null, 'presbytie', 'bleu uv', 'organique', 'varilux');
insert into Verre values(null, 'anti-reflet', 'bleu uv', 'mineral', 'varilux');

insert into Monture values(null,'arrondi', 'acier inox'),
(null, 'carre', 'corne'), (null,'ronde', 'optyl'),
(null, 'rond', 'titane'), (null, 'rond', 'bois'), (null,'carre', 'optyl');

insert into Lunette values(null, 'lunette de vue', 'bleu metal', 'femme', 'gucci', 255, 15, 'magasin', 1, 1);
insert into Lunette values(null, 'lunette de vue', 'chrome gris', 'femme', 'rayban', 100, 10, 'magasin', 2, 2);
insert into Lunette values(null, 'lunette de soleil', 'marron', 'homme', 'prada', 120, 8, 'magasin', 3, 3);
insert into Lunette values(null, 'lunette de vue', 'bleu azur', 'enfant', 'afflelou', 50, 10, 'magasin', 4, 4);
insert into Lunette values(null, 'lunette de vue', 'bleu clair', 'enfant', 'afflelou', 40, 22, 'ligne', 5, 5);
insert into Lunette values(null, 'lunette de vue', 'gris', 'enfant', 'afflelou', 60, 5, 'magasin', 1, 3);
insert into Lunette values(null, 'lunette de vue',  'noir','enfant', 'afflelou', 55, 20, 'magasin', 4, 6);

/*
insert into Lunette values(null, 'lunette de vue', 'femme', 'gucci', 255, 15, 'magasin',  1, 1);
insert into Lunette values(null, 'lunette de vue', 'femme', 'rayban', 100, 10, 'magasin', 1, 2, 2);
insert into Lunette values(null, 'lunette de soleil', 'homme', 'prada', 120, 8, 'magasin', 1, 3, 3);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 50, 10, 'magasin', 2, 4, 4);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 40, 22, 'ligne', 2, 5, 5);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 60, 5, 'magasin', 2, 1, 3);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 55, 20, 'magasin', 2, 4, 6);
*/

insert into Magasin values(null, 'Optic2000', '135 avenue du General de Gaule','opticien.optic2000.com','01432421');
insert into Magasin values(null, 'GrandOptical', 'Rosny sous bois','grand.optical.com','01489421');
insert into Magasin values(null, 'Alain Afflelou', 'Champigny-sur-Marne','afflelou.com','01488126');
insert into Magasin values(null, 'Alain Afflelou', 'Saint-Mende avenu General de Gaule','afflelou.com','01439839');
insert into Magasin values(null, 'Optic2000', '48 avenue George Clemenceau ','opticien.optic2000.com','01437674');


insert into RDV values(null,'achat', '2022-01-05', '15:30', '16:00', 1, 1);
insert into RDV values(null, 'achat','2022-01-06', '14:30', '15:00', 2, 2);
insert into RDV values(null,'achat', '2022-01-08', '12:30', '13:00', 3, 3);
insert into RDV values(null,'revision', '2022-01-10', '13:30', '14:30', 4, 4);
insert into RDV values(null,'essayage', '2022-01-11', '16:30', '18:00', 5, 5);

insert into Reservation values(null, "15:30", 8, 1);
insert into Reservation values(null, "14:30", 9, 2);
insert into Reservation values(null, "13:30", 10, 3);
insert into Reservation values(null, "12:30",11, 4);
insert into Reservation values(null, "11:30", 12, 5);

--insert into Reservation values(null, "12:30", 4, 4);
--insert into Reservation values(null, "11:30", 5, 5);

/*insert into Travailler values(1, 1, 2, 28);
insert into Travailler values(1, 2, 2, 28);
insert into Travailler values(2, 2, 4, 28);
insert into Travailler values(2, 3, 4, 28);
insert into Travailler values(3, 3, 5, 35);
insert into Travailler values(4, 3, 5, 35);
insert into Travailler values(5, 3, 5, 35);
insert into Travailler values(6, 4, 5, 35);
insert into Travailler values(7, 5, 4, 28);*/




/*
create view personneTech as (
    select p.idPersonne , p.nom as nomT, p.prenom as prenomT, p.adresse as adresseT, p.email as emailT, p.typerole as roleT ,t.diplome 
    from Personne p, Technicien t
    where p.idPersonne = t.idPersonne
);
*/

/*
create view personneTech as (
    select p.idPersonne, p.nom, p.prenom ,p.adresse ,p.email , p.typerole ,t.diplome 
    from Personne p, Technicien t
    where p.idPersonne = t.idPersonne
);
*/
create view personneTech as (
    select p.idPersonne, p.nom, p.prenom ,p.adresse ,p.email ,t.diplome 
    from Personne p, Technicien t
    where p.idPersonne = t.idPersonne
);

/*
create view personneP as(
    select p.idPersonne, p.nom, p.adresse, p.email, p.typerole 
    from Personne p
);*/

/*
create view personneClient as (
    select p.idPersonne, p.nom, p.prenom, p.adresse, p.email, p.typerole ,c.age, c.telephone 
    from Personne p, Client c
    where p.idPersonne = c.idPersonne
);
*/

create view personneClient as (
    select p.idPersonne, p.nom, p.prenom, p.adresse, p.email,c.age, c.telephone 
    from Personne p, Client c
    where p.idPersonne = c.idPersonne
);

create view lunetteVM as (
    select l.idLunette, l.libelle, l.couleur , l.genre, l.marque, l.prix, l.quantite, l.disponibilite, v.vision as visionClient, m.matiere as matiereMonture
    from Lunette l, Verre v, Monture m
    where v.idVerre = l.idVerre and m.idMonture = l.idMonture
);

create view rdvClientMagasin as (
    select r.idRDV, r.motif, r.dateRDV, r.heuredebut, r.heurefin, p.nom as nomCli, mg.nom as nomMagasin
    from Personne p, RDV r, Magasin mg
    where r.idPersonne = p.idPersonne and r.idMagasin = mg.idMagasin
);


-- create view reservationCL as(
--     select rs.idReservation, rs.horaire, p.nom as nomClient, p.email as mailClient, l.libelle as designation, l.marque as marqueLunette, l.prix as prixLunette, l.disponibilite as dispoLunette
--     from Personne p, Client c, Lunette l, Reservation rs
--     where p.idPersonne = c.idPersonne
--     and c.idPersonne = rs.idPersonne
--     and l.idLunette = rs.idLunette

-- );

/*create view reservationCL as(
    select rs.idReservation, rs.horaire, p.nom as nomClient, p.email as mailClient, l.libelle as designation, l.marque as marqueLunette, l.prix as prixLunette, l.disponibilite as dispoLunette
    from Personne p, Lunette l, Reservation rs
    where p.idPersonne = rs.idPersonne
    and l.idLunette = rs.idLunette

);*/


create view reservaCL as(
    select rs.idReservation, rs.horaire, p.nom as nomClient, l.prix as prixLunette
    from Personne p, Lunette l, Reservation rs
    where rs.idPersonne = p.idPersonne
    and rs.idLunette = l.idLunette

);

create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(255),
    typerole enum("admin", "user")  not null,
    primary key (iduser)
);

insert into user values (null, "Mustapha", "Gabriel", "a@gmail.com", "123", "admin"),
(null, "Muha", "Giel", "ako@gmail.com", "456", "user");


delimiter $
create trigger supTechnicien after delete on Technicien
for each row
begin
    delete from Personne where idPersonne = old.idPersonne;
end $

delimiter ;



/*
alter table Magasin add nbRDV int(3);
select m.nom as nomMagasin, count(idRDV) as nbRDV, r.motif, r.heuredebut, r.heurefin
from Magasin m, RDV r
where m.idMagasin  = r.idMagasin
group by nomMagasin;


create view rdvMagasin as (
    select m.idMagasin, m.nom as nomMagasin, m.adresse, m.telephone, m.idRDV
    from Magasin m, RDV r
    where m.idRDV = r.idRDV
);
*/

create table product (
    idproduct int(3) not null auto_increment,
    name varchar(255),
    price int(9),
    primary key(idproduct)

);



create view nbclientMag as (
    select m.nom, m.adresse, count(p.idPersonne) as nbtotal_client
    from Personne p, Magasin m
    where m.idPersonne = p.idPersonne
    group by m.nom, m.adresse 
);

alter table Magasin 
add idPersonne int(3)

update Magasin set idPersonne = '1' where idMagasin = '1';
update Magasin set idPersonne = '2' where idMagasin = '2';
update Magasin set idPersonne = '3' where idMagasin = '3';
update Magasin set idPersonne = '4' where idMagasin = '4';
update Magasin set idPersonne = '5' where idMagasin = '5';
update Magasin set idPersonne = '7' where idMagasin = '6';

 
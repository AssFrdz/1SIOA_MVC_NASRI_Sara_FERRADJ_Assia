CREATE DATABASE Gestion_Contact;

USE Gestion_Contact;

CREATE TABLE Contact(
    id int auto_increment primary key,
    nom varchar(30),
    prenom varchar(30),
    tel int,
    email varchar(30),
    remarque varchar(150),
    mdp varchar(30)
);

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Dupont', 'Jean', 123456789, 'jean.dupont@example.com', 'Aime le tennis', 'password1');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Martin', 'Marie', 987654321, 'marie.martin@example.com', 'Préfère la natation', 'password2');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Durand', 'Pierre', 456123789, 'pierre.durand@example.com', 'Fan de randonnée', 'password3');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Lefebvre', 'Sophie', 789456123, 'sophie.lefebvre@example.com', 'Adore la photographie', 'password4');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Rousseau', 'Laurent', 321654987, 'laurent.rousseau@example.com', 'Passionné de cuisine', 'password5');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Petit', 'Anne', 654987321, 'anne.petit@example.com', 'Adepte de la course à pied', 'password6');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Bertrand', 'Olivier', 987321654, 'olivier.bertrand@example.com', 'Amoureux des animaux', 'password7');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Moreau', 'Catherine', 123987456, 'catherine.moreau@example.com', 'Fan de cinéma', 'password8');

INSERT INTO Contact (nom, prenom, tel, email, remarque, mdp)
VALUES ('Lambert', 'François', 456987123, 'francois.lambert@example.com', 'Aime lire des romans', 'password9');


-- Active: 1690428813007@@127.0.0.1@3306@kodigo
USE kodigo;

SELECT * FROM bootcamps;

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo con JavaScript", "Aprende a ser programador en JS", "2023-07-20", "2023-09-30", 5);

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Java Development", "Aprende a ser programador en Java", "2023-07-07", "2023-11-24", 9);

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo Web Front-End", "Aprende a ser programador Front-End", "2023-07-15", "2023-11-30", 6)


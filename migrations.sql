CREATE DATABASE blogg;
USE blogg;
CREATE TABLE posts(
  id INT PRIMARY KEY AUTO_INCREMENT,
  content VARCHAR(1000)
);
INSERT INTO posts
(content)
VALUES
("Pirmais bloga ierkasts"),
("Otrais bloga ieraksts");
SELECT * FROM posts;
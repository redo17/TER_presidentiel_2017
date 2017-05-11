CREATE DATABASE IF NOT EXISTS Ter
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

SET GLOBAL innodb_file_format = Barracuda;
SET GLOBAL innodb_large_prefix = ON;
SET GLOBAL innodb_file_per_table = ON;

CREATE USER 'app'@'localhost' IDENTIFIED BY '18052017';

GRANT ALL ON Ter.* TO 'app'@'localhost';

USE Ter;
SOURCE tables.sql;
SOURCE insertion_candidats.sql;

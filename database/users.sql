-- Creates user email/password table
CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS users (
    user_id VARCHAR() PRIMARY KEY AUTO_INCREMENT,
    f_name  VARCHAR(80) NOT NULL,
    l_name  VARCHAR(80) NOT NULL,
    email   VARCHAR(96) NOT NULL,
    password CHAR(32) NOT NULL, /*need to encrypt*/
    AdminPriv VARCHAR(80) NOT NULL,/* if 0 = not admin, 1 = admin privledges*/
    UNIQUE (email)
);

INSERT INTO users (user_id, f_name, l_name, email, password, AdminPriv)
VALUES ('Hannah', 'Whitehead', 'hannah.whitehead1@marist.edu', 'password', 1),
       ('Alyssa', 'Lynch','alyssa.lynch1@marist.edu', 'password', 1),
       ('Dillon', 'Lusk', 'maria.molloy1@marist.edu', 'password', 1);

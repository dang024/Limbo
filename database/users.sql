-- Creates user email/password table
CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS users (
    user_id VARCHAR() PRIMARY KEY AUTO_INCREMENT,
    f_name  VARCHAR() NOT NULL,
    l_name  VARCHAR() NOT NULL,
    email   VARCHAR() NOT NULL,
    password  ,
    UNIQUE (email)
);

INSERT INTO users (f_name, l_name, email, password) 
VALUES ('Hannah', 'Whitehead', 'hannah.whitehead1@marist.edu', 'password'),

       ('Alyssa', 'Lynch','alyssa.lynch1@marist.edu', 'password'),

       ('Dillon', 'Lusk', 'maria.molloy1@marist.edu', 'password');
       

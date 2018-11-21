-- Creates user email/password table
CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS users (
    user_id VARCHAR() NOT NULL,
    f_name  VARCHAR() NOT NULL,
    l_name  VARCHAR() NOT NULL,
    email   VARCHAR() NOT NULL,
    password  ,
    PRIMARY KEY (user_id) ,
    UNIQUE (email)
);

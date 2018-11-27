-- Creates user email/password table
CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS users (
    user_id INT() PRIMARY KEY AUTO_INCREMENT,
    f_name  VARCHAR(80) NOT NULL,
    l_name  VARCHAR(80) NOT NULL,
    email   VARCHAR(96) NOT NULL,
    password VARCHAR(255) NOT NULL, /*need to encrypt*/
    AdminPriv TINYINT(1) NOT NULL,/* if 0 = not admin, 1 = admin privledges*/
    UNIQUE (email)
);
/*Not sure this is a thing, but it'd be cool to sort by privilege, sorta like this country does ya know
IF(AdminPriv = ?, 0, 1), users DESC{
  SELECT AdminPriv FROM users ORDER BY AdminPriv ASC
};
*/

INSERT INTO users (user_id, f_name, l_name, email, password, AdminPriv)
VALUES ('', 'Hannah', 'Whitehead', 'hannah.whitehead1@marist.edu', 'password', 1),
       ('', 'Alyssa', 'Lynch','alyssa.lynch1@marist.edu', 'password', 1),
       ('', 'Dillon', 'Lusk', 'maria.molloy1@marist.edu', 'password', 1),
       ('', 'Ferris', 'Boolean' , 'ferrisboolean@gmail.com', 'password', 0);

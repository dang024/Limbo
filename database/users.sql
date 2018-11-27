-- Creates user email/password table
CREATE DATABASE IF NOT EXISTS site_db;

USE site_db;

CREATE TABLE IF NOT EXISTS users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    f_name  VARCHAR(80),
    l_name  VARCHAR(80),
    email   VARCHAR(96),
    password VARCHAR(255), /*need to encrypt*/
    AdminPriv TINYINT(1),/* if 0 = not admin, 1 = admin privledges*/
    UNIQUE (email)
);
/*Not sure this is a thing, but it'd be cool to sort by privilege, sorta like this country does ya know
IF(AdminPriv = ?, 0, 1), users DESC{
  SELECT AdminPriv FROM users ORDER BY AdminPriv ASC
};
*/

INSERT INTO users (user_id, f_name, l_name, email, password, AdminPriv)
VALUES (0, 'Hannah', 'Whitehead', 'hannah.whitehead1@marist.edu', 'password', 1),
       (1, 'Alyssa', 'Lynch','alyssa.lynch1@marist.edu', 'password', 1),
       (2, 'Dillon', 'Lusk', 'maria.molloy1@marist.edu', 'password', 1),
       (3, 'Ferris', 'Boolean' , 'ferrisboolean@gmail.com', 'password', 0);

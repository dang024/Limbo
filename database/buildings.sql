 # Creating and populating a database for Limbo
# Authors: Maria Molloy, William Kluge, Damion Neth, Victoria Spychalski, Daniel Simpson
# Version 1

DROP DATABASE IF EXISTS limbo_db;
CREATE DATABASE limbo_db;
USE limbo_db;

CREATE TABLE IF NOT EXISTS users (
  user_id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  first_name VARCHAR(20) NOT NULL ,
  last_name VARCHAR(40) NOT NULL ,
  email VARCHAR(60) NOT NULL ,
  pass CHAR(40) NOT NULL ,
  reg_date DATETIME NOT NULL ,
  PRIMARY KEY (user_id) ,
  UNIQUE (email)
);

INSERT INTO users (first_name, last_name, email, pass, reg_date) VALUES
  ('admin', 'user', 'william.kluge1@marist.edu', 'gazelle', NOW());

CREATE TABLE IF NOT EXISTS locations (
  id INT NOT NULL AUTO_INCREMENT ,
  create_date DATETIME NOT NULL ,
  update_date DATETIME NOT NULL ,
  name TEXT NOT NULL ,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS stuff (
  id INT NOT NULL AUTO_INCREMENT ,
  location_id INT NOT NULL ,
  description TEXT NOT NULL ,
  create_date DATETIME NOT NULL ,
  update_date DATETIME NOT NULL ,
  room TEXT ,
  owner TEXT ,
  finder TEXT ,
  status SET ('found', 'lost', 'claimed') NOT NULL ,
  PRIMARY KEY (id) ,
  FOREIGN KEY (location_id)
    REFERENCES locations (id)
);

INSERT INTO stuff (location_id, description, create_date, update_date, room, owner, finder, status) VALUES
  ()
;

INSERT INTO locations (create_date, update_date, name) VALUES
  (NOW(), NOW(), 'Byrne House'),
  (NOW(), NOW(), 'Cannavino Library'),
  (NOW(), NOW(), 'Champagnat Hall'),
  (NOW(), NOW(), 'Chapel'),
  (NOW(), NOW(), 'Cornell Boathouse'),
  (NOW(), NOW(), 'Donnelly Hall'),
  (NOW(), NOW(), 'Dyson Center'),
  (NOW(), NOW(), 'Fern Tor'),
  (NOW(), NOW(), 'Fontaine Hall'),
  (NOW(), NOW(), 'Foy Townhouses'),
  (NOW(), NOW(), 'Lower Fulton Street Townhouses'),
  (NOW(), NOW(), 'Upper Fulton Street Townhouses'),
  (NOW(), NOW(), 'Greystone Hall'),
  (NOW(), NOW(), 'Hancock Center'),
  (NOW(), NOW(), 'Kieran Gatehouse'),
  (NOW(), NOW(), 'Kirk House'),
  (NOW(), NOW(), 'Leo Hall'),
  (NOW(), NOW(), 'Longview Park'),
  (NOW(), NOW(), 'Lowell Thomas'),
  (NOW(), NOW(), 'Lower Townhouses'),
  (NOW(), NOW(), 'Marian Hall'),
  (NOW(), NOW(), 'Marist Boathouse'),
  (NOW(), NOW(), 'McCann Center'),
  (NOW(), NOW(), 'Mid-Rise Hall'),
  (NOW(), NOW(), 'North Campus Housing Complex'),
  (NOW(), NOW(), 'St. Ann"s Hermitage'),
  (NOW(), NOW(), 'St. Peter"s'),
  (NOW(), NOW(), 'Science and Allied Health Building'),
  (NOW(), NOW(), 'Sheahan Hall'),
  (NOW(), NOW(), 'Steel Plant Studios and Gallery'),
  (NOW(), NOW(), 'Student Center/Music Building'),
  (NOW(), NOW(), 'Lower West Ceder Townhouses'),
  (NOW(), NOW(), 'Upper West Ceder Townhouses')
;

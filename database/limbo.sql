DROP DATABASE IF EXISTS site_db;
CREATE DATABASE site_db;
USE site_db;


/*all found items will go here*/
DROP TABLE IF EXISTS foundItems_t;
CREATE TABLE foundItems_t
(   ItemID INT PRIMARY KEY AUTO_INCREMENT,
    ItemName TEXT NOT NULL,
    DateFound DATE NOT NULL,
    BuildingFound TEXT NOT NULL,
    findersName VARCHAR(80) NOT NULL,
    findersEmail VARCHAR(80) NOT NULL
    );

INSERT INTO foundItems_t(ItemName, DateFound, BuildingFound, findersName, findersEmail)
VALUES ('Sunglasses', '2018-10-28', 'Leo Hall', 'Tori Spychalski', 'victoria.spychalski1@marist.edu'),
       ('Blue Backpack', '2018-11-02', 'Dyson', 'Maria Molloy', 'maria.molloy1@marist.edu'),
       ('MacBook Pro', '2018-11-05', 'Hancock', 'Danny Simpson', 'daniel.simpson1@marist.edu');


/*items can be moved to found items when found*/
DROP TABLE IF EXISTS lostItems_t;
CREATE TABLE lostItems_t
(   ItemID INT PRIMARY KEY AUTO_INCREMENT,
    ItemName TEXT NOT NULL,
    DateLost DATE NOT NULL,
    BuildingLost TEXT NOT NULL,
    ownersName VARCHAR(80) NOT NULL,
    ownersEmail VARCHAR(80) NOT NULL
) ;

INSERT INTO lostItems_t(ItemName, DateLost, BuildingLost, ownersName, ownersEmail)
VALUES ('Marist Water Bottle', '2018-10-21', 'Hancock', 'Tori Spychalski', 'victoria.spychalski1@marist.edu'),
       ('Apple Watch', '2018-10-29', 'McCann', 'Danny Simpson', 'daniel.simpson1@marist.edu'),
       ('Blue Backpack', '2018-11-01', 'Dyson', 'Maria Molloy', 'maria.molloy1@marist.edu');

/*Users table*/
DROP TABLE IF EXISTS users;
CREATE TABLE users
(   user_id  INT PRIMARY KEY AUTO_INCREMENT,
    userName varchar(80) NOT NULL,
    password varchar(255) NOT NULL,
    first_name varchar(80) NOT NULL,
    last_name varchar(80) NOT NULL
) ;

INSERT INTO users (userName, password, first_name, last_name)
VALUES ('admin', 'gaze11e', 'Admin', 'User');

CREATE TABLE IF NOT EXISTS locations (
  id INT NOT NULL AUTO_INCREMENT ,
  create_date DATETIME NOT NULL ,
  update_date DATETIME NOT NULL ,
  name TEXT NOT NULL ,
  PRIMARY KEY (id)
);

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
  (NOW(), NOW(), 'St. Ann\'s Hermitage'),
  (NOW(), NOW(), 'St. Peter\'s'),
  (NOW(), NOW(), 'Science and Allied Health Building'),
  (NOW(), NOW(), 'Sheahan Hall'),
  (NOW(), NOW(), 'Steel Plant Studios and Gallery'),
  (NOW(), NOW(), 'Student Center/Music Building'),
  (NOW(), NOW(), 'Lower West Ceder Townhouses'),
  (NOW(), NOW(), 'Upper West Ceder Townhouses')
;

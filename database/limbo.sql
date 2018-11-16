# Limbo Tables

# Author: Maria Molloy, Victoria Spychalski, Daniel Simpson



DROP DATABASE IF EXISTS site_db;

CREATE DATABASE site_db;
USE site_db;

/*ADMIN TABLE*/
DROP TABLE IF EXISTS admin_t;

CREATE TABLE admin_t
(

    AdminID INT PRIMARY KEY AUTO_INCREMENT,
    
    FirstName TEXT NOT NULL,
    
    LastName TEXT NOT NULL,
    
    AdminEmail TEXT NOT NULL

);

/*creating the admins*/
INSERT INTO admin_t (FirstName, LastName, AdminEmail) 
VALUES ('Victoria', 'Spychalski', 'victoria.spychalski1@marist.edu'),

       ('Daniel', 'Simpson', 'daniel.simpson1@marist.edu'),

       ('Maria', 'Molloy', 'maria.molloy1@marist.edu');
       

/*finder of an item is documented*/
DROP TABLE IF EXISTS finder_t;
CREATE TABLE finder_t
(
    FinderID INT PRIMARY KEY AUTO_INCREMENT,
    
    FirstName TEXT NOT NULL,
    
    LastName TEXT NOT NULL,
    
    ItemFound TEXT NOT NULL,
    
    DateReturned DATE NOT NULL,
    
    FinderEmail TEXT NOT NULL
);

INSERT INTO finder_t (FirstName, LastName, ItemFound, DateReturned, FinderEmail) 
VALUES ('Hannah', 'Whitehead', 'Sunglasses', '2018-10-28' 'hannah.whitehead1@marist.edu'),

       ('Alyssa', 'Lynch', 'Blue backpack', '2018-11-02','alyssa.lynch1@marist.edu'),

       ('Dillon', 'Lusk', 'MacBook Pro', '2018-11-05' ,'maria.molloy1@marist.edu');
       

/*someone who is looking for a lost item is an owner*/
DROP TABLE IF EXISTS owner_t;
CREATE TABLE owner_t
(
    OwnerID INT PRIMARY KEY AUTO_INCREMENT,
    
    FirstName TEXT NOT NULL,
    
    LastName TEXT NOT NULL,
    
    ItemLost TEXT NOT NULL,
    
    DateLost DATE NOT NULL,
    
    BuildingLost TEXT NOT NULL,
    
    OwnerEmail TEXT NOT NULL, /*when item is found, the owner will be emailed*/
    
    ItemStatus TEXT NOT NULL /*itemstatus switches between 'not found' and 'found' when the item is returned*/
    
);

INSERT INTO owner_t (FirstName, LastName, ItemLost, DateLost, BuildingLost, OwnerEmail, ItemStatus)
VALUES ('Lynn', 'Jacobs', 'Marist Water Bottle', '2018-10-21', 'Hancock', 'lynn.jacobs1@marist.edu', 'Not Found' ),

       ('Steve', 'McGovern', 'Apple Watch', '2018-10-29', 'McCann', 'steve.mcgovern1@marist.edu', 'Not Found'),
       
       ('Connor', 'Murray', 'Blue Backpack', '2018-11-01', 'Dyson', 'connor.murrary1@marist.edu', 'Not Found');
       
       
/*all found items will go here*/
DROP TABLE IF EXISTS foundItems_t;
CREATE TABLE foundItems_t
(
    ItemID INT PRIMARY KEY AUTO_INCREMENT,
    
    ItemName TEXT NOT NULL,
    
    ConditionFound TEXT NOT NULL,
    
    DateFound DATE NOT NULL,
    
    BuilidngFound TEXT NOT NULL,
    
    FOREIGN KEY(FinderID)REFERENCES finder_t(FinderID)
);

INSERT INTO foundItems_t(ItemName, ConiditionFound, DateFound, BuildingFound)
VALUES ('Sunglasses', 'Fair', '2018-10-28', 'Leo Hall'),
    
       ('Blue Backpack', 'Worn', '2018-11-02', 'Dyson'),
       
       ('MacBook Pro', 'Good', '2018-11-05', 'Hancock');
       
/*items can be moved to found items when found*/
DROP TABLE IF EXISTS lostItems_t;
CREATE TABLE lostItems_t
(
    ItemID INT PRIMARY KEY AUTO_INCREMENT,
    
    ItemName TEXT NOT NULL,
    
    DateLost DATE NOT NULL,
    
    BuilidngLost TEXT NOT NULL,
    
    FOREIGN KEY(OwnerID)  REFERENCES owner_t(OwnerID)
) ;

INSERT INTO foundItems_t(ItemName, DateLost, BuildingLost)
VALUES ('Marist WaterBottle', '2018-10-21', 'Hancock'),
    
       ('Apple Watch', '2018-10-29', 'McCann'),
       
       ('Blue Backpack', '2018-11-01', 'Dyson');


SELECT * FROM presidents;


SELECT lname, num, dob FROM presidents ORDER BY num;


SELECT lname, num, dob FROM presidents ORDER BY lname;


SELECT lname, num, dob FROM presidents ORDER BY dob DESC;
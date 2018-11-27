DROP DATABASE IF EXISTS site_db;
CREATE DATABASE site_db;
USE site_db;


/*all found items will go here*/
DROP TABLE IF EXISTS foundItems_t;
CREATE TABLE foundItems_t
(   ItemID INT PRIMARY KEY AUTO_INCREMENT,
    ItemName TEXT NOT NULL,
    DateFound DATE NOT NULL,
    BuildingFound TEXT NOT NULL
    FOREIGN KEY(UserID)  REFERENCES users_t(UserID)
    );

INSERT INTO foundItems_t(ItemName, DateFound, BuildingFound)
VALUES ('Sunglasses', '2018-10-28', 'Leo Hall'),
       ('Blue Backpack', '2018-11-02', 'Dyson'),
       ('MacBook Pro', '2018-11-05', 'Hancock');


/*items can be moved to found items when found*/
DROP TABLE IF EXISTS lostItems_t;
CREATE TABLE lostItems_t
(   ItemID INT PRIMARY KEY AUTO_INCREMENT,
    ItemName TEXT NOT NULL,
    DateLost DATE NOT NULL,
    BuildingLost TEXT NOT NULL
    FOREIGN KEY(UserID)  REFERENCES user_t(UserID)
) ;

INSERT INTO lostItems_t(ItemName, DateLost, BuildingLost)
VALUES ('Marist Water Bottle', '2018-10-21', 'Hancock'),
       ('Apple Watch', '2018-10-29', 'McCann'),
       ('Blue Backpack', '2018-11-01', 'Dyson');

/*Create a Table for each of the buildings on campus
If references is the foreign key, then what does "FOREIGN KEY(OwnerID)  REFERENCES owner_t(OwnerID)"" mean*/

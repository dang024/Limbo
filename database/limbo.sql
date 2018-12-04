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
    /*FOREIGN KEY(UserID)  REFERENCES users_t(UserID)*/
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
    /*FOREIGN KEY(UserID)  REFERENCES user_t(UserID)*/
) ;

INSERT INTO lostItems_t(ItemName, DateLost, BuildingLost, ownersName, ownersEmail)
VALUES ('Marist Water Bottle', '2018-10-21', 'Hancock', 'Tori Spychalski', 'victoria.spychalski1@marist.edu'),
       ('Apple Watch', '2018-10-29', 'McCann', 'Danny Simpson', 'daniel.simpson1@marist.edu'),
       ('Blue Backpack', '2018-11-01', 'Dyson', 'Maria Molloy', 'maria.molloy1@marist.edu');

/*Create a Table for each of the buildings on campus
If references is the foreign key, then what does "FOREIGN KEY(OwnerID)  REFERENCES owner_t(OwnerID)"" mean*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'site_db'
--

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

  CREATE TABLE users (
  user_id int(11) PRIMARY KEY NOT NULL,
  userName varchar(80) DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'users'
--

INSERT INTO users (userName, password) VALUES
('admin', 'gaze11e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'users'
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'users'
--
ALTER TABLE users
  MODIFY user_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

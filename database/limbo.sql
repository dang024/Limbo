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
    /*FOREIGN KEY(UserID)  REFERENCES users_t(UserID)*/
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
    /*FOREIGN KEY(UserID)  REFERENCES user_t(UserID)*/
) ;

INSERT INTO lostItems_t(ItemName, DateLost, BuildingLost)
VALUES ('Marist Water Bottle', '2018-10-21', 'Hancock'),
       ('Apple Watch', '2018-10-29', 'McCann'),
       ('Blue Backpack', '2018-11-01', 'Dyson');

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
  f_name varchar(80) DEFAULT NULL,
  l_name varchar(80) DEFAULT NULL,
  email varchar(96) UNIQUE DEFAULT NULL,
  password varchar(255) DEFAULT NULL,
  AdminPriv tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'users'
--

INSERT INTO users (user_id, f_name, l_name, email, password, AdminPriv) VALUES
(0, 'Hannah', 'Whitehead', 'hannah.whitehead1@marist.edu', 'password', 1),
(1, 'Alyssa', 'Lynch', 'alyssa.lynch1@marist.edu', 'password', 1),
(2, 'Dillon', 'Lusk', 'maria.molloy1@marist.edu', 'password', 1),
(3, 'Ferris', 'Boolean', 'ferrisboolean@gmail.com', 'password', 0),
(4, 'Daniel', 'Simpson', 'dalesimpson2@gmail.com', 'truuu', 0),
(5, 'Mister', 'Gatorade', 'dangosimpson@gmail.com', 'password!', 0),
(6, 'Maria', 'Molloy', 'mariamango3@gmail.com', 'maria123', 0),
(7, 'Mister', 'Tea', 'mistertea@gmail.com', 'tea123', 0),
(8, 'murr', 'c', 'mc@mail.coj', 'jhfjdhnf', 0),
(9, 'dan', 's', 'ddD@gmail.com', 'truuuuu', 0),
(10, 'admin', '', 'admin', 'gaze11e', 1);

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

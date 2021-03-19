SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- Table structure for table `history`

CREATE TABLE `history` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `customers`


CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(001, 'Alan', 'alan23@gmail.com', 9000),
(002, 'Neha', 'neha89@gmail.com', 4000),
(003, 'Justin', 'justin@gmail.com', 7000),
(004, 'Ahana', 'ahanaaa@gmail.com', 2000),
(005, 'Arjun', 'aarjuna@gmail.com', 6000),
(006, 'Tom', 'tomm@gmail.com', 3000),
(007, 'Shreya', 'shreyaa@gmail.com', 1000),
(008, 'Vinit', 'vinit@gmail.com', 3000),
(009, 'Aman', 'aman45@gmail.com', 8000),
(010, 'Chris', 'chris97@gmail.com', 5000);
COMMIT;

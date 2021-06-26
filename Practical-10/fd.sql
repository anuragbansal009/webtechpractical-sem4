-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`, `empid`) VALUES
('anuragbansal', '12345', 'anurag');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `balance` int(11) NOT NULL
);

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balance`) VALUES
(17281);

-- --------------------------------------------------------

--
-- Table structure for table `order_hist`
--

CREATE TABLE `order_hist` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `confirm_account` varchar(20) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `chocolate_dip` varchar(5) NOT NULL,
  `oreo` varchar(5) NOT NULL,
  `m_and_m` varchar(5) NOT NULL,
  `caramel` varchar(5) NOT NULL,
  `brownie` varchar(5) NOT NULL,
  `hot_fudge` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
);

--
-- Dumping data for table `order_hist`
--

INSERT INTO `order_hist` (`phone`, `name`, `confirm_account`, `flavour`, `order_date`, `chocolate_dip`, `oreo`, `m_and_m`, `caramel`, `brownie`, `hot_fudge`, `price`, `order_id`) VALUES
(98765, 'Anurag', 'E-Mail', 'Vanilla', '2021-06-01', 'true', 'false', 'true', 'true', 'false', 'false', 1720, 10001),
(12345, 'Test', 'Phone', 'Vanilla', '2021-06-09', 'false', 'true', 'true', 'false', 'true', 'false', 1700, 10002),
(98765, 'Anurag', 'E-Mail', 'Vanilla', '2021-06-15', 'false', 'false', 'false', 'true', 'false', 'true', 1420, 10003),
(11111, 'Test2', 'Phone', 'Vanilla', '2021-06-19', 'false', 'true', 'true', 'true', 'false', 'false', 1570, 10004);

-- --------------------------------------------------------

--
-- Table structure for table `order_id`
--

CREATE TABLE `order_id` (
  `order_id` int(11) NOT NULL
);

--
-- Dumping data for table `order_id`
--

INSERT INTO `order_id` (`order_id`) VALUES
(10010);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_order`
--

CREATE TABLE `confirmed_order` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `confirm_account` varchar(20) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `chocolate_dip` varchar(5) NOT NULL,
  `oreo` varchar(5) NOT NULL,
  `m_and_m` varchar(5) NOT NULL,
  `caramel` varchar(5) NOT NULL,
  `brownie` varchar(5) NOT NULL,
  `hot_fudge` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
);

--
-- Dumping data for table `confirmed_order`
--

INSERT INTO `confirmed_order` (`phone`, `name`, `confirm_account`, `flavour`, `order_date`, `chocolate_dip`, `oreo`, `m_and_m`, `caramel`, `brownie`, `hot_fudge`, `price`, `order_id`) VALUES
(98765, 'Anurag', 'E-Mail', 'Vanilla', '2021-06-15', 'false', 'false', 'false', 'true', 'false', 'true', 1420, 10005),
(11111, 'Test2', 'Phone', 'Vanilla', '2021-06-19', 'false', 'true', 'true', 'true', 'false', 'false', 1570, 10006);
-- --------------------------------------------------------

--
-- Table structure for table `order_count`
--

CREATE TABLE `order_count` (
  `flavour` varchar(20) NOT NULL,
  `available_orders` int(11) NOT NULL,
  `ongoing_orders` int(11) NOT NULL,
  `price` int(11) NOT NULL
);

--
-- Dumping data for table `order_count`
--

INSERT INTO `order_count` (`flavour`, `available_orders`, `ongoing_orders`, `price`) VALUES
('Vanilla', 5, 1, 1000),
('Strawberry', 4, 1, 1800),
('Chocolate', 5, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `pwd` varchar(20) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order_id_`
--

CREATE TABLE `temp_order_id_` (
  `order_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `phone` int(11) NOT NULL,
  `confirm_account` varchar(20) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `temp_session`
--

CREATE TABLE `temp_session` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `confirm_account` varchar(20) NOT NULL,
  `dob` date NOT NULL
);

--
-- Dumping data for table `temp_session`
--

INSERT INTO `temp_session` (`phone`, `password`, `name`, `email`, `confirm_account`, `dob`) VALUES
(98765, 'qwertyuiop', 'Anurag', 'anuragbansal@gmail.com', 'E-Mail', '2001-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `confirm_account` varchar(20) NOT NULL,
  `dob` date NOT NULL
);

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`phone`, `password`, `name`, `email`, `confirm_account`, `dob`) VALUES
(98765, 'qwertyuiop', 'Anurag', 'anuragbansal@gmail.com', 'E-Mail', '2001-11-03'),
(12345, '12345', 'Test1', 'test1@gmail.com', 'E-Mail', '2000-01-01'),
(11111, '11111', 'Test2', 'test2@gmail.com', 'Phone', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `confirm_account` varchar(20) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `chocolate_dip` varchar(5) NOT NULL,
  `oreo` varchar(5) NOT NULL,
  `m_and_m` varchar(5) NOT NULL,
  `caramel` varchar(5) NOT NULL,
  `brownie` varchar(5) NOT NULL,
  `hot_fudge` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
);
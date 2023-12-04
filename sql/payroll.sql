-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 15:30:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `payroll`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bill`
--

CREATE TABLE `bill` (
  `billsno` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `bill`
--

INSERT INTO `bill` (`billsno`, `bill_id`, `company_id`, `delete_status`) VALUES
(1, 1, 5, '0'),
(2, 123, 2, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billreceived`
--

CREATE TABLE `billreceived` (
  `bsno` int(10) NOT NULL,
  `billsno` int(10) NOT NULL,
  `totoal_bill` int(10) NOT NULL,
  `received_date` varchar(10) NOT NULL,
  `received_amount` int(11) NOT NULL,
  `reduced` int(10) NOT NULL,
  `remark` varchar(10) NOT NULL,
  `pay_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bkash`
--

CREATE TABLE `bkash` (
  `bk_id` int(11) NOT NULL,
  `given_date` date NOT NULL DEFAULT '0000-00-00',
  `amount` int(11) NOT NULL DEFAULT 0,
  `remark` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `bkash`
--

INSERT INTO `bkash` (`bk_id`, `given_date`, `amount`, `remark`) VALUES
(5, '2018-09-09', 60000, ''),
(6, '2018-09-09', 100000, ''),
(7, '2018-09-09', 100000, ''),
(8, '2018-09-09', 600000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cash`
--

CREATE TABLE `cash` (
  `c_id` int(10) NOT NULL,
  `given_date` date NOT NULL DEFAULT '0000-00-00',
  `amount` int(10) NOT NULL,
  `remark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cash`
--

INSERT INTO `cash` (`c_id`, `given_date`, `amount`, `remark`) VALUES
(7, '2023-11-14', 20, 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `company_type` varchar(20) DEFAULT 'Regular',
  `address` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id`, `name`, `company_type`, `address`, `mobile`, `delete_status`, `details`) VALUES
(6, 'facebook', 'Regular', 'aTLACOMULCO', '(712) 200-0374', '0', 'redes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companybill`
--

CREATE TABLE `companybill` (
  `s_id` int(100) NOT NULL,
  `bill_no` int(100) NOT NULL DEFAULT 0,
  `billsno` varchar(10) DEFAULT NULL,
  `company_group_id` int(10) NOT NULL,
  `work_type` varchar(50) DEFAULT NULL,
  `work_area` varchar(50) DEFAULT NULL,
  `square_fit` int(11) DEFAULT 0,
  `rate` int(11) DEFAULT 0,
  `bill_date` date NOT NULL DEFAULT '0000-00-00',
  `receive_date` date NOT NULL DEFAULT '0000-00-00',
  `bill_amount` int(11) NOT NULL DEFAULT 0,
  `receive_amount` int(11) NOT NULL DEFAULT 0,
  `reduced` int(11) NOT NULL DEFAULT 0,
  `remark` varchar(50) DEFAULT NULL,
  `pay_status` enum('0','1','2') DEFAULT '0',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `companybill`
--

INSERT INTO `companybill` (`s_id`, `bill_no`, `billsno`, `company_group_id`, `work_type`, `work_area`, `square_fit`, `rate`, `bill_date`, `receive_date`, `bill_amount`, `receive_amount`, `reduced`, `remark`, `pay_status`, `delete_status`) VALUES
(1, 121, '2', 1, 'Paint', 'Rupnagar', 1200, 13, '2018-09-09', '2018-09-09', 15600, 10000, 10600, '', '2', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compaygroup`
--

CREATE TABLE `compaygroup` (
  `s_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `compaygroup`
--

INSERT INTO `compaygroup` (`s_id`, `id`, `g_id`, `g_name`, `delete_status`) VALUES
(1, 2, 1, 'Mrt-1', '0'),
(2, 6, 1, 'as', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deductions`
--

CREATE TABLE `deductions` (
  `deduction_id` int(5) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_cause` varchar(50) NOT NULL,
  `d_amount` int(10) NOT NULL,
  `d_method` set('cash','bkash') NOT NULL DEFAULT 'cash',
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `deductions`
--

INSERT INTO `deductions` (`deduction_id`, `emp_id`, `d_date`, `d_cause`, `d_amount`, `d_method`, `remark`) VALUES
(130, 1, '09-09-2018', 'payment', 3000, 'bkash', ''),
(131, 11, '09-09-2018', 'payment', 5000, 'bkash', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `division` varchar(30) NOT NULL,
  `mobileNo` varchar(20) DEFAULT NULL,
  `salary` int(10) NOT NULL DEFAULT 0,
  `bonus` int(10) NOT NULL DEFAULT 0,
  `loan` int(11) NOT NULL DEFAULT 0,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`emp_id`, `lname`, `fname`, `gender`, `emp_type`, `division`, `mobileNo`, `salary`, `bonus`, `loan`, `delete_status`) VALUES
(26, 'Casiano Angeles', 'Alejandro', 'Male', 'Regular', 'Maintenance', '(712) 200-0374', 100, 70, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `overtime`
--

CREATE TABLE `overtime` (
  `ot_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL DEFAULT 0,
  `emp_id` int(10) NOT NULL,
  `ot_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `pay_date` date NOT NULL DEFAULT '0000-00-00',
  `pay_amount` int(10) NOT NULL DEFAULT 0,
  `paid_in_cash` int(10) NOT NULL DEFAULT 0,
  `paid_in_bkash` int(10) NOT NULL DEFAULT 0,
  `due` int(10) NOT NULL DEFAULT 0,
  `due_status` enum('0','1') NOT NULL DEFAULT '0',
  `advance` int(10) NOT NULL DEFAULT 0,
  `advance_status` enum('0','1') NOT NULL DEFAULT '0',
  `pay_remark` varchar(100) DEFAULT NULL,
  `pay_status` enum('0','1') NOT NULL DEFAULT '0',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`pay_id`, `emp_id`, `pay_date`, `pay_amount`, `paid_in_cash`, `paid_in_bkash`, `due`, `due_status`, `advance`, `advance_status`, `pay_remark`, `pay_status`, `delete_status`) VALUES
(4, 26, '2023-11-30', 5, 5, 0, 195, '1', 0, '0', '', '1', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_company` varchar(100) NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `p_quantity` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `delete_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_operation_history`
--

CREATE TABLE `product_operation_history` (
  `sno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `operation` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT '2018-00-00',
  `value` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `edit_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `product_operation_history`
--

INSERT INTO `product_operation_history` (`sno`, `pid`, `quantity`, `operation`, `date`, `value`, `result`, `remark`, `edit_status`) VALUES
(42, 3, 40, 'sub', '2018-08-18', 1, 39, 'Majharul vai', '0'),
(41, 4, 40, 'sub', '2018-08-18', 40, 0, 'Adjust', '0'),
(39, 3, 0, 'add', '2018-08-16', 42, 42, 'RAK Paints', '0'),
(40, 3, 42, 'sub', '2018-08-16', 2, 40, 'Rofik', '0'),
(37, 2, 40, 'add', '2018-08-16', 2, 42, 'RAK Paints', '0'),
(38, 2, 42, 'sub', '2018-08-16', 42, 0, 'For Correction', '1'),
(43, 48, 5, 'sub', '2018-08-18', 2, 3, 'Majharul vai', '0'),
(44, 48, 3, 'sub', '2018-08-19', 2, 1, 'Majharul vai', '0'),
(45, 22, 3, 'sub', '2018-08-29', 2, 1, 'Kamrul Vai', '0'),
(46, 28, 4, 'sub', '2018-08-29', 2, 2, 'Kamrul', '0'),
(47, 22, 1, 'sub', '2018-08-29', 0, 1, 'Tutul vai', '1'),
(48, 28, 2, 'sub', '2018-08-29', 2, 0, 'Tutul vai', '1'),
(49, 13, 40, 'sub', '2018-08-29', 2, 38, 'Tutul vai', '0'),
(50, 3, 39, 'sub', '2018-08-29', 3, 36, 'Dhaka site', '1'),
(51, 65, 7, 'sub', '2018-08-29', 2, 5, 'Dhaka site', '0'),
(52, 91, 27, 'sub', '2018-08-30', 3, 24, 'Dhaka site', '0'),
(53, 42, 1, 'add', '2018-09-01', 10, 11, 'Received by Emon', '0'),
(54, 32, 2, 'add', '2018-09-01', 5, 7, 'Received by Emon', '0'),
(55, 2, 0, 'add', '2018-09-01', 20, 20, 'Received by Emon', '0'),
(56, 105, 0, 'add', '2018-09-01', 50, 50, 'New Purchase', '0'),
(57, 13, 38, 'sub', '2018-08-31', 10, 28, 'Akbar', '0'),
(58, 3, 36, 'sub', '2018-08-31', 5, 31, 'Akbar', '0'),
(59, 32, 7, 'sub', '2018-08-31', 2, 5, 'Akbar', '0'),
(60, 2, 20, 'sub', '2018-09-03', 2, 18, 'Saddam', '0'),
(61, 3, 31, 'sub', '2018-09-03', 1, 30, 'Saddam', '0'),
(62, 13, 28, 'sub', '2018-09-03', 2, 26, 'Saddam', '0'),
(63, 107, 1, 'sub', '2018-09-03', 1, 0, 'Saddam', '0'),
(64, 105, 50, 'sub', '2018-09-03', 2, 48, 'School Van', '0'),
(65, 105, 48, 'sub', '2018-09-03', 40, 8, 'Majharul vai, Volkanising', '0'),
(66, 105, 8, 'sub', '2018-09-03', 1, 7, 'Nazu vai', '0'),
(67, 105, 7, 'sub', '2018-09-03', 5, 2, 'Tutul vai', '0'),
(68, 106, 10, 'sub', '2018-09-03', 2, 8, 'Tutul vai', '0'),
(69, 13, 26, 'sub', '2018-09-03', 2, 24, 'Tutul vai', '0'),
(70, 2, 18, 'sub', '2018-09-04', 2, 16, 'Rofik', '0'),
(71, 3, 30, 'sub', '2018-09-04', 2, 28, 'Rofik', '0'),
(72, 13, 24, 'sub', '2018-09-04', 2, 22, 'Rofik', '0'),
(73, 106, 8, 'sub', '2018-09-04', 2, 6, 'Rofik', '0'),
(74, 2, 16, 'sub', '2018-09-04', 1, 15, 'Saddam', '0'),
(75, 3, 28, 'sub', '2018-09-04', 1, 27, 'Saddam', '0'),
(76, 13, 22, 'sub', '2018-09-04', 2, 20, 'Saddam', '0'),
(77, 91, 24, 'sub', '2018-09-04', 9, 15, 'Nazu vai', '0'),
(78, 91, 15, 'add', '2018-09-04', 3, 18, 'ferot', '0'),
(79, 92, 3, 'sub', '2018-09-04', 3, 0, 'Dhaka site- nazu vai', '0'),
(80, 2, 15, 'sub', '2018-09-04', 3, 12, 'Dhaka site- nazu vai', '0'),
(81, 13, 20, 'sub', '2018-09-06', 2, 18, 'Dhaka site- nazu vai', '0'),
(82, 10, 0, 'add', '2018-09-09', 10, 10, '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receivedbill`
--

CREATE TABLE `receivedbill` (
  `sno` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `bill_date` date NOT NULL DEFAULT '2018-00-00',
  `amount` int(11) NOT NULL DEFAULT 0,
  `remark` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `receivedbill`
--

INSERT INTO `receivedbill` (`sno`, `s_id`, `bill_date`, `amount`, `remark`) VALUES
(57, 1, '2018-09-09', 5000, ''),
(58, 1, '2018-09-09', 5000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reset`
--

CREATE TABLE `reset` (
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `salary_rate` int(10) NOT NULL,
  `bonus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_id`, `salary_rate`, `bonus`) VALUES
(1, 24, 100, 0),
(2, 0, 100, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `s_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `stock_quantity` int(10) NOT NULL DEFAULT 0,
  `status` varchar(10) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(10) NOT NULL,
  `t_date` date NOT NULL,
  `amount` int(10) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `method` set('cash','bkash') NOT NULL DEFAULT 'cash',
  `remark` varchar(100) DEFAULT NULL,
  `delete_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `w_id` int(10) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `w_date` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`w_id`, `emp_id`, `w_date`) VALUES
(1, 11, 20),
(2, 12, 15),
(3, 13, 16),
(4, 14, 0),
(5, 15, 14),
(6, 16, 15),
(7, 17, 13),
(8, 20, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billsno`);

--
-- Indices de la tabla `billreceived`
--
ALTER TABLE `billreceived`
  ADD PRIMARY KEY (`bsno`);

--
-- Indices de la tabla `bkash`
--
ALTER TABLE `bkash`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indices de la tabla `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companybill`
--
ALTER TABLE `companybill`
  ADD PRIMARY KEY (`s_id`);

--
-- Indices de la tabla `compaygroup`
--
ALTER TABLE `compaygroup`
  ADD PRIMARY KEY (`s_id`);

--
-- Indices de la tabla `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indices de la tabla `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`ot_id`);

--
-- Indices de la tabla `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `product_operation_history`
--
ALTER TABLE `product_operation_history`
  ADD PRIMARY KEY (`sno`);

--
-- Indices de la tabla `receivedbill`
--
ALTER TABLE `receivedbill`
  ADD PRIMARY KEY (`sno`);

--
-- Indices de la tabla `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`s_id`);

--
-- Indices de la tabla `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bill`
--
ALTER TABLE `bill`
  MODIFY `billsno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `billreceived`
--
ALTER TABLE `billreceived`
  MODIFY `bsno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bkash`
--
ALTER TABLE `bkash`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cash`
--
ALTER TABLE `cash`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `companybill`
--
ALTER TABLE `companybill`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compaygroup`
--
ALTER TABLE `compaygroup`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `deductions`
--
ALTER TABLE `deductions`
  MODIFY `deduction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `overtime`
--
ALTER TABLE `overtime`
  MODIFY `ot_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `product_operation_history`
--
ALTER TABLE `product_operation_history`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `receivedbill`
--
ALTER TABLE `receivedbill`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

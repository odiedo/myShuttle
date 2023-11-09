
DROP TABLE IF EXISTS `passengers`;
CREATE TABLE `passengers`(
  `passenger_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `extra_passengers`;
CREATE TABLE `extra_passengers`(
  `extra_passenger_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `ref_phone_number` int(15) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `routes`;
CREATE TABLE `routes`(
  `route_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `vehicle_avail`;
CREATE TABLE `vehicle_avail`(
  `avail_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pri_key` varchar(100) NOT NULL UNIQUE,
  `driver_id_no` int(100) NOT NULL,
  `admin_id_no` int(100) NOT NULL,
  `avail_vehicle_number_plate` varchar(100) NOT NULL,
  `avail_vehicle_place` varchar(100) NOT NULL,
  `booked_seat` int(15) NOT NULL,
  `vehicle_destination` varchar(100) NOT NULL,
  `departure_time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE `vehicles`(
  `vehicle_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `number_plate` varchar(100) NOT NULL,
  `trips` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver`(
  `driver_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `id_number` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trips` int(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `vehicle_seats`;
CREATE TABLE `vehicle_seats`(
  `vehicle_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pri_key` varchar(100) NOT NULL,  
  `number_plate` varchar(100) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking`(
  `booking_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pri_key` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `number_plate` varchar(100) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `price` int(15) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `referal` varchar(100) NOT NULL,
  `departure_time` varchar(100) NOT NULL,
  `booked_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`(
  `admin_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `station` varchar(100) NOT NULL,
  `id_number` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips`(
  `trip_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pri_key` varchar(100) NOT NULL,
  `id_number` int(15) NOT NULL,
  `driver_id_no` int(15) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `seats` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

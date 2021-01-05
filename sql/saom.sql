-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 02:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saom`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addAdmin` (IN `p_adminid` INT, IN `p_fName` VARCHAR(25), IN `p_lName` VARCHAR(25), IN `p_Address` VARCHAR(255), IN `p_emailAddress` VARCHAR(200), IN `p_DOB` DATE)  NO SQL
BEGIN
	INSERT INTO admin
    (adminID,fName,lName,Address,emailAddress,DOB,dateAdded,dateModified)
    VALUES(p_adminid,p_fName,p_lName,p_Address,p_emailAddress,p_DOB,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addBook` (IN `p_bookName` VARCHAR(50), IN `p_Price` INT, IN `p_Author` VARCHAR(50))  NO SQL
BEGIN
	INSERT INTO books
    (bookName,Price,Author,dateAdded,dateModified)
    VALUES(p_bookName,p_Price,p_Author,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addCourse` (IN `p_Coursename` VARCHAR(100), IN `p_Coursedesc` VARCHAR(255), IN `p_Department` VARCHAR(20))  NO SQL
BEGIN
	INSERT INTO course
    (CourseName,CourseDesc,Department,dateAdded,dateModified)
    VALUES(p_Coursename,p_Coursedesc,p_Department,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addEvent` (IN `p_eventName` VARCHAR(50), IN `p_location` VARCHAR(100), IN `p_venue` VARCHAR(50))  NO SQL
BEGIN
	INSERT INTO events
    (eventName,location,venue,dateAdded,dateModified)
    VALUES(p_eventName,p_location,p_venue,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addExam` (IN `p_examType` VARCHAR(50), IN `p_Duration` DOUBLE, IN `p_Price` DOUBLE, IN `p_examDate` DATE, IN `p_examCenter` VARCHAR(100), IN `p_Level` INT, IN `p_Grade` INT, IN `p_studentID` INT)  NO SQL
BEGIN
	INSERT INTO exams
    (examType,Duration,Price,examDate,examCenter,Level,Grade,studentID)
    VALUES(p_examType,p_Duration,p_Price,p_examDate,p_examCenter,p_Level,
          p_Grade,p_studentID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addExamResults` (IN `p_Subject` VARCHAR(100), IN `p_courseID` INT, IN `p_year` INT, IN `p_result` INT, IN `p_studentID` INT)  NO SQL
BEGIN
	INSERT INTO examresults
    (Subject,CourseID,Year,result,dateAdded,dateModified,studentID)
    VALUES(p_Subject,p_courseID,p_year,p_result,now(),now(),p_studentID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addGuest` (IN `p_email` VARCHAR(255), IN `p_fname` VARCHAR(20), IN `p_lname` VARCHAR(20))  NO SQL
BEGIN
	INSERT INTO guest
    (Email,FirstName,LastName,dateAdded,dateModified)
    VALUES(p_email, p_fname,p_lname,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addMaintenanceRequest` (IN `p_requestID` INT, IN `p_requestName` VARCHAR(200), IN `p_requestDesc` VARCHAR(250))  NO SQL
BEGIN
	INSERT INTO maintenancerequest
    (MaintenancerqID,RequestName,RequestDesc,DateAdded,DateModified)
    VALUES(p_requestID,p_requestName,p_requestDesc,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addPurchase` (IN `p_purchaseID` INT, IN `p_GuestID` INT, IN `p_DOP` DATE)  NO SQL
BEGIN
INSERT INTO purchase
(GuestID,date_of_purchase)
VALUES (p_GuestID,p_DOP);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addPurchaseDetails` (IN `p_purchaseDetID` INT)  NO SQL
BEGIN
INSERT INTO purchase_details
(GuestID,RegisteredUserID,qty,cost)
SELECT GuestID,RegisteredUserID,quantity,price
FROM shoppingcart
ORDER BY GuestID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addSalesReport` (IN `p_reportID` INT, IN `p_monthBookSales` INT, IN `p_AnnualSales` INT, IN `p_MonthlyExamSales` INT, IN `p_FullTimeCourseMS` INT)  NO SQL
BEGIN
INSERT INTO salesreport
(SalesReportID,MonthlyBookSales,AnnualSales,MonthlyExamSales	,FullTimeCourseMS)
VALUES(p_reportID,p_monthBookSales,p_AnnualSales,p_MonthlyExamSales,p_FullTimeCourseMS);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addShoppingCart` (IN `p_ShoppingcartID` INT, IN `p_quantity` INT, IN `p_price` INT, IN `p_desc` INT)  NO SQL
BEGIN
INSERT INTO shoppingcart
(GuestID,RegisteredUserID,quantity,price,description)
VALUES(p_ShoppingcartID,p_quantity,p_price,p_desc);
SELECT GuestID,RegisteredUserID
FROM purchase_details
ORDER BY GuestID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addStaffDetails` (IN `p_staffID` INT, IN `p_f_name` VARCHAR(45), IN `p_l_name` VARCHAR(45), IN `p_course` VARCHAR(45), IN `p_email` VARCHAR(45), IN `p_phoneno` INT)  NO SQL
BEGIN
	INSERT INTO staff
    (StaffID, fName, lName, Course,email,PhoneNum,dateAdded,dateModified)
    VALUES(p_staffID, p_f_name,p_l_name,p_course, p_email, p_phoneno,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddStudentDetails` (IN `p_studentID` INT, IN `p_Student_fname` VARCHAR(45), IN `p_Student_lname` VARCHAR(45), IN `p_address` VARCHAR(75), IN `p_emailAddress` VARCHAR(75), IN `p_phoneno` INT, IN `p_course` VARCHAR(25), IN `p_DOB` DATE)  NO SQL
BEGIN
	INSERT INTO students
    (studentID, studentFName, studentLName, Address,emailAddress,phoneNumber,Course,DOB,dateAdded,dateModified)
    VALUES(p_studentID, p_Student_fname,p_Student_lname,p_address, p_emailAddress, p_phoneno,p_course,p_DOB,now(),now());
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAdmin` (IN `p_adminid` INT)  NO SQL
BEGIN
	DELETE FROM admin
    WHERE adminID = p_adminid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteBook` (IN `p_bookID` INT)  NO SQL
BEGIN
	DELETE FROM books
    WHERE BookID = p_bookID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCourse` (IN `p_courseID` INT)  NO SQL
BEGIN
	DELETE FROM course
    WHERE CourseID = p_courseID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEvent` (IN `p_eventID` INT)  NO SQL
BEGIN
	DELETE FROM events
    WHERE eventID = p_eventID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteExam` (IN `p_examID` INT)  NO SQL
BEGIN
	DELETE FROM exams
    WHERE ExamID = p_examID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteExamResults` (IN `p_examResultsID` INT)  NO SQL
BEGIN
	DELETE FROM examresults
    WHERE ExamResultsID = p_examResultsID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteGuest` (IN `p_GuestID` INT)  NO SQL
BEGIN
	DELETE FROM guest
    WHERE GuestID = p_GuestID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteMaintenanceREQ` (IN `p_requestID` INT)  NO SQL
BEGIN
DELETE FROM maintenancerequest
WHERE MaintenancerqID = p_requestID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletePurchase` (IN `p_purchaseID` INT)  NO SQL
BEGIN
DELETE FROM purchase
WHERE purchase_id = p_purchaseID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletePurchaseDetails` (IN `p_purchaseDetID` INT)  NO SQL
BEGIN

DELETE FROM purchase_details
WHERE purchase_detail_id = p_purchaseDetID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteRegisteredUser` (IN `p_RegisteredUserID` INT)  NO SQL
BEGIN
DELETE FROM registeredusers
WHERE RegisteredUserID = p_RegisteredUserID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteSalesReport` (IN `p_reportID` INT)  NO SQL
BEGIN
DELETE FROM salesreport
WHERE SalesReportID = p_reportID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteShoppingCart` (IN `p_ShoppingcartID` INT)  NO SQL
BEGIN
DELETE FROM shoppingcart
WHERE shoppingCartID = p_ShoppingcartID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteStaff` (IN `p_staffID` INT)  NO SQL
BEGIN
	DELETE FROM staff
    WHERE StaffID = p_staffID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteStudent` (IN `p_studentID` INT)  NO SQL
BEGIN
	DELETE FROM students
    WHERE studentID = p_studentID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegisterUser` (IN `p_studentFName` VARCHAR(50), IN `p_studentLName` VARCHAR(50), IN `p_emailAddress` VARCHAR(50), IN `p_password` VARCHAR(45), IN `p_Address` VARCHAR(250), IN `p_phoneNumber` INT, IN `p_Course` VARCHAR(45), IN `p_DOB` DATE)  NO SQL
BEGIN
	INSERT INTO student
    (
studentFName,
  studentLName,
  emailAddress,
  password,
  Address,
  phoneNumber,
  Course,
  DOB)
    VALUES(
    p_studentFName,
  p_studentLName,
  p_emailAddress,
  p_password,
  p_Address,
  p_phoneNumber,
  p_Course,
  p_DOB );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateStudent` (IN `p_studentID` INT, IN `p_fname` VARCHAR(55), IN `p_lname` VARCHAR(55), IN `p_address` VARCHAR(255), IN `p_email` VARCHAR(255), IN `p_number` INT, IN `p_course` VARCHAR(255), IN `p_DOB` DATE)  NO SQL
BEGIN
        UPDATE students
        SET dateModified = now(),studentFName = p_fname,
         studentFName = p_lname , Address = p_address, emailAddress= p_email, phoneNumber = p_number, Course = p_course, DOB = p_DOB
        WHERE studentID = p_studentID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidateUser` (IN `p_email` VARCHAR(255), IN `p_password` INT(30))  NO SQL
BEGIN
SELECT email,password
FROM registeredusers
WHERE p_email = email AND p_password = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validStaff` (IN `p_emailAddress` VARCHAR(45), IN `p_password` VARCHAR(45))  NO SQL
BEGIN
SELECT password, emailAddress
FROM staff
WHERE p_emailAddress = emailAddress AND p_password = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validUser` (IN `p_emailAddress` VARCHAR(45), IN `p_password` VARCHAR(45))  NO SQL
BEGIN
SELECT password, emailAddress
FROM student
WHERE p_emailAddress = emailAddress AND p_password = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAdminDetails` (IN `p_adminid` INT)  NO SQL
BEGIN

 SELECT adminID,
 admin.fName,admin.lName,admin.Address,admin.emailAddress,admin.DOB,
 admin.dateAdded,admin.dateModified

 FROM admin

 WHERE admin.adminID = p_adminid;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllAdminDetails` ()  NO SQL
BEGIN
SELECT *
FROM admin
ORDER BY ID,adminID,fName,lName,Address,emailAddress,DOB, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllBooks` ()  NO SQL
BEGIN
SELECT *
FROM books
ORDER BY BookID,bookName,Price,Author, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllCourseDetails` ()  NO SQL
BEGIN
SELECT *
FROM course
ORDER BY CourseID,CourseName,CourseDesc,Department, now(),now(),studentID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllEvents` ()  NO SQL
BEGIN
SELECT *
FROM events
ORDER BY eventID,eventName,location,venue, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllExamResults` ()  NO SQL
BEGIN
SELECT *
FROM examresults
ORDER BY ExamResultsID,Subject,CourseID,Year,result,studentID, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllExams` ()  NO SQL
BEGIN
SELECT *
FROM exams
ORDER BY ExamID,examType,Duration,Price,examDate,examCenter,
Level,Grade,studentID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllGuests` ()  NO SQL
BEGIN
SELECT *
FROM guest
ORDER BY GuestID,Email,FirstName,LastName, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllMaintenanceREQ` ()  NO SQL
BEGIN
SELECT * FROM 
maintenancerequest
ORDER BY MaintenancerqID,RequestName,RequestDesc,DateAdded,DateModified;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllPurchase` ()  NO SQL
BEGIN
SELECT * FROM
purchase
ORDER BY purchase_id,GuestID,date_of_purchase;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllPurchaseDetails` ()  NO SQL
BEGIN
SELECT * FROM
purchase_details
ORDER BY purchase_detail_id,purchase_id,BookID,GuestID	,RegisteredUserID,qty,cost;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllRegisteredUsers` ()  NO SQL
BEGIN
SELECT * FROM registeredusers
ORDER BY RegisteredUserID,firstName,lastName,email,occupation,password,dateAdded,dateModified;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllSalesReports` ()  NO SQL
BEGIN

SELECT * FROM salesreport
ORDER BY SalesReportID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllShoppingCart` ()  NO SQL
BEGIN
SELECT * FROM shoppingcart
ORDER BY shoppingCartID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllStaffDetails` ()  NO SQL
BEGIN
SELECT *
FROM staff
ORDER BY StaffID,fName,lName,Course,email,PhoneNum, now(),now(),RegisteredUserID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllStudentDetails` ()  NO SQL
BEGIN
SELECT *
FROM students
ORDER BY ID,studentID,studentFName,studentLName,Course,DOB,Address,emailAddress,phoneNumber, now(),now();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewBookDetails` (IN `p_bookID` INT)  NO SQL
BEGIN

 SELECT BookID,
books.bookName,books.Price,books.Author,books.dateAdded,books.dateModified

 FROM books

 WHERE books.BookID = p_bookID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewCourseDetails` (IN `p_CourseID` INT)  NO SQL
BEGIN

 SELECT CourseID,
course.CourseName,course.CourseDesc,course.Department,course.DateAdded,course.DateModified,
course.studentID

 FROM course

 WHERE course.CourseID = p_CourseID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewEventDetails` (IN `p_eventID` INT)  NO SQL
BEGIN

 SELECT eventID,
events.eventName,events.location,events.venue,events.dateAdded,events.dateModified
 FROM events

 WHERE events.eventID = p_eventID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewExam` (IN `p_examID` INT)  NO SQL
BEGIN

 SELECT ExamID,
exams.examType,exams.Duration,exams.Price,exams.examCenter,exams.Level,
exams.Grade,exams.studentID
 FROM exams

 WHERE exams.ExamID = p_examID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewExamResults` (IN `p_examResultsID` INT)  NO SQL
BEGIN

 SELECT ExamResultsID,
examresults.Subject,examresults.CourseID,examresults.Year,examresults.result,examresults.studentID
,examresults.dateAdded,examresults.dateModified
 FROM examresults

 WHERE examresults.ExamResultsID = p_examResultsID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewGuestDetails` (IN `p_GuestID` INT)  NO SQL
BEGIN

 SELECT GuestID,
guest.FirstName, guest.LastName ,guest.Email,guest.DateAdded,guest.DateModified

 FROM guest

 WHERE guest.GuestID = p_GuestID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewMaintenanceREQ` (IN `p_requestID` INT)  NO SQL
BEGIN

SELECT MaintenancerqID,
maintenancerequest.RequestName,maintenancerequest.RequestDesc,maintenancerequest.DateAdded,
maintenancerequest.DateModified
 FROM maintenancerequest

 WHERE maintenancerequest.MaintenancerqID = p_requestID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewPurchase` (IN `p_purchaseID` INT)  NO SQL
BEGIN

 SELECT purchase_id,
purchase.GuestID,purchase.date_of_purchase

 FROM purchase

 WHERE purchase.purchase_id = p_purchaseID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewPurchaseDetails` (IN `p_purchaseDetID` INT)  NO SQL
BEGIN
SELECT purchase_detail_id,
purchase_details.purchase_id,purchase_details.BookID,purchase_details.GuestID,
purchase_details.RegisteredUserID,purchase_details.qty,purchase_details.cost
FROM purchase_details
WHERE purchase_details.purchase_detail_id = p_purchaseDetID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewRegistereduser` (IN `p_RegisteredUserID` INT)  NO SQL
BEGIN
SELECT RegisteredUserID,
registeredusers.firstName,registeredusers.lastName,registeredusers.email,
registeredusers.occupation,registeredusers.password,registeredusers.dateAdded
,registeredusers.dateModified
FROM registeredusers
WHERE registeredusers.RegisteredUserID =p_RegisteredUserID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewSalesReport` (IN `p_reportID` INT)  NO SQL
BEGIN
SELECT SalesReportID,
salesreport.MonthlyBookSales,salesreport.AnnualSales,salesreport.MonthlyExamSales,
salesreport.FullTimeCourseMS
FROM salesreport
WHERE salesreport.SalesReportID = p_reportID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewShoppingCart` (IN `p_ShoppingcartID` INT)  NO SQL
BEGIN
SELECT shoppingCartID,
shoppingcart.quantity,shoppingcart.price,shoppingcart.description,
shoppingcart.RegisteredUserID,shoppingcart.GuestID
FROM shoppingcart
WHERE shoppingcart.shoppingCartID = p_ShoppingcartID
ORDER BY shoppingCartID;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewStaffDetails` (IN `p_StaffID` INT)  NO SQL
BEGIN

 SELECT StaffID,
staff.fName, staff.lName ,staff.Course,staff.email,staff.PhoneNum,staff.RegisteredUserID,staff.DateAdded,staff.DateModified

 FROM staff

 WHERE staff.StaffID = p_StaffID;

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewStudentDetails` (IN `p_studentID` INT)  NO SQL
BEGIN

 SELECT studentID,
students.ID,students.studentFName,students.studentLName ,students.Address, students.emailAddress, students.phoneNumber,students.Course, students.DOB,students.dateAdded,students.dateModified

 FROM students

 WHERE students.studentID = p_studentID;

 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `fName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `lName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Address` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `emailAddress` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `dateModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `adminID`, `fName`, `lName`, `Address`, `emailAddress`, `DOB`, `dateAdded`, `dateModified`) VALUES
(3, 1, 'Ian', 'Hogan', '13 meadow road', 'k002131537@student.lit.ie', '2020-11-09', '2020-12-13', '2020-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `bookName` varchar(45) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Author` varchar(45) COLLATE utf8_bin NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(45) COLLATE utf8_bin NOT NULL,
  `CourseDesc` varchar(255) COLLATE utf8_bin NOT NULL,
  `Department` varchar(20) COLLATE utf8_bin NOT NULL,
  `DateAdded` date NOT NULL,
  `DateModified` date NOT NULL,
  `studentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `eventName` varchar(45) COLLATE utf8_bin NOT NULL,
  `location` varchar(45) COLLATE utf8_bin NOT NULL,
  `venue` varchar(255) COLLATE utf8_bin NOT NULL,
  `dateAdded` date NOT NULL,
  `dateModified` date NOT NULL,
  `GuestID` int(11) DEFAULT NULL,
  `registeredUsersID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `examresults`
--

CREATE TABLE `examresults` (
  `ExamResultsID` int(11) NOT NULL,
  `Subject` varchar(45) COLLATE utf8_bin NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Year` date NOT NULL,
  `result` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `dateAdded` date NOT NULL,
  `dateModified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ExamID` int(11) NOT NULL,
  `examType` varchar(45) COLLATE utf8_bin NOT NULL,
  `Duration` double NOT NULL,
  `Price` double NOT NULL,
  `examDate` date NOT NULL,
  `examCentre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Level` int(11) NOT NULL,
  `Grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `GuestID` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `FirstName` varchar(30) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `maintenancerequest`
--

CREATE TABLE `maintenancerequest` (
  `MaintenancerqID` int(11) NOT NULL,
  `RequestName` varchar(45) COLLATE utf8_bin NOT NULL,
  `RequestDesc` varchar(255) COLLATE utf8_bin NOT NULL,
  `DateAdded` date NOT NULL,
  `DateModified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `RegisteredUserID` int(11) NOT NULL,
  `firstName` varchar(45) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `occupation` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(55) COLLATE utf8_bin NOT NULL,
  `dateAdded` date NOT NULL,
  `dateModified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`RegisteredUserID`, `firstName`, `lastName`, `email`, `occupation`, `password`, `dateAdded`, `dateModified`) VALUES
(1, 'Stephen', 'Barry', 'k00236784@student.lit.ie', 'wefwdf', 'shop bv', '2021-01-04', '2021-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `salesreport`
--

CREATE TABLE `salesreport` (
  `SalesReportID` int(11) NOT NULL,
  `MonthlyBookSales` int(11) NOT NULL,
  `AnnualSales` int(11) NOT NULL,
  `MonthlyExamSales` int(11) NOT NULL,
  `FullTimeCourseMS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `shoppingCartID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(45) COLLATE utf8_bin NOT NULL,
  `RegisteredUserID` int(11) DEFAULT NULL,
  `GuestID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `fName` varchar(45) COLLATE utf8_bin NOT NULL,
  `lName` varchar(45) COLLATE utf8_bin NOT NULL,
  `Course` varchar(45) COLLATE utf8_bin NOT NULL,
  `emailAddress` varchar(45) COLLATE utf8_bin NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `DateAdded` date NOT NULL,
  `DateModified` date NOT NULL,
  `RegisteredUserID` int(11) DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `fName`, `lName`, `Course`, `emailAddress`, `PhoneNum`, `DateAdded`, `DateModified`, `RegisteredUserID`, `password`) VALUES
(2, 'alex', 'o', 'ISD', 'alex@gmail.com', 23232, '2021-01-01', '2021-01-01', 2, 'alex');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `studentFName` varchar(45) COLLATE utf8_bin NOT NULL,
  `studentLName` varchar(45) COLLATE utf8_bin NOT NULL,
  `Address` varchar(45) COLLATE utf8_bin NOT NULL,
  `emailAddress` varchar(250) COLLATE utf8_bin NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `Course` varchar(45) COLLATE utf8_bin NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentFName`, `studentLName`, `Address`, `emailAddress`, `phoneNumber`, `Course`, `DOB`, `password`) VALUES
(1, 'Stephen', 'Barry', '24 russell', 'stephen@gmail.com', 857736363, 'ISD', '2000-03-30', 'scuba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `GuestID` (`GuestID`),
  ADD KEY `registeredUsersID` (`registeredUsersID`);

--
-- Indexes for table `examresults`
--
ALTER TABLE `examresults`
  ADD PRIMARY KEY (`ExamResultsID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`GuestID`);

--
-- Indexes for table `maintenancerequest`
--
ALTER TABLE `maintenancerequest`
  ADD PRIMARY KEY (`MaintenancerqID`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`RegisteredUserID`);

--
-- Indexes for table `salesreport`
--
ALTER TABLE `salesreport`
  ADD PRIMARY KEY (`SalesReportID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`shoppingCartID`),
  ADD KEY `RegisteredUserID` (`RegisteredUserID`),
  ADD KEY `GuestID` (`GuestID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `RegisteredUserID` (`RegisteredUserID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examresults`
--
ALTER TABLE `examresults`
  MODIFY `ExamResultsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `ExamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `GuestID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenancerequest`
--
ALTER TABLE `maintenancerequest`
  MODIFY `MaintenancerqID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeredusers`
--
ALTER TABLE `registeredusers`
  MODIFY `RegisteredUserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salesreport`
--
ALTER TABLE `salesreport`
  MODIFY `SalesReportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `shoppingCartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 03:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynims`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `AddbatchTiming` (`Id` INT(11), `CenterName` VARCHAR(30), `Name` VARCHAR(30))  BEGIN
INSERT INTO batchtiming(Id,CenterName,Name) VALUES(Id,CenterName,Name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddCenter` (`ID` INT(11), `CityName` VARCHAR(30), `Name` VARCHAR(30))  BEGIN
INSERT INTO centers(ID,CityName,Name) VALUES(ID,CityName,Name);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddCity` (`Id` INT(11), `StateName` VARCHAR(11), `Name` VARCHAR(30))  BEGIN
INSERT INTO city(Id,StateName,Name) VALUES(Id,StateName,Name);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddPress` (`id` INT(11), `Title` VARCHAR(1000), `Date` VARCHAR(200), `Description` VARCHAR(1000))  BEGIN
INSERT INTO  tb_pressrelease(id,Title,Date,Description) values (id,Title,Date,Description);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddSliderimage` (`ID` INT(11), `SliderImage` LONGBLOB, `MainDescription` VARCHAR(2000), `ShortDescription` VARCHAR(2000), `OrderID` VARCHAR(30), `IsActive` VARCHAR(30))  BEGIN
INSERT INTO slider(ID,SliderImage,MainDescription,ShortDescription,OrderID,IsActive) VALUES (ID,SliderImage,MainDescription,ShortDescription,OrderID,IsActive);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddState` (`Id` INT(11), `Name` VARCHAR(30))  BEGIN
   INSERT INTO states(Id,Name) VALUES(Id,Name);
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addstudent` (IN `id` VARCHAR(50), IN `FirstName` VARCHAR(50), IN `MiddleName` VARCHAR(50), IN `Course` VARCHAR(50), IN `Class` VARCHAR(50), IN `Branch` VARCHAR(50), IN `Years` VARCHAR(50))  NO SQL
BEGIN
INSERT INTO  addstudent(id,FirstName,MiddleName,Course,Class,Branch,Years) VALUES (id,FirstName,MiddleName,Course,Class,Branch,Years);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AddSubject` (`Id` INT(11), `Subject` VARCHAR(100), `Course` VARCHAR(30), `Class` VARCHAR(30), `Branch` VARCHAR(30), `Fees` VARCHAR(30))  BEGIN
INSERT INTO subjects(Id,Subject,Course,Class,Branch,Fees) VALUES(Id,Subject,Course,Class,Branch,Fees);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertaddclass` (`cid` INT(11), `Name` VARCHAR(100), `Course` VARCHAR(50))  BEGIN
INSERT INTO class(cid,Name,Course) VALUES (cid,Name,Course);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertaddcoursetype` (`cid` INT(11), `Name` VARCHAR(50), `Course` VARCHAR(50))  BEGIN
INSERT INTO coursetype(cid,Name,Course) VALUES (cid,Name,Course);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertaddexampattern` (`cid` INT(11), `Name` VARCHAR(50), `Course` VARCHAR(50))  BEGIN
INSERT INTO exampattern(cid,Name,Course) VALUES (cid,Name,Course);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertborad` (IN `cid` INT(11), IN `cname` VARCHAR(50), IN `coursename` VARCHAR(50))  BEGIN
                  
                     INSERT INTO university (ID,Name,Boardname) VALUES (cid,cname,coursename);
                  
                  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertbranch` (IN `bid` INT(50), IN `course` VARCHAR(50), IN `class` VARCHAR(50), IN `branchname` VARCHAR(50))  BEGIN
INSERT INTO branch(BId,Course,Class,BranchName) VALUES (bid,course,class,branchname);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcontact` (`conid` VARCHAR(50), `uname` VARCHAR(50), `emailid` VARCHAR(100), `message` VARCHAR(1000))  BEGIN
insert into contactus(cid,uname,emailid,msg) VALUES (conid , uname , emailid , message);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcourse` (IN `id` INT(11), IN `name` VARCHAR(100))  BEGIN
   
    INSERT INTO course (id,name) VALUES (id,name);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertdesignation` (`cid` INT(11), `Name` VARCHAR(50), `Occupation` VARCHAR(50))  BEGIN
INSERT INTO designation(cid,Name,Occupation) VALUES (cid,Name,Occupation);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertemp` (IN `eid` INT(11), IN `ename` VARCHAR(100), IN `edu` VARCHAR(100), IN `sub` VARCHAR(100), IN `cno` VARCHAR(100), IN `pic` LONGBLOB, IN `add1` VARCHAR(100), IN `pay` VARCHAR(100))  BEGIN

  INSERT INTO employeemaster(id,ename,edu,sub,cno,pic,add1,payment) VALUES (eid,ename,edu,sub,cno,pic,add1,pay);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertevent` (IN `id` VARCHAR(50), IN `name` VARCHAR(100), IN `desc1` VARCHAR(500), IN `date1` VARCHAR(50), IN `time1` VARCHAR(50), IN `add1` VARCHAR(500), IN `pic` LONGBLOB)  BEGIN

INSERT INTO events1(id,name,desc1,date1,time1,add1,pic) VALUES (id,name,desc1,date1,time1,add1,pic);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertfaculty` (IN `fid` INT(11), IN `fname` VARCHAR(30), IN `eduction` VARCHAR(50), IN `cno` VARCHAR(50), IN `img` LONGBLOB, IN `add1` VARCHAR(150), IN `payment` VARCHAR(100))  BEGIN
  
INSERT INTO faculty (Id,Name,eduction,cno,image,add1,payment) VALUES (fid,fname,eduction,cno,img,add1,payment);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertfeedback` ()  BEGIN
					INSERT INTO feedback(FeedbackID, Name, course, Mobile, EmailId, Modifiedon, Remark) VALUES ('5', 'm', 'Msc.IT', '9970426383', 'thetechnoverse2017@gmail.com', '03/07/18', 'k');
				END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserthighdetalis` (`id` VARCHAR(50), `desc1` VARCHAR(500), `active` VARCHAR(50))  BEGIN
 
 INSERT INTO highlighter(id,desc1,active) VALUES (id,desc1,active);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertimg` (`id` INT(11), `img` LONGBLOB, `title` VARCHAR(50), `desc1` VARCHAR(500))  BEGIN
 
 INSERT INTO imgs (id,img,title,desc1) VALUES (id,img,title,desc1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertnews` (`Id` INT(11), `Title` VARCHAR(200), `Details` VARCHAR(4000), `date1` DATE)  BEGIN
INSERT INTO news(Id,Title,Details,date1) VALUES (Id,Title,Details,date1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertoccupation` (IN `id` INT(11), IN `Name` VARCHAR(100), IN `IsMother` VARCHAR(11))  BEGIN
INSERT INTO occupation(id,Name,IsMother) VALUES (id,Name,IsMother);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertPost` (`ID` INT(11), `Course` VARCHAR(30), `Class` VARCHAR(30), `Branch` VARCHAR(30), `Title` VARCHAR(200), `SubTitle` VARCHAR(200), `Description` VARCHAR(500), `PhotoPosts` LONGBLOB)  BEGIN
INSERT INTO posts(ID,Course,Class,Branch,Title,SubTitle,Description,PhotoPosts) VALUES (ID,Course,Class,Branch,Title,SubTitle,Description,PhotoPosts);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertqusim` (IN `qid` VARCHAR(20), IN `subject` VARCHAR(100), IN `question` VARCHAR(2000), IN `option1` VARCHAR(2000), IN `option2` VARCHAR(2000), IN `option3` VARCHAR(2000), IN `option4` VARCHAR(2000), IN `answer` VARCHAR(100))  BEGIN

INSERT INTO qsimple(qid,subject,question,option1,option2,option3,option4,answer) VALUES (qid,subject,question,option1,option2,option3,option4,answer);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreferencetype` (`cid` INT(11), `Name` VARCHAR(50))  BEGIN
INSERT INTO referencetype(cid,Name) VALUES (cid,Name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreg1` (IN `uid` VARCHAR(10), IN `pass` VARCHAR(50), IN `mno` VARCHAR(15), IN `emailid` VARCHAR(100), IN `image1` LONGBLOB, IN `role` VARCHAR(50))  BEGIN
INSERT INTO registration1 (uid,pass,mno,emailid,image1,role) VALUES (uid,pass,mno,emailid,image1,role);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreg2` (IN `uid` VARCHAR(10), IN `fname` VARCHAR(50), IN `mname` VARCHAR(50), IN `dob` VARCHAR(15), IN `smno` VARCHAR(15), IN `gender` VARCHAR(20), IN `bgroup` VARCHAR(20), IN `category` VARCHAR(20), IN `nationality` VARCHAR(20), IN `year1` VARCHAR(50))  BEGIN
INSERT INTO registration2(uid,fname,mname,dob,smno,gender,bgroup,category,nationality,year1) VALUES (uid,fname,mname,dob,smno,gender,bgroup,category,nationality,year1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreg31` (IN `uid` VARCHAR(10), IN `fathername` VARCHAR(50), IN `mothername` VARCHAR(50), IN `fmno` VARCHAR(15), IN `mno` VARCHAR(15), IN `femail` VARCHAR(100), IN `memail` VARCHAR(100), IN `moccu` VARCHAR(50), IN `foccu` VARCHAR(50), IN `fdesi` VARCHAR(100), IN `mdesi` VARCHAR(100), IN `aincome` VARCHAR(20), IN `ecno` VARCHAR(15), IN `add1` VARCHAR(100), IN `city` VARCHAR(20), IN `state` VARCHAR(20), IN `country` VARCHAR(20), IN `pcode` VARCHAR(20), IN `fsignature` VARCHAR(50), IN `msignature` VARCHAR(50), IN `b1name` VARCHAR(50), IN `b1age` VARCHAR(50), IN `b1edu` VARCHAR(50), IN `sis1name` VARCHAR(50), IN `sis1age` VARCHAR(50), IN `sis1edu` VARCHAR(50), IN `bro2name` VARCHAR(50), IN `bro2age` VARCHAR(50), IN `bro2edu` VARCHAR(50), IN `sis2name` VARCHAR(50), IN `sis2age` VARCHAR(50), IN `sis2edu` VARCHAR(50))  BEGIN

INSERT INTO registration3(uid,fathername,mothername,fmno,mno,femail,memail,moccu,foccu,fdesi,mdesi,aincome,ecno,add1,city,state,country,pcode,fsignature,msignature,b1name,b1age,b1edu,sis1name,sis1age,sis1edu,bro2name,bro2age,bro2edu,sis2name,sis2age,sis2edu)
VALUES (uid,fathername,mothername,fmno,mno,femail,memail,moccu,foccu,fdesi,mdesi,aincome,ecno,add1,city,state,country,pcode,fsignature,msignature,b1name,b1age,b1edu,sis1name,sis1age,sis1edu,bro2name,bro2age,bro2edu,sis2name,sis2age,sis2edu);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreg4` (IN `uid` VARCHAR(10), IN `exampattern` VARCHAR(50), IN `coursetype` VARCHAR(50), IN `studymaterial` VARCHAR(50), IN `coursename` VARCHAR(50), IN `class` VARCHAR(50), IN `subject` VARCHAR(50), IN `branch` VARCHAR(50), IN `school` VARCHAR(50), IN `city` VARCHAR(50), IN `branchtime` VARCHAR(50), IN `studycenter` VARCHAR(50), IN `board` VARCHAR(50), IN `year1` VARCHAR(10))  BEGIN

INSERT INTO registration4(uid,exampattern,coursetype,studymedium,coursename,class,subject,branch,school,city,branchtime,studycenter,board,year1) VALUES (uid,exampattern,coursetype,studymaterial,coursename,class,subject,branch,school,city,branchtime,studycenter,board,year1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertreg5` (IN `uid` VARCHAR(50), IN `lexam` VARCHAR(50), IN `lscl` VARCHAR(50), IN `lclass` VARCHAR(50), IN `eborad` VARCHAR(50), IN `lresult` VARCHAR(50), IN `attempt` VARCHAR(50), IN `maths` VARCHAR(50), IN `m1` VARCHAR(50), IN `m2` VARCHAR(50), IN `m3` VARCHAR(50), IN `science` VARCHAR(50), IN `english` VARCHAR(50), IN `xag` VARCHAR(50), IN `xpa` VARCHAR(50), IN `xiag` VARCHAR(50), IN `xipa` VARCHAR(50), IN `xiiag` VARCHAR(50), IN `xiipa` VARCHAR(50), IN `poag` VARCHAR(50), IN `popa` VARCHAR(50), IN `po2ag` VARCHAR(50), IN `po2pa` VARCHAR(50), IN `beag` VARCHAR(50), IN `bepa` VARCHAR(50), IN `txtex` VARCHAR(50), IN `txtreference` VARCHAR(50), IN `txtpersonname` VARCHAR(50), IN `txtrelative` VARCHAR(50))  BEGIN

INSERT INTO registration5(uid,lexam,lscl,lclass,eborad,lresult,attempt,maths,m1,m2,m3,science,english,xag,xpa,xiag,xipa,xiiag,xiipa,poag,popa,po2ag,po2pa,beag,bepa,txtex,txtreference,txtpersonname,txtrelative) VALUES(uid,lexam,lscl,lclass,eborad,lresult,attempt,maths,m1,m2,m3,science,english,xag,xpa,xiag,xipa,xiiag,xiipa,poag,popa,po2ag,po2pa,beag,bepa,txtex,txtreference,txtpersonname,txtrelative);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertresult` (`id` VARCHAR(50), `course` VARCHAR(50), `class` VARCHAR(50), `branch` VARCHAR(50), `clg` VARCHAR(500), `sub` VARCHAR(250), `yresult` VARCHAR(50), `sappeared` VARCHAR(550), `spass` VARCHAR(500))  BEGIN

INSERT INTO result(id,course,class,branch,clg,sub,yresult,sappeared,spass) VALUES (id,course,class,branch,clg,sub,yresult,sappeared,spass);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertrvideo` (`vid` INT(10), `url` VARCHAR(500), `title` VARCHAR(500), `speak` VARCHAR(50))  BEGIN

INSERT INTO ranker(vid,url,title,speak) VALUES (vid,url,title,speak);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertschool` (IN `sid` VARCHAR(50), IN `course` VARCHAR(50), IN `board` VARCHAR(50), IN `school` VARCHAR(50))  BEGIN
  
  INSERT INTO college(ID,course,board,school) VALUES (sid,course,board,school);


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertstudymaterial` (`cid` INT(11), `Name` VARCHAR(50))  BEGIN
INSERT INTO studymaterial (cid,Name) VALUES (cid,Name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertsubject` ()  BEGIN
    INSERT INTO facultysubjectdetails(course, class, branch, faculty, subject, date1) VALUES ('bsc', 'Sem 2', 'ssss', 'qwe', 'arnab', '2000-10-10');
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserttopper` (IN `id` VARCHAR(50), IN `name` VARCHAR(50), IN `course` VARCHAR(50), IN `branch` VARCHAR(50), IN `marks` VARCHAR(50), IN `rank` VARCHAR(50), IN `per` VARCHAR(50), IN `photo` LONGBLOB, IN `year1` VARCHAR(50), IN `totalmarks` VARCHAR(50), IN `class` VARCHAR(50), IN `subject` VARCHAR(50), IN `college` VARCHAR(500))  BEGIN 
   INSERT toppers (id,name,course,	branch,marks,rank,per,photo,year1,totalmarks,class,subject,college) VALUES(id,name,course,branch,marks,rank,per,photo,year1,totalmarks,class,subject,college);
   
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserttutor` (`tid` INT(50), `tname` VARCHAR(150), `speciality` VARCHAR(5000), `description` VARCHAR(10000), `tpic` LONGBLOB)  BEGIN 
  INSERT INTO tutor (tid,tname,speciality,description,tpic) VALUES (tid,tname,speciality,description,tpic);
  
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertuser` (IN `id` VARCHAR(50), IN `lid` VARCHAR(50), IN `pass` VARCHAR(50), IN `role` VARCHAR(20), IN `rid` VARCHAR(50))  BEGIN
 INSERT INTO user_master(id,lid,pass,role,rid) VALUES (id,lid,pass,role,rid);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertvideo` (`vid` VARCHAR(50), `vurl` VARCHAR(500), `vtitle` VARCHAR(50), `vdesc1` VARCHAR(500))  BEGIN

INSERT managevideo(id,vurl,title,desc1) values (vid,vurl,vtitle,vdesc1);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertweektest` (`id` VARCHAR(50), `syid` VARCHAR(50), `classname` VARCHAR(200), `tname` VARCHAR(200), `desc1` VARCHAR(200), `marks` VARCHAR(50), `centerid` VARCHAR(50), `courseid` VARCHAR(50), `sid` VARCHAR(50), `date1` VARCHAR(50), `timeid` VARCHAR(50), `bid` VARCHAR(50), `ttime` VARCHAR(50), `tcenter` VARCHAR(50), `cname` VARCHAR(50))  BEGIN
  INSERT into weeklytest (id,syid,classname,tname,desc1,marks,centerid,courseid,sid,date1,timeid,bid,ttime,tcenter,cname) VALUES (id,syid,classname,tname,desc1,marks,centerid,courseid,sid,date1,timeid,bid,ttime,tcenter,cname);
  
  END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertyears` (`cid` INT(11), `Year` VARCHAR(50))  BEGIN
INSERT INTO Years(cid,Year) VALUES (cid,Year);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ManageclassRoom` (`Id` INT(11), `state` VARCHAR(100), `city` VARCHAR(100), `center` VARCHAR(100), `classroom` VARCHAR(100))  BEGIN
INSERT INTO manageclassroom(Id,state,city,center,classroom) VALUES (Id,state,city,center,classroom);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ManagetimeTableal` (IN `id` INT(11), IN `Course` VARCHAR(500), IN `Class` VARCHAR(500), IN `Branch` VARCHAR(100), IN `Board` VARCHAR(500), IN `Center` VARCHAR(500), IN `Batchtiming` VARCHAR(500), IN `Day` VARCHAR(500), IN `ClassRoom` VARCHAR(500), IN `Subject` VARCHAR(500))  BEGIN
INSERT INTO  managetimetable(id,Cours,Class,Branch,Board,Center,Batchtiming,Day,ClassRoom,Subject) VALUES (id,Course,Class,Branch,Board,Center,Batchtiming,Day,ClassRoom,Subject);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `adrs` varchar(200) NOT NULL,
  `cont` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `adrs`, `cont`, `email`) VALUES
(0, 'Nims Educational Care, Shop No. 4,TradMark Complex  Near Gadge Baba Temple  Gadge Nagar Amravati.', '987456321', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` varchar(50) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Years` varchar(50) DEFAULT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `FirstName`, `MiddleName`, `Course`, `Class`, `Branch`, `Years`, `uid`) VALUES
(' ', 'hardik', 'patel', 'Msc.IT', 'Sem-1', 'Computer ', '2017', 3);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_dob` varchar(100) NOT NULL,
  `s_sub` varchar(100) NOT NULL,
  `s_num` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_res` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `s_name`, `s_dob`, `s_sub`, `s_num`, `s_phone`, `s_address`, `s_res`) VALUES
(17, 'test', '1998-12-31', 'BscIT', '5', '9874563210', 'Flat no.403 ,Samarth Nagar, samarth krupa building', 'C:fakepathabds.txt'),
(18, 'vellanews', '2018-06-09', 'bscIt', '6', '98765432', 'katraj,pune', 'E:hpDocumentsDocumentation.docx'),
(19, 'jhas', '2018-06-09', 'asf', '4', 'saf', 'ag', 'E:hpDocumentsDocumentation.docx'),
(20, 'hcgjv', '1998-04-11', 'BscIT', '6', '9874563210', 'Flat no.403 ,Samarth Nagar, samarth krupa building', 'C:fakepathyob-build-botnet-33729.pdf'),
(22, 'Abhishek', '0000-00-00', 'B.tech', '8 Years', '9856324170', 'Katraj,Pune', 'C:fakepathWeek 3 (1).docx'),
(23, 'a', '0000-00-00', 'a', 'a', 'a', 'a', 'C:fakepathWeek 3 (1).docx'),
(24, 'm', '06/30/2018', 'm', ',', '7', 'l', 'C:fakepathWeek 3.docx'),
(25, 'a', '08/27/2018', 'Bsc IT', '5 year', '985632147', 'ajbskvd', 'Week 5.docx'),
(26, 'abhishek', '08/27/2018', 'Bsc IT', '5 year', '123456789', 'india', 'graduate_course_list_2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `batchtiming`
--

CREATE TABLE `batchtiming` (
  `Id` int(11) NOT NULL,
  `CenterName` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchtiming`
--

INSERT INTO `batchtiming` (`Id`, `CenterName`, `Name`) VALUES
(0, 'Sea Point', '1PM-2PM');

-- --------------------------------------------------------

--
-- Table structure for table `birthdayreminder`
--

CREATE TABLE `birthdayreminder` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `SMSStatus` bit(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BId` int(50) NOT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `BranchName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BId`, `Course`, `Class`, `BranchName`) VALUES
(0, 'Msc.IT', 'Sem-1', 'Computer '),
(1, 'Msc.IT', 'Sem-1', 'Animation'),
(2, 'Bsc.IT', 'Sem-1', 'Computer'),
(3, 'Bsc.IT', 'Sem-1', 'Animation'),
(4, 'B.Tech', 'Sem-1', 'C.S'),
(5, 'B.Tech', 'Sem-2', 'Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `J_func` varchar(100) NOT NULL,
  `J_role` varchar(100) NOT NULL,
  `J_roleId` varchar(100) NOT NULL,
  `J_skills` varchar(100) NOT NULL,
  `J_exp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `J_func`, `J_role`, `J_roleId`, `J_skills`, `J_exp`) VALUES
(3, 'IT INFRASTRUCTURE SERVICES', 'Developer', '12356', 'Tera Data', 'Must have 3+ years'),
(7, 'CEO', 'xyz', '45', 'Management', '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `ID` int(11) NOT NULL,
  `CityName` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`ID`, `CityName`, `Name`) VALUES
(0, 'kolkata', 'Sea Point'),
(1, 'Pune', 'Katraj'),
(2, 'Pune', 'Ambegaon'),
(3, 'Pune', 'Tilkak Nagar'),
(4, 'Mumbai', 'Bandra'),
(5, 'Mumbai', 'Andheri');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Id`, `StateName`, `Name`) VALUES
(4, 'West Bengal', 'kolkata'),
(5, 'West Bengal', 'Howrah'),
(6, 'Maharashtra', 'Nashik'),
(7, 'Maharashtra', 'Pune'),
(8, 'Maharashtra', 'Mumbai'),
(9, 'Maharashtra', 'Kolhapur'),
(10, 'Maharashtra', 'Badlapur');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `Name`, `Course`) VALUES
(0, 'Sem-1', 'Msc.IT'),
(1, 'Sem-2', 'Msc.IT'),
(2, 'Sem-3', 'Msc.IT'),
(3, 'Sem-4', 'Msc.IT'),
(4, 'Sem-1', 'Bsc.IT'),
(5, 'Sem-2', 'Bsc.IT'),
(6, 'Sem-3', 'Bsc.IT'),
(7, 'Sem-4', 'Bsc.IT'),
(8, 'Sem-1', 'B.Tech'),
(9, 'Sem-2', 'B.Tech'),
(10, 'Sem-3', 'B.Tech'),
(11, 'Sem-4', 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `ID` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`ID`, `course`, `board`, `school`) VALUES
(0, 'Msc.IT', 'CBCS Board', 'Bharati Vidyapeeth'),
(1, 'Msc.IT', 'Amravati University', 'Amravati University'),
(2, 'Bsc.IT', 'CBCS Board', 'Bharati Vidyapeeth'),
(3, 'B.Tech', 'Pune University', 'Bharati Vidyapeeth'),
(4, 'B.Tech', 'VIT', 'Vellore Insitute');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(500) NOT NULL,
  `CompanyShortName` varchar(100) NOT NULL,
  `DirectorName` varchar(100) NOT NULL,
  `Address1` varchar(200) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `MobileNumber` varchar(20) NOT NULL,
  `FaxNumber` varchar(20) NOT NULL,
  `LandlineNumber` varchar(20) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `CompanyLogo` varchar(100) NOT NULL,
  `DirectorPhoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `competativesubjects`
--

CREATE TABLE `competativesubjects` (
  `Id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `FacultyID` int(11) NOT NULL,
  `Fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `competetivecourse`
--

CREATE TABLE `competetivecourse` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `uname`, `emailid`, `msg`) VALUES
('', 'abhishek', 'ab@gmail.com', 'abhishek kumar '),
('0', 'asd', 'asd@gmail.com', 'hello'),
('1', 's', 's@gmail.com', 'ssss'),
('2', 'asd', 'asd2@gmail.com', 'asd'),
('3', 'asd', '@gmail.com', 'SADFDGF');

-- --------------------------------------------------------

--
-- Table structure for table `councel`
--

CREATE TABLE `councel` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `doc` varchar(100) NOT NULL,
  `cot` time NOT NULL,
  `mode` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `councel`
--

INSERT INTO `councel` (`id`, `name`, `mobile`, `dob`, `address`, `email`, `doc`, `cot`, `mode`, `message`) VALUES
(1, 'a', '4', '11072', 'a', 'a@g.com', '1998-07-11', '12:00:00', 'option1', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Name`) VALUES
(0, 'Msc.IT'),
(1, 'Bsc.IT'),
(2, 'B.Tech'),
(3, 'M.Tech'),
(4, 'B.B.A'),
(5, 'M.B.A');

-- --------------------------------------------------------

--
-- Table structure for table `coursetype`
--

CREATE TABLE `coursetype` (
  `cid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `c_durt` varchar(100) NOT NULL,
  `c_time` varchar(100) NOT NULL,
  `c_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursetype`
--

INSERT INTO `coursetype` (`cid`, `Name`, `Course`, `c_durt`, `c_time`, `c_desc`) VALUES
(9, '520', 'mscit', 'a', 'a', 'a'),
(10, '5000', 'Msc.IT', '3 Weeks', '4 hours', 'anjimk humanr is ran duhuncjokn sabhiodhroj oijkjfgoilqwjobsnfi kibdsnoi znxconjs don soidhfs xbvsnisn vlmni.n;jbkFoBqfnobv osbqoirOIf  qjbjio ijbdsf joonon');

-- --------------------------------------------------------

--
-- Table structure for table `cstudent`
--

CREATE TABLE `cstudent` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `YearOfAdmission` varchar(4) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `IsExCandidate` bit(30) NOT NULL,
  `FatherOccupation` varchar(50) NOT NULL,
  `FatherMobile` varchar(15) NOT NULL,
  `PreferredCenterId` int(11) NOT NULL,
  `PreferredBatchTimingId` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ReferenceTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudentcollegedetails`
--

CREATE TABLE `cstudentcollegedetails` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `StudyingYearId` int(11) NOT NULL,
  `CollegeName` varchar(100) NOT NULL,
  `LastExamAppeared` varchar(15) NOT NULL,
  `YearOfExamAppeared` varchar(4) NOT NULL,
  `IsPass` bit(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudentmarkdetails`
--

CREATE TABLE `cstudentmarkdetails` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SSCPercentage` smallint(6) NOT NULL,
  `HSCPercentage` smallint(6) NOT NULL,
  `UGPercentage` smallint(6) NOT NULL,
  `PGPercentage` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudentofficedetails`
--

CREATE TABLE `cstudentofficedetails` (
  `StudentId` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL,
  `BatchTimingID` int(11) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `IsApproved` bit(30) NOT NULL,
  `TotalFees` int(11) NOT NULL,
  `FeesPaid` int(11) NOT NULL,
  `DueDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudentstyudyingyear`
--

CREATE TABLE `cstudentstyudyingyear` (
  `StudentID` int(11) NOT NULL,
  `StudyingYearID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudentsubjectsenroll`
--

CREATE TABLE `cstudentsubjectsenroll` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `FeesPaid` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `ReceiptNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cstudyingyear`
--

CREATE TABLE `cstudyingyear` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demotable`
--

CREATE TABLE `demotable` (
  `Id` int(11) NOT NULL,
  `que` longblob NOT NULL,
  `opt1` longblob NOT NULL,
  `opt2` longblob NOT NULL,
  `opt3` longblob NOT NULL,
  `opt4` longblob NOT NULL,
  `ans` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `cid` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`cid`, `Name`, `Occupation`) VALUES
(2, 'arnab2', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `id` int(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `edu` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `pic` longblob NOT NULL,
  `add1` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_phone` varchar(100) NOT NULL,
  `p_query` varchar(100) NOT NULL,
  `p_message` varchar(500) NOT NULL,
  `p_democlass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `p_name`, `p_email`, `p_phone`, `p_query`, `p_message`, `p_democlass`) VALUES
(1, 'test', 'test@gmail.com', '9874563210', '', 'ASDFG', ''),
(2, 'abhishek', 'abhishekvirat0@gmail.com', '123', '', 'nn', ''),
(3, 'abhishek', 'abhishekvirat0@gmail.com', '123', '', 'nn', ''),
(4, 'abhishek', 'test@gmail.com', '9874563210', '', 'nn', ''),
(5, 'abhishek', 'test@gmail.com', '9874563210', '', 'nn', ''),
(6, 'test', 'test@gmail.com', '1234567890', 'Autocad', 'asd', 'Demo class needed'),
(7, 'test', 'test@gmail.com', '9874563210', 'Nx CAD', 'asdf', 'Demo class needed'),
(8, 'aa', 'test@gmail.com', '9874563210', 'PHP', 'asdfghjk', ''),
(9, 'test', 'test@gmail.com', '9874563210', 'PHP', 'sdf', ''),
(10, 'test', 'traviconn0@gmail.com', '1234567890', 'Java', 'asdf', 'Demo class needed'),
(11, 'a', 'a@gmail.com', '9856324170', 'PHP', 'Hello', 'not needed');

-- --------------------------------------------------------

--
-- Table structure for table `enrollmentfom`
--

CREATE TABLE `enrollmentfom` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events1`
--

CREATE TABLE `events1` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `desc1` varchar(500) DEFAULT NULL,
  `date1` varchar(50) DEFAULT NULL,
  `time1` varchar(50) DEFAULT NULL,
  `add1` varchar(500) DEFAULT NULL,
  `pic` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events1`
--

INSERT INTO `events1` (`id`, `name`, `desc1`, `date1`, `time1`, `add1`, `pic`) VALUES
(' ', 'Admission Fair Spring 2018', 'JAN', '18', '01:45', 'Newyork city', 0x6267382e6a7067),
('1 ', 'Workshop Online Marketing', 'FEB', '20', '05:22', 'Manhattan,US', 0x626731322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `exampattern`
--

CREATE TABLE `exampattern` (
  `cid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exampattern`
--

INSERT INTO `exampattern` (`cid`, `Name`, `Course`) VALUES
(0, 'Semester', 'Msc.IT'),
(1, 'Semester', 'Bsc.IT'),
(2, 'Yearly', 'Bsc.IT'),
(3, 'Semester', 'B.Tech'),
(4, 'Yearly', 'B.Tech'),
(5, 'Yearly', 'Msc.IT');

-- --------------------------------------------------------

--
-- Table structure for table `exampatternx`
--

CREATE TABLE `exampatternx` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `eduction` varchar(50) DEFAULT NULL,
  `cno` varchar(12) DEFAULT NULL,
  `image` longblob,
  `add1` varchar(150) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Name`, `eduction`, `cno`, `image`, `add1`, `payment`) VALUES
(0, 'Hardik Pandey', 'B.ed', '985632417', 0x616464313630302e706e67, 'Kolkata,West Bengal', '5000'),
(1, 'Rahul Dravid', 'M.ed', '8523697410', 0x426573742d50697a7a612d4e6561722d4d652d4e6f772e6a7067, 'Pune,Katraj', '82000');

-- --------------------------------------------------------

--
-- Table structure for table `facultysubjectdetails`
--

CREATE TABLE `facultysubjectdetails` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultysubjectdetails`
--

INSERT INTO `facultysubjectdetails` (`id`, `course`, `class`, `branch`, `faculty`, `subject`, `date1`) VALUES
(0, 'bsc', 'Sem 2', 'ssss', 'qwe', 'arnab', '2000-10-10'),
(2, 'hello', 'Sem1', 'Computer', 'qwe', 'Banking', '2017-07-27'),
(3, 'hello', 'Sem1', 'Computer', 'qwe', 'Banking', '2017-07-26'),
(4, 'ddd', 'Sem 2', 'Computer', 'qwe', 'Banking', '2017-07-20'),
(5, 'hello', 'Sem 2', 'Computer', 'qwe', 'Banking', '2017-07-27'),
(6, 'hello', 'Sem 2', 'Computer', 'arnab', 'Banking', '2017-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Details` mediumtext,
  `date1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `Title`, `Details`, `date1`) VALUES
(0, 'What is the profile of the faculties that will train us?', 'All our faculties are Engineers from reputed colleges with years of industrial experience.', '2018-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `Id` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `Fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `FeedbackID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Modifiedon` datetime NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `FeedbackID`, `Name`, `course`, `Mobile`, `EmailId`, `Modifiedon`, `Remark`) VALUES
(0, 5, 'm', 'Msc.IT', '9970426383', 'thetechnoverse2017@gmail.com', '2003-07-18 00:00:00', 'k'),
(1, 0, 'hello', 'Hardik', '7894561230', 'arnabkdebnath@gmail.com', '2028-06-17 00:00:00', 'ccc'),
(2, 1, 'sss', 'Hardik', 'ssss', 'ssss', '2028-06-17 00:00:00', 'ssss'),
(3, 2, 'Student5', 'Hardik', '7894561230', 'arnabkdebnath@gmail.com', '2028-06-17 00:00:00', 'sss'),
(4, 3, 'Hardik', 'Hardik', '7894561230', 'arnab3111@gmail.com', '2028-06-17 00:00:00', '7894561230'),
(5, 4, 'feedback', 'Hardik', 'feedback', 'feedback', '2028-06-17 00:00:00', 'feedback');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackcategory`
--

CREATE TABLE `feedbackcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `ID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feesreminder`
--

CREATE TABLE `feesreminder` (
  `ID` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `SMSStatus` bit(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees_transaction`
--

CREATE TABLE `fees_transaction` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `TransactionID` varchar(50) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `TotalDiscount` int(11) NOT NULL,
  `ModeOfPayment` varchar(10) NOT NULL,
  `PaymentNumber` varchar(100) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CashNumbers` varchar(1000) NOT NULL,
  `FeesTakenBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `Photo` varchar(800) NOT NULL,
  `Video` varchar(800) NOT NULL,
  `IsPhoto` bit(30) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `highlighter`
--

CREATE TABLE `highlighter` (
  `id` varchar(50) NOT NULL,
  `desc1` varchar(500) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highlighter`
--

INSERT INTO `highlighter` (`id`, `desc1`, `active`) VALUES
(' 1', 'Congrats', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `desc1` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `img`, `title`, `desc1`) VALUES
(0, 'film-camera-alt-512.png', 'sdfg', 'sdfg'),
(1, 'ic_travel.png', 'asdfg', 'asdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `manageclassroom`
--

CREATE TABLE `manageclassroom` (
  `Id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `center` varchar(100) NOT NULL,
  `classroom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manageclassroom`
--

INSERT INTO `manageclassroom` (`Id`, `state`, `city`, `center`, `classroom`) VALUES
(1, 'maharastra', 'mumbai', 'camp', 'class-8'),
(2, ' Maharashtra', 'mumbai', 'Rajpeth', 'class-9'),
(3, 'Rajasthan', 'bhilwara', 'Rajpeth', '1st'),
(4, 'Maharashtra', 'Pune', 'Katraj', 'Technosoft ');

-- --------------------------------------------------------

--
-- Table structure for table `managetimetable`
--

CREATE TABLE `managetimetable` (
  `id` int(11) NOT NULL,
  `Course` varchar(500) NOT NULL,
  `Class` varchar(500) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Board` varchar(500) NOT NULL,
  `Center` varchar(500) NOT NULL,
  `Batchtiming` varchar(500) NOT NULL,
  `Day` varchar(500) NOT NULL,
  `ClassRoom` varchar(500) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managetimetable`
--

INSERT INTO `managetimetable` (`id`, `Course`, `Class`, `Branch`, `Board`, `Center`, `Batchtiming`, `Day`, `ClassRoom`, `Subject`) VALUES
(0, 'Msc.IT', 'Sem-2', '', 'Msc.IT', 'Katraj', '1PM-2PM', 'Tomarrow', '', 'Fundamentals'),
(1, 'Bsc.IT', 'Sem-3', '', 'Msc.IT', 'Ambegaon', '1PM-2PM', 'Tomarrow', '', 'Fundamentals'),
(2, 'Msc.IT', 'Sem-2', '', 'Msc.IT', 'Katraj', '1PM-2PM', 'Tomarrow', 'class-8', 'Fundamentals');

-- --------------------------------------------------------

--
-- Table structure for table `managetimetables`
--

CREATE TABLE `managetimetables` (
  `id` int(11) NOT NULL,
  `Day` varchar(500) NOT NULL,
  `BranchID` int(11) NOT NULL,
  `ClassRoomID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `BoardID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `CenterID` int(11) NOT NULL,
  `BatchtimingID` int(11) NOT NULL,
  `bdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `managevideo`
--

CREATE TABLE `managevideo` (
  `id` varchar(50) NOT NULL,
  `vurl` varchar(500) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `desc1` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managevideo`
--

INSERT INTO `managevideo` (`id`, `vurl`, `title`, `desc1`) VALUES
(' 1', 'p', 'p', 'p'),
('2 ', 'p', 'p', 'p'),
('3 ', 'b', 'b', 'b'),
('4 ', 's', 's', 's'),
('5 ', 'a', 'a', 'a'),
('6 ', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `marksobtained`
--

CREATE TABLE `marksobtained` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `college` varchar(100) NOT NULL,
  `subjectnm` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `yearr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Details` varchar(4000) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `name1` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Details`, `date1`, `name1`, `img`) VALUES
(3, 'ABhise', 'kumar', '2018-06-26', 'a', ''),
(4, 'Abhishek Kumar', ' is xyz is boy and he can do all his work and can help others with the help of people and help the others to recover to the manali trace awhoch was held i', '2018-06-27', 'Arjun nair', ''),
(5, 'abhish', 'vkx KJ', '2018-06-30', 'SDV L', '');

-- --------------------------------------------------------

--
-- Table structure for table `nimslibrary`
--

CREATE TABLE `nimslibrary` (
  `Sr_No` int(11) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `BookAuthor` varchar(50) NOT NULL,
  `Publications` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `IssuedType` varchar(10) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `StudentClass` varchar(50) NOT NULL,
  `IssuedDate` varchar(50) NOT NULL,
  `SubmitDate` varchar(50) NOT NULL,
  `IsSubmit` bit(30) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nimstransaction`
--

CREATE TABLE `nimstransaction` (
  `TranNo` int(11) NOT NULL,
  `DebitAmount` int(11) NOT NULL,
  `PaidAmount` int(11) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `PaymentMode` int(11) NOT NULL,
  `DebitedName` varchar(50) NOT NULL,
  `ReceivedName` varchar(50) NOT NULL,
  `Categeory` int(11) NOT NULL,
  `PaymentBy` int(11) NOT NULL,
  `TranDate` varchar(50) NOT NULL,
  `ChqNo` int(11) NOT NULL,
  `TranImage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nimsvisitors`
--

CREATE TABLE `nimsvisitors` (
  `Sr_No` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `VisitDate` varchar(50) NOT NULL,
  `VisitTime` varchar(50) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `IsMother` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `Name`, `IsMother`) VALUES
(3, 'pinal', 'checked'),
(5, 'tinku', 'checked'),
(6, 'dilip', 'checked'),
(7, 'hello', 'checked'),
(8, 'asd', 'not checked'),
(9, 'sss', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `onlineexam`
--

CREATE TABLE `onlineexam` (
  `ID` int(11) NOT NULL,
  `Que` varchar(4000) NOT NULL,
  `Opt1` varchar(4000) NOT NULL,
  `Opt2` varchar(4000) NOT NULL,
  `Opt3` varchar(4000) NOT NULL,
  `Opt4` varchar(4000) NOT NULL,
  `Ans` varchar(4000) NOT NULL,
  `Sub` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onlinetestmark`
--

CREATE TABLE `onlinetestmark` (
  `ID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `tlevel` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `timee` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `otpno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentadmin`
--

CREATE TABLE `paymentadmin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `SubTitle` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `PhotoPosts` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `Course`, `Class`, `Branch`, `Title`, `SubTitle`, `Description`, `PhotoPosts`) VALUES
(3, 'Msc.IT', 'Sem-1', 'Computer ', 'New Course', 'hello', 'Hello Freinds chai pee loo.', 0x616464313630302e706e67),
(4, 'Bsc.IT', 'Sem-4', 'Computer ', 'Hello World', 'Welcome', 'Hello this is Abhi and I have done this.', 0x312e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `qsimple`
--

CREATE TABLE `qsimple` (
  `qid` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `option1` varchar(2000) NOT NULL,
  `option2` varchar(2000) NOT NULL,
  `option3` varchar(2000) NOT NULL,
  `option4` varchar(2000) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qsimple`
--

INSERT INTO `qsimple` (`qid`, `subject`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
('1 ', '1', '2', '3', '4', '5', '6', 'option1');

-- --------------------------------------------------------

--
-- Table structure for table `ranker`
--

CREATE TABLE `ranker` (
  `vid` int(10) NOT NULL,
  `url` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `speak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranker`
--

INSERT INTO `ranker` (`vid`, `url`, `title`, `speak`) VALUES
(2, 'https://www.youtube.com/embed/vTgMltQBLWo', 'geeky', 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `ranker_expert_speak`
--

CREATE TABLE `ranker_expert_speak` (
  `videoid` int(11) NOT NULL,
  `videourl` varchar(300) NOT NULL,
  `videotitle` varchar(150) NOT NULL,
  `isranker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referencetype`
--

CREATE TABLE `referencetype` (
  `cid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referencetype`
--

INSERT INTO `referencetype` (`cid`, `Name`) VALUES
(1, 'net'),
(2, 'network');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `uid` int(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `image1` longblob NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`uid`, `pass`, `mno`, `emailid`, `image1`, `role`) VALUES
(1, '123', '9913370001', 'a', 0x61646d696e70726f647563742e706e67, 'admin'),
(2, '123', '9046148131', 'arnab@gmail.com', 0x626c6f672e6a7067, 'parent'),
(3, 's', '8141857824', 'h@gmail.com', 0x457869742e6a7067, 'student'),
(4, '5236', '8563201490', 'h@gmail.com', 0x312e706e67, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `registration2`
--

CREATE TABLE `registration2` (
  `uid` int(200) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `smno` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `year1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration2`
--

INSERT INTO `registration2` (`uid`, `fname`, `mname`, `dob`, `smno`, `gender`, `bgroup`, `category`, `nationality`, `year1`) VALUES
(1, 'Admin', '', '01-01', '', 'Gender', 'Select Blood Group', 'Select Category', 'Select Category', '2018'),
(3, 'hardik', 'patel', '28-07', '8141857824', 'Male', 'A+', 'GEN', 'Indian', '1995'),
(5, 'Rahul', 'chand', '15-11', '13245678', 'Male', 'O-', 'GEN', 'Indian', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `registration3`
--

CREATE TABLE `registration3` (
  `uid` int(200) NOT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `mothername` varchar(50) DEFAULT NULL,
  `fmno` varchar(15) DEFAULT NULL,
  `mno` varchar(15) DEFAULT NULL,
  `femail` varchar(100) DEFAULT NULL,
  `memail` varchar(100) DEFAULT NULL,
  `moccu` varchar(50) DEFAULT NULL,
  `foccu` varchar(50) DEFAULT NULL,
  `fdesi` varchar(100) DEFAULT NULL,
  `mdesi` varchar(100) DEFAULT NULL,
  `aincome` varchar(20) DEFAULT NULL,
  `ecno` varchar(15) DEFAULT NULL,
  `add1` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pcode` varchar(20) DEFAULT NULL,
  `fsignature` varchar(50) DEFAULT NULL,
  `msignature` varchar(50) DEFAULT NULL,
  `b1name` varchar(50) DEFAULT NULL,
  `b1age` varchar(50) DEFAULT NULL,
  `b1edu` varchar(50) DEFAULT NULL,
  `sis1name` varchar(50) DEFAULT NULL,
  `sis1age` varchar(50) DEFAULT NULL,
  `sis1edu` varchar(50) DEFAULT NULL,
  `bro2name` varchar(50) DEFAULT NULL,
  `bro2age` varchar(50) DEFAULT NULL,
  `bro2edu` varchar(50) DEFAULT NULL,
  `sis2name` varchar(50) DEFAULT NULL,
  `sis2age` varchar(50) DEFAULT NULL,
  `sis2edu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration4`
--

CREATE TABLE `registration4` (
  `uid` int(200) NOT NULL,
  `exampattern` varchar(50) DEFAULT NULL,
  `coursetype` varchar(50) DEFAULT NULL,
  `studymedium` varchar(50) DEFAULT NULL,
  `coursename` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `branchtime` varchar(50) DEFAULT NULL,
  `studycenter` varchar(50) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `year1` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration5`
--

CREATE TABLE `registration5` (
  `uid` int(200) NOT NULL,
  `lexam` varchar(50) NOT NULL,
  `lscl` varchar(50) NOT NULL,
  `lclass` varchar(50) NOT NULL,
  `eborad` varchar(50) NOT NULL,
  `lresult` varchar(50) NOT NULL,
  `attempt` varchar(50) NOT NULL,
  `maths` varchar(50) NOT NULL,
  `m1` varchar(50) NOT NULL,
  `m2` varchar(50) NOT NULL,
  `m3` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL,
  `xag` varchar(50) NOT NULL,
  `xpa` varchar(50) NOT NULL,
  `xiag` varchar(50) NOT NULL,
  `xipa` varchar(50) NOT NULL,
  `xiiag` varchar(50) NOT NULL,
  `xiipa` varchar(50) NOT NULL,
  `poag` varchar(50) NOT NULL,
  `popa` varchar(50) NOT NULL,
  `po2ag` varchar(50) NOT NULL,
  `po2pa` varchar(50) NOT NULL,
  `beag` varchar(50) NOT NULL,
  `bepa` varchar(50) NOT NULL,
  `txtex` varchar(50) NOT NULL,
  `txtreference` varchar(50) NOT NULL,
  `txtpersonname` varchar(50) NOT NULL,
  `txtrelative` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(50) NOT NULL,
  `course` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `clg` varchar(500) DEFAULT NULL,
  `sub` varchar(250) DEFAULT NULL,
  `yresult` varchar(50) DEFAULT NULL,
  `sappeared` varchar(550) DEFAULT NULL,
  `spass` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `course`, `class`, `branch`, `clg`, `sub`, `yresult`, `sappeared`, `spass`) VALUES
(1, 'MSc IT', 'Sem 2', 'Computer', '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `SliderImage` longblob NOT NULL,
  `MainDescription` varchar(2000) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `OrderID` varchar(30) NOT NULL,
  `IsActive` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `SliderImage`, `MainDescription`, `ShortDescription`, `OrderID`, `IsActive`) VALUES
(0, 0x6267312e6a7067, 'My Nims', 'My Nims', ' ', 'not checked'),
(1, 0x6267322e6a7067, 'My Nims2', 'My Nims2', '1 ', 'not checked'),
(2, 0x6267332e6a7067, 'My Nims3', 'My Nims3', '2 ', 'not checked');

-- --------------------------------------------------------

--
-- Table structure for table `sms_dtls`
--

CREATE TABLE `sms_dtls` (
  `sms_id` int(11) NOT NULL,
  `sms_mobile` varchar(100) DEFAULT NULL,
  `sms_nm` varchar(200) DEFAULT NULL,
  `sms_msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_dtls`
--

INSERT INTO `sms_dtls` (`sms_id`, `sms_mobile`, `sms_nm`, `sms_msg`) VALUES
(0, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(18, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(19, '919046148131', '1', 'test'),
(20, '919046148131', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(21, '919046148131', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(22, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(23, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(24, '917908299700', '2', 'Nimslite (StudentName), SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(25, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(26, '919913370001', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(27, '919913370001', '2', 'test'),
(28, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(29, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(30, '919913370001', '1', 'test'),
(31, '919913370001', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(32, '919913370001', '2', 'Nimslite (variable),your Nims Class (Variable) Shift To (Variable).'),
(33, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(34, '919046148131', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(35, '917908299700,9046148131', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(36, '919913370001,7016235985', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(37, '919046148131', '48', 'Dear Nimslite, you were absent for test on (variable) held on (variable). Clarify with reason to the branch head.'),
(38, '919046148131', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(39, '919913370001', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(40, '917908299700', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(41, '919913370001', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(42, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(43, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(44, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(45, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(46, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(47, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(48, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(49, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(50, '918401384830', 'Birthday_Reminder', 'Dear Nimslite <br /><b>Notice</b>:  Undefined variable: nm in <b>C:\\xampp\\htdocs\\mynims\\account\\admin\\dashboard.php</b> on line <b>106</b><br />, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(51, '918401384830', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(52, '918401384830', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(53, '918141857824', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.');

-- --------------------------------------------------------

--
-- Table structure for table `sms_template`
--

CREATE TABLE `sms_template` (
  `template_id` int(11) NOT NULL,
  `template_nm` varchar(200) DEFAULT NULL,
  `template_msg` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_template`
--

INSERT INTO `sms_template` (`template_id`, `template_nm`, `template_msg`) VALUES
(1, 'For Syllabus Completed Template', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(2, 'For SMS Facility', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(5, 'Shift Class', 'Dear Parents,your Child Nims Class (Variable) Shift To (Variable)'),
(6, 'Class Shift For Students', 'Nimslite (variable),your Nims Class (Variable) Shift To (Variable).'),
(7, 'Test Series Starts', 'Dear Parents,Nims started free test series for all subjects on (Variable). Be prepare them.'),
(8, 'OTPPrizeDist', 'Dear parent,We are pleased to invite you for the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(9, 'OTPPrizeDistforStudent', 'Dear Nimslite,We are pleased to invite you for the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(10, 'Which unit h/w given', 'Dear Nimslite, you have been assigned h/w on unit (variable). Do complete it in given deadline.'),
(11, 'Which unit h/w given(Parents)', 'Dear parents, your child has been assigned h/w on unit (variable). Ask them to finish in given deadline.'),
(12, 'D.P.P. Stud', 'Dear Nimslite, you have been assigned d.p.p. based on unit (variable). Do complete it in given deadline.'),
(13, 'D.P.P. Parents', 'Dear parents, your child has been assigned d.p.p. based on unit (variable). Ask them to finish in given deadline.'),
(14, 'Class work Stud', 'Dear Nimslite, you have been assigned class-work based on unit (variable). Do complete it in given deadline.'),
(15, 'Class work Parents', 'Dear parents, your child has been assigned class-work based on unit (variable). Ask them to finish in given deadline.'),
(16, 'H/w not completed Parents', 'Dear parents, your child has not completed h/w based on unit (variable). Kindly look after this'),
(17, 'Monthly report Stud', 'Dear Nimslite, your monthly attendance report has been generated. You can view detailed report by logging in on www.mynims.org'),
(45, 'Monthly report Parents', 'Dear parents, your child\'s monthly attendance report have been generated. You can view detailed report by logging in on www.mynims.org'),
(46, 'Test schedule', 'Dear Nimslite, your test on (variable) is held on (variable) between (variable). Be prepared for the same.'),
(47, 'Test schedule Parents', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(48, 'Test not attended Stud', 'Dear Nimslite, you were absent for test on (variable) held on (variable). Clarify with reason to the branch head.'),
(49, 'Test report Stud', 'Dear Nimslite, your monthly test report has been generated. You can view detailed report by logging in on www.mynims.org'),
(50, 'Test not attended Parents', 'Dear parents, your child has not attended test on (variable) held on (variable). Clarify with reason to the branch head.'),
(51, 'Test report Parents', 'Dear parents, your child\'s monthly test report has been generated. You can view detailed report by logging in on www.mynims.org'),
(52, 'Test series Stud', 'Dear Nimslite, Nim\'s have started free test series for all subjects on (Variable). Be prepared for the same.'),
(53, 'Test series Parents', 'Dear Parents, Nim\'s have started free test series for all subjects on (Variable). Make him/her prepare.'),
(54, 'Batch timing Stud', 'Dear Nimslite, your batch timing for the course (variable) is (variable). We will need daily presence for an effective result.'),
(55, 'Batch timing Parents', 'Dear parents, your child\'s batch timing for the course (variable) is (variable). We will need daily presence for an effective result.'),
(56, 'Class off (today) Parents', 'Dear parents, today your child\'s class is off for some reason. Kindly take note of it.'),
(57, 'Class off (long duration) parents', 'Dear Parents, your child\'s class is off from (variable) to (variable) because of some reason. Kindly take note of it.'),
(58, 'Batch timing shift Stud', 'Dear Nimslite, your batch timing has been shifted. New timing is as (variable) .Kindly co-operate for the same.'),
(59, 'Batch timing shift Parents', 'Dear Parents, your child\'s batch timing has been shifted. New timing is as (variable). Kindly take note of it.'),
(60, 'Timing reschedules Parents', 'Dear Parents, your child\'s batch timing has been rescheduled as (variable). Kindly take note of it.'),
(61, 'Extra batch Stud', 'Dear Nimslite, Nim\'s have put an Extra batch for you on (variable) from (variable). Do present in the batch.'),
(62, 'Extra batch Parents', 'Dear Parents, Nim\'s have put an Extra batch for your child on (variable) from (variable). Kindly take note of it.'),
(63, 'Extra revision batch Stud', 'Dear Nimslite, Nim\'s have put an Extra revision batch for you on (variable) from (variable). Do present in the batch.'),
(64, 'Extra revision batch Parents', 'Dear Parents, Nim\'s have put an Extra batch for your child on (variable) from (variable). Kindly take note of it.'),
(65, 'Absent Alert Parents', 'Dear Parents, your child was absent on (variable) in batch (variable). Kindly look after this.'),
(66, 'Fees reminder Stud', 'Dear Nimslite, your fees is due on (variable). Kindly pay ASAP in the office.'),
(67, 'Fees reminder Parents', 'Dear Parents, your child\'s fees is due on (variable). Kindly pay ASAP in the office.'),
(68, 'Must pay fees Stud', 'Dear Nimslite, this is must pay fees reminder .Kindly pay ASAP in the office else you cannot continue in the batch.'),
(69, 'Must pay fees Parents', 'Dear Parents, this is must pay fees reminder .Kindly pay ASAP in the office else your child cannot continue in the batch.'),
(70, 'Parents meeting Stud', 'Dear Nimslite, Parents Meeting has been scheduled on (variable) at (variable). Kindly ask your parents to attend.'),
(71, 'Parents meeting parents', 'Dear parents, Nim\'s has scheduled Parents Meeting for you on (variable) at (variable). Kindly make your presence for the same.'),
(72, 'Cancel parents meeting stud', 'Dear Nimslite, Parents Meeting scheduled on (variable) at (variable) has been Cancelled. Kindly take note of it.'),
(73, 'Cancel parents meeting parents', 'Dear parents, Nim\'s Parents Meeting held on (variable) at (variable) has been cancelled. Apologize for the inconvenience caused.'),
(74, 'Study material available stud', 'Dear Nimslite, study material for subject (variable) is available. You can collect it from office.'),
(75, 'Study material available parents', 'Dear Parents, study material for subject (variable) is available. Ask your child to collect it from office.'),
(76, 'Syllabus complete or not stud', 'Dear Nimslite, your syllabus for subject (variable) is completed on (variable). For any queries contact your branch head.'),
(77, 'Syllabus complete or not parents', 'Dear Parents, your child\'s syllabus for subject (variable) is completed on (variable). For any queries kindly contact the branch head.'),
(78, 'New events Stud', 'Dear Nimslite, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(79, 'New events Parents', 'Dear Parents, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(80, 'Outside events Stud', 'Dear Nimslite, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(81, 'Outside events parents', 'Dear Parents, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(82, 'Prize distribution Stud', 'Dear Nimslite, Nim\'s is celebrating the Prize distribution Ceremony on (variable) at (Variable) and Venue is (Variable).'),
(83, 'Prize distribution parents', 'Dear Parents, Nim\'s is celebrating the Prize Distribution Ceremony on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(84, 'Seminar stud', 'Dear Nimslite, Nim\'s have scheduled Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(85, 'Seminar parents', 'Dear Parents, Nim\'s have scheduled Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(86, 'free seminar stud', 'Dear Nimslite, Nim\'s have scheduled Free Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(87, 'free seminar parents', 'Dear Parents, Nim\'s have scheduled Free Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly ask your child to mark presence.'),
(88, 'Nimâ€™s new batch Stud', 'Dear Nimslite, Nim\'s have started new batch for (variable). Enroll yourself ASAP.'),
(89, 'Nimâ€™s new batch Parents', 'Dear Parents, Nim\'s have started new batch for (variable). Enroll your child ASAP.'),
(90, 'Absent Today', 'Dear parents, your child has not attended the class on : (variable). Kindly look after this. From : (variable).'),
(91, 'Welcome message', 'Dear (variable), Welcome to Nim\'s! Your User ID : (variable) and Password : (variable) Keep it for personal use and future log in.'),
(92, 'Nims_New_Batch_Alert', 'Nimslite (variable), New batches of (variable) for (variable) starting from (variable) , On timing (variable) at (variable).Enroll today.Thanks.'),
(94, 'New_Batch_Alert', 'Nimslite (variable), New batches of (variable) for (variable) starting from (variable) , On timing (variable) at (variable).Enroll today.Thanks.'),
(95, 'Test_Nims_Guys', 'Hello (variable),Be Prepared (variable) for Date:23/01/2015 test on subject (variable).'),
(96, 'Thanks Message', 'Dear Nimslite (Variable),Thanks for joining Nim\'s Educational Care.We Provide you 100% friendly and effective result for your education, for any query and support Contact:9970629258,TollFreeNo.180030004181 or www.mynims.org'),
(97, 'Aprove Students', 'Nimslite (Variable), Your registration is approved for www.mynims.org and Your User Id : (Variable) and Password : (Variable).Keep it for personal use and future login.'),
(98, 'Approval_Msg_ToParents', 'Dear Parent, Your Child\'s registration is approved for www.mynims.org and Your User Id : (Variable) and Password : (Variable) to login into Parent\'s Corner.'),
(99, 'Absent_Student', 'Dear Student, You have not attended the class today for (variable) at (Variable). Our aim is that this absent mark should not affect on your study. Be regular.'),
(100, 'Birthday_Reminder', 'Dear Nimslite (variable), Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(101, 'Forget_Password', 'Dear Nimslite, Your password is (variable). Keep it for personal use and future login.'),
(102, 'Forget_Password2', 'Dear Parent, Your password is (variable). Keep it for personal use and future login.'),
(103, 'Nims_Enquiry', 'If you have any query for(variable) then contact on this number 9923685635'),
(104, 'ClassOf_Alert(Today)', 'Dear Nimslite (variable), we will not be having class today for (variable) for Batchtiming (variable) due to (variable)- (variable) Thank you.'),
(105, 'ClassOff_Alert(Long Durt.)', 'Nimslite (variable), your class will be off for (variable) at (variable) from (variable) to (variable) due to (variable)- (variable) Thank you.'),
(106, 'Reschedule_Batch_Alert', 'Nimslite (variable), Your (variable) Batch on (variable) at (variable) for (variable) has been shifted to (variable), (variable) for (variable) at (variable)- (variable) Thank you.'),
(107, 'homework_student', 'Dear Nimslite,You have not completed the homework today for batchtiming (variable).Kindly give attention on your studies.'),
(108, 'test_Student', 'Dear Nimslite,You have not attended the TEST today for batchtiming (variable).Our aim is that this absent mark should not affect on your performance.'),
(109, 'PresentStud', 'Dear Nimslite, you have attended the class today for batchtiming (variable).Thank you.'),
(110, 'PresentParent', 'Dear Parent, your child has attended the class today for batchtiming (variable).Thank you.'),
(111, 'Process_Pending', 'Dear (variable),(variable) has sent you request for (variable) site and sitecode is (variable). Please have a look into it.'),
(112, 'PrizeDistibutionP', 'Dear Parent, Nim\'s is celebrating the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(113, 'PrizeDistStudent', 'Dear Nimslite, Nim\'s is celebrating the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(114, 'NewBatchAlertStudent', 'Dear Nimslite (variable), New Batch for (variable) started from (variable) at (variable) on time (variable). Enroll today at (variable).'),
(115, 'NewBatchAlertParent', 'Dear Parent, New batch for (variable) started from (variable) at (variable) for (variable).Enroll today on (variable).Thanks.'),
(116, 'SelectCust', 'Dear (variable), new deal is created. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(117, 'SelectSup', 'Dear (variable), new deal is created. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(118, 'UpdateCust', 'Dear (variable), deal is updated. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(119, 'UpdateSup', 'Dear (variable), deal is updated. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(120, 'bulksms', 'Dear Nimslite,New batch for class (variable) of Subject (variable) start in (variable) week of (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(121, 'alertmsg', 'Dear Nimslite,New batch for class (variable) of Subject (variable) start in (variable) week of (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(122, 'new batch', 'Dear Nimslite,New batch for (variable) (variable) starts from (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(123, 'feesdueparents', 'Dear Nimslite, Your fees Rs. : (variable) is remaining of subject (variable). Please pay the fees on or before DueDate :(variable). Thank you.'),
(124, 'feesduestud', 'Dear parents, your child fees for Rs. : (variable) is remaining of subject (variable). Please pay the fees on or before DueDate : (variable). Thank you.'),
(125, 'cancelextrabatch', 'Dear Nimslite (variable), your (variable) extra batch will be cancelled on (variable) of subject (variable) due to (variable) - (variable). Thank you.'),
(126, 'extrabatchalert', 'Dear Nimslite (variable), your (variable) batch for (variable) will arrange on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(127, 'reschedulebatchalert', 'Nimslite (variable) your (variable) batch on (variable) at (variable) for (variable) has been shifted to (variable) on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(128, 'extrarevisionalert', 'Dear Nimslite (variable), your extra revision batch of (variable) on (variable) will be arrange on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(129, 'newbatchstudent', 'Dear Nimslite (variable), new batch for (variable) will be start from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(130, 'newbatchparents', 'Dear Parents, new batch for (variable) will be start from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(131, 'testalert', 'Dear Nimslite (variable), your test of (variable) on (variable) will be arrange on (variable) at (variable) on (variable) for (variable). Be prepare. Best of luck. Thank you.'),
(132, 'notattendtestalert', 'Dear Parents, your child not attend the test today of subject (variable) for batchtime (variable).'),
(133, 'eventalert', 'Dear Nimslite (variable), we have arrange (variable) on (variable). The venue is (variable) and time is (variable). Thank you.'),
(134, 'subjectmaterialalert', 'Dear Nimslite (variable), collect your (variable) from office. Thank you.'),
(135, 'reciept', 'Nimslite (variable), your fees (variable)/- for (variable):(variable) have been received with discount of (variable)/-. Remaining fees of (variable)/- and Due Date:(variable). Thank you.'),
(136, 'reciept2', 'Nimslite (variable), your fees:(variable)/- for (variable):(variable) have been received with discount:(variable)/-, Remaining fees: (variable)/- & Due Date:(variable). Thank you.'),
(137, 'feesnil', 'Nimslite (variable), your fees (variable)/- for (variable):(variable) have been received with discount of (variable)/-. Remaining fees NIL. Thank you.'),
(138, 'cancelextrabt', 'Dear Nimslite (variable), your extra batch for (variable) on (variable) at (variable) will be cancelled on (variable) at (variable) due to (variable) - (variable). Thank you.'),
(139, 'newbatchstud', 'Dear Nimslite (variable), new batch of (variable) for (variable) will be starting from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(140, 'hallshift', 'Dear Nimslite (variable), Nim\'s Branch is shifted from (variable) to (variable). For any query contact Nim\'s office. Thank you.'),
(141, 'notattdtest', 'Dear Parents, your child has not attended the test on (variable) of (variable) for (variable) at (variable). Please pay attention on your child.'),
(142, 'seminar alert', 'Dear Nimslite (variable), we have arranged seminar on (variable) by (variable) on (variable) at (variable) and time is (variable). For more details contact in office.'),
(143, 'homeworkalert', 'Dear Parents, your child has not completed (variable) homework of (variable) on (variable). Kindly give attention on your child.'),
(144, 'absentstud', 'Dear Nimslite, you have not attended the class today of (variable) for batchtiming (variable). Our aim is that this absent mark should not affect on your study.'),
(145, 'batchstud', 'Dear Nimslite,You have not attended the TEST today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect on your performance.'),
(146, 'homeworkstud', 'Dear Nimslite,You have not completed the homework today of (variable) for batchtiming (variable).Kindly give attention on your studies.'),
(147, 'testparent', 'Dear Parents,Your child has not attended the TEST today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect your child\'s performance.'),
(148, 'Homeworkparent', 'Dear Parents,Your child has not completed the homework today of (variable) for batchtiming (variable).Kindly give attention on your child.'),
(149, 'Absentparent', 'Dear Parents,Your child has not attended the class today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect your child\'s study.'),
(150, 'feesremi', 'Dear Parents, your child\'s Fees:(variable)/- is remaining for (variable) : (variable). We shall be glad if you pay fees on (variable). Thank You.'),
(151, 'otptemp', 'Dear Nimslite, your OTP is (variable). Thank You.'),
(152, 'oncong', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Keep Growing. Best of Luck.'),
(153, 'hardon', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Work Hard. Best of Luck.'),
(154, 'congrats', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Keep Growing. Best of Luck.'),
(155, 'Sms Detail', 'Details are provided below - (variable)');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`Id`, `Name`) VALUES
(2, 'West Bengal'),
(3, 'Maharashtra'),
(4, 'Utter Pradesh'),
(5, 'Jharkhand'),
(6, 'Kerele'),
(7, 'Tamil Nadu'),
(8, 'Karnataka'),
(9, 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `YearOfAdmission` varchar(4) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `IsExCandidate` bit(30) NOT NULL,
  `FatherOccupationID` int(11) NOT NULL,
  `FatherMobile` varchar(15) NOT NULL,
  `PreferredCenterId` int(11) NOT NULL,
  `PreferredBatchTimingId` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ExamBoardId` int(11) NOT NULL,
  `ReferenceTypeId` varchar(50) NOT NULL,
  `ImageDetails` longblob NOT NULL,
  `Bloodgroup` varchar(5) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Fathername` varchar(50) NOT NULL,
  `Fatherlastname` varchar(50) NOT NULL,
  `FatherdesignationID` int(11) NOT NULL,
  `FatheremailID` varchar(50) NOT NULL,
  `HomeLandlinenumbe` varchar(20) NOT NULL,
  `MotheroccupationID` int(11) NOT NULL,
  `MotherdesignationID` int(11) NOT NULL,
  `Mothermobilenumber` varchar(20) NOT NULL,
  `MotheremailID` varchar(50) NOT NULL,
  `Totalannualincome` varchar(30) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `EmergencyContactNumbe` varchar(20) NOT NULL,
  `Preferredstudymedium` varchar(50) NOT NULL,
  `Refrencename` varchar(50) NOT NULL,
  `IsExStudentRelative` bit(30) NOT NULL,
  `Relativename` varchar(50) NOT NULL,
  `Relativecontactnumber` varchar(20) NOT NULL,
  `CourseTypeID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `DOJ` date NOT NULL,
  `PreferredCenterCity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

CREATE TABLE `studentattendance` (
  `ID` int(11) NOT NULL,
  `course` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `id1` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `attend` varchar(50) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `UID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`ID`, `course`, `branch`, `id1`, `fname`, `mname`, `class`, `attend`, `date1`, `UID`) VALUES
(18, 'Msc.IT', 'Computer ', '7 ', 'hardik', 'patel', 'Sem-1', 'Present', '2018-06-30', 3),
(19, 'Msc.IT', 'Computer ', '7 ', 'hardik', 'patel', 'Sem-1', 'Present', '2018-07-01', 3),
(20, 'Msc.IT', 'Computer ', ' ', 'hardik', 'patel', 'Sem-1', 'Absent', '2018-07-03', 3),
(21, 'Msc.IT', 'Computer ', ' ', 'hardik', 'patel', 'Sem-1', 'Present', '2018-07-15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentattendancenew`
--

CREATE TABLE `studentattendancenew` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `IsBatchPresent` bit(40) NOT NULL,
  `IsTestPresent` bit(40) NOT NULL,
  `IsHomeworkComplete` bit(40) NOT NULL,
  `Date_Time` date NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `FacultyID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `BatchtimingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentattendancerecord`
--

CREATE TABLE `studentattendancerecord` (
  `Date_Time` date NOT NULL,
  `BatchtimingID` int(11) NOT NULL,
  `FacultyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentattendancerecordnew`
--

CREATE TABLE `studentattendancerecordnew` (
  `Date_Time` date NOT NULL,
  `BatchtimingID` int(11) NOT NULL,
  `FacultyID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentbatchtimings`
--

CREATE TABLE `studentbatchtimings` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `CenterID` int(11) NOT NULL,
  `BatchTimingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

CREATE TABLE `studentclass` (
  `StudentID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcollegedetails`
--

CREATE TABLE `studentcollegedetails` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `StudyingYearId` int(11) NOT NULL,
  `BranchId` int(11) NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `CollegeID` int(11) NOT NULL,
  `LastExamAppeared` varchar(15) NOT NULL,
  `YearOfExamAppeared` varchar(4) NOT NULL,
  `IsPass` bit(30) NOT NULL,
  `NoOfAttemptLastexam` int(11) NOT NULL,
  `LastExamPercentage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcompetetive`
--

CREATE TABLE `studentcompetetive` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `YearOfAdmission` varchar(4) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `IsExCandidate` bit(40) NOT NULL,
  `FatherOccupation` varchar(50) NOT NULL,
  `FatherMobile` varchar(15) NOT NULL,
  `PreferredCenterId` int(11) NOT NULL,
  `PreferredBatchTimingId` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ReferenceTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentfees`
--

CREATE TABLE `studentfees` (
  `StudID` int(11) NOT NULL,
  `SubID` int(11) NOT NULL,
  `PaidFees` int(11) NOT NULL,
  `ReceiptNo` int(11) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `Discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentmarkdetails`
--

CREATE TABLE `studentmarkdetails` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SSCMaths` smallint(6) NOT NULL,
  `SSCPhysics` smallint(6) NOT NULL,
  `SSCChemistry` smallint(6) NOT NULL,
  `SSCPercentage` smallint(6) NOT NULL,
  `HSCMaths` smallint(6) NOT NULL,
  `HSCPhysics` smallint(6) NOT NULL,
  `HSCChemistry` smallint(6) NOT NULL,
  `HSCPercentage` smallint(6) NOT NULL,
  `PolyMaths` smallint(6) NOT NULL,
  `PolyPhysics` smallint(6) NOT NULL,
  `PolyChemistry` smallint(6) NOT NULL,
  `PolyPercentage` smallint(6) NOT NULL,
  `Engmaths` smallint(6) NOT NULL,
  `EngPhysics` smallint(6) NOT NULL,
  `EngChemistry` smallint(6) NOT NULL,
  `EngPercentage` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentofficedetails`
--

CREATE TABLE `studentofficedetails` (
  `StudentId` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL,
  `BatchTimingID` int(11) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `IsApproved` bit(40) NOT NULL,
  `TotalFees` int(11) NOT NULL,
  `FeesPaid` int(11) NOT NULL,
  `DueDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsicard`
--

CREATE TABLE `studentsicard` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `BatchTiming` varchar(50) NOT NULL,
  `CenterName` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `ValidMonths` int(11) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsicardprinted`
--

CREATE TABLE `studentsicardprinted` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `IsPrint` bit(40) NOT NULL,
  `PrintedDate` date NOT NULL,
  `PrintedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjectsenroll`
--

CREATE TABLE `studentsubjectsenroll` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `FeesPaid` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `ReceiptNo` int(11) NOT NULL,
  `BatchTimingID` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjectsenrollhist`
--

CREATE TABLE `studentsubjectsenrollhist` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `FeesPaid` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `ReceiptNo` int(11) NOT NULL,
  `BatchTimingID` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenttestresults`
--

CREATE TABLE `studenttestresults` (
  `Id` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `WeeklyTestID` int(11) NOT NULL,
  `MarksGot` int(11) NOT NULL,
  `Remarks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentx`
--

CREATE TABLE `studentx` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `YearOfAdmission` varchar(4) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `IsExCandidate` bit(40) NOT NULL,
  `FatherOccupationID` int(11) NOT NULL,
  `FatherMobile` varchar(15) NOT NULL,
  `PreferredCenterId` int(11) NOT NULL,
  `PreferredBatchTimingId` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ExamBoardId` int(11) NOT NULL,
  `ReferenceTypeId` int(11) NOT NULL,
  `ImageDetails` longblob NOT NULL,
  `Bloodgroup` varchar(5) NOT NULL,
  `NationalityID` int(11) NOT NULL,
  `Fathername` varchar(50) NOT NULL,
  `Fatherlastname` varchar(50) NOT NULL,
  `FatherdesignationID` int(11) NOT NULL,
  `FatheremailID` varchar(50) NOT NULL,
  `HomeLandlinenumber` varchar(20) NOT NULL,
  `MotheroccupationID` int(11) NOT NULL,
  `MotherdesignationID` int(11) NOT NULL,
  `Mothermobilenumber` varchar(20) NOT NULL,
  `MotheremailID` varchar(50) NOT NULL,
  `Totalannualincome` varchar(30) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `EmergencyContactNumber` varchar(20) NOT NULL,
  `Preferredstudymedium` varchar(10) NOT NULL,
  `Refrencename` varchar(50) NOT NULL,
  `IsExStudentRelative` bit(40) NOT NULL,
  `Relativename` varchar(50) NOT NULL,
  `Relativecontactnumber` varchar(20) NOT NULL,
  `CourseTypeID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Stud_Id` int(11) NOT NULL,
  `Stud_Name` char(20) NOT NULL,
  `Stud_Qualification` varchar(15) NOT NULL,
  `Stud_Address` varchar(70) NOT NULL,
  `Stud_ContactNo` int(11) NOT NULL,
  `Class_Type` varchar(15) NOT NULL,
  `Course_Type` varchar(50) NOT NULL,
  `Batch_Type` varchar(20) NOT NULL,
  `Batch_Timeing` datetime NOT NULL,
  `Create_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studyingyear`
--

CREATE TABLE `studyingyear` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studymaterial`
--

CREATE TABLE `studymaterial` (
  `cid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studymaterial`
--

INSERT INTO `studymaterial` (`cid`, `Name`) VALUES
(2, 'hardik'),
(3, 'pinal'),
(4, 'arnab'),
(5, 'sumitra'),
(6, 'bhavesh');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Fees` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Id`, `Subject`, `Course`, `Class`, `Branch`, `Fees`) VALUES
(0, 'Fundamentals', 'Msc.IT', 'Sem-1', 'Computer ', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_addtestimonial`
--

CREATE TABLE `tb_addtestimonial` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `unme` varchar(1000) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `testimonial` varchar(10000) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_branchmaster`
--

CREATE TABLE `tb_branchmaster` (
  `id` int(11) NOT NULL,
  `BranchName` varchar(100) NOT NULL,
  `BranchTime` varchar(100) NOT NULL,
  `BranchHead` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `CityId` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_enquiryadmin`
--

CREATE TABLE `tb_enquiryadmin` (
  `id` int(11) NOT NULL,
  `Admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_examtype`
--

CREATE TABLE `tb_examtype` (
  `id` int(11) NOT NULL,
  `ExamType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_facultyattendence`
--

CREATE TABLE `tb_facultyattendence` (
  `[Attendance Id]` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `FacultyName` varchar(1000) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `ContactNo` varchar(10000) NOT NULL,
  `[Attender Name]` varchar(1000) NOT NULL,
  `Month` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `Attendence` varchar(1000) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_facultylogin`
--

CREATE TABLE `tb_facultylogin` (
  `id` int(11) NOT NULL,
  `facultyId` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ContactNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_facultymaster`
--

CREATE TABLE `tb_facultymaster` (
  `id` int(11) NOT NULL,
  `FacultyName` varchar(100) NOT NULL,
  `Education` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Photo` varchar(1000) NOT NULL,
  `PhotoName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL,
  `FullName` varchar(1000) NOT NULL,
  `Course` varchar(1000) NOT NULL,
  `ContactNo` varchar(1000) NOT NULL,
  `EmailAddress` varchar(1000) NOT NULL,
  `Comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hallmaster`
--

CREATE TABLE `tb_hallmaster` (
  `id` int(11) NOT NULL,
  `ClassRoom` varchar(100) NOT NULL,
  `CenterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_information`
--

CREATE TABLE `tb_information` (
  `name` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_managetimetable`
--

CREATE TABLE `tb_managetimetable` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `BranchId` int(11) NOT NULL,
  `ClassRoom` varchar(100) NOT NULL,
  `Course` varchar(1000) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `Batchtiming` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_myclasses`
--

CREATE TABLE `tb_myclasses` (
  `id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `classdate` varchar(300) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `hours` varchar(10) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_noticeboard`
--

CREATE TABLE `tb_noticeboard` (
  `id` varchar(20) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `type` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `summery` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pressrelease`
--

CREATE TABLE `tb_pressrelease` (
  `id` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pressrelease`
--

INSERT INTO `tb_pressrelease` (`id`, `Title`, `Date`, `Description`) VALUES
(1, 'house-made-of-money.jpg', 'ddd', '2017-07-11'),
(2, '88ca2674-9a72-4dcf-a6e2-c96768b469456.jpg', 'hhh', '2017-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prizeclaim`
--

CREATE TABLE `tb_prizeclaim` (
  `id` int(11) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year1` varchar(1000) NOT NULL,
  `date1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prizeclaim`
--

INSERT INTO `tb_prizeclaim` (`id`, `course`, `subject`, `name`, `year1`, `date1`) VALUES
(1, 'Hardik', 'Sport', 'fjf', '2017', '2017-07-13'),
(2, 'Hardik', 'Sport', 'HD', '2018', '2017-07-11'),
(3, 'MSCIT', 'Banking', 'BHAVESH', '2015', '2017-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prizedistributionstudent`
--

CREATE TABLE `tb_prizedistributionstudent` (
  `id` int(11) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Center` varchar(50) NOT NULL,
  `BatchTiming` varchar(50) NOT NULL,
  `ExamType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Id` int(11) NOT NULL,
  `CenterId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `TimingId` int(11) NOT NULL,
  `FacultyId` int(11) NOT NULL,
  `ExamId` int(11) NOT NULL,
  `DayId` int(11) NOT NULL,
  `BatchTime` varchar(50) NOT NULL,
  `Flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

CREATE TABLE `toppers` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `marks` varchar(50) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `per` varchar(50) DEFAULT NULL,
  `photo` longblob,
  `year1` varchar(50) DEFAULT NULL,
  `totalmarks` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `college` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppers`
--

INSERT INTO `toppers` (`id`, `name`, `course`, `branch`, `marks`, `rank`, `per`, `photo`, `year1`, `totalmarks`, `class`, `subject`, `college`) VALUES
(' 1', 'Pinal', 'MscIt', '80', '80', 'A', '80', NULL, '2017', '250', 'Sem3', 'PHP', 'Bvdu'),
('2 ', '1', '2', '3', '3', '3', '3', 0x5f4d475f313235352e6a7067, '3', '3', '3', '3', '3'),
('3 ', '', 'a', 'a', 'a', 'a', 'a', 0x77617465725f776174657266616c6c5f6e61747572655f3231343735312e6a7067, 'a', 'a', 'a', 'a', 'a'),
('4 ', 'z', 'z', 'z', 'z', 'z', 'z', 0x77617465725f776174657266616c6c5f6e61747572655f3231343735312e6a7067, 'z', 'z', 'z', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `transactioncategory`
--

CREATE TABLE `transactioncategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tid` int(50) NOT NULL,
  `tname` varchar(150) DEFAULT NULL,
  `speciality` varchar(5000) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `tpic` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tid`, `tname`, `speciality`, `description`, `tpic`) VALUES
(0, 'Anil Kapoor', 'CSE', 'asdfghjkldsaffghkjlasfdghjkladsfghjkl', 0x4d696e696f6e2e6a7067),
(1, 'Salman Khan', 'Maths', 'asdfghjkldsaffghkjlasfdghjkladsfghjkl', 0x4d696e696f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Boardname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`ID`, `Name`, `Boardname`) VALUES
(0, 'Msc.IT', 'CBCS Board'),
(1, 'Msc.IT', 'Amravati University'),
(2, 'Msc.IT', 'Pune University'),
(3, 'Bsc.IT', 'Amravati University'),
(4, 'Bsc.IT', 'CBCS Board'),
(5, 'Bsc.IT', 'Pune University'),
(6, 'B.Tech', 'Pune University'),
(7, 'B.Tech', 'Bharati Vidyapeeth '),
(8, 'B.Tech', 'VIT');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` varchar(50) NOT NULL,
  `lid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `rid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `lid`, `pass`, `role`, `rid`) VALUES
('1', 'pinal', 'pinal', 'A', 'bhavesh'),
('2 ', 'Parent', 'Parent', 'NA', 'Abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `MobileNumber` varchar(12) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `VisitedBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weeklytest`
--

CREATE TABLE `weeklytest` (
  `id` varchar(50) NOT NULL,
  `syid` varchar(50) DEFAULT NULL,
  `classname` varchar(200) NOT NULL,
  `tname` varchar(200) DEFAULT NULL,
  `desc1` varchar(200) DEFAULT NULL,
  `marks` varchar(50) DEFAULT NULL,
  `centerid` varchar(50) DEFAULT NULL,
  `courseid` varchar(50) DEFAULT NULL,
  `sid` varchar(50) DEFAULT NULL,
  `date1` varchar(50) DEFAULT NULL,
  `timeid` varchar(50) DEFAULT NULL,
  `bid` varchar(50) DEFAULT NULL,
  `ttime` varchar(50) DEFAULT NULL,
  `tcenter` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklytest`
--

INSERT INTO `weeklytest` (`id`, `syid`, `classname`, `tname`, `desc1`, `marks`, `centerid`, `courseid`, `sid`, `date1`, `timeid`, `bid`, `ttime`, `tcenter`, `cname`) VALUES
(' 1', 'Banking', 'Sem 2', 'Computer Science', 'Test related to Basic computer knowledge', '40', 'Rajpeth', 'MSc IT', ' 1', '2017-12-31', '1PM-2PM', 'Computer', '12:59', 'Wadgaon, Pune', 'Pune'),
('2', 'Banking', 'SEM 3', 'Data Science', 'Test 2', '40', 'Pune', 'MSC IT', '2', '2017-12-29', '12:50', 'ds', '546', 'cds', 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `xyz`
--

CREATE TABLE `xyz` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `cid` int(11) NOT NULL,
  `Year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`cid`, `Year`) VALUES
(1, '1995'),
(2, '1996'),
(3, '2015'),
(4, '2016'),
(5, '2017'),
(6, '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batchtiming`
--
ALTER TABLE `batchtiming`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `birthdayreminder`
--
ALTER TABLE `birthdayreminder`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BId`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `competativesubjects`
--
ALTER TABLE `competativesubjects`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `competetivecourse`
--
ALTER TABLE `competetivecourse`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `councel`
--
ALTER TABLE `councel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coursetype`
--
ALTER TABLE `coursetype`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cstudent`
--
ALTER TABLE `cstudent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cstudentcollegedetails`
--
ALTER TABLE `cstudentcollegedetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cstudentmarkdetails`
--
ALTER TABLE `cstudentmarkdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cstudentofficedetails`
--
ALTER TABLE `cstudentofficedetails`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `cstudentstyudyingyear`
--
ALTER TABLE `cstudentstyudyingyear`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `cstudentsubjectsenroll`
--
ALTER TABLE `cstudentsubjectsenroll`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cstudyingyear`
--
ALTER TABLE `cstudyingyear`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `demotable`
--
ALTER TABLE `demotable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollmentfom`
--
ALTER TABLE `enrollmentfom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `events1`
--
ALTER TABLE `events1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exampattern`
--
ALTER TABLE `exampattern`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `exampatternx`
--
ALTER TABLE `exampatternx`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facultysubjectdetails`
--
ALTER TABLE `facultysubjectdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedbackcategory`
--
ALTER TABLE `feedbackcategory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fees_transaction`
--
ALTER TABLE `fees_transaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `highlighter`
--
ALTER TABLE `highlighter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manageclassroom`
--
ALTER TABLE `manageclassroom`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `managetimetable`
--
ALTER TABLE `managetimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managetimetables`
--
ALTER TABLE `managetimetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managevideo`
--
ALTER TABLE `managevideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksobtained`
--
ALTER TABLE `marksobtained`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nimslibrary`
--
ALTER TABLE `nimslibrary`
  ADD PRIMARY KEY (`Sr_No`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlineexam`
--
ALTER TABLE `onlineexam`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `onlinetestmark`
--
ALTER TABLE `onlinetestmark`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentadmin`
--
ALTER TABLE `paymentadmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qsimple`
--
ALTER TABLE `qsimple`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `ranker`
--
ALTER TABLE `ranker`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `referencetype`
--
ALTER TABLE `referencetype`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`uid`) USING BTREE;

--
-- Indexes for table `registration2`
--
ALTER TABLE `registration2`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration3`
--
ALTER TABLE `registration3`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration4`
--
ALTER TABLE `registration4`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration5`
--
ALTER TABLE `registration5`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sms_dtls`
--
ALTER TABLE `sms_dtls`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `sms_template`
--
ALTER TABLE `sms_template`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentattendance`
--
ALTER TABLE `studentattendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentattendancenew`
--
ALTER TABLE `studentattendancenew`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentbatchtimings`
--
ALTER TABLE `studentbatchtimings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentcollegedetails`
--
ALTER TABLE `studentcollegedetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentcompetetive`
--
ALTER TABLE `studentcompetetive`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentmarkdetails`
--
ALTER TABLE `studentmarkdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentsicard`
--
ALTER TABLE `studentsicard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentsubjectsenroll`
--
ALTER TABLE `studentsubjectsenroll`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentsubjectsenrollhist`
--
ALTER TABLE `studentsubjectsenrollhist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studenttestresults`
--
ALTER TABLE `studenttestresults`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentx`
--
ALTER TABLE `studentx`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studyingyear`
--
ALTER TABLE `studyingyear`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studymaterial`
--
ALTER TABLE `studymaterial`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_branchmaster`
--
ALTER TABLE `tb_branchmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_enquiryadmin`
--
ALTER TABLE `tb_enquiryadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_examtype`
--
ALTER TABLE `tb_examtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_facultylogin`
--
ALTER TABLE `tb_facultylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_facultymaster`
--
ALTER TABLE `tb_facultymaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hallmaster`
--
ALTER TABLE `tb_hallmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_managetimetable`
--
ALTER TABLE `tb_managetimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pressrelease`
--
ALTER TABLE `tb_pressrelease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prizeclaim`
--
ALTER TABLE `tb_prizeclaim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prizedistributionstudent`
--
ALTER TABLE `tb_prizedistributionstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `toppers`
--
ALTER TABLE `toppers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactioncategory`
--
ALTER TABLE `transactioncategory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `weeklytest`
--
ALTER TABLE `weeklytest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz`
--
ALTER TABLE `xyz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `batchtiming`
--
ALTER TABLE `batchtiming`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `birthdayreminder`
--
ALTER TABLE `birthdayreminder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competativesubjects`
--
ALTER TABLE `competativesubjects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competetivecourse`
--
ALTER TABLE `competetivecourse`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `councel`
--
ALTER TABLE `councel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cstudent`
--
ALTER TABLE `cstudent`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudentcollegedetails`
--
ALTER TABLE `cstudentcollegedetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudentmarkdetails`
--
ALTER TABLE `cstudentmarkdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudentofficedetails`
--
ALTER TABLE `cstudentofficedetails`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudentstyudyingyear`
--
ALTER TABLE `cstudentstyudyingyear`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudentsubjectsenroll`
--
ALTER TABLE `cstudentsubjectsenroll`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cstudyingyear`
--
ALTER TABLE `cstudyingyear`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demotable`
--
ALTER TABLE `demotable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeemaster`
--
ALTER TABLE `employeemaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enrollmentfom`
--
ALTER TABLE `enrollmentfom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentattendance`
--
ALTER TABLE `studentattendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 04:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `user_name` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone_no` decimal(10,0) NOT NULL,
  `mobileno` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`user_name`, `owner_name`, `shopname`, `email_id`, `phone_no`, `mobileno`) VALUES
('asas', 'as', 'qwq', 'cv', '1234554321', '1234554321'),
('asasas', 'asasas', 'sasasas', 'asasas', '1112221122', '1112221122'),
('daa', 'daa', 'daa', 'aasaas', '1212121212', '1212121212'),
('dda', 'dda', 'dda', 'dda', '1234567890', '1234567890'),
('ddnat', 'qwqwwqwqwq', 'qw', 'asasassa', '1212121212', '1212121212'),
('dev', 'edvvvvv', 'qwq', 'qwqwqwqwqw', '1234512345', '1234512345'),
('devq', 'edvvvvv', 'qwq', 'qwqwqwqwqw', '1234512345', '1234512345'),
('DR17', 'Darshan', 'Darshan Medicals', 'dfs@gmail.com', '1234567890', '1234567890'),
('drchang', 'Mr. Joy Lobo', 'Lobo Medicals', 'changdr@gmail.com', '9832983923', '2147483647'),
('drwong', 'Sujoy Ghosh', 'Pasadena Pharmaceuticals', 'pasapharma@gmail.com', '8987546512', '9876543210'),
('dsas', 'Darshan', 'MedShop', 'df@gmail.com', '3333333330', '9876543221'),
('farah', 'asd', 'asd', 'hhahjh', '1212121212', '1212121212'),
('jordan', 'Teejay Sidhu', 'TJ Medicals', 'tj@gmail.com', '1231231231', '9879879871'),
('kk', 'kk', 'kk', 'kk', '9876543210', '9876543210'),
('polly', 'Paul Wilson', 'Wilson Medicals', 'poll@yahoo.com', '1223412234', '9870831147'),
('qwqwqweeee', 'qwqwwqwqwq', 'qwqwqw', 'qqwqw', '1231231234', '1231231234'),
('Ranger11', 'Bruce Willis', 'Bruce MEDpoint', 'bruce123@gmail.com', '9999944444', '0'),
('Rocker', 'K.K. Aggarwal', 'Instamed Pharmaceuticals', 'jjthomson@gmail.com', '1231231231', '9876123412'),
('sam', 'sam', 'sam', 'sdsdsdsds', '987654321', '1234567890'),
('sam1', 'shivam', 'wewe', 'judy@sas', '9828222222', '9810821139'),
('sam261', 'Shia LeBouf', 'P point', 'sam261@gmail.com', '1212121212', '9787654312'),
('shiva', 'shivam', 'foobar', 'sjf@gmail.com', '1234567899', '9876543221'),
('shivaa', 'asdas', 'asdsa', 'asdad', '1231231231', '1231231231'),
('shubham', 'chauhan', 'bacd', 'shuhhakn', '9087656782', '0'),
('shubham1', 'shubham', 'abcd', 'shubhann@gmail.com', '120265978', '2147483647'),
('sq', 'sq', 'sq', 'poet', '1212121212', '1212121212'),
('ssasasasas', 'asasasasas', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'guyfawkes@yahoo.com', '1212121212', '1212121212'),
('sssd', 'asssssssssss', 'sdsdsddd', 'qwqwqwqw', '1212121212', '1212121212'),
('System', 'Shubham', 'Accurate Medicines', 'shubhamx91@gmail.com', '9876543201', '0'),
('System1', 'Aman', 'Aman Medicals', 'aman123452@gmail.com', '9954532321', '0'),
('System2', 'Guy Fawkes', 'Medical Point', 'guyfawkes@yahoo.com', '9087656782', '0'),
('System3', 'Dwayne Johnson', 'Johnson''s Medicines', 'dwaynejohn@gmail.com', '9999999999', '0'),
('tada', 'tada', 'tada', 'asasasasasasas', '1234123412', '1234123412'),
('Vijay Bhaskar', 'Vijay Bhaskar', 'Tinu Medicals', 'bhaskar@gmail.com', '1201022343', '8799873211');

-- --------------------------------------------------------

--
-- Table structure for table `liscence`
--

CREATE TABLE IF NOT EXISTS `liscence` (
  `liscence_no` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `liscence_status` varchar(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liscence`
--

INSERT INTO `liscence` (`liscence_no`, `user_name`, `liscence_status`, `date`) VALUES
('', 'System', 'YES', '2017-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `user_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL DEFAULT 'your address',
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`user_name`, `address`, `state`, `city`, `district`, `pincode`) VALUES
('asas', 'qww', 'sa', 'dc', 'ccdd', 111111),
('asasas', 'asasas', 'asasas', 'aaasss', 'asasss', 111111),
('CR17', '121, San Pedro County', 'Haryana', 'Jhajjar', 'Jhajjar', 301100),
('daa', 'daa', 'Madhya Pradesh', 'sdsdsdsdsd', 'ds', 213112),
('dda', 'dda', 'dda', 'dda', 'dda', 123456),
('ddnat', 'qw', 'Assam', 'qwqwqw', 'asasas', 121212),
('dev', 'qwqwqw', 'dsdsdsds', 'aasssas', 'distt11', 123123),
('devq', 'qwqwqw', 'dsdsdsds', 'aasssas', 'distt11', 123123),
('DR17', '123, ABC colony', 'Uttar Pradesh', 'Noida', 'Shahbad', 123231),
('drchang', '1313, Kishangarh, Badi Chaupar', 'Rajasthan', 'Jaipur', 'Jaipurganj', 324533),
('drwong', '1221, Long Harbor', 'Maharashtra', 'Mumbai', 'Pune', 233333),
('dsas', '323,ww colony', 'Uttar Pradesh', 'Faijabad', 'Dashrathpuri', 201004),
('dshn121123', '323, JJcolony, ', '', '', 'district', 0),
('dshn121134', '2345, Shoprexx Mall, Lakhi Sarai', 'Madhya Pradesh', 'JamalPur', 'Shahjahanabad', 444323),
('farah', 'asd', 'Telangana', 'sjaksj', 'ddsas', 121212),
('jordan', 'gali no 420', 'Uttar Pradesh', 'Ghaziabad', 'Ghaziabad', 201001),
('kk', 'kk', 'kk', 'kk', 'kk', 123456),
('polly', '123, Jhajjar Road', 'Delhi', 'Delhi', 'Rohini', 110001),
('qwqwqweeee', 'qwqwqw', 'qwert', 'qwer', 'qweqwe', 111111),
('Ranger11', '211, Harvey Alley', 'Himachal Pradesh', 'Shimla', 'Shipki La', 333131),
('Rocker', '343, Forest Road', 'Maharashtra', 'Mumbai', 'Kandivili', 300100),
('sam1', 'dhdhdhdh', 'omaha', 'geneva', 'shiuaka', 999999),
('sam261', '3332, Kishore Gali', 'Uttar Pradesh', 'Jaswantpur', 'Kishanganj', 230101),
('shiva', 'foobar', 'Gujarat', 'Jahanabad', 'distric13', 230230),
('shivaa', 'sadasd', 'Maharashtra', 'sad', 'dfsads', 222222),
('sq', 'sq', 'as', 'as', 'as', 123123),
('ssasasasas', 'aaaaaaaaaaaaaaaaaaaaaa', 'qwqwwqqwqwqw', 'qwqwwqwqw', 'qwqwqwqwqwqw', 123123),
('sssd', '212122112sa', 'as', 'as', 'aa', 121212),
('System', 'abcdshfasjk', 'up', 'sahibabad', 'ghaziabad', 201005),
('System1', '313,Noor Manjil', 'West Bengal', 'Kolkata', 'Lalganj', 982714),
('tada', 'tada', 'tada', 'tada', 'tada', 121212),
('Vijay Bhaskar', '343, Dashrath Road', 'Uttar Pradesh', 'Ayodhya', 'Dashrathpuri', 300300);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `logindate` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`, `logindate`, `login_time`) VALUES
('asas', '123', '2017-09-23', '04:34:44'),
('asasas', '1234', '2017-09-23', '03:41:36'),
('CR17', '1234', '2017-10-01', '06:19:41'),
('daa', '1234', '2017-09-29', '02:51:41'),
('dda', '1234', '2017-09-23', '12:28:00'),
('ddnat', '1234', '2017-10-06', '08:05:43'),
('dev', '1234', '2017-09-23', '02:10:28'),
('devq', '1234', '2017-09-23', '02:11:42'),
('DR17', '1234', '2017-10-01', '06:36:43'),
('drchang', '123456789', '2017-09-21', '06:32:31'),
('drwong', '12345', '2017-09-21', '06:39:01'),
('dsas', '1234', '2017-10-01', '06:30:50'),
('dshn1211', '123', '2017-09-21', '05:50:41'),
('dshn121123', '12345', '2017-09-21', '06:14:28'),
('dshn121134', '123456789', '2017-09-21', '06:23:16'),
('dshn1212', 'darshan', '2017-09-21', '05:40:40'),
('dshn12121', '123', '2017-09-21', '05:48:46'),
('farah', '1234', '2017-10-06', '09:37:44'),
('jordan', '1234', '2017-10-12', '10:43:35'),
('kk', '1234', '2017-09-23', '12:15:33'),
('polly', '1234', '2017-10-14', '04:45:14'),
('qwqwqweeee', '1234', '2017-09-23', '04:16:35'),
('Ranger11', 'Ranger11', '0000-00-00', '00:00:00'),
('Rocker', '1234', '2017-10-07', '10:43:40'),
('sam', 'qwerty', '2017-09-19', '04:59:39'),
('sam1', '1234', '2017-09-23', '12:12:21'),
('sam261', '1234', '2017-09-23', '07:56:20'),
('shiva', '1234', '2017-09-23', '12:06:47'),
('shivaa', '1234', '2017-10-12', '10:38:38'),
('shubham', 'shubham', '2017-09-19', '12:10:48'),
('shubham1', 'Shubham', '2017-09-19', '12:15:55'),
('sq', '1234', '2017-09-23', '02:06:09'),
('ssasasasas', '1234', '2017-09-23', '03:01:32'),
('sssd', '1234', '2017-09-23', '03:05:20'),
('System', '1234', '0000-00-00', '00:00:00'),
('System1', '123456', '0000-00-00', '00:00:00'),
('System2', 'GUYFAWKES', '0000-00-00', '00:00:00'),
('System3', 'System3', '0000-00-00', '00:00:00'),
('tada', '1234', '2017-09-23', '04:13:04'),
('Vijay Bhaskar', '1234', '2017-09-23', '11:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `medicinedet`
--

CREATE TABLE IF NOT EXISTS `medicinedet` (
  `medname` varchar(100) DEFAULT NULL,
  `medname_generic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinedet`
--

INSERT INTO `medicinedet` (`medname`, `medname_generic`) VALUES
('Risperidone', 'risperidone'),
('ADSOL Red Cell Preservation Solution System in Plastic Container (PL 146 Plastic)', 'Anticoagulant Citrate Phosphate Dextrose (CPD) Solution and ADSOL Preservation Solution'),
('Phosphorus 30', 'Phosphorus 30'),
('POTASSIUM CHLORIDE', 'POTASSIUM CHLORIDE'),
('AMBIEN', 'ZOLPIDEM TARTRATE'),
('INDOMETHACIN', 'INDOMETHACIN'),
('Australian Gold', 'Avobenzone, Homosalate, Octisalate, Octocrylene, Oxybenzone'),
('ULTRACET', 'tramadol hydrochloride and acetaminophen'),
('Monistat 3 Combination Pack', 'Miconazole Nitrate'),
('Glyburide and Metformin', 'Glyburide and Metformin'),
('NBB Citrus', 'Zinc Gluconate, Zinc Oxide, and Sambucus Nigra Flower'),
('Levothyroxine Sodium', 'Levothyroxine Sodium'),
('Care One migraine relief', 'Acetaminophen, Aspirin, Caffeine'),
('Oxytocin', 'Oxytocin'),
('Greasewood', 'Greasewood'),
('Preferred Plus Ibuprofen', 'Ibuprofen'),
('Theophylline', 'Theophylline'),
('Hand Sanitizer', 'Alcohol'),
('Lamotrigine', 'lamotrigine'),
('STOOL SOFTENER GENTLE RELIEF', 'DOCUSATE SODIUM'),
('pain relief pm', 'Acetaminophen, Diphenhydramine HCl'),
('Vitamin A and Vitamin D', 'Vitamin A and Vitamin D'),
('Medi-Scrub', 'Chloroxylenol'),
('Glyburide and Metformin', 'Glyburide and Metformin'),
('SHISEIDO SHEER MATIFYING COMPACT (REFILL)', 'Octinoxate and Titanium dioxide'),
('Varico', 'Calcarea Fluorica, Carbo Vegetabilis, Hamamelis Virginiana, Lachesis Mutus, Lycopodium Clavatum, Pulsatilla, Secale Cornutum, Staphysagria, Zincum Metallicum'),
('Sarsaparilla Kit Refill', 'SARSAPARILLA ROOT'),
('Prednisone', 'Prednisone'),
('Carvedilol', 'Carvedilol'),
('Topiramate', 'Topiramate'),
('Arnica Scorodite', 'Arnica Scorodite'),
('Warfarin Sodium', 'Warfarin Sodium'),
('Stool Softener', 'DOCUSATE SODIUM'),
('Cetirizine Hydrochloride', 'Cetirizine Hydrochloride'),
('Atenolol and Chlorthalidone', 'Atenolol and Chlorthalidone'),
('Metronidazole', 'METRONIDAZOLE'),
('Bite Beauty SPF 15 Sheer Balm', 'Octinoxate Oxybenzone'),
('Ibuprofen IB', 'Ibuprofen'),
('Levothyroxine Sodium', 'Levothyroxine Sodium'),
('Lima Beans', 'Lima Beans'),
('Fluoxetine', 'Fluoxetine Hydrochloride'),
('Glimepiride', 'Glimepiride'),
('Azithromycin Dihydrate', 'azithromycin'),
('Insomnia Nervousness', 'VALERIAN'),
('M-END', 'Codeine Phosphate, Pseudoephedrine Hydrochloride, Brompheniramine Maleate'),
('Dynarex HP 3', 'Hydrogen peroxide'),
('Aveeno Clear Complexion Daily Cleansing', 'Salicylic Acid'),
('Equaline Daytime Nighttime Cold and Flu Relief', 'Acetaminophen, dextromethorphan HBr, doxylamine succinate, phenylephrine HCl'),
('Hemorrhoid Complex', 'Aesculus hippocastanum, Aloe socotrina, Apis mellifica, Bryonia, Calcarea fluorica, Carbo vegetabilis, Causticum, Collinsonia canadensis, Echinacea angustifolia, Hamamelis virginiana, Lycopodium clavatum, Sulphur'),
('Comfort Pac With Cyclobenzaprine', 'Cyclobenzaprine Hydrochloride'),
('Theraprofen-800', 'IBUPROFEN, .GAMMA.-AMINOBUTYRIC ACID'),
('Irbesartan and Hydrochlorothiazide', 'Irbesartan and Hydrochlorothiazide'),
('Nicardipine Hydrochloride', 'nicardipine hydrochloride'),
('Valsartan and Hydrochlorothiazide', 'Valsartan and Hydrochlorothiazide'),
('Paroxetine', 'Paroxetine'),
('SMART SENSE', 'EUCALYPTOL, MENTHOL, METHYLSALICYLATE, THYMOL'),
('Extra Strength Headache Relief', 'Acetaminophen'),
('Hydrochlorothiazide', 'Hydrochlorothiazide'),
('TOPIRAMATE', 'TOPIRAMATE'),
('Premium Sunscreen Broad Spectrum SPF 30', 'AVOBENZONE, HOMOSALATE, OCTISALATE, OCTOCRYLENE'),
('Cotz Lip Balm', 'Titanium Dioxide, Zinc Oxide'),
('Canadian Bluegrass', 'Canadian Bluegrass'),
('Foltrate', 'Folic Acid and Cyanocobalamin'),
('Reed Therapeutics Pain Relieving Therapy', 'Methyl Salicylate, Menthol USP, Camphor'),
('Psorizide Forte', 'Nickel Sulfate, Potassium Bromide, and Fumaric Acid'),
('Aesculus Hipp Kit Refill', 'HORSE CHESTNUT'),
('Anticavity Fluoride Rinse', 'Sodium Fluoride'),
('Suave', 'Pyrithione Zinc'),
('Skin Eruptions', 'SILICON DIOXIDE'),
('Lithium', 'Lithium'),
('LUGOLS SOLUTION', 'LUGOLS'),
('Yves Saint Laurent', 'Octinoxate'),
('EROS SILICONE GLIDE AND CARE', 'DIMETHICONE'),
('PROMACTA', 'eltrombopag olamine'),
('Neomycin and Polymyxin B Sulfates and Hydrocortisone', 'Neomycin sulfate, Polymyxin B Sulfate and Hydrocortisone'),
('Adenosine', 'adenosine'),
('Midazolam', 'Midazolam Hydrochloride'),
('Nikzon', 'PHENYLEPHRINE HYDROCHLORIDE and PRAMOXINE HYDROCHLORIDE'),
('Acetaminophen And Codeine', 'acetaminophen and codeine phosphate'),
('Clopidogrel', 'Clopidogrel'),
('OXYGEN', 'OXYGEN'),
('Rifampin', 'Rifampin'),
('MIRACLE ICE', 'Menthol and Camphor (synthetic)'),
('OB Metab', 'Fucus Vesiculosus, Capsicum Annuum, Nicotinamidum, Spongia Tosta, L-Arginine, Croton Oil, L-Ornithine, Pituitaria Glandula (Suis)'),
('Indigestion With Nausea', 'STROPHANTHUS HISPIDUS SEED'),
('CRESTOR', 'Rosuvastatin calcium'),
('Lexapro', 'Escitalopram oxalate'),
('kirkland signature ibuprofen ib', 'Ibuprofen'),
('Stool Softener', 'Docusate Sodium'),
('MISSHA M SIGNATURE REAL COMPLETE BB', 'Titanium Dioxide, Zinc Oxide'),
('INSTANT HAND SANITIZER', 'ETHYL ALCOHOL'),
('MEDI-DERM TOPICAL PAIN RELIEF', 'METHYL SALICYLATE MENTHOL CAPSAICIN'),
('Hypercalm - Mental Focus', 'Adrenalinum, Tarentula cubensis, Aconitum nap., Arg. nit., Arsenicum alb., Baptisia, Chamomilla, Coffea cruda, Cypripedium, Digitalis, Gelsemium, Humulus, Hyoscyamus, Ignatia, Impatiens glandulifera flos, Iodium, Lachesis, Lycopodium, Nat. mur., Nux vom., Scutellaria lateriflora, Staphysag., Stramonium, Theridion, Veratrum viride, Echinacea, Hypericum, Passiflora'),
('severe cold and sinus relief PE', 'Acetaminophen, Diphenhydramine HCl and Phenylephrine HCl'),
('Atorvastatin Calcium', 'atorvastatin calcium'),
('FANAPT', 'Iloperidone'),
('METFORMIN HYDROCHLORIDE', 'METFORMIN HYDROCHLORIDE'),
('Leader ibuprofen', 'Ibuprofen'),
('Fusarium compactum', 'Fusarium compactum'),
('ERYTHROMYCIN', 'Erythromycin');

-- --------------------------------------------------------

--
-- Table structure for table `shop_pic`
--

CREATE TABLE IF NOT EXISTS `shop_pic` (
  `user_name` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_pic`
--

INSERT INTO `shop_pic` (`user_name`, `file`, `type`, `size`) VALUES
('CR17', '80320-anonymous-guy-fawkes.png', 'image/png', 882),
('daa', '56301-anonymous-guy-fawkes.png', 'image/png', 882),
('dda', '96012-anonymous-guy-fawkes.png', 'image/png', 882),
('ddnat', '20336-guy-fawkes.jpg', 'image/jpeg', 178),
('DR17', '57802-anonymous-guy-fawkes.png', 'image/png', 882),
('dsas', '81305-anonymous-guy-fawkes.png', 'image/png', 882),
('farah', '69196-guy-fawkes.jpg', 'image/jpeg', 178),
('jordan', '49128-guy-fawkes.jpg', 'image/jpeg', 178),
('polly', '2123-guy-fawkes.jpg', 'image/jpeg', 178),
('Rocker', '44817-anonymous-guy-fawkes.png', 'image/png', 882),
('sam261', '60654-anonymous-guy-fawkes.png', 'image/png', 882),
('shiva', '81522-anonymous-guy-fawkes.png', 'image/png', 882),
('shivaa', '63223-guy-fawkes.jpg', 'image/jpeg', 178),
('Vijay Bhaskar', '79707-anonymous-guy-fawkes.png', 'image/png', 882);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `user_name` varchar(20) NOT NULL,
  `medicines` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`user_name`, `medicines`) VALUES
('System', 'Paracetamaul	'),
('System', 'Calpaul	'),
('System1', 'Combiflame'),
('System', 'X'),
('System', 'SHUBHAM'),
('System', 'ABC'),
('System', 'ABCDEFGH'),
('System', 'ABCDEFGH'),
('System', 'DEFGH'),
('System', 'Corocil'),
('System', 'Ascoril'),
('System1', 'Bicasool'),
('Ranger11', 'Paracetamol'),
('Ranger11', 'Combiflam'),
('Ranger11', 'Plamolive'),
('Ranger11', 'Dolopar'),
('System', 'Dexorange'),
('System', 'Chloroform'),
('System', 'XYZ'),
('System1', 'Tamarine'),
('sam261', 'Paracetamol'),
('sam261', 'Dolopar'),
('sam261', 'Combiflam'),
('DR17', 'Paracetamol'),
('sam261', 'Strepsils'),
('farah', 'Paracetamol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `liscence`
--
ALTER TABLE `liscence`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `liscence_no` (`liscence_no`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `User_name` (`user_name`);

--
-- Indexes for table `shop_pic`
--
ALTER TABLE `shop_pic`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `user_name` (`user_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

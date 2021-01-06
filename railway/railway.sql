-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 07:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `pnr` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `train_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `seat` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `quota` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`pnr`, `p_id`, `train_no`, `date`, `seat`, `class`, `quota`, `price`) VALUES
(123456954, 'keshav1234', 12424, '2020-06-16', 2, '3A', 'GENERAL', 900),
(123456955, 'Achaani', 12360, '2020-06-25', 1, '3A', 'LADIES', 1050),
(123456962, 'keshav425', 12356, '2020-07-31', 5, '1A', 'GENERAL', 7594);

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `pnr` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `train_no` int(11) NOT NULL,
  `seat` int(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `quota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `mobile_no` int(30) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`mobile_no`, `name`, `email`, `message`) VALUES
(2147483647, 'keshav', 'keshav2@gmail.com', 'THANX FOR WISITING MY WEBSITE');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `p_id` varchar(20) NOT NULL,
  `pnr` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `gender` char(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`p_id`, `pnr`, `name`, `gender`, `age`) VALUES
('keshav425', 0, 'keshav', 'Male', 21),
('keshav425', 0, 'anita', 'Female', 29),
('keshav425', 0, 'anjali', 'Female', 30),
('keshav425', 0, 'geeta devi', 'Female', 40),
('keshav425', 0, 'narayan sharma', 'Male', 45),
('keshav425', 123456962, 'anita', 'Female', 29),
('keshav425', 123456962, 'anjali', 'Female', 30),
('keshav425', 123456962, 'keshav', 'Male', 21),
('keshav425', 123456962, 'geeta devi', 'Female', 40),
('keshav425', 123456962, 'narayan sharma', 'Male', 45);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_no` int(11) NOT NULL,
  `T_name` varchar(20) NOT NULL,
  `source` char(20) NOT NULL,
  `destination` char(20) NOT NULL,
  `seat` int(11) NOT NULL,
  `fair` int(11) NOT NULL,
  `status` char(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `T_name`, `source`, `destination`, `seat`, `fair`, `status`) VALUES
(12345, 'rajdhani-exp', 'delhi', 'varanasi', 497, 900, 'active'),
(12346, 'rajdhani-exp', 'varanasi', 'delhi', 500, 900, 'active'),
(12347, 'swatantra-senani-exp', 'lucknow', 'varanasi', 402, 700, 'active'),
(12348, 'swatantra-senani-exp', 'varanasi', 'lucknow', 400, 700, 'active'),
(12349, 'entercity-exp', 'gorakhpur', 'varanasi', 300, 400, 'active'),
(12350, 'entercity-exp', 'varanasi', 'gorakhpur', 300, 400, 'active'),
(12351, 'jbp-vns-exp', 'jabalpur', 'varanasi', 300, 700, 'active'),
(12352, 'jbp-vns-exp', 'varanasi', 'jabalpur', 300, 700, 'active'),
(12353, 'goa-vns-exp', 'goa', 'varanasi', 200, 300, 'active'),
(12354, 'goa-vns-exp', 'varanasi', 'goa', 200, 300, 'active'),
(12355, 'Sameer-express', 'Gorakhpur', 'Varanasi', 250, 450, 'active'),
(12356, 'Sameer-express', 'Varanasi', 'Gorakhpur', 245, 450, 'active'),
(12357, 'Pooja-express', 'Gorakhpur', 'Varanasi', 260, 550, 'active'),
(12358, 'Pooja-express', 'Varanasi', 'Gorakhpur', 260, 550, 'active'),
(12359, 'Ananya-express', 'Gorakhpur', 'Varanasi', 300, 700, 'active'),
(12360, 'Ananya-express', 'Varanasi', 'Gorakhpur', 299, 700, 'active'),
(12361, 'Pathankot - Delhi SF', 'Punjab', 'Delhi', 200, 400, 'active'),
(12362, 'Amritsar - Kochuveli', 'Punjab', 'Delhi', 200, 350, 'active'),
(12363, 'Sachkhand Express', 'Punjab', 'Delhi', 200, 300, 'active'),
(12364, 'ASR HWH Mail', 'Punjab', 'Lucknow', 200, 300, 'active'),
(12365, 'SHC Garib Rath', 'Punjab', 'Lucknow', 200, 700, 'active'),
(12366, 'Saryuyamuna Express', 'Punjab', 'Lucknow', 200, 500, 'active'),
(12367, 'Jalianwala B Express', 'Punjab', 'Varanasi', 200, 700, 'active'),
(12368, 'Durgiana Express', 'Punjab', 'Varanasi', 200, 600, 'active'),
(12369, 'DBRG ASR Express', 'Punjab', 'Varanasi', 200, 600, 'active'),
(12370, 'Amritsar - Kochuveli', 'Punjab', 'Mumbai', 200, 700, 'active'),
(12371, 'Amritsar - Mumbai CS', 'Punjab', 'Mumbai', 200, 800, 'active'),
(12372, 'Golden Temple Mail (', 'Punjab', 'Mumbai', 200, 850, 'active'),
(12373, 'SHC Garib Rath', 'Punjab', 'Gorakhpur', 200, 1000, 'active'),
(12374, 'Lohit Express ', 'Punjab', 'Gorakhpur', 200, 700, 'active'),
(12375, 'Amarnath Express', 'Punjab', 'Gorakhpur', 200, 800, 'active'),
(12376, 'Darshan Express ', 'Mumbai', 'Delhi', 200, 900, 'active'),
(12377, 'Mumbai Rajdhani', 'Mumbai', 'Delhi', 200, 800, 'active'),
(12378, 'BDTS JAT Ac Special', 'Mumbai', 'Delhi', 200, 1000, 'active'),
(12379, 'Swaraj Express ', 'Mumbai', 'Punjab', 200, 700, 'active'),
(12380, 'Jammu Tawi Special  ', 'Mumbai', 'Punjab', 200, 800, 'active'),
(12381, 'Vivek Express', 'Mumbai', 'Punjab', 200, 600, 'active'),
(12382, 'Varanasi Junction Pr', 'Mumbai', 'Varanasi', 200, 1700, 'active'),
(12383, 'Lokmanyatilak Termin', 'Mumbai', 'Varanasi', 200, 2500, 'active'),
(12384, 'Darbhanga Express', 'Mumbai', 'Varanasi', 200, 1500, 'active'),
(12385, 'Udyog Nagri Express', 'Mumbai', 'Lucknow', 200, 1200, 'active'),
(12386, 'Lucknow Superfast Ex', 'Mumbai', 'Lucknow', 200, 1700, 'active'),
(12387, 'Lokmanyatilak Termin', 'Mumbai', 'Lucknow', 200, 2500, 'active'),
(12388, 'Gorakhpur Junction P', 'Mumbai', 'Gorakhpur', 200, 1700, 'active'),
(12389, 'Gorakhpur Junction P', 'Mumbai', 'Gorakhpur', 200, 2700, 'active'),
(12390, 'Bandra Terminus Gora', 'Mumbai', 'Gorakhpur', 200, 2000, 'active'),
(12391, 'MUMBAI RAJDHANI', 'Delhi', 'Mumbai', 200, 1700, 'active'),
(12392, 'NZM TVC Superfast Ex', 'Mumbai', 'Delhi', 200, 2200, 'active'),
(12393, 'NZM ERS Duronto', 'Delhi', 'Mumbai', 200, 1500, 'active'),
(12394, 'Kashi Vishwanath Exp', 'Delhi', 'Varanasi', 196, 1200, 'active'),
(12395, 'Neelachal (Neelancha', 'Delhi', 'Varanasi', 200, 800, 'active'),
(12396, 'Amrapali Express', 'Delhi', 'Varanasi', 200, 600, 'active'),
(12397, 'Sapt Kranti Express', 'Delhi', 'Gorakhpur', 200, 700, 'active'),
(12398, 'Gorakhpur Junction P', 'Delhi', 'Gorakhpur', 200, 800, 'active'),
(12399, 'Anand Vihar Trm Gora', 'Delhi', 'Gorakhpur', 200, 900, 'active'),
(12400, 'Bhagat Ki Kothi - Ka', 'Delhi', 'Lucknow', 200, 700, 'active'),
(12401, 'New Delhi - Lucknow ', 'Delhi', 'Lucknow', 200, 600, 'active'),
(12402, 'Gomti Express Specia', 'Delhi', 'Lucknow', 200, 900, 'active'),
(12403, 'Amrapali Express (PT', 'Delhi', 'Punjab', 200, 400, 'active'),
(12404, 'Saryu Yamuna Express', 'Delhi', 'Punjab', 200, 900, 'active'),
(12405, 'Shan-e-Punjab Expres', 'Delhi', 'Punjab', 200, 200, 'active'),
(12406, 'Delhi Expres', 'Delhi', 'Lucknow', 200, 700, 'active'),
(12407, 'Padmavati Expres', 'Delhi', 'Lucknow', 200, 700, 'active'),
(12408, 'Vaishali Expres', 'Delhi', 'Lucknow', 200, 700, 'active'),
(12409, 'Rajdhani Expres', 'Delhi', 'Varanasi', 250, 750, 'active'),
(12410, 'Kashi Expres', 'Delhi', 'Varanasi', 200, 800, 'active'),
(12411, 'Vaishali Expres', 'Delhi', 'Varanasi', 200, 900, 'active'),
(12412, 'Amritsar Shatabdi', 'Delhi', 'Punjab', 250, 750, 'active'),
(12413, 'KIR ASR Expres', 'Delhi', 'Punjab', 200, 800, 'active'),
(12414, 'JAB Atari Special', 'Delhi', 'Punjab', 200, 900, 'active'),
(12415, 'Mumbai Rajdhani', 'Delhi', 'Mumbai', 250, 700, 'active'),
(12416, 'Trivndrm Rajdhani', 'Delhi', 'Mumbai', 200, 600, 'active'),
(12417, 'JAB Atari Special', 'Delhi', 'Mumbai', 200, 500, 'active'),
(12418, 'UDZ NJP Express', 'Delhi', 'Ghorakhpur', 250, 700, 'active'),
(12419, 'MFP Garib Rath', 'Delhi', 'Ghorakhpur', 200, 900, 'active'),
(12420, 'Vaishali Express', 'Delhi', 'Ghorakhpur', 200, 800, 'active'),
(12421, 'K V Expres', 'Lucknow', 'Delhi', 200, 700, 'active'),
(12422, 'Padmavati Expres', 'Lucknow', 'Delhi', 200, 700, 'active'),
(12423, 'Vaishali Expres', 'Lucknow', 'Delhi', 200, 700, 'active'),
(12424, 'HW Expres', 'Lucknow', 'Varanasi', 198, 300, 'active'),
(12425, 'Upasana Expres', 'Lucknow', 'Varanasi', 197, 400, 'active'),
(12426, 'Sarmjevi Exp', 'Lucknow', 'Varanasi', 200, 350, 'active'),
(12427, 'Amritsar Expres', 'Lucknow', 'Punjab', 200, 900, 'active'),
(12428, 'Garib Rath Expres', 'Lucknow', 'Punjab', 200, 1000, 'active'),
(12429, 'Akal Takht Exp', 'Lucknow', 'Punjab', 200, 1050, 'active'),
(12430, 'Ramnagar BT Expres', 'Lucknow', 'Mumbai', 200, 900, 'active'),
(12431, 'GJBT Special', 'Lucknow', 'Mumbai', 200, 1000, 'active'),
(12432, 'BMCst Special', 'Lucknow', 'Mumbai', 200, 1050, 'active'),
(12433, 'Pune GKP Expres', 'Lucknow', 'Gorakhpur', 200, 900, 'active'),
(12434, 'GJBT Special', 'Lucknow', 'Gorakhpur', 200, 600, 'active'),
(12435, 'Bihar SK', 'Lucknow', 'Gorakhpur', 200, 500, 'active'),
(12436, 'Dibrugarh Expres', 'Varanasi', 'Delhi', 250, 750, 'active'),
(12437, 'Poorav Expres', 'Varanasi', 'Delhi', 200, 800, 'active'),
(12438, 'Sharmjeevi Expres', 'Varanasi', 'Delhi', 200, 900, 'active'),
(12439, 'Dwarka Expres', 'Varanasi', 'Lucknow', 250, 250, 'active'),
(12440, 'Poorav Expres', 'Varanasi', 'Lucknow', 200, 200, 'active'),
(12441, 'Neelachal Expres', 'Varanasi', 'Lucknow', 200, 300, 'active'),
(12442, 'Amritsar Expres', 'Varanasi', 'Punjab', 250, 1050, 'active'),
(12443, 'Amritsar Daily', 'Varanasi', 'Punjab', 200, 1000, 'active'),
(12444, 'Akal Takht Expres', 'Varanasi', 'Punjab', 200, 1300, 'active'),
(12445, 'Mahanagri Expres', 'Varanasi', 'Mumbai', 250, 1050, 'active'),
(12446, 'Kamayani Expres', 'Varanasi', 'Mumbai', 200, 1000, 'active'),
(12447, 'Suvidh Special', 'Varanasi', 'Mumbai', 200, 1300, 'active'),
(12448, 'MUV MFP Expres', 'Varanasi', 'Gorakhpur', 250, 750, 'active'),
(12449, 'SHM GKP Expres', 'Varanasi', 'Gorakhpur', 200, 900, 'active'),
(12450, 'Gorakhpur Special', 'Varanasi', 'Gorakhpur', 200, 800, 'active'),
(12451, 'Saharsa - Amritsar G', 'Gorakhpur', 'Lucknow', 200, 700, 'active'),
(12452, 'Chhapra Kacheri - Lu', 'Gorakhpur', 'Lucknow', 200, 700, 'active'),
(12453, 'Gorakhpur - Lucknow ', 'Gorakhpur', 'Lucknow', 200, 700, 'active'),
(12454, 'Kashi Express (PT)', 'Gorakhpur', 'Varanasi', 200, 700, 'active'),
(12455, 'Bapudham SF Express', 'Gorakhpur', 'Varanasi', 200, 700, 'active'),
(12456, 'Krishak Express', 'Gorakhpur', 'Varanasi', 200, 700, 'active'),
(12457, 'Saharsa - Amritsar G', 'Gorakhpur', 'Delhi', 200, 700, 'active'),
(12458, 'Kamakhya - Anand Vih', 'Gorakhpur', 'Delhi', 200, 700, 'active'),
(12459, 'Vaishali SF Expres', 'Gorakhpur', 'Delhi', 200, 700, 'active'),
(12460, 'Gorakhpur Junction L', 'Gorakhpur', 'Mumbai', 200, 700, 'active'),
(12461, 'Gorakhpur Junction L', 'Gorakhpur', 'Mumbai', 200, 700, 'active'),
(12462, 'Avadh Express', 'Gorakhpur', 'Mumbai', 200, 700, 'active'),
(12463, 'Saharsa - Amritsar G', 'Gorakhpur', 'Punjab', 200, 700, 'active'),
(12464, 'Padmavati Express', 'Gorakhpur', 'Punjab', 200, 700, 'active'),
(12465, 'Guwahati - Jammu-exp', 'Gorakhpur', 'Punjab', 200, 700, 'active'),
(12466, 'Lucknow Mail', 'Delhi', 'Lucknow', 200, 700, 'cancel'),
(12467, 'Lucknow Nr New Delhi', 'Delhi', 'Lucknow', 200, 700, 'cancel'),
(12468, 'kashi v express', 'Delhi', 'Varanasi', 250, 750, 'cancel'),
(12469, 'shramjevi n express ', 'Delhi', 'Varanasi', 200, 800, 'cancel'),
(12470, 'jaisalmer howrah exp', 'Delhi', 'Varanasi', 200, 900, 'cancel'),
(12471, 'NED ASR Superfast Ex', 'Delhi', 'Punjab', 250, 750, 'cancel'),
(12472, 'VSKP ASR HKG Express', 'Delhi', 'Punjab', 200, 800, 'cancel'),
(12473, 'Ndlsasr Express', 'Delhi', 'Punjab', 200, 900, 'cancel'),
(12474, 'New Delhi Tvc Ac Spe', 'Delhi', 'Mumbai', 200, 600, 'cancel'),
(12475, 'Mumbai Rajdhani', 'Delhi', 'Mumbai', 200, 500, 'cancel'),
(12476, 'Sapt Kranti Express', 'Delhi', 'Ghorakhpur', 250, 700, 'cancel'),
(12477, 'Gorakhpur Junction S', 'Delhi', 'Ghorakhpur', 200, 900, 'cancel'),
(12478, 'Muzaffarpur Junction', 'Delhi', 'Ghorakhpur', 200, 800, 'cancel'),
(12479, 'ARUNACHAL EXP', 'Lucknow', 'Delhi', 200, 700, 'cancel'),
(12480, 'ANVT HUMSAFAR', 'Lucknow', 'Delhi', 200, 700, 'cancel'),
(12481, 'CHAMPARAN HUMSFR', 'Lucknow', 'Delhi', 200, 700, 'cancel'),
(12482, 'NDLS DBRT RJDHNI', 'Lucknow', 'Varanasi', 200, 300, 'cancel'),
(12483, 'ASR KOAA SUP EXP', 'Lucknow', 'Varanasi', 200, 400, 'cancel'),
(12484, 'NLDM KOAA EXP', 'Lucknow', 'Varanasi', 200, 350, 'cancel'),
(12485, 'NDLS DBRT RJDHNI', 'Lucknow', 'Punjab', 200, 900, 'cancel'),
(12486, 'Garib Rath Expres', 'Lucknow', 'Punjab', 200, 1000, 'cancel'),
(12487, 'ASR KOAA SUP EXP', 'Lucknow', 'Punjab', 200, 1050, 'cancel'),
(12488, 'ASR KOAA SUP EXP', 'Lucknow', 'Mumbai', 200, 900, 'cancel'),
(12489, 'PUSHPAK EXP', 'Lucknow', 'Mumbai', 200, 1000, 'cancel'),
(12490, 'KUSHINAGAR EXP', 'Lucknow', 'Mumbai', 200, 1050, 'cancel'),
(12491, 'ARUNACHAL EXP', 'Lucknow', 'Gorakhpur', 200, 900, 'cancel'),
(12492, 'GORAKDAM EXPRES', 'Lucknow', 'Gorakhpur', 200, 600, 'cancel'),
(12493, 'VAISHALI EXP', 'Lucknow', 'Gorakhpur', 200, 500, 'cancel'),
(12494, 'Neelachal Express', 'Varanasi', 'Delhi', 250, 750, 'cancel'),
(12495, 'Nfk New Delhi Expres', 'Varanasi', 'Delhi', 200, 800, 'cancel'),
(12496, 'Guwahati New Delhi S', 'Varanasi', 'Delhi', 200, 900, 'cancel'),
(12497, 'Chhapra-Lucknow Jn. ', 'Varanasi', 'Lucknow', 250, 250, 'cancel'),
(12498, 'Upasana Express (PT)', 'Varanasi', 'Lucknow', 200, 200, 'cancel'),
(12499, 'Chandigarh SF Expres', 'Varanasi', 'Lucknow', 200, 300, 'cancel'),
(12500, 'JALLIANWALA BAGH EXP', 'Varanasi', 'Punjab', 250, 1050, 'cancel'),
(12501, 'DBRG ASR EXPRESS', 'Varanasi', 'Punjab', 200, 1000, 'cancel'),
(12502, 'DURGIANA EXP', 'Varanasi', 'Punjab', 200, 1300, 'cancel'),
(12503, 'MAU LTT Special', 'Varanasi', 'Mumbai', 200, 1000, 'cancel'),
(12504, 'MFP LTT Special', 'Varanasi', 'Mumbai', 200, 1300, 'cancel'),
(12505, 'CHAURICHAURAEXP ', 'Varanasi', 'Gorakhpur', 250, 750, 'cancel'),
(12506, 'MANDUADIH EXP ', 'Varanasi', 'Gorakhpur', 200, 900, 'cancel'),
(12507, ' SHALIMAR GORAKHPUR ', 'Varanasi', 'Gorakhpur', 200, 800, 'cancel'),
(12508, 'Anand Vihar Special', 'Gorakhpur', 'Lucknow', 200, 700, 'cancel'),
(12509, 'Rapti Sagar Express', 'Gorakhpur', 'Lucknow', 200, 700, 'cancel'),
(12510, 'Gorakdam Express', 'Gorakhpur', 'Lucknow', 200, 700, 'cancel'),
(12511, 'Krishak Express', 'Gorakhpur', 'Varanasi', 200, 700, 'cancel'),
(12512, 'Nautanwa - Durg Expr', 'Gorakhpur', 'Varanasi', 200, 700, 'cancel'),
(12513, 'Chauri Chaura Expres', 'Gorakhpur', 'Varanasi', 200, 700, 'cancel'),
(12514, 'Garib Rath Express', 'Gorakhpur', 'Delhi', 200, 700, 'cancel'),
(12515, 'Bihar S Kranti', 'Gorakhpur', 'Delhi', 200, 700, 'cancel'),
(12516, 'Vaishali Express', 'Gorakhpur', 'Delhi', 200, 700, 'cancel'),
(12517, 'Kushinagar Express', 'Gorakhpur', 'Mumbai', 200, 700, 'cancel'),
(12518, 'GODAN EXPRESS', 'Gorakhpur', 'Mumbai', 200, 700, 'cancel'),
(12519, 'GKP LTT EXP', 'Gorakhpur', 'Mumbai', 200, 700, 'cancel'),
(12520, 'Amrapali Express (PT', 'Gorakhpur', 'Punjab', 200, 700, 'cancel'),
(12521, 'Jan Sadharan Express', 'Gorakhpur', 'Punjab', 200, 700, 'cancel'),
(12522, 'Garib Rath Express', 'Gorakhpur', 'Punjab', 200, 700, 'cancel'),
(12523, 'SAHARSA - AMRITSAR G', 'Punjab', 'Lucknow', 200, 300, 'cancel'),
(12524, 'DIBRUGARH - AMRITSAR', 'Punjab', 'Lucknow', 200, 700, 'cancel'),
(12525, 'AMRITSAR Jallianwala', 'Punjab', 'Lucknow', 200, 500, 'cancel'),
(12526, 'Akal Takht Express', 'Punjab', 'Varanasi', 200, 700, 'cancel'),
(12527, 'Amritsar Mail', 'Punjab', 'Varanasi', 200, 600, 'cancel'),
(12528, 'ASR KCVL EXPRESS', 'Punjab', 'Mumbai', 200, 700, 'cancel'),
(12529, 'PASCHIM EXPRESS', 'Punjab', 'Mumbai', 200, 800, 'cancel'),
(12530, 'GOLDN TEMPLE ML', 'Punjab', 'Mumbai', 200, 850, 'cancel'),
(12531, 'Shaheed Express', 'Punjab', 'Gorakhpur', 200, 800, 'cancel'),
(12532, 'Malwa Express', 'Mumbai', 'Delhi', 200, 800, 'cancel'),
(12533, 'Shane Punjab', 'Mumbai', 'Delhi', 200, 1000, 'cancel'),
(12534, 'PASCHIM EXPRESS ', 'Mumbai', 'Punjab', 200, 700, 'cancel'),
(12535, 'GOLDENTEMPLE ML', 'Mumbai', 'Punjab', 200, 800, 'cancel'),
(12536, 'AMRITSAR EXP', 'Mumbai', 'Punjab', 200, 600, 'cancel'),
(12537, 'Mahanagari Express', 'Mumbai', 'Varanasi', 200, 1700, 'cancel'),
(12538, 'Teachers Special', 'Mumbai', 'Varanasi', 200, 2500, 'cancel'),
(12539, 'Kamayani Express', 'Mumbai', 'Varanasi', 200, 1500, 'cancel'),
(12540, 'Kushinagar Express', 'Mumbai', 'Lucknow', 200, 1200, 'cancel'),
(12541, 'BDTS LJN Express', 'Mumbai', 'Lucknow', 200, 1700, 'cancel'),
(12542, 'LTT GKP Superfast Ex', 'Mumbai', 'Lucknow', 200, 2500, 'cancel'),
(12543, 'Avadh Express', 'Mumbai', 'Gorakhpur', 200, 1700, 'cancel'),
(12544, 'GODAN EXPRESS', 'Mumbai', 'Gorakhpur', 200, 2700, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `p_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` char(20) NOT NULL,
  `mid_name` char(20) DEFAULT NULL,
  `last_name` char(20) NOT NULL,
  `gender` char(20) NOT NULL,
  `DOB` date NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `city` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`p_id`, `password`, `first_name`, `mid_name`, `last_name`, `gender`, `DOB`, `mobile`, `email`, `city`) VALUES
('Achaani', '123456789A', 'Anita', '', 'Acharya', 'female', '1995-01-18', 2147483647, 'mailme8anu@gmail.com', 'Banglore'),
('keshav1234', 'password', 'KESHAV', '', 'SHARMA', 'male', '1997-09-21', 1234567891, 'keshav425@gmail.com', 'VARANASI'),
('keshav425', 'password', 'keshav', '', 'sharma', 'Male', '2020-04-15', 575, 'sharmakeshav425@gmai', 'varanasi'),
('keshav435', 'pass', 'keshav', '', 'sharma', 'Male', '2020-04-16', 45, 'sharmakeshav425@gmai', 'varanasi'),
('keshav4355', 'wer', 'keshav', '', 'sharma', 'Male', '2020-04-15', 575, 'sharmakeshav425@gmai', 'varanasi'),
('sharma425', 'pass', 'keshav', '', 'sharma', 'Male', '2020-04-23', 475, 'sharmakeshav425@gmai', 'varanasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `train_book` (`train_no`),
  ADD KEY `user_book` (`p_id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD KEY `train_cancel` (`train_no`),
  ADD KEY `user_cancel` (`p_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `pnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456966;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `train_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12545;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `train_book` FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_book` FOREIGN KEY (`p_id`) REFERENCES `user` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cancel`
--
ALTER TABLE `cancel`
  ADD CONSTRAINT `train_cancel` FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cancel` FOREIGN KEY (`p_id`) REFERENCES `user` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

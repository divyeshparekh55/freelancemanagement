-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 08:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `password`) VALUES
(1, 'Divyesh', 'Parekh', 'divyeshparekh@123');

-- --------------------------------------------------------

--
-- Table structure for table `image_record`
--

CREATE TABLE `image_record` (
  `id` bigint(255) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `business_id` varchar(200) NOT NULL,
  `analysis_year` varchar(200) NOT NULL,
  `branch_location1` varchar(200) NOT NULL,
  `branch_location2` varchar(200) NOT NULL,
  `branch_location3` varchar(200) NOT NULL,
  `branch_location4` varchar(200) NOT NULL,
  `branch_location5` varchar(200) NOT NULL,
  `branch_location6` varchar(200) NOT NULL,
  `file_number` varchar(200) NOT NULL,
  `accountant_id` varchar(200) NOT NULL,
  `stackholder` varchar(200) NOT NULL,
  `cash_equivalents` varchar(200) NOT NULL,
  `invtory` varchar(200) NOT NULL,
  `total_current_assets` varchar(200) NOT NULL,
  `net_fixed_assets` varchar(200) NOT NULL,
  `other_non_current_assets` varchar(200) NOT NULL,
  `trade_accounts_receivable` varchar(200) NOT NULL,
  `other_current_assets` varchar(200) NOT NULL,
  `long_term_investments` varchar(200) NOT NULL,
  `intangible_assets` varchar(200) NOT NULL,
  `total_asstes` varchar(200) NOT NULL,
  `assign_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_record`
--

INSERT INTO `image_record` (`id`, `serial_number`, `business_id`, `analysis_year`, `branch_location1`, `branch_location2`, `branch_location3`, `branch_location4`, `branch_location5`, `branch_location6`, `file_number`, `accountant_id`, `stackholder`, `cash_equivalents`, `invtory`, `total_current_assets`, `net_fixed_assets`, `other_non_current_assets`, `trade_accounts_receivable`, `other_current_assets`, `long_term_investments`, `intangible_assets`, `total_asstes`, `assign_id`) VALUES
(1, 'H0dhA4nFfnA7D48B', 'aedrk5s/83y4/pih26h9170ve/', '1986', '3466 Schmitt Turnpike Apt. 997\nLexiville, AL 41037', '97193 Burley Gateway Suite 223\nWest Amirberg, DE 82585-6950', '247 Daisha Club\nLake Hardyberg, ND 28216', '30369 Beverly Ridges Apt. 479\nSchuppeborough, GA 09966', '4066 Makayla Common Suite 090\nNorth Marvin, MN 88814-9073', '7666 Schowalter Via Suite 692\nHoldenshire, WI 10417-7805', 'gajab-41816', '540868445', '', 'USD0773.00', 'USD6941.00', 'USD1680.00', 'USD5209.00', 'USD2792.00', 'USD9860.00', 'USD3157.00', 'USD8200.00', 'USD4441.00', 'USD5890.00', '0'),
(2, '8AdBD4fHFh7nn0A4', '/5d9/1s/vei7ph846yah02erk3', '2002', '82030 Okey Neck Apt. 285\nDestinyfort, AZ 98279', '73090 Euna Harbor\nRosenbaumbury, MI 49658-5737', '31024 Leann Trace\nWest Chad, ME 29278', '657 Lucious Stravenue\nEast Lonny, NH 96457-5667', '969 Blick Expressway Suite 863\nNorth Clairestad, NY 12529-9824', '75420 Destini Prairie Apt. 352\nLake Maverick, NE 98504-0811', 'tvfbr-83477', '866764743965', '', 'USD4429.00', 'USD8459.00', 'USD5917.00', 'USD5192.00', 'USD0307.00', 'USD7926.00', 'USD8447.00', 'USD1258.00', 'USD9352.00', 'USD9142.00', '0'),
(3, 'A4DBhnFd4Hn708fA', 'vk81epr9//es2/50y73dahh4i6', '1989', '9401 Emelia Terrace\nLake Tayamouth, ME 41225', '415 Harris Plains\nCindyburgh, MT 05513', '50870 Kailey Ports\nEast Abelhaven, IL 13732-8305', '71141 Harris Fort Suite 268\nHeidenreichmouth, KY 10662', '80934 Elenora Fork Suite 056\nDagmarville, CA 35936-0630', '457 Isidro Gateway\nWest Destiney, WA 12902', 'fshkx-14459', '093561876', 'a:12:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";i:7;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4085321976\";i:2;s:16:\"Lucienn', 'USD3077.00', 'USD8612.00', 'USD0203.00', 'USD7822.00', 'USD5970.00', 'USD6118.00', 'USD8282.00', 'USD0936.00', 'USD2065.00', 'USD7951.00', '0'),
(4, 'dBnH4DAnF0hA74f8', 'h63hd//40k9vsae8yrep/721i5', '2019', '4665 Estella Club Apt. 562\nSouth Lavern, IA 15366-6095', '3669 Marley Dam Apt. 410\nModestaton, MI 57455', '476 Hyatt Square\nLake Sylvanfurt, SC 68740', '366 Lindsey Loaf Suite 375\nNorth Lenora, NJ 94935-7713', '994 Ritchie Club Apt. 461\nEast Rachelle, ID 51274-1690', '83023 Stevie Bridge\nJakubowskistad, ND 77195', 'hivlj-91829', '448582802228', 'Array', 'USD7498.00', 'USD9162.00', 'USD9017.00', 'USD2862.00', 'USD2370.00', 'USD9602.00', 'USD4189.00', 'USD9428.00', 'USD9262.00', 'USD1807.00', '0'),
(5, '4784fAHD0BnFhnAd', '/261h578pa4rdky/esh/ve3i90', '1970', '1141 Wolf Union\nMakaylafurt, SD 00417-5004', '7489 Emmerich Shoals Apt. 866\nNew Savionmouth, IL 76498-9280', '38969 Howe Harbor Suite 863\nSouth Alessia, HI 47988', '411 Mellie Cove Apt. 431\nJeromystad, NV 53951-2025', '66713 Okuneva Fords\nHyattfurt, CT 63567', '57770 Danyka Forges\nTorphyborough, IL 99583', 'yhzrh-51385', '24074279399', 'a:12:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";i:7;a:8:{i:0;s:1:\"1\";i:1;s:10:\"3194876052\";i:2;s:13:\"Newton ', 'USD0030.00', 'USD8603.00', 'USD6020.00', 'USD1259.00', 'USD4497.00', 'USD6979.00', 'USD1414.00', 'USD9875.00', 'USD5761.00', 'USD5803.00', '0'),
(6, 'DAn8fBh4Hn0AF47d', 'ie9/1d7h20v/ky6/4rs85ea3hp', '2003', '315 Jeanie Rapids Suite 929\nPort Ceasarstad, RI 42170-8829', '932 Schulist Circle Apt. 110\nSofiashire, OH 97558', '36150 Koch Forge Suite 374\nWest Tessie, TX 03347', '1510 Willms Lane\nJalonville, WY 89031-2139', '4830 Frederic Prairie\nDeloreshaven, IL 48561', '547 Jacobs Circles Apt. 872\nNew Lupemouth, AL 59663', 'cmkgt-44166', '9886882876', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8245913607\";i:2;s:11', 'USD7056.00', 'USD9236.00', 'USD9879.00', 'USD7778.00', 'USD0834.00', 'USD4805.00', 'USD3534.00', 'USD9933.00', 'USD0521.00', 'USD9131.00', '0'),
(7, 'dHBfA80nDnF4h4A7', '61798vi3/25/hhsypr0k/aeed4', '1995', '3238 Brian Stream Apt. 787\nMaudberg, WY 43358', '652 Ardella Fort Suite 177\nLockmanside, CO 66839-9502', '67626 Leif Course Suite 181\nNew Aurelio, GA 34535', '584 Davis Springs\nMabellefort, FL 70156', '502 Jacobson Road Apt. 259\nSouth Josiannebury, MI 68612-6116', '2235 Montana Rapids Apt. 887\nKreigerland, AZ 34651', 'dolqb-04511', '29947996772038', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"2548930167\";i:2;s:16', 'USD5460.00', 'USD0012.00', 'USD9970.00', 'USD9889.00', 'USD0660.00', 'USD5105.00', 'USD9374.00', 'USD7126.00', 'USD5523.00', 'USD1228.00', '0'),
(8, 'dB847nfn4Dh0HAAF', '590sdih6h///r243kev8a1yp7e', '2017', '482 Halie Falls Suite 690\nDenesiktown, MS 52569-8527', '397 Elta Drives\nNorth Samview, OR 01645-7603', '5776 Vivianne Knoll\nSouth Piperside, LA 06864', '47265 Rocio Prairie\nMaggioberg, OR 59689', '365 Boris Tunnel\nEast Florencioport, NM 39474-6415', '332 Josianne Mountain\nDawsonfort, CT 45725', 'hwiob-96777', '592068937310721', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"7021648935\";i:2;s:11', 'USD1014.00', 'USD1449.00', 'USD5542.00', 'USD7821.00', 'USD7558.00', 'USD4515.00', 'USD8133.00', 'USD1603.00', 'USD0301.00', 'USD7308.00', '0'),
(9, '7dn80BhFDfA4nHA4', '1h/482d3iahrvp//esy7k509e6', '2008', '27470 Schamberger Falls Suite 062\nTillmantown, MA 70527-9312', '92796 Mitchell Shoal Apt. 645\nElizabethburgh, WI 07342', '85914 Rossie Trace Apt. 884\nGeorgetteton, OH 83249-3346', '5845 Hal Dale Suite 647\nPort Stanton, CO 73232', '4852 Towne Isle Suite 587\nEffertzfort, SC 90546-2950', '4694 Koelpin Way\nPort Janiceshire, NH 48102', 'hyzbk-28315', '72359782', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"5796018423\";i:2;s:12', 'USD7075.00', 'USD4267.00', 'USD2470.00', 'USD9556.00', 'USD4864.00', 'USD6798.00', 'USD8882.00', 'USD6849.00', 'USD2401.00', 'USD7313.00', '0'),
(10, 'DBhH8nAfF4n70A4d', '/hy9v0pk4de135//es6ih2ra87', '1979', '19468 Konopelski Locks\nEast Idellchester, LA 06900-2401', '8446 Runolfsson Tunnel Suite 391\nSouth Urielfurt, MT 68716-2354', '697 Durgan Ridges Suite 994\nAdamsview, IN 91028', '97369 Earlene Parkways Apt. 450\nMurazikmouth, RI 56599', '17880 Prohaska Circle Suite 608\nPort Flaviefort, RI 45629', '18151 Deckow Trail\nDangeloside, MN 87181-5804', 'nhkwa-47246', '36738462079', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"9425867310\";i:2;s:24', 'USD7170.00', 'USD7977.00', 'USD7975.00', 'USD7637.00', 'USD2096.00', 'USD9828.00', 'USD2696.00', 'USD4298.00', 'USD7599.00', 'USD9419.00', '0'),
(11, '48HdDn40AABFhfn7', '6h/p0e9rkdyi37v845h/se1a/2', '1983', '840 Ada Road\nNew Andresberg, ND 65387', '642 Coy Port Suite 434\nEast Hiltonshire, VA 28792', '4663 Kevon Turnpike Apt. 102\nNew Brisa, SC 90351', '13616 Boyer Junction Suite 323\nGrahammouth, CT 64658-1587', '466 Willms Roads\nBrakusbury, MS 40573', '885 Velda Brooks Apt. 096\nTorphyville, OH 65900-5054', 'omqzw-23575', '75453167679456', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"3271695804\";i:2;s:19', 'USD8080.00', 'USD6153.00', 'USD7917.00', 'USD5307.00', 'USD7891.00', 'USD0736.00', 'USD9306.00', 'USD7657.00', 'USD6527.00', 'USD8148.00', '0'),
(12, 'An4BDF87n4Hd0fhA', '8v591ih/36yk/rhadp/20es4e7', '2020', '96725 Joelle Grove Suite 832\nWhiteport, KS 89007', '4952 Homenick Lane Suite 831\nLake Camillatown, WV 61554-7142', '28711 Kari Mountains Suite 388\nLake Twilahaven, AZ 80734-7071', '43708 Steuber Pines Apt. 273\nNorth Maxwellview, AK 86598', '20482 Matilda Ramp\nNorth Angelo, GA 75422', '9573 Hester Haven Suite 236\nPort Kory, MT 62906', 'wimwm-06257', '28505418', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"7062419835\";i:2;s:12', 'USD6220.00', 'USD3216.00', 'USD1917.00', 'USD5016.00', 'USD7909.00', 'USD9932.00', 'USD4501.00', 'USD3058.00', 'USD4775.00', 'USD3934.00', '0'),
(13, 'B48HFhdf47DnnA0A', '3/48e0ki1y6hhspe/r2v5ad9/7', '1997', '3176 Rosalyn Fords\nNew Kristofermouth, DC 51509', '4200 Elaina Isle Apt. 710\nSouth Reannafurt, LA 46672-5942', '91921 McKenzie Burgs\nNorth Kristinaside, KS 81971-1215', '1510 Renner Prairie\nKshlerinberg, DC 77834-0929', '3080 Cassin Brooks\nNorth Catherinehaven, MD 01558-1138', '496 Vilma Terrace Apt. 183\nElzaburgh, UT 33000-9318', 'qmqgd-23193', '92677137592', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4576132980\";i:2;s:10', 'USD0799.00', 'USD4464.00', 'USD0728.00', 'USD2040.00', 'USD2505.00', 'USD4808.00', 'USD8097.00', 'USD0751.00', 'USD9138.00', 'USD7807.00', '0'),
(14, '0nfF7nDB8d4hHA4A', 'hh8972sa6rdpkeve0/y//i5413', '1992', '437 Jaylan Landing\nSchmidthaven, MA 07894', '1675 Jaskolski Divide Apt. 427\nNorth Bradlyhaven, UT 93665', '838 Frami Trail\nGoodwinview, CA 24852', '13265 Witting Inlet Apt. 728\nHuelsstad, ID 34239', '6216 Kovacek Summit Suite 284\nWilfredofurt, NJ 37998', '669 Bergstrom Brook\nEast Deloresmouth, MD 59959-1311', 'eiaie-92280', '793097084806971', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8794103652\";i:2;s:22', 'USD7727.00', 'USD4987.00', 'USD2623.00', 'USD8237.00', 'USD4874.00', 'USD9897.00', 'USD5276.00', 'USD3049.00', 'USD0590.00', 'USD2943.00', '0'),
(15, 'AFH4B80f7AD4nhdn', '0ey/iskar61hh/8dv5e4/3792p', '1992', '20459 Samanta Creek Apt. 184\nEast Kelley, VA 90374', '4958 Feest Island\nRutherfordchester, DC 96337', '655 Clement Cliffs\nCalebtown, SD 98854-6706', '3051 Pinkie Corners\nJastmouth, CA 85188-1801', '681 Trystan Rapids Suite 548\nPort Aniyah, MA 39589', '7384 Ross Locks\nPearliefurt, IA 31957-8336', 'cfeur-42154', '394164906880', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"2591803647\";i:2;s:22', 'USD1404.00', 'USD1434.00', 'USD8997.00', 'USD1096.00', 'USD5512.00', 'USD0379.00', 'USD8999.00', 'USD1083.00', 'USD9781.00', 'USD0337.00', '0'),
(16, 'nhFf4BndDHA0748A', '47e96ek1/8i3rds0y/ph2v5ah/', '1985', '1600 Bartoletti Wall Suite 822\nPort Deshawntown, ME 17391', '1554 Nikolaus Spur Suite 574\nBobbieborough, VA 80661-7899', '105 Natasha Cape\nEast Stephanialand, MT 00843', '9470 Bernhard Valley Apt. 757\nRobelside, RI 66295-6618', '2032 Kihn Ridge Suite 968\nKuhlmanville, DE 77198-3098', '5728 Bashirian Ville Suite 167\nSouth Brigitte, OH 49904', 'cvtrw-89618', '19302146099582', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"7219460385\";i:2;s:19', 'USD7967.00', 'USD5787.00', 'USD8376.00', 'USD6702.00', 'USD1328.00', 'USD8312.00', 'USD2279.00', 'USD2527.00', 'USD3180.00', 'USD3300.00', '0'),
(17, '48dh0nHAAfBD7nF4', '/2sh71ra6i84v//539ephk0eyd', '1983', '29442 Grimes Greens\nMarianshire, NV 60060-6550', '66565 Rey Brook Apt. 425\nNorth Brannonport, NE 33631', '760 Cathryn Roads\nNorth Timmy, NE 51834-1988', '37900 Oscar Underpass\nKleinside, IN 69458-4671', '888 Alexandria Mission\nLake Maybelleview, OK 83805-3300', '172 Kulas Plains\nBodeborough, TN 07121', 'rcxhz-70869', '13917670066', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8179063524\";i:2;s:12', 'USD1794.00', 'USD0650.00', 'USD4599.00', 'USD2737.00', 'USD4696.00', 'USD2423.00', 'USD6188.00', 'USD7499.00', 'USD6160.00', 'USD2287.00', '0'),
(18, 'nB4DHAdfA7h0Fn84', 'a/h/y/k43i61dpes89vhe0r752', '1999', '164 Wilfredo Pines\nSchadenview, RI 44082-6177', '4614 Thompson Tunnel Apt. 913\nWolffview, NH 43277-5035', '921 Astrid Greens Apt. 621\nBertfort, ND 85972-0915', '99926 Madyson Keys Apt. 395\nPort Elias, CT 10129-3470', '605 Ondricka Prairie Apt. 065\nWunschville, GA 57025-5967', '3576 Schneider Summit Suite 332\nLake Sydneyland, FL 46594', 'slsya-72836', '605164806605', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"6850341792\";i:2;s:20', 'USD4942.00', 'USD7872.00', 'USD8897.00', 'USD1067.00', 'USD7451.00', 'USD9118.00', 'USD7255.00', 'USD9294.00', 'USD4078.00', 'USD7508.00', '0'),
(19, '0H7nBFnD84h4AfdA', '14d9ve5e32ya67//ph/h0i8krs', '2014', '222 Murphy Spur Apt. 412\nHaleyton, NC 59757-6309', '70456 Broderick Skyway\nCathrinestad, ME 24130', '6426 Isai Spur Apt. 067\nBrandifort, DC 57819-0282', '408 Aylin Mews\nNigelmouth, NH 38695-2298', '4293 Alexandrea Pines Suite 359\nGoyetteland, CT 85135-3486', '4464 Abagail Mountain\nColtenfurt, WV 07879', 'nffwz-24185', '6064391824', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"2738915640\";i:2;s:14', 'USD9145.00', 'USD4132.00', 'USD2305.00', 'USD8122.00', 'USD1890.00', 'USD3561.00', 'USD1716.00', 'USD3781.00', 'USD5873.00', 'USD0419.00', '0'),
(20, '7Hd840FBn4fDnAAh', '791/0aeskvrphdyi8/h2e35/46', '1973', '406 Mohamed Mountains Suite 108\nFeesttown, IL 14390-2242', '57491 Rebecca Track\nReganbury, CT 69205-8338', '496 Waldo Crossing\nMarkshaven, OK 44993-7311', '90091 Marion Lake Suite 773\nWest Bradfordberg, AR 36400', '198 Johnson Circles\nSchmittberg, MT 32409-1422', '70499 Erdman Land\nGislasonfurt, IA 76255-2790', 'uxcag-53554', '594227749477', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"0715682439\";i:2;s:13', 'USD8604.00', 'USD9341.00', 'USD9350.00', 'USD7108.00', 'USD4332.00', 'USD4222.00', 'USD6477.00', 'USD1218.00', 'USD0045.00', 'USD2681.00', '0'),
(21, 'dDAn4A0h4FnHBf78', '/ee54701i9/harph86v2kd/3ys', '2021', '6465 Burdette Trace\nLake Emiliano, NH 54310-9143', '17368 Dibbert Plaza Apt. 553\nNew Christineport, LA 85355-2553', '14786 Loyal Ports\nKatrineberg, AL 59413-2383', '387 Romaguera Stravenue Apt. 038\nNorth Maryjane, ND 02971', '236 Emile Key\nLake Gladyceborough, MT 56698', '973 Carroll Mission\nCarolanneborough, ID 04019-3664', 'sfrvp-33212', '258298143642', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"5938206147\";i:2;s:22', 'USD0799.00', 'USD5315.00', 'USD2287.00', 'USD8621.00', 'USD6253.00', 'USD4760.00', 'USD9768.00', 'USD4460.00', 'USD6508.00', 'USD4856.00', '0'),
(22, 'n8HFAnDd4BA7f04h', 'kv/y04/dp91aehr87/s5i3h6e2', '1996', '8808 Jared Bypass\nNorth Jerome, WI 76477-0211', '7300 Keeling Lakes\nNeomatown, CO 94502-8770', '204 Arvel Square Apt. 529\nPort Keiraborough, TN 79012', '5057 Ullrich Flat\nPort Remington, AK 00362', '70628 Rahsaan Circles Suite 444\nStrackebury, NY 61688-3411', '71537 Raegan Plains\nSouth Shana, WI 49469-2113', 'citoc-15380', '3060974223', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4017928635\";i:2;s:13', 'USD9253.00', 'USD3811.00', 'USD8470.00', 'USD3603.00', 'USD0105.00', 'USD1471.00', 'USD4478.00', 'USD0413.00', 'USD0677.00', 'USD8404.00', '0'),
(23, 'ABnnF44A7h8H0Dfd', 'kh8/sy/p4h26d3ea7e9i10/r5v', '1977', '650 Swaniawski Trafficway Apt. 558\nCartwrightfurt, NH 55213-1907', '15113 Senger Estates Suite 177\nMabelletown, AZ 74772-6288', '62328 Lehner Meadow\nReichertbury, VA 71239', '43083 McClure Alley Suite 452\nNorth Antonio, NJ 70597', '96788 Gulgowski Causeway Suite 249\nWest Janie, WV 36593-5010', '83211 Lexie Mountains\nNorth Nicholasmouth, IA 20545', 'qpddm-42356', '37418260424', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8642907531\";i:2;s:15', 'USD8783.00', 'USD2996.00', 'USD7927.00', 'USD0422.00', 'USD5287.00', 'USD8158.00', 'USD5578.00', 'USD9375.00', 'USD8107.00', 'USD6558.00', '0'),
(24, '0FhH7dDA48BfA4nn', 'phihs/24a9ye5/106d83ervk7/', '2005', '35416 Jess Mountain Apt. 440\nBrendafurt, NE 36114', '77745 Johnson Trace\nRexhaven, WY 01521', '87238 Morissette Lakes Apt. 742\nNew Gloria, NM 36128', '5447 Cummerata Harbors Suite 936\nPort Veda, NC 32169-3689', '89003 Morissette Falls Apt. 784\nNorth Kylafurt, RI 82620-0165', '548 Kovacek Coves Suite 680\nPort Furmanport, VT 39705-3813', 'lkivb-18423', '099841568382', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4902185376\";i:2;s:14', 'USD4742.00', 'USD3274.00', 'USD6550.00', 'USD1856.00', 'USD8456.00', 'USD9318.00', 'USD5295.00', 'USD6190.00', 'USD1606.00', 'USD8431.00', '0'),
(25, '48nAndFH7AB4Dfh0', 'dpe4/9a/371086irvs5eky2/hh', '1997', '2569 Rhett Haven Apt. 525\nNorth Beulahmouth, AR 55708', '57604 Rohan Stravenue\nJocelynland, GA 52998-6534', '50707 Karianne Orchard Apt. 719\nKerlukeside, ND 50693', '5904 Hill Park Apt. 505\nLittelborough, LA 28680', '896 Lockman Drive Suite 578\nVitoland, WY 23405', '24370 Alessandro Tunnel\nEast Dawnton, VA 06116', 'crtpd-70474', '50694879', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8465029713\";i:2;s:10', 'USD5743.00', 'USD8346.00', 'USD8851.00', 'USD5294.00', 'USD4610.00', 'USD1427.00', 'USD2368.00', 'USD7229.00', 'USD0219.00', 'USD3085.00', '0'),
(26, 'B8d7FAnhnf04H4DA', '/0ah19r6vhe37y5ikp/ds28e4/', '2004', '65016 Lubowitz Burgs Suite 188\nSouth Jordanshire, VA 16845', '1079 Labadie Vista Suite 863\nSchneiderberg, MO 48781', '82428 Muller Trail\nWalterport, NJ 60310-5395', '388 West Harbor\nMcGlynnview, PA 23146-7183', '30532 Lakin Isle\nBerniceport, SC 03122', '9245 Herman Rest\nWest Aletha, UT 26668-4210', 'bkbkb-36511', '7623691924446955', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"1304892576\";i:2;s:13', 'USD7533.00', 'USD5263.00', 'USD9464.00', 'USD0404.00', 'USD2277.00', 'USD8816.00', 'USD8133.00', 'USD9202.00', 'USD5577.00', 'USD6503.00', '0'),
(27, 'AHh4F48n7fn0DdAB', '73vs/h/e516y49ak/i0ehp2dr8', '1985', '407 Pacocha Knoll\nSpencerbury, CT 11806', '4760 Jennings Trafficway\nLegrosborough, AZ 10827-4478', '4687 Joseph Rapid\nKaitlinstad, MI 12256', '67465 Janiya Dam\nHilpertborough, MA 53355', '147 Gusikowski Mill Suite 075\nSouth Virgie, MO 70823-3715', '9372 Buckridge Ferry Suite 596\nJacobsonburgh, VA 01566-7610', 'lbhjh-07008', '5379130124247', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"0145972638\";i:2;s:19', 'USD7725.00', 'USD8068.00', 'USD3204.00', 'USD0362.00', 'USD9405.00', 'USD5694.00', 'USD9432.00', 'USD3267.00', 'USD3873.00', 'USD0511.00', '0'),
(28, 'D7Af8d44AhH0FnBn', 'pke1h04i3r9a/sh/y82v7ed5/6', '2016', '54632 Lemke Lodge\nTrevionland, NJ 33885-5663', '92473 Erick Inlet\nSipesbury, WV 97565-5492', '27891 Adams Hollow Suite 791\nPort Alexie, HI 02060-2761', '7516 Naomie Cliffs\nNorth Aditya, OK 82745', '566 Jacobi Plain\nCullenton, SC 29598-7822', '2220 Pacocha Wells Suite 998\nFerrybury, HI 86052-8726', 'mpoug-06471', '40496812802', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"3918672504\";i:2;s:13', 'USD3333.00', 'USD2552.00', 'USD2951.00', 'USD4539.00', 'USD7116.00', 'USD0480.00', 'USD3233.00', 'USD0330.00', 'USD3983.00', 'USD3214.00', '0'),
(29, 'FABDh04n8A7dfnH4', '8/5/pr2ya67he/vd1ek43s90ih', '2002', '8864 Tremayne Hill Suite 512\nNew Princebury, TX 45424-6840', '848 Fritsch Crossing\nPort Jazmyn, AL 39626', '722 Hassie Creek\nNew Dwight, ME 92598', '99964 Spencer Bypass\nDenesikshire, CO 49670-4677', '6084 Hudson Falls\nPadbergside, NE 26786', '695 Lilian Row\nWest Paxtonview, MO 12491', 'reayw-70273', '5972340687907', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"8195403762\";i:2;s:20', 'USD0438.00', 'USD8688.00', 'USD0015.00', 'USD8130.00', 'USD2735.00', 'USD0681.00', 'USD9100.00', 'USD2279.00', 'USD0872.00', 'USD0003.00', '0'),
(30, 'dnA048fDhB4A7FnH', '74y6/eph2vea/1h0ird98s/k53', '2012', '7201 Simonis Plains\nRalphshire, HI 41719', '826 Laurie Highway\nTodbury, RI 30698', '284 Trey Hill Suite 077\nLayneport, MD 34111', '4841 Blanche Estates\nKayliehaven, RI 59801-1011', '934 Maurice Spur\nLake Isabellamouth, MA 49771-4760', '6099 Neal Station Apt. 532\nNew Alexandria, AL 48751-5092', 'zgtxv-29730', '4111624314789', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"5671932804\";i:2;s:17', 'USD7129.00', 'USD0685.00', 'USD3880.00', 'USD9321.00', 'USD5028.00', 'USD8596.00', 'USD4707.00', 'USD1489.00', 'USD7749.00', 'USD1916.00', '0'),
(31, '8B0d4fH4Dh7AnFnA', '162yh04v5ei/8e7/dp/akr9h3s', '2021', '84481 McGlynn Islands\nHyattland, AK 37539', '19860 Torp Ridge\nLake Kirstin, AL 94710', '1582 Roosevelt Wells\nWymanstad, MS 70796-3957', '7191 Gorczany Underpass\nEmmyside, IA 48932', '8740 Roberts Roads\nLake Jaunitaland, IN 13677', '58268 Noelia Trace Suite 285\nPort Colby, OR 82360', 'efyao-28398', '8985137131', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4237910865\";i:2;s:21', 'USD5522.00', 'USD6942.00', 'USD9629.00', 'USD2032.00', 'USD4954.00', 'USD2834.00', 'USD3003.00', 'USD9704.00', 'USD2966.00', 'USD8155.00', '0'),
(32, 'fBdnDAH84FA04hn7', '0h51kyp9/2/8h/id43easv6e7r', '1985', '601 Bettie Plains\nRodriguezport, UT 43425', '36661 Feil Mountain\nSerenaport, VA 33497-1366', '65233 Buckridge Trail\nSchmidtton, RI 81487-6743', '82031 Seamus Crescent Apt. 676\nMacejkovicmouth, NC 74970-8422', '2934 Thompson Village Suite 263\nAudreyview, RI 86732-9141', '32192 Marlen Vista Suite 507\nMatteoshire, SD 16280', 'xsglz-63503', '6037804187629', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"4051927836\";i:2;s:16', 'USD5482.00', 'USD3559.00', 'USD6445.00', 'USD5696.00', 'USD0287.00', 'USD9823.00', 'USD2892.00', 'USD3405.00', 'USD3352.00', 'USD2150.00', ''),
(33, '0BA4df8Fnh4n7AHD', 'y0ih3/e4/9vah/p6rd758esk21', '1999', '9093 Jaylan Neck\nMurazikport, NV 68873', '2076 Tillman Inlet Apt. 239\nMcKenzieton, WV 12226-6475', '9711 Upton Mission Suite 435\nEast Aniya, NM 87239-6758', '6365 Kristoffer Burg\nNorth Gisselleburgh, TN 32039', '4854 Roman Isle Suite 533\nSchmelerside, TX 96680', '62282 Sadye Throughway Suite 688\nLittelberg, AZ 29064-4023', 'jciae-92144', '813670618943471', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"7184923605\";i:2;s:20', 'USD3512.00', 'USD7693.00', 'USD2436.00', 'USD3837.00', 'USD4745.00', 'USD8859.00', 'USD0074.00', 'USD8916.00', 'USD9665.00', 'USD1146.00', 'USD1146.00'),
(34, 'Fh0Anf8nDH7d44AB', 'd0752/hv6/epk89eras/hi143y', '2010', '90496 Grant Via\nGoldnerside, HI 48618-4155', '805 Carlo Shoals\nMcGlynnland, IN 80631-2062', '7196 Kub Oval Suite 059\nRenehaven, NC 44903', '1414 Rhiannon Divide Apt. 974\nEast Owen, NJ 54907-5875', '8743 Randall Shore Apt. 626\nWest Jazmyn, OK 41410-1005', '5038 Hassan Dam\nWest Lyda, MI 94914', 'fiuth-80007', '08371989136', 'a:6:{i:0;a:7:{i:0;s:1:\"#\";i:1;s:2:\"ID\";i:2;s:4:\"Name\";i:3;s:14:\"Contact Number\";i:4;s:16:\"Operational Area\";i:5;s:9:\"Advisor 1\";i:6;s:9:\"Advisor 2\";}i:1;a:8:{i:0;s:1:\"1\";i:1;s:10:\"7623408591\";i:2;s:17', 'USD0997.00', 'USD3483.00', 'USD2372.00', 'USD3671.00', 'USD6542.00', 'USD7848.00', 'USD8614.00', 'USD7251.00', 'USD3315.00', 'USD6216.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `image_result`
--

CREATE TABLE `image_result` (
  `image_id` bigint(200) NOT NULL,
  `assigned` varchar(200) NOT NULL,
  `Issassigned` tinyint(1) NOT NULL,
  `result` int(3) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `images` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `password`, `address`, `phone_number`, `images`) VALUES
(29, 'kishan', 'kishan55@gmail.com', 'kishan', 'vadodra', '4564561234', ''),
(30, 'mayank', 'mayank21@gmail.com', 'mayank', 'rajkot', '458762987', ''),
(31, 'ami', 'ami66@gmail.com', 'ami', 'surat', '90160610578', ''),
(32, 'avi', 'avi89@gmail.com', 'avi', 'nadiyad', '7488555515', ''),
(33, 'vipul', 'vipul89@gmail.com', 'vipul', 'morbi,gujarat', '8632568596', ''),
(34, 'kunal', 'kunal90@gmail.com', 'kunal', 'rajkot,gujarat', '985552546', ''),
(35, 'yash', 'yash73@gmail.com', 'yash', 'rajkot,gujarat', '6355873985', ''),
(36, 'vrajesh', 'vrajesh53@gmail.com', 'vrajesh', 'rajkot,gujarat', '9825763593', ''),
(37, 'dfv', 'dfv@gmail.com', 'dfv', 'dfv', '4512451278', '1'),
(38, 'vatsal', 'vatsal@gmail.com', 'vatsal', 'vatsal', '452361789', '10'),
(39, 'dfgh', 'dfgh@gmail.com', 'dfgh', 'dfgh', '1532467469', '10'),
(40, 'gbh', 'gbh@gmail.com', 'hggg', 'ggggg', '46545645', '1'),
(41, 'fg', 'fg@gmail.com', 'fg', 'ffg', '1245451266', '1'),
(42, 'sxcd', 'xsdc@gmail.com', 'shah', 'ghgh', '1265162316', '1'),
(43, 'ds', 'ds@gmail.com', 'SDS', 'SDSD', '232323', '1'),
(44, 'CX', 'cx@gmail.com', 'CX', 'vb', '434345', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_record`
--
ALTER TABLE `image_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_record`
--
ALTER TABLE `image_record`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

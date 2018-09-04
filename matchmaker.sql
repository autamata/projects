-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 09:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matchmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `device_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `device_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `seller_id` tinyint(3) unsigned DEFAULT NULL,
  `compatibility` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `peri_device_id` tinyint(3) unsigned NOT NULL,
  `android` tinyint(4) NOT NULL,
  `apple` tinyint(4) NOT NULL,
  `specialized` tinyint(4) NOT NULL,
  `entertainment` tinyint(4) NOT NULL,
  `communication` tinyint(4) NOT NULL,
  `everyday_tasks` tinyint(4) NOT NULL,
  `scheduling` tinyint(4) NOT NULL,
  `product_iimage` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`device_id`),
  KEY `seller_id` (`seller_id`),
  KEY `peri_device_id` (`peri_device_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_name`, `manufacturer`, `seller_id`, `compatibility`, `price`, `description`, `peri_device_id`, `android`, `apple`, `specialized`, `entertainment`, `communication`, `everyday_tasks`, `scheduling`, `product_iimage`) VALUES
(1, 'IPhone 6', 'Apple', 0, 1, 299, 'Small in size with three screens size options.  Multiple memory sizes available as the price increases.  Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\iphone6.jpg'),
(2, 'IPad Air 2', 'Apple', 0, 1, 499, 'Large touch screen tablet, communication abilities, price increases with memory size increase, Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\ipadair2.png'),
(3, 'IPad Air', 'Apple', 0, 1, 399, 'Large touch screen tablet, price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\ipadair.jpg'),
(4, 'IPad Mini', 'Apple', 0, 1, 249, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\ipadmini.jpg'),
(5, 'IPad Mini 2', 'Apple', 0, 1, 299, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\ipadmini2.jpg'),
(6, 'IPad Mini 3', 'Apple', 0, 1, 399, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1, 'product_pictures\\ipadmini3.jpg'),
(7, 'Pronto Tech 7"', 'Android', 0, 2, 49, '4 GB of memory, this device is compatible with all Android apps.  It has a double camera with a large 7" tablet touch screen and WiFi is available for this device.', 0, 1, 0, 0, 1, 1, 1, 1, 'product_pictures\\prontotec.jpeg'),
(8, 'Megafeis Tablet', 'Android', 0, 2, 79, '8 GB of memory, this device is compatible with all Android Applications.  It has the addition of a microphone for speaking to text messages, as well as has a large tablet touch screen.', 0, 1, 0, 0, 1, 1, 1, 1, 'product_pictures\\Megafeis.jpg'),
(9, 'Digital Reins 9"', 'Android', 0, 2, 179, 'A larger, 9" tablet touch screen, compatible with all Android Applications.  Has 8 GB of memory as well as a microphone for speaking to text messages', 0, 1, 0, 0, 1, 1, 1, 1, 'product_pictures\\digitalReins.jpg'),
(10, 'iRulu 7"', 'Android', 0, 2, 59, 'Android Applications compatibility with a 7" tablet touch screen.  Blue Tooth and Skype built in along with 4 GB of memory and has a built in MP3 player.', 0, 1, 0, 0, 1, 1, 1, 1, 'product_pictures\\irulu.jpg'),
(11, 'Sky Devices Ski', 'Android', 0, 2, 79, 'This is an Android phone with a larger touch screen,  it has 4 GB of ROM with an excellent microphone for speaking to text messages.', 0, 1, 0, 0, 1, 1, 1, 1, 'product_pictures\\sky device.jpg'),
(12, 'Allora Keyboard', 'Spectronics', 0, 3, 2495, 'Allora offers this keyboard for simple text to speech generating.  It comes with a waterproof keyboard and word prediction.', 0, 0, 0, 1, 0, 1, 0, 0, 'product_pictures\\allora.jpg'),
(13, 'Xpress', 'Dynavox', 0, 4, 6514, 'Dynavox offers this systems which has Windows-based software as well as offers the user the ability to create sentences and conversations using pictures.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\xpress.jpg'),
(14, 'Maestro', 'Dynavox', 0, 5, 12049, 'The Maestro allows the user to create custom pages and allows speaking to text messages.  The device contains a camera, preloaded voices, is Microsoft compatible and has an eye-tracking accessory.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\maestro.jpg'),
(15, 'Dynawrite', 'Dynavox', 0, 6, 4995, 'Dynawrite is a small compact device that can record up to an hour of speaking and contains a computer keyboard for easy, familiar use.', 0, 0, 0, 1, 0, 1, 0, 0, 'product_pictures\\Dynawrite.jpg'),
(16, 'V+', 'Dynavox', 0, 7, 6548, 'Windows-based device that has Integrated reader software and comes with Eye-tracking software.', 0, 0, 0, 1, 1, 1, 0, 1, 'product_pictures\\v+.jpg'),
(17, 'Lightwriter', 'Toby Churchill', 0, 8, 6250, 'The Lightwriter receives texts, stores notes and can be used as a remote in the household.  This device has a large text display but does not speak.', 0, 0, 0, 1, 0, 1, 0, 0, 'product_pictures\\lightwriter.jpg'),
(18, 'SL40 and Connect', 'Toby Churchill', 0, 9, 3500, 'This is a larger version of the Lightwriter that has text and mobile phone abilities.  It can save large Microsoft document and has various voices available for text to speech.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\Connect.jpg'),
(19, 'ECO2', 'Prentke Romich', 0, 10, 7895, 'The ECO2 is a windows-based device with a large 14.1" screen and supports MP3 player files.  It has large keys, eye-tracking software and a built-in CD burner. ', 0, 0, 0, 1, 1, 1, 1, 1, 'product_pictures\\ECO2.jpg'),
(20, 'NOVA Chat 5', 'Saltillo', 0, 11, 3195, 'This device has an Android platform and is the smallest of the NOVA series.  It comes with switch scanning and preloaded vocabulary.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\nova chat 5.jpg'),
(21, 'NOVA Chat 8', 'Saltillo', 0, 12, 3970, 'This device begins with an Android platform it has many different vocabulary pages preloaded.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\nova8.jpg'),
(22, 'NOVA Chat 10', 'Saltillo', 0, 12, 4395, 'This device also has an Android platform as well as a speech synthesizer.  The NOVA Chat 10 allows the user to save files and has numerous voice options for the speaking feature.', 0, 0, 0, 1, 0, 1, 1, 1, 'product_pictures\\nova chat 10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peripheral_device`
--

CREATE TABLE IF NOT EXISTS `peripheral_device` (
  `peri_device_id` tinyint(3) unsigned NOT NULL,
  `compatibility` tinyint(1) NOT NULL,
  `peri_device_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `device_id` tinyint(3) unsigned NOT NULL,
  `entertainment` tinyint(4) NOT NULL,
  `communication` tinyint(4) NOT NULL,
  `scheduling` tinyint(4) NOT NULL,
  `everyday_tasks` tinyint(4) NOT NULL,
  `website` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `description` char(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`peri_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peripheral_device`
--

INSERT INTO `peripheral_device` (`peri_device_id`, `compatibility`, `peri_device_name`, `price`, `device_id`, `entertainment`, `communication`, `scheduling`, `everyday_tasks`, `website`, `description`) VALUES
(1, 1, 'Proloquo2Go', 220, 1, 1, 1, 0, 0, 'Itunes', 'Proloquo2Go allows the user to speak by quickly tapping words, phrases and pictures.'),
(2, 1, 'Living Safely', 30, 1, 0, 0, 0, 1, 'Itunes', 'This app helps people learn what is the correct thing to do in 27 safety situations'),
(3, 1, 'iStudiez Pro.', 3, 1, 0, 1, 1, 1, 'Itunes', 'Helps with organization, homework and scheduling.  Great app!'),
(4, 1, 'Conversation Builder Teen', 30, 1, 1, 1, 0, 0, 'Itunes', 'Helps create conversations for teens with emotional, hearing, and social difficulties.'),
(5, 1, 'Counting Bills and Coins', 0, 1, 1, 0, 0, 1, 'Itunes', 'Count, match and make change with coins and bills. Helps with everyday money exchange.'),
(6, 1, 'My Talk Tools', 100, 1, 1, 1, 0, 0, 'Itunes', 'Express communication needs with both symbols and words quickly and easily.'),
(7, 2, 'AAC Speech Buddy', 28, 2, 0, 1, 0, 0, 'Google Play', 'Easy, simple way to create speech boards for easier communication.'),
(8, 2, 'Every Day To Do List Task List', 0, 2, 0, 0, 1, 1, 'Google Play', 'Creates great todo lists with tasks and sub task lists.'),
(9, 2, 'Life Skills Winner', 0, 2, 1, 0, 0, 1, 'Google Play', 'Teaches social and life skills to kids, and provides points and rewards for task completion.'),
(10, 2, 'Smart Steps Mobile', 0, 2, 1, 1, 0, 0, 'Google Play', 'Gives suggestions for problem solving in different situations.  Is a bridge to independence.'),
(11, 2, 'JAB Talk ', 0, 2, 0, 1, 0, 0, 'Google Play', 'Designed for communication has easy-use symbols that can be used at the toddler level through adult.'),
(12, 2, 'Training Faces', 3, 2, 1, 1, 0, 0, 'Google Play', 'Helps with emotional recognition and the causes behind that emotion for social improvements.'),
(13, 3, 'Natural-Sounding Real Speak ', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co', 'Converts text into the most real-sounding, natural voices available.'),
(14, 3, 'Word Prediction Software', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co', 'Helps with correct spelling and even prompting for correct sentences and phrases.'),
(15, 3, 'Pre-Programmed Messages ', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co', 'Store common messages for quick use on your device with this software.'),
(16, 4, 'Series 5 Software w/ InterAACt', 0, 13, 1, 1, 0, 1, 'http://www.dynavoxtech.co', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(17, 4, 'Picture Communication Symbols', 0, 13, 0, 1, 0, 1, 'http://www.dynavoxtech.co', 'Holds thousands of picture symbols for communication.'),
(18, 4, 'AT&T Natural Voices ', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Some of the best options for natural voices close to the real thing.'),
(19, 4, 'Acapela HQ Child and Adult ', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Allows real-sounding voice choices for all ages.'),
(20, 4, 'Loquendo Voices', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Offers numerous, real-sounding options for text to speaking messages.'),
(21, 5, 'Page Editing Software', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Works with other software on the device and makes corrections on speaking pages.'),
(22, 5, 'Series 5 Software w/ InterAACt', 0, 14, 1, 1, 0, 1, 'http://www.dynavoxtech.co', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(23, 5, 'Boardmaker w/ Speaking Dynamic', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Features boardmakers, natural voices and word prediction for communication ease.'),
(24, 5, 'Picture Communication Symbols', 0, 14, 0, 1, 0, 1, 'http://www.dynavoxtech.co', 'Holds thousands of picture symbols for communication.'),
(25, 5, 'DynaSyms Symbols', 0, 14, 0, 1, 0, 1, 'http://www.dynavoxtech.co', 'A symbol addition which contains 5000 additional symbols to be added to the device.'),
(26, 5, 'Microsoft Voices', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Real-sounding voices with Microsoft compatibility.'),
(27, 6, 'Series 5 Software w/ InterAACt', 0, 15, 1, 1, 0, 1, 'http://www.dynavoxtech.co', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(28, 7, 'Integrated Ebook Reader Softwa', 0, 16, 1, 1, 0, 0, 'http://www.dynavoxtech.co', 'Allows user to download books in text format and be read aloud with the device.'),
(29, 7, 'Page Editing Software', 0, 16, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Works with other software on the device and makes corrections on speaking pages.'),
(30, 7, 'Series 5 Software w/ Interact', 0, 16, 1, 1, 0, 1, 'http://www.dynavoxtech.co', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(31, 7, 'Eye Tracking System', 0, 16, 0, 1, 0, 1, 'http://www.dynavoxtech.co', 'User can control the device using eyes only with dwell and blink controls.'),
(32, 8, 'Series 5 Software w/ InterAACt', 0, 17, 1, 1, 0, 1, 'http://www.dynavoxtech.co', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(33, 8, 'Acapela HQ Child and Adult ', 0, 17, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Allows real-sounding voice choices for all ages.'),
(34, 9, 'Acapela HQ Child and Adult ', 0, 18, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Allows real-sounding voice choices for all ages.'),
(35, 9, 'Series 5 Software w/ InterAACt', 0, 18, 1, 1, 0, 1, '', 'Helps with communication and allows the user to create entire conversations with multiple voices.'),
(36, 9, 'Mobile Phone Connect Software', 0, 18, 0, 1, 0, 0, 'http://www.dynavoxtech.co', 'Allows user to connect phone, email and texts to the device.'),
(37, 10, 'Windows 7', 0, 19, 1, 1, 1, 1, 'https://store.prentrom.co', 'Allows the freedom of Windows 7 with a small, compact device similar to a home computer.'),
(38, 10, 'Internal DVD/CD player/burner', 0, 19, 1, 1, 0, 0, 'https://store.prentrom.co', 'Comes with the ability to watch/listen to music and movies, and even burn your own.'),
(39, 10, 'ECO point eye gaze module', 0, 19, 0, 1, 1, 1, 'https://store.prentrom.co', 'Offers eye-gaze and head tracking software for communication with little movement.'),
(40, 11, 'AACelerate with myVoice', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Targets the communication needs of a broad spectrum of individuals with quick, common phrases.'),
(41, 11, 'ChatPower', 0, 20, 1, 1, 0, 0, 'http://saltillo.com/produ', 'Allows the user to create picture message boards for easier communication.'),
(42, 11, 'Essence', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Designed for adults and has a word prediction software for quick access to common phrases.'),
(43, 11, 'Vocab PC', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ', 'A symbol-based communication device for simple conversations.'),
(44, 11, 'SymbolStix', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Over 14,000 symbols available for quick communication'),
(45, 11, 'PCS', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Popular in classrooms and clinics, this option has many symbols for quick communication.'),
(46, 12, 'Social Chat', 0, 21, 1, 1, 0, 0, 'http://saltillo.com/produ', 'Social chat allows the user to link the device with popular social networking sites.'),
(47, 12, 'IVONA Speech Synthesizer', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Natural voice quality and inflection great choices for real-sounding voice options.'),
(48, 12, 'AACelerate with myVoice', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Targets the communication needs of a broad spectrum of individuals with quick, common phrases.'),
(49, 12, 'ChatPower', 0, 21, 1, 1, 0, 0, 'http://saltillo.com/produ', 'Allows the user to create picture message boards for easier communication.'),
(50, 12, 'Essence', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ', 'Designed for adults and has a word prediction software for quick access to common phrases.'),
(51, 12, 'Vocab PC', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ', 'A symbol-based communication device for simple conversations.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

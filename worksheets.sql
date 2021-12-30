-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 08:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Esl-ology`
--

-- --------------------------------------------------------

--
-- Table structure for table `worksheets`
--

CREATE TABLE `worksheets` (
  `id` int(3) NOT NULL,
  `sheet_title` varchar(255) NOT NULL,
  `sheet_description` text NOT NULL,
  `sheet_tags` varchar(255) NOT NULL,
  `sheet_type` varchar(255) NOT NULL,
  `sheet_date` date NOT NULL,
  `sheet_image` text NOT NULL,
  `sheet_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worksheets`
--

INSERT INTO `worksheets` (`id`, `sheet_title`, `sheet_description`, `sheet_tags`, `sheet_type`, `sheet_date`, `sheet_image`, `sheet_url`) VALUES
(1, 'Xmas Board Game printable', 'Play a Christmas boardgame to practise Christmas vocabulary. You can also play this game online. \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        ', 'Christmas board game download printable pdf 15 A1 A2', 'pdf-class', '2021-12-27', 'XmasBoardGame.webp', 'XmasBoardGame.pdf'),
(2, 'Night Before Xmas Text Maze', 'Night Before Xmas Text Maze, based on Clement C Moores poem\r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        ', 'Christmas text maze reading printable download pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'NightBeforeTextMaze.webp', 'NightBeforeTextMaze.pdf'),
(3, 'Pre-Int Jeopardy', 'Who can win at a game of Pre-intermediate jeopardy?\r\n        \r\n        \r\n        \r\n        \r\n        ', 'Powerpoint Pre-intermediate download ppt 15 A2 B1', 'ppt-class', '2021-12-24', 'preinterm.webp', 'PRE-INTERMILLIONAIRE.ppt'),
(8, 'Xmas Go Fish', '    Play a game of Xmas Go Fish\r\n        \r\n        \r\n        \r\n        \r\n        ', 'Christmas card game go-fish printable download pdf 10 A1 A2', 'pdf-class', '2021-12-24', 'XmasGoFish.webp', 'XmasGoFish.pdf'),
(16, 'Christmas Dominoes', '    Play a fab game of Xmas dominoes!\r\n        \r\n        \r\n        \r\n        \r\n        ', 'Christmas dominoes printable download pdf 10 A1 A2', 'pdf-class', '2021-12-24', 'XmasDominoes.png', 'XmasDominoes.pdf'),
(17, 'Fortnite Text Maze', 'Have a fab fortnite day today!\r\n\r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        ', 'Fortnite text-maze printable download pdf 10 A1 A2', 'pdf-class', '2021-12-24', 'FortniteFever.webp', 'FORTNITE%20FEVER.pdf'),
(19, 'Get a Job Game printable', '    Get a job? Get a life!\r\n        \r\n        \r\n        \r\n        ', 'printable board game jobs download pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'JobsBoardGame.webp', 'JobsGoFish.pdf'),
(20, 'Jobs Go Fish! Cards', 'Play a wonderful game of Jobs Go Fish. \r\n        \r\n        \r\n        ', 'Jobs card game Go Fish printable download pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'JobsGoFish.webp', 'JobsGoFish.pdf'),
(21, 'Sports Dominoes ', '    Play a game of sports dominoes for fun. \r\n        \r\n        ', 'Sports dominoes printable download pdf 10 A1 A2', 'pdf-class', '2021-12-24', 'SportsDominoes.webp', 'SportsDominoes.pdf'),
(22, 'Foods Go Fish', 'Play foods go fish\r\n        \r\n        \r\n        ', 'Food card game Go Fish download pdf printable 15 A1 A2', 'pdf-class', '2021-12-24', 'FoodsGoFish.webp', 'FoodsGoFish.pdf'),
(23, 'Sports Go Fish!', '    Play sports go fish now!\r\n        ', 'sports card games Go Fish printable download pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'SportsGoFish.webp', 'SportsGoFish.pdf'),
(24, 'Sports Board Game printable', '    Sports boards are fun for lords.\r\n        \r\n        ', 'Sports board game printable download 15 A1 A2 pdf', 'pdf-class', '2021-12-24', 'SportsBoardGame.webp', 'SportsBoardGame.pdf'),
(25, 'Animals Go Fish!', 'Animals love to go fishing. \r\n        \r\n        ', 'Animals card game Go Fish printable download pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'AnimalGoFish.webp', 'AnimalsGoFish.pdf'),
(26, 'Comparatives Text Maze', 'ComparativesSuperlativesTextMaze for you \r\n        \r\n        ', 'comparatives superlatives adjectives grammar text-maze printable download 10 A1 A2 pdf reading', 'pdf-class', '2021-12-24', 'ComparativesSuperlativesTextMaze.webp', 'ComparativesSuperlativesTextMaze.pdf'),
(27, 'Frequency Adverbs Text Maze', '    FrequencyAdverbsTextMaze\r\n        \r\n        ', 'frequency adverbs grammar text-maze printable download pdf 10 A1 A2 reading', 'pdf-class', '2021-12-24', 'FrequencyAdverbsTextMaze.webp', 'FrequencyAdverbsTextMaze.pdf'),
(28, 'Past Simple Text Maze', '    PastSimpleTextMaze.pdf to print out with solution\r\n        ', 'past simple grammar text-maze printable download pdf 10 A2 B1 reading', 'pdf-class', '2021-12-24', 'PastSimpleTextMaze.webp', 'PastSimpleTextMaze.pdf'),
(29, 'Xmas Tree Game', '    This in an online game... what do\r\n        \r\n        \r\n        \r\n        ', 'christmas xmas online games memory vocabulary holidays 10 A1 A2', 'ppt-class', '2021-12-24', 'XmasTreeGame.webp', 'xmas-tree-game.html'),
(30, 'Daily Routine Bingo', '    Use the online bingo caller to play this game after printing out the cards. \r\n        \r\n        \r\n        \r\n        ', 'daily routines actions bingo vocabulary A1 A2 10 online present simple grammar', 'pdf-class', '2021-12-24', 'DailyRoutineBingo.webp', 'bingo-daily-activity.html'),
(31, 'Get a Job Game online', '    The get a job game version to play online\r\n        ', 'Jobs board game online vocabulary elementary 10 A1 A2 ', 'pdf-class', '2021-12-24', 'JobsBoardGame.webp', 'boardgame-player.php?imgsrc=jobs-board.webp'),
(32, 'Present Tenses Text Maze', 'Practise the present simple and continuous', 'present simple grammar text-maze printable download pdf 10 A2 A1 reading', 'pdf-class', '2021-12-24', 'PSimpleContinuous.webp', 'PSimpleContinuous.pdf'),
(33, 'Clothes Text Maze', 'Do this fab clothes text maze', 'clothes vocabulary text-maze printable download pdf 10 A2 A1 reading', 'pdf-class', '2021-12-24', 'ClothesTextMaze.webp', 'ClothesTextMaze.pdf'),
(34, 'Vehicles Text Maze', 'Brrrrm! KWIM', 'vehicles transport vocabulary text-maze printable download pdf 10 A2 A1 reading', 'pdf-class', '2021-12-24', 'VehiclesTextMaze.webp', 'VehiclesTextMaze.pdf'),
(35, 'Christmas Text Maze', '    Xmas textmas! ', 'Christmas Xmas vocabulary text-maze printable download pdf 10 A2 A1 reading', 'pdf-class', '2021-12-24', 'ChristmasTextMaze.webp', 'ChristmasTextMaze.pdf'),
(36, 'Vehicles Word Search', 'Transport n stuff', 'vehicles transport vocabulary wordsearch printable download pdf 10 A2 A1 reading', 'pdf-class', '2021-12-24', 'VehiclesWordSearch.webp', 'VehiclesWordSearch.pdf'),
(37, 'Halloween Board Game printable', 'Spooooooky!', 'Halloween vocabulary board game download printable pdf 15 A1 A2', 'pdf-class', '2021-12-24', 'HalloweenBoardGame.webp', 'HalloweenBoardGame.pdf'),
(38, 'Halloween Dominoes', 'If you are brave', 'Halloween Xmas dominoes vocabulary printable download 10 A1 A2 pdf', 'pdf-class', '2021-12-24', 'HalloweenDominoes.webp', 'HalloweenDominoesPrintable.pdf'),
(39, 'Name Three Things online', '    Name three things and get points when you do.\r\n        \r\n        ', 'Name three online vocabulary warmer scattergories 15 A1 A2', 'pdf-class', '2021-12-24', 'Name3.webp', 'name-three-things.html'),
(40, 'Describe a Person - Photos', '    Describe a photo to practise descriptions', 'vocabulary describing adjectives description online 10 A2 B1', 'pdf-class', '2021-12-24', 'faces.webp', 'describe-a-person.html'),
(41, 'Talk for a Minute online', '    Talk for a minute with no hesitation, bad English or repetition.  You can do it!\r\n        ', 'speaking talking games online 15min B1 B2 C1', 'pdf-class', '2021-12-24', 'talkminute.webp', 'talk-minute.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `worksheets`
--
ALTER TABLE `worksheets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `worksheets`
--
ALTER TABLE `worksheets`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

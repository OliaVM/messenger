-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 16 2017 г., 10:12
-- Версия сервера: 5.5.55-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `e2e4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `article_id` int(11) NOT NULL,
  `login` varchar(17) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_date` varchar(18) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `comment` (`comment`(255)),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`article_id`, `login`, `comment`, `comment_date`, `id`) VALUES
(1, 'user1', 'Комментарий1 к записи1', '16.07.2017 17:06', 1),
(1, 'user3', 'Комментарий2 к записи1', '16.07.2017 17:06', 2),
(3, 'user4', 'Комментарий1 к записи3', '16.07.2017 17:06', 3),
(5, 'user5', 'Комментарий1 к записи5', '16.07.2017 17:07', 4),
(1, 'user6', 'Комментарий3 к записи1', '16.07.2017 17:07', 5),
(5, 'user1', 'Комментарий2 к записи5', '16.07.2017 17:10', 6),
(6, 'user1', 'Комментарий1 к записи6', '16.07.2017 17:11', 7),
(7, 'user1', 'Комментарий1 к записи7', '16.07.2017 17:11', 8),
(8, 'user1', 'Комментарий1 к записи8', '16.07.2017 17:11', 9),
(8, 'user1', 'Комментарий2 к записи8', '16.07.2017 17:11', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `user_id` int(10) NOT NULL,
  `note_date` varchar(20) NOT NULL,
  `note_title` varchar(150) NOT NULL,
  `note_text` varchar(5000) NOT NULL,
  `short_text` varchar(500) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`user_id`, `note_date`, `note_title`, `note_text`, `short_text`, `id`) VALUES
(1, '16.07.2017 16:23', 'Запись1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Verit', 1),
(2, '16.07.2017 16:37', 'Запись2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus ', 2),
(1, '16.07.2017 16:42', 'Запись3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Verit', 3),
(3, '16.07.2017 16:42', 'Запись4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Verit', 4),
(1, '16.07.2017 16:52', 'Запись5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus ', 5),
(4, '16.07.2017 16:53', 'Запись6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus numquam, dignissimos incidunt facere debitis ea sed eligendi nobis. Perferendis quia eum accusantium, provident, vero delectus numquam iste quaerat. Officia.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, quidem, incidunt praesentium quos pariatur sapiente asperiores, perspiciatis quo, perferendis iusto doloremque voluptas! Non, ducimus. Perferendis minima non laborum doloremque illo recusandae consectetur veritatis quas perspiciatis et, fugiat quisquam dignissimos impedit eum in necessitatibus error porro veniam amet consequuntur voluptatum laboriosam alias dolore. Rem praesentium deserunt ut eum cupiditate explicabo, repellendus ', 6),
(1, '16.07.2017 16:58', 'Запись7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Verit', 7),
(1, '16.07.2017 17:03', 'Запись8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Veritatis eligendi voluptatum praesentium sed quasi nihil ut, amet officia accusantium excepturi similique sequi dicta itaque exercitationem dignissimos nisi est nesciunt non atque. Eos tempora officia maxime optio nisi, minima voluptatibus quis deserunt modi. Temporibus, ullam, repellat?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione quos voluptas optio facilis, corporis ex minima maiores qui, assumenda mollitia, ducimus deleniti distinctio nemo iste id aspernatur. Voluptas fugit laudantium animi, quaerat tenetur ipsam nulla, voluptates voluptate similique. Minima voluptate error tenetur laborum adipisci illum, consequuntur vitae laudantium. Labore beatae ipsum consequuntur sit molestiae tenetur tempora excepturi impedit! Verit', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(18) NOT NULL,
  `surname` varchar(18) NOT NULL,
  `gender` varchar(18) NOT NULL,
  `date_of_birth` date NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `salt` varchar(8) DEFAULT NULL,
  `cookie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `date_of_birth`, `login`, `password`, `email`, `salt`, `cookie`) VALUES
(1, 'user1', 'surname1', 'woman', '1999-10-01', 'user1', '1a1501a0194e4dc3b1b308ab03f00e41', 'user1@mail.ru', 'o', '}'),
(2, 'user2', 'surname2', 'man', '1993-02-18', 'login2', '705232cd74414da73bb16119376ff139', 'user2@mail.ru', 'C', NULL),
(3, 'user3', 'surname3', 'man', '1980-05-24', 'user3', '393359608828eba2bdf76e34fb1b1046', 'user3@mail.ru', 'N', 'v'),
(4, 'user4', 'surname4', 'man', '2017-05-18', 'user4', '763251f7d7913aeef246b3828ea9b96f', 'user4@mail.ru', 'E', '_'),
(5, 'user5', 'surname5', 'man', '1980-05-28', 'user5', '39f56eabc4fc228b821dd83cd7fd7930', 'email5@gmail.com', 'e', NULL),
(6, 'user6', 'surname6', 'man', '1976-05-24', 'user6', '73cb3be5ea3e2866fb39d273dbba9d06', 'email6@gmail.com', 'r', NULL),
(7, 'user7', 'surname7', 'man', '1988-06-24', 'user7', 'f636b1f62466ca167f474ed4da72d400', 'email7@gmail.com', 'o', NULL),
(8, 'user8', 'surname8', 'man', '2011-02-12', 'user8', '8533b4bbb25dff5bf1e809f8795d8afa', 'email8@gmail.com', '`', NULL),
(9, 'user9', 'surname99', 'man', '2000-12-04', 'user9', 'c99a6b8f89287331e1b85e09263ab411', 'email@mail.ru', '>', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

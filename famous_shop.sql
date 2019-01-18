-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 18 2019 г., 20:08
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `famous_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Apple', 1, 1),
(2, 'samsung', 2, 1),
(3, 'LG', 3, 1),
(4, 'xiaomi', 4, 1),
(5, 'AOC', 5, 1),
(6, 'Lenovo', 6, 1),
(7, 'ACER', 7, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `new` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `price`, `new`, `image`, `brand`, `status`, `description`) VALUES
(1, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. '),
(2, 'Samsung S7', 2, 1100, 0, '', 'Samsung', 1, 'Samsung Galaxy S7 откроет для вас мир технологически совершенных вещей, таких как: очки виртуальной реальности Samsung Gear VR, камеру Gear 360 и смарт-часы Samsung Gear S2. Экосистема совместимых устройств создана, чтобы дарить вам незабываемые впечатления.\r\n*Узнайте о том, как проще перейти на Samsung Galaxy S7 edge|S7, используя Smart Switch.'),
(3, 'Samsung Galaxy S8', 2, 1333, 1, '', 'Samsung ', 1, 'Смартфон с широкоформатным HD-экраном.8 ядер для быстрой работы.Сканер отпечатков пальцев. Цитрус Защита. Адресная доставка. Подарочные Сертификаты. Официальная гарантия.'),
(4, 'XIAOMI Mi 8', 4, 400, 1, '', 'XIAOMI ', 1, 'Экран (6.26\", 2280×1080)/ Qualcomm Snapdragon 660 (4x2.2 ГГц + 4x1.8 ГГц)/ Двойная основная камера: 12 Мп + 5 Мп, фронтальная камера: 24 Мп/ RAM 4 ГБ/ 64 ГБ встроенной памяти/ 3G/ LTE/ GPS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 8.1 (Oreo) / 3350 мА*ч\r\n'),
(5, 'LG G5', 3, 332, 0, '', 'LG ', 1, 'какой то текст'),
(6, 'Ноутбук LENOVO Legion Y520-15IKBN ', 1, 1000, 0, '', 'LENOVO', 1, 'Ноутбук LENOVO Legion Y520-15IKBN (80WK00YVRA)'),
(7, 'ACER Nitro 5', 7, 1130, 1, '', 'ACER', 1, 'Ноутбук ACER Nitro 5 AN515-52-57SA (NH.Q3MEU.028)'),
(8, 'LENOVO K6 Power', 6, 233, 0, '', 'LENOVO', 1, 'Смартфон LENOVO K6 Power (K33a42) Dual Sim Gold (PA5E0123UA)'),
(9, 'LENOVO K6 Power', 6, 323, 0, '', 'LENOVO', 1, 'Смартфон LENOVO K6 Power (K33a42) Dual Sim Grey (PA5E0015UA)\r\n'),
(10, 'APPLE iPhone 7 256Gb Gold', 1, 555, 0, '', 'APPLE', 1, 'Смартфон APPLE iPhone 7 256Gb Gold (CPO)'),
(11, 'APPLE iPhone 7 32Gb Black', 1, 322, 1, '', 'APPLE', 1, 'Смартфон APPLE iPhone 7 32Gb Black\r\n'),
(12, 'Монитор 21.5\" AOC 22V2Q - ультратонкий', 5, 118, 1, '', 'AOC', 1, 'Диагональ дисплея: 21.5\"\r\nМаксимальное разрешение дисплея: 1920 x 1080\r\nТип матрицы: IPS IPS\r\nВремя реакции матрицы: 5 мс\r\nЯркость дисплея: 250 кд/м²\r\nКонтрастность дисплея: 1000:1\r\nПодробнее: '),
(13, 'Mонитор 26.9\" Samsung Curved C27HG70Q ', 2, 112, 0, '', 'Samsung', 1, 'Диагональ дисплея: 28\"\r\nМаксимальное разрешение дисплея: 3840x2160\r\nТип матрицы: TN\r\nВремя реакции матрицы: 1 мс\r\nЯркость дисплея: 370 кд/м²\r\nКонтрастность дисплея: 1000:1\r\n'),
(14, 'LENOVO K6 Power', 6, 323, 0, '', 'LENOVO', 1, 'Смартфон LENOVO K6 Power (K33a42) Dual Sim Grey (PA5E0015UA)\r\n'),
(15, 'ACER Nitro 5', 7, 1130, 1, '', 'ACER', 1, 'Ноутбук ACER Nitro 5 AN515-52-57SA (NH.Q3MEU.028)'),
(16, 'Монитор 21.5\" AOC 22V2Q - ультратонкий', 5, 118, 1, '', 'AOC', 1, 'Диагональ дисплея: 21.5\"\r\nМаксимальное разрешение дисплея: 1920 x 1080\r\nТип матрицы: IPS IPS\r\nВремя реакции матрицы: 5 мс\r\nЯркость дисплея: 250 кд/м²\r\nКонтрастность дисплея: 1000:1\r\nПодробнее: '),
(17, 'ACER Nitro 5', 7, 1130, 1, '', 'ACER', 1, 'Ноутбук ACER Nitro 5 AN515-52-57SA (NH.Q3MEU.028)'),
(18, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. '),
(19, 'APPLE iPhone 7 256Gb Gold', 1, 555, 0, '', 'APPLE', 1, 'Смартфон APPLE iPhone 7 256Gb Gold (CPO)'),
(20, 'APPLE iPhone 7 256Gb Gold', 1, 555, 0, '', 'APPLE', 1, 'Смартфон APPLE iPhone 7 256Gb Gold (CPO)'),
(21, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. '),
(22, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. '),
(23, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. '),
(24, 'Iphone xs max', 1, 1229, 1, '', 'APPLE', 1, 'Безрамочный дисплей OLED 6,5, Super HD. Двойная камера - 12 Мп. Защита от воды. Face ID. ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

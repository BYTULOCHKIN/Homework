-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.21 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы homeworkdb.accounts: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` (`id`, `user_id`, `balance`, `currency_id`) VALUES
	(1, 2, 56656, 2),
	(2, 4, 7676, 2),
	(3, 3, 12900, 4);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;

-- Дамп данных таблицы homeworkdb.amounts: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `amounts` DISABLE KEYS */;
INSERT INTO `amounts` (`id`, `cashbox_id`, `value`, `quantily`) VALUES
	(1, 2, '20', 150),
	(2, 1, '10', 200);
/*!40000 ALTER TABLE `amounts` ENABLE KEYS */;

-- Дамп данных таблицы homeworkdb.cashboxes: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `cashboxes` DISABLE KEYS */;
INSERT INTO `cashboxes` (`id`, `city`, `model`, `currency_id`) VALUES
	(1, 'Poltava', 'Verifone', 1),
	(2, 'Kharkiv', 'Ingenico', 2);
/*!40000 ALTER TABLE `cashboxes` ENABLE KEYS */;

-- Дамп данных таблицы homeworkdb.currencies: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` (`id`, `sign`, `name`) VALUES
	(3, 'USD', 'dollar'),
	(4, 'EUR', 'euro'),
	(2, 'UAH', 'gryvna'),
	(1, 'RUB', 'ruble');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;

-- Дамп данных таблицы homeworkdb.logs: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `date`, `cashbox_id`, `account_id`, `amount`) VALUES
	(2, '2019-10-01 11:06:08', 2, 1, 400),
	(3, '2020-09-29 16:16:05', 1, 2, 500),
	(4, '2020-09-01 14:06:47', 2, 3, 800),
	(5, '2020-09-02 17:06:47', 2, 3, 1200),
	(6, '2020-09-01 12:06:47', 2, 3, 2000),
	(7, '2020-09-01 15:06:47', 1, 3, 1000),
	(9, '2020-10-01 11:15:04', 2, 2, 1300);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Дамп данных таблицы homeworkdb.users: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `age`) VALUES
	(2, 'Ruslan Krasyuk', 22),
	(3, 'Ivan Popov', 42),
	(4, 'Ivan Petrov', 19);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

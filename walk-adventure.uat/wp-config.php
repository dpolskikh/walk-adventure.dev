<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'uat');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/{87:yu*cq[r3BdBUF/km<&]soYGX=_&L0x3VY[Hm!i2X,h4GAmkI3z=s+qO=v>g');
define('SECURE_AUTH_KEY',  'o,1k[:oc%e?k%gw7mpH(T8?/`(@<xzBkTp&b*a]Xs|Lna=(zL~GZ1 ?(vp</{j}W');
define('LOGGED_IN_KEY',    '=)uOI[PV%, G<oyyc2 j~j658tyio(owRa$s|C(-UKL.DC`:8Y8K6;zGEwzc4tKn');
define('NONCE_KEY',        '9Wib+Owsshkj8jJvOL/pey/T939|zz4M=xOFV(>}~>,D L^V(|)T{)ZSFjBIEb =');
define('AUTH_SALT',        's$l>w)]L!YF)Xz0j1xBZR:6iEFno1)Esge^iN/3xT*l/Vy>uZ?5V_>a=c]Cla>to');
define('SECURE_AUTH_SALT', 'O-iRsD/83$MvUgA0m,VDmoQi5)A$v?}UXW#FK{rkE+_F-_4d_Yrze=7FK<tpvh0R');
define('LOGGED_IN_SALT',   'X<gBheO)b]GU*&i_k9>sX %S[Mqj@6%kypUsd]4OTpBOksQ_Rj8Ee~D>4un9?PO,');
define('NONCE_SALT',       '4kM5F4{&#<aYmyIOawJU.uOe*m;i}i^w]?~%XB|`kQ<ihRWT}PCNy;hx)1[9|mm0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

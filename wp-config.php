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
define('DB_NAME', 'adena');

/** Имя пользователя MySQL */
define('DB_USER', 'palmira2003');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'I$?R_PaI;,;%Y+V^)yglDpsW-b@5NKGaCZsD#|U{@OSVUi}%-K0zKpB|A-s~GB@`');
define('SECURE_AUTH_KEY',  '>@zoK)=MME9:o%5r)3Cz!swWx;*/GJ8#c+F7|<=~jGP`W<@Sxn;<gbq#@2K+hLT9');
define('LOGGED_IN_KEY',    ',wg#RA&EV .iG}2dW/3yR* yZMyC[?R3.ej6^Wv@O&S+| 9qZo* +Y~0uH_l1;yL');
define('NONCE_KEY',        'X:Kl )E]f^Pr9R3On.2vw*V+ct<z/&TgP7$Ct|!!dY,X5*2{-(h^Ed!w+3WHQ&J~');
define('AUTH_SALT',        '`)lQj|QU$sN{1}a!&wnpW6SpR,9TWk>-e8-h07&q]z<k-v2Ob,^~9_+UI9XjT--]');
define('SECURE_AUTH_SALT', '{r(X0 5_hrc631Pwl)#fEL2K>!56N9-9K}ns!`-|ggWRDbr&cHnYtD/<*z>d?v=W');
define('LOGGED_IN_SALT',   '@{8l7!}+9@P5IP5*31/X1!Sb<ksCctM(e/CM+NS(%gPMxTd[+=Yae-e?bJkw>lpm');
define('NONCE_SALT',       '~^xRF79brS`LLx`B:t!ig0PRgZx1>H<!|I85s,K /*:+x.0qVcXbUj$dtUe^ILJc');

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

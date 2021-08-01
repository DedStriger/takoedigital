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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dedst587_td' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'dedst587_td' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'P2XUQyUp' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[Q[)t&Uiv3] |POpVr=.M(yo]mo<4V9zKj>q|BpXs|r_o8kUpP!=1qkY5rtk)B~p' );
define( 'SECURE_AUTH_KEY',  '{2ogLtn/v->8!Ao>cs[E.[!>M(,:LHGd0&:+8Sk3zKL/n2A69X5ymZv9Ut^U@tXf' );
define( 'LOGGED_IN_KEY',    'q09g71C)-`{$Tw*e599c|wJihRaoqGMbYX^SlT<W-tnpn^~G&[M%Rd4:j7)$>sHQ' );
define( 'NONCE_KEY',        'hE^vJ@-MP&D2W,]JRl.j:i.w }8cwkrjRg|DrIHlp1 iGT:R]Uy+3R6x,cHA!CNx' );
define( 'AUTH_SALT',        'ZUbn$vWkQ]P:Y~:D;}y#@dvLsvR|xfwrQY?_h)c  fNu)MF&)l#BABeW?Qzrsv#O' );
define( 'SECURE_AUTH_SALT', '}7hmPlS!a._<hA)`3Ln_KW#8=fv*Up&7o5uD[#IY|SK }h/wj4FG?6}l|~~iFyjV' );
define( 'LOGGED_IN_SALT',   '#dGc.lT}B& Cx-SN^*d8n.=3y>Xz1iV:w6!qL1~moG2Z-U7.]9b:= 7aC0;b75%i' );
define( 'NONCE_SALT',       '?uuYg= N,OYM9xU<CBY}=N.@ouQFq%W=;KJbJW,fd:Yb=%$m Ja|c,Y;PTSIQe]^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

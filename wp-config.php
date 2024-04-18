<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '2950-22_38610' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2950-22_38610' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '6befc0f3d51ad87caccb' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<]3z{.~f@9}- doVukTgDfm}jhOq_2C[ %NNU5p)cI^i8Dz%kv[nyEbJfy tvEOZ' );
define( 'SECURE_AUTH_KEY',  'i7SGR(t*T!kPk/|_Yf}q.1KzC]KV`m^GdWuX)nD(A*B-Fx(@5,4=]>9i&mQCcc&D' );
define( 'LOGGED_IN_KEY',    'J&BBR9NYg%0R{kv%=~d&ZI/Z (j>`:c*J8lYZx #Bs@?T&3^qqbL!7R<3(]G_Hs>' );
define( 'NONCE_KEY',        '={C4DfwFm+(]mvqv<@CN#m#]DyxUxelG cLlpCk?.i/N%dfbOf?AhRT <:p~)mB{' );
define( 'AUTH_SALT',        '1<]WUe2)EP;&$Ei1uwcl3IpT0zv|~w>S1l5:t;J rOB:Eb_7s*:5oefYwi{jO%t^' );
define( 'SECURE_AUTH_SALT', 'emd`un28< R0l)>KH=JwC_e/`;R>e8&./1N%CrO-SVkCS0K7r+d/{NET=dkn.L_+' );
define( 'LOGGED_IN_SALT',   'niH 8H(| lhO!Uf,b>h|d?Q!?TTnXa!Sc?vXR gtVzsw*V5W]g<F-fft%OCEKon^' );
define( 'NONCE_SALT',       'OdsKPPIB@9hfu{:$)j 2,UksxZD9N]_2`_6.z]/foyEyI@RFJn#F00s8CrRvGF+ ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'q3lGI_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
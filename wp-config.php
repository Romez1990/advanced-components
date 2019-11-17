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
define( 'DB_NAME', 'advanced_components' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'MtCX gm/EZGQ#XFH -`sz-^SNmI)4xc$WTob2/Hz=vg@!X>-qu`<$lO5UTt3/WwN' );
define( 'SECURE_AUTH_KEY',  'a#_PO!J^$DH6.}z~eh>EqDvfCDP_!dTk&:~[pLA(<Q9lu`Pw.N,N,z(z!vCh| DH' );
define( 'LOGGED_IN_KEY',    'YqboIMnoN`i%|suv`4yk?*x0J)WfvOqZyRAnFp7bnRF87!; =WQ],MfBL&hz$m.P' );
define( 'NONCE_KEY',        '4oBz]r)A}}f4Ex6e/K7j;=PGel+%;<Rhb9kgKZxUz}=2R:hWAOxX[J>U);D5<W|%' );
define( 'AUTH_SALT',        ',$LLea>-3E%y<<NG8#5F#y(^/jsrveg?FnCG~/I&0Jc~T_;kuDxCnvU-e i:_IC?' );
define( 'SECURE_AUTH_SALT', 'X&R63Et>`u_S#BXm-wJpOm>2h}lfOE be`mK$Ex(87wCt In$MxcxdQ(;?$>7!zB' );
define( 'LOGGED_IN_SALT',   ':rAyl>FPIkKw/]tw~BZj!Uhr+yt+D~+`_gCHj>ZO7nQDDP`+SnFKR|h}Nv3%{~G2' );
define( 'NONCE_SALT',       '|XeI*D`;qwdq1j7$CV~elen1mgw|&2G7UMkfyf8Aoeuq[Yfi/=}^9j-0n!1O@R>i' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

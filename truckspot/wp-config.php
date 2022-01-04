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
define( 'DB_NAME', 'truckspot_db' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_i!7}4WyTqqGNr[+A(AR}3G9`*Si?ib/~^cxmes/(x|gfE){H%h=lsl{N]GqyOw[' );
define( 'SECURE_AUTH_KEY',  '=M?vu=j6k?H>6l9)c?3Q+PUBjrz%iiAxJX=GLjj:?%anFi;G^j6J[m`}a0$ CJ79' );
define( 'LOGGED_IN_KEY',    '0Ua-9k687*tM1H`};2!!~8,qg+i/p3%~Nci&30-S({Bb)#<d@$$L42dSS~u[Cs8Z' );
define( 'NONCE_KEY',        'ct/uGgT9O~ SZ2%$HB&q$1rGG1&`}Aai,2Ah$}3YWHQG#&*<pM,si! o+?f~ghIo' );
define( 'AUTH_SALT',        'Wy=Ao%k!a+:P}9t*7@_eV3#0lc__wS{=$<%&&jncMJNM$K9QC@]fJ/Uoa:8>*6l1' );
define( 'SECURE_AUTH_SALT', 'F=v|)@ZF5~D3>8}: m/p^3W`AzVC2M1iyg.F?EcB^. 1-{iaJSDYGJuN;T~[)_@,' );
define( 'LOGGED_IN_SALT',   'KL1Ww<wUb@K~NB{;fLy~DCu(3JfN{JGNP0H`i3/c|O^:%#*+[bQTnrLm0IFcmB*y' );
define( 'NONCE_SALT',       '+p@G^LO29MFZ;d>pl^s)EgP>qF2x}daAy2U;z+:;HMcClr9E)_5*{GXF0BWKuXSe' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'tsl_';

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

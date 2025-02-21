<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
define( 'FORCE_SSL_ADMIN', true ); // Redirige todas las peticiones de páginas HTTP a HTTPS - Seguridad > Ajustes > Secure Socket Layers (SSL) > SSL en el escritorio
// END iThemes Security - No modifiques ni borres esta línea

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u223939602_bd' );

/** MySQL database username */
define( 'DB_USER', 'u223939602_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '2Hosting0English2Personal5Coaching:)' );

/** MySQL hostname */
define( 'DB_HOST', '156.67.74.251' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oko9epnrqfey6icclzmsyk6447gl4bhe1abqaudv8fgadnoqmds1lfjqsiwic3qj' );
define( 'SECURE_AUTH_KEY',  '1ayw6mwu09azdvy0upwhoplm0euwjkahrzlawm5tccyq3odwljphddka3ikgz1o7' );
define( 'LOGGED_IN_KEY',    '1jvyq5c5mucban9xidpvl4boygbonn3awm304eg28gbgdg502no1ullop6oxljmi' );
define( 'NONCE_KEY',        'cuzplzi1dgdcftuep2hpxwh2eqlmnxhvi0265jifnipwffve4foltelszuksgwn0' );
define( 'AUTH_SALT',        '6dzvdqskm7srjdx8rt76evblxmei3plsaoye8oqwxgdtpazysfojyhpwzsmdeywp' );
define( 'SECURE_AUTH_SALT', 'lmt26lb1gutblfjf0cmmta4bi1ojxthuujc5uooclvbqtrhixi610fka9fhd6cnk' );
define( 'LOGGED_IN_SALT',   'scdzkdtirmvq7gtp5ycec47oig1xpcfuvofmod3haeohxlghjriejlwvalmrtibm' );
define( 'NONCE_SALT',       'b6cscozhosffdktjsinux4hmic4sw7mcjgjltrig9cvwm5ri2mt5d8nzlymqb5mb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_sample_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', '1234qwer' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5.*Dg7ldXiB^ak#AxT4bz%3nEnoJGOg;^Hm~UxrlY/2$(DJ35}dJwf!e7Mu0.Ex^' );
define( 'SECURE_AUTH_KEY',  'q<IP5aXAN[}GmrLUF^u,E#vV5)#3r9%yh |EE([cw&H#}Trcv$e{4Df3%~Xhbtbi' );
define( 'LOGGED_IN_KEY',    '.nF:#c?9Gmtgle>x}T]4WD?TzXiWDPH(,9#sk{ti:@Hv+mRJ]I@G&.W4&}}98ipj' );
define( 'NONCE_KEY',        'jQ$q(nJt_ WGm.tvQeLRYh}Ucx@%nY(2*t<Py{E!@4P:g8`:hAs[.V%p%vQD1PK`' );
define( 'AUTH_SALT',        '>PE0:f7YXA^P[VsJ3gIAGOW33r F]F!6=p,zVJY4jr-j$&9NOLh}KCSYQ NL5YRa' );
define( 'SECURE_AUTH_SALT', 'Fz4Rr=EAoKnVUchj,P7iH?QrqyvCFS&Sc_%M1@)Hz.r;wUF[}ijTe6you6^;Em{E' );
define( 'LOGGED_IN_SALT',   'r*$7&Zvmvhzd/EB|X@RUlfy[EY-^gK_BH#+Lr4,bi@3J7 Lv?+?rWMXThvz8#%Zq' );
define( 'NONCE_SALT',       'lmF:ZE!!pgW(/.pB}FRFz|r;I9F+gz9~]@/-zrB9xqh?pQP6-2vHO#[L.~$k`6t>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

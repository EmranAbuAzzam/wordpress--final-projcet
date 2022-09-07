<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mooot' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '0792290321' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'p@Lo-6eqI`RIGJNUk de/^dnOq&%EEigrGS5Jm=VA;sWlC<&i^l<F-y~g+znc+Q?' );
define( 'SECURE_AUTH_KEY',  '~0&A_;#?I:ZB>*=VxUS5&gyt*=u,k4yo@.MFC#^AuLV<{,}Jh37*}Vsvr6j8;L`W' );
define( 'LOGGED_IN_KEY',    '{A$iO3u#EPy9l.,_ee9~$A[TQaYxK@QN4iLQwk+F/1mf0-%{%O]5G8P(<6N ].Kv' );
define( 'NONCE_KEY',        'H:j^$?3a/nN6ffLLBf5^5AY#$nATO[%*bgDn+}3=[DIF[9K#Iu@Vn&]J&2xh$).n' );
define( 'AUTH_SALT',        '?>?W1if8n!Sk%[[$}hB_}@[JTy);!^][3VvfydugvR8hZ(0tzy,^Tss|bwFGN Cn' );
define( 'SECURE_AUTH_SALT', 'q8YT{FG|1n!p0(-E>HD!C__qSeMAY|6Q.QPQ+4kqTR+`I1EXV/8n l.JT%s[sGwX' );
define( 'LOGGED_IN_SALT',   '_r%C*pSBHwFALmys,@Y<6?>Z##8d_sGudKfb^~VYBTVEsDn(%c}}[ud! RD@o!HK' );
define( 'NONCE_SALT',       'AIS Y^)egAzSAOF8/K83(k^3J5?w#<>pP)A<]DJ_FLQ+EsXm+1l}nQx(KR;>6MT3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

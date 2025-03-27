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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'XT4b5$1k.wYC8Jfq5MQd@eMg)krNako;OVm-;<(-Cdr:[8W:k;f9|fCqaP/s6&1W' );
define( 'SECURE_AUTH_KEY',  'Ff>Yb_E)zxp+bUAsP ,Mxs?9|iwy{w5=6P);+]B^6vjH*u-iAm!n-1W{{^PYB&K6' );
define( 'LOGGED_IN_KEY',    'Gc~KegWZ.&.7ej@8?W4Z~E3?L&^$[HQ;L[%QNk):_/gEH&q}K,{T!PLsM!SM$ ei' );
define( 'NONCE_KEY',        '8DPdMg];KL;^H@<R,+EIe!#$Gi0UOVI(;9#eA_}tM{vo}9IypRd~S[fVK-58E%n(' );
define( 'AUTH_SALT',        '2v$a<PG|;-l,(,#5EMgeF/s7=mOV1qj}69vWan>ThSW>i+puV$26*bj>%J2C%:dC' );
define( 'SECURE_AUTH_SALT', 'rOJ<![2]QepRqS!0m-Q?Dp72JTu^4VE4KGJ42qoDR~-4U;86u&2nMK|hjW6Af)PG' );
define( 'LOGGED_IN_SALT',   '{&2(}|$2~Jp?%?mE` hk9jGm?qFk =|=5Z:m!;,uTH{84F&dAng_I=O>-uR/KU+i' );
define( 'NONCE_SALT',       '~_^]q^y>FCEMY.nbk[%h0uqv!<`Regy G t=;?CP}]vI8lC91QiK?C}-TTr5.8[D' );

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

// Konfigurasi Redis
define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);
define('WP_REDIS_PREFIX', 'dolanan:');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

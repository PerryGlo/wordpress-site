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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Perry' );

/** Database password */
define( 'DB_PASSWORD', 'Cooler12' );

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
define( 'AUTH_KEY',         'HpPKAl)jaq[Dp 3@]j6M]c/TDGCcHqQ+4a-549{86ng/.4e#]iHlS=u//VmTaOR,' );
define( 'SECURE_AUTH_KEY',  '$1L|<39Bs(J[|5 E$$F;;KTi+)XS|^?:v$H$G-mr9HBDAX+k<ivNhKu%)LZ#j9tp' );
define( 'LOGGED_IN_KEY',    'NGAL,>W_=({EvB|{f(MV9*oWLCPzy@R?dzcWq`m$G#^w,G/Fwtpk:?/c2I>$Iudx' );
define( 'NONCE_KEY',        '=gda@rz:z@)[;3&FVqS{ %x9LKn]<q~eS!?0S,SkUx||nsvQJz<^Q!X-5l`+wFs}' );
define( 'AUTH_SALT',        '{s/9_x`YiTw>mbd<>1nMh)k|AFWJF~A7,sdF?k^~&^T%S~iUR%31_?(J[-3wPy>Z' );
define( 'SECURE_AUTH_SALT', '`u!38(*d}EHM4y =~p$qS#P+{`+kC>?xy)]*4_QY|<aK5!ssd?2CZ7y][RdNWqUP' );
define( 'LOGGED_IN_SALT',   'du( e4cD4Af4 tB:-E5qdy~DoEE}mB~Xz3/~$9a|p4b*[;RB`,eMp#cHa#Tk`Vi6' );
define( 'NONCE_SALT',       'kOjvh{9YD@f]GJQnP-1Gjzq7~P8u [oB6.$[so!q~)f/|o&eP L.k(SC83id@UzV' );

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

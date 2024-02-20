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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'user' );

/** Database hostname */
define( 'DB_HOST', 'basedatos' );

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
define( 'AUTH_KEY',         'L_~isZq]([32l+F_oFHERIBMO%IX3}+5L~v_CL>^ MTmJ&F%BV;E4^c(<>PgA^`O' );
define( 'SECURE_AUTH_KEY',  'Wn`gh{IorEF{N[)GQ!Q&F[e3C x}Gy{,k|<=w {nEiWo2|c|<v+>CIP cmJ<2OuA' );
define( 'LOGGED_IN_KEY',    'U.,cM[khFxe?q!>;Q,/tv0g[k~T:zR447T(buNZ=mt=+4qPn2 D+pi4z;,50?6YH' );
define( 'NONCE_KEY',        'r|g>VsX$a,k|X6#zwrTl0z2&ZO65_-FyU($NLf2JVX,Qt<jKZ/x|$BT0~GgQ?Xc]' );
define( 'AUTH_SALT',        '*pPlJ..Y5W:,lrW-xbR.D=DIw>DSgW[`czDnRDI,Eto[?Et4)2ohBb~#jtzz.=d2' );
define( 'SECURE_AUTH_SALT', 'CaJL/4_1=nR1aMGs)+>5hp^63~(A}a-mh}[&N^p-b9,qC6+t&#0LUwBWM<|GX?~V' );
define( 'LOGGED_IN_SALT',   'y=4L62O[m~5.)t*~+HT5sK2R.gP7tr}eSH^De_wrTgc*WiS3o*;=JWcuj~)&UZoE' );
define( 'NONCE_SALT',       'gob;3QTKO_(f3smjy/q,o^LTI7&/g]ZFr9o7%(8 Wr+5R~);F%4sE}N~CS)4e&<^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

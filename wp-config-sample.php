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
define( 'DB_NAME', 'sprintoptimize' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'toor' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rvrtju3MK(3gM2:p.#`4Ai_Xm /p;,gJQ>%=6Y+kxaWGpamb ,QboD#cwyGkSF{u');
define('SECURE_AUTH_KEY',  'azvo7q$d^ZkG-xMk%cEy|I$LL)04!~39vk@q:pg^P!r7B=T%7~}jN&M*k2QV~E?R');
define('LOGGED_IN_KEY',    'i3mT;2<O2Z#,#r]l=bw^7 -0+/|J<g3Do-jq2^J_U]az/c-D<[DyW(1NFE|2(oyn');
define('NONCE_KEY',        'tAX|gfVn:r8qK]0><vgN?cX@}hjU{+3MI*mN)>FcK*o1NZ15n:AO_>5R:G-:wuxo');
define('AUTH_SALT',        '->7|bt+WfVpIKppM%j>*trvg6!Q>j&Aoc`|GJ-G`@n-vU$!i.~{e.G#G3B9=2>v<');
define('SECURE_AUTH_SALT', '|>b6G8.rC?Hy]Nf^3.+ye)V&f?e#SbmoZ|_&!aT<g)@dB6Q{Oz+hDMJs$l7a?Z;K');
define('LOGGED_IN_SALT',   'V+G}8}>vZ+G-xuy5RT1nhhj,Wg-3UN#Dkr;8+v1AD4Y&:+7R4DQPgQa[Z(>`zy;6');
define('NONCE_SALT',       'f;j*TQB$Ev!E*cg[NAJdV=NETIknVZ@XAmo!T#cd*P9G<EiQwT/Rx,tj()}E5xl,');

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

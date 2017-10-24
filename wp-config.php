<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'word');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Gu9-)(5[EjEWQ,,I$Fm^-Y-h-H<g+K+5:Pyo8y9^pX1+?6u(0Z$i|AEmBX1s<I.O');
define('SECURE_AUTH_KEY',  'l:urQWmX?qh.WyCxQV9ISy~jRZ7}*ZT+[!zHTdm[u )/nF7B<KQ{Zhc}>i7!xO^W');
define('LOGGED_IN_KEY',    'bkq1,HWY=E)wvPQpTB2qt%s+n*4_j8J 2Ix[Nni_AxaD?s6i!Atf(7ZGig=<6 6y');
define('NONCE_KEY',        '!*1?bM3Xpt9h_z5C}_7`K&ky]mDqXfbC5bKavbisZn`S`p_#cKg%mSX.i|shr{UP');
define('AUTH_SALT',        '203xY;!h8cn2zQFXY0~TWxQck[%!f <V:~x88@)SmVhW+qPb%#`GZPfxcHV0a?qq');
define('SECURE_AUTH_SALT', 'r6?6Jz0Ze $f!pFow ]66hZ=6 )]:g_X T?9r,l/-i$8PD;{[1__eMoUVCS2Z:dP');
define('LOGGED_IN_SALT',   ';g3KWH?WmL=bH93}%gT~JF!d%`5#3XDTqa6B2t>?F}I`YE23R$,4dF y{h7ZfSWM');
define('NONCE_SALT',       'JF[LIM+x{llv4V{~b~-)WW__Z&WMSL2`-:<vgP7-NePbgcAFBR5NZo!*[D!US1^E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

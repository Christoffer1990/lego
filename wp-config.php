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
define('DB_NAME', 'wp_lego');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12341234');

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
define('AUTH_KEY',         ')mf3b8XwiWP9~#EDjL+sHYyhupdM6m!k>!M 5p42.yQ5>eCKbR0+{^?I>2PL{Mq1');
define('SECURE_AUTH_KEY',  'M8ZdQR[6sr&j8&TY@kR6bPS5-r.0]cuydZ@1?zTYK /987K!ks/)XNUj5OIJ=63F');
define('LOGGED_IN_KEY',    '7}C7IN$s_V6`$onUh$+.r{aI0Uy?,=$3gBX`|{OJ]QV@<X dBbcB`04c&3FREH5r');
define('NONCE_KEY',        'X~U|v!:.zCx>rA3?eF7<OXMC;z!r764t[J{W/9taRA(p9!B9.}MZ(<Fe~YT8IyJp');
define('AUTH_SALT',        '-{[c3UJ[0KpDsnwHwRP:s= t?Zwej+QgP(`8<c=w(l:d![:l:c)]M;/yjTr3?*>J');
define('SECURE_AUTH_SALT', '-:r8sAP!w_rFsmOJ .t5Auwj6(pobnj4j[KhCk1c6k{viFg;9%X9).)y k>rOI9~');
define('LOGGED_IN_SALT',   'r[AM_bo*.BJpL(UL0O&,xzW@T=oV8hp>7X0S 7bT|G15{IjZ,9Ylj5P^7[fCacp<');
define('NONCE_SALT',       '2cr.e0>AkU03Xi?4PV{Oi*a41lXYz:kPaS^9N^QHgRB0xaf&dzxZagud2E)A4EtK');

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

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_lego');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nR;vl<M> HI[U?*XE7ddX;Mxyh,Pd9EZk;7EYV##/g6V?F?8x#wGByK.7]Zl#bt#');
define('SECURE_AUTH_KEY',  ';rqcz,K>^,2s/2c0HRz>xwc[63L>kH=i)d{EYIvE9BkF^e?LV|a(/)WOf/[FmsHp');
define('LOGGED_IN_KEY',    'h%8I.+s~4i(Y`DFm6]kbR-1Fh@vzt_>b0!j&1kM{pWAL@^+J:JL]tYNGSKj*fPi.');
define('NONCE_KEY',        'K5VJR!<tgWA_;_]u+y1?D?aNQQ-;;t8dPsmc($m@(~EQA)/h,0lk$Px$(2$Bok}S');
define('AUTH_SALT',        'jf;ymlCh~4_hmia0E-#Lw4PNC7VjQLwP`;__n.=@EUPx8;AY)1&)!_&#b25DS[k_');
define('SECURE_AUTH_SALT', '<[5+J*8g7&oD*4|`HK]PV$h{f5,~QwNB1Vetlpdy}=B1VJ<(~]|1:~zQWZmZc&+m');
define('LOGGED_IN_SALT',   'C_SdS!-m Xd(uDs%Pg;n3GfkiRG`mc0afnh2N.DdVVwFl}DTp!vvrAvSx0<z/bH ');
define('NONCE_SALT',       'F!T1p8r (bd4NbjIE1CWG<(<4/0qJKZM:&i(i%M&6x^?D,c`.)y&E#L(%=<VEY]5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

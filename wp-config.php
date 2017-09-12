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
define('AUTH_KEY',         '0|A&|}y@G><lsq=bHPfKkmLq#UQ2)Juc:aU!MBlwVJA+[11Ps})0}YsX.=t[Qb7K');
define('SECURE_AUTH_KEY',  '0pAFA`E0S>seqo^P<5!ii14yx#P:w(Q|]^:~)Yx:iBW@j(TE?qJSf_ALJDV#OB9j');
define('LOGGED_IN_KEY',    'oE7l%(Z`rnl?E[k;%Oh(3tJX?-r}IaGq|W^aLyf+6HL=Z8[!2)LvxU8tt6;k]O!y');
define('NONCE_KEY',        ',q_5XYdhS qLY14=N=P[ZTUzQV`j?F>ccA#p_F@#O|ideClxlx)Al_IK#Ur.Cjlu');
define('AUTH_SALT',        'gGB:migM:hYF^8PeZ_V*?eLV6.s9a.M$99VZSmS7Yq;2hS={Xwod/A|AMZ>vg]*T');
define('SECURE_AUTH_SALT', 'HU;y<imt5O!A6]KiIV!n])5N`~pl3+HuI 3S7F 7j#LY[*%OHI;jlYq%9 +^d`J=');
define('LOGGED_IN_SALT',   '`^-3g|L0u5~fz.(GRh3x5A*iQP{:$sq%gxQeaoi|5~X0IR+6fSou@7Wd+6I$]pl#');
define('NONCE_SALT',       'Hl.-)NmSqXhr;?p:,nyOhrfR%oFA2xplj)VWoC6Vh$3my@u%Q2+~3M5[wUe)i40D');

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

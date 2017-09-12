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
define('DB_NAME', 'christoffer_knudsen_dk_wp_lego');

/** MySQL database username */
define('DB_USER', 'christoffer_knudsen_dk_wp_lego');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'christoffer-knudsen.dk.mysql');

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
define('AUTH_KEY',         'oI@F8j<Q,CF{=cWI1!/#<~Zvu^vyioY{8d7|uTrZb/v5<O#Z_XF0x!=j*D+=-dXf');
define('SECURE_AUTH_KEY',  '|c9#Ro.SBJE*VxAVZD0um3ksQ$KK}Z[as~O@Qh~A66=mB0xiQvOiL@j*AV?d$)U9');
define('LOGGED_IN_KEY',    'p$/Xg`?j:l|uF ZPFm%j[9cWq-a8pSyxrnA%O4Ll?<lo7(OeYiA/}P+f3>2|_,0_');
define('NONCE_KEY',        'y+,0o~x!F-12b|kS6R.+4[WZjK8a^WAZ49]9Gqw&-5{9,f9[/N)3%&3^9_.sWa! ');
define('AUTH_SALT',        '7Cc%enbNPl:@X&-b%4re- OW7J.|@4;}m-6O!$fI]?X1u(5H~D&=TWe#{fdD(E9A');
define('SECURE_AUTH_SALT', 'wkx 1N!Cf!(LD[iqG.#@Axu0X&~$?iV|QCDl:x)vu6F6%Lg{{kHYo4(!x}u $#=_');
define('LOGGED_IN_SALT',   'Fwnx,6&]Cll[NrAX&,`mxkN4Sj1ry10P.F7QL!rCFe #n]El<NK./^uQ [}(hxOD');
define('NONCE_SALT',       'KF&L&thv[k){gwhYM|yo5sF/[h`XtZgW)Qri.hXFL%;4]va^q[4Ab}eWeUaz<B;a');

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

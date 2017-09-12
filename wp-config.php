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
define('AUTH_KEY',         'bWv|kZFw1v`s.4ln&<e6XZ/YY*m-yXiKi3w,DFSz1|8ST_4y:$sg;3$19t.;fduJ');
define('SECURE_AUTH_KEY',  '4589o/ljB-`T|655Tm3SZx=[rhkNVTC/e44xrg=6yCf!MAj>Hg;sr(Ajl{04Dztb');
define('LOGGED_IN_KEY',    'xm+0E5Oq|^a2(P_M40G(,t=Ymf($-~rc|4e(-+W%OPPwzZm$X(s@3qbEYF2oh6GX');
define('NONCE_KEY',        '!&>82Gi~Eq`$@,Q*52bT3A@>iNq:50zDEl(gU~7;W)_G|/M2Q=[<A.4N@-AHv7jZ');
define('AUTH_SALT',        'MAw=mc8o2(KkznR<pib^l#^NNU;PU75K.L~SB[`9Cq7/E&;[r.P:#Z2ONH.Lwf|j');
define('SECURE_AUTH_SALT', 'AjIvk0s7t4B,Q(>XB1*qrO=9hAP~P;]0ugx>Mf >Q<Q;G[#H !^]$G;D1%?_b^$Y');
define('LOGGED_IN_SALT',   '}mPhLp_| [_g07[!i{q-4a8.%[Cuh`D3k?m19d{#/ ]{H(~^U9-/U*Dlc=^A{{@1');
define('NONCE_SALT',       'F*,l^wZE<[x4:W@^+4/*eK*Ay-8_qB#][bU|6LVsqwf77guUp&S:-}S:WgQU%iFR');

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

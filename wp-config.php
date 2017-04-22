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
define('DB_NAME', 'cu258998_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '4h4uykk5');

/** MySQL hostname */
define('DB_HOST', 'cu258998.mysql.ukraine.com.ua');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'USK;BAo4#$wg2<BPRm]T{ho:+!TFV4X@L*S|%i<b%+n#5%h%+LF(+$xF@ 1bSSSz');
define('SECURE_AUTH_KEY',  '>!*pZ]Ox3LqurQ%2d-6mb?m?>_i{xFD!TOmI?}91{=M:,87<<MY;K!~Ab6R3XM8&');
define('LOGGED_IN_KEY',    'r_x#OAL?tG5c&s= uE/O)nktC!{kuxDp<edC,HY)q0@oYN<ZgJ}tC)%C`4);)IM?');
define('NONCE_KEY',        'H:CI,2Jw7h|1!uI{np_#}|#0b[@;&DV&Yih+({a>*|9+*v=K(ig,iYcV3 &U;YHX');
define('AUTH_SALT',        '$2T-G{^+(*Od1Tl8}<qP9z!H9o:9Tb.<dv+7{RBT=E$cn|Cy|3o $[.]4g]hU=A&');
define('SECURE_AUTH_SALT', 'nH1{V9s<`=_n+oEw|H*!_MbXtRg/tT0J5S;<dhcw.?LqqmS>]5n!0}zm!1{zB04R');
define('LOGGED_IN_SALT',   'ZR*z|#yn!hr{jUDxeADzLBcp2Va8o}(1h%M2K:$:](=3XmSMx1iE-Ntlgn#N-kWq');
define('NONCE_SALT',       'gm;hv!WBcRpmZ%m;j>kvU7ku%vG%&ol _P)5u{cn*|LVUJ ]jJM3%&e&T&y2j3;!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_singree';

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

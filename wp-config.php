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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{Ru/uRxpa9+9)}z{zEq!YmR=59O)xfC0(`d#2kgv(I}2qP+QnhB~^j=T(_./3o>=');
define('SECURE_AUTH_KEY',  'ubeP7;t?-1I`ChPlRD(B8g]h{q.2V`Yorb5$/9_F==QA/&W;sif@`tM):>J(/j8*');
define('LOGGED_IN_KEY',    '&0%Wf^Y 1h IH#AX|G;]Sk&(avES|E[}; Y&*)`CxUdDu.n$vWi7HIL82[%bN |D');
define('NONCE_KEY',        '~#,zUd;1kdu4z[<z,;;YpjgbE@c!Dw]2g)-:58xxYGtN&;d@1eEt#sPbc(246^;t');
define('AUTH_SALT',        'X+Bp}Ej_NtyuwRY/XF|B&|CVF~&KM_lVTfF71En0yy{cF9}JD#C9.bY*q$nXQ?H=');
define('SECURE_AUTH_SALT', 'ZO%p%(EXW0:Z=G~[4sV$pr/F.|<^kK(`)C+Lu<,o]ayxf5t@AN=<F7tRbA1X]?(U');
define('LOGGED_IN_SALT',   '<]j{FbTdYk(k_ya]WKL4xo02-SWp*k}Jgf.S 6P@VQ!EnXU/yz{jY#f9u{8oWXaU');
define('NONCE_SALT',       'J[8&n0L=gMa`~gZaItH3; QhkfIH}dsA f$fdTWucO4V}ttqxl@![Tn`ccUFA_$G');

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


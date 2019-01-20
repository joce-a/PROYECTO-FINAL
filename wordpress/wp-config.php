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
define('DB_NAME', 'joce_wp');

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
define('AUTH_KEY',         'bXXW-9VO^L:<PuHH:H!Ov7p9f<^351P$5Mo4Br5NJXQ,gSd(urSvfG+h*5~k[%#H');
define('SECURE_AUTH_KEY',  'A15WXnLa`[vcBl~LLi%r-/T-+~c2,0![}kR@,`Pe!E9^/hY3/|2Zq^ u4Auq)bVT');
define('LOGGED_IN_KEY',    'cq?Hy)1Oc04.dWi?=?#/0#t|kCl/xkpHn> Y)U,b]o(7[a@i4Cn`o<Fr}g+^KX&W');
define('NONCE_KEY',        '*Cw8!)Rse9t&QQT*{=SG1*Fv(#n<Js,S:H=}W_1&;:`J-tv:WEfYUcld}(e%X,>k');
define('AUTH_SALT',        'hf&5?vfKx/Nm0A+ghLB3cz|+<*&?T|PT?%MfNfyY^EbydlZ9,+U~{vyD79y6>fqP');
define('SECURE_AUTH_SALT', 'ibQ)R{u_@N8#XMEJ%2)a$cY(4s&u4W2D]w$CupIREO%}TY0$5nvtHo@kFp|b7tMQ');
define('LOGGED_IN_SALT',   'hW!]q8^V[U8$~X7D{XH*pC/AKiQXx!jqruv3-Z=M^b&4K|hD MFT$tHt^Mgx<=!#');
define('NONCE_SALT',       'K/tWsF?qF:d%yYohq}dD&EIZ}bM~FjC/P<O)1t*KMzkEU}/z7P@{yAziW=B!}Ay`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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

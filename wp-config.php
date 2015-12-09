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
define('DB_NAME', 'gaonhat_wp');

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
define('AUTH_KEY',         ',,b7DiN=g5G!cAEa_O,BG7d| 8MYajv=,eP^i_ZR1{rUB%U9Zh5!GJ&~3LTmT-j3');
define('SECURE_AUTH_KEY',  '_<|u~BDm|#|ttIR%X+KZ)s5.AcNb:py|H6{tXBqdhux~s&7|v!y2rsCzG^ZalXMn');
define('LOGGED_IN_KEY',    'Q|@Qh`3B) 7J+$sXX!ab2-~(`[r0|sKUY_@N$.DQiw*7S[k{[*<8-AhjYdybw&rm');
define('NONCE_KEY',        'Ll8c-px|wca4YH3Q7U7I&2[C$w#Nzjv^7+I9(sb3u~#Xbm@R:%4eMt_=jib/A$Ts');
define('AUTH_SALT',        'r@O)hsD4]t;8F&GC1{^qON3A:x7d)cJK6v<ilnzTx+, 6Q=-!M+WyGD~0/BIag}C');
define('SECURE_AUTH_SALT', ')h+3/v4yaBer/-rmCb>99errPsWL9739DR*^Hty2-Wlw:QcK+fr_rog/h):;*/{N');
define('LOGGED_IN_SALT',   'CS|UQYW1,l yPccVIF=>{m$^:Gx2+3x#ln!uVS%V@939yP/KhZ$5Y=n)cP1C|Aqn');
define('NONCE_SALT',       'o2?*rT}xZ&I46S&6?8Ln[oM}mUtKF(CpbVsV^0ky*+m/^q?bjszE =-MpEY-SQ &');

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

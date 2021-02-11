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
define('DB_NAME', 'isprasof_newp4p'); 

/** MySQL database username */
define('DB_USER', 'isprasof_ispdemo');

/** MySQL database password */
define('DB_PASSWORD', '=)]Vw*JV0*K8');

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
define('AUTH_KEY',         ';UD1kC?pFHtH!3>J|#;{XFtJ`SX(SUaa~|w8wN3)EP5rOjqEDR.A`/RH(A,P~#$3');
define('SECURE_AUTH_KEY',  '>FOy^zZnZY/PY`Fb{)gIAYL{qmDD[YA#DHD.L!Qpp`{{;M,P)MeTk0O7.{SH/1LD');
define('LOGGED_IN_KEY',    '$bhPf{J0jpcz}:)L5;4/kV@_x:#3r<*mDO<{H4V| Y{@9r>Eq`7VKY_$LI!M?yeL');
define('NONCE_KEY',        'U{e~6F#R[~*6E|,r</sgVO;Hc6=:af% }H<2,/[miAHbL?|p/E<FDA4{M<_*f9Zb');
define('AUTH_SALT',        '%skb6{k&%5TDGu&[o|M&>?JpA-H+s_xf+2Z(Lj$z5u{iWXoxssX8~-tQ(6-fvm@J');
define('SECURE_AUTH_SALT', 'rI{R].bEXNqSP]+#IW?{#=58_uZXf1D<Bg$TRW@u>r}%,CE5E!Hcd4dA#RX~ e4e');
define('LOGGED_IN_SALT',   'vt,yn B65h,od9}+S;<{>PfG&t@;=NC?o)5 :D2gy{rpy6-3QycI:>Lp*A6Ll<= ');
define('NONCE_SALT',       'H{y}g/GV~ve%>?(AnlRRO ]`i*u-9 *52rJZ#i$sXzYLJpz]J~V:5oG:(N[8sc9&');

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

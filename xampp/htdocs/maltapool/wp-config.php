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
define('DB_NAME', 'maltapool');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'jw^G&9A344_P[) DfcNCwDBEp#LT<!#9x_O#BhG^f+mV.8WS)$nQ=5VO-CyHr?)=');
define('SECURE_AUTH_KEY',  'r)Vp%<uT1MFP<Afc|uWlnh70rGoxdG(:(#IZk:X.JK=l[21pW)/YkC&>2*VsmJ!3');
define('LOGGED_IN_KEY',    'qH6XSl@Ps<tT#hyO=^i,YE6T/DsRQJ`BHWC?$;5#a(y#b^C z`wfjlIad$0gE%~,');
define('NONCE_KEY',        'n1$L/^WW488NcdEus;<iF5Ds2:>X;q]]#CC+KA>g6~nViBDV/[L=:K@NUL+TTwp3');
define('AUTH_SALT',        '7KX&YF(%Glz<$M 0$,<m;<+`*VWe}%,1M $3c;tP@O8acx2O[7!:=Zhss+bY{Nb7');
define('SECURE_AUTH_SALT', 'E}>%K()sK$ Wq,us|zg::VW=Juh@UN-3_Vi_}[QF9Kb<{]!cRXC~+TqsV@+]N3rp');
define('LOGGED_IN_SALT',   ')>.t=8hEEFDVq(&u:vcKzJ?wYOdV2w`AZ]i!1CwDuM&kT5fc&JT@%c!qPgI~E`O?');
define('NONCE_SALT',       'Q.B Wr8ahT@mUn=lt<m5O+M.t$N0(L3<7<(j}ODra:<_4zH}&C/g+/10T#4K^~wL');

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

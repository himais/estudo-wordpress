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
define('AUTH_KEY',         '&o#zx1bv`=32Mi`sX)uIFY?D/}4cS$2Yph ?dEOXd91KE!eLT3^eYDN4^G~I %TR');
define('SECURE_AUTH_KEY',  'Ib8(-%$XI0e+yZ_G8m{^n;QDM@p(O&b: 8aQf=vc`6^$4uW84oep#g6qDm#hW0A|');
define('LOGGED_IN_KEY',    '5.@kViCP<4Dk~Ox{tE,qP|!6|5Cid`drMIGMit}f$ C@i/C!i+?iK]ndMH=Qhy4%');
define('NONCE_KEY',        '<<3GIzlCX]$bWF#s|^k(^%8i1%v;&[3E~J67zeZDR:zX:](P//DmNoW4&9%n-tbn');
define('AUTH_SALT',        'cc#>Ne&m[!Mv$F9T~nv<a~g3@_I1_cVp$5r,~Mj6mTY+5@^*RZcBUB;N12)(~Y(q');
define('SECURE_AUTH_SALT', 'zZ7&:XPVB05},2oK[7Yoz(<i;5lAO!IEh:QI,SU_A[;(B|)lG+w{1tD-6mpt~Lkp');
define('LOGGED_IN_SALT',   'I`Z6h?`rJ1;& p$y$%C^$gI/m8*nFm9Mf_;<[RraI0.$KUHkJn;!CB| U0V)C@$p');
define('NONCE_SALT',       'J#~sdv?!LVwVDxnq?,}&`:jL|3rD,4NWI#yfaR[f#HJ|>b6uCgM9|>jEBp|XXB&N');

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

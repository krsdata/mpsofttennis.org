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
define('DB_NAME', 'mpsoftte_db');

/** MySQL database username */
define('DB_USER', 'mpsoftte_user');

/** MySQL database password */
define('DB_PASSWORD', 'ZWEyTTs5kyT7');

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
define('AUTH_KEY',         'anmb>|v9.q2T+D%M[#eu,_BEOcvR>>t([HNRqG[+5iaV)<BVJ!3{^b%1cn6$fk06');
define('SECURE_AUTH_KEY',  'm?0ZK?ez#e_M%WY3yK 0}26}{JX)hM!5M}CX{L-va26s(.wT^{i?P@${lbDeN@D6');
define('LOGGED_IN_KEY',    'X>PIXN&&aPZjPvXfi),,5q$p<YBfB,ucB&nu8ch,*K-)wg<^|r9 so6{~zTg!q!o');
define('NONCE_KEY',        'ce0N^KML3(+@<jWUas1/~V^|b||:fdN^G]_[oHrYxfFA34#cSZ5NO9lQTae@M Wh');
define('AUTH_SALT',        'v!j>GT`!pxwqO~FUG)m4fgz$WIxW:zQ^= Vo1q5L=5}sU0u`nHNbvT30ApNkK5HY');
define('SECURE_AUTH_SALT', 'yyZ|WCUJ4wLbuN[hi%L66-t.71|?3#uc+ 3Hl5h!@:,ZQ1ys?J6[Ov)d EnUB(!h');
define('LOGGED_IN_SALT',   'fAlC)l8]yhl:]+b=qJ`:*c}]zwyO[Y:d22R;eXc`wPuL,2<lDf`69G{v,L!dfG7o');
define('NONCE_SALT',       'r[zz1Hv3yi;^w[NagR;QNP8f6+T,Mx`nhs~1]Y1lC:vPxF26)kPMxG _5t&~2AUH');

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

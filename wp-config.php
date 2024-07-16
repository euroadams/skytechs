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
define('DB_NAME', 'dsap_skytechs');

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
define('AUTH_KEY',         'w/^)s)El5;/L1c_Z~<dhy(+(sq-U^8 P~Z_i%LsF<((MoF[[!uV&!#8gN4+s)C>R');
define('SECURE_AUTH_KEY',  'oA]r9-UfK^+RiYs35,io~d<C/BEkKE>8Ed}HKd8 0($hY(^p.A[9%)W5d`8::?{9');
define('LOGGED_IN_KEY',    'R~ae0*{pbzvpQBW?g$3ImL7#gj?ZYhTUVdL5NIkXoM5,,ym(X8u8CwxXos&(/iR ');
define('NONCE_KEY',        'qu<0$)3N/`_qVIygCi=Dj.ziic[<8[3Jdke1X81JckaQl:*oiaTkPb LYq|Fv)R3');
define('AUTH_SALT',        'w@l44Q@d_rQSLfCC^*n.YTpY}DQ[PtmgGDoJG#T_rV+kBLCcX^KB%5oDf#VdewJD');
define('SECURE_AUTH_SALT', 'yLi`wQ-s,~Oe`O.@q[[ez3$Jo&mJx7.M[0@ j0NUeL ,DkynEVE}*irT~75b9^(Z');
define('LOGGED_IN_SALT',   'aD$!3s*yD~j:a#fBBdEZ%{!PHQ .`540W!KE)65vJmhcNo2OBU/wtxv@vjNzQ8.S');
define('NONCE_SALT',       'l?kf ?iV(1*~Be[.QpeifCm:z+bR031CvdT{4vrf_/njRIZZ51,/^Z.b38ysuBrd');

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

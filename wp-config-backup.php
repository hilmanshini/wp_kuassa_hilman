<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_kuassa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'EfxV:fuv$As$R(QE7(GlMG*|/:IaK(}}.}@7>!Q$#FM I.rr30gBmraB_tA6PV[J');
define('SECURE_AUTH_KEY',  '#=$q2+,Jqs=!dG$P``DC,cm}[I{^eyL:X5{0lP>YZ[R:Ul994Ce+x>c~XzSsNJO3');
define('LOGGED_IN_KEY',    'jPIfz)bCXCPW.[>$zYQK@|FmaR6z0`n&7% C)boErd<$[[Dt<us]WO-n86`%K}B5');
define('NONCE_KEY',        'PM@p|H*s*(|NNpr8R.7G}%;mx)YZAqd!*$mhvGo-8~874RjIzhfsX5<skX>y=pW`');
define('AUTH_SALT',        'auy.dcI|5RC[%,7h!=TpF0OKzuu6a.36yNpu<.~5f k~lgWZ@hLF<$`:vHVtU8kO');
define('SECURE_AUTH_SALT', 'wr;p-8=|k:>`&~TT&|yoQGHMZ6c%*l?j{up`g@/PJ_e(%aA)Hr(mT4YA>lQ86e%t');
define('LOGGED_IN_SALT',   'f+ySesj=L4M)>qnd3Y9/InTurD6hoejckU0t2;F#A^^ldvv?=P k/u>~;J(`GREw');
define('NONCE_SALT',       'A0Y%m=7Yyo&EWbB)}Y.M|o5-$S4njQ;{$w^w*:k0:QJ*QX>h|~%v{f XsM2>cUvz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

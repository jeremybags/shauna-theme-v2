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
define('DB_NAME', 'shauna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q5f|43*]}V)<d>oQ04vAS1aS{XB#/c/uk(mwj7iUX+G /va CTsyR3jjY:pWD9<8');
define('SECURE_AUTH_KEY',  '3UUle58&bgnE{mg+Qx/Pr@HW(0leB.9k+xr_hQ/i|J~]_bmxdtO)!-IxY narxoQ');
define('LOGGED_IN_KEY',    'SJQn#&QS7!0.KoN09|;:+|.8GiAxeki=3>vc-(Ax}8@&{SHfSt4k^Hk_#* =G?B-');
define('NONCE_KEY',        '#YE:8/s783=v5!)N>4JNY!O@&:W`{R-z218+NUqX%2IixC1MDTW_4MoxX:|/FuG9');
define('AUTH_SALT',        'D%=5vsx%7#p0:suVDa<2|6rHb]?#G*|~0LJd3ME4C2;~W6/s}wfUuO|jLvIFE0E.');
define('SECURE_AUTH_SALT', '65;.|fB>gG6n7cET]TYAP5D/c z$|8.3J*MP,NnzKFEI}wQQovvPYxNTs^L&V[zJ');
define('LOGGED_IN_SALT',   'E#O;}]C)|_q)((vKB!nn{#)-KwY+;wQUR{+}7R,[K--[Tp5@G`b>t>A=`LMfU[O|');
define('NONCE_SALT',       '!M+35yd<AgDCHm&~Jzordw|0lG+_fFVlC?/URfurX9_,y[OSR]xDf@9/U/ $@;44');

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

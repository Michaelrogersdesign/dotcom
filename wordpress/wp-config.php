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
define('DB_NAME', 'portfoliosite');

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
define('AUTH_KEY',         '!I}]L{-,aV-QVy|Ax^:ZN4 .xp!b,{^ewH|j{6RvNWH0^PO%i8H+L{ER|H.vUWNG');
define('SECURE_AUTH_KEY',  'UUW,78rK1,nUX~_U*g^? ZLn/PQN[Rt13XV2I@wh1_tGWq c]cm!}B;C 1imiWr*');
define('LOGGED_IN_KEY',    'U4zG1JmIST|lDv.M+]e3Ev3>t4ijM?g{eY^,Yg(f a(~^2H[3W[6>k%p|=zf|xP~');
define('NONCE_KEY',        'N!1XfF@jWx`I.fQ[ |qv01{abtT%N|-B5 ^1]RS2|3[jTr&m|}7i5b,}yo6r|#]U');
define('AUTH_SALT',        'lx^@vH|([(m4H80*Zt%iDl<Dnk=rJ?U$l-Wrr/8ozg]:!NHwe-MOHPV)P*`er!oy');
define('SECURE_AUTH_SALT', '(k}+f;qMi=?mbf6ZO6Sp<s#v:-UMiuhK,;o7UYuZU<IbU(KNxH}s!h~uMcEnbTC.');
define('LOGGED_IN_SALT',   '_w;4}ZEz|hWa31(Sf7wta}X[iNny5p+HZ<z]= FW54s-}t}!_S :6Ovc%5$?+Y{V');
define('NONCE_SALT',       'D-!?:ksq%u2VMOlc F$&ekBt]I/a~%_dVe88w,:Q+(+olebI}5MDd hbn65bvFxJ');

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

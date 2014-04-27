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
define('DB_NAME', 'test_wp1');

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
define('AUTH_KEY',         '[ljtH^s?:%r+,b4ULmt]gjJ>s :Mf;taY=]F3X0}%TiB-GO>4Qp/L^nD=0<JM7Vi');
define('SECURE_AUTH_KEY',  'kJB?wGw>0e3}E98]WwYLK<|?eQMy}Xbt)Qa.r*l/p6]6cp6zk%r6wv8U^A{bsHWq');
define('LOGGED_IN_KEY',    'Cw_?pLMO(F(vf]YU0A7^#cGH#@a42DR,5^##x~KIOMK9K%1,1Gj@fHkTw<&hm8Ba');
define('NONCE_KEY',        'r><.1@1-feN:d{0Q:Z9o070N4xDw+Ps(Wh`1h[[[&rCh9G@-)_A^+68r2>yEFq<w');
define('AUTH_SALT',        'Hcjz3~y,<%p$$NFIwHV{A0?XJnR/bu9S/{cWRrEeQxK>uikxi}%3oSIg<siIsh)C');
define('SECURE_AUTH_SALT', 'ara3-r!:-SG}gO;r#FL]X7.&w3BNnMVl1zC.xvJj8P}&qw,EgaqZ.wan #UVg6]0');
define('LOGGED_IN_SALT',   '![r&?T!<-?5)c*L,HRoZQ-m#0s5I0C#>Bj{yNny@y,HOG+<]6%@pr/,d~<f:nLp$');
define('NONCE_SALT',       'Q3LuMHrE6GdQA92bvRGCZRTN*XXV7eeV*}C#UF+{v0+G^@yo<:gdT0~)2J_J_NL5');

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

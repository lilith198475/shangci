<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shangci');

/** MySQL database username */
define('DB_USER', 'shangci');

/** MySQL database password */
define('DB_PASSWORD', '198475');

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
define('AUTH_KEY',         '4Of?Frat*>%DmnnQeNM?`V]VR-u|t,E.{i#+:K,K252w{XZ)4 KRSC<7xr-PBDE6');
define('SECURE_AUTH_KEY',  'jiNOrw`*oNS_5c9I]FDs!l(B=jq7;H;gWGUj@MKg][@`bJ<en k^]x|2;Z-7rA6-');
define('LOGGED_IN_KEY',    '%r r?T<sF9:@F%A7 TJX|v?|Z|!-+%8=kvl4D?0tqwhE|N{|OoNKEA-@[7^n+`px');
define('NONCE_KEY',        ';nO{Th*Z{8]Th56.I]?=H7DP9#]J^({aYdLz^Dz``> TD[d|,q*_aoesb|)%[~!P');
define('AUTH_SALT',        'xf$n73c>+BaQgJ_#YA gy/op<xPh,OSEc#+IyQXsQ=sRG,66gH5ff:aq,6-(n|n2');
define('SECURE_AUTH_SALT', 'G->gI(Q_TX?0=%~Sl@DJCjZ!--5P9;?x8tC9lZl7j+A.QY>AGd.3;~d27~z[xv[L');
define('LOGGED_IN_SALT',   'jh.rppJ~O|gAerR2x=gC!|y@^rU9o [iU1w?#]PCD=CR!>}|0Sf_{673hH+4~Hv]');
define('NONCE_SALT',       'Uxr0=@nmYn)?3&Qundobuv:(H0%D]p,3wFy,l-J{a|dIhA8|19i5GZ&I(0G,/RPK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

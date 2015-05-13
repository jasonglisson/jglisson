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
define('DB_NAME', 'jasonglisson');

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
define('AUTH_KEY',         's/4+Ztn:CNtl-+(O1!^^o#nH)j2lJT==mE;P`m?uO5=;H~vh-R+ap/oz*%*~-D?G');
define('SECURE_AUTH_KEY',  '{XBb ksF@+*:YzRJy35hcK@+hxR2|+o(Tmu,=Lwjw$F~;Vfj-Qh`S_GtQ) Uy^Kb');
define('LOGGED_IN_KEY',    '0*+22clD5?!Rf*<9GR~. 8s|ljwNIVum1ppw]z}a|m1U0neHQEolmK|-d2G[?]23');
define('NONCE_KEY',        '_2S[pp5(W0 _^-!/!VfS!ZmKn=L?bR)R.4sK}-NGjUJ~_H|=7!&+YSkbLPSzIoZ?');
define('AUTH_SALT',        'py[Q<?R.lrw=CMK5uyrMqd{3Z;y#O<6/S *7mos+Zy|7c u#W-&y$j>UoZ5631uN');
define('SECURE_AUTH_SALT', 'WEu1NKfT2@qw3j,p2&YsA^w*EWqw^C+.mo.6+K$u?A`Hm@>:Qlk=YU:U+$+w|smI');
define('LOGGED_IN_SALT',   'R4| +y-/NI]T%;<gSSsve}3OSj[#h]!+Mm2-A.0Uz4Fa|w{_NzS*/U>~QwMEy@s2');
define('NONCE_SALT',       '@gKiZH`-U|vxxe|$&)Q;Ws,8 PO R%n+JHcYa-8O?Qzs[2)?$mBA>Q#`u<uBk?R9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '23vdsDV_';

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

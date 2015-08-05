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
define( 'WPCACHEHOME', '/home/rosewellmusic/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'rosewellmusic');

/** MySQL database username */
define('DB_USER', 'rosewellmusic');

/** MySQL database password */
define('DB_PASSWORD', '0863974457');

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
define('AUTH_KEY',         'M$)NYRgC5HI+Kio/1x;yz}`a%sF[W7]k0S8?8-=I4cdgjYuzA@Zdc-FKlDnH7Hpw');
define('SECURE_AUTH_KEY',  '8NrL_)vOYX;esD-<2SC{P5e2upc] &rsU7;Fl `&sF|T8qR`Co%=GxD7j8!2Y4YI');
define('LOGGED_IN_KEY',    '-ThwYME!rC=:K*y9Q?3iGX;w|$LD?Mq(p#]|9=h4FROUl9brCsRCr/}`+a[qlDE%');
define('NONCE_KEY',        'YYd8pqhw#}!}w+ENM?wgA(5V|^V#*j80$:H(=YYMcz-N]pgM:s{vQ1V ( 4i^O$=');
define('AUTH_SALT',        '4eJ26xkDapU/P/t]fcF^pq~!)=K$ABB&b0(Npm?-30pS/&O2L8j=5v-f%r]~0G&O');
define('SECURE_AUTH_SALT', ':yUN%W~wfvpVs$G9t|--t#EO:V}kw=)5cDSV(ZcD|vG+CcJxM=P-Q P/Z+(mlP,0');
define('LOGGED_IN_SALT',   'TV-{kvi_-+K&81_ReK._M$W10p37{^]1e^5_wJi-@It$r7F4Maoi]xFQa9tY4N4A');
define('NONCE_SALT',       'M<`Z`rx$qx-VDd1+z=9<p[MI<kf|J+@W+REk-E7^Jd{?Q-<s+y%FNJy9-(-v![>)');

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

	
define( 'FTP_USER', 'rosewellmusic' );
define( 'FTP_PASS', '0863974457' );
define( 'FTP_HOST', 'localhost' );
define( 'FTP_SSL', false );
	
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

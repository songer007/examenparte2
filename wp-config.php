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
define('DB_NAME', 'bernalsd_examen');

/** MySQL database username */
define('DB_USER', 'bernalsd_admin');

/** MySQL database password */
define('DB_PASSWORD', 'solotu1234');

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
define('AUTH_KEY',         'hvqG76aq+zP]-GfnahPrqDk+M*1yZ0E)ci6,}yl1bje/Z#IyM8%S.)NBCs#HF1^d');
define('SECURE_AUTH_KEY',  '?]OX+|PCXJgbFlhT1O:?YWY&9-IFGjOl.9C8o+N#+ aT9gM-0P>JfPr%d-3o(y-U');
define('LOGGED_IN_KEY',    ')G O7BI,Ne!!m-wQ/l-,|H`TT%sHs@r?elO75-ox?dcQ{~1!,n3J. m2]pB9[]R~');
define('NONCE_KEY',        '&M_p}z=H[dq{ LZoYxf9q!+lPl#`mlQ-41vsA%;b@$RZB2tuY,u4}?%15+>ghtk/');
define('AUTH_SALT',        'LI^cy($-@,v|9pJU(7t+Gs3FIwdj7+:K[PC?W-ow:;eJ+-9+j?A*-Jrwr`kO`pw3');
define('SECURE_AUTH_SALT', 'XXlJzI7##d+)u=+%&@:tuN&)<QdKz;+KwYs. iNml9,v>WnR+GO^#|pD1fx`qEpA');
define('LOGGED_IN_SALT',   'qQ3ULmIVU +N80IhO$fl:dE{-U{UiJk&,J.bM3y@wv5W&$G$2Kwo--J9:9UnF2.H');
define('NONCE_SALT',       '?31ogO~@wt/8V5p&B9R)qd_Z+Q5k-^1.({vDP/;C+a|%|C>G`i(!N.:Z0+1o%Kv3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'exp_';

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


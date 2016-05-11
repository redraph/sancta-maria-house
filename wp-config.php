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
define('DB_NAME', 'sancta-maria-house');

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
define('AUTH_KEY',         'znJ5R?>h3mN]Fu|(JG&K&-Ke+y9qeF.HYGmB@ru-CkiZt!LJy@:JMWa[[g+7YG-v');
define('SECURE_AUTH_KEY',  'oO3GE|(o@ u%|ml6}s{3:+.]5>|ZO*wzBK(H)}<vW[9{*9wN3+FQTgc(Z<CYR,Er');
define('LOGGED_IN_KEY',    '1f|H%V-#+.h<&}?<s*G,;9Lk$&3w68`3X=#VRji3fDbM~OG<g)F2t<fC#vZN#|N{');
define('NONCE_KEY',        '=JqM}j4TZFxB|ly[u>B%sd01Y#5ioY[Z?xfN7u@rX%r|L3 a(u$+>g7=mCr.u&^Z');
define('AUTH_SALT',        '}Fl<r,F8YQ0o&M>~)F7-/>s{E/_}ML5*EN8zyZ@m`k!C:pMZ%vo|uoSH|R*x>V,o');
define('SECURE_AUTH_SALT', 'O$|+pmC*4R}-H2oD;t,#YXU_+eSJ6 aQ(Wom,s00|Zvq_4&$F$<s+h/L-T2_$-_P');
define('LOGGED_IN_SALT',   '#;Y2T*Bj_ha-_$@QM<z%THK-?_GB3|Vo?}]je}L%ETt{7k~#|GcodO1%x3b= |{d');
define('NONCE_SALT',       '#L.cD^p(vilSfzD:9DCxC0fU@T98QWX/e#7=KRX8,hmZ^q5DERfn0L_&X72,ACv}');

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

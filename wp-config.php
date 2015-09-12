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
define('DB_NAME', 'shivdb');

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
define('AUTH_KEY',         'K0?b/%8-Nie~Rv!XolT&TD-(D~Cy!Cq~,FXzMdw<|pNC2lh-1Xv$NqMrziKhJb8Q');
define('SECURE_AUTH_KEY',  'dKPkIXIQv[K@Ek<lv67EdWA*j8DqqSwbhuOq_qmN2*?^=C]rcA1Ivl63G56RD7>7');
define('LOGGED_IN_KEY',    'nHedip>MM4H?Hc@qsx,6Y0<q^fYS`y:mYag)>2CEa.Awm~JW2iCY]hvf(6[z=$ ~');
define('NONCE_KEY',        '<QkSDC3}m9kFJ+*E).e]$gVf);(9)w-*QG)ubcl/!cb5A`qJF8l4@`-3j23mk[5D');
define('AUTH_SALT',        'b/.ZQ6D=F<mp?Wq)]A9|t;0-:)EOx_y>V(Lm8O+H2v@79dzsF*gthm|iT<4AnWzw');
define('SECURE_AUTH_SALT', 'u@Fy1h}68]e=2Nm$~,Oc= DL&{mJU)[`dSD,*lgq(t95q&@jG,}=yz!;]wyFcw3~');
define('LOGGED_IN_SALT',   'w8Y^Hf%qi3A9-_[(Eyyv#h~0^rWBnf.H(%JNz9-86*,l|I{X@YCVaw|J>T`,([Cw');
define('NONCE_SALT',       ';6;Qc/,$(iL-@VX):P-k{B,E]#}@Fh]!4k.jvIb~fL`Y(i}|IX]NKmjlX`tr?f x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sb_';

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

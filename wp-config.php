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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ojodibuka');

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
define('AUTH_KEY',         'cPyadc1;q1d]]r*.8+o<i`}E1Lq>:[6eG%=}qy!YX[_.BmazB_MWPyc<8YI!Zp&f');
define('SECURE_AUTH_KEY',  '>O3+n`N]SHQ)2yu<mvvB3P~DyI,:^-ZR3eUfM<MOutVLH$x<$1IqGH#oOm`*U){i');
define('LOGGED_IN_KEY',    'Z&8R+[GgbAK#2jWR(H:5VPo`yvKdRgV(CU<YE.5#Ol_R:|DeN/x6#r-SF3T>5Kw<');
define('NONCE_KEY',        ',;+cF,0r|G^A!EDHo6}6ZoRI.yz; $/OA5w&E]~QEMuF=HiPK(Zf]]wXu*v)c 2X');
define('AUTH_SALT',        '8E/k%i%8TE?:f:-y;*d}Reh [i3>X#z)rrs9|5S]z9XjjcI+>8`-ZX[`2u;D)K(U');
define('SECURE_AUTH_SALT', '-q4I&< `Yo3@IY!K_eoh1pA_yCDI/I*pa}i+Y->]XP ifC;~zn7Wv.@CW*l5Pcgc');
define('LOGGED_IN_SALT',   'ZWS E5z&bs/c&Y g`utS=N4:V`]@88?G;@.wC_bz#*ncRoKY@RB!eb;m:|Eku:NZ');
define('NONCE_SALT',       'xW>e?.tp0E3t48({2r!h+;L_7/Lo.{aDn{hc]pxjdTZbcBjb6N 3|jRR>X@m5R_Y');

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

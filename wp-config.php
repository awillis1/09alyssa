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
define('DB_NAME', '09alyssa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=w2x/ap,]#k/#HUUmjY}JjpJa6LJDHj]v02=AP+|!)MVZf.iZJn^4BG%yGoi5XPa');
define('SECURE_AUTH_KEY',  'E`x%V_)&f;5_03(d_<l09I}A%XxZ+$M&R.1UYWSV~Tl=DgL-@qC6(.YZAu}<1PFH');
define('LOGGED_IN_KEY',    '$dp|7rOs4&&*fa+MdZ9~`%kmQCX,sbP)vvEv~yKwEO@*]Bq$b[WlP]g)S|DJjK,9');
define('NONCE_KEY',        'SQr+:T/D]xo~-Ko`3}lL`XooH{VLd~AW-6J=:r0hoC?^bc?um;][:RB5O>Eb4:t9');
define('AUTH_SALT',        'IWfuz{>5 gygjwYm]F,uW,=,khrDL~T,]cuO}KHq|O%QNLRiH5g+ys?R}})x5nC~');
define('SECURE_AUTH_SALT', '1~1&dJ6}(1_kGqFWQc8Nq.[I.,V!ER~2yL^o{m~O!)G!R:Tcc@K&SGd+j Oo1$m9');
define('LOGGED_IN_SALT',   'bJqzli<hKhXws&+F7xk<ou!Aue>lyQ7<|^}_ n#X2wGOM{6fdQ$N#  u4KFzXQ~3');
define('NONCE_SALT',       'axSNpxpQ6adwfD@IRrl/bA!/c S_j_/A( R#G,I4=N&];L4t9)c@F4+jcr8j&N![');

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

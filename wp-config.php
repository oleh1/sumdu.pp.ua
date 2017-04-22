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
define('DB_NAME', 'sumdu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'l4b01991');

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
define('AUTH_KEY',         '39b=cmz-)DyU6_V=Sxx)16?Su5yvLVp~+5AnSsYOGa[|{9p=vkM6cnhj__g@f@Wi');
define('SECURE_AUTH_KEY',  'ob40CpON/~yVL3_l >Q*pj3*RyM]mQPFA2eKHw#Qf1}B`;#G_6L!/1J^{zk9QVW>');
define('LOGGED_IN_KEY',    '!V]Z8; lHXG-)CtdvD/uC g1l6B/eE[`BY^__-rwYWMX|psqd.!m_fUjF$F1Fxg*');
define('NONCE_KEY',        ',6N)R!kftq5F[-(P=}@z4}:|;yTy^pWP=3,`#}c1F!=f3p|bWu!98D6t;Uo>{2hf');
define('AUTH_SALT',        'z:c*4x) Cw^H6`;zWZRu3wIg@0T0x^W%x}D&HmG4p@2@f]>IQ(@nh*F(71?0?xJ<');
define('SECURE_AUTH_SALT', 'eJMjzHoQb>(K_amAdomvpp*.by*O{#y?+Uq5m(kf4:G5aCV)qY&%JC|6E?WdHLm=');
define('LOGGED_IN_SALT',   'krW)_y%/(EGe .5j-o)P|6?b3$T+>7rLy$*QuXeB]8So3wH.n~cJVL]~E%@A{i0R');
define('NONCE_SALT',       'bs$xzCFoXN}pG(yTWcsAxo?EUD:T3cQ#]&^HSAUbbl!l6tWO|9G2PwUS,C67?-k8');

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

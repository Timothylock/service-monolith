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
define('DB_NAME', '8thmarkham');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_ROOT_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '_,bW)x>|:9+*3Dmtn/dWK!xAM%?gf%OvX25FILfnzxY^;6EDOr>?{Q-ZFoiaCjih');
define('SECURE_AUTH_KEY',  '0]S8`::Hj@[{MhY}KKnDuunQ8c?jB B=(vEp|9fpXo&vgfVB1?:U?n0-6+BZAI3i');
define('LOGGED_IN_KEY',    '8WWos;9M)r-nFGKc+Fw2SLY>]E+0&.2y4`3|D+vCQ?DC^`!V@0^ 9}#^lgX7|:Vw');
define('NONCE_KEY',        '&`d32|,5Z0Lz9a2ZZYz.HIzB-h%,Ny2]-/?[<g^rCJ+N=Xx6I|oaaHi6ZV!It=r9');
define('AUTH_SALT',        'Og[+?DmE_FLt#POr;>JVqp?zm)NJTfz,xb6}2eja9Qf g,d6#!+tYAC$L2+L;ZGE');
define('SECURE_AUTH_SALT', 'CB=0v?O#t3$a=MeW;qrp-(]d^bt,|^=Qf$,V}:oL]H,2MqS%y1xNfUY|o[h-6+_V');
define('LOGGED_IN_SALT',   '+%V}YtI.c2]o(;^RMb6qC)}:=HzRFm.pG*xNN-.@FzI]mn9Q:IC?NW#7L9aq*4i)');
define('NONCE_SALT',       'X/<o3,D~-cQKR2G -%n+8fgOVWXg2[KqL>[*5z/O JMd:ZI,a<IY(v!V1lIp$}mP');

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



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
define('DB_NAME', 'timothy-blog');

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
define('AUTH_KEY',         '}S{o8yu[U  ^,AbnpIZVt4^L|%x-q#!4]5s+ G9:b2=6z[Bk-4Zh~D87rT-~KbhA');
define('SECURE_AUTH_KEY',  '&a||=VQPf@o,_sP1l/$iy|A7e{~MX_9H37aI=WgeCX])MG?T%^!|4[Y=s]w,XDN:');
define('LOGGED_IN_KEY',    'v+xRrTw`6_V~$RB|gX@UOo7S7x3-k=82v.8DXwtEyO(#XBQuu&~.@5i;g>sQCyhA');
define('NONCE_KEY',        '|3*W)HvkQU.-8BJ`w.2Y)NK@cbgMs@fD|-j[7zW:?EK+Hd@e|aRLdgj(_]-Q[AcU');
define('AUTH_SALT',        ',U.[(6.lR H>c8R]9f}_9f)eN:Z2.u`BXS|d`IqzrF[=mQs}3Tdqy{tRV;Me6-+X');
define('SECURE_AUTH_SALT', 'yU=dh/=KW=!/UVUPa`ZbY?R71uMCEmgZ#cH;p#2*1`u$zv,|s+G796Iq;Hp~<rD?');
define('LOGGED_IN_SALT',   '#?8VYOaU-]@A+mrUJj^%5b3<g e/hDGfaG!f}`21a;}F|4C=i8og +cfsNX+sD/A');
define('NONCE_SALT',       '|_c{ub-mvhF`?zmyGpfgm}<c=heiFnwG9kMj`5%ljF3Z=KYc!@:0r@--(o-4-Pt*');

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

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
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         '%In5oUV-cDr|h nU=leo4%0VfSh^Kc_/8l;LB*p?`J%Q55S)<qiD8B?I;#a9|3Ly');
define('SECURE_AUTH_KEY',  'HI=,ugd6^+u(m3?+vTqA6,tm^>(w5,~Hk<^p!Iy~ix+,Q6|~8gQ&8:L/3:>Aw.<|');
define('LOGGED_IN_KEY',    ',.5k6hMZk.K/I/NrlHDFFhr//c1*qW[R,KRRc-=t5:#RF~&Ebg)w2F9 ro0^*,+R');
define('NONCE_KEY',        'S_9eF+n3A9Snn#5]55ed}:8id&D9~Yk&:K#Mspxy8 Ko4YtVBY,uiye%_<:{?H9g');
define('AUTH_SALT',        'mGx`}m+.H-X_,+4W2#]Q3}S-4SqIz` {wV^upPwMiLjMV*wX!):3SG7%HBmVC7rq');
define('SECURE_AUTH_SALT', 'Q;>9|Dk.B?R:-R-ben#dBX6-H(}Vkd8a)V4~lnO8# Ci#Ypt?rJyU2V8Od=m{h)_');
define('LOGGED_IN_SALT',   'K=#JX+h8#`Ra`RX?rbP_V9o#%#B`?b1wY~u:$kBMNC+4;,5l+?SfRw|LzC1hciY/');
define('NONCE_SALT',       '-s!m(Y953g4P.S9(dN&4m{<}V2Uc;tI^d~^QrBxF#k67U#b(SS/3Ci|xbSRw[ jF');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

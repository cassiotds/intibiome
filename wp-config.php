<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intibiome' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|1|;?`2xJ_RHQ$+u<uWFGVADH`VStj@@J-$euYLn)qAZFyd/]75a>?9>M+?ktYXN' );
define( 'SECURE_AUTH_KEY',  '%!Dz|2+sR1;# &AWMG8nnhv2Qn:bkebshUAOh~lK3BQX,OjHvzkYh*YOUM5Q]D}W' );
define( 'LOGGED_IN_KEY',    'HiBz!x!~uWi:[eFYz=m?~[KLT}6)oG-_1{lWsh<gtWJp{cI2>`@1FO]}O$rp|x!/' );
define( 'NONCE_KEY',        'Y]rm3H_i8#hj$i8*.T()Lw]^h@Q#,<[CtQ<4;]6`we- gT/77zSwzIPFCg:[.93E' );
define( 'AUTH_SALT',        '?voV TzcU j2u$(4HFhK0+KxDu7k)7gHh[t7<;j?>tu:hDse8@H9aPf)umSG#+3O' );
define( 'SECURE_AUTH_SALT', 'c]}u$8L)>:RL @n?c@1ycE{-~20 72LE>#b|yr0)&N8VWN$hxI QAa8k;.jYl8;%' );
define( 'LOGGED_IN_SALT',   '6tU]<QlW$|Fc^9MX]<w!;W)Of:WN]1BS0<>)IBe+xW7-((4O%vt<8Pq)h]VfIt2O' );
define( 'NONCE_SALT',       '[d5|ZkbR%i@2ZP$m;:L,eX=gcA2oMWsEL{KT68_8Ee6P7swg,7-4_A>NaO]2pY{=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'intibi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

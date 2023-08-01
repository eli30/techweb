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
define( 'DB_NAME', 'techweb' );

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
define( 'AUTH_KEY',         'gh0K}bieP5bg705[ |<-5[]*gG{mK[(9$A>}Po9xv)qb7 `1p(j$gTT&9]w0v=|=' );
define( 'SECURE_AUTH_KEY',  '>tZb-8#z/o0HKEIsQmNn.D$vaoy.``T~H2;5BlS&)J[n;3Y5RT)h(<{Y.Z:%J3)X' );
define( 'LOGGED_IN_KEY',    'Jy!%-|aOb%~^}UJ!hHTD&cy.Z_fg%oz|WY+#cGiHnx!o+XoxMz;JA9R4osbj|I(8' );
define( 'NONCE_KEY',        '9{u@2PntUGdnr?ACYCBeY>4GxY* ArjMH`B+y^&JYbKvSuluV(jie3^ Q$Obqic6' );
define( 'AUTH_SALT',        ')H;.wvjvPi+SYZ,<VmE K`M&bCP<0QNj@y?nVGF6sDf?.F2(_?>]s@;*bb/Ms`_d' );
define( 'SECURE_AUTH_SALT', 'QV&)o_61p.+@0Hf@:O(#rXxjLdb*aiyiSZUd0y/[-;>Zp2OJ-4H3.oH?0: 1[L/H' );
define( 'LOGGED_IN_SALT',   'u]R5=W22Qr^_BS]I6v:;Drx)mCm%oqmWX|OWS-rOvH43On#tMxPyts8SvGPz^%k&' );
define( 'NONCE_SALT',       '2lg?W<9f0rF>(}1lp?)78I#pOMEQ:eADw[99XMG~ZHH3**8wc@^L$8Bf587Qeduf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

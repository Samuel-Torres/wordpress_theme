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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'se&=RN<k~nkHDKX&p+js<*? J>c5VunJ9;OL^dXQ}|(VP#a_lwy|zp@h::w5`drL' );
define( 'SECURE_AUTH_KEY',   '20AHcu6Vn;7Mc@/3;c26^k&Xk2JtnDDarRwSV}.HeUPZP X@:GIJlaDlW(OgwgUB' );
define( 'LOGGED_IN_KEY',     'Qic!=q?6q?ZoSALDzinbYC.+!IYf~F_@%7o}:=8RM&m1K.Mi]bBD=FZRVX#Yx=0S' );
define( 'NONCE_KEY',         '7qm=czo /yPK|jY<_tpIS2VXPmNoycjmh6ig-XeyDd`6dcNz.Ebkz0j(.@_f[#-^' );
define( 'AUTH_SALT',         'zI35>%c9nVl$1}zzmFI1%lUG&o_>?{Tv(Oa;eJ-!r,sm;w<ijJ(43!/C@e&M]hEx' );
define( 'SECURE_AUTH_SALT',  'iXm%co=T9LNYxuB>t1!}nXMOAnZh}tOA+c6P~TV-LcEOMBid5/>z-;C87fNCyJJ7' );
define( 'LOGGED_IN_SALT',    'pJ{<J89Q Ig~K$ccd~N)&$SwrqO@BxQC$j.)(V~t9,t;FFI.KEa7>mf.*Ihu10p6' );
define( 'NONCE_SALT',        'qG64JxpfX)@p4{P-]:AcYuGkv6u9,7s yP-J&$s}ODE8VtJFiXCYMly<b(x]MsP,' );
define( 'WP_CACHE_KEY_SALT', '[!f/-.280),C2rX+HvqibcA;xk`PpIWN5c3$,b,H-%d3B?^x1>0KpEdpZ a88+=4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

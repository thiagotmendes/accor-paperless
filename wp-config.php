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
define( 'DB_NAME', 'default' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'user' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          '#}/y5;NvU_zg(mD4sC|PyAF%6AWsk,6J[Vq/Kc;5%]O6w0|#|vg;,)@_%L}}Y)JE' );
define( 'SECURE_AUTH_KEY',   'a$[:yK)h`,#D|wO)jw1c$!~|c9H^!qbngzUs)j30*c]9m>t3j;54ihGLQWRKI}_N' );
define( 'LOGGED_IN_KEY',     'ADd~KFRgOE9n/KTwbD`Z5^8mKu_d]t=l4H1k|f^=/fE!-.]v;I-N08}4e/>lN]<@' );
define( 'NONCE_KEY',         'GvBr<9p~Do6{5AN_d@q$dXVO+;LYk13e2POc{.kmQc7KEJVh*{c^O:EO?dO@kThx' );
define( 'AUTH_SALT',         'v5G3MmH#}FgI8H$$=ome4}1`x#|>U }B6+CeW$Q$!e+04rs(l@ebph0d*46?7Z2#' );
define( 'SECURE_AUTH_SALT',  'aV`RF8Q:W,*yMv:Yv&#LB)jqee(03nA88nt~0M6sd&!^FL`*9*`?TZHT0v3X)+t*' );
define( 'LOGGED_IN_SALT',    '3ismk_jx.M,8zb(ZmAt4w;d5F|b2OM:;]!R[ugj]bp=d0JK]%(,]ej-CH1m$KyKm' );
define( 'NONCE_SALT',        'he.TK{O5,Sk<%o!DrizL/^rsz:sL2z{$Ma+{R<A9PZRNR*$s :NUVoUd4~V`&93N' );
define( 'WP_CACHE_KEY_SALT', 'WR_<2/e5(uEvJ`dZCBPr?jkNx*uc07xKhCG}})u_EB72s^=vo8`j:T:_Cx*YIiHX' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

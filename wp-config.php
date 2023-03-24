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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accor' );

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
define( 'AUTH_KEY',         'ix,d&cp1PAl%bVfWv6 Ok=x)/)/N}Y>w|kyO*%ui;H(U/W.S6)`L(-S3Z]*0B:F$' );
define( 'SECURE_AUTH_KEY',  'CqCUX5CG=X6e*zDd0DtjFMw`3!&SZ|UE_1Q}I bf`S<=SCuXUYnvGp|YA_~@1Goj' );
define( 'LOGGED_IN_KEY',    'wT^VGxLIC@L0S/?P<+Sj&W*7 %@>aS^g@>?tzgWaqofuvZY]EtCqwSV^s#q5#OjQ' );
define( 'NONCE_KEY',        '*)qMZb*vOs5f.R0/dLPgpD{1FACD(.|n3sTQ6CY]}sZh/PCN;.`P[y:^b{` e%tt' );
define( 'AUTH_SALT',        'evn5Tr_$&,>;ckl1,w/iU8@<{*:coY??lWDeCz5C-Y_6QeBF:e crh0JmyNHf2$X' );
define( 'SECURE_AUTH_SALT', 'vAdXH#&~klX5u(,0!A=bTQE^2 *)n89bD,( )=zN7g3&P8.bn[(<J]/DJ~P[liCb' );
define( 'LOGGED_IN_SALT',   '/i^rGAc*E:BFXi5E&l0gZ<sPl*CaXiwD(^1XvM_i:2LV|cD${=152k:C^a1aHlB.' );
define( 'NONCE_SALT',       'nIlFgmaw:bl6*2:=vk-PfQlXDN(G^eI%:[{/o-^FZ6{1W(R|> X{l/?,=WV,EZtG' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'accor.test' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'AUTH_KEY',          ' CqhDhIYQQ(gFrM?rb.5|L=;,U<gxm;}MK*pj)Z]36L?PNX8d70{5sHfb;Tz4jF,' );
define( 'SECURE_AUTH_KEY',   'jZ^+,JDXq0k4n!a^)$.w7kf*v?5L~Q.w921=f{2 WzzhrjY OxjDd!D=,vo3(U.1' );
define( 'LOGGED_IN_KEY',     '.;Cq vxdC#HnKk}cL7Frs`%.8>7jhWn]{~yn|w3K):}3|94/hLa_<_qNyrW2yrf-' );
define( 'NONCE_KEY',         'J8UHYta^usU7Y&doTqYTF7U8Ci?.Iwcy EbWW?3|3cA;B)&pq62_#}aCtMEhq#EO' );
define( 'AUTH_SALT',         'D jf #e^B:kbMd5oJi.vc_il$Y?9yoGYxUaM]kd=O<)Q>,Kp=8-{v!jW)B*t=!>;' );
define( 'SECURE_AUTH_SALT',  'OUd<R;w RbetKu%<8vy1%?hFQx%yDH2N.!*twpf(<E(+&IRvXP2&NmOcJ=u}o[Jq' );
define( 'LOGGED_IN_SALT',    's9;E _.wXOw_Q.% z9^L<l;!06C%,CD.4 -+U.q{Ft1r>O?{!+#%tL{1a9b!<}z|' );
define( 'NONCE_SALT',        'LR=>JH#SaBl{a|_]rR2m<9Dj7}@G>V[<FTK^q_C-eA-q!1p/nNaQS;p07vA0N U0' );
define( 'WP_CACHE_KEY_SALT', '4scFoCj&{c>(eZ!R@`HEzxw`HY}Ru{9Xv!43SB(8&6RCLRf3r:ZR3-RYyaAT#-]r' );


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

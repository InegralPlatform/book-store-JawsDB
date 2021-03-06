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
define( 'DB_NAME', 'rgrqlwwoxwsglmiv' );

/** MySQL database username */
define( 'DB_USER', 'q3a0vr1q5yulgjqf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j5uvpnawf4hy6v35' );

/** MySQL hostname */
define( 'DB_HOST', 'wm63be5w8m7gs25a.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OtmhF?<2):FaTv5gS9b;&Y98ueFn@^>;1GlzOt2~RZ`+`WZcvhr_Cd}fuo{PJZV}' );
define( 'SECURE_AUTH_KEY',  'Bi 3[a{J#vN]{_Y?U<vc?|H:ocNBaEX230GGH0!{k!{m;I3NU&V}uB<!TW8u~/^c' );
define( 'LOGGED_IN_KEY',    'bi{r,pPrE+Pmw>$qec%Gu_ro=P:U+0U:,5z0C5#2*7t9?roN*I9 {_xtc#cq;_%8' );
define( 'NONCE_KEY',        'JAdP[XP6?;RLBbX80Q8+UfJRTz9QpITBJnrzZTbkMa8]t7.p[h.6L#Z}Y4d:T2cm' );
define( 'AUTH_SALT',        'J/A+Wx4a~QA</=7?gIKx]jhAn#C)Dz,s:Sws*lN#A6iT;];k^mv8U,3mdLAoaBxW' );
define( 'SECURE_AUTH_SALT', 'YF&]}8VfU_N<XjsjkY?![|$<EUB:*WSF2nw:9cbexV1y{ d~P)s_a2(?qS l[!s^' );
define( 'LOGGED_IN_SALT',   'H-g(Ce*FTEWxl,Mcd<x3J!$BLGQJtmUVT~w|*#Me2a70nRqO{eT(W[jH(ylUm*m=' );
define( 'NONCE_SALT',       'gS]7YAsA*96U+3axR-ZBxB=,#=(b8jbQ5Gux/%hd_WWg&k0Y>;I<-+Nd&}Sy[hN1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */
define('WP_ALLOW_REPAIR', true);
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

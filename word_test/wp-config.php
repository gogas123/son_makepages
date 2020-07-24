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
define( 'DB_NAME', 'ydreamdev' );

/** MySQL database username */
define( 'DB_USER', 'ydreamdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dhkdlwm@)20' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'V.suj6qH_.F`VBi1xx6_`Zh2Tr#=t *OWA!}Ibc$b_rL--e-(32?(,:liXeU(+a)' );
define( 'SECURE_AUTH_KEY',  'mMu5_Gve1 2L?A^xf7#j-XW7Ak*aV5-CP^wxn<Ky2PBxU37hk+azYk;TE$,9[dVc' );
define( 'LOGGED_IN_KEY',    'E*`W71]((Cu~LHu&qZj~;{fRyQiL@QlXj@@nvMBss4@]!5%v[}r.[wO%mcr]$8?~' );
define( 'NONCE_KEY',        '<32_Y9`_YxH 8x%#-pGYJ8Ul{#?8IE/=DG,uaJL<g.,bx0:EyKd6e|b7KMLEf_{`' );
define( 'AUTH_SALT',        'vGT/lh{tDigaCrogyySCBBn}9;8q9$7KynPFH]QQ0=:0!F![5LFDPYERkZTKL,v?' );
define( 'SECURE_AUTH_SALT', 'lM?scP8w8QD/JR*`ZlkzFd-f91;rbk*Xnz|ZN-5 .9^u;z>[]8kT<MW!W}JcgnJ[' );
define( 'LOGGED_IN_SALT',   '<$T4B@B3`/JrGOx,!];>%<D,[(DN6l?ORMd:zuu@f`<8)y|8G8.g<(Rit.2vMqe>' );
define( 'NONCE_SALT',       'f9Kx7o_FFof,ewAK%G?g%NNSPjNTsY% `1xiNORFy4=E=* SRfltUNh(tgl[2im4' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

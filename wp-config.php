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
define( 'DB_NAME', 'beetpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '@snT/Z>ny9w1t|~-rp2DcSV6.AU#.VDWSG.3q$VS;8W>QSwW*1$p~W|+ZX1tf}A-' );
define( 'SECURE_AUTH_KEY',  'P6eiy(?~y7TRx34$07#K0NM<ROzbsY]v$t7>uTjr2fs%)*Wo?l`,Xa~4y^/;*>9]' );
define( 'LOGGED_IN_KEY',    'XF^/2H~nK?Wk G90G?ySI.r0v|&Dj7!c0W&}5%B3@raH!#gaEG~ 7eC_]VOBBqa,' );
define( 'NONCE_KEY',        '/YWbk$<H6Nz}%e1Vz51 K82ckEg@r<@J*@JGB3y?K?O|:*: wRVZf|-M@kE*f/X|' );
define( 'AUTH_SALT',        'iks[{V%[i3 tm:D^:/[}xxv*Rptur@n_pAkS$`;=m;7NhQWQvWD_d4gf<w,YY,D|' );
define( 'SECURE_AUTH_SALT', 'hJS*z4c#K 7iJ8><,vFjy`[4Z$-[]8P)ZxHHN57~C=>Y.UOPd {4_id7@h>[<|P:' );
define( 'LOGGED_IN_SALT',   'c3:b/P0Xuz5?R6b]gP )&kW* &@wq!K0pBCveOr7<.LQ0,Y/X&l.3ZCHE>uw&=>P' );
define( 'NONCE_SALT',       'P4}au2.;AcHm;{y5->(8-Kz],r=FNy` S%rEf=H2cWY*nNhubl|k#bCj6P:!mUvG' );

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

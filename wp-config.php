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
define( 'AUTH_KEY',         'bNIWEy?+2p}uG42+2*o;!I<>+q!pnlLGS)WWFb@vAX32ilInjXI$o]$~!GopWJ.a' );
define( 'SECURE_AUTH_KEY',  's{KIcL?3D1W1LtFCae<::FH#AL^`+}XH^rQd/W;-:9?]5AW*p!1`&=iW=&0hUMw/' );
define( 'LOGGED_IN_KEY',    'c]D,gl!9^&fMO_[e7H0L)44Zd<wypGF*PO{I~a^v@YGTXRC]iA+U`peqBP<o6pn!' );
define( 'NONCE_KEY',        '` g]M(D=7k<^?^UO?JHq)zkZH&Gve6c`Z+b8Ct7rzrsQ~y-5|S4Hlw9iW}1R}s+*' );
define( 'AUTH_SALT',        'uMdCalDp_Rimobm<k?`scPpE^p|})+&UK#(ml|Y/UrKY<_K=|,AXk)OzIzw0Ph(w' );
define( 'SECURE_AUTH_SALT', '^KIxsO6S%N^H4Ae-P`cf%n4<Nn]G7Z~Xh1HXDH`o+Y-{(&q^@^#*g>th!@ef&7.&' );
define( 'LOGGED_IN_SALT',   '_YWS5S$^KVu%YB|>7V4a>W8aHNoZz+<e8pJRF|1L^<!M9tqztEroc+c}7G]_if5*' );
define( 'NONCE_SALT',       '~Izw6%xjBm=N0P6+&{xYcKSoIoF|y%vJ?{Fd O@XXS~3_zL`Lw^(XC:i.I8iw8{1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

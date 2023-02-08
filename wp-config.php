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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'emilio' );

/** Database password */
define( 'DB_PASSWORD', '11021102' );

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
define( 'AUTH_KEY',         '/mVOUdN8UUYMjp$T#;Wxg@T4$x|lO f9}${#/x>P}qL`QiMXp#8=X|k]fRuS$?|e' );
define( 'SECURE_AUTH_KEY',  'LZK|HdSc/+LxIr2d|Ry~GfINl;CO|]_BE!uTrqdI)b.Y:=;y}iF?pP5neC#Li]+*' );
define( 'LOGGED_IN_KEY',    'Vg0}?q+,<zYxcg%++ ,(1L)p?8ngqjn,T}AfYt]2O^r`R=UPG9y/}MtB^+~|F^<=' );
define( 'NONCE_KEY',        'A#(7ACCOKP;>pn@aP$3_ow6d(y(]DyL0gh/=5W0JI2$[?wth&I5]Mqqcixy+c5Ed' );
define( 'AUTH_SALT',        '6]wq8Jm>wW~?ZIu5W7QnZQ428&owz{8FEvo[2e4o]kyUs(2w~}VwdM8yJH}C)7UM' );
define( 'SECURE_AUTH_SALT', '<m_<?%@N1GN2M`QCf_mi(g@z_,hEQ)6:=}^CLMTv& QxP$c3X#6b@lwSOP&LwAT&' );
define( 'LOGGED_IN_SALT',   'Y&BsuE,e,).:yj8>lkx?_(E7_K6F:c7[9/W`FpS>6HG*0<dksZ[4HObr3.)u/4 R' );
define( 'NONCE_SALT',       '-Sfrh@&Ko 9p`nBu$82z2{siM1R0hT[`MGpC@s%{$kid,@7F-+{h#g;JyE/_>DH5' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

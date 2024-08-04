<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clubs' );

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
define( 'AUTH_KEY',         'O{2LpoSGJ9lnWKoB=LV5<heDv-]39`{OFk#]Ta0TuBDP(:XwkFO9s!Q_sV)F(E|n' );
define( 'SECURE_AUTH_KEY',  'D:F9%I}Ai``C)gS_P&*bSyO{j^:.?gi2%`&Hr1CYc<KeO16O^>XK!ASx#bCp*j~8' );
define( 'LOGGED_IN_KEY',    'oG]dus}C|Y25Vyg9(K?!BvI![m#IbstqVzRFJHRkS(8vo(lJ>+b*SH5=@$Tqh+*p' );
define( 'NONCE_KEY',        'VM3kUfj*wnu.&&5[H{mm><RCMxFl+2yxptNj1}Vlf|JK&FmoS.dNX#iKIDb#WupY' );
define( 'AUTH_SALT',        '_y,JAP%g@@MndUo+$Ars[-=K^+FXJ:`j!^2wmm<[-$J4 E[A`?9lyc6M:A#+](:Y' );
define( 'SECURE_AUTH_SALT', '#5v*x.mr(/_Q=z`h8 _?PJo;z3i+7;@8@<iBc6m),!=x/_@~Nu;&I3P >]yg]UZ?' );
define( 'LOGGED_IN_SALT',   'gT4~51_ |P`Wiba-5oC.%h)jkm}j8&(9K}+duaM.*{D.(qgJ=:@>0j;vddbNOOqr' );
define( 'NONCE_SALT',       '$Q1+t?*#F)^2K_;}^o{ouSB[6ioHp4v0x?`-^Ef6bALR0b._! HD&@}x:weDwa&u' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webhavva-test' );

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
define( 'AUTH_KEY',         '>Oq~U{zkq_<+0Uw3Kk,,9O<Ln*Ct=65r!osb}r5HHG3bfH#5Mr ,)&ka67x~GN#6' );
define( 'SECURE_AUTH_KEY',  'X0[7E*UK<0T1BKdllk[.ju%n3*n]^0IDV*s]6,vN^QXnZ*7M#mEmH#j]lq3g/Lsz' );
define( 'LOGGED_IN_KEY',    'G>tKuHgV1tl/1q|)Nl[K-eZdYEyZRGjD4xhU+9i`#Cvr`cWo,YXU<Rm()m}-ixe_' );
define( 'NONCE_KEY',        'r<:M#Vk)b!iw^c|j_=n.=z(s$6KA_M!3EJ2[;JN6;Mz&; Oql,`<|]}RdZ^T4DwV' );
define( 'AUTH_SALT',        'f%xgcAYePoJoi)_&cT,_N|d}Uy:2E. IcFLsrV$Y=#QJ23Odr!{Nt$-;s*i4?kaH' );
define( 'SECURE_AUTH_SALT', 'P=!:6R$$sat*bgD9p&8FG?#=O?&^=Mx3p0rLH}(hew65[O2Su, A<V,<CcL%|2m%' );
define( 'LOGGED_IN_SALT',   'FH!KLTLB6M8+s9<]5]gq3w?WBX^l&m$rWG~ ~}LNt`7mulc+Wee$+mujk;+)8%Y&' );
define( 'NONCE_SALT',       '2zCd3UP3vSh;17e#2o [#K/6!&,VXPbU;7PDQw}m~j2~&y+pm(S7LRS:s0sq!Bcy' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

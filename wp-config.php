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
define( 'DB_NAME', 'firstdb' );

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
define( 'AUTH_KEY',         'qzRosTDXM3Lmg =@5,]Ay} *Y9~r*UL~(|{gsag{JyQ@}NJ[&qY?Gt<*Y-mU]kF`' );
define( 'SECURE_AUTH_KEY',  '69e3jI- 1JtOjjZsv!B()JMh|x7N<>yA#2~hvc% cj0l[eA+3%rkfn)1_Jd1{XfD' );
define( 'LOGGED_IN_KEY',    '%hOxOb5hv]9il<sQ@mukeqBP!+SrC^@7/57PjJr$ONPnFCHs~,2lX%p(HUw%8E;u' );
define( 'NONCE_KEY',        'uOD;^)P_Bf=x+:+Zc]><Eu35VQwBK(Cj!RfE6DM-4^`^Vs/Y4])#~jG>{TUAE^Kj' );
define( 'AUTH_SALT',        'Fuuh+6vX0nVH(WltE#azrv!onvd2GgvzC{AkLiLOCDZ>Tg80ZHcM}+zLd&OI^s,j' );
define( 'SECURE_AUTH_SALT', 'sdsdun $x{M),Zdfy/`k^pZ%`T8BQ?gWn{}~wwr!wr+LF#o4QiWH{t4h2ui6-(m#' );
define( 'LOGGED_IN_SALT',   'dk22?Bwm=G+Q7ImyJ<k^J=.<S]3!#^-05F{A>i1tM/MQwf:yPW 3Oy+-M-ZpZ)`N' );
define( 'NONCE_SALT',       'h=pM_Zzze3f73IJCUPi.f(<{E9JE;aOnmf7mi60=cQ5YFJ~v%% Ukj2Y@q3H3]00' );

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

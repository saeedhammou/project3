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
define( 'AUTH_KEY',          '[7gb^X1(f!(uH1QfobS]M5?U>/d*m--*2W7D)?<1M<2x~xORp_B)(4u^@reC+:P~' );
define( 'SECURE_AUTH_KEY',   'T_91nuK9 Q%H=2uR4F=^c~e`.gjrx/rsGSJ~}.T;I@QrOQ4ak.FA setbSyz|ufn' );
define( 'LOGGED_IN_KEY',     'uJb_6 Bc5H]]Sx~s5qc[_5-HG;M+{m;_Isd-1#S?4q7GpJRF`LcZnwn=CnR6)l`m' );
define( 'NONCE_KEY',         '[x@u{q%X=/Mt$(7u<OHBE86hu<0sJz9`d>sF]m.Cs>Q5h!{;`yTjCkH^4ff`S 1K' );
define( 'AUTH_SALT',         '^b?):^zTMp/.Su?,H]S<7O1*aIl8qOq<2)/u>2!t<5 3/F$=Lef{VyKdB0Cei0x5' );
define( 'SECURE_AUTH_SALT',  'eG/2;=]@I+U&s8qP#yXw?d=~_tCVL@%G:Jb.)x -ni!OKT6S}jzZahB>gLiVtSSW' );
define( 'LOGGED_IN_SALT',    'sC+3P8sB[=0&5:9JE)lCw4g0^TI*}][(~I~~HW&j=&xgw:4f+QX_pGU~{Ol{Lk$`' );
define( 'NONCE_SALT',        'B`rnN^.+e2NEy@kZp*f+strQ0Y4RmN]d!^1P.M<9~*&+`G8*y>)+5!@t|y:NGpE_' );
define( 'WP_CACHE_KEY_SALT', 'Aq>MV{#la:8uAG6,6Wyrr?$%WT|T8:*_z/]rBd{ ?vOXEt]~WOaz&px*DZcW;^aI' );


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

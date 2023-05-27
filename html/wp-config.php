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
define( 'DB_NAME', 'powerbimbo' );

/** Database username */
define( 'DB_USER', 'powerbimbo' );

/** Database password */
define( 'DB_PASSWORD', 'Ly3fR2DwyTNq' );

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
define( 'AUTH_KEY',          'z=-A@yCV5/B>}#5%%7T)W:bTjpj6(RXHb_9;!m/i|~VRL#+n o}U,/b-2OdH`bbH' );
define( 'SECURE_AUTH_KEY',   ',f8qvp$Ke[koVvsXU<VZfS^-IgF3zQb9N-o{{qHH:+~!71TM(4<FUpso@!!~=QCL' );
define( 'LOGGED_IN_KEY',     'E~6?wAJ>epUh[;3d3p0:<4cHrd85bvj%f,}:ko -PeiF9ow/3IeaI0Y^^0a_G<(w' );
define( 'NONCE_KEY',         'aX$$stG|<8cgiAfhxB<]Q5FH2:^)7CxR-]<>C_~nq<49hd/|R}KB)49hRXJ9KMC1' );
define( 'AUTH_SALT',         '$rXI_wa4016!^h?xK~(p>n?&44 hZxIK0rd%clSq |KX$]nM3O!k9Uc#i}&tUyBU' );
define( 'SECURE_AUTH_SALT',  'I0-_B0kY9}|k}vQSK/RR0hM],Zy7QA9KH92y^9-@w1fn{9+L?}A=,pC,I],|:ky+' );
define( 'LOGGED_IN_SALT',    'T$4Fe^DdP:-0c,Qk_CxUL9A%A&VT.{K=--B>@TuD,1#m7cE&K@ XWth7I,/!7Wcj' );
define( 'NONCE_SALT',        'b]dnwyMujLmaXNOmiQTQ>~Yb(q@1AD|7<L,{8lO_fqnf6O04Szm?,#>24VW`U]`&' );
define( 'WP_CACHE_KEY_SALT', '?yk?T8B;biI$NHs[wOPPx|rEnuD9;EU%lOY}u~[|MVdXHgB+{o$N~zk/rp6JWU9r' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

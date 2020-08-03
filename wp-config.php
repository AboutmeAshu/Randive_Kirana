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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'randive_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']S0f[| DOTC`y>PPaQ[xyy+]=yy62Q}BIzn IJTj5w9I%i9epQg.aO%Q7t3Fm/W_' );
define( 'SECURE_AUTH_KEY',  '_CG2.>~^r2)zA:lu4ajB8U2pn{va?4gQ{}G6OSp:pEoqteariH$(dh{`e0>kZmMj' );
define( 'LOGGED_IN_KEY',    'M4n*#/f~?tjxDe>K4&S?*Sv%AhEhU~`({F,4g6R7~rnRzq=y.)#Xc[>y4ypZv}o?' );
define( 'NONCE_KEY',        '8a`7i$6jWS_Fb<i;)k1v,/XQmv,P4]rg1=D}Y2TWXa*]C!??v7tOj%~HPDZ7QxDr' );
define( 'AUTH_SALT',        'D*<qn4h<E:`kL=n%JALv|=^-eqOV%q4q*l+ghxWy/]BH[_R]$_@ueD.-hhrI}n`w' );
define( 'SECURE_AUTH_SALT', 'h`kVUG1DnKt?VD0tB/_6#ML3rG<*.8Y!if2>&I/?$f! Kmkbz%G4Cq;N<={TK|,)' );
define( 'LOGGED_IN_SALT',   'HYFc/!Uc~zP=HEbcu|P(lAXE>0:bCHz_nbAI@|YPq(>,>L)q^kk!F;DbCXJ97VbC' );
define( 'NONCE_SALT',       'KS{Vo_6A]XcWWaL:R/{Ukfv/8RThq/V_m3ov/c[)0]rZeIOHq?yv82{ ~Z^*EY`H' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

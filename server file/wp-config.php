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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'NJb]7ol89f99*{TZ e;Z6l+AuCqU7QQeOqy,8n#C):mVxZXQ5wV[.AzYzEaSh8SL' );
define( 'SECURE_AUTH_KEY',  'O7n4|dQ]*zI7NaeTL|s_oaia`Eqeul)JdK-X]i6YQ_=BkZG)_M>NGDMR)lr?:OlJ' );
define( 'LOGGED_IN_KEY',    'l,R+!H[<Ic&Q~WT0[hY$x:!l2F.}P>A(d@<UiXC!7nWpGjPNT6g{p.Y%2k!1seRH' );
define( 'NONCE_KEY',        '<FN[)@e$D6&#Ux$DA^}[drN|b|;.JSPx}6OMN*E<+2{Fo,iNN^r[bQNVNK9RI.C]' );
define( 'AUTH_SALT',        'S k6saI a5)F6cR%yc<F)z`zv{H=F/MKKQIGYS8,^8#;MnHK$?c+4PhT+#W5q+`s' );
define( 'SECURE_AUTH_SALT', '#/vlI:ZeeJ7pmT0/TSS*o,rZusXI|cyd~ ht}~Ogc~|3[$LLMrVGM@CU`eDfE-YU' );
define( 'LOGGED_IN_SALT',   'Mr}&wxrv)]uQw{7kUG%0J#U2}u~DGnC3D[GNj9~gw>xx?YS5F|x1/|!fqxk,y8B0' );
define( 'NONCE_SALT',       '(z+XbN_v3)8+Ke:<H!9FGICL!E&*96&Nl&MV5j!yy:G4k)uvW@VlXV)mkrg2?sfe' );

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

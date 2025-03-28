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
define( 'DB_NAME', 'Tintuc' );

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
define( 'AUTH_KEY',         'Z}: 0WlG!u2fNNsvmOY7yMCO+jM.Oz]L>0Xelys^QV*Io#nf;zi16;nl46l@,u7t' );
define( 'SECURE_AUTH_KEY',  'oac?$P=fJqC9<3nz^]VY]VVnpwsLh>I[OH8(j8j6aSPP<d,D=J:x@Y~Ke+qRe<kt' );
define( 'LOGGED_IN_KEY',    '/V!Mc(j@Fmbq7.p~H`WF~5Q@kpwhJ^5^W-;#Y1bPvZ*;#7w@W1)sc|L&Ed0Z*fHN' );
define( 'NONCE_KEY',        'eEn6meD279[mniFEJLr}LA3IZ~X&:roG)1g+wP)E}.Do!a?v!Sd>J=LL%d/@8*V[' );
define( 'AUTH_SALT',        'uaZ3!^58r+Ph4!_4.O=t4YC>Jo-Z=2a[)qQItV)a9mt#b+l?xpg=@ZRYInx{[oR4' );
define( 'SECURE_AUTH_SALT', ';Y{y`YeLMSk/;&7KE*B{/ZnEMNqv@sb1vt+IyT9Sp)&@xY8@cvx~,OB1JsnwMg2-' );
define( 'LOGGED_IN_SALT',   'vy]mK>Gj2DYdQbLTTLzdp3S!%(wc26%<Eq>ju4wG EF`TOw}W!h,^Q/ [EH`6&Wu' );
define( 'NONCE_SALT',       '`n@Go|p$MCZO$#.]:O>x)Py&g$ .l?d)+m=V(Ykpk#syjj9H<%O1.:(`BB&IB|v}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

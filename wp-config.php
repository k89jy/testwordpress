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
define( 'AUTH_KEY',         'Z B/6|7V`SZt%s%5G|/io4xZQY?B6bc_p>NRB+9F$ey7T|[-9Z9EWgrP?!eX!+/|' );
define( 'SECURE_AUTH_KEY',  '~c/reNnxO89Y8_0oAy,)]k[P2=H08Wq4.=4EH8hQQ{0kh;?04|t#lGqr<-u(zJ_]' );
define( 'LOGGED_IN_KEY',    '0|H^l7ZpD%hj$n`%j7Oc2Tn-9^_zFh-Uy{L@^1p^IL$a:IYhP`qTtS(-:>F[>S&`' );
define( 'NONCE_KEY',        'do|)2B1SruAQ(nN@4eP--}vz-O7K0]DJ)sE5spR*#qE7tNG;=_-Ld=)@I9D5)tA.' );
define( 'AUTH_SALT',        '[`5o;E?&ksIt7gZf,CN5YgFl<*h%O!9uO19C5dCR|.sa+:nMEwzz3|hJx43S}swt' );
define( 'SECURE_AUTH_SALT', 'm4tun0?e.BDDo5]X.;&um,TsrW6&[ 4!tB,U%DJvqR2/5C$_p&K}SGhW!dGeuvwU' );
define( 'LOGGED_IN_SALT',   'Te2b.iqYQd]7)tGN%}~)9dsuj`$hz24nurE,GqqW@L,,~Yr>j!V)OFVB>m@ok{=A' );
define( 'NONCE_SALT',       'pB5_wWfy]WSxYwk*SD!n ly@J0+oC9g7GHI~Q>4MRY^]QP-ruZ:-m/P39vd*W }W' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

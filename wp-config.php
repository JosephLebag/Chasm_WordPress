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
define( 'DB_NAME', 'chasm_wordpress' );

/** Database username */
define( 'DB_USER', 'chasmWP_user' );

/** Database password */
define( 'DB_PASSWORD', 'chasm1234' );

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
define( 'AUTH_KEY',         'DaYhm4V!/Nm4%2wfBYx%5Eq#tfnuxOg4_KNZTua6~EQr:jq6|Sr8}KojEFys]vy,' );
define( 'SECURE_AUTH_KEY',  'oAB6u,T8R*o(GL#tcD>RbH{JU/eRP`1P[t8GE_P:bcQnEXR6wWu5=3z4$-Ww8}RC' );
define( 'LOGGED_IN_KEY',    'bG&,G%#EvsNds=u@[rY8._aW6x6L~TYUP.u!+.!{H;]PT4L-bf}Z^T)*9%:*xm%A' );
define( 'NONCE_KEY',        'D,7pjYU@JDRIeF8h@QpAh:2N2%MTt&QFxQ(jSUFT3RWr~4Ecmd2Rw*+o+V?]inN)' );
define( 'AUTH_SALT',        'H8kPko/XTRfK-l7t 3)nr;TuQ5c</L)%c|M$F5gv0IavSrwmfWhD{hN!c2MNVh0f' );
define( 'SECURE_AUTH_SALT', 'kZI4Z&|uys/E%/N.33RieYEo`u*`-A{P(R-yO~hgPHUdWKz c=,9_@)(`BNyj 8h' );
define( 'LOGGED_IN_SALT',   'fDE_KYm*?N*TcWJ0Z/|q%D.UfvzyJ+1/kPh#}}ranixxrgtaC94dF@mYKzI#_&B)' );
define( 'NONCE_SALT',       'c{XUt.~KZsPJb,gJ 4Iwn;h?f!ez#9S$QVvc~kbCf.q@)8nvTp1GO2Ik%I?J<km3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'chasmWP_';

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

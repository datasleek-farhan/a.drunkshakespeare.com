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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_drunkshakespeare' );

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
define( 'AUTH_KEY',         '*5vX+Upx $VaPs6928UW#vI!/$}xh:}i8X!gQ.oPNL_13:t$yW(_l!wYDS<;~;Th' );
define( 'SECURE_AUTH_KEY',  'c=84`Up`.Mz!KKdo}y8qH|6iqUDB+I:V9.2.#67d(Ap:18*Je4D@DSbJW}~w~aD#' );
define( 'LOGGED_IN_KEY',    'g~^WqMhMC0> ul0K9bZ9jjb(cnh&D@cnVe35h7z@P`:cA^@y(&2dNdgph.<wsksV' );
define( 'NONCE_KEY',        'uNHg[s>f3>arHhC n$:0%MX6z?(?chgXz>BSLK-jDCcj~J[(Sy]_@Iii.n1FV=9A' );
define( 'AUTH_SALT',        '(69r:+1>:S<HYFQP:~7nAhB9N#%CRbMa=n{8J()MY/wKieI|eA*:!TCI#AG~@F?5' );
define( 'SECURE_AUTH_SALT', 'm3Ofxn[s{WA`c`*15G{^]`Z0]|~Q$<Z}~!O^Wp@j8#{xexudW`;P%k:vuWp.i#Xe' );
define( 'LOGGED_IN_SALT',   '4u5`bK(R58^[B7WFN,l!Yi%N+-6U}q&~WZWX!] m`yz3FvfI<=ji[w6F.=XkC#Uv' );
define( 'NONCE_SALT',       'B#3Jw!{:?*8>f*|Fdx+mgCC$Imm@S7ktvL875C^J;M{<oPer2:Y@y r/pW@]74hr' );

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

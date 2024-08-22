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
define( 'DB_NAME', 'soltan' );

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
define( 'AUTH_KEY',         ')H2|($0{=Vs12H;9V0l653~$iDyWQFmWLRw:9d#TZn+7Xv2Z {{(~]/I (Ppbb})' );
define( 'SECURE_AUTH_KEY',  ',6PDb&b*>R&?eaO(E%{bX]N(OEmBMb)u6><JcNiMK?l;0v75N2/Vv}Lz 9#dDcd=' );
define( 'LOGGED_IN_KEY',    'G`uevg~c~y9,Mt,zN)1j(+D.Fc(XsBxt1*o#x_h!3?8~#-%0&oirfL6gi6lAJ)F$' );
define( 'NONCE_KEY',        '(gp)Wj+7V~gd+#:/*llL&!S%lQ8^a=2)^*$Ss*&j;!gY =,P[<:d>-rQcc8c@uVA' );
define( 'AUTH_SALT',        'Q%tTcZS;N<?(Q|]C!|Q79Wt WX&cZ&;y(FDlls|Dd2(0 J7Mw!SY]DWra?uYy?<R' );
define( 'SECURE_AUTH_SALT', 'vACneyba,A{-b7Bsh@qs~3O+g:[T:BLs-4fAUe+S=k)Q[(S_~^^vw+`BOT;_1L|3' );
define( 'LOGGED_IN_SALT',   'IjKi*E`oJL%97;JT!Eav^7Uc?m46~~-r96tX6OMBuk%b}3duNKK9dd{KSA.?~ZpK' );
define( 'NONCE_SALT',       '`q?@gL=x6ra5hSs$P_|-2%<u/-XG:$i?ftm6sVU;N@wLsxN.c>8p|aV2|<DO6yT!' );

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

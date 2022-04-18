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
define( 'DB_NAME', 'sail' );

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
define( 'AUTH_KEY',         'k_U{Ny+2P2q^6Pt&?G?wg{95sjpMq=!]];;Qgi;X?u%wJlI-#a1E1,G^7=SVtmQ5' );
define( 'SECURE_AUTH_KEY',  ' i&xt^IP+Dg+r`k.2Wb(u,!r,UZ9*pOWsFxT6n4S8Xza7w}iN(WH-=KK~3?XyX?a' );
define( 'LOGGED_IN_KEY',    '94jo=dwg~#i<41iw|Eo=T;uzS_!.8xnY.F.3Q**JKC2P}]M6cz(^LX{FO@fG(ev,' );
define( 'NONCE_KEY',        '>FnFe92Z+XU c:Xx[ nC@SuqCRT[CAIY]H22Z~mz^9JS)[wci^]:&J:OcN|A}nD>' );
define( 'AUTH_SALT',        'd5n#/N!emj(N^o-Wr3cnXddI)ja!XHO0]7|IApgfSuy6R&N9_+)Yv7zo4z`u_o]t' );
define( 'SECURE_AUTH_SALT', '/x|.!992RT2TS=:RRB#B^B8]MFB2,Ed!ceKjx(lh(L1lgM1o1&cU?0|mV-URU9[=' );
define( 'LOGGED_IN_SALT',   'AN<mqtLMk YXs2Uc^^~;>%V<oKf)noieLp.sC}F6JO+<;r~%@.c1;6R2`8-gn[2w' );
define( 'NONCE_SALT',       'r(cls(5FM)(+9clH[WelA|& 1ee5A|n+Fma703^h]Xl:QN7lBJo3q0,54s^m+ed`' );

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

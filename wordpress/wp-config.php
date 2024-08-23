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
define( 'AUTH_KEY',         'P.opBEh5#8?a@o<LCl.v33*EEeZY>;&k# W>?JV@ntxYom1*WVOOrn;~CltI=dFd' );
define( 'SECURE_AUTH_KEY',  '/0Jo8.]s(O>(:e]}j4f kyy]fB[kB2[Y3AxX{{3HWqzY~f.3G6O~FT6vq,I/)y<<' );
define( 'LOGGED_IN_KEY',    'Rl5NO|j7UL&S==SPkF<jsLj/C1C&(xC.wp W#S>KRwd3mH-`l{ cfQ/iJ[>U^3/w' );
define( 'NONCE_KEY',        'L?WTQRd+u.BF^{SUCTB],aOD TqV |GFY(3dt (ppE8r&>)(TPWJs6yQ0.Pb1;6+' );
define( 'AUTH_SALT',        '9M/#,@&}Q`boxI+/YYJy,h%uQZ=6gd-N69SFOwCNAl7H2,rYBog0VD)bMYeCB0]B' );
define( 'SECURE_AUTH_SALT', 'v-*d,fvJc&H:zR11V%t%z*(,L|j}_UYt0n/JgE-@QIuh Pkrtfs!Yi-B^_o`3leS' );
define( 'LOGGED_IN_SALT',   'X#I!zJ4YHUi?RTco>qCIyUEkg5dnRnMFpaUJiw{)LUI-{Q!MB,y(BO8_+Q~a8bgw' );
define( 'NONCE_SALT',       'Z~(ElQn!52|h;y:34Wa,DWJ/wF|=NW,a,i9ybc(-?lo=C $ f%Rx*)4qvazl$_ I' );

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

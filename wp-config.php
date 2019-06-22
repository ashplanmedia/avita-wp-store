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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avita-store' );

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
define( 'AUTH_KEY',         'O<<2Fp$Vc[5H=#]gJ61e#zRKTqYOt>h_*n`3QP+-,LvMkxD^1bzFe;=%9@#98ju ' );
define( 'SECURE_AUTH_KEY',  '~{;~i./nO2R?OH4|6KZ3/FJ`^:|SE[D^x$])D!QnIklcAw%Bs)k4hos++nigHA4j' );
define( 'LOGGED_IN_KEY',    'm[kS^z)*eWjF-{V 6$])Z%K[rf({WXo 4|,XuE15/0o?)!O2uGcYK[k2=K6IomY^' );
define( 'NONCE_KEY',        '@{^[gs)P,I{j|`Se#J]H&xb!V~Xx3e%`<dE:{dWNoGy6MCnBm}{<$^z2^wcKf!k@' );
define( 'AUTH_SALT',        '9)?,6m04%{c$YtO`uy1#Nq$xmN;IeiNq|YgeP{^P,hSFxdC|s%yA~9QjjIL:*}+$' );
define( 'SECURE_AUTH_SALT', 'JK9XWaRe%{m=E3pn3[/IQoO xWPZPp4y6g)M#1NCXuCJ!{#Y<e[ccE4;)t7FV0F.' );
define( 'LOGGED_IN_SALT',   'UQSdl^Dw4si~aS<ONA#/0lqBuQ/^v%~DQf_()&TK1bi6(P4iQ0%3zC0:<7%1k|q$' );
define( 'NONCE_SALT',       'axN#!0Lj(rE>mdYt_54/^V)5YEAMhPVjS{)6}=vCXg1j~sLIU[$T>V$ aaVDNI#{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

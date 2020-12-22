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
define( 'DB_NAME', 'database_techbite' );

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
define( 'AUTH_KEY',         '?|(d}N3z&u#*]/K9R%fE>X0-P].2N!eI?F#AX)~8+WSDP(O^HlA7jDb@=lVZ[wv4' );
define( 'SECURE_AUTH_KEY',  '#pP~ 1mOuKN8DqlQr&)&w%njPX[eNtyT&!YQ7ze{8j2s|bO(3VKB`a>]o`sMMmIF' );
define( 'LOGGED_IN_KEY',    'a>@KmWBRB)d)$irzKJ@3iiU;,x(%F2?2sGqLy$?rdw3fAgTGCnWo`:F9OC o%%J ' );
define( 'NONCE_KEY',        'mc+[X%k$=-Ffpwn&-DaiPm5f-XM$ggKbYvt!Q`PotrCocX3iH$=-<gkP}[d?=s]K' );
define( 'AUTH_SALT',        'Rs@|SRP4K0Oc[hg!Vh& 6/c )C_=M 3H)sN*<OK7,&}w1@<2k06;rT=tK+/6;TbJ' );
define( 'SECURE_AUTH_SALT', 'i%BQRFzXa2[Am_&wRZRYj}?Q!i[L0&KQN35cCB6:hko7=A5f@#3#2YZ|f+^`^3C8' );
define( 'LOGGED_IN_SALT',   '~K#stj6O$.xH6 ${v4AjWcVYnCxBj&A_c3`_qd;*h|$D$0;Q2 PtNxE~-HpXH!4o' );
define( 'NONCE_SALT',       'TIholSEO)90jo-4dV/SfY}F|o7f@)`rRk8d)kqyanrv{q(qXChUmkLptIpGHt(E8' );

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

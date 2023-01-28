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
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '0kG|n}!F|ZjV1p{y*cK.J{r-+Ja-E]ut*~VLAi{ph)r d_Zv$uy4ECq{5*B8X1U&' );
define( 'SECURE_AUTH_KEY',  'C u{C[(}93 2-OYn,)S)1N:E_w&[MwIzr_NI!<Bk-p0M]I&%q;Li3YYd5aX8/TsI' );
define( 'LOGGED_IN_KEY',    'zgf_BIdi6plz,Yc}ef[~<$^9T[-7]}#!M3!=.Q/dCBjUf=_Cd0R$j 7h9et^*yEE' );
define( 'NONCE_KEY',        '2c }X.mpd1uRz2>elZpd]h|3s+M75u(M4k,BGLn% CoVoXNId])h-7{o (b3(WCY' );
define( 'AUTH_SALT',        'Rh?lT`s@j7:?DQbZG95A85Kd3z$Tfy+wD1o=?pk8Z){z!ux9{w5qxqWzE<*0=, a' );
define( 'SECURE_AUTH_SALT', ']]_8peb!6TN,ol4n4S[kT74l{h }SotI?<&o=,:$bKzK=F-/HW<-4K]LTcP(D%2^' );
define( 'LOGGED_IN_SALT',   'K8[w[$XEB|%oTRY7%e#6-7A3o6|u9P#Tug%7 v51Ib7@lDFx+ag|CNnTKD4^1Uc~' );
define( 'NONCE_SALT',       '.3=1g+YaF#G{bbJ/#Q$Q`]TJ9?[AxHhxIC[,Qdv8<eb%X-%<b7,/D+<>^9E-xN t' );

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

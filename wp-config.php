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
define( 'DB_NAME', 'iskconbdnew' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'debashipiskc0n' );

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
define( 'AUTH_KEY',         'Sq%=8*ag~c^>a8vMYvO_3~a#NUDl%E38w1eP[U^p-@;;-JeCw#58ga+jCk$Eh`cq' );
define( 'SECURE_AUTH_KEY',  '`o4wUie_aCb=9L=|]Yi)oCizOB9{%CL4pK{e.Y~tcg-V{73Cc!}^&>6[%y);/%v ' );
define( 'LOGGED_IN_KEY',    'hb= HF.)X`4POVPsXwzc6r02=fN;va~&C=gm2O*L3ta_8#(7.yq <ze4H1 =Iy-W' );
define( 'NONCE_KEY',        '=i4JSVUFF/&7JlN}MAeaoV$1.iAQlMp50R4H1*f@62>3v9>r2F8qTBX6VrAVG|@P' );
define( 'AUTH_SALT',        '5?))zuZ3D~tP+%82a5n&>)]PG?%3|E4w9_DwvSBQiw=CckJ>E=KgvQ3Z]7,YzTwF' );
define( 'SECURE_AUTH_SALT', 'Grb*Pu5s5!?^QW6zNYG3;UB1yV^hX{M]N;*l.O-6:d8w!|[XR& 8]jm3D61wR1}n' );
define( 'LOGGED_IN_SALT',   ';BgUm=iG/@#pcHzi2:r!DUDZ2pfSxu}_621gv)|f,TWM3tAqvM-F:r>!59A]`Y99' );
define( 'NONCE_SALT',       '9E0pS M,gE9!n1F9 sxvmPjZh(AY[2u,=@%.LXW!FjmApSTiJ7u[L<(~+xf;Ku1z' );

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

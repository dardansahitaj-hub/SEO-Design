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
define( 'DB_NAME', 'seode1394315' );

/** MySQL database username */
define( 'DB_USER', 'seode1394315' );

/** MySQL database password */
define( 'DB_PASSWORD', 'g6mytz5nqx' );

/** MySQL hostname */
define( 'DB_HOST', '185.98.131.148' );

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
define( 'AUTH_KEY',         '=A-gmX@h5]z,a^b.|[Y,Xo%^xJt]QaOqa?rA(_aj[^X_FOFBWl1R_Y]eISM}S.ly' );
define( 'SECURE_AUTH_KEY',  'RdkU?Vg4[Cn6nY*!RpRMzwXbFZ]kFoV1RF^ tM9`}|B#{0Zp_>^?StKb)C2[HRR9' );
define( 'LOGGED_IN_KEY',    '~*yJEZ7K#k m9^VII~=t,`-hS/?(JGxLkOO8s=F,Zf^L#VDy6HFT`Uq+b:NByGKR' );
define( 'NONCE_KEY',        'ha2; *26mw6[;^s69?SJgC41;!,XFfD=jm1pOtS(1KbJ!DM]1Bw8T6oI?G^EB*H5' );
define( 'AUTH_SALT',        's*<_~VHJ3mV[Fpz/Or7J;XD5L$eo9mja3qYyID^EdrGAcB$aT$dB=hFT]O,v%7~b' );
define( 'SECURE_AUTH_SALT', '}UoO}ck/$dhHbUX?.dSFkBE_IMSHP^ tODhS,)D2$4pP}qPqf]aHcP+D:si(X.Gd' );
define( 'LOGGED_IN_SALT',   '`pBNK2P{v+S[8bX]fOudFL~8]*?kp !J!^n}ZsL@XrJHXWK5g,ET=iKvZ6W*W0v;' );
define( 'NONCE_SALT',       ')SQkb){};DdSisR&X1om )4hlR0 Q5T3M}BVI $a?qn4zC4xXfTvlGrpRIgvisdf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'seodesign_wp_';

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

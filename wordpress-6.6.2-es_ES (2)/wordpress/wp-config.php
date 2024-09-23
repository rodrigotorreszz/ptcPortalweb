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
define( 'DB_NAME', 'ptcportalweb' );

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
define( 'AUTH_KEY',         'NTThQ#7d>axj2k/F)mI56MM(o6L%VwR5?YiS1dU++S5Dj4,6$1dUGv 0hq(eOI*L' );
define( 'SECURE_AUTH_KEY',  'Co<W)KH%_:YF}.Cv<KJn,.()?P*(>A]1x_Y).@7Zx:iO@&14H.&u~cHAe~;lzJ-@' );
define( 'LOGGED_IN_KEY',    '$ogPw4Q]e8M^2<|C!:VGgy&Lnf!$G{VV_x7p;-_d~-.#[4jVB^~ZU5IKvQDf~lS&' );
define( 'NONCE_KEY',        'k$/EapoSJ n-UC3M <>mc^JI(R603d5vw[-f`*)8r!i@cYKk P_n:N!*+8%H*L$t' );
define( 'AUTH_SALT',        '@?I?%Jyuw|a5Oi-1#B$]i(VB~wdlgoP+&Dwu|Rv;o)-3a2e[A^>3Tau GJ&ijSQf' );
define( 'SECURE_AUTH_SALT', 'f6dtrEg+<HuN*up`)Zh2UNW&BR+B[}P7G/zt|>2WU>+9u],?IqIw>Ts5~<@8wPdn' );
define( 'LOGGED_IN_SALT',   '>Q~5@ ~DlV:uoHNbliQWVLjZRz;I(h?qo;UR)P%:jr6sIN`zr|WAB! 17.2{Z2]`' );
define( 'NONCE_SALT',       '>=gr)2pf;ld0=OjpV8J7O^;sKmKm.{=dO .jCs.6o,~bu4+VEyi0lMLW2Ux#(Yc!' );

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

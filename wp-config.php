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
define( 'AUTH_KEY',         'QbGB U9NI:^G|4m`Ra+Q+cGJfOw]{;eLpQ[c<M/1.K^&]bUo&U_ocrQ8I;t^B7d]' );
define( 'SECURE_AUTH_KEY',  'yCFBSA`a3QRM+ti(IU1t@-[|hI}dUUQDN,Lf7VR7DgO;Z%#rgMRNLFjI{Lvb>H5^' );
define( 'LOGGED_IN_KEY',    'J9RWU1J@3N?VlQ;FVrP/Vf|&m<p,wdNox-gS72bhvtbReM^+)MKo^VFqyyrK5y4=' );
define( 'NONCE_KEY',        'd&N~A`pyPiWSt$Y(qv;0f|]]N3-bZTN)~;^@s4H0bZNc-Anst4~%s.mv^sH7A//+' );
define( 'AUTH_SALT',        '$vnAzN}@3Cv@-^*m6af;4$I@|kLeUZh?:@B.d*:d[]v#zLd%TydqwU4H83J@lfTm' );
define( 'SECURE_AUTH_SALT', 'O!U4A>mI@V0IF[%#xE?o0y^1u~$^{Iy<FTA?dd *!+7nc+X6Na|C:jxG:`)oX<LX' );
define( 'LOGGED_IN_SALT',   '%49DZu[?RH8)w!?crh9m _|dj{^3`2W8g.]+bbDf-;qVez|Ch#_ZY2_,l#dlHn_#' );
define( 'NONCE_SALT',       '|.rk-k6=y8`v}:3)ooyyOEG_lZpcePbbNt;t}+.s5)q?knt>V~f4: D~56;b=zr1' );

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

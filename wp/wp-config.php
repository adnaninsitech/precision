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
define( 'DB_NAME', 'precision_dbnew' );

/** MySQL database username */
define( 'DB_USER', 'precision_dbnew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QyHY}l$g9(!p' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w^#xu3Dp>Y_fT=*6|]]oPQmA-{Ts)q5%IXug:j|JjFL*V|2aAqr)Bd=eASZoC-zj' );
define( 'SECURE_AUTH_KEY',  '(0s@LT#W{la(r_k|n!6BCBQHi[[V@>r;sz[WidE%0f$WGFEA=ptuRpq;l$S4(.,*' );
define( 'LOGGED_IN_KEY',    'E|U-[A:s?CZ:t]};-X]Y*S#P/M;c*V#3_XZ2Y<{brPR0.AjtG*9`aS`eLxDU:R |' );
define( 'NONCE_KEY',        'U+=I/apHGe*A{L8r/cLqIRyR,k(G2F8uQ_$|$%s[X#3b2-fI4JLlMtN(.U?b^[<5' );
define( 'AUTH_SALT',        'Cbb_/aK4XRK2zKYal$9D&|HJ$tXR+hsw1~7z*!6H]t_tPC3qg|#6mF72s=QE@zeQ' );
define( 'SECURE_AUTH_SALT', '$![sBF?QYLAh~&g/X,@ZG3(DNQ%o.q%J4uDw}Z`Z^Mi:Uu&[}BHspwrs4!-SbVnC' );
define( 'LOGGED_IN_SALT',   'D1u%SSD2vHi3z~~eQH(<h+efF_TK]D={(^p8QB,<R9aC?er7_AW55rtnb*`Cf.GM' );
define( 'NONCE_SALT',       '7L~?u1aI#|MGtZR}g({>40N_@Fv6-mXr38#n9VJyNA4;O3 Mz%;xz/{3^z-S^b5!' );

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

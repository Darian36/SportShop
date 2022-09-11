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
define( 'DB_NAME', 'WordPressGamingSite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1tlnO<Q9)%?.?c7P.N$-z?UB,[cpln`K3}f3-*)k?#KFa8;;&**KY gvaM%4q[BH' );
define( 'SECURE_AUTH_KEY',  'seLtr&Ca%P]<9{&rwPH*8mA}r?XmG:,QU* @<vzgPIa#yw(:>*1X/RWtIL}=Q]0/' );
define( 'LOGGED_IN_KEY',    ')Xk0AQ6-c:J<pA4@[J;L d7s8v}IHFN): c5?qtjXV+OO#:-BJ<e}$TCzmYs4{_w' );
define( 'NONCE_KEY',        'uH_%0D4wvGFr!E#UwRtmW17d)COrvs lEtcS>m9+)~rpz|G$ >|lk|!#r0Nqv)3=' );
define( 'AUTH_SALT',        'cN#(<MaUg:t-;zS?vT_HXy7lVUIlb{?2z}#9c>9 M5>VjvkPeOKw:Bj_BVZ8(ve:' );
define( 'SECURE_AUTH_SALT', 'C3Rr~xGH1*vLEPR0MjoHHxq/v>Ea|6qM0hq%DN$i9pl=Wix?L.nIO9DV.cl4uON~' );
define( 'LOGGED_IN_SALT',   'zup0ddE+^J[hSxl[v<ryr/oy3`qb-|{Vb3@a^>GvJv~.OuHyi*l(A]Tnfy^BSN^u' );
define( 'NONCE_SALT',       'F)pA05Y8LM&g:Z||99FRaL`>hzDv7Ee$=eZUxJuzVFsWn{y|Wbmh~G)]G-ZOcjU(' );

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

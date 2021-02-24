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
define( 'DB_NAME', 'product' );

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
define( 'AUTH_KEY',         '@p_N}++rEJjSAtTL|{a&Qb:N*x7zSVp$?)GKpa~aas8Jio}E(A]W-vM2tWfcy%s/' );
define( 'SECURE_AUTH_KEY',  '1)36/B|A*|Zk:7yp2 Z+[4d<!n]IH1I;=Qy2qw^mw]^rfOD(,YE}sm%guxz~CiT$' );
define( 'LOGGED_IN_KEY',    'A6lTZbO>Y!u-}CaUrGOrK4b!s@3r[Vx9 3K9q5RV9|Nj8jk1zi!J++4fMuGE<XNs' );
define( 'NONCE_KEY',        'ki0KL<mmo`pEg&2z%[]w.LE-/@dI7ca@UV9$$L[m :&B;t j[xB6(YX%ts>sgk.<' );
define( 'AUTH_SALT',        ',pdxxf=K3sY]o81m<~fhJR7cPHeuJ-W`i0q>FCI}+FT5qxQCDZpx*W)$mERkY9RT' );
define( 'SECURE_AUTH_SALT', 'H]f4N@w8Y]8Ng=2n?hL`8~q]0XN9z1G=k(KYGDd[B<,lC>ow^$y/gg}Yd*N>_(a~' );
define( 'LOGGED_IN_SALT',   '[EB_^&DMgVPB+8&YOZR,$.$N$m_7#WK8zOVLW#)-Ej{6v<33#KGx0Z&)8QY]z=le' );
define( 'NONCE_SALT',       '>*9VQI`URWx:&z&+[~!l1 j H%=m,bP?NT`(.XV~Tkp{73Wyul5O#)<~H#vEWj.T' );

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

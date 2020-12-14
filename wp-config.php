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
define( 'DB_NAME', 'cpanel_ajmetweb' );

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
define( 'AUTH_KEY',         'ziPVIv@+,w<U<Xh[~Dw2~y{I?dE7Sj=f!1|Sb2=dyg^Xr]kd^u~VK{Y-1K`TUdJ9' );
define( 'SECURE_AUTH_KEY',  'EYxw[TR;o<4@E^?GI=|,MlIxD<$w6EE>zft`Yq92V/#DEa*:?U-[rRj~5@aA`X_O' );
define( 'LOGGED_IN_KEY',    '/vowqPxbycsb^[qR^(PgTF/$t]ejL8f2kLDA>Q0Sk+S!srnk_|A7%bYlP|0=la3Z' );
define( 'NONCE_KEY',        'bp,k|Iwb{,h[~yyMKgR@3=wa>j(71RUwiN29(fa]fMve{9)4T^)`$%w.$KY$C->[' );
define( 'AUTH_SALT',        'H]3uUKWl@%yD.NcTkVaqelpM|HGLR@5]yB `T1+9jZ6B!PjS>d@f:k}@gb9QEQhr' );
define( 'SECURE_AUTH_SALT', ' 0*cAk6{e<KuO3GxaD@]Ld!S$vl9=>EsVqPsA|H<U=$X#-etprCCZGyz>cyha_nC' );
define( 'LOGGED_IN_SALT',   'rM%yB_-arX|REb9=|x.e.$9KlYr7LGs.7[I:_c]Vqd9`)|utQDCIt.~4(_]=%6FV' );
define( 'NONCE_SALT',       '2Bq(gZ6#P) &C.T=2%>}vK/|]cfM>)&J`2vc+HHT`*0;Tw~g_*G)=D;?T_#|ST(k' );

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

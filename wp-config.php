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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9S&^SV`W1W%$+l-7q6GB#`.1+O2CljxG=Oc<QVwT32tAv2.80mgG2s7[0yJV4L${' );
define( 'SECURE_AUTH_KEY',  'i$mB8`c@><u+$O*&7CTg+i&(SXuW^{Uc&n$04%_y2;=[?P9op.Kc5}j&.9P+JQ6%' );
define( 'LOGGED_IN_KEY',    'R/!h}~;7N%]6%+A-2Nk(=AKU$~b@s2K1Ej8!M[2&/TAEM%u)Wej0P5KX/PUln.X)' );
define( 'NONCE_KEY',        'dDN3/;]#DQ (8CNh=N1*zmxZ.n)8Xjmn{ u(&LZk|<m^2,I4]9ToFcwAx.Ls*CD<' );
define( 'AUTH_SALT',        'O22NiD|7z=+#)aEM?`,(HOx:MeJ]D7n*L+Rbb7u0q)g{#dH2M4VbYz`(5^*Z`XY,' );
define( 'SECURE_AUTH_SALT', '`gM.fL:bV|?KCw=LL%!y=yFzN pz7dG(u:qV03Y1#(c-`_Y&.(L)XoVD &K.g{ g' );
define( 'LOGGED_IN_SALT',   'q]56+%53:t26]ZtM?lXnge[#D}@Y$XMt}j2Xc)-DD#s-ps$8lB,4`.q?PiVWgQ|P' );
define( 'NONCE_SALT',       '@v.=s^?!Ni+e&d0PsWyDTOcD/(nF%qB9~fb stP_y%1*P!ZCa1Sl9}LdrXQr2EEQ' );

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

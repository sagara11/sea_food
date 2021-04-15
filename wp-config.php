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
define( 'DB_NAME', 'wp_sea_food' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rbNP)?ZY 19qsqDylD_c:vea`|`c<DO5#IbG3WN80bt Ao$olcW kw&>;(;)/n;K' );
define( 'SECURE_AUTH_KEY',  'WQ:6u+uZsW2W$^UX,H,/cvks5WA3aN}5U(>vn_&t6 |MZL]_~muR;QHI/[@O6Bh=' );
define( 'LOGGED_IN_KEY',    '<p0 NhyUT>Q!mDLWQJ[D@n=$|Ms?l[8&]kcaa$E|#7}qTU&_pd8cig.u>YNb%@lo' );
define( 'NONCE_KEY',        '_7D=fR4wH<Z~yp[q)!~M~>1|=s!^C!H}HPS!qwq0rAgz=,lad_I%2D[Y_tY_6E~F' );
define( 'AUTH_SALT',        'v9d=6)ls`NJKk;)zR#G2QFy-XSTQ7hW;slGioOpd_{!jj@C*pOT_.!nT)BSU/5K|' );
define( 'SECURE_AUTH_SALT', '6Q}id1~Ou!9H&CC^mt.KRDDjmVzpk<]z/[jw.wH::I,2`CN.P&mrfCnRRvl@XH/z' );
define( 'LOGGED_IN_SALT',   'yB<;s-S$>TJ}D)4FvY4Y1+ji%Xk,<GPrKp$DPLIj$a= F7Xaw;n@ey~gp&`?GL)v' );
define( 'NONCE_SALT',       'XTs=I,g`GvKdql~qYBSAoA=0sA,;7rMOJ0#Z5]%9rB1gHM&bP1.I}?>H/K8bU;.q' );

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

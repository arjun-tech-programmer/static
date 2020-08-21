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
define( 'DB_NAME', 'static_db' );

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
define( 'AUTH_KEY',         'm~4;sc)GH;>U132PcA4jzt#WB}%!6ua~*A-i^)vW*?>Y(-fPD4bm{ioZ]Ph<l_:J' );
define( 'SECURE_AUTH_KEY',  '17_^#:E{?]`dH/>k]:DT:6(kj Kg2:BiF!F2q=d7>6!yvsne^eY_|(0YL vOJ8}x' );
define( 'LOGGED_IN_KEY',    'lMz:Y5YSzq=?aGC?QTjr-:s<=z)DpVngoP~S0cQ?09NIu/Ax= oA&>CWA~p>GbcD' );
define( 'NONCE_KEY',        'Cx{}Bc#-_$c85@s&S>kZD{9~C6lbA=!@k8&l+%W:2l2v{<Z:9%>l4]6FJf&=: 9k' );
define( 'AUTH_SALT',        'HYO4Wq;9</twZ20uS=k1/%)>|j<#Qf?C:*254:,z.cN6X;;bN@^Tp/2hN/8SVD9Y' );
define( 'SECURE_AUTH_SALT', '#%e#(KNQy,<e/6X1{4qS:p$NfQC)44g`4b;oq:pHWxh+>Z{7vixa%1085xF$z#{T' );
define( 'LOGGED_IN_SALT',   '7!S(Cp,<T U4&}eBA0v]9>+KJ,j!xCN3Es|ZwO_j?PPq~tB+Z!y|+wJ*Ah<S(Q;5' );
define( 'NONCE_SALT',       '?~!jB@QY_8-]6sD,R1GnciWNow;k!H,dCe4<lVwGh`-Sf@X8(d_t#kP.Ti-8GGmA' );

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

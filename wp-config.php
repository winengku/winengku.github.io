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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'k*B8~u4UEL5SKRN]xs`RRmRTcLw<vaz5;(6H^D<RsgIK?4MUV!!Qdb>;sQ2.5<G+' );
define( 'SECURE_AUTH_KEY',  'nKZ(4TL<aU81M.5})c2B N+t-rsaM^(x&C@COrL?a<=X$.:PXAtkC3,]p~0[UC%s' );
define( 'LOGGED_IN_KEY',    '[ C`<zDoH12dKqLB v!bw.7Dd$V)8/Lm4NgB%[U<rqmj3=uv^6u$1Sk]s<-Hk ~z' );
define( 'NONCE_KEY',        'tcFxP`XR4V~j-b:8Gyw~|7D+1]`)[m1;Mq1(]i}RP=re.c8a&.WbN|)@?K?T|#uV' );
define( 'AUTH_SALT',        '_wKG+M|)v|M|L_nxTS:r&}{259x?g5m0OX8Du3^N}0py S>j1b$8m*FAZ6PkFNz@' );
define( 'SECURE_AUTH_SALT', ':#vW;lE-*I^tJfp ]j%SD8]ue[!8j64e%6`MQ55SayjYkH=3}h:m/vw]q g;Js3g' );
define( 'LOGGED_IN_SALT',   'f2 hlqzR[xmrp{D.6u5aRJM!uVOE&}[YYkAF+:G@rZptu*ifg{P}s!5xBr7k]J-b' );
define( 'NONCE_SALT',       'Kq#S?#[srj+osnLMi}yac0!wX9.Nt.~grkIbc0Djo?/(?08p!EoFdUs|o^KY20uh' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'the mindsmith kids_db' );

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
define( 'AUTH_KEY',         'lrnQU$I=FTo[#]f?tc?NSaeg0B8uv/6;*xJbd>j3x`-Ox`+XYZ#8b(tJ3Ks*N%fA' );
define( 'SECURE_AUTH_KEY',  'W4P3Io:|7FBcXe=-|~7MIv! H;OhLrsvh}H`=#.Y D.Fxi6&]o5U0/I2-Di+j6b8' );
define( 'LOGGED_IN_KEY',    ',g&+sf$C7y)Gs=iNJ;}n=3yr0D#;vvqg`m$~)Uyb-iM8)+uHtYUACW?XYtuY@}Jj' );
define( 'NONCE_KEY',        '/)>elf4orZ?OlokVP@kBoOn9; <E#mNgZ@Z6`k-myt!rog8w46COmO)*a3W2}com' );
define( 'AUTH_SALT',        ',U6hSM}bUEFy~_s8!#m6qQ&kn:H[f^a={5mO)**jbq+]e493@@^0hX8z/F[WVpeK' );
define( 'SECURE_AUTH_SALT', 'z-M`Rt(V~Q&jp2Xn/:%^w;~tP+<N3L>C5>GwdNWL81yviRH@q(wuonz&]o,ggxT{' );
define( 'LOGGED_IN_SALT',   'IiBMG/1/$%tRGwD<sq B;jH%7&th)u#~4s2zldy|/w%l-o]`f5;6f%r8jlBVH;~!' );
define( 'NONCE_SALT',       'sPf,zN|wgBz[B_1W-{0:|@h<|>c|U+7+Ikg.^7xMpg*i5!p r>K|0.9Rb7GDuW{3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

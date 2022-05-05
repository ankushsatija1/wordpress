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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Qbvy23Qwazaq!' );

/** Database hostname */
define( 'DB_HOST', 'database-2.cqt9uwum4p5s.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'F9vT*?c+&Vd(Q$t_)W?em3%]&rgO(?A! ~W(Vb5`Q<q,7jm5;!b{r5F6bI8e0:TZ' );
define( 'SECURE_AUTH_KEY',  'F4|L{hq))N)VF,O>v4Qu_R2F:Duy`vhlik~0Tdjy9$MlnP:ZOa~V4e:f~j)E&rDK' );
define( 'LOGGED_IN_KEY',    '2e3F< $WJ|pl<NN`8h@|zrtW}eO*uB>3W^,a0z](_nX%e4IC/I)l;q$BtF:@/uc5' );
define( 'NONCE_KEY',        '*<Hu4;3y9.iUK`bRX!.hpP<`I,AoYJ3a<b>xp)E=+Zq@8.2Gt>qOo)Ki18Py+zi7' );
define( 'AUTH_SALT',        '4,~s_Fy7XSHTS(r<BvPP duNf{u5)|qkjMJYcD[1noBQAyCp4iUi/q#hrtA.U{`x' );
define( 'SECURE_AUTH_SALT', 'N}6:{8+b{{,|kx^UxF3.@ecb)EP{0]1$5Aqu}YY!5LG,|duzYupSvUHXKW2%H;gX' );
define( 'LOGGED_IN_SALT',   '570guf.7zF,cgbCr^2Bi{6,ID>~I(ESdNzZtIag$cT-zat*GS--cVebNYZc4P}i@' );
define( 'NONCE_SALT',       'qmq6~li1uXT,&I-3/1_Rs`5/MAjm 3*|/#V[f(V^hVxNL)&uWPc0#ffxrDn8Ex_#' );

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

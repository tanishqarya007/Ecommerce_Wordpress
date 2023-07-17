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
define( 'DB_NAME', 'commerce' );

/** Database username */
define( 'DB_USER', 'admin7' );

/** Database password */
define( 'DB_PASSWORD', 'Tanishq@2512' );

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
define( 'AUTH_KEY',         ';v,O^;_E4w5FOV; @ -BfXs?4#eZac2*z;GQ1>{r+<dzW%iOl%XR`=0OHs.{pfCl' );
define( 'SECURE_AUTH_KEY',  '65E$~|)ca(lSFz4IK8`tzWNH,CokuHEZMm$/]24J1ElAyZAAg7Uf%hUgzX+3)?`Z' );
define( 'LOGGED_IN_KEY',    'HH[(U<-UEP_aK6W~NJ/o``|$iqf|ZF&Q`xIL(FtAJd?{.iL:{3f4@iS#MPHv zo<' );
define( 'NONCE_KEY',        'b>[w#7jM*j!t.!E.)lr.gqqfDpsuCWMp.;Oh`Rs!5yL*qUCO$WA9Vm*GSFJl%lf7' );
define( 'AUTH_SALT',        'cg]fF&dO!b3{#9=V##FXQS::41WtE*y%UKcU(*,De.NkF7lX }G02] hTXV{.=I2' );
define( 'SECURE_AUTH_SALT', 'ZQ?+$Kks{EY}A(M~wgQ&V3?}7*,{~3Q~r;ex*KUw+t)JBT@rskS(D:}x@a97R_xi' );
define( 'LOGGED_IN_SALT',   'QL}v -eLfbpxB <k@$Fk.:K$`w0Q@dU ]xGG~hgJX):PIqc;9(D|D~zQp9D:zMg6' );
define( 'NONCE_SALT',       '-0/>.~`KBv%m${V2OheS.ze3SfFc[,jkPqruR`K@exsrue`Vtz`6^T6)15HO94E}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tan56';

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

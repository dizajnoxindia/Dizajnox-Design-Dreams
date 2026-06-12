<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dizajnox-design-dreams_db' );

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
define( 'AUTH_KEY',         'FYcg^LD4([#L%XxV28xu]jB-Y{bq8sVjf,pIiw8 ]${6mPn|~Kz}Yj4(&~=ctEx ' );
define( 'SECURE_AUTH_KEY',  '3q3lwwgH>Y}z{uM<>{u-]0Z5oR[=h3wq#{&|<t(0l;e)VVHX?UQ}TmJdD~7`(tw:' );
define( 'LOGGED_IN_KEY',    'kV=3_*)L|N1fXulI;K^5a)j N20Q-urE2z5cLq{C|_~0o?wx>4EBqN-5f`(O/vFa' );
define( 'NONCE_KEY',        '?<C~8Ps%*3t|Dz$I/Rg*r|NUgEc&CMG7Pn$#U;R?R9^hC8lj4YX7j2vN+k*P#4N?' );
define( 'AUTH_SALT',        '1omEkwW?ZjZi^>!X`nnr%_O~K3Q8c%Qamv3D9W@R51Q-2d#z;zQ7U8#755^Qlbt%' );
define( 'SECURE_AUTH_SALT', 'tB-RS2/#}YBT%UmpN*|no-dcEJ~y7mKL4Pf5>T{)I_fgqJ$&#YI|d*>_w3CH+7!H' );
define( 'LOGGED_IN_SALT',   '<f)4M$VPnH;EVp!{?JwkB&K&&KG{/p 877<in_qpNKn=`>fR`^*V }G Tr[;S3)w' );
define( 'NONCE_SALT',       '<y4iXB2-KKnH,>r6:Q0c#:Q2{eMgi8a!`(}f+#5w98kKtsm:wg?#CBw+;M` ULf@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

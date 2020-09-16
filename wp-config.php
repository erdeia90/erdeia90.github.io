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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ea_wp' );

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
define( 'AUTH_KEY',         '.}MaQ36a-RfR8q08^=-x4Kh9>xIkCM|Rv7 !iqF${g #7yw53D[z0NS{,VKw.@JH' );
define( 'SECURE_AUTH_KEY',  ':UodYLFLa)m-dqsf)ye>:Fl+@Uh=J/#RN_xAWf+KaUOXi26|fNa=(+<0zn2 By/J' );
define( 'LOGGED_IN_KEY',    '5|-q&w46G~j)D}KRg%? kr0Ro9> zR3i;& 0#P0Yl8Go^~?qE+s@QsB1e99BA)C!' );
define( 'NONCE_KEY',        'E<#eI~Uae$qALi{[aSx,=@DM[]$D!1Vv7s5E*EQ>9rJ8.0wdzj.Rtt>{G&U7aj`q' );
define( 'AUTH_SALT',        '&}`ZJ(;6<l=-YU%?Ry7o=32;s/)$htc%fD%>DL?(Q:DZ`_ET=lB|?z{ehhncO<.E' );
define( 'SECURE_AUTH_SALT', '-$^h<mAc|?$Nr`!K@B6 58*%Y^-.oEd|M@A+Yzju(@$.~|3eITY3gn>R8kgLYRX(' );
define( 'LOGGED_IN_SALT',   'w<RS^nID7Z`Im*?J>F$(i/ya?N=?f0-0!Y;3d|h;N9F/zwGdjsvbCFoUWHO~s-;e' );
define( 'NONCE_SALT',       'Ax(&77[SHF|h&B9Zm%gzCXnf{!{di9[g0=(D}3/iZyb}T?:c{C&ydVGYut}U%zm@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yua_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

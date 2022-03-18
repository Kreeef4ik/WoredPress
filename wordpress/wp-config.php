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
define( 'DB_NAME', 'kreeef' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'hdr3y4B?Uc;Za%lg[KdVcWp]:^w7jIf=q3]EFp!yQY&0]92(/^eHz~yh)/%4YhIz' );
define( 'SECURE_AUTH_KEY',  'TW(1#$}FLZh0>Iy9QB66$Q0(2f?<KmaT?o%C#w]&t{94aNEV(bx.5kMKN*eb<s6}' );
define( 'LOGGED_IN_KEY',    'jq,{&dX2M;0]v0e LVcKNr^($8Vhd6sR+ L#?c5r_N?8}Gho{MOF.J$mSQv+v}N3' );
define( 'NONCE_KEY',        'Xy:o6U|N_u}p9Yz5~erpJ+t&5y6bWNo<a:>CF{q-/Y7jfW?ffN(-6ld<#4kjZp!]' );
define( 'AUTH_SALT',        '29<UA +!fbul1y)zhd!$4HzaXeUnY,EZaAC)X/5!}?&m5a-wkq|kB0~7m,SjSurw' );
define( 'SECURE_AUTH_SALT', '}Y`>zC@h&n4bLcm=J%F+.3SFfC (zd} :;9%?:]ikY;bDWh=ATF0W%y;>Ynm,Vt4' );
define( 'LOGGED_IN_SALT',   '}KpQ1Gd^s04th,|)@Z=}c|(,?@;:g/K4m)k`6;HRFGcKc{uy{Rr77RUKr@W?UGW*' );
define( 'NONCE_SALT',       '8Tc_bNi7)AR@Yx`vNlCa^BH?5LqBok2oD_%@k/&I0X}+ayZ;Z,3<^4#Q{UZ-]n9:' );

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

<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u579220067_uQ3bq' );

/** Database username */
define( 'DB_USER', 'u579220067_OOP91' );

/** Database password */
define( 'DB_PASSWORD', 'xqQ53gSn5p' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-riTeHk6d2+SXeR6MVS<#kRd*6#xw3*Tf0`cp=L~u2r$cDicx-(P$`:WNVNR2|0L' );
define( 'SECURE_AUTH_KEY',   '#,$.Svm,ftQ%BLQVQrjkruzHuN3I>cNfiWBW=5Ru+52Z*` K0pfcA;^OinEbyIT+' );
define( 'LOGGED_IN_KEY',     '8!f4ho>7/kwEsCY:Wizb{yepTQ2XY-)Bm$rk^pvg&~<Q2Xl->cxCa{.Uxf0p$(xS' );
define( 'NONCE_KEY',         '` eogfM0/6,2ID-F$W=b8_4C_V}?FCjL^<NW_+Z/EkwO$gAo_j4/pPv~RKy-#Q^!' );
define( 'AUTH_SALT',         'Ej)yK|V4aVRX@,RGB8#m>~%<Za)Jg6Fk}rrkXF*fGX9oryjHz/,`1ZnKsH!{C3Dp' );
define( 'SECURE_AUTH_SALT',  '^4DrzJ*pl6mXU_ [/T{ntR; kD1S}^ u^y]f$)h3ePV FLs`1l;/rV$I^fvH%Sj9' );
define( 'LOGGED_IN_SALT',    'vI(u(L,2 !B}Vi>CxN03|hEWP>UMw]G@s]V![(w(+vXPr7^RJ6I2<@b+Q-[*ow;3' );
define( 'NONCE_SALT',        'gx$Bdau.9UQu xb#pYDCuX=:lh#&}x9X>2D;h=/qPaC&Mf%eGnKispC{QguKb[$S' );
define( 'WP_CACHE_KEY_SALT', 'gAZb|k:MhL7p4N!&gY8=GfDr<~_#RJ~{$_6:Ushs=8_(:<p:MPR~FF1<:ay#|OfF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'c471828dce37f74ffd7d73506fe2f7c7' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'nataliia1992' );

/** MySQL database username */
define( 'DB_USER', 'bussines' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sJpC8g33' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.zzz.com.ua' );

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
define( 'AUTH_KEY',         '^[.d!u+fY(H$iU0#2^/oX>jbL|I]K64RH4E0STLo8AK(}O5E(p[qcQv3&Q |(_G+' );
define( 'SECURE_AUTH_KEY',  'Nq8vs9lxP8JzFcmSs_4.jb15n 9Bz`f$.:$WB;cqSUT-%rRpl1];?5V}_Kv@6v0q' );
define( 'LOGGED_IN_KEY',    'X3Z6#f|0:@YY1RbN=E[~UKkCXyY%l75^p.$l! &~SOuTl6l{$nx81DQ3h;E-]!-@' );
define( 'NONCE_KEY',        '`w-#g<@,rS|*!#/1L>K,9fD;v%R3bR`&ePe:L|m:9w8:%LNF|Qot>DO,livY8(DS' );
define( 'AUTH_SALT',        '6eVaNpRS!j$(kRXxrb9@7BV9F,t;d$+U/&q@3pNZCA_r=kkY$[Q~![V;6W,Vc&(U' );
define( 'SECURE_AUTH_SALT', 'i<vc?g9e9ARSVHY6-]]RP+Oq?f>C){~bf-,s6K.cmuw9YBq{`8/NNuDi|M>24E6,' );
define( 'LOGGED_IN_SALT',   'YG/{Guk@cl`yZweeN Qg>OB.4eZv9&X.{SF3fMj.oOG@9/R,f9(VH@38t-}rNh01' );
define( 'NONCE_SALT',       'y^KN]e 4q{={r2&3BD/e%A9F=5)UG-hg|}U%]F;IoY+moc`SVS7 KZu{,B!WGuCa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';
define('DISABLE_WP_CRON', true);


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

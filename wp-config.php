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
define( 'DB_NAME', 'dev' );

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
define( 'AUTH_KEY',         'z2%yg<?2+KjvGzT{Nqp.uDQv&u(U}mA{rO2[W,cS+eoJKf0q2K)[Rt-,*7|mL[Mp' );
define( 'SECURE_AUTH_KEY',  'x4_*D|;3prDt7YB`TXxF.+=Aa1ro>p76nww)Og2ei&(@y]#hN%.T},[bQC|*EyS@' );
define( 'LOGGED_IN_KEY',    'ebwH{5@xJlj|{!%7@Cv(])zf;M+_o<eml37D1dVmXqJNq.bu4}DJ.Y3m8@nvlv8 ' );
define( 'NONCE_KEY',        'mC|fMnw?|AQY=-K##1lKUA-vs0i4ycYk1v=h^MB[o:5e R+2S>51]P!g_<d;{0<{' );
define( 'AUTH_SALT',        'z9>SkWLF9IqLezVA&mAxkUIF)yUG1C,!]@PX?oK+0cY!k|`*;8t5m/3i.jkv~Peh' );
define( 'SECURE_AUTH_SALT', 'J!A_EgKgK}:O@gcO18TmOrLw>Oo@0KEuZ?n_U#RiaVnaDKnQHFYW;.19[S8FrkR2' );
define( 'LOGGED_IN_SALT',   '&]fRNyx@yv,__]4:%&0*7BLzzw:PQ;040=O+)2,o,K}ZBxZA$d3SL_Amm;)x*S_)' );
define( 'NONCE_SALT',       '@2W2A`eH}.$d*mH;Sp8`qt{>w#Wvsh-@bSL}/L:hcW>L^.Bx#@MErF6r5aPX$D5g' );

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

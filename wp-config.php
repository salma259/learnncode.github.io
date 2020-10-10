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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'u&ShH[#<5^A:%>onUs4W1{)Fi)RR!nTz^2{x!|3nuuPL{Xx;ervL{5t+C!LYavfi' );
define( 'SECURE_AUTH_KEY',  'czS~L*!N`&S0d*Y0SzY68|t !}G52qS3w{.|W{Hnj3Yf2 p[dEv(gyG|!C{jJFy2' );
define( 'LOGGED_IN_KEY',    '6upW13^nU{~eWjmY7z<>>kXeBPaZIGk^bQ[C~2&nX)]DaC  xJ[ r*sEpXU[^@y{' );
define( 'NONCE_KEY',        'y,-B=m/Ut/MO^O #2 V/%Y< 80L2kJ{;J;{r Q19H_ 42 #U^8Cs_&I5X<yuD>6v' );
define( 'AUTH_SALT',        '6 b&a`}:*@#Q=]NFT-3~{F7>?A?IoXV0Q$ov5DU]O0d>8l03~q+Zpxj_D|#{<=`X' );
define( 'SECURE_AUTH_SALT', 'glVGg, ]iH7lG$0 vV>dNiyHLv}u<~$jqe7qlJ)9OIP(Cwlrs<kOF$yaku]o9{Py' );
define( 'LOGGED_IN_SALT',   '+KEPhdY~?P^Kenz^0=9b4%f(+U~blFXe]lne(4@$4B<bSTBr1jH*PN8XI.XW~EVy' );
define( 'NONCE_SALT',       'Tm$VN<R8jl/ekeo`|3!93z^DGka@*4&Y Jlnz#A6W9}1hZqVTpP*#^BfTd;Q-4qL' );

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

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
define( 'DB_NAME', 'wp273' );

/** MySQL database username */
define( 'DB_USER', 'wp273' );

/** MySQL database password */
define( 'DB_PASSWORD', '2S3Npc-1p!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'itvloegyxahpibgs1dtg1tkfe4rla8psbetyaok0b4ympixesezhtjfdlxgago9k' );
define( 'SECURE_AUTH_KEY',  'vb1isltlcmzvvnbngxzazvgk2rjbtmr2eu9mi59cpdjd8ulxyab1h0orikjcodtq' );
define( 'LOGGED_IN_KEY',    'pwmaplpl2ksidcgif4nwye1qux9y1retsijcuizb3nsn7vnbxxe1j8g9hervlavs' );
define( 'NONCE_KEY',        'ulrf1ulqh9xmurtfgcak4xktltexanixu0xmmyeoz6vo6onykrkixzfbzoa0gvvd' );
define( 'AUTH_SALT',        'twgipgyqadgoirqoxaplvgwneux6bkc3nrgj69uvdp5lzldawviwd0w09dxerzny' );
define( 'SECURE_AUTH_SALT', 'z9c3rc1zjagyyex0s5ev0rjtkoxu0faorhsgkrdf00whu2lbte5l5umsefg4bago' );
define( 'LOGGED_IN_SALT',   'k4b0elr7ko82fsq0yloorliuqevf52y6xk9je1cgnirewqsd6mixqkotagpb5akk' );
define( 'NONCE_SALT',       'kdgzfp29wfjdhfofriqbvxrdz17xtnrixv2asrcr5yvkme5lknaqstqjzmy10nsg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6n_';

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

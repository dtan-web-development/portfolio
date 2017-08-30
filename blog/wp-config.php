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
define('DB_NAME', 'dannytan_wp479');

/** MySQL database username */
define('DB_USER', 'dannytan_wp479');

/** MySQL database password */
define('DB_PASSWORD', 'C(7SO@6wp8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd572ak521m1jb1wbw1iwg1odbgwxrorllpbdzcglclik9bh4a3s7b22lbeo2e3c9');
define('SECURE_AUTH_KEY',  '0dbtvdvtnxfu3pm335sj6lkn3vhjx8t2c8ad3v31sri9rxfvhunz2ey5o4sf0vzb');
define('LOGGED_IN_KEY',    'ebyk4qy03zeguab9acyirzvu3gmu5jm75uqz0hz6im7bfzolxkjofs9qs8z3qiy2');
define('NONCE_KEY',        'sjkrqbtg7jyw9jkctpsfzjfaoeri9vza4sjntfo4zwlyqvlmq3ltpf5ihi1igz2y');
define('AUTH_SALT',        '018tdtqit5vpco225oaaxpxgrmw3m6yb5iy0u7eh2itmbxza3t4dlieihbbdruk1');
define('SECURE_AUTH_SALT', 'wwulzfz5y7rb83shhk1oq1xsvbc5v1mdyo8zl7xojfkc2d2ibbhpt6szbumkoqg0');
define('LOGGED_IN_SALT',   'd6psvlhuegtifmifjtbtflimjf0bdvsc1c3ehess2z5sk2kepmvvbtoaqxroqpdo');
define('NONCE_SALT',       '7nps42fbmelebf5oob4vrry9rcwqhrn2fzenyxypsbfyu5gaujjkc73qqyznddcs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpaf_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

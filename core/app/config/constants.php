<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 					'ab');
define('FOPEN_READ_WRITE_CREATE', 				'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 			'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/*
|--------------------------------------------------------------------------
| LINKBY Constants
|--------------------------------------------------------------------------
|
| These constants are used in all the app.
|
*/

/**
* PRIMARY CONSTANTS GENERAL INFO
**/
define('LBY_NAME', 							'linkBy');
define('LBY_SUBNAME',						'Panel');
define('LBY_VERSION',						'0.1');
define('LBY_VERSION_NAME',					'beta');
define('LBY_CLIENT_SESSION',				'lby_cl_session');

/**
* PRIMARY CONSTANTS GENERAL INFO
**/

/**
* TABLES CONSTANTS
**/

define('TBL_CLIENT', 						'client');
define('TBL_USER', 							'user');
define('TBL_MODULE', 						'module');


/**
* TABLES CONSTANTS
**/

/* End of file constants.php */
/* Location: ./system/application/config/constants.php */

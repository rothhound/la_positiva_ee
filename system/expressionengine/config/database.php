<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'expressionengine';
$active_record = TRUE;

$db['expressionengine']['hostname'] = 'external-db.s172474.gridserver.com';
$db['expressionengine']['username'] = 'db172474';
$db['expressionengine']['password'] = 'HdmB37b0';
$db['expressionengine']['database'] = 'db172474_lapositiva';
$db['expressionengine']['dbdriver'] = 'mysql';
$db['expressionengine']['pconnect'] = FALSE;
$db['expressionengine']['dbprefix'] = 'exp_';
$db['expressionengine']['swap_pre'] = 'exp_';
$db['expressionengine']['db_debug'] = TRUE;
$db['expressionengine']['cache_on'] = FALSE;
$db['expressionengine']['autoinit'] = FALSE;
$db['expressionengine']['char_set'] = 'utf8';
$db['expressionengine']['dbcollat'] = 'utf8_general_ci';
$db[$active_group]['cachedir'] = $config['server_path'].$config['system_folder']."/expressionengine/cache/db_cache/";


/* End of file database.php */
/* Location: ./system/expressionengine/config/database.php */
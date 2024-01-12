1) Base URL aşağıdakı kimi yazılıb yoxlanılmışdır

 $config['base_url'] = 'http://localhost/';

2) database adı: auht
   table adı: users

Və qovluqda database hazır şəkildə verilmişdir.

3) database.php aşağıdakı kimi olduğu halda test edilmişdir.

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'auth',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

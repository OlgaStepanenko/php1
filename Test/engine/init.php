<?php 

require_once '../engine/funcs.php';

require_once '../engine/repositoties.php';

$config = require '../config/config.php';

$mysqliConnect = mysql_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);


//$mysqli = mysql_connect("localhost", "root", "", "test");
//$stmt = mysql_query($mysqli, "SELECT * FROM employee WHERE id >0");

//$employees = [];
//while ($row = mysql_fetch_assoc($stmt)) {
//	$employees[] = $row;
//}

//mysql_close($mysqli);

//print_r($employees)

<?php
	require_once ('config.php');
	require_once ('inc/classes/MysqliDb.php');

	$conn = new MysqliDb ($db["db_host"], $db["user"],$db["pass"], $db["database"] );

	$xgfirewall = $conn->get("firewall_XG");
/*
	print "<pre>";
		print_r($xgfirewall);
	print "</pre>";
*/
	$data = array();
	$data["aaData"] = $xgfirewall;
	print json_encode($data);

	// for ($i = 0; $i < sizeof($devices); $i++){
	// };


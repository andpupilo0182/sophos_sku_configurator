<?php
	require_once ('../config.php');
	require_once ('../inc/classes/MysqliDb.php');
	$conn = new MysqliDb ($db["db_host"], $db["user"],$db["pass"], $db["database"] );

	if( !isset($_REQUEST['users']) ){
		print("Users needed!");
		exit();
	}
	if( !isset($_REQUEST['coverage']) || empty($_REQUEST['coverage']) || $_REQUEST['coverage'] == "undefined" )
		$coverage = "12";
	else
		$coverage = $_REQUEST['coverage'];

	if(!isset($_REQUEST['license_type']))
		$lType = "Security Appliance";
	elseif( $_REQUEST['license_type'] == "eg" )
		$lType = "EnterpriseGuard";
	elseif( $_REQUEST['license_type'] == "fg" ){
		$lType = "FullGuard";
		if( $_REQUEST['sandstorm'] == "true" )
			$lType = "FullGuard Plus";
	}

	$conn->where("users_" . $_REQUEST['license_type'], $_REQUEST['users'], ">=");
	$DBXGFirewall = $conn->getOne("firewall_XG");
	if(isset($_REQUEST['debug']))
		print "<br><br>" . $conn->getLastQuery();

	if (!empty($DBXGFirewall['ID'])){
		$xgID = $DBXGFirewall['ID'];

		$conn->where("xg_model", $xgID);
		$conn->where("coverage", $coverage);
		$conn->where("description", $lType . "%", "like");
		$DBXGlicense = $conn->getOne("vw_firewall");

		if(isset($_REQUEST['debug']))
			print "<br><br>" . $conn->getLastQuery();

		$conn->where("xg_model", $xgID);
		$conn->where("description", "Security Appliance");
		$appliance = $conn->getOne("vw_firewall");

		if(isset($_REQUEST['debug']))
			print "<br><br>" . $conn->getLastQuery() . "<br><br>";
	};

	$DBXGFirewall['model'] = "XG ". $DBXGFirewall['model'];
	$DBXGFirewall['hw_ram'] = $DBXGFirewall['hw_ram'] . "GB";
	$xgHardware = array();
	foreach($DBXGFirewall as $key => $value){
		if ($key == "model"){
			$xgHardware["product"] = $value;
			continue;
		}
		$xgHardware[$key] = $value;
		if(isset($_REQUEST['debug']))
			print "$key -> $value <br>";
	}

	$xgHardware["details"] = "<span class='details-control'><i class='fa fa-plus-square'></i></span>";
	$xgHardware["sku"] = $appliance['sku'];
	$xgHardware["description"] = $appliance['description'];

	$license["details"] = "";
	$license["product"] = $DBXGFirewall['model'] . " " . $lType;
	$license["sku"] = $DBXGlicense['sku'];
	$license["description"] = $DBXGlicense["description"] . " - " . $DBXGlicense['coverage'] . " MOS";

	if(isset($_REQUEST['debug'])){
		print "<pre>";
			print_r($xgHardware);
			print_r($license);
		print "</pre>";
	};

	$data = array();
	$data["data"][] = $xgHardware;
	$data["data"][] = $license;
	print json_encode($data);

]<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" data-page="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a data-page="index.html">
				<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">
		<!-- BEGIN MAIN MENU -->

<ul id="main-menu" class="gui-controls">
	<!-- BEGIN OCORRENCIAS -->
	<?php

include('inc/classes/yaml.class.php');
$array = Yaml::YAMLLoad('menu.yml');
$count = 0;
foreach($array as $menuTOPLevel => $menuItens){
	$icon = "";
	$name = $menuTOPLevel;
	$target = "";
	$menuItem = "";
	$subMenu  = "";
	foreach($menuItens as $key => $value){
		if (is_array($value) ){
			$subMenu .= getSubmenu($key, $value);
		} else {
			if ($key == "icon"){ $icon = $value; }
			elseif ($key == "url"){ $target = $value; }
			elseif ( is_string($key) && is_string($value) ) $menuItem .= getMenuItem($key, $value);
		}
	}
	$menuItem .= $subMenu;
	print genTOPMenu($name, $icon, $target, $menuItem, $count);
	$count++;
}
function getMenuItem($itemName, $itemTarget){
	return 	"
		<li><a data-page='" . $itemTarget . "' name='" . shotHash($itemTarget) . "'><span class='title'>" . $itemName . "</span></a></li>
	";
}

function genTOPMenu($name, $icon, $target, $subitens, $count){

	$active = "";
	if ($count == 0) $active="active";
	if ( strlen($subitens) > 0 ){

		return "
		<li class='gui-folder'>
			<a class='menu-title " . $active . "' name='" . shotHash($target) . "'>
				<div class='gui-icon'><i class='$icon'></i></div>
				<span class='title'>$name</span>
			</a>
			<ul>
				$subitens
			</ul>
		</li>
		";
	} else {
		return "
			<li>
				<a data-page='" . $target . "' class='" . $active . "' name='" . shotHash($target) . "'>
					<div class='gui-icon'><i class='" . $icon . "'></i></div>
					<span class='title'>" . $name . " </span>
				</a>
			</li>
		";
	}
}


function getSubmenu($name, $arrSubMenu){
	$subMenu= "";
	foreach($arrSubMenu as $key => $value){
		if ( is_string($key) && is_string($value) ) $subMenu .= getMenuItem($key, $value);
	}
	return "
		<li class='gui-folder'>
			<a data-page='javascript:void(0);'>
				<span class='title'>" . $name . "</span>
			</a>
			<!--start submenu -->

			<ul>
				$subMenu
			</ul>
		</li>
	";
}

function shotHash($itemTarget){
	$maxChar = 6;
	$hash = md5($itemTarget);
	$sHash = substr($hash, 0, $maxChar);
	return $sHash;
}


?>
<li style="bottom: 3px; left: 5px; position: absolute;">
	<div class="active" >
		<img src="assets/img/33px-Flag_of_Brazil.svg.png" width="50px">
		<span style="font-size: 1.3em"> Sophos Inc. - Brasil </span>
	</div>
</li>
 </ul><!--end .main-menu -->
	<!-- END MAIN MENU -->

<?php
$title = "Spis Rzemieślnikow";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location == 'Altara') {
$prisoner = mysql_query("select * from players where klasa='Rzemieślnik' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($rzemieślnik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $rzemieślnik['id'];
$arrname[$i] = $rzemieślnik['user'];
$arrlevel[$i] = $rzemieślnik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

$smarty -> assign ( array("Location" => $player -> location));
$smarty -> display ('rze.tpl');

require_once("includes/foot.php");
?>

<?php
/**
* 
* @function: clas list
* @copyrights: 
* @author: Balberith <jacek@kaara.pl>
* @copyrights: Balberith
*/

$title = "Dom Cechowy";
require_once("includes/head.php");


//sprawdzenie czy gracz znajduje sie w miescie
if ($player -> location != 'Altara') {
        error ("Zapomnij o tym");
}



//spis mag闚 wed逝g ID
if (isset ($_GET['view']) && $_GET['view'] == 'magid') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis mag闚 wed逝g poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'maglvl') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis mag闚 wed逝g imienia
if (isset ($_GET['view']) && $_GET['view'] == 'maguser') {
$prisoner = mysql_query("select * from players where klasa='Mag' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($mag = mysql_fetch_array($prisoner)) {
$arrid[$i] = $mag['id'];
$arrname[$i] = $mag['user'];
$arrlevel[$i] = $mag['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z這dzieji wed逝g ID
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejid') {
$prisoner = mysql_query("select * from players where klasa='Z這dziej' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z這dziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z這dziej['id'];
$arrname[$i] = $z這dziej['user'];
$arrlevel[$i] = $z這dziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z這dzieji wed逝g ID
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejlvl') {
$prisoner = mysql_query("select * from players where klasa='Z這dziej' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z這dziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z這dziej['id'];
$arrname[$i] = $z這dziej['user'];
$arrlevel[$i] = $z這dziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis z這dzieji wed逝g imienia
if (isset ($_GET['view']) && $_GET['view'] == 'zlodziejuser') {
$prisoner = mysql_query("select * from players where klasa='Z這dziej' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($z這dziej = mysql_fetch_array($prisoner)) {
$arrid[$i] = $z這dziej['id'];
$arrname[$i] = $z這dziej['user'];
$arrlevel[$i] = $z這dziej['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed逝g ID
if (isset ($_GET['view']) && $_GET['view'] == 'wojid') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis wojownikow wed逝g poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'wojlvl') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed逝g imienia
if (isset ($_GET['view']) && $_GET['view'] == 'wojuser') {
$prisoner = mysql_query("select * from players where klasa='Wojownik' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis wojownikow wed逝g ID
if (isset ($_GET['view']) && $_GET['view'] == 'barid') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy鎍a' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}



//spis wojownikow wed逝g poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'barlvl') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy鎍a' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


//spis wojownikow wed逝g imienia
if (isset ($_GET['view']) && $_GET['view'] == 'baruser') {
$prisoner = mysql_query("select * from players where klasa='Barbarzy鎍a' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}










//spis rzemie�lnik闚 wed逝g id
if (isset ($_GET['view']) && $_GET['view'] == 'rzemid') {
$prisoner = mysql_query("select * from players where klasa='Rzemie郵nik' order by id asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis rzemie�lnik闚 wed逝g imienia
if (isset ($_GET['view']) && $_GET['view'] == 'rzemuser') {
$prisoner = mysql_query("select * from players where klasa='Rzemie郵nik' order by user asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}

//spis rzemie�lnik闚 wed逝g poziomu
if (isset ($_GET['view']) && $_GET['view'] == 'rzemlvl') {
$prisoner = mysql_query("select * from players where klasa='Rzemie郵nik' order by level asc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrlevel = array();
$i = 0;
while ($wojownik = mysql_fetch_array($prisoner)) {
$arrid[$i] = $wojownik['id'];
$arrname[$i] = $wojownik['user'];
$arrlevel[$i] = $wojownik['level'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "Level" => $arrlevel));
}
}


$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display ('cech.tpl');
require_once("includes/foot.php");
?>

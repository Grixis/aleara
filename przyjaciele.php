<?php

$title="Lista przyjaciół";
$title1="Lista przyjaciół";
require_once("includes/head.php");
session_start();
if (!isset($_GET['action']))
{
	//get buddys and enemies
	$buddy=$db->Execute("Select * from buddys where owner=".$player->id);
	
	$arrFriend=array();
	$arrEnemy=array();
	$arrPending=array();
	$i=0;
	while(!$buddy -> EOF)
	{
		if ($buddy -> fields['pending'] == 'Y')
		{
			$arrPending[$i]=$buddy -> fields['buddy'];
		}
		elseif ($buddy -> fields['type'] == 'F')
		{
			$arrFriend[$i]=$buddy -> fields['buddy'];
		}
		else
		{
			$arrEnemy[$i]=$buddy -> fields['buddy'];
		}
		$buddy -> MoveNext();
		$i++;
	}
	$buddy -> Close();
	
	//get some info about friends
	if ($arrFriend)
	{
		$objFriends = $db -> Execute("SELECT id, user, rank, page, avatar, level, miejsce, lpv FROM `players` WHERE id IN (".implode(",",$arrFriend).") ORDER BY `id` ASC") or die($db->ErrorMsg());
		
		$arrId = array();
		$arrName = array();
		$arrRank = array();
		$arrAvatar = array();
		$arrPage = array();
		$arrTime = array();
		$arrLocation = array();
		$i = 0;
		
		while (!$objFriends -> EOF) 
		{

			$arrId[$i] = $objFriends -> fields['id'];
			$arrName[$i] = $objFriends -> fields['user'];
			$arrLevel[$i] = $objFriends -> fields['level'];

			if ($objFriends -> fields['miejsce'] == 'Altara') $arrLocation[$i] = 'Aleara';
			elseif ($objFriends -> fields['miejsce'] == 'Ardulith') $arrLocation[$i] = 'Coweritana';
			else $arrLocation[$i] = $objFriends -> fields['miejsce'];

			$arrAvatar[$i] = $objFriends -> fields['avatar'];
			$arrPage[$i] = $objFriends -> fields['page'];
			$arrRank[$i] = $objFriends -> fields['rank'];
			$arrTime[$i] = date("d-m-Y H:i:s",$objFriends -> fields['lpv']);

			if ($objFriends -> fields['lpv'] < (time() - 200)) $state = '';
			else $state = '<font color="green"><b>ONLINE</b></font>';
			$arrLpv[$i] = $state;

			$objFriends -> MoveNext();
			$i++;
		}
	$objFriends -> Close();
	$smarty -> assign (array("Fid" => $arrId,
						"Fname" => $arrName,
						"Favatar" => $arrAvatar,
						"Fpage" => $arrPage,
						"Frank" => $arrRank,
						"Flevel" => $arrLevel,
						"Flocation" => $arrLocation,
						"Ftime" => $arrTime,
						"Flpv" => $arrLpv,
						"Class" => $player -> clas,

						"Friends" => 1));
	}
	//get info about enemies. Only id and name.
	if ($arrEnemy)
	{
		$objFriends = $db -> Execute("SELECT id, user, rank, page, avatar, level, miejsce, lpv FROM `players` WHERE id IN (".implode(",",$arrEnemy).") ORDER BY `id` ASC") or die($db->ErrorMsg());
		
		$arrId = array();
		$arrName = array();
		//$arrRank = array();
		//$arrAvatar = array();
		//$arrPage = array();
		//$arrTime = array();
		//$arrLocation = array();
		$i = 0;
		
		while (!$objFriends -> EOF) 
		{

			$arrId[$i] = $objFriends -> fields['id'];
			$arrName[$i] = $objFriends -> fields['user'];
			/*$arrLevel[$i] = $objFriends -> fields['level'];

			if ($objFriends -> fields['miejsce'] == 'Altara') $arrLocation[$i] = 'Aleara';
			elseif ($objFriends -> fields['miejsce'] == 'Ardulith') $arrLocation[$i] = 'Coweritana';
			else $arrLocation[$i] = $objFriends -> fields['miejsce'];

			$arrAvatar[$i] = $objFriends -> fields['avatar'];
			$arrPage[$i] = $objFriends -> fields['page'];
			$arrRank[$i] = $objFriends -> fields['rank'];
			$arrTime[$i] = date("d-m-Y H:i:s",$objFriends -> fields['lpv']);

			if ($objFriends -> fields['lpv'] < (time() - 200)) $state = '';
			else $state = '<font color="green"><b>ONLINE</b></font>';
			$arrLpv[$i] = $state;
			*/
			$objFriends -> MoveNext();
			$i++;
		}
	$objFriends -> Close();
	$smarty -> assign (array("Eid" => $arrId,
						"Ename" => $arrName,
						"Class" => $player -> clas,
						"Enemies" => 1));
	}
	//get info about friends waiting for accept. Only id and name.
	if ($arrPending)
	{
		$objFriends = $db -> Execute("SELECT id, user, rank, page, avatar, level, miejsce, lpv FROM `players` WHERE id IN (".implode(",",$arrPending).") ORDER BY `id` ASC") or die($db->ErrorMsg());
		
		$arrId = array();
		$arrName = array();
		//$arrRank = array();
		//$arrAvatar = array();
		//$arrPage = array();
		//$arrTime = array();
		//$arrLocation = array();
		$i = 0;
		
		while (!$objFriends -> EOF) 
		{

			$arrId[$i] = $objFriends -> fields['id'];
			$arrName[$i] = $objFriends -> fields['user'];
			/*$arrLevel[$i] = $objFriends -> fields['level'];

			if ($objFriends -> fields['miejsce'] == 'Altara') $arrLocation[$i] = 'Aleara';
			elseif ($objFriends -> fields['miejsce'] == 'Ardulith') $arrLocation[$i] = 'Coweritana';
			else $arrLocation[$i] = $objFriends -> fields['miejsce'];

			$arrAvatar[$i] = $objFriends -> fields['avatar'];
			$arrPage[$i] = $objFriends -> fields['page'];
			$arrRank[$i] = $objFriends -> fields['rank'];
			$arrTime[$i] = date("d-m-Y H:i:s",$objFriends -> fields['lpv']);

			if ($objFriends -> fields['lpv'] < (time() - 200)) $state = '';
			else $state = '<font color="green"><b>ONLINE</b></font>';
			$arrLpv[$i] = $state;
			*/
			$objFriends -> MoveNext();
			$i++;
		}
	$objFriends -> Close();
	$smarty -> assign (array("Pid" => $arrId,
						"Pname" => $arrName,
						"Class" => $player -> clas,
						"Pending" => 1));
	}
}
$smarty -> display('przyjaciele.tpl');
require_once("includes/foot.php");
?>
<?php
/**
 *   File functions:
 *   Judge Panel - change rank lawyers and members
 *
 *   @name                 : sedzia.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.1
 *   @since                : 06.03.2006
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// 

$title = "Panel Sędziego";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/sedzia.php");

if ($player -> rank != 'Sędzia') 
{
    error (YOU_NOT);
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Adda" => ADD_A,
    "Asa" => AS_A,
    "Rmember" => R_MEMBER,
    "Rlawyer" => R_LAWYER,
    "Rjudge" => R_JUDGE,
    "Aadd" => A_ADD));
$smarty -> display ('sedzia.tpl');

if (isset ($_GET['step']) && $_GET['step'] == 'add') 
{
    $ranga = $db -> Execute("SELECT rank FROM players WHERE id=".$_POST['aid']);
    if ($ranga -> fields['rank'] == 'Member' || $ranga -> fields['rank'] == 'Ławnik' || $ranga -> fields['rank'] == 'Sędzia' || $ranga -> fields['rank'] == 'Prawnik') 
    {
        $strRank = addslashes($_POST['rank']);
		$arrRanks= array("Member", "Ławnik", "Prawnik");
		if (!in_array($strRank, $arrRanks))
		{
			error("Hakerze :)");
		}
        $db -> Execute("UPDATE players SET rank='".$strRank."' WHERE id=".$_POST['aid']) or die($db->ErrorMsg());
        error (YOU_ADD.$_POST['aid'].AS_A.$_POST['rank']);
    }
    $ranga -> Close();
}

require_once("includes/foot.php");
?>

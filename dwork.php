<?php
/**
 *   File functions:
 *   Clean city and earn money
 *
 *   @name                 : landfill.php                            
 *   @copyright            : (C) 2004,2005,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 09.03.2007
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
// $Id$

$title = "Zaginiony Dwór Krutynów";
require_once("includes/head.php");
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/dwork.php");
$objTest = $db -> Execute("SELECT `premium` FROM `players` WHERE `id`=".$player -> id);
            if ($objTest -> fields['premium'] == 'N') 
            {
                error ('Odpycha cię jakieś tajemnicze pole czarnej magii. Najwyraźniej nie jesteś wskrzesicielem Krutynów! <a href="city.php">(wróć do ostady)</a>');
            }

if ($player -> level < 7)
    {
        error('Próbowałeś odnaleźć Zaginiony Dwór Krutynów... Jednak nie posiadasz jeszcze informacji o dokładnym jego położeniu... Aby wejść jest wymagany min 7 lvl. <a href="city.php">(wróć do ostady)</a>');
    }

if ($player -> location != 'Altara' && $player -> location != 'Ardulith') 
{
    error (ERROR);
}

if ($player -> hp == 0) 
{
    error (YOU_DEAD." (<a href=\"city.php\">".BACK."</a>)");
}

if (!isset($_GET['action'])) 
{
    $_GET['action'] = '';
    $gain = ($player -> level*7 + 300);
    $smarty -> assign(array("Gold" => $gain,
                            "Landinfo" => LAND_INFO,
                            "Landinfo2" => GOLD_COINS,
                            "Awork" => A_WORK,
                            "Times" => TIMES));
} 
    else 
{
    if (!isset($_POST['amount'])) 
    {
        error(NO_AMOUNT);
    }
    integercheck($_POST['amount']);
    if (!ereg("^[1-9][0-9]*$", $_POST['amount'])) 
    {
        error(ERROR);
    }
    if ($player -> energy < $_POST['amount']) 
    {
        error (NO_ENERGY);
    }
    $gain = (($player -> level*7 + 300) * $_POST['amount']);
    $db -> Execute("UPDATE players SET energy=energy-".$_POST['amount'].", credits=credits+".$gain." WHERE id=".$player -> id);
    $smarty -> assign(array("Gain" => $gain, 
                            "Amount" => $_POST['amount'],
                            "Inwork" => IN_WORK,
                            "Inwork2" => IN_WORK2,
                            "Goldcoins" => GOLD_COINS,
                            "Aback" => A_BACK));
}

/**
* Assign variables to template and display page
*/
$smarty -> assign ("Action", $_GET['action']);
$smarty -> display ('dwork.tpl');

require_once("includes/foot.php");
?>

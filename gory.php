<?php
/**
 *   File functions:
 *   Mountains menu
 *
 *   @name                 : gory.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 05.10.2006
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
// $Id: gory.php 673 2006-10-05 15:32:49Z thindil $

$title = 'Góry Przeznaczenia';
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/gory.php");

if($player -> location != 'Góry')
{
    error (NOT_IN, RET_LOC);
}

$smarty -> assign("Message", '');

if ($player -> hp > 0)
{
    $smarty -> assign(array("Amine" => A_MINE,
                            "Asearch" => A_SEARCH,
                            "Atravel" => A_TRAVEL,
                            "Mountinfo" => MOUNT_INFO,
                            "Aelfcity" => A_ELFCITY,
                            "Res1" => '',
                            "Res2" => '',
                            "Res3" => '',
                            "Aback" => '',
                            "Hermit" => '',
                            "Hermit2" => '',
                            "Aresurect" => '',
                            "Await" => '',
                            "Tgold" => '',
                            "Goldcoins" => '',
                            "Waittime" => '',
                            "Goldneed" => ''));
}
    else
{
    $smarty -> assign(array("Youdead" => YOU_DEAD,
                            "Backto" => BACK_TO,
                            "Stayhere" => STAY_HERE));
    if (isset($_GET['action']) && $_GET['action'] == 'back')
    {
        $db -> Execute("UPDATE `players` SET `miejsce`='Ardulith' WHERE `id`=".$player -> id);
        error (PL_DEAD."<a href=\"hospital.php\">".A_HERE."</a>.");
    }
    if (isset($_GET['action']) && $_GET['action'] == 'hermit')
    {
        $crneed = (75 * $player -> level);
        require_once('includes/counttime.php');
        $arrTime = counttime();
        $strTime = $arrTime[0].$arrTime[1];
        $smarty -> assign(array("Goldneed" => $crneed,
                                "Waittime" => $strTime,
                                "Aback" => A_BACK,
                                "Hermit" => HERMIT,
                                "Hermit2" => HERMIT2,
                                "Aresurect" => A_RESURECT,
                                "Await" => A_WAIT,
                                "Tgold" => T_GOLD,
                                "Goldcoins" => GOLD_COINS));
        if (isset($_GET['action2']) && $_GET['action2'] == 'resurect')
        {
            require_once('includes/resurect.php');
            $smarty -> assign(array("Message" => YOU_RES.$pdpr.LOST_EXP,
                                    "Res1" => RES1,
                                    "Res2" => RES2,
                                    "Res3" => RES3));
        }
        if (isset($_GET['action2']) && $_GET['action2'] == 'wait')
        {
            $smarty -> assign("Message", WAIT_INFO);
        }
    }
}

if (isset($_GET['action2']) && $_GET['action2'] == 'city')
{
    $db -> Execute("UPDATE `players` SET `miejsce`='Ardulith' WHERE `id`=".$player -> id);
    $smarty -> assign("Message", GO_CITY);
}

/**
* Initialization of variables
*/
if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}
if (!isset($_GET['action2']))
{
    $_GET['action2'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Health" => $player -> hp,
                        "Action" => $_GET['action'],
                        "Action2" => $_GET['action2']));
$smarty -> display ('gory.tpl');

require_once("includes/foot.php");
?>

<?php
/**
 *   File functions:
 *   Donating
 *
 *   @name                 : donate.php
 *   @copyright            : (C) 207 Orodlin Team based on Gamers-Fusion ver 2.5 and Vallheru Engine
 *   @author               : lethal2 (l3thal2[at]gmail.com)
 *   @version              : 
 *   @since                : 18.05.2007
 *
//
// $Id: index.php 835 2006-11-22 17:40:22Z thindil $

*/
require_once ('includes/config.php');
require_once ('includes/main/base.php');
require_once ('includes/getlang.php');
GetLang ();
GetLoc ('mainpage');
GetLoc ('donate');

GameCloseRoutine ();

require_once ('includes/main/record.php');
require_once ('includes/main/counter.php');
require_once ('includes/main/online.php');
require_once ('includes/main/usersever.php');
require_once ('includes/right.php');

if($player -> location == 'Lochy')
{
	error ('Jako, �e jeste� w lochu - nie mo�esz tutaj przebywa�.');
}

        $smarty -> assign( array ('Pagetitle' => DONATE_TITLE));
        $smarty -> display('donate.tpl');
    $db -> Close();
?>

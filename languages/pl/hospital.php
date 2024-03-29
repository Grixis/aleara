<?php
/**
 *   File functions:
 *   Polish language for hospital
 *
 *   @name                 : hospital.php                            
 *   @copyright            : (C) 2004,2005,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 24.02.2007
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
// $Id: hospital.php 898 2007-02-24 21:24:28Z thindil $

define('ERROR', 'Zapomnij o tym!');

if (!isset ($_GET['action'])) 
{
    define('STOP_WASTE', 'Nie marnuj mojego czasu!');
    define('COULD_YOU', 'Czy możesz mnie ');
    define('A_HEAL', 'uzdrowić');
    define('SURE_IT', 'Jasne, twój klan ma zniżkę na leczenie.');
    define('NO_MONEY', 'Nie możesz zostać wskrzeszony. Potrzebujesz <b>');
    define('NO_MONEY2', 'Nie stać Cię na leczenie. Do pełnego wyleczenia potrzebujesz <b>');
    define('IT_COST', 'Jasne, będzie cię to kosztowało');
    define('COULD_YOU2', 'Czy chcesz aby twa dusza wróciła do ciała?');
    define('IT_COST2', 'Magiczne zioła będą kosztować');
    define('GOLD_COINS2', '</b> sztuk złota.');
    define('BEEN_UNDER_RESURECT_POTION', 'Jesteś pod wpływem mikstury wskrzeszenia. Czy chcesz się wskrzesić bez utraty Punktów Doświadczenia?');
    define('IWANT', 'Chcę uleczyć');
    define('HPOINTS', 'punktów życia');
    define('COSTTEXT', 'Za wyleczenie jednego punktu zycia zapłacisz <b>');

}

if (isset ($_GET['action']) && ($_GET['action'] == 'heal' || $_GET['action'] == 'pheal')) 
{
    define('BAD_ACTION', 'Musisz być wskrzeszony nie uleczony');
    define('GOLD_COINS', '</b> sztuk złota.');
    define('NO_MONEY', 'Nie możesz być wyleczony. Potrzebujesz <b>');
    define('YOU_HEALED', '<br />Jesteś kompletnie wyleczony.');
    define('YOU_HEALED2', '<br />Uleczyłeś');
    define('HPOINTS', 'punktów życia.');
}

if (isset ($_GET['action']) && $_GET['action'] == 'ressurect') 
{
    define('NO_MONEY_FOR', 'Nie możesz być wskrzeszony.');
    define('YOU_RES', '<br>Zostałeś wskrzeszony ale straciłeś ');
    define('LOST_EXP', ' Punktów Doświadczenia.');
    define('NOT_NEED', 'Nie potrzebujesz wskrzeszenia!');
    define('YOU_RES_WITHOUT', 'Zostałeś wskrzeszony bez utraty Punktów Doświadczenia');

}
?>

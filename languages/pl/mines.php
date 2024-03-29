<?php
/**
 *   File functions:
 *   Polish language for mines
 *
 *   @name                 : mines.php                            
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.2
 *   @since                : 23.08.2006
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
// $Id: mines.php 566 2006-09-13 09:31:08Z thindil $

define('ERROR', 'Zapomnij o tym!');
define('A_BACK', 'wróć');
define('SEARCH_DAYS', ' dni.');
define('SEARCH_DAY', ' dzień.');

if (!isset($_GET['mine']))
{
    define('MINES_INFO', 'Szerokim korytarzem wydrążonym w litej skale doszedłeś do obszernej pieczary. Naokoło kręcili się niemiłosiernie brudni od węgla ludzie oraz krasnoludy. Ktoś ciągnął za sobą wózek z urobkiem. Wtem w jaskini rozległ się wrzask odbijając się echem po niedbale wydrążonych korytarzach. Jakiś straszliwie gruby i niemiłosiernie wręcz zarośnięty krasnolud darł się na przestraszonego gnoma. Trzymał on w zaciśniętej dłoni jakiś zwój pergaminu.
<br>- CHCESZ MI POWIEDZIEĆ, ŻE NIE MASZ JUŻ SIŁY PRACOWAĆ?! DAŁEŚ SIĘ PRZEŚCIGNĄĆ JAKIEMUŚ WYMOCZKOWI I JESZCZE PYSKUJESZ?! DO KOPALNI - RAUS!!!
<br>Identyczny papier przytwierdzony był do ściany obok ciebie. Z ciekawości zajrzałeś. "Górnik Herdon - nasz nowy przodownik pracy!" Poniżej był naszkicowany portret jakiegoś tępego osiłka. Na samym dole znajdował się zaś napis "1200% normy". Rozejrzałeś się naokoło. Solidne, drewniane drogowskazy wskazywały na ciemne i kręte korytarze prowadzące do kopalń różnych rud metali. Gdzie chcesz się udać?');
    define('A_COPPER', 'Kopalnia miedzi - złoża: ');
    define('A_ZINC', 'Kopalnia cynku - złoża: ');
    define('A_TIN', 'Kopalnia cyny - złoża: ');
    define('A_IRON', 'Kopalnia żelaza - złoża: ');
    define('A_COAL', 'Kopalnia węgla - złoża: ');
    define('M_COPPER', 'miedzi');
    define('M_ZINC', 'cynku');
    define('M_TIN', 'cyny');
    define('M_IRON', 'żelaza');
    define('M_COAL', 'węgla');
    define('YOU_SEARCH', 'Twój geolog aktualnie poszukuje złóż ');
    define('THIS_TAKE', '. Zajmie mu to jeszcze ');
}

if (isset($_GET['mine']) && !isset($_GET['step']))
{
    define('MINE_INFO', 'Witaj w kopalni ');
    define('MINE_INFO2', '. Oto co możesz tutaj zrobić:');
    define('A_SEARCH', 'Szukaj złóż');
    define('A_DIG', 'Wydobywaj złoża');
    define('M_COPPER', 'miedzi');
    define('M_ZINC', 'cynku');
    define('M_TIN', 'cyny');
    define('M_IRON', 'żelaza');
    define('M_COAL', 'węgla');
}

if (isset($_GET['step']) && $_GET['step'] == 'search')
{
    define('YOU_SEARCH', 'Nie możesz szukać złóż, ponieważ twój geolog jest zajęty jeszcze przez ');
    define('A_SEARCH', 'Szukaj');
    define('MINERALS', 'minerałów za');
    define('GOLD_COINS', 'sztuk złota. Czas poszukiwań: ');
    define('MITHRIL_COINS', 'sztuk mithrilu oraz');
    define('NO_MONEY', 'Nie masz tyle sztuk złota!');
    define('NO_MITH', 'Nie masz tyle sztuk mithrilu!');
    define('YOU_START', 'Wydałeś geologowi polecenie poszukiwania złóż minerałów');
}

if (isset($_GET['step']) && $_GET['step'] == 'dig')
{
    define('YOU_SEND', 'Przeznacz na wydobycie');
    define('M_ENERGY', ' energii.');
    define('A_DIG', 'Wydobywaj');
    define('NO_MINERALS', 'Nie ma złóż w tej kopalni!');
    define('NO_ENERGY', 'Nie masz tyle energii!');
    define('YOU_DEAD', 'Nie możesz kopać ponieważ jesteś martwy!');
    define('YOU_DIG', 'Przeznaczyłeś na wydobycie ');
    define('YOU_GET', 'Zdobyłeś w zamian ');
    define('T_AMOUNT', ' sztuk ');
    define('T_ABILITY', ' oraz ');
    define('T_ABILITY2', ' poziomów w umiejętności Górnictwo oraz ');
    define('T_GAIN_EXP', ' punktów doświadczenia. ');
    define('M_COPPER', 'rudy miedzi');
    define('M_ZINC', 'rudy cynku');
    define('M_TIN', 'rudy cyny');
    define('M_IRON', 'rudy żelaza');
    define('M_COAL', 'węgla');
}
?>

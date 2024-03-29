<?php
/**
 *   File functions:
 *   Polish language for houses
 *
 *   @name                 : house.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.3
 *   @since                : 23.11.2006
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
// $Id: house.php 840 2006-11-24 16:41:26Z thindil $

define('ERROR', 'Zapomnij o tym!');
define('GOLD_COINS', ' sztuk złota ');
define('NO_GOLD', 'Nie masz tylu sztuk złota przy sobie!');
define('H_RANK1', 'Rudera');
define('H_RANK2', 'Wiejska chata');
define('H_RANK3', 'Kamienica');
define('H_RANK4', 'Rezydencja');
define('H_RANK5', 'Pałac');
define('L_EMPTY', 'Brak');
define('A_BACK', 'Wróć');

if (!isset($_GET['action']))
{
    if ($player -> location == 'Altara')
    {
        define('HOUSE_INFO', '<p>Słońce leniwie przesuwa się ku zachodowi, pokrywając miasto czerwienią. Hałas 
na ulicach zaczyna ustępować ciszy. Opuściłeś już główne ulice Arear, 
kierując się w stronę dzielnicy mieszkalnej. Domy, które mijasz zbudowane są w 
najróżniejszych stylach. Po prawej, wśród bujnych konarów drzew, znajduje się 
wielki pałac, którego motywem przewodnim jest liść. Marmurowe kolumny ozdobione 
są szmaragdowymi ornamentami. Tuż za bramą dostrzegasz dwie wspaniałe fontanny, 
a przy podjeździe wykonany z niezwykłym kunsztem, kryształowy pomnik. Okrągłe 
okna nadają tej budowli nieco zabawnego charakteru, jednocześnie wzbudzając 
nieco zazdrości. Wchodzisz w jedną z bocznych uliczek mijając po drodze kilka 
mniejszych pałacyków. W oddali zaczynasz dostrzegać znajome zarysy, myślisz 
sobie: <i>nareszcie w domu</i></p>
');
        define('HOUSE_INFO2', '<p>Słońce leniwie przesuwa się ku zachodowi, pokrywając miasto czerwienią. Hałas 
na ulicach zaczyna ustępować ciszy. Opuściłeś już główne ulice Arear, 
kierując się w stronę dzielnicy mieszkalnej. Domy, które mijasz zbudowane są w 
najróżniejszych stylach. Po prawej, wśród bujnych konarów drzew, znajduje się 
wielki pałac, którego motywem przewodnim jest liść. Marmurowe kolumny ozdobione 
są szmaragdowymi ornamentami. Tuż za bramą dostrzegasz dwie wspaniałe fontanny, 
a przy podjeździe wykonany z niezwykłym kunsztem, kryształowy pomnik. Okrągłe 
okna nadają tej budowli nieco zabawnego charakteru, jednocześnie wzbudzając 
nieco zazdrości. Wchodzisz w jedną z bocznych uliczek mijając po drodze kilka 
mniejszych pałacyków. W oddali zaczynasz dostrzegać znajome zarysy, myślisz 
sobie: <i>nareszcie w domu</i></p>
');
    }
        else
    {
        define('HOUSE_INFO', 'Stoisz przed sadem złożonym z olbrzymich drzew. Na gałęziach każdego z nich znajdują się dziesiątki różnych domów. Widzisz domki w elfim stylu ale nie brakuje domów typowych dla ludzi, krasnoludów czy umarlaków. Po dłuższej chwili zauważasz nawet dwie czy trzy posiadłości orków.
<br><br>
Co chcesz zrobić w '.$city2);
        define('HOUSE_INFO2', 'Stoisz przed sadem złożonym z olbrzymich drzew. Na gałęziach każdego z nich znajdują się dziesiątki różnych domów. Widzisz domki w elfim stylu ale nie brakuje domów typowych dla ludzi, krasnoludów czy umarlaków. Po dłuższej chwili zauważasz nawet dwie czy trzy posiadłości orków.
<br><br>
Co chcesz zrobić w '.$city2);
	}
    define('A_LAND', 'Kup ziemię');
    define('A_LIST', 'Zobacz listę domów');
    define('A_RENT', 'Zobacz listę domów na sprzedaż');
    define('A_HOUSE', 'Twój dom');
    define('A_WORKSHOP', 'Warsztat budowlany');
}

if (isset($_GET['action']) && $_GET['action'] == 'land')
{
    define('COST1', '20 sztuk mithrilu');
    define('T_FORT', ' za ');
    define('T_AND', ' oraz ');
    define('MITHRIL_INFO', ' mithrillu');
    define('LAND_INFO', '');
    define('BUY_A', 'Kup 1 obszar ziemi');
    if (isset ($_GET['step']) && $_GET['step'] == 'buy')
    {
        define('NO_MITH', 'Nie masz tylu sztuk mithrilu!');
        define('COULD_NOT', 'Nie możesz kupić ziemi');
        define('BUY_AREA', 'Kupiłeś ziemię pod dom. Teraz możesz udać się do ');
        define('WORKSHOP', 'warsztatu');
        define('FOR_A', ' aby zacząć budować dom.');
        define('BUY_AREA2', 'Kupiłeś kolejny obszar ziemi pod Twój dom.');
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'build')
{
    define('NO_POINTS', 'Nie masz punktów budowlanych aby wykonywać jakiekolwiek czynności z domem!');
    define('B_HOUSE', 'Wybudować dom</a> - 50 punktów budowlanych - 10 000 sztuk złota, 50 mithrilu, 200 sosny<br />');
    define('U_HOUSE', 'Rozbudować dom</a> - 20 punktów budowlanych - ');
    define('B_BEDROOM', 'Wybudować sypialnię</a> - 50 punktów budowlanych - 25 000 sztuk złota, 50 mithrilu, 100 sosny<br />');
    define('B_WARDROBE', 'Dostawić szafy na przedmioty</a> - 10 punktów budowlanych - ');
    define('HOUSE_B', 'Upiększanie domu');
    define('NO_AREA', 'Nie masz ziemi aby budować dom!');
    define('NO_POINTS2', 'Nie masz tyle punktów budowlanych!');
    define('NO_FREE', 'Nie możesz dokupywać nowych rzeczy do domu, ponieważ nie masz wolnego miejsca w nim!');
    define('BUILD_INFO', ' Witaj w warsztacie budowlanym. Możesz tutaj rozbudowywać swój dom oraz upiększać go. Każda rozbudowa kosztuje oprócz złota również specjalne punkty budowlane. Owe punkty przychodzą po 142 na reset. Obecnie posiadasz');
    define('BUILD_INFO2', 'punktów budowlanych. Każda rozbudowa domu obniża jego jakość o 10 punktów. Oto co możesz zrobić');
    define('MITH_COST', ' mithrilu - ');
    define('PINE_COST', ' sosny');
    if (isset($_GET['step']) && $_GET['step'] == 'new')
    {
        define('YOU_HAVE', 'Masz już zbudowany dom!');
        define('YOU_BUILD', 'Wybudowałeś swój pierwszy dom!');
        define('H_NAME', 'Nazwa domu');
        define('A_BUILD', 'Buduj');
        define('NO_MITH', 'Nie masz wystarczającej ilości mithrillu. ');
        define('NO_PINE', 'Nie posiadasz wystarczającej ilości sosny. ');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        define('NO_FIELDS', 'Nie możesz rozbudować domu, ponieważ nie masz wolnej ziemi!');
        define('YOU_UPGRADE', 'Rozbudowałeś nieco swój dom, ale stracił on nieco na wartości.');
        define('NO_MITH', 'Nie masz wystarczającej ilości mithrillu. ');
        define('NO_PINE', 'Nie posiadasz wystarczającej ilości sosny. ');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'bedroom')
    {
        define('NO_HOUSE', 'Nie masz domu aby budować sypialnię!');
        define('YOU_HAVE', 'Nie możesz wybudować sypialni ponieważ masz już jedną!');
        define('YOU_BUILD', 'Wybudowałeś sypialnię.');
        define('NO_MITH', 'Nie posiadasz wystarczającej ilości mithrilu');
        define('NO_PINE', 'Nie masz wystarczającej ilości sosny');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'wardrobe')
    {
        define('NO_HOUSE', 'Nie masz domu aby wstawić do niego szafy!');
        define('YOU_BUILD', 'Dostawiłeś nieco szaf do domu.');
        define('NO_PINE', 'Nie posiadasz wystarczającej ilości sosny. ');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'upgrade')
    {
        define('NO_HOUSE', 'Nie masz domu aby go upiększać!');
        define('YOU_UPGRADE', 'Zwiększyłeś wartość swojego domu.');
        define('UPG_INFO', '<br /> Tutaj możesz upiększać swój dom. Każde podniesienie jego wartości o jeden wymaga 10 ptk. budowlanych oraz kosztuje ');
        define('UPGRADE', 'Chce podnieść wartość domu o ');
        define('T_CREDITS', ' sztuk złota, ');
        define('T_ADAMANTIUM', ' adamantytu, ');
        define('T_CRYSTAL', ' kryształu, ');
        define('T_METEOR', ' meteorytu, ');
        define('T_YEW', ' cisu, ');
        define('T_ELM', ' wiązu.');
        define('A_WORK', 'Pracuj');
        define('NO_ELM', 'Nie masz wystarczajej ilości wiązu.');
        define('NO_YEW', 'Nie masz wystarczajej ilości cisu.');
        define('NO_METEOR', 'Nie masz wystarczajej ilości meteorytu.');
        define('NO_CRYSTAL', 'Nie masz wystarczajej ilości kryształu.');
        define('NO_ADAMANTIUM', 'Nie masz wystarczajej ilości adamantytu.');
    }
}

if (isset ($_GET['action']) && $_GET['action'] == 'list')
{
    define('H_NUMBER', 'Numer');
    define('H_NAME', 'Nazwa domu');
    define('H_SIZE', 'Rozmiar');
    define('H_TYPE', 'Typ');
    define('H_OWNER', 'Właściciel');
    define('H_LOCATOR', 'Współlokator');
}

if (isset($_GET['action']) && $_GET['action'] == 'rent')
{
    define('YOUR_OFERT', 'Wycofaj');
    define('A_BUY', 'Kup');
    define('H_NUMBER', 'Numer');
    define('H_SELLER', 'Sprzedający');
    define('H_NAME', 'Nazwa domu');
    define('H_SIZE', 'Rozmiar');
    define('H_TYPE', 'Typ');
    define('H_COST', 'Cena');
    define('H_OPTION', 'Opcje');
    if (isset($_GET['buy']))
    {
        define('YOU_HAVE', 'Nie możesz kupić domu, ponieważ posiadasz już jeden!');
        define('NO_HOUSE', 'Nie ma takiego domu!');
        define('NOT_FOR_SALE', 'Ten dom nie jest na sprzedaż!');
        define('L_ACCEPT', '</a></b> zaakceptował twoją ofertę za dom. Dostałeś <b>');
        define('L_BANK', '</b> sztuk złota do banku.');
        define('YOU_BUY', '<br />Kupiłeś dom.');
    }
    if (isset($_GET['back']))
    {
        define('YOU_HAVE', 'Nie możesz kupić domu, ponieważ posiadasz już jeden!');
        define('NO_HOUSE', 'Nie ma takiego domu!');
        define('NOT_FOR_SALE', 'Ten dom nie jest na sprzedaż!');
        define('YOU_WITHDRAW', '<br />Wycofałeś swoją ofertę.');
        define('NOT_YOUR', 'Nie możesz wycofywać cudzych ofert');
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'my')
{
    define('NO_HOUSE', 'Nie masz domu!');
    define('ONLY_OWNER', 'Tylko właściciel domu może przebywać tutaj!');
    if (!isset($_GET['step']) && !isset ($_GET['step2']))
    {
        define('GO_TO_BED', 'Idź do sypialni');
        define('GO_TO_WAR', 'Szafy z przedmiotami');
        define('A_LOCATOR', 'Drugi mieszkaniec domu');
        define('A_SELL', 'Wystaw dom na sprzedaż');
        define('HOUSE_INFO', 'Witaj w swoim domu. Możesz tutaj przechowywać przedmioty - jedno pomieszczenie przeznaczone na przechowalnię pomieści 100 przedmiotów. Jeżeli posiadasz sypialnię, możesz iść spać dzięki czemu, gdy opuścisz '.$gamename.', nikt nie będzie mógł Cię zaatakować. Dodatkowo możesz próbować odpocząć w sypialni i nieco zregenerować nadwątlone siły.');
        define('H_NAME', 'Nazwa domu');
        define('H_SIZE', 'Rozmiar');
        define('H_OWNER', 'Właściciel');
        define('H_LOCATOR', 'Współlokator');
        define('L_AMOUNT', 'Ilość ziemi');
        define('F_ROOMS', 'Wolnych pokoi');
        define('H_VALUE', 'Wartość domu');
        define('I_BEDROOM', 'Sypialnia');
        define('W_AMOUNT', 'Ilość szaf');
        define('I_AMOUNT', 'Przedmiotów w domu');
        define('C_NAME', 'Zmień nazwę');
        define('A_LEAVE', 'Opuść dom');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'leave')
    {
        define('YOU_LEAVE', 'Opuszczasz dom');
        define('YOU_WANT', 'Naprawdę chcesz opuścić dom?');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'sell')
    {
        define('YOU_SELL', 'Wystawiłeś swój dom na sprzedaż za ');
        define('SELL_INFO', 'Tutaj możesz sprzedać swój dom. Jednak zanim to zrobisz, zabierz wszystkie przedmioty z domu, inaczej przepadną. Po wystawieniu domu na sprzedaż nie możesz już więcej z niego korzystać ani też cofnąć oferty');
        define('HOUSE_SALE', 'dom na sprzedaż za');
        define('A_SEND', 'Wystaw');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'locator')
    {
        define('YOU_HAVE', 'Masz już współlokatora');
        define('BAD_PL', 'Ten gracz nie może być współlokatorem ponieważ posiada własny dom');
        define('LIVE_ANOTHER', 'Ten gracz mieszka już w innym domu');
        define('NO_PLAYER', 'Nie ma takiego gracza');
        define('YOU_ADD', 'Dodałeś współlokatora do domu');
        define('NO_LOC', 'Nie masz współlokatora!');
        define('NO_LOC2', 'Ten gracz nie jest twoim współlokatorem');
        define('YOU_DELETE', 'Usunąłeś współlokatora z domu');
        define('O_ADD', 'Dodaj');
        define('O_DELETE', 'Usuń');
        define('SECOND', 'drugiego mieszkańca domu');
        define('L_ID', 'ID');
        define('A_MAKE', 'Wykonaj');
        define('YOU_GET', 'Zostałeś zaproszony do <a href="house.php?action=my">domu</a> przez ');
        define('YOU_FIRED', 'Zostałeś wyrzucony z domu przez ');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'name')
    {
        define('EMPTY_NAME', 'Podaj nową nazwę domu!');
        define('YOU_CHANGE', 'Zmieniłeś nazwę domu na: ');
        define('A_CHANGE', 'Zmień');
        define('ON_A', 'nazwę domu na');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'bedroom')
    {
        define('BED_INFO', 'W sypialni możesz odpocząć aby zregenerować nadwątlone siły. Odpoczynek pozwala Ci zregenerować część punktów energii oraz manę. Możesz odpoczywać jedynie raz na dzień. Ilość odzyskanej energii zależy od rozmiaru i piękna Twojego domu. Oprócz tego jeżeli wylogujesz się z gry w tym miejscu, twoja postać pójdzie spać i nikt nie będzie mógł ciebie zaatakować. Co chcesz robić?');
        define('A_REST', 'Chcę nieco odpocząć');
        define('A_SLEEP', 'Iść spać');
        define('NO_BEDROOM', 'Nie możesz odpoczywać ponieważ nie masz sypialni!');
        define('YOU_DEAD', 'Nie możesz odpoczywać ponieważ jesteś martwy!');
        define('NO_RACE', 'Nie możesz odpoczywać ponieważ nie masz wybranej rasy lub klasy!');
        define('ONLY_ONCE', 'Możesz odpoczywać tylko raz na dzień!');
        define('YOU_REST', 'Odpoczywałeś jakiś czas i odzyskałeś ');
        define('G_LIFE', ' punktów życia oraz ');
        define('G_ENERGY', ' energii, ');
        define('G_MAGIC', ' punktów magii.');
        define('YOU_REST2', 'Próbowałeś nieco odpocząć ale hałas z ulicy przeszkadzał ci w tym. Niestety nie udało ci się odpocząć.');
    }
    if (isset($_GET['step']) && $_GET['step'] == 'wardrobe')
    {
        define('W_INFO', 'W szafach w domu możesz przechowywać przedmioty. W jednej szafie mieści się 100 przedmiotów. Obecnie posiadasz');
        define('W_AMOUNT', 'szaf');
        define('AND2', 'oraz');
        define('I_AMOUNT4', 'przedmiotów');
        define('IN_W', 'w nich');
        define('A_LIST', 'Lista przedmiotów w domu');
        define('A_HIDE_I', 'Schowaj przedmiot w szafie');
        define('I_NAME', 'Nazwa');
        define('I_POWER', 'Siła');
        define('I_DUR', 'Wytrzymałość');
        define('I_AGI', 'Premia do zręczności');
        define('I_SPEED', 'Premia do szybkości');
        define('I_AMOUNT2', 'Ilość');
        define('I_OPTION', 'Opcje');
        define('A_GET', 'Weź');
        define('FROM_H', 'z domu');
        define('AMOUNT2', 'sztuk(i)');
        define('ITEM', 'Przedmiot');
        define('I_AMOUNT3', 'ilość');
        define('A_HIDE', 'Schowaj');
        define('NO_WARDROBE', 'Nie możesz składować przedmiotów w domu, ponieważ nie masz szaf!');
        define('NO_AMOUNT', 'Nie masz tylu przedmiotów w szafach!');
        define('YOU_GET', 'Wziąłeś z domu ');
        define('I_AMOUNT', ' sztuk(i) ');
        define('NO_ITEM', 'Podaj który przedmiot chcesz wziąść!');
        define('NOT_ENOUGH', 'Nie masz tyle miejsca w szafach!');
        define('NOT_ENOUGH2', 'Nie masz tyle przedmiotów tego typu!');
        define('YOU_HIDE', 'Schowałeś <b>');
        define('IN_HOUSE', '</b> w domu.');
    }
}
?>

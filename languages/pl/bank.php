<?php
/**
 *   File functions:
 *   Polish language for bank
 *
 *   @name                 : bank.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : yeskov <yeskov@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 08.03.2007
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
// $Id: bank.php 950 2007-03-08 12:02:20Z thindil $

define('ERROR', 'Zapomnij o tym!');
define('MIN5', 'Sztabki miedzi');
define('MIN8', 'Sztabki żelaza');
define('MIN10', 'Bryły węgla');
define('MIN11', 'Bryły adamantium');
define('MIN12', 'Kawałki meteorytu');
define('MIN13', 'Kryształów');
define('MIN14', 'Drewno sosnowe');
define('MIN6', 'Sztabek brązu');
define('MIN7', 'Sztabki mosiądzu');
define('MIN9', 'Sztabki stali');
define('MIN15', 'Drewno z leszczyny');
define('MIN16', 'Drewno cisowe');
define('MIN17', 'Drewno z wiązu');
define('MIN1', 'Ruda miedzi');
define('MIN2', 'Ruda cynku');
define('MIN3', 'Ruda cyny');
define('MIN4', 'Ruda żelaza');
define('HERB1', 'Illani');
define('HERB2', 'Illanias');
define('HERB3', 'Nutari');
define('HERB4', 'Dynallca');
define('HERB5', 'nasiona Illani');
define('HERB6', 'nasiona Illanias');
define('HERB7', 'nasiona Nutari');
define('HERB8', 'nasiona Dynallca');
define('A_CRIME', 'Okradnij bank');
define('BAD_PLAYER', 'Nie możesz dotować sam siebie!');
define('NO_PLAYER', 'Nie ma takiego gracza!');
define('T_PLAYER', 'Gracz');
define('T_GIVE', 'przekazał(a) Ci');
define('NO_MINERAL', 'Nie masz tyle');
define('YOU_SEND', 'Przekazałeś graczowi');
define('T_AMOUNT', '</b> sztuk(i)');
define('NOT_YOUR', 'To nie twój przedmiot!');
define('NO_ITEM', 'Nie ma takiego przedmiotu!');
define('E_DB4', 'nie mogę dodać!');
define('GOLD_COINS', 'sztuk złota.');
define('YOU_SEND2', 'Dałeś');
define('BANK_INFO', '<p>Witaj w skarbcu. Możesz przechować tutaj swoje złoto, aby nie utracić go w walce z innymi.
Możesz również przesłać nieco pieniędzy lub minerałów innemu mieszkańcowi.</p>');
define('I_WANT', 'Chcę');
define('A_WITHDRAW', 'wycofać');
define('A_DEPOSIT', 'zdeponować');
define('A_GIVE', 'dać');
define('D_PLAYER', 'graczowi ID (numer)');
define('M_AMOUNT', 'sztuk mithrilu');
define('kluczy', 'kluczy');
define('oko', 'artefakt: oko');
define('zab', 'artefakt: ząb');
define('wlos', 'artefakt: włos');
define('serce', 'artefakt: serce');
define('zebro', 'artefakt: żebro');
define('drzewek', 'sadzonek');
define('wywar', 'wywary(ów)');
define('sadzonek', 'sadzonek');
define('drzewka', 'sadzonek');
define('I_AMOUNT', 'sztuk(i)');
define('I_AMOUNT2', 'ilość');
define('H_AMOUNT', 'w ilości');
define('G_AMOUNT', 'kwotę w wysokości');
define('T_ID', ' , ID ');
define('A_ASTRAL', 'Skarbiec astralnych komponentów (mapy, plany, przepisy)');
define('A_ASTRAL2', 'Skarbiec astralnych komponentów (komponenty, konstrukcje, mikstury)');
define('ASTRAL_GOLD', ' sztuk złota');
define('ASTRAL_MITH', ' sztuk mithrilu');
define('ADAMANTIUM', 'brył adamantium');
define('CRYSTAL', 'kryształów');
define('BUY_SAFE', 'Zwiększ poziom zabezpieczeń przed włamaniem (rozbudowa na ');
define('BUY_SAFE2', ' poziom). Koszt: ');
define('NO_MITHRIL', 'Nie masz tyle mithrilu!');

define('I_DUR', 'wytrz:');  // Durability of item, NOT player statistic 'endurance'!
define('I_AGI', 'zr:');
define('I_SPE', 'szyb:');
define('I_POWER', '');  // empty string for rings and items added in future, will result in general bonus 'Magic super item (+50)', 'Adept's ring of wisdom (+1)' etc.
define('I_DEF', 'obr:');
define('I_ATT', 'atak:');
define('I_MANA', 'mana:'); // Added by magic robes.


if (isset ($_GET['action']) && $_GET['action'] == 'minerals')
{
    define('COPPER', 'sztabek miedzi');
    define('IRON', 'sztabek żelaza');
    define('COAL', 'brył węgla');
    define('METEOR', 'kawałków meteorytu');
    define('PINE', 'drewna sosnowego');
    define('COPPERORE', 'rudy miedzi');
    define('ZINCORE', 'rudy cynku');
    define('TINORE', 'rudy cyny');
    define('IRONORE', 'rudy żelaza');
    define('BRONZE', 'sztabek brązu');
    define('BRASS', 'sztabek mosiądzu');
    define('STEEL', 'sztabek stali');
    define('HAZEL', 'drewna z leszczyny');
    define('YEW', 'drewna cisowego');
    define('ELM', 'drewna z wiązu');
    define('NO_MINERALS', 'Nie masz tylu minerałów!');
    define('E_DB', 'błąd przy dodaniu nowego minerału!');
    define('E_DB2', 'błąd przy dodaniu istniejącego minerału!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'mithril')
{
    define('M_AMOUNT2', 'sztuk mithrilu graczowi ID');
}

if (isset ($_GET['action']) && $_GET['action'] == 'herbs')
{
    define('NO_HERBS', 'Nie masz ziół!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'potions')
{
    define('E_DB3', 'nie mogę dodać do dziennika!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'withdraw')
{
    define('EMPTY_FIELD', 'Podaj ile złota chcesz zabrać z banku');
    define('NO_MONEY', 'Nie możesz wycofać aż tyle.');
    define('WITHDRAW', 'Wycofałeś');
}

if (isset ($_GET['action']) && $_GET['action'] == 'deposit')
{
    define('EMPTY_FIELD', 'Podaj ile złota chcesz zostawić w banku');
    define('NO_MONEY', 'Nie możesz zdeponować aż tyle.');
    define('DEPOSIT', 'Zdeponowałeś');
}

if (isset ($_GET['action']) && $_GET['action'] == 'donation')
{
    define('NO_GOLD', 'Nie masz tyle złota w banku!');
    define('MINUS_GOLD', 'Nie możesz dawać złota innym graczom kiedy masz ujemne złoto w ręce!');
}

if (isset ($_GET['action']) && $_GET['action'] == 'steal')
{
	define('YOU_DEAD', 'Martwy złodziej nie może kraść!');
    define('NO_CRIME', 'Nie możesz próbować okradać bank, ponieważ niedawno próbowałeś już swoich sił!');
    define('VERDICT', 'Próba kradzieży złota z banku w '.$city1a.'');
    define('L_REASON', 'Zostałeś wtrącony do więzienia na 1 dzień za próbę okradzenia banku. Możesz wyjść z więzienia za kaucją');
    define('C_CACHED', 'Złapany(Opis...)');
    define('C_SUCCES', 'Wyniosłeś ');
    define('C_SUCCES2', ' sztuk złota. (Opis...)');
}

if (isset($_GET['action']) && $_GET['action'] == 'astral')
{
    define('T_NAME', 'Nazwa');
    define('T_MAPS', 'Kawałki map');
    define('T_PLANS', 'Kawałki planów');
    define('T_RECIPES', 'Kawałki przepisów');
    define('T_FORMULAS', 'Kawałki wzorów');
    define('MAP1', 'Plan demoniczny');
    define('MAP2', 'Plan ognisty');
    define('MAP3', 'Plan piekielny');
    define('MAP4', 'Plan pustynny');
    define('MAP5', 'Plan wodny');
    define('MAP6', 'Plan niebiański');
    define('MAP7', 'Plan śmiertelny');
    define('PLAN1', 'Astralny komponent');
    define('PLAN2', 'Gwiezdny portal');
    define('PLAN3', 'Świetlisty obelisk');
    define('PLAN4', 'Płomienny znicz');
    define('PLAN5', 'Srebrzysta fontanna');
    define('RECIPE1', 'Magiczna esensja');
    define('RECIPE2', 'Gwiezdna maść');
    define('RECIPE3', 'Eliksir Illuminati');
    define('RECIPE4', 'Astralne medium');
    define('RECIPE5', 'Magiczny absynt');
    define('FORMULA1', 'Bransoleta Świtu');
    define('FORMULA2', 'Naszyjnik Prawdy');
    define('FORMULA3', 'Berło Mądrości');
    define('FORMULA4', 'Lśniący Diadem');
    define('FORMULA5', 'Pierścień Przeznaczenia');
    define('YOU_MERGE', 'Skompletowałeś plan');
    define('T_MAPS2', 'Kompletne mapy');
    define('T_PLANS2', 'Kompletne plany');
    define('T_RECIPES2', 'Kompletne przepisy');
    define('T_FORMULAS2', 'Kompletne wzory');
    define('T_SEND', 'Wyślij graczowi ID:');
    define('T_PIECE', 'kawałek komponentu');
    define('T_COMPONENT', 'komponent');
    define('T_NUMBER', 'Numer:');
    define('T_AMOUNT2', 'Ilość:');
    define('NO_AMOUNT', 'Nie masz takiej ilości tego komponentu!');
    define('YOU_GIVE', 'Przekazałeś');
    define('YOU_GET', 'Dostałeś');
    define('PIECE', ' kawałek mapy/planu ');
    define('COMPONENT', ' kompletny komponent ');
    define('M_AMOUNT2', '</b> sztuk: ');
    define('D_PLAYER2', ' od mieszkańca ID: ');
    define('A_GIVE2', 'Przekaż');
    define('COMP1', 'Ząb Glabrezu');
    define('COMP2', 'Ognisty pył');
    define('COMP3', 'Pazur Zgłębiczarta');
    define('COMP4', 'Łuska Skorpendry');
    define('COMP5', 'Macka Krakena');
    define('COMP6', 'Piorun Tytana');
    define('COMP7', 'Żebro Licha');
    define('CONST1', 'Astralny komponent');
    define('CONST2', 'Gwiezdny portal');
    define('CONST3', 'Świetlny obelisk');
    define('CONST4', 'Płomienny znicz');
    define('CONST5', 'Srebrzysta fontanna');
    define('POTION1', 'Magiczna esensja');
    define('POTION2', 'Gwiezdna maść');
    define('POTION3', 'Eliksir Illuminati');
    define('POTION4', 'Astralne medium');
    define('POTION5', 'Magiczny absynt');
    define('JEWELLERY1', 'Bransoleta Świtu');
    define('JEWELLERY2', 'Naszyjnik Prawdy');
    define('JEWELLERY3', 'Berło Mądrości');
    define('JEWELLERY4', 'Lśniący Diadem');
    define('JEWELLERY5', 'Pierścień Przeznaczenia');
    define('MAGICCOMP', 'Magiczne składniki');
    define('MAGICCONST', 'Magiczne konstrukcje');
    define('MAGICPOTIONS', 'Magiczne mikstury');
    define('MAGICJEWELLERY', 'Magiczna biżuteria');
}

if (isset($_GET['action']) && $_GET['action'] == 'safe')
{
    define('SAFE_ENOUGH', 'Nie możesz rozbudować skrytki ponieważ już osiągnąłeś maksymalny jej poziom!');
    define('NO_MONEY', 'Nie masz tylu sztuk złota!');
    define('YOU_UPGRADE', 'Podniosłeś poziom zabezpieczeń swojego skarbca.');
}
?>

<?php
/**
 *   File functions:
 *   Polish language for jail
 *
 *   @name                 : jail.php                            
 *   @copyright            : (C) 2004, 2005, 2006 Vallheru Team based on Gamers-Fusion ver 2.5
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
// $Id: jail.php 840 2006-11-24 16:41:26Z thindil $

define('ERROR', 'Zapomnij o tym!');

    define('JAIL_INFO','<p>- Skazaniec numer jeden, pod mur! Natychmiast! - Strażnicy popatrzeli na 
siebie. Wiedzieli co się za chwilę stanie. Na około stał lud w milczeniu. Padał 
deszcz tego dnia.<br />
<br />
- Zaraz będzie egzekucja... - Można było usłyszeć ciche głosy. Nikt nawet nie 
próbował się śmiać.<br />
- Jak zwykle tego dnia, odbywa się egzekucja. Ci oto skazani za ciężkie swe 
grzechy, zostaną ścięci. Niech to będzie przestroga dla wszystkich! - Strażnik 
wzniósł głos, aby każdy mógł go usłyszeć. Rozejrzał się dookoła...<br />
<br />
Stali na placu. Był bardzo duży, aby więźniowie mogli mieć więcej swobody i 
marszu. Obok placu wznosiły się trzy budynki. Jeden ogromny i dwa nieco 
mniejsze. W budynkach pobocznych znajdowały się sale do spotkań, stołówka, biura 
strażników i cele więźniów, którzy popełnili małe wykroczenia i zostali skazani 
na kilka dni aresztu. Mieszkańcy mogli odwiedzać skazanych, jak również wpłacać 
kaucje by ich uwolnić. W budynku głównym znajdowały się cele skazanych za 
poważne wykroczenia lub osób czekających na egzekucję. Tam oprócz strażników nie 
miał dostępu nikt...</p>
</p>');

define('P_NAME', 'Imię skazańca');
define('P_ID', 'ID skazańca');
define('P_DATE', 'Data wtrącenia do lochu');
define('P_REASON', 'Przyczyna skazania');
define('P_DURATION', 'Dni pozostałych do odsiadki');
define('P_COST', 'Wysokość kaucji');
define('GOLD_COINS', 'sztuk złota');
define('NO_PRISONERS', 'Nie ma więźniów w lochach!');
define('YOU_ARE', 'Obecnie przebywasz w lochu.');
define('P_DURATION_R', 'resetów');

if (isset ($_GET['prisoner'])) 
{
    define('NO_PRISONER', 'Nie ma takiego więźnia!');
    define('NO_MONEY', 'Nie masz tylu sztuk złota przy sobie!');
    define('NO_PERM', 'Nie możesz wpłacić sam za siebie kaucji!');
    define('L_PLAYER', 'Gracz <b>');
    define('L_ID', '</b>, ID ');
    define('PAY_FOR', ' wpłacił(a) za Ciebie kaucję w lochach.');
    define('YOU_PAY', 'Zapłaciłeś ');
    define('GOLD_FOR', ' sztuk złota kaucji za gracza ');
    define('YOU_WANT', 'Naprawdę chcesz zapłacić kaucję za ');
    define('A_BACK', 'Wróć');
}
?>
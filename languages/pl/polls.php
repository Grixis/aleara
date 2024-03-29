<?php
/**
 *   File functions:
 *   Polish language for city polls
 *
 *   @name                 : polls.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.1
 *   @since                : 10.03.2006
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
// $Id: polls.php 566 2006-09-13 09:31:08Z thindil $

define('ERROR', 'Zapomnij o tym!');
define('T_VOTES', 'głosów');
define('A_BACK', 'Wróć');
define('SUM_VOTES', 'Głosowało');
define('T_MEMBERS', 'mieszkańców');
define('A_COMMENTS', 'Komentarze');

if (!isset($_GET['action']))
{
    if ($player -> location == 'Altara')
    {
        define('POLLS_INFO', '<p><p>Jak co dzień o tej porze wychodząc z karczmy idziesz w lewo w ulicę 
Południową, skręcasz w prawo i przechodzisz przez pusty plac ...<br />
- Stój - natarczywy glos strażnika dochodzi zza Twoich pleców- dzisiaj nie ma 
obrad, przyjdź jutro tylko... ogól się i doprowadź do porządku.<br />
Odwracasz się na pięcie nie chcąc wchodzić w kłótnię z tym gburem i zastanawiasz 
się jakie obrady mają mieć miejsce na placu, przez który podążałeś do domu. 
Wiedząc, że niczego nie wskórasz, obierasz inną drogę. Odwracasz się jednak by 
jeszcze spojrzeć na swój pusty placyk, na którym nie raz zdarzało Ci się 
zasypiać i...<br />
- O bogowie! - krzyczysz na całe gardło sprowadzając na siebie spojrzenia 
przechodzących - cóż to jest</p>
<p>Twój pusty plac prowadzący skrótem do Twojego łóżka nie był już pusty. 
&quot;Zapełniał&quot; go ogromny budynek wysoki chyba na 1000 stóp, pięknie zdobiony i... 
równie pięknie strzeżony przez gwardzistów w zbrojach, którzy teraz dziwnie 
patrzyli się na Ciebie. Jeden z nich chyba zauważył ogromne zdziwienie na Twej 
twarzy, doszedł do wniosku, że długo nie opuszczałeś... karczmy, podszedł do 
Ciebie i rzekł:<br />
- To co tutaj widzisz to Hala Zgromadzeń. Budynek powstał niedawno i będzie 
miejscem publicznych obrad króla i jego poddanych. Będzie można zabrać głos, 
wypowiedzieć się na temat, który Cię interesuje. Jeżeli coś Ci się nie podoba w 
państwie będziesz mógł o tym powiedzieć królowi. Jak już mówiłem, obrady 
rozpoczynają się jutro, więc możesz przyjść.<br />
Zerkałeś oniemiały to na strażnika to na Halę Zgromadzeń, a w Twej głowie 
krążyła jedna myśl:<br />
- Jutro obrady, jutro obrady... jakie u licha obrady<br />
Wolnym krokiem podążyłeś z powrotem do karczmy.</p>
</p>');
        define('POLLS_INFO2', '<p>W jednym z pomieszczeń Zamku Namiestnika znajduje się wielka, przestronna komnata, w której często ogłaszane są referenda dla społeczności Alear. Jeśli zależy Ci na dobru Królestwa oraz nie jesteś obojętny na toczące się aktualnie sprawy - zagłosuj.</p>');
    }
        else
    {
        define('POLLS_INFO', '<p>W jednym z pomieszczeń Zamku Namiestnika znajduje się wielka, przestronna komnata, w której często ogłaszane są referenda dla społeczności Alear. Jeśli zależy Ci na dobru Królestwa oraz nie jesteś obojętny na toczące się aktualnie sprawy - zagłosuj.</p>');
    }
    define('NO_POLLS', 'Nie ma jeszcze ankiet');
    define('LAST_POLL', 'Oto ostatnia ankieta');
    define('A_SEND', 'Wyślij');
    define('A_LAST_10', 'Pokaż ostatnie 10 ankiet');
    define('POLL_DAYS', 'Ankieta potrwa jeszcze');
    define('T_DAYS', 'dni');
    define('POLL_END', 'Ankieta zakończona');
}

if (isset($_GET['action']) && $_GET['action'] == 'vote')
{
    define('VOTE_SUCC', 'Dziękujemy za oddanie głosu');
}

if (isset($_GET['action']) && $_GET['action'] == 'last')
{
    define('LAST_INFO', 'Oto lista ostatnich 10 ankiet');
}

if (isset($_GET['action']) && $_GET['action'] == 'comments')
{
    define('C_ADDED', 'Komentarz dodany!');
    define('C_DELETED', 'Komentarz skasowany!');
    define('NO_COMMENTS', 'Nie ma jeszcze komentarzy do tej ankiety!');
    define('A_DELETE', 'Skasuj');
    define('ADD_COMMENT', 'Dodaj komentarz');
    define('A_ADD', 'Dodaj');
    define('NO_PERM', 'Nie masz prawa przebywać tutaj!');
    define('EMPTY_FIELDS', 'Wypełnij wszystkie pola!');
    define('WRITED', 'napisał(a)');
    define('NO_TEXT', 'Nie ma takiej ankiety!');
}
?>

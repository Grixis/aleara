<?php
/**
 *   File functions:
 *   Polish language for admin panel
 *
 *   @name                 : admin1.php                            
 *   @copyright            : (C) 2004-2005 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.0 rc1
 *   @since                : 30.11.2005
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

if (isset ($_GET['view']) && $_GET['view'] == 'mail') 
{
    define('M_SUBJECT', 'Informacja od władców');
}

if (isset ($_GET['view']) && $_GET['view'] == 'jail') 
{
    define('YOU_JAIL', 'Zostałeś wtrącony do więzienia na');
    define('DAYS2', 'dni za');
    define('YOU_MAY', 'Możesz wyjść z więzienia za kaucją');
    define('SEND_YOU', 'Do więzienia wtrącił Cię');
}
?>

<?php
/**
 *   File functions:
 *   View other players, steal money, astral components from other players
 *
 *   @name                 : view.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 18.04.2007
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

$title = 'Zobacz';
require_once('includes/head.php');
require_once('includes/checkexp.php');
require_once('class/view_class.php');

if (!isset($_GET['view']))
$test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));
{
    error("<a href=\"\"></a>");
}

if (!ereg("^[1-9][0-9]*$", $_GET['view']))
{
    error('<a href=""></a>');
}

$view = new ViewPlayer($_GET['view']);

$data=mysql_query("Select agility, inteli from players where id=".$_GET['view']);
$test=mysql_fetch_array($data);
$em_agility=$test['agility'];
$em_inteli=$test['inteli'];
/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/view.php');

if (empty ($view -> id))
{
    error (NO_PLAYER);
}
$smarty -> assign (array('User' => getTaggedPlayerName ($view -> user, $view->tribe, $view->tribe_rank),
                         'Id' => $view -> id,
                         'Avatar' => '',
                         'GG' => '',
                         'Immu' => '',
                         'Attack' => '',
                         'Mail' => '',
                         'Crime' => '',
                         'Crime2' => '',
                         'Gender' => '',
                         'Deity' => '',
                         'ViewerRank' => $player -> rank,
                         'Tseclang' => ''));
$plik = 'avatars/'.$view -> avatar;
if (is_file($plik))
{
    require_once('includes/avatars.php');
    $arrImage = scaleavatar($plik);
    $smarty -> assign ('Avatar', '<center><img src="'.$plik.'" width="'.$arrImage[0].'" height="'.$arrImage[1].'" /></center>');
}
if (!empty($view -> gg))
{
    $smarty -> assign ('GG', GG_NUMBER.$view -> gg.'<br />');
}

/**
 * Select player rank
 */
require_once('includes/ranks.php');
$strRank = selectrank($view -> rank, $view -> gender);

if($view -> seclang)
{
    $smarty -> assign('Tseclang', T_SEC_LANG.$view -> seclang.'<br />');
}

if ($view -> immunited == 'Y')
{
    $smarty -> assign ('Immu', HAVE_IMMU.'<br />');
}

/**
 * Name of player location
 */
$strLocation = $view -> location;
if ($view -> location == 'Altara')
{
    $strLocation = $city1;
}
if ($view -> location == 'Ardulith')
{
    $strLocation = $city2;
}
$profile = $db -> Execute("SELECT * FROM `profiles` WHERE `owner`=".$view -> id);

	$i = 0;
	while (!$profile -> EOF)
	{
		$arrId[$i] = $profile -> fields['id'];
		$arrTabs[$i] = $profile -> fields['tab'];
		$arrText[$i] = $profile -> fields['text'];
		$arrNumber[$i]= $i;
		$i ++;
		$profile -> MoveNext();
	}
	$profile -> Close();

if (!isset($_GET['show']))
{
	$tabid=0  ;
}
else
{
	$tabid=$_GET['show'];
}
$id=array_search($tabid,$arrId);
$strProfile=$arrText[$id];

$smarty -> assign(array('Page' => $strViewpage,
                        'Age' => $view -> age,
                        'Race' => $view ->race,
                        'Clas' => $view ->clas,
                        'Rank' => $strRank,
                        'Location' => $strLocation,
                        'Level' => $view -> level,
                        'Maxhp' => $view -> max_hp,
                        'Wins' => $view -> wins,
                        'Losses' => $view -> losses,
                        'Lastkilled' => $view -> lastkilled,
                        'Lastkilledby' => $view -> lastkilledby,
                        'Tabid' => $arrId,
                        'Tabs' => $arrTabs,
                        'Profile' => $arrText,
						'Number' => $arrNumber,
                        'Lang' => $view -> lang));

if ($view -> wins || $view -> losses)
{
    $intAllfight = $view -> wins + $view -> losses;
    $fltRatio = round(($view -> wins / $intAllfight) * 100, 3);
    $smarty -> assign('Fratio', '('.$fltRatio.' %)');
}
    else
{
    $smarty -> assign('Fratio', '');
}
$para = $db -> Execute("SELECT * FROM pary WHERE prisoner=".$view->id ." or prisonerp=".$view->id);

	
	$malzonek1=$para->fields['prisoner'];
	$malzonek2=$para->fields['prisonerp'];
	if ($malzonek1 == $view ->id)
	{
	$test = $malzonek2;
	}
	else
	{
	$test = $malzonek1;
	}
	if (!empty($test))
	{
	$blah=$db->Execute("SELECT user FROM players WHERE id=".$test);
	$imie=$blah->fields['user'];
	if ($view -> gender == 'M')
	{
		$stan="Żonaty z <a href='view.php?view=".$test."'>".$imie."</a>";
	}
	else
	{
		$stan="Mężatka z <a href='view.php?view=".$test."'>".$imie."</a>";
	}
	$smarty -> assign('Stan','Stan cywilny: '.$stan.'<br />');
	}
	else
	{
	if ($view -> gender == 'M')
		{
		$stan="Kawaler";
		}
		else
		{
		$stan="Panna";
		}
	$smarty -> assign('Stan','Stan cywilny: '.$stan.'<br/>');
	}
if ($view -> gender)
{
    if ($view -> gender == 'M')
    {
        $gender = G_MALE;
    }
        else
    {
        $gender = G_FEMALE;
    }
    $smarty -> assign ('Gender', T_GENDER.': '.$gender.'<br />');
}
if (!empty ($view -> deity))
{
    $smarty -> assign ('Deity', T_DEITY.': '.$view -> deity.'<br />');
}
if ($view -> hp > 0)
{
    $smarty -> assign ('Status', '<b>'.S_LIVE.'</b><br />');
}
    else
{
    $smarty -> assign ('Status', '<b>'.S_DEAD.'</b><br />');
}

$tribe = $db -> Execute('SELECT `name` FROM `tribes` WHERE `id`='.$view -> tribe);
if ($tribe -> fields['name'])
{
    $smarty -> assign ('Clan', T_CLAN.': <a href="tribes.php?view=view&amp;id='.$view -> tribe.'">'.$tribe -> fields['name'].'</a><br />'.T_CLAN_RANK.': '.$view -> tribe_rank.'<br />');
}
    else
{
    $smarty -> assign ('Clan', T_CLAN.': '.NOTHING.'<br />');
}

$ref = $db -> Execute("SELECT sum(points) as points FROM reputation WHERE `player_id`=".$view -> id);
if ($ref -> fields['points'] == '')
{
	$ref -> fields['points'] = 0;
}
$smarty -> assign ('Refs', $ref -> fields['points']);

$objFreeze = $db -> Execute('SELECT `freeze` FROM `players` WHERE `id`='.$_GET['view']);

if ($player -> location == $view -> location && $view -> immunited == 'N' && $player -> immunited == 'N' && $player -> id != $view -> id)
{
    $smarty -> assign ('Attack', (!$objFreeze -> fields['freeze']) ? '<li><a href="battle.php?battle='.$view -> id.'">'.A_ATTACK.'</a></li>' : '');
}

if ($player -> id != $view -> id)
{
    $smarty -> assign ('Mail', '<li><a href="mail.php?view=write&amp;to='.$view -> id.'">'.A_WRITE_PM.'</a></li>');
}
$chance = ceil(100*( ($player -> agility + $player -> inteli)/($em_agility + $em_inteli)));
$chance = min(max($chance,10),90);
	
$smarty -> assign('Tfreezed', ($objFreeze -> fields['freeze']) ? T_FREEZED.'<br />' : '');

if ($player -> clas == 'Złodziej' && $player -> crime > 0 && $player -> location == $view -> location && $player -> id != $view -> id)
{
    $smarty -> assign('Crime', (!$objFreeze -> fields['freeze']) ? '<li><a href=view.php?view='.$view -> id.'&amp;steal='.$view -> id.'>'.A_STEAL.'</a></li>' : '');
}

$blnCrime = false;
if ($player -> clas == 'Złodziej' && $player -> id != $view -> id)
{
    $objAstralcrime = $db -> Execute("SELECT `astralcrime` FROM `players` WHERE `id`=".$player -> id);
    if (!$objFreeze -> fields['freeze'] && $objAstralcrime -> fields['astralcrime'] == 'Y')
    {
        $smarty -> assign('Crime2', '<li><a href="view.php?view='.$view -> id.'&amp;steal_astral='.$view -> id.'">'.A_STEAL2.'</a></li>');
        $blnCrime = true;
    }
        else
    {
        $smarty -> assign('Crime2', '');
    }
    $objAstralcrime -> Close();
}
if ($player -> clas == 'Złodziej' && $player -> crime > 10 && $player -> location !='Lochy'  && $player -> id != $view -> id)
{
    $smarty -> assign('Crime3', (!$objFreeze -> fields['freeze']) ? '<li><a href=view.php?view='.$view -> id.'&amp;steal_bank='.$view -> id.'>Włamanie do skarbca</a></li>' : '');
}

    $objActivity = $db -> Execute('SELECT `lpv` FROM `players` WHERE `id`='.$view ->id);
    $smarty -> assign(array('PlayerIP' => PLAYER_IP,
                            'SearchIP' => SEARCH_IP,
                            'Timeinfo' => TIME_INFO,'IP' => $view -> ip,
                            'Time' => date ("d-m-Y H:i:s",$objActivity -> fields['lpv'])));

/**
* Pickpocket
*/
if (isset ($_GET['steal']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['steal']) || $player -> clas != 'Złodziej')
    {
        error(ERROR.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($_GET['steal'] != $_GET['view'])
    {
        error (NO_PLAYER2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> crime <= 0)
    {
        error (NO_CRIME.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> location != $view -> location)
    {
        error (BAD_LOCATION.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> hp <= 0)
    {
        error (IS_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error (YOU_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> immunited == 'Y')
    {
        error(YOU_IMMU.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> immunited == 'Y')
    {
        error(HE_IMMU.' (<a href="view.php?view='.$_GET['view'].'\">'.BACK.'</a>)');
    }
    if ($objFreeze -> fields['freeze'])
    {
        error(ACCOUNT_FREEZED.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> age < 4)
    {
        error(TOO_YOUNG.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    $roll = rand (1, $view -> level);
    /**
     * Add bonus from bless
     */
    $strBless = FALSE;
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$player -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $player -> inteli = $player -> inteli + $objBless -> fields['blessval'];
        $strBless = 'inteli';
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $player -> agility = $player -> agility + $objBless -> fields['blessval'];
        $strBless = 'agility';
    }
    $objBless -> Close();
    if ($strBless)
    {
        $db -> Execute('UPDATE `players` SET `bless`=\'\', `blessval`=0 WHERE `id`='.$player -> id);
    }
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$view -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $em_inteli +=$objBless -> fields['blessval'];
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $em_agility +=$objBless -> fields['blessval'];
    }
    $objBless -> Close();

    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    $arrRings = array(R_AGI, R_INT);
    $arrStat = array('agility', 'inteli');
    if ($arrEquip[9][0])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[9][2];
        }
    }
    if ($arrEquip[10][0])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[10][2];
        }
    }

    $chance = ceil(100*($player -> agility + $player -> inteli) /($em_agility + $em_inteli));
	  $chance = min(max($chance,10),90);
	  
    $roll = rand(1,100);
    $strDate = $db -> DBDate($newdate);
    if ($chance < $roll)
    {
        $cost = 1000 * $player -> level;
        $expgain = ceil($view -> level / 10);
        checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
        if ($player -> location != 'Lochy')
        {
            $db -> Execute('UPDATE `players` SET `miejsce`=\'Lochy\', `crime`=`crime`-1 WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `jail` (`prisoner`, `verdict`, `duration`, `cost`, `data`) VALUES('.$player -> id.',\''.VERDICT.'\',7,'.$cost.',\''.$data.'\')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$player -> id.',\''.YOU_IN_JAIL.$cost.'.\', '.$strDate.')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.YOU_CATCH2.'\', '.$strDate.')');
            error ('<br />'.YOU_JAILED.' (<b><a href="view.php?view='.$_GET['view'].'">'.BACK.'</a></b>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.WHEN_YOU.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.'.\', '.$strDate.')');
            $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player-> id);
            error ('<br />'.YOU_TRY_IN.' (<a href=\"view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
    if ($chance>$roll and $chance - $roll<=49)
    {
        $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player -> id);
        if ( $view -> credits > 0)
        {
            $lost = ceil($view -> credits / 10);
            $expgain = $view -> level;
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.NOT_CATCH.$lost.GOLD_COINS.'\', '.$strDate.')');
            error ('<br />'.WHEN_YOU2.$lost.WHEN_YOU21.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.EMPTY_BAG.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
    if ($chance>$roll and $chance - $roll>=50)
    {
        $db -> Execute('UPDATE `players` SET `crime`=`crime`-1 WHERE `id`='.$player -> id);
        if ( $view -> credits > 0)
        {
            $lost = ceil($view -> credits / 10);
            $expgain = ceil($view -> level * 10);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CRIME.$lost.YOU_CRIME2.'\', '.$strDate.')');
            error ('<br />'.SUCCESS.$lost.GOLD_COINS2.' Zyskujesz '.$expgain.' punktów doświadczenia. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.EMPTY_BAG3.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG4.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
    }
}

/**
 * Steal astral components
 */
if (isset($_GET['steal_astral']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['steal_astral']) || $player -> clas != 'Złodziej' || $player -> location == 'Lochy')
    {
        error (ERROR.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($_GET['steal_astral'] != $_GET['view'])
    {
        error (NO_PLAYER2.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if (!$blnCrime)
    {
        error (NO_CRIME.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error (YOU_DEAD.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }

    require_once('includes/astralsteal.php');
    astralsteal($_GET['view'], 'V');
}
if (isset($_GET['steal_bank']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['steal_bank']) || $player -> clas != 'Złodziej' || $player -> location == 'Lochy')
    {
        error ('Zapomnij o tym! (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($_GET['steal_bank'] != $_GET['view'])
    {
        error ('Zdecyduj się, kogo chcesz okradać. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> crime <10)
    {
        error ('Nie masz wymaganej ilości punktów kradzieży. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> hp <= 0)
    {
        error ('Jesteś martwy. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($player -> location == 'Lochy')
    {
    	  error('Nie możesz okradać skarbca, gdyż znajdujesz się w lochach. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
     if ($player -> immunited == 'Y')
    {
        error(YOU_IMMU.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> immunited == 'Y')
    {
        error(HE_IMMU.' (<a href="view.php?view='.$_GET['view'].'\">'.BACK.'</a>)');
    }
    if ($objFreeze -> fields['freeze'])
    {
        error(ACCOUNT_FREEZED.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> tribe > 0 && $view -> tribe == $player -> tribe)
    {
        error(SAME_CLAN.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
    if ($view -> age < 4)
    {
        error(TOO_YOUNG.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
    }
	 if ($player -> energy < 10)
	 {
	 	   error('Nie masz tyle energii.');
	 }
	    /**
     * Add bonus from bless
     */
    $strBless = FALSE;
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$player -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $player -> inteli = $player -> inteli + $objBless -> fields['blessval'];
        $strBless = 'inteli';
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $player -> agility = $player -> agility + $objBless -> fields['blessval'];
        $strBless = 'agility';
    }
    $objBless -> Close();
    if ($strBless)
    {
        $db -> Execute('UPDATE `players` SET `bless`=\'\', `blessval`=0 WHERE `id`='.$player -> id);
    }
    $objBless = $db -> Execute('SELECT `bless`, `blessval` FROM `players` WHERE `id`='.$view -> id);
    if ($objBless -> fields['bless'] == 'inteli')
    {
        $em_inteli += $objBless -> fields['blessval'];
    }
    if ($objBless -> fields['bless'] == 'agility')
    {
        $em_agility += $objBless -> fields['blessval'];
    }
    $objBless -> Close();

    /**
     * Add bonus from rings
     */
    $arrEquip = $player -> equipment();
    $arrRings = array(R_AGI, R_INT);
    $arrStat = array('agility', 'inteli');
    if ($arrEquip[9][0])
    {
        $arrRingtype = explode(" ", $arrEquip[9][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[9][2];
        }
    }
    if ($arrEquip[10][0])
    {
        $arrRingtype = explode(" ", $arrEquip[10][1]);
        $intAmount = count($arrRingtype) - 1;
        $intKey = array_search($arrRingtype[$intAmount], $arrRings);
        if ($intKey != NULL)
        {
            $strStat = $arrStat[$intKey];
            $player -> $strStat = $player -> $strStat + $arrEquip[10][2];
        }
    }
    
    $safe=$db->GetOne('Select level from astral_bank where owner='.$_GET['view']);
    if (!$safe)
    {
    	$safe=0;
    }
    $chance = 100*($player -> agility + $player -> szyb + $player -> inteli) /($em_agility + $em_inteli + $safe *100);
    $chance = ceil($chance);
    $chance = min(max($chance,10),90);
    $roll = rand(1,100);
    $strDate = $db -> DBDate($newdate);
    
    if ($roll < $chance)
    {
    	$db -> Execute('Update players set crime=crime-10, energy=energy-10 where id='.$player->id);
    	if ( $view -> bank > 0)
        {
            $lost = ceil($view -> bank / 10);
            $expgain = ceil($view -> level * 100);
            $db -> Execute('UPDATE `players` SET `bank`=`bank`-'.$lost.' WHERE `id`='.$view -> id);
            $db -> Execute('UPDATE `players` SET `credits`=`credits`+'.$lost.' WHERE `id`='.$player -> id);
            checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CRIME.$lost.YOU_CRIME2.'\', '.$strDate.')');
            error ('<br />'.SUCCESS.$lost.GOLD_COINS2.' Zyskujesz '.$expgain.' punktów doświadczenia. (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
            else
        {
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.EMPTY_BAG3.'\', '.$strDate.')');
            error ('<br />'.EMPTY_BAG4.' (<a href="view.php?view='.$_GET['view'].'">'.BACK.'</a>)');
        }
      }
      else {
      	$cost = 10000 * $player -> level;
        $expgain = ceil($view -> level);
        checkexp($player -> exp,$expgain,$player -> level,$player -> race,$player -> user,$player -> id,0,0,$player -> id,'',0);
        
      	$db -> Execute('UPDATE `players` SET `miejsce`=\'Lochy\', `crime`=`crime`-1 WHERE `id`='.$player -> id);
            $db -> Execute('INSERT INTO `jail` (`prisoner`, `verdict`, `duration`, `cost`, `data`) VALUES('.$player -> id.',\''.VERDICT.'\',72,'.$cost.',\''.$data.'\')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$player -> id.',\''.YOU_IN_JAIL.$cost.'.\', '.$strDate.')');
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$view -> id.',\''.YOU_CATCH.'<b><a href="view.php?view='.$player -> id.'">'.$player -> user.L_ID.$player -> id.YOU_CATCH2.'\', '.$strDate.')');
            error ('<br />'.YOU_JAILED.' (<b><a href="view.php?view='.$_GET['view'].'">'.BACK.'</a></b>)');
      	}   	
} 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
/**
* WAMPIRYZM
*/

if (isset ($_GET['wampir']))
{
    if ($player -> crime <= 0)
    {
        error ("Nie masz już punktów wampiryzmu");
    }
  
 
    
$test = $db -> Execute("SELECT wampiryzm FROM players WHERE `id`=".$player -> id);
$wampiryzm = $test -> fields['wampiryzm'];
$smarty -> assign(array("wampiryzm" => $wampiryzm));

$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$lywel = $test -> fields['lywel'];
$smarty -> assign(array("lywel" => $lywel));


$wampiryyzm = (0.02);
$smarty -> assign ("Wampiryyzm", $wampiryyzm);



$kasaa = ($wampiryzm * $player -> level * 20);
$smarty -> assign ("Kasaa", $kasaa);

$eexp = (($wampiryzm * $player -> level) * 2 + 200);
$smarty -> assign ("Eexp", $eexp);
  
$ssanie = ($wampiryzm * 5);
$smarty -> assign ("Ssanie", $ssanie);

$ssaniee = ($wampiryzm * 3);
$smarty -> assign ("Ssaniee", $ssaniee);

            
            $db -> Execute('UPDATE players SET pktwampira=pktwampira-1 WHERE id='.$player-> id);
            
            $db -> Execute('UPDATE players SET exp=exp+'.$eexp.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET credits=credits+'.$kasaa.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET hp=hp-'.$ssanie.' WHERE id='.$view -> id);
            $db -> Execute('UPDATE players SET hp=hp+'.$ssaniee.' WHERE id='.$player-> id);
            $db -> Execute('UPDATE players SET wampiryzm=wampiryzm+'.$wampiryyzm.' WHERE id='.$player-> id);
            
            
            error ("Udało Ci się napaść na ofiarę. Upuściłeś mu $ssanie krwi. Zyskałeś dzięki temu: $wampiryyzm wampiryzmu, $eexp pkt. doświadczenia, $kasaa sztuk złota. ");
        }
    
   


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
if ($objFreeze -> fields['freeze'])
{
    $objFreeze -> Close();
}

/**
 * Display page
 */
$smarty -> display ('view.tpl');
require_once('includes/foot.php');
?>

<?php
/**
 *   File functions:
 *   Messages to other players
 *
 *   @name                 : mail.php
 *   @copyright            : (C) 2004,2005,2006,2007 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : eyescream <tduda@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 25.04.2007
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

$title = 'Wiadomości';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/mail.php');

if (!isset($_GET['view']) && !isset($_GET['read']) && !isset($_GET['zapisz']) && !isset($_GET['kasuj']))
{
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `owner`='.$player -> id.' AND `unread`=\'F\' AND `zapis`=\'N\' AND `send`=0 ORDER BY `id` DESC');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $arrRead = array();
    $i = 0;
    while (!$mail -> EOF)
    {
        
		$arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $arrRead[$i] = ($mail -> fields['unread'] == 'F') ? 'Y' : 'N';
        
		
		$mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    require_once('includes/bbcode.php');
    $arrsubject = censorship($arrsubject);
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
}

/**
 * Mail inbox
 */
if (isset ($_GET['view']) && $_GET['view'] == 'inbox')
{
 
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `send`=0 ORDER BY `date` DESC LIMIT 0,30');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $arrRead = array();
    $i = 0;
    while (!$mail -> EOF)
    {
		
        $arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $arrRead[$i] = ($mail -> fields['unread'] == 'F') ? 'Y' : 'N';
		
        $mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    require_once('includes/bbcode.php');
    $arrsubject = censorship($arrsubject);
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
    $smarty -> assign_by_ref ('Mread', $arrRead);
    if (isset ($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `send`=0');
        error (MAIL_DEL.'. (<a href="mail.php?view=inbox">'.A_REFRESH.'</a>)');
    }
}

if (isset ($_GET['view']) && $_GET['view'] == 'zapis')
{
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'Y\' ORDER BY `id` DESC');
    $arrsender = array();
    $arrsenderid = array();
    $arrsubject = array();
    $arrid = array();
    $i = 0;
    while (!$mail -> EOF)
    {
        $arrsender[$i] = $mail -> fields['sender'];
        $arrsenderid[$i] = $mail -> fields['senderid'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    $smarty -> assign_by_ref ('Sender', $arrsender);
    $smarty -> assign_by_ref ('Senderid', $arrsenderid);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
    if (isset ($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND zapis=\'Y\'');
        error (MAIL_DEL.'. (<a href=mail.php?view=zapis>'.A_REFRESH.'</a>)');
    }
}

if (isset ($_GET['view']) && $_GET['view'] == 'send')
{
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE `send`!=0 AND `owner`='.$player -> id.' AND `zapis`=\'N\' ORDER BY `id` DESC');
    $arrsend = array();
    $arrsubject = array();
    $arrid = array();
    $i = 0;
    while (!$mail -> EOF)
    {
        $arrsend[$i] = $mail -> fields['send'];
        $arrsubject[$i] = $mail -> fields['subject'];
        $arrid[$i] = $mail -> fields['id'];
        $mail -> MoveNext();
        $i++;
    }
    $mail -> Close();
    $smarty -> assign_by_ref ('Send1', $arrsend);
    $smarty -> assign_by_ref ('Subject', $arrsubject);
    $smarty -> assign_by_ref ('Mailid', $arrid);
    if (isset ($_GET['step']) && $_GET['step'] == 'clear')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `send`!=0 AND `owner`='.$player -> id);
        error (MAIL_DEL.'. (<a href="mail.php?view=send">'.A_REFRESH.'</a>)');
    }
}

/**
* Write new message
*/
if (isset ($_GET['view']) && $_GET['view'] == 'write')
{
    $objBan = $db -> Execute('SELECT `id` FROM `ban_mail` WHERE `owner`=0 AND `id`='.$player -> id);
    if ($objBan -> fields['id'])
    {
        error(YOU_CANNOT);
    }
    $objBan -> Close();
    if (!isset ($_GET['to']))
    {
        $_GET['to'] = '';
    }
    if (!isset ($_GET['re']))
    {
        $_GET['re'] = '';
    }
    $body = '';
    if (!empty ($_GET['id']))
    {
        if (!ereg("^[1-9][0-9]*$", $_GET['id']))
        {
            error (ERROR);
        }
        $mail = $db -> Execute('SELECT `body`, `owner`, `sender` FROM `mail` WHERE `id`='.$_GET['id']);
        if ($mail -> fields['owner'] != $player -> id)
        {
            error(NOT_YOUR);
        }
        require_once('includes/bbcode.php');
        $postbody = htmltobbcode($mail -> fields['body']);
        $body = PLAYER.' '.$mail -> fields['sender'].' '.WROTE.' [quote]'.$postbody.'[/quote]';
        $mail -> Close();
    }
    $smarty -> assign_by_ref ('To', $_GET['to']);
    $smarty -> assign_by_ref ('Reply', $_GET['re']);
    $smarty -> assign_by_ref ('Body', $body);
    if (isset ($_GET['step']) && $_GET['step'] == 'send')
    {
        if (empty ($_POST['to']) || empty ($_POST['body']))
        {
            error (EMPTY_FIELDS);
        }
        if (empty ($_POST['subject']))
        {
            $_POST['subject'] = 'Brak';
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['to']))
        {
            error (ERROR.'1');
        }
        $rec = $db -> Execute('SELECT `id`, `user` FROM `players` WHERE `id`='.$_POST['to']);
        if (!$rec -> fields['id'])
        {
            error (NO_PLAYER);
        }
        if ($_POST['to'] == $player -> id)
        {
            error(YOURSELF);
        }
        if( $player -> rank != 'Admin' && $player -> rank != 'Staff')
        {
            $objBan = $db -> Execute('SELECT `id` FROM `ban_mail` WHERE `owner`='.$_POST['to'].' AND `id`='.$player -> id);
            if ($objBan -> fields['id'])
            {
                error(YOU_CANNOT);
            }
            $objBan -> Close();
        }
        $_POST['subject'] = strip_tags($_POST['subject']);
        require_once('includes/bbcode.php');
        $_POST['body'] = bbcodetohtml($_POST['body']);
        $strBody = $db -> qstr($_POST['body'], get_magic_quotes_gpc());
        $strSubject = $db -> qstr($_POST['subject'], get_magic_quotes_gpc());
        $strDate = $db -> DBDate($newdate);
        $db -> Execute('INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES(\''.$player -> user.'\','.$player -> id.','.$_POST['to'].', '.$strSubject.' , '.$strBody.', '.$strDate.')');
        $db -> Execute('INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`,  `send`, `date`) VALUES(\''.$player -> user.'\','.$player -> id.','.$player -> id.', '.$strSubject.', '.$strBody.','.$_POST['to'].', '.$strDate.')');
        error (YOU_SEND.$rec -> fields['user'].'.');
    }
}

if (isset ($_GET['read']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['read']))
    {
        error (ERROR);
    }
    $mail = $db -> Execute('SELECT * FROM `mail` WHERE id='.$_GET['read']);
	$senderid2= $mail -> fields['senderid'];
	$send2=$mail -> fields['send'];
	$subject=$mail ->fields['subject'];
	$playa=$player->id;
    if (!$mail -> fields['id'])
    {
        error (NO_MAIL);
    }
    if ($mail -> fields['owner'] != $player -> id)
    {
        error (NOT_YOUR);
    }
	$mail -> Close();
	$mail2=$db -> Execute('SELECT * FROM mail WHERE owner='.$playa.' and subject=\''.$subject.'\' and ((senderid ='.$senderid2.' and send=0) or (senderid='.$playa.' and send='.$senderid2.')) ORDER BY date') or die('something');
    
	$arrBody= array();
	$arrDate= array();
	$arrSender=array();
	$arrSenderid=array();
	$arrId=array(0);
	$i=0;
	while (!$mail2 -> EOF)
	{
		$arrBody[$i]=$mail2 -> fields['body'];
		$arrDate[$i]=$mail2 -> fields['date'];
		$arrSender[$i]=$mail2 -> fields['sender'];
		$arrSenderid[$i]=$mail2 -> fields['senderid'];
		$arrId[$i]=$mail2 -> fields['id'];
		$arrSend[$i]=$mail2 -> fields['send'];
		$mail2 ->MoveNext();
		$i++;
	}
	//print($senderid);
	//print($subject);
	//print($arrBody);
	$addreprefix = false;
    if (strpos ($mail->fields['subject'], REPLY_PREFIX) !== false)
    {
        $addreprefix = false;
    }

    if (isset ($_GET['option']) && $_GET['option'] == 'c')
    {
        require_once('includes/bbcode.php');
        $mail -> fields['body'] = censorship($mail -> fields['body']);
    }
    $db -> Execute('UPDATE `mail` SET `unread`=\'T\' WHERE id='.$mail -> fields['id']);
    $arrList=$arrSenderid;
	$arrList=(array_keys(array_count_values($arrList)));
	//print_r($arrList);
	if ($arrList[0] == $player->id)
	{
		$To= $arrList[1];
	}
	else
	{
		$To = $arrList[0];
	}
	//print_r($arrSenderid);
	/*
	$strDay = ($mail -> fields['date']) ? T_DAY.$mail -> fields['date'] : '';
    $smarty -> assign_by_ref ('Sender', $mail -> fields['sender']);
    $smarty -> assign_by_ref ('Body', $mail -> fields['body']);
    $smarty -> assign_by_ref ('Mailid', $mail -> fields['id']);
    $smarty -> assign_by_ref ('Senderid', $mail -> fields['senderid']);
    
    $smarty -> assign_by_ref ('AddReplyPrefix', $addreprefix);
    $smarty -> assign_by_ref ('Tday', $strDay);
	*/
	$smarty -> assign_by_ref ('Body', $arrBody);
	$smarty -> assign_by_ref ('Sender', $arrSender);
	$smarty -> assign_by_ref ('Senderid', $arrSenderid);
	$smarty -> assign_by_ref ('Mailid', $arrId);
	$smarty -> assign_by_ref ('Date', $arrDate);
	$smarty -> assign_by_ref ('Subject', $mail -> fields['subject']);
	$smarty -> assign_by_ref ('To', $To);
	//$mail2 ->Close();
    
}

if (isset ($_GET['zapisz']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['zapisz']))
    {
        error (ERROR);
    }
    $mail = $db -> Execute('SELECT `id`, `owner` FROM `mail` WHERE `id`='.$_GET['zapisz']);
    if (!$mail -> fields['id'])
    {
        error (NO_MAIL);
    }
    if ($mail -> fields['owner'] != $player -> id)
    {
        error (NOT_YOUR);
    }
    $db -> Execute('UPDATE `mail` SET `zapis`=\'Y\' WHERE id='.$_GET['zapisz']);
    error (MAIL_SAVE.'. (<a href="mail.php">'.A_REFRESH.'</a>)');
}

if (isset ($_GET['kasuj']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['kasuj']))
    {
        error (ERROR);
    }
    $mail = $db -> Execute('SELECT `id`, `owner` FROM `mail` WHERE `id`='.$_GET['kasuj']);
    if (!$mail -> fields['id'])
    {
        error (NO_MAIL);
    }
    if ($mail -> fields['owner'] != $player -> id)
    {
        error (NOT_YOUR);
    }
    $db -> Execute('DELETE FROM `mail` WHERE `id`='.$_GET['kasuj']);
    error (MAIL_DEL.'. (<a href="mail.php">'.A_REFRESH.'</a>)');
}

/**
* Send mail to admin or staff
*/
if (isset ($_GET['send']))
{
    $sid = $db -> Execute('SELECT `id`, `user` FROM `players` WHERE `rank`=\'Admin\' OR `rank`=\'Staff\'');
    $arrid = array();
    $arrname = array();
    $i = 0;
    while (!$sid -> EOF)
    {
        $arrid[$i] = $sid -> fields['id'];
        $arrname[$i] = $sid -> fields['user'];
        $sid -> MoveNext();
        $i++;
    }
    $sid -> Close();
    $smarty -> assign_by_ref ('Send', $_GET['send']);
    $smarty -> assign_by_ref ('Staffid', $arrid);
    $smarty -> assign_by_ref ('Name', $arrname);
    if (isset ($_GET['step']) && $_GET['step'] == 'send')
    {
        if (!ereg("^[1-9][0-9]*$", $_POST['staff']))
        {
            error (ERROR);
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['mid']))
        {
            error (ERROR);
        }
        $arrtest = $db -> Execute('SELECT `id`, `user`, `rank` FROM `players` WHERE `id`='.$_POST['staff']);
        if (!$arrtest -> fields['id'])
        {
            error (NO_PLAYER);
        }
        if ($arrtest -> fields['rank'] != 'Admin' && $arrtest -> fields['rank'] != 'Staff')
        {
            error (NOT_STAFF);
        }
        $arrmessage = $db -> Execute('SELECT * FROM `mail` WHERE `id`='.$_POST['mid']);
        if (!$arrmessage -> fields['id'])
        {
            error (NOT_MAIL);
        }
        if ($arrmessage -> fields['owner'] != $player -> id)
        {
            error (NOT_YOUR);
        }
        $strDate = $db -> DBDate($newdate);
        $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$arrtest -> fields['id'].',\''.L_PLAYER.'<a href="view.php?view='.$player -> id.'">'.$player -> user.'</a>'.L_ID.$player -> id.SEND_YOU.$arrmessage -> fields['sender'].L_ID.$arrmessage -> fields['senderid'].'.\', '.$strDate.')');
        if (($arrtest -> fields['rank'] == 'Admin' || $arrtest -> fields['rank'] == 'Staff') && ($player -> rank == 'Admin' || $player -> rank == 'Staff'))
        {   // Staff to staff - change only address.
            $db -> Execute('INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES(\''.$arrmessage -> fields['sender'].'\','.$arrmessage -> fields['senderid'].','.$arrtest -> fields['id'].',\''.'PRZEKAZ:'.$arrmessage -> fields['subject'].'\',\''.$arrmessage -> fields['body'].'\', '.$strDate.')');
        }
            else
        {   // Normal player to staff - write detailed, helpful info.
            $db -> Execute('INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES(\''.$player -> user.'\',\''.$player -> id.'\','.$arrtest -> fields['id'].',\''.M_TITTLE.$arrmessage -> fields['sender'].L_ID.$arrmessage -> fields['senderid'].'\',\''.'PRZEKAZ:'.M_TITLE2.$arrmessage -> fields['subject'].M_DATE.$arrmessage -> fields['date'].M_BODY.$arrmessage -> fields['body'].'\', '.$strDate.')');
        }
        error (YOU_SEND.$arrtest -> fields['user'].'. <a href="mail.php">'.A_REFRESH.'</a>');
    }
}

/**
* Delete, save, mark as read/unread selected messages
*/
if (isset($_GET['step']) && $_GET['step'] == 'mail')
{
    if (!isset($_GET['box']))
    {
        error(ERROR);
    }
    $arrType = array('I', 'W', 'S');
    if (!in_array($_GET['box'], $arrType))
    {
        error(ERROR);
    }
    if ($_GET['box'] == 'I')
    {
        $objMid = $db -> Execute('SELECT `id` FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `send`=0');
    }
    if ($_GET['box'] == 'W')
    {
        $objMid = $db -> Execute('SELECT `id` FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'Y\'');
    }
    if ($_GET['box'] == 'S')
    {
        $objMid = $db -> Execute('SELECT `id` FROM `mail` WHERE `send`!=0 AND `owner`='.$player -> id);
    }
    $arrId = array();
    $i = 0;
    while (!$objMid -> EOF)
    {
        $arrId[$i] = $objMid -> fields['id'];
        $i = $i + 1;
        $objMid -> MoveNext();
    }
    $objMid -> Close();
    foreach ($arrId as $bid)
    {
        if (isset($_POST['delete']))
        {
            if (isset($_POST[$bid]))
            {
                $db -> Execute('DELETE FROM `mail` WHERE `id`='.$bid);
                
            }
        }
        if (isset($_POST['write']))
        {
            if (isset($_POST[$bid]))
            {
                $db -> Execute('UPDATE `mail` SET `zapis`=\'Y\' WHERE `id`='.$bid);
            }
        }
        if (isset($_POST['read2']))
        {
            if (isset($_POST[$bid]))
            {
                $db -> Execute('UPDATE `mail` SET `unread`=\'T\' WHERE `id`='.$bid);
            }
        }
        if (isset($_POST['unread']))
        {
            if (isset($_POST[$bid]))
            {
                $db -> Execute('UPDATE `mail` SET `unread`=\'F\' WHERE `id`='.$bid);
            }
        }
    }
    if (isset($_POST['delete']))
    {
        error('Wykasowano '.mysql_affected_rows().' wiadomosci');
    }
    if (isset($_POST['write']))
    {
        error(SAVED);
    }
    if (isset($_POST['read2']))
    {
        error(MARK_AS_READ);
    }
    if (isset($_POST['unread']))
    {
        error(MARK_AS_UNREAD);
    }
}

/**
 * Delete old messages
 */
if (isset($_GET['step']) && $_GET['step'] == 'deleteold')
{
    $arrType = array('I', 'W', 'S');
    $arrAmount = array(7, 14, 30);
    if (!in_array($_GET['box'], $arrType) || !in_array($_POST['oldtime'], $arrAmount))
    {
        error(ERROR);
    }
    $arrDate = explode("-", $data);
    $arrDate[0] = date("Y");
    $arrDate[2] = $arrDate[2] - $_POST['oldtime'];
    if ($arrDate[2] < 1)
    {
        $arrDays = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $arrDate[1] = $arrDate[1] - 1;
        if ($arrDate[1] == 0)
        {
            $arrDate[1] = 12;
        }
        $intKey = $arrDate[1] - 1;
        $arrDate[2] = $arrDays[$intKey] + $arrDate[2];
    }
    $strDate = implode("-", $arrDate);
    $strDate = $db -> DBDate($strDate);
    if ($_GET['box'] == 'I')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'N\' AND `send`=0 AND `date`<'.$strDate);
    }
    if ($_GET['box'] == 'W')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `owner`='.$player -> id.' AND `zapis`=\'Y\' AND `date`<'.$strDate);
    }
    if ($_GET['box'] == 'S')
    {
        $db -> Execute('DELETE FROM `mail` WHERE `send`!=0 AND `owner`='.$player -> id.' AND `date`<'.$strDate);
    }
    error(DELETED2);
}

/**
 * Ban/unban players on mail
 */
if (isset($_GET['block']))
{
    if (!ereg("^[1-9][0-9]*$", $_GET['block']))
    {
        error(ERROR);
    }
    $objPlayer = $db -> Execute('SELECT `id` FROM `players` WHERE `id`='.$_GET['block']);
    if (!$objPlayer -> fields['id'])
    {
        error(NO_PLAYER);
    }
    $objPlayer -> Close();
    $objBan = $db -> Execute('SELECT `id` FROM `ban_mail` WHERE `id`='.$_GET['block'].' AND `owner`='.$player -> id);
    if ($objBan -> fields['id'])
    {
        $db -> Execute('DELETE FROM `ban_mail` WHERE `id`='.$_GET['block'].' AND `owner`='.$player -> id);
        error(YOU_UNBLOCK);
    }
        else
    {
        $db -> Execute('INSERT INTO `ban_mail` (`id`, `owner`) VALUES('.$_GET['block'].', '.$player -> id.')');
        error(YOU_BLOCK);
    }
    $objBan -> Close();
}

/**
 * Blocked list
 */
if (isset($_GET['view']) && $_GET['view'] == 'blocks')
{
    $objBlocked = $db -> Execute('SELECT `id` FROM `ban_mail` WHERE `owner`='.$player -> id);
    $arrId = array(0);
    $arrName = array();
    $i = 0;
    while (!$objBlocked -> EOF)
    {
        $arrId[$i] = $objBlocked -> fields['id'];
        $objName = $db -> Execute('SELECT `user` FROM `players` WHERE `id`='.$objBlocked -> fields['id']);
        $arrName[$i] = $objName -> fields['user'];
        $objBlocked -> MoveNext();
        $i ++;
    }
    $objBlocked -> Close();
    $smarty -> assign_by_ref('Blockid', $arrId);
    $smarty -> assign_by_ref('Blockname', $arrName);
    if (isset($_GET['step']) && $_GET['step'] == 'unblock')
    {
        foreach ($arrId as $bid)
        {
            if (isset($_POST[$bid]))
            {
                $db -> Execute('DELETE FROM `ban_mail` WHERE `id`='.$bid.' AND `owner`='.$player -> id);
            }
        }
        error(YOU_UNBAN);
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
}
if (!isset($_GET['read']))
{
    $_GET['read'] = '';
}
if (!isset($_GET['zapisz']))
{
    $_GET['zapisz'] = '';
}
if (!isset($_GET['kasuj']))
{
    $_GET['kasuj'] = '';
}
if (!isset($_GET['send']))
{
    $_GET['send'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}
if (!isset($_GET['block']))
{
    $_GET['block'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Read' => $_GET['read'],
                        'Write' => $_GET['zapisz'],
                        'Delete' => $_GET['kasuj'],
                        'Send'  => $_GET['send'],
                        'Block' => $_GET['block'],
                        'Step' => $_GET['step']));
$smarty -> display ('mail.tpl');

require_once('includes/foot.php');
?>

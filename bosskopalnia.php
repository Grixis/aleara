<?php

$title = "Szyb Rotogona";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
require_once("includes/turnfight6.php");
require_once('class/monster_class.php');
require_once('class/fight_class.php');
require_once("languages/".$player -> lang."/rotogon.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT bosszabity FROM players WHERE id=".$player -> id);
$bosszabity = $test -> fields['bosszabity'];
$smarty -> assign(array("bosszabity" => $bosszabity));
if ($player -> location != 'Las') 
{
error ("Nie znajdujesz się w Opuszczonej Kopalni!");
}
if ($bosszabity > 0) 
{
error ("Zabiłeś już Rotogona. <a href=kopalniao.php>Możesz iść dalej</a>!");
}
$smarty -> assign("Win", '');
if ($player -> hp <= 0 && !isset($_GET['action1'])) 
{
error (YOU_DEAD);
}

if (!isset ($_GET['action1'])) 
{    
$smarty -> assign(array("Portaltext" => PORTAL_TEXT,
							"Afight2" => A_FIGHT2,
							"Aretreat" => A_RETREAT));
}
if (isset ($_GET['action1']) && $_GET['action1'] == 'retreat' && $player -> hp > 0) 
{
    
    
    $smarty -> assign(array("Portaltext" => PORTAL_TEXT,
							"Ahere" => A_HERE));
}

if (isset ($_GET['action1']) && $_GET['action1'] == 'fight' && $player -> hp > 0) 
{
    global $arrehp;
    if (!isset ($_GET['step'])) 
    {
        $smarty -> assign ("Message", START_FIGHT);
        
        $smarty -> display ('error1.tpl');
        
$test = $db -> Execute("SELECT level FROM players WHERE id=".$player -> id);
$level = $test -> fields['level'];
$smarty -> assign(array("level" => $level));
        
$eeexp = ($player -> level * 500);
        $zloootooo = ($player -> level * 0);
	if (!isset($_SESSION['amount'])) {
		$_SESSION['amount'] = 1;
		$_SESSION['mon0']['id'] = 100000000000;
		$_SESSION['mon0']['user'] = MONSTER_NAME;
		$_SESSION['mon0']['level'] = 500;
		$_SESSION['mon0']['credits'] = $zloootooo;
		$_SESSION['mon0']['exp'] = $eeexp;
		$_SESSION['mon0']['actionpoints'] = 10;
		$_SESSION['mon0']['defence'] = 1100;
		$_SESSION['mon0']['hp'] = 2500;
		$_SESSION['mon0']['damage'] = 1200;
		$_SESSION['mon0']['hitmodificator'] = 100;
		$_SESSION['mon0']['missmodificator'] = 100;
		$_SESSION['mon0']['attackspeed'] = 500;
		$monster = new Monster(999,1,0);
		$attacker = new Fighter($player -> id);
		for ($k = 0; $k < $_SESSION['amount']; $k++) {
			$strIndex = 'mon'.$k;
			$_SESSION[$strIndex]['id'] = $monster -> id;
			$_SESSION[$strIndex]['hp'] = $monster -> hp;
			if ($attacker -> speed > $monster -> attackspeed) {
				$_SESSION[$strIndex]['ap'] = 1;
				}
			else {
				$_SESSION[$strIndex]['ap'] = floor($monster -> attackspeed / $attacker -> speed);
				if ($_SESSION[$strIndex]['ap'] > 5) {
					$_SESSION[$strIndex]['ap'] = 5;
					}
				}
			$tmpActionArr[$k][0] = $monster -> attackspeed;
			$tmpActionArr[$k][1] = $k;
			}
		$tmpActionArr[$k][0] = $attacker -> speed;
		$tmpActionArr[$k][1] = -1;

		/**
		* function to compare elements of actionArr
		*/
		function aacmp($a,$b) {
			if ($a[0] == $b[0]) return 0;
			return ($a[0] > $b[0]) ? -1 : 1;
			}

		usort($tmpActionArr,"aacmp");
		for ($k = 0; $k <= $_SESSION['amount']; $k++) {
			$actionArr[$k] = $tmpActionArr[$k][1];
			}
		$_SESSION['actionArr'] = $actionArr;
		$_SESSION['exhaust']=0;
		if ($attacker -> speed > $monster -> attackspeed) {
			$_SESSION['points'] = floor($attacker -> speed / $monster -> attackspeed);
			if ($_SESSION['points'] > 5) {
				$_SESSION['points'] = 5;
				}
			}
		else {
			$_SESSION['points'] = 1;
			}
		$_SESSION['round']=0;
		}



        if ($player -> hp <= 0) 
        {
            error (NO_HP);
        }
        if ($player -> energy <= 0) 
        {
            error (NO_ENERGY);
        }
        
        $arrehp = array ();
        turnfight ('bosskopalnia.php?action1=fight');
        $myhp = $db -> Execute("SELECT hp, fight FROM players WHERE id=".$player -> id);
        $item = $db -> Execute("SELECT value FROM settings WHERE setting='item'");
        if ($myhp -> fields['hp'] <= 0) 
        {
            
            error (LOST_FIGHT2);
        } 
            elseif (!$item -> fields['value'] && $myhp -> fields['hp'] > 0 && $_SESSION['result'] == 'win') 
        {
           
            $smarty -> assign(array("Win" => 1,
                                    "Portaltext" => PORTAL_TEXT,
                                    "Sword" => SWORD,
                                    "Armor" => ARMOR,
                                    "Istaff" => I_STAFF,
                                    "Cape" => CAPE));
        }
        $myhp -> Close();
        $item -> Close();
		if (isset($_SESSION['result'])) unset($_SESSION['result']);
	}
    if (isset ($_GET['step'])) 
    {
        if ($_GET['step'] != 'sword' && $_GET['step'] != 'armor' && $_GET['step'] != 'staff' && $_GET['step'] != 'cape') 
        {
            error (ERROR);
        }
        
        if ($player -> level > 0)
        {
            error(ITEM_TAKE);
        }
        
        if ($_GET['step'] == 'sword') 
        {
            $smarty -> assign ("Item", SWORD);
            $db -> Execute("INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'".SWORD."',500,'W',1,0,5000,1,5000,1,'Y',0,100,'Y')");
            $db -> Execute("UPDATE settings SET value='sword' WHERE setting='item'");
        }
   
        
        
        $smarty -> assign(array("Steptext" => STEP_TEXT,
                                "Tgo" => T_GO,
                                "Ahere" => A_HERE));
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['action1']))
{
    $_GET['action1'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Action" => $_GET['action1'], 
                        "Step" => $_GET['step']));
$smarty -> display('bosskopalnia.tpl');

require_once("includes/foot.php");
?>

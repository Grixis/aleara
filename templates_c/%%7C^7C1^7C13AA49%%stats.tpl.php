<?php /* Smarty version 2.6.16, created on 2013-02-10 17:22:16
         compiled from stats.tpl */ ?>
<?php echo '';  echo $this->_tpl_vars['Statsinfo'];  echo '<br /><br />';  echo $this->_tpl_vars['Avatar'];  echo '<br />';  if ($this->_tpl_vars['Action'] == 'gender'):  echo '<form method="post" action="stats.php?action=gender&amp;step=gender"><select name="gender"><option value="M">';  echo $this->_tpl_vars['Genderm'];  echo '</option><option value="F">';  echo $this->_tpl_vars['Genderf'];  echo '</option></select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aselect'];  echo '" /></form>';  endif;  echo '<table><tr><td width="50%" valign="top"><fieldset style="height:420px"><legend><b>';  echo $this->_tpl_vars['Tstats'];  echo '</b></legend><table width="100%"><tr><td width="50%"><b>';  echo $this->_tpl_vars['Tap'];  echo ':</b></td><td width="50%"> ';  echo $this->_tpl_vars['Ap'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Trace'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Race'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tclass'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Clas'];  echo '</td></tr><tr><td><b>Podklasa:</b></td><td> ';  echo $this->_tpl_vars['podklasa'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tdeity'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Deity'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tgender'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Gender'];  echo '</td></tr><tr><td><b>Siła:</b></td><td> ';  echo $this->_tpl_vars['strength'];  echo '  (';  echo $this->_tpl_vars['strength']+$this->_tpl_vars['sila']+$this->_tpl_vars['ringsily'];  echo ')</td></tr><tr><td><b>Zręczność:</b></td><td> ';  echo $this->_tpl_vars['agility'];  echo '  (';  echo $this->_tpl_vars['agility']+$this->_tpl_vars['zrecznosc']+$this->_tpl_vars['ringzreki']+$this->_tpl_vars['zrecha']*-1;  echo ')</td></tr><tr><td><b>Szybkość:</b></td><td> ';  echo $this->_tpl_vars['szyb'];  echo '  (';  echo $this->_tpl_vars['szyb']+$this->_tpl_vars['szybkoscc']+$this->_tpl_vars['szybkosc']+$this->_tpl_vars['ringszybk'];  echo ')</td></tr><tr><td><b>Wytrzymałość:</b></td><td> ';  echo $this->_tpl_vars['wytrz'];  echo ' (';  echo $this->_tpl_vars['wytrz']+$this->_tpl_vars['wytrzymalosc']+$this->_tpl_vars['tarcza']+$this->_tpl_vars['nagole']+$this->_tpl_vars['zbroja']+$this->_tpl_vars['szyszak']+$this->_tpl_vars['ringwytki'];  echo ')</td></tr><tr><td><b>Inteligencja:</b></td><td> ';  echo $this->_tpl_vars['inteli'];  echo ' (';  echo $this->_tpl_vars['inteli']+$this->_tpl_vars['inteligencja']+$this->_tpl_vars['ringinteli'];  echo ')</td></tr><tr><td><b>Siała Woli:</b></td><td> ';  echo $this->_tpl_vars['wisdom'];  echo ' (';  echo $this->_tpl_vars['wisdom']+$this->_tpl_vars['silawoli']+$this->_tpl_vars['ringsw'];  echo ')</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tmana'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Mana'];  echo ' ';  echo $this->_tpl_vars['Rest'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tpw'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['PW'];  echo '</td></tr><a href="card.php">Kreator Postaci<br><tr><td>';  echo $this->_tpl_vars['Crime'];  echo '</td></tr>';  if ($this->_tpl_vars['podklasa'] == 'Szpieg'):  echo '<tr><td><b>Punkty szpiegostwa:</b></td><td>  ';  echo $this->_tpl_vars['pktszpiega'];  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['podklasa'] == 'Krwiopijca'):  echo '<tr><td><b>Wampirze punkty:</b></td><td>  ';  echo $this->_tpl_vars['pktwampira'];  echo '</td></tr>';  endif;  echo '<tr><td><b>Transmutacja:</b></td><td>  ';  echo $this->_tpl_vars['transmutacja'];  echo '</td></tr><tr><td><b><a href="fightlogs.php">';  echo $this->_tpl_vars['Tfights'];  echo '</a>:</b></td><td> ';  echo $this->_tpl_vars['Total'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tlast'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Lastkilled'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tlast2'];  echo ':</b></td><td>  ';  echo $this->_tpl_vars['Lastkilledby'];  echo '</td></tr><tr><td><b>Punkty rankingowe:</b></td><td>  ';  echo $this->_tpl_vars['RankPoints'];  echo '</td></tr></table></fieldset></td><td width="50%" valign="top"><fieldset style="height:420px"><legend><b>';  echo $this->_tpl_vars['Tability'];  echo '</b></legend><table width="100%"><tr><td width="50%"><b>';  echo $this->_tpl_vars['Tsmith'];  echo ':</b></td><td width="50%"> ';  echo $this->_tpl_vars['Smith'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Talchemy'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Alchemy'];  echo '';  if ($this->_tpl_vars['alchemia'] > 0):  echo '(';  echo $this->_tpl_vars['Alchemy']+$this->_tpl_vars['alchemia'];  echo ')';  endif;  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tlumber'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Fletcher'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tjeweller'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Jeweller'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Thutnictwo'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Hutnictwo'];  echo '';  if ($this->_tpl_vars['hutnictwo'] > 0):  echo '(';  echo $this->_tpl_vars['Hutnictwo']+$this->_tpl_vars['hutnictwo'];  echo ')';  endif;  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tfight'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Attack'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tshoot'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Shoot'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tcast'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Magic'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tdodge'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Miss'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tleader'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Leadership'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tmining'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Mining'];  echo '';  if ($this->_tpl_vars['gornictwo'] > 0):  echo '(';  echo $this->_tpl_vars['Mining']+$this->_tpl_vars['gornictwo'];  echo ')';  endif;  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tlumberjack'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Lumberjack'];  echo '';  if ($this->_tpl_vars['drwalnictwo'] > 0):  echo '(';  echo $this->_tpl_vars['Lumberjack']+$this->_tpl_vars['drwalnictwo'];  echo ')';  endif;  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Therbalist'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Herbalist'];  echo '';  if ($this->_tpl_vars['zielarstwo'] > 0):  echo '(';  echo $this->_tpl_vars['Herbalist']+$this->_tpl_vars['zielarstwo'];  echo ')';  endif;  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tbreeding'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Breeding'];  echo '</td></tr><tr><td><b>Rytuały:</b></td><td> ';  echo $this->_tpl_vars['wskrzeszanie'];  echo '</td></tr><tr><td><b>Gotowanie:</b></td><td> ';  echo $this->_tpl_vars['gotowanie'];  echo '</td></tr><tr><td><b>Wampiryzm:</b></td><td> ';  echo $this->_tpl_vars['wampiryzm'];  echo '</td></tr><tr><td><b>Alkoholizm:</b></td><td> ';  echo $this->_tpl_vars['alkoholizm'];  echo '.00</td></tr><tr><td><b>Transmutacja:</b></td><td> ';  echo $this->_tpl_vars['utrans'];  echo '.00</td></tr><tr><td><b>Hipnoza:</b></td><td> ';  echo $this->_tpl_vars['hipnoza'];  echo '.00</td></tr><tr><td><b>Warzenie wywarów:</b></td><td> ';  echo $this->_tpl_vars['warzenie'];  echo '.00</td></tr><tr><td><b>Cudzołóstwo:</b></td><td> ';  echo $this->_tpl_vars['houselure'];  echo '</td></tr></table></fieldset></td></tr><tr><td colspan="2" align="center"><fieldset><legend><b>Aktywne efekty<b></legend><div style="text-align:left"><br/><table>';  if ($this->_tpl_vars['Ant_d']):  echo '<tr><td>';  echo $this->_tpl_vars['Ant_d'];  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['Ant_n']):  echo '<tr><td>';  echo $this->_tpl_vars['Ant_n'];  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['Ant_i']):  echo '<tr><td>';  echo $this->_tpl_vars['Ant_i'];  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['Resurect']):  echo '<tr><td>';  echo $this->_tpl_vars['Resurect'];  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['Blessfor']):  echo '<tr><td><b>';  echo $this->_tpl_vars['Blessfor'];  echo '</b></td><td>';  echo $this->_tpl_vars['Pray'];  echo ' <b>';  echo $this->_tpl_vars['Blessval'];  echo '</b></td></tr>';  endif;  echo '';  if ($this->_tpl_vars['alchemia'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na alchemię (+';  echo $this->_tpl_vars['alchemia'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['hutnictwo'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na hutnictwo (+';  echo $this->_tpl_vars['hutnictwo'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['drwalnictwo'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na drwalnictwo (+';  echo $this->_tpl_vars['drwalnictwo'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['gornictwo'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na górnictwo (+';  echo $this->_tpl_vars['gornictwo'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['zielarstwo'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na zielarstwo (+';  echo $this->_tpl_vars['zielarstwo'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['sila'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na siłę (+';  echo $this->_tpl_vars['sila'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['zrecznosc'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na zręczność (+';  echo $this->_tpl_vars['zrecznosc'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['szybkosc'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na szybkość (+';  echo $this->_tpl_vars['szybkosc'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['wytrzymalosc'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na wytrzymalość (+';  echo $this->_tpl_vars['wytrzymalosc'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['inteligencja'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na inteligencję (+';  echo $this->_tpl_vars['inteligencja'];  echo ').<br>';  endif;  echo '';  if ($this->_tpl_vars['silawoli'] > 0):  echo 'Posiadasz buff ze świątyni gildyjnej na siłę woli (+';  echo $this->_tpl_vars['silawoli'];  echo ').<br>';  endif;  echo '</table><br/></div></fieldset><tr><td colspan="2" align="center"><fieldset><legend><b>';  echo $this->_tpl_vars['Tinfo'];  echo '</b></legend><div style="text-align:left"><table><tr><td><b>';  echo $this->_tpl_vars['Trank'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Rank'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tloc'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Location'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tage'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Age'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tlogins'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Logins'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tip'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Ip'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Temail'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Email'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['GG'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Tclan'];  echo ':</b></td><td> ';  echo $this->_tpl_vars['Tribe'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Triberank'];  echo '</td></tr><tr><td><b>';  echo $this->_tpl_vars['Reputation'];  echo ':</b></td><td>';  echo $this->_tpl_vars['Rep'];  echo '</td></tr></table></div></fieldset></td></tr></table>'; ?>
<br>
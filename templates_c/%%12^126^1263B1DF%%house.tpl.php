<?php /* Smarty version 2.6.16, created on 2013-02-15 19:41:34
         compiled from house.tpl */ ?>
<center><IMG SRC="images/locations/domymieszkancow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo '';  if ($this->_tpl_vars['Action'] == ""):  echo '<p>Słońce leniwie przesuwa się ku zachodowi, pokrywając miasto czerwienią. Hałas na ulicach zaczyna ustępować ciszy. Opuściłeś już główne ulice Aleary, kierując się w stronę dzielnicy mieszkalnej. Domy, które mijasz zbudowane są w najróżniejszych stylach. Po prawej, wśród bujnych konarów drzew, znajduje się wielki pałac, którego motywem przewodnim jest liść. Marmurowe kolumny ozdobione są szmaragdowymi ornamentami. Tuż za bramą dostrzegasz dwie wspaniałe fontanny, a przy podjeździe wykonany z niezwykłym kunsztem, kryształowy pomnik. Okrągłe okna nadają tej budowli nieco zabawnego charakteru, jednocześnie wzbudzając nieco zazdrości. Wchodzisz w jedną z bocznych uliczek mijając po drodze kilka mniejszych pałacyków. W oddali zaczynasz dostrzegać znajome zarysy, myślisz sobie: nareszcie w domu/p><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '>';  if ($this->_tpl_vars['Houseid'] == ""):  echo '<li> <a href="house.php?action=land">';  echo $this->_tpl_vars['Aland'];  echo '</a></li><li> <a href="house.php?action=list">';  echo $this->_tpl_vars['Alist'];  echo '</a></li><li> <a href="house.php?action=rent">';  echo $this->_tpl_vars['Arent'];  echo '</a></li>';  endif;  echo '';  if ($this->_tpl_vars['Houseid'] > '0'):  echo '<li> <a href="house.php?action=my">';  echo $this->_tpl_vars['Ahouse'];  echo '</a></li><li> <a href="house.php?action=build">';  echo $this->_tpl_vars['Aworkshop'];  echo '</a></li><li> <a href="house.php?action=land">';  echo $this->_tpl_vars['Aland'];  echo '</a></li><li> <a href="house.php?action=list">';  echo $this->_tpl_vars['Alist'];  echo '</a></li><li> <a href="house.php?action=rent">';  echo $this->_tpl_vars['Arent'];  echo '</a></li>';  endif;  echo '</ul>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'rent'):  echo '<table width="100%"><tr><td width="10%"><b><u>';  echo $this->_tpl_vars['Hnumber'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hseller'];  echo '</u></b></td><td width="30%"><b><u>';  echo $this->_tpl_vars['Hname'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hsize'];  echo '</u></b></td><td width="20%"><b><u>';  echo $this->_tpl_vars['Htype'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hcost'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hoption'];  echo '</u></b></td></tr>';  unset($this->_sections['house']);
$this->_sections['house']['name'] = 'house';
$this->_sections['house']['loop'] = is_array($_loop=$this->_tpl_vars['Housesname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house']['show'] = true;
$this->_sections['house']['max'] = $this->_sections['house']['loop'];
$this->_sections['house']['step'] = 1;
$this->_sections['house']['start'] = $this->_sections['house']['step'] > 0 ? 0 : $this->_sections['house']['loop']-1;
if ($this->_sections['house']['show']) {
    $this->_sections['house']['total'] = $this->_sections['house']['loop'];
    if ($this->_sections['house']['total'] == 0)
        $this->_sections['house']['show'] = false;
} else
    $this->_sections['house']['total'] = 0;
if ($this->_sections['house']['show']):

            for ($this->_sections['house']['index'] = $this->_sections['house']['start'], $this->_sections['house']['iteration'] = 1;
                 $this->_sections['house']['iteration'] <= $this->_sections['house']['total'];
                 $this->_sections['house']['index'] += $this->_sections['house']['step'], $this->_sections['house']['iteration']++):
$this->_sections['house']['rownum'] = $this->_sections['house']['iteration'];
$this->_sections['house']['index_prev'] = $this->_sections['house']['index'] - $this->_sections['house']['step'];
$this->_sections['house']['index_next'] = $this->_sections['house']['index'] + $this->_sections['house']['step'];
$this->_sections['house']['first']      = ($this->_sections['house']['iteration'] == 1);
$this->_sections['house']['last']       = ($this->_sections['house']['iteration'] == $this->_sections['house']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Housesid'][$this->_sections['house']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Housesseller'][$this->_sections['house']['index']];  echo '">';  echo $this->_tpl_vars['Housesseller'][$this->_sections['house']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Housesname'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housesbuild'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housestype'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housescost'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Houseslink'][$this->_sections['house']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table> <a href="house.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'land'):  echo '<p>';  echo $this->_tpl_vars['Landinfo'];  echo '</p>';  if ($this->_tpl_vars['Substep'] == 'new'):  echo '<a href="house.php?action=land&amp;step=buy">Kup pierwszy obszar ziemi</a> za 20 mithrilu.';  else:  echo '<form method="post" action="house.php?action=land&amp;step=buy"><input type="submit" value="Kup" /> <input id="land" type="text" name="land" size="5" value="0" /> obszarów ziemi</form><br><br>Użyj suwaka poniżej aby zakupić kilka obszarów na raz.<br><br><center><div id="landslider" style="width:50%"></div></center><div id="curland" style="display: none;">';  echo $this->_tpl_vars['Lands'];  echo '</div><div id="maxland" style="display: none;">';  echo $this->_tpl_vars['Maxland'];  echo '</div><br><br><center>Potrzebne surowce: <span id="gold">0</span> złota, <span id="mith">0</span> mithrilu</center><br><br>Obecnie posiadasz <b>';  echo $this->_tpl_vars['Lands'];  echo '</b> obszarów ziemi. Koszty kolejnych obszarów:<br><br>Obszar <b>';  echo $this->_tpl_vars['Lands1'];  echo '</b> : <b>';  echo $this->_tpl_vars['Gold1'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Mith1'];  echo '</b> mithrilu<br>Obszar <b>';  echo $this->_tpl_vars['Lands2'];  echo '</b> : <b>';  echo $this->_tpl_vars['Gold2'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Mith2'];  echo '</b> mithrilu<br>Obszar <b>';  echo $this->_tpl_vars['Lands3'];  echo '</b> : <b>';  echo $this->_tpl_vars['Gold3'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Mith3'];  echo '</b> mithrilu<br>Obszar <b>';  echo $this->_tpl_vars['Lands4'];  echo '</b> : <b>';  echo $this->_tpl_vars['Gold4'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Mith4'];  echo '</b> mithrilu<br>Obszar <b>';  echo $this->_tpl_vars['Lands5'];  echo '</b> : <b>';  echo $this->_tpl_vars['Gold5'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Mith5'];  echo '</b> mithrilu<br>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'build'):  echo '<p>Witaj w warsztacie budowlanym. Tutaj możesz popracować nad swoim domem aby był większy i lepszy. Każde działanie wymaga oprócz surowców specjalnych punktów budowlanych. Punkty budowlane wzrastają z każdym resetem.Obecnie posiadasz <b>';  echo $this->_tpl_vars['Points'];  echo '</b> punktów budowlanych. </p>';  if ($this->_tpl_vars['Buildhouse'] != ""):  echo '';  if ($this->_tpl_vars['Substep'] == 'new'):  echo '';  echo $this->_tpl_vars['Buildhouse'];  echo '';  else:  echo '<h1>Rozbudowa domu</h1>Rozbudowa domu pozwoli ci na powiększenie jego rozmiaru. W większym domu śpi się lepiej, a samopoczucie znacznie rośnie. Większy dom pozwala na odzyskanie większej ilości energii. Każdy poziom rozbudowy obniża jego jakość o 10.<br><br><div id="maxsize" style="display: none">';  echo $this->_tpl_vars['Maxsize'];  echo '</div><div id="cursize" style="display: none">';  echo $this->_tpl_vars['Size'];  echo '</div><form method="post" action="house.php?action=build&amp;step=add"><input type="submit" value="Rozbuduj" /> swój dom o <input type="text" id="upgval" name="upgval" size="3" value="0" /> poziomów<br><br><center><div id="buildslider" style="width:50%"></div></center></form><br><center>Potrzebne surowce:<span id="gold">0</span> złota, <span id="mith">0</span> mithrilu, <span id="pine">0</span> sosny, <span id="points">0</span> punktów budowlanych.</center><br><br>Posiadasz dom o rozmiarze <b>';  echo $this->_tpl_vars['Size'];  echo '</b>. Koszty kolejnych poziomów rozbudowy:<br><br>Poziom <b>';  echo $this->_tpl_vars['Size1'];  echo '</b> : <b>';  echo $this->_tpl_vars['Buildgold1'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Buildmith1'];  echo '</b> mithrilu, <b>';  echo $this->_tpl_vars['Buildpine1'];  echo '</b> sosny<br>Poziom <b>';  echo $this->_tpl_vars['Size2'];  echo '</b> : <b>';  echo $this->_tpl_vars['Buildgold2'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Buildmith2'];  echo '</b> mithrilu, <b>';  echo $this->_tpl_vars['Buildpine2'];  echo '</b> sosny<br>Poziom <b>';  echo $this->_tpl_vars['Size3'];  echo '</b> : <b>';  echo $this->_tpl_vars['Buildgold3'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Buildmith3'];  echo '</b> mithrilu, <b>';  echo $this->_tpl_vars['Buildpine3'];  echo '</b> sosny<br>Poziom <b>';  echo $this->_tpl_vars['Size4'];  echo '</b> : <b>';  echo $this->_tpl_vars['Buildgold4'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Buildmith4'];  echo '</b> mithrilu, <b>';  echo $this->_tpl_vars['Buildpine4'];  echo '</b> sosny<br>Poziom <b>';  echo $this->_tpl_vars['Size5'];  echo '</b> : <b>';  echo $this->_tpl_vars['Buildgold5'];  echo '</b> złota, <b>';  echo $this->_tpl_vars['Buildmith5'];  echo '</b> mithrilu, <b>';  echo $this->_tpl_vars['Buildpine5'];  echo '</b> sosny<br>Dodatkowo każdy poziom rozbudowy wymaga <b>20</b> punktów budowlanych.<hr>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Buildbed'] != ""):  echo '<h1>Budowa sypialni</h1>Budowa sypialni umożliwi ci odpoczywanie w swoim domu zarówno tobie, jak i twojemu lokatorowi.<br><br><center><input type="button" value="Wybuduj sypialnię" onclick="window.location=\'house.php?action=build&amp;step=bedroom\'"></center><br><br><center>Potrzebne surowce: 25000 złota, 50 mithrilu, 100 sosny, 50 punktów budowlanych</center><hr>';  endif;  echo '';  if ($this->_tpl_vars['Buildwardrobe'] != ""):  echo '<h1>Szafy na przedmioty</h1>Kupno szaf na przedmioty pozwoli ci na bezpieczne przechowywanie twoich przedmiotów. Każda szafa pomieści 100 przedmiotów.<br><br><center><input type="button" value="Kup szafę" onclick="window.location=\'house.php?action=build&amp;step=wardrobe\'" /><br><br>Potrzebne surowce: 10000 złota, 100 sosny, 10 punktów budowlanych</center><hr>';  endif;  echo '';  if ($this->_tpl_vars['Upgrade'] != ""):  echo '<h1>Upiększanie domu</h1>Upiększanie domu zwiększa jego wartość i poziom luksusu. Zwiększa również ilość energii odzyskiwanej podczas odpoczynku.<br><br><form method="post" action="house.php?action=build&amp;step=upgrade&amp;step2=make"><input type="submit" value="Zwiększ" /> wartość domu o <input id="upgpoints" type="text" name="points" size="5" value="0" /></form><br><br><center><div id="upgradeslider" style="width:50%"></div></center><br><center>Potrzebne surowce:<span id="upg_gold">0</span> złota, <span id="upg_ada">0</span> adamantium, <span id="upg_crys">0</span> kryształów, <span id="upg_meteo">0</span> meteoru, <span id="upg_yew">0</span> cisu, <span id="upg_elm">0</span> wiązu, <span id="upg_points">0</span> punktów budowlanych</center><div id="maxupgrade" style="display: none">';  echo $this->_tpl_vars['Maxupgrade'];  echo '</div><br><br>Każde zwiększenie poziomu upiększenia o jeden punkt wymaga <b>5000</b> złota, <b>20</b> adamantium, <b>10</b> kryształów, <b>5</b> kawałków meteorytu, <b>10</b> cisu, <b>20</b> wiązu oraz <b>10</b> punktów budowlanych.';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'new'):  echo '<form method="post" action="house.php?action=build&amp;step=new&amp;step2=make">';  echo $this->_tpl_vars['Hname'];  echo ' <input type="text" name="name" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Abuild'];  echo '" /></form><br />';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'upgrade'):  echo '';  echo $this->_tpl_vars['Upginfo'];  echo '';  echo $this->_tpl_vars['Upg_cost'];  echo '';  echo $this->_tpl_vars['Tcredits'];  echo '';  echo $this->_tpl_vars['Upg_adamant'];  echo '';  echo $this->_tpl_vars['Tadamantium'];  echo '';  echo $this->_tpl_vars['Upg_crystal'];  echo '';  echo $this->_tpl_vars['Tcrystal'];  echo '';  echo $this->_tpl_vars['Upg_meteor'];  echo '';  echo $this->_tpl_vars['Tmeteor'];  echo '';  echo $this->_tpl_vars['Upg_yew'];  echo '';  echo $this->_tpl_vars['Tyew'];  echo '';  echo $this->_tpl_vars['Upg_elm'];  echo '';  echo $this->_tpl_vars['Telm'];  echo '<br /><form method="post" action="house.php?action=build&amp;step=upgrade&amp;step2=make">';  echo $this->_tpl_vars['Upgrade3'];  echo ' <input type="text" name="points" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Awork'];  echo '" /></form><br />';  endif;  echo '<br /><br /><a href="house.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'list'):  echo '<table width="100%"><tr><td width="10%"><b><u>';  echo $this->_tpl_vars['Hnumber'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Howner'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hlocator'];  echo '</u></b></td><td width="40%"><b><u>';  echo $this->_tpl_vars['Hname'];  echo '</u></b></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Hsize'];  echo '</u></b></td><td width="20%"><b><u>';  echo $this->_tpl_vars['Htype'];  echo '</u></b></td></tr>';  unset($this->_sections['house']);
$this->_sections['house']['name'] = 'house';
$this->_sections['house']['loop'] = is_array($_loop=$this->_tpl_vars['Housesname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house']['show'] = true;
$this->_sections['house']['max'] = $this->_sections['house']['loop'];
$this->_sections['house']['step'] = 1;
$this->_sections['house']['start'] = $this->_sections['house']['step'] > 0 ? 0 : $this->_sections['house']['loop']-1;
if ($this->_sections['house']['show']) {
    $this->_sections['house']['total'] = $this->_sections['house']['loop'];
    if ($this->_sections['house']['total'] == 0)
        $this->_sections['house']['show'] = false;
} else
    $this->_sections['house']['total'] = 0;
if ($this->_sections['house']['show']):

            for ($this->_sections['house']['index'] = $this->_sections['house']['start'], $this->_sections['house']['iteration'] = 1;
                 $this->_sections['house']['iteration'] <= $this->_sections['house']['total'];
                 $this->_sections['house']['index'] += $this->_sections['house']['step'], $this->_sections['house']['iteration']++):
$this->_sections['house']['rownum'] = $this->_sections['house']['iteration'];
$this->_sections['house']['index_prev'] = $this->_sections['house']['index'] - $this->_sections['house']['step'];
$this->_sections['house']['index_next'] = $this->_sections['house']['index'] + $this->_sections['house']['step'];
$this->_sections['house']['first']      = ($this->_sections['house']['iteration'] == 1);
$this->_sections['house']['last']       = ($this->_sections['house']['iteration'] == $this->_sections['house']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Housesid'][$this->_sections['house']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Housesowner'][$this->_sections['house']['index']];  echo '">';  echo $this->_tpl_vars['Housesowner'][$this->_sections['house']['index']];  echo '</a></td><td>';  echo $this->_tpl_vars['Locator'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housesname'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housesbuild'][$this->_sections['house']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Housestype'][$this->_sections['house']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table> <a href="house.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'my'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Houseinfo'];  echo '<br /><br /><table width="70%"><tr><td width="35%">';  echo $this->_tpl_vars['Hname'];  echo ': </td><td width="65%"> ';  echo $this->_tpl_vars['Name'];  echo ' ';  if ($this->_tpl_vars['Owner'] == $this->_tpl_vars['Id']):  echo ' [<a href="house.php?action=my&amp;step=name">';  echo $this->_tpl_vars['Cname'];  echo '</a>] ';  endif;  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Howner'];  echo ': </td><td> <a href="view.php?view=';  echo $this->_tpl_vars['Owner'];  echo '">';  echo $this->_tpl_vars['Owner'];  echo '</a></td></tr><tr><td>';  echo $this->_tpl_vars['Hsize'];  echo ': </td><td> ';  echo $this->_tpl_vars['Build'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Lamount'];  echo ': </td><td> ';  echo $this->_tpl_vars['Size'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Frooms'];  echo ': </td><td> ';  echo $this->_tpl_vars['Unused'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Hvalue'];  echo ': </td><td> ';  echo $this->_tpl_vars['Value'];  echo ' ';  echo $this->_tpl_vars['Housename'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Hlocator'];  echo ': </td><td> ';  echo $this->_tpl_vars['Locator'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Ibedroom'];  echo ': </td><td> ';  echo $this->_tpl_vars['Bedroom'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Wamount'];  echo ': </td><td> ';  echo $this->_tpl_vars['Wardrobe'];  echo '</td></tr><tr><td>';  echo $this->_tpl_vars['Iamount'];  echo ': </td><td> ';  echo $this->_tpl_vars['Items'];  echo '</td></tr></table><br/>';  echo $this->_tpl_vars['Bedroomlink'];  echo '';  echo $this->_tpl_vars['Wardrobelink'];  echo '';  echo $this->_tpl_vars['Locatorlink'];  echo '';  echo $this->_tpl_vars['Sellhouse'];  echo '';  echo $this->_tpl_vars['Locleave'];  echo '(<a href="house.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'leave' && $this->_tpl_vars['Step2'] == ""):  echo '';  echo $this->_tpl_vars['Youwant'];  echo '<form method="post" action="house.php?action=my&amp;step=leave&amp;step2=confirm"><input type="submit" value="';  echo $this->_tpl_vars['Yes'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'sell'):  echo '';  if ($this->_tpl_vars['Step2'] == ""):  echo '';  echo $this->_tpl_vars['Sellinfo'];  echo '<br /><form method="post" action="house.php?action=my&amp;step=sell&amp;step2=sell"><input type="submit" value="';  echo $this->_tpl_vars['Asend'];  echo '" /> ';  echo $this->_tpl_vars['Housesale'];  echo ' <input type="text" name="cost" />';  echo $this->_tpl_vars['Goldcoins'];  echo '</form>';  endif;  echo '';  if ($this->_tpl_vars['Step2'] == 'sell'):  echo '';  echo $this->_tpl_vars['Message'];  echo '<br /><br />(<a href="house.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>)<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'locator'):  echo '';  if ($this->_tpl_vars['Step2'] == ""):  echo '<form method="post" action="house.php?action=my&amp;step=locator&amp;step2=change"><select name="loc"><option value="add">';  echo $this->_tpl_vars['Oadd'];  echo '</option><option value="delete">';  echo $this->_tpl_vars['Odelete'];  echo '</option></select> ';  echo $this->_tpl_vars['Second'];  echo '<br />';  echo $this->_tpl_vars['Lid2'];  echo ': <input type="text" name="lid" size="5" value="';  echo $this->_tpl_vars['Locid'];  echo '" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Amake'];  echo '" /></form><br />';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'name'):  echo '<form method="post" action="house.php?action=my&amp;step=name&amp;step2=change"><input type="submit" value="';  echo $this->_tpl_vars['Achange'];  echo '" /> ';  echo $this->_tpl_vars['Ona'];  echo ': <input type="text" name="name" /></form><br />';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'bedroom'):  echo '';  echo $this->_tpl_vars['Bedinfo'];  echo '<ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li> <a href="house.php?action=my&amp;step=bedroom&amp;step2=rest">';  echo $this->_tpl_vars['Arest'];  echo '</a></li><li> <a href="logout.php?rest=Y&amp;did=';  echo $this->_tpl_vars['Id'];  echo '">';  echo $this->_tpl_vars['Asleep'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'wardrobe'):  echo '';  echo $this->_tpl_vars['Winfo'];  echo ' <b>';  echo $this->_tpl_vars['Wardrobe'];  echo ' ';  echo $this->_tpl_vars['Wamount'];  echo '</b> ';  echo $this->_tpl_vars['And2'];  echo ' <b>';  echo $this->_tpl_vars['Amount'];  echo ' ';  echo $this->_tpl_vars['Iamount4'];  echo '</b> ';  echo $this->_tpl_vars['Inw'];  echo '<br /><ul><li> <a href="house.php?action=my&amp;step=wardrobe&amp;step2=add">';  echo $this->_tpl_vars['Ahidei'];  echo '</a></li><li> <a href="house.php?action=my&amp;step=wardrobe&amp;step2=list">';  echo $this->_tpl_vars['Alist'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Step2'] == 'list'):  echo '<table width="100%"><tr><td width="28%"><b><u>';  echo $this->_tpl_vars['Iname'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Ipower'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Idur'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Iagi'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Ispeed'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Iamount2'];  echo '</u></b></td><td width="12%"><b><u>';  echo $this->_tpl_vars['Ioption'];  echo '</u></b></td></tr>';  unset($this->_sections['house1']);
$this->_sections['house1']['name'] = 'house1';
$this->_sections['house1']['loop'] = is_array($_loop=$this->_tpl_vars['Itemname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house1']['show'] = true;
$this->_sections['house1']['max'] = $this->_sections['house1']['loop'];
$this->_sections['house1']['step'] = 1;
$this->_sections['house1']['start'] = $this->_sections['house1']['step'] > 0 ? 0 : $this->_sections['house1']['loop']-1;
if ($this->_sections['house1']['show']) {
    $this->_sections['house1']['total'] = $this->_sections['house1']['loop'];
    if ($this->_sections['house1']['total'] == 0)
        $this->_sections['house1']['show'] = false;
} else
    $this->_sections['house1']['total'] = 0;
if ($this->_sections['house1']['show']):

            for ($this->_sections['house1']['index'] = $this->_sections['house1']['start'], $this->_sections['house1']['iteration'] = 1;
                 $this->_sections['house1']['iteration'] <= $this->_sections['house1']['total'];
                 $this->_sections['house1']['index'] += $this->_sections['house1']['step'], $this->_sections['house1']['iteration']++):
$this->_sections['house1']['rownum'] = $this->_sections['house1']['iteration'];
$this->_sections['house1']['index_prev'] = $this->_sections['house1']['index'] - $this->_sections['house1']['step'];
$this->_sections['house1']['index_next'] = $this->_sections['house1']['index'] + $this->_sections['house1']['step'];
$this->_sections['house1']['first']      = ($this->_sections['house1']['iteration'] == 1);
$this->_sections['house1']['last']       = ($this->_sections['house1']['iteration'] == $this->_sections['house1']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Itemname'][$this->_sections['house1']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Itempower'][$this->_sections['house1']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Itemdur'][$this->_sections['house1']['index']];  echo '/';  echo $this->_tpl_vars['Itemmaxdur'][$this->_sections['house1']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Itemagility'][$this->_sections['house1']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Itemspeed'][$this->_sections['house1']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Itemamount'][$this->_sections['house1']['index']];  echo '</td><td>- <a href="house.php?action=my&amp;step=wardrobe&amp;take=';  echo $this->_tpl_vars['Itemid'][$this->_sections['house1']['index']];  echo '">';  echo $this->_tpl_vars['Aget'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['Take'] != ""):  echo '';  if ($this->_tpl_vars['Step3'] == ""):  echo '<form method="post" action="house.php?action=my&amp;step=wardrobe&amp;take=';  echo $this->_tpl_vars['Id'];  echo '&amp;step3=add"><input type="submit" value="';  echo $this->_tpl_vars['Aget'];  echo '" /> ';  echo $this->_tpl_vars['Fromh'];  echo ' <input type="text" name="amount" value="';  echo $this->_tpl_vars['Amount'];  echo '" size="5" /> ';  echo $this->_tpl_vars['Amount2'];  echo ' <b>';  echo $this->_tpl_vars['Name'];  echo '</b><br /></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step2'] == 'add'):  echo '<form method="post" action="house.php?action=my&amp;step=wardrobe&amp;step2=add&amp;step3=add"><table><tr><td colspan="2">';  echo $this->_tpl_vars['Item'];  echo ': <select name="przedmiot">';  unset($this->_sections['house2']);
$this->_sections['house2']['name'] = 'house2';
$this->_sections['house2']['loop'] = is_array($_loop=$this->_tpl_vars['Itemname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house2']['show'] = true;
$this->_sections['house2']['max'] = $this->_sections['house2']['loop'];
$this->_sections['house2']['step'] = 1;
$this->_sections['house2']['start'] = $this->_sections['house2']['step'] > 0 ? 0 : $this->_sections['house2']['loop']-1;
if ($this->_sections['house2']['show']) {
    $this->_sections['house2']['total'] = $this->_sections['house2']['loop'];
    if ($this->_sections['house2']['total'] == 0)
        $this->_sections['house2']['show'] = false;
} else
    $this->_sections['house2']['total'] = 0;
if ($this->_sections['house2']['show']):

            for ($this->_sections['house2']['index'] = $this->_sections['house2']['start'], $this->_sections['house2']['iteration'] = 1;
                 $this->_sections['house2']['iteration'] <= $this->_sections['house2']['total'];
                 $this->_sections['house2']['index'] += $this->_sections['house2']['step'], $this->_sections['house2']['iteration']++):
$this->_sections['house2']['rownum'] = $this->_sections['house2']['iteration'];
$this->_sections['house2']['index_prev'] = $this->_sections['house2']['index'] - $this->_sections['house2']['step'];
$this->_sections['house2']['index_next'] = $this->_sections['house2']['index'] + $this->_sections['house2']['step'];
$this->_sections['house2']['first']      = ($this->_sections['house2']['iteration'] == 1);
$this->_sections['house2']['last']       = ($this->_sections['house2']['iteration'] == $this->_sections['house2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Itemid1'][$this->_sections['house2']['index']];  echo '">(';  echo $this->_tpl_vars['Iamount3'];  echo ': ';  echo $this->_tpl_vars['Itemamount1'][$this->_sections['house2']['index']];  echo ') ';  echo $this->_tpl_vars['Itemname1'][$this->_sections['house2']['index']];  echo '</option>';  endfor; endif;  echo '</select> ';  echo $this->_tpl_vars['Amount2'];  echo ' <input type="text" name="amount" size="5" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Ahide'];  echo '" /></td></tr></table></form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] != "" && $this->_tpl_vars['Step2'] != 'sell'):  echo '<br />(<a href="house.php?action=my">';  echo $this->_tpl_vars['Aback'];  echo '</a>)';  endif;  echo '';  endif;  echo ''; ?>

</br>
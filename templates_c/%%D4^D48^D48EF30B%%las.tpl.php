<?php /* Smarty version 2.6.16, created on 2012-10-27 23:18:54
         compiled from las.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['Health'] != '0' && $_GET['action'] == "" && $_GET['action2'] == ""):  echo '';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<div class="center"><center><IMG SRC="images/locations/lasdusz.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br></div>';  endif;  echo 'Przed Tobą pojawia się ciemny, wielki i gęsty las. Na sam jego widok przechodzą Cię dreszcze. Nie jesteś przekonany czy powinieneś się tam udać. Po chwili namysłu ruszasz dalej. Idąc ścieżką czujesz zimny podmuch wiatru. Zawiał tak mocno, że upadłeś na ziemię. Wylądowałeś na starej rozwalonej tablicy leżącej tutaj od lat. Zaczynasz przyglądać się jej. Widzisz wyryty napis „Las Zbłąkanych Dusz”. Nagle widzisz szeregi duchów przemierzających las. Jednak przeszywający Cię strach nie pozwolił Ci nawet drgnąć. Gdy duchy znikły już z pola widzenia wstajesz i udajesz się dalej. Przemierzając las nie natrafiasz na żadną żywą istotę. Las zdaje Ci się być wymarły i niezamieszkały nawet przez zwierzynę. Po chwili idąc potykasz się i znów lądujesz na ziemi. Tym razem na jakimś grobie, który zapadł się pod ziemię. Zrywasz się szybko na nogi i zaczynasz uciekać w popłochu. Nagle wpadasz na jakiegoś elfa. Wystraszony próbujesz uciec, lecz on złapał Cię za rękę i uspokaja. Wdałeś się z nim w rozmowę. Opowiedział Ci legendę o owym lesie mówiącą o tym, że las znajduje się na starym cmentarzysku. Powiedział Ci również, że jeśli posiadasz licencję na wyrąb lasu to może zaprowadzić Cie do miejsca w którym możesz ścinać drzewa.<br /><ul><li><a href="lumberjack.php">';  echo @A_LUMBERJACK;  echo '</a></li><li><a href="explore.php">';  echo @A_EXPLORE;  echo '</a></li><li><a href="mrocznylas.php">Droga do najmroczniejszej części tego lasu [QUEST]</a></li><li><a href="travel.php">Wracam...</a></li></ul><br/>';  endif;  echo '';  if ($this->_tpl_vars['Health'] == '0' && $_GET['action'] == ""):  echo '';  echo @YOU_DEAD;  echo '.<br />- <a href="las.php?action=back">';  echo @BACK_TO;  echo '</a><br />- <a href="las.php?action=hermit">';  echo @STAY_HERE;  echo '</a>';  endif;  echo '';  if ($_GET['action'] == 'hermit' && $_GET['action2'] == ""):  echo '';  echo @HERMIT;  echo '<br /><br /><i>';  echo @HERMIT2;  echo '</i><br />- <a href="las.php?action=hermit&amp;action2=resurect">';  echo @A_RESURECT;  echo '</a> (';  echo @T_GOLD;  echo ' ';  echo $this->_tpl_vars['Goldneed'];  echo ' ';  echo @GOLD_COINS;  echo ')<br />- <a href="las.php?action=hermit&amp;action2=wait">';  echo @A_WAIT;  echo '</a> (';  echo $this->_tpl_vars['Waittime'];  echo ')';  endif;  echo '';  if ($_GET['action2'] == 'resurect'):  echo '';  echo @RES1;  echo '<br /><br /><i>';  echo @RES2;  echo '</i><br /><br />';  echo @RES3;  echo '<br />';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  if ($_GET['action2'] != ""):  echo '<br /><a href="las.php">';  echo @BACK;  echo '</a>';  endif;  echo ''; ?>
</br></br>
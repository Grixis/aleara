<?php /* Smarty version 2.6.16, created on 2012-10-06 01:00:58
         compiled from gory.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['Health'] != '0' && $this->_tpl_vars['Action'] == ""):  echo '';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<div class="center"><center><IMG SRC="images/locations/gory.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br></div>';  endif;  echo 'Po długiej podróży dotarłeś do rozległych, skalistych gór. Uważnie przyglądasz się otoczeniu. Widzisz wysokie urwiska, rzeki i wodospady. Obok przy szlaku zauważasz starca siedzącego na skale. Przypatrując mu się dokładniej dostrzegasz, iż to jakiś stary gnom-, który wygląda na podróżnika. Podchodzisz do niego i wdajesz się w rozmowę. Dowiedziałeś się z niej, że owe góry to Góry Przeznaczenia. Legenda głosi, iż gdzieś tutaj znajdują się leże olbrzymiego smoka Nughorga, lecz do dziś nie zostały odnalezione. Gnom powiedział Ci również, iż podobno smok strzeże niezwykle silnych skarbów i tylko wybrana osoba przez bogów będzie w stanie pokonać smoka. Starzec poinformował Cię także, że można tutaj znaleźć różne przydatne minerały oraz poinformował Cię o znajdującej się w okolicach wielkiej kopalni. Zastanawiasz się co zrobić...<ul><li><a href="kopalnia.php">';  echo $this->_tpl_vars['Amine'];  echo '</a></li><li><a href="explore.php">';  echo $this->_tpl_vars['Asearch'];  echo '</a></li><li><a href="nughorg.php">Leże Nughorg\'a</a></li><li><a href="travel.php">Wracam..</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Health'] == '0' && $this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Youdead'];  echo '.<ul><li> <a href="gory.php?action=back">';  echo $this->_tpl_vars['Backto'];  echo '</a></li><li> <a href="gory.php?action=hermit">';  echo $this->_tpl_vars['Stayhere'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'hermit' && $this->_tpl_vars['Action2'] == ""):  echo '';  echo $this->_tpl_vars['Hermit'];  echo '<br /><i>';  echo $this->_tpl_vars['Hermit2'];  echo '</i><ul><li> <a href="gory.php?action=hermit&amp;action2=resurect">';  echo $this->_tpl_vars['Aresurect'];  echo '</a> (';  echo $this->_tpl_vars['Tgold'];  echo ' ';  echo $this->_tpl_vars['Goldneed'];  echo ' ';  echo $this->_tpl_vars['Goldcoins'];  echo ')</li><li> <a href="gory.php?action=hermit&amp;action2=wait">';  echo $this->_tpl_vars['Await'];  echo '</a> (';  echo $this->_tpl_vars['Waittime'];  echo ') </li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Action2'] == 'resurect'):  echo '';  echo $this->_tpl_vars['Res1'];  echo '<br /><i>';  echo $this->_tpl_vars['Res2'];  echo '</i><br />';  echo $this->_tpl_vars['Res3'];  echo '';  endif;  echo '';  echo $this->_tpl_vars['Message'];  echo '';  if ($this->_tpl_vars['Action2'] != ""):  echo '<br /><p><a href="gory.php">';  echo $this->_tpl_vars['Aback'];  echo '</a></p>';  endif;  echo ''; ?>

</br></br>
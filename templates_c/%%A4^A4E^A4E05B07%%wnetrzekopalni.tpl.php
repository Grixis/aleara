<?php /* Smarty version 2.6.16, created on 2012-10-26 23:35:20
         compiled from wnetrzekopalni.tpl */ ?>
<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Idąc napotykasz przed sobą tajemniczą zakapturzoną postać. Przyglądasz się jej uważnie lecz spod kaptura dostrzegasz w ciemności tylko zarys ust nieznajomej Ci postaci. Słyszysz srogi głos mówiący Ci o tym, iż w zamian za poprawną odpowiedź na kilka pytań możesz wylosować jedną z magicznych kart. Gdy to powiedział dostrzegłeś w jego dłoni migoczące wśród mroku karty, które wcześniej musiały umknąć Twojej uwadze.
<br><br>




<?php echo '';  echo $this->_tpl_vars['Link'];  echo '';  if ($this->_tpl_vars['Action'] == 'moutains' && $this->_tpl_vars['Location'] == 'Las' && $this->_tpl_vars['Step'] != ""):  echo '';  if ($this->_tpl_vars['Step'] == 'first'):  echo '';  echo $this->_tpl_vars['Fquestion'];  echo '?</b><br /><form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=second"><input type="text" name="fanswer" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form><br>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'second'):  echo '';  if ($this->_tpl_vars['Answer'] == 'true'):  echo '';  echo $this->_tpl_vars['Squestion'];  echo '?</b><br /><form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=third"><input type="text" name="sanswer" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form><br>';  endif;  echo '';  if ($this->_tpl_vars['Answer'] == 'false'):  echo '';  echo $this->_tpl_vars['Qfail'];  echo '<br>';  endif;  echo '<br>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'third'):  echo '';  if ($this->_tpl_vars['Answer'] == 'true'):  echo '';  echo $this->_tpl_vars['Tquestion'];  echo ': <b>';  echo $this->_tpl_vars['Question'];  echo '?</b><br /><form method="post" action="wnetrzekopalni.php?action=moutains&amp;step=forth"><input type="hidden" name="number" value="';  echo $this->_tpl_vars['Number'];  echo '" /><input type="text" name="tanswer" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form><br>';  endif;  echo '';  if ($this->_tpl_vars['Answer'] == 'false'):  echo '';  echo $this->_tpl_vars['Qfail'];  echo '<br>';  endif;  echo '<br>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'forth'):  echo '';  if ($this->_tpl_vars['Answer'] == 'true'):  echo '';  echo $this->_tpl_vars['Qsucc'];  echo ' ';  echo $this->_tpl_vars['Item'];  echo ' ';  echo $this->_tpl_vars['Qsucc2'];  echo '</i><br /><br>';  endif;  echo '';  if ($this->_tpl_vars['Answer'] == 'false'):  echo '';  echo $this->_tpl_vars['Qfail'];  echo '<br>';  endif;  echo '<br>';  endif;  echo '<br>';  endif;  echo '';  if ($this->_tpl_vars['Health'] > '0' && $this->_tpl_vars['Location'] == 'Las' && $this->_tpl_vars['Step'] == "" && $this->_tpl_vars['Fight'] == '0' && $this->_tpl_vars['Action'] == ""):  echo '';  echo $this->_tpl_vars['Finfo'];  echo '<br /><br /><form method="post" action="wnetrzekopalni.php?action=forest">';  echo $this->_tpl_vars['Howmuch'];  echo ' <input type="text" name="amount" value="0" size="5" /> ';  echo $this->_tpl_vars['Tenergy'];  echo '<br /><input type="submit" value="';  echo $this->_tpl_vars['Awalk'];  echo '" /></form><br />&raquo; <a href="las.php">';  echo $this->_tpl_vars['Ano'];  echo '</a><br /><br>';  endif;  echo '';  if ($this->_tpl_vars['Action'] == 'forest' && $this->_tpl_vars['Location'] == 'Las'):  echo '<center><IMG SRC="images/locations/city3.png"></center>';  echo $this->_tpl_vars['Youfind'];  echo '';  echo $this->_tpl_vars['Enemy'];  echo '<br /><br />';  if ($this->_tpl_vars['Health'] > '0' && $this->_tpl_vars['Enemy'] == ""):  echo '<form method="post" action="wnetrzekopalni.php?action=forest">';  echo $this->_tpl_vars['Howmuch'];  echo ' <input type="text" name="amount" value="0" size="5" /> ';  echo $this->_tpl_vars['Tenergy'];  echo '<br /><input type="submit" value="';  echo $this->_tpl_vars['Awalk'];  echo '" /></form><br />&raquo; <a href="las.php">';  echo $this->_tpl_vars['Ano'];  echo '</a><br /><br>';  endif;  echo '<br>';  endif;  echo ''; ?>

<br><br><a href="las.php">Spadam stąd jednak. Bywaj!</a>
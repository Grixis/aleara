<?php /* Smarty version 2.6.16, created on 2012-10-06 00:35:27
         compiled from equip.tpl */ ?>


<u><?php echo $this->_tpl_vars['Equipped']; ?>
</u>:<br />
<?php echo $this->_tpl_vars['Weapon']; ?>

<?php echo $this->_tpl_vars['Arrows']; ?>

<?php echo $this->_tpl_vars['Helmet']; ?>

<?php echo $this->_tpl_vars['Armor']; ?>

<?php echo $this->_tpl_vars['Shield']; ?>

<?php echo $this->_tpl_vars['Legs']; ?>

<?php echo $this->_tpl_vars['Ring1']; ?>

<?php echo $this->_tpl_vars['Ring2']; ?>

<?php echo $this->_tpl_vars['Repairequip']; ?>

<?php echo $this->_tpl_vars['Hide']; ?>

<br>
<div id="buttons"></div><br>
<div id="equiptabs">
<ul>
	<li><a href="equip_query.php?type=W&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Broń biała</a></li>
	<li><a href="equip_query.php?type=B&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Łuki</a></li>
	<li><a href="equip_query.php?type=R&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Strzały</a></li>
	<li><a href="equip_query.php?type=H&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Hełmy</a></li>
	<li><a href="equip_query.php?type=A&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Zbroje</a></li>
	<li><a href="equip_query.php?type=S&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Tarcze</a></li>
	<li><a href="equip_query.php?type=L&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Nagolenniki</a></li>
	<li><a href="equip_query.php?type=I&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Dodatki</a></li>
	<li><a href="equip_query.php?type=T&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Różdżki</a></li>
	<li><a href="equip_query.php?type=C&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Szaty</a></li>
	<li><a href="equip_query.php?type=M&owner=<?php echo $this->_tpl_vars['Id']; ?>
">Mikstury</a></li>

</ul>
</div>
<div id="dialog" style="display: none;" title="Wypij wiele">
    <center>
    <form method="post" action="equip.php?wypijwiele">   
	Wypij wiele mikstur naraz:<br>
            <select name="potion">
            <?php unset($this->_sections['item10']);
$this->_sections['item10']['name'] = 'item10';
$this->_sections['item10']['loop'] = is_array($_loop=$this->_tpl_vars['2Pname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item10']['show'] = true;
$this->_sections['item10']['max'] = $this->_sections['item10']['loop'];
$this->_sections['item10']['step'] = 1;
$this->_sections['item10']['start'] = $this->_sections['item10']['step'] > 0 ? 0 : $this->_sections['item10']['loop']-1;
if ($this->_sections['item10']['show']) {
    $this->_sections['item10']['total'] = $this->_sections['item10']['loop'];
    if ($this->_sections['item10']['total'] == 0)
        $this->_sections['item10']['show'] = false;
} else
    $this->_sections['item10']['total'] = 0;
if ($this->_sections['item10']['show']):

            for ($this->_sections['item10']['index'] = $this->_sections['item10']['start'], $this->_sections['item10']['iteration'] = 1;
                 $this->_sections['item10']['iteration'] <= $this->_sections['item10']['total'];
                 $this->_sections['item10']['index'] += $this->_sections['item10']['step'], $this->_sections['item10']['iteration']++):
$this->_sections['item10']['rownum'] = $this->_sections['item10']['iteration'];
$this->_sections['item10']['index_prev'] = $this->_sections['item10']['index'] - $this->_sections['item10']['step'];
$this->_sections['item10']['index_next'] = $this->_sections['item10']['index'] + $this->_sections['item10']['step'];
$this->_sections['item10']['first']      = ($this->_sections['item10']['iteration'] == 1);
$this->_sections['item10']['last']       = ($this->_sections['item10']['iteration'] == $this->_sections['item10']['total']);
?>
                <option value="<?php echo $this->_tpl_vars['2Potionid1'][$this->_sections['item10']['index']]; ?>
"> (<?php echo $this->_tpl_vars['2Amount']; ?>
: <?php echo $this->_tpl_vars['2Pamount1'][$this->_sections['item10']['index']]; ?>
 ) <?php echo $this->_tpl_vars['2Pname1'][$this->_sections['item10']['index']]; ?>
 <?php echo $this->_tpl_vars['2Ppower1'][$this->_sections['item10']['index']]; ?>
</option>
            <?php endfor; endif; ?>
            </select><br/>
        
            Ile:
                <input type="text" name="ile" value="1" /><br/>
                <input type="submit" value="Wypij" />
            </td>
        </tr>
    </table>
    </form>
    <br /><br />
    </center>
</div>
<!--<div id="equipment">
<?php unset($this->_sections['item1']);
$this->_sections['item1']['name'] = 'item1';
$this->_sections['item1']['loop'] = is_array($_loop=$this->_tpl_vars['Bweapons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item1']['show'] = true;
$this->_sections['item1']['max'] = $this->_sections['item1']['loop'];
$this->_sections['item1']['step'] = 1;
$this->_sections['item1']['start'] = $this->_sections['item1']['step'] > 0 ? 0 : $this->_sections['item1']['loop']-1;
if ($this->_sections['item1']['show']) {
    $this->_sections['item1']['total'] = $this->_sections['item1']['loop'];
    if ($this->_sections['item1']['total'] == 0)
        $this->_sections['item1']['show'] = false;
} else
    $this->_sections['item1']['total'] = 0;
if ($this->_sections['item1']['show']):

            for ($this->_sections['item1']['index'] = $this->_sections['item1']['start'], $this->_sections['item1']['iteration'] = 1;
                 $this->_sections['item1']['iteration'] <= $this->_sections['item1']['total'];
                 $this->_sections['item1']['index'] += $this->_sections['item1']['step'], $this->_sections['item1']['iteration']++):
$this->_sections['item1']['rownum'] = $this->_sections['item1']['iteration'];
$this->_sections['item1']['index_prev'] = $this->_sections['item1']['index'] - $this->_sections['item1']['step'];
$this->_sections['item1']['index_next'] = $this->_sections['item1']['index'] + $this->_sections['item1']['step'];
$this->_sections['item1']['first']      = ($this->_sections['item1']['iteration'] == 1);
$this->_sections['item1']['last']       = ($this->_sections['item1']['iteration'] == $this->_sections['item1']['total']);
?>
    <?php echo $this->_tpl_vars['Bweapons'][$this->_sections['item1']['index']]; ?>

<?php endfor; endif; ?>

<?php unset($this->_sections['item2']);
$this->_sections['item2']['name'] = 'item2';
$this->_sections['item2']['loop'] = is_array($_loop=$this->_tpl_vars['Bstaffs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item2']['show'] = true;
$this->_sections['item2']['max'] = $this->_sections['item2']['loop'];
$this->_sections['item2']['step'] = 1;
$this->_sections['item2']['start'] = $this->_sections['item2']['step'] > 0 ? 0 : $this->_sections['item2']['loop']-1;
if ($this->_sections['item2']['show']) {
    $this->_sections['item2']['total'] = $this->_sections['item2']['loop'];
    if ($this->_sections['item2']['total'] == 0)
        $this->_sections['item2']['show'] = false;
} else
    $this->_sections['item2']['total'] = 0;
if ($this->_sections['item2']['show']):

            for ($this->_sections['item2']['index'] = $this->_sections['item2']['start'], $this->_sections['item2']['iteration'] = 1;
                 $this->_sections['item2']['iteration'] <= $this->_sections['item2']['total'];
                 $this->_sections['item2']['index'] += $this->_sections['item2']['step'], $this->_sections['item2']['iteration']++):
$this->_sections['item2']['rownum'] = $this->_sections['item2']['iteration'];
$this->_sections['item2']['index_prev'] = $this->_sections['item2']['index'] - $this->_sections['item2']['step'];
$this->_sections['item2']['index_next'] = $this->_sections['item2']['index'] + $this->_sections['item2']['step'];
$this->_sections['item2']['first']      = ($this->_sections['item2']['iteration'] == 1);
$this->_sections['item2']['last']       = ($this->_sections['item2']['iteration'] == $this->_sections['item2']['total']);
?>
    <?php echo $this->_tpl_vars['Bstaffs'][$this->_sections['item2']['index']]; ?>

<?php endfor; endif; ?>

<?php if ($this->_tpl_vars['Arrows1'] != ""): ?>
    <?php echo $this->_tpl_vars['Arrows1']; ?>

    <?php unset($this->_sections['item3']);
$this->_sections['item3']['name'] = 'item3';
$this->_sections['item3']['loop'] = is_array($_loop=$this->_tpl_vars['Barrows']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item3']['show'] = true;
$this->_sections['item3']['max'] = $this->_sections['item3']['loop'];
$this->_sections['item3']['step'] = 1;
$this->_sections['item3']['start'] = $this->_sections['item3']['step'] > 0 ? 0 : $this->_sections['item3']['loop']-1;
if ($this->_sections['item3']['show']) {
    $this->_sections['item3']['total'] = $this->_sections['item3']['loop'];
    if ($this->_sections['item3']['total'] == 0)
        $this->_sections['item3']['show'] = false;
} else
    $this->_sections['item3']['total'] = 0;
if ($this->_sections['item3']['show']):

            for ($this->_sections['item3']['index'] = $this->_sections['item3']['start'], $this->_sections['item3']['iteration'] = 1;
                 $this->_sections['item3']['iteration'] <= $this->_sections['item3']['total'];
                 $this->_sections['item3']['index'] += $this->_sections['item3']['step'], $this->_sections['item3']['iteration']++):
$this->_sections['item3']['rownum'] = $this->_sections['item3']['iteration'];
$this->_sections['item3']['index_prev'] = $this->_sections['item3']['index'] - $this->_sections['item3']['step'];
$this->_sections['item3']['index_next'] = $this->_sections['item3']['index'] + $this->_sections['item3']['step'];
$this->_sections['item3']['first']      = ($this->_sections['item3']['iteration'] == 1);
$this->_sections['item3']['last']       = ($this->_sections['item3']['iteration'] == $this->_sections['item3']['total']);
?>
        <?php echo $this->_tpl_vars['Barrows'][$this->_sections['item3']['index']]; ?>
 (+<?php echo $this->_tpl_vars['Barrpower'][$this->_sections['item3']['index']]; ?>
) <?php echo $this->_tpl_vars['Barrpoison'][$this->_sections['item3']['index']]; ?>
 (<?php echo $this->_tpl_vars['Barramount'][$this->_sections['item3']['index']]; ?>
 <?php echo $this->_tpl_vars['Tarrows']; ?>
) [ <a href="equip.php?equip=<?php echo $this->_tpl_vars['Barrid'][$this->_sections['item3']['index']]; ?>
"><?php echo $this->_tpl_vars['Awear']; ?>
</a> | <a href="equip.php?sell=<?php echo $this->_tpl_vars['Barrid'][$this->_sections['item3']['index']]; ?>
"><?php echo $this->_tpl_vars['Asell']; ?>
</a> <?php echo $this->_tpl_vars['Fora']; ?>
 <?php echo $this->_tpl_vars['Barrcost'][$this->_sections['item3']['index']]; ?>
 <?php echo $this->_tpl_vars['Goldcoins']; ?>
 ]<br />
    <?php endfor; endif; ?>
    (<a href="equip.php?sprzedaj=R"><?php echo $this->_tpl_vars['Sellall']; ?>
</a>)<br /><br />
<?php endif; ?>

<?php unset($this->_sections['item4']);
$this->_sections['item4']['name'] = 'item4';
$this->_sections['item4']['loop'] = is_array($_loop=$this->_tpl_vars['Bhelmets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item4']['show'] = true;
$this->_sections['item4']['max'] = $this->_sections['item4']['loop'];
$this->_sections['item4']['step'] = 1;
$this->_sections['item4']['start'] = $this->_sections['item4']['step'] > 0 ? 0 : $this->_sections['item4']['loop']-1;
if ($this->_sections['item4']['show']) {
    $this->_sections['item4']['total'] = $this->_sections['item4']['loop'];
    if ($this->_sections['item4']['total'] == 0)
        $this->_sections['item4']['show'] = false;
} else
    $this->_sections['item4']['total'] = 0;
if ($this->_sections['item4']['show']):

            for ($this->_sections['item4']['index'] = $this->_sections['item4']['start'], $this->_sections['item4']['iteration'] = 1;
                 $this->_sections['item4']['iteration'] <= $this->_sections['item4']['total'];
                 $this->_sections['item4']['index'] += $this->_sections['item4']['step'], $this->_sections['item4']['iteration']++):
$this->_sections['item4']['rownum'] = $this->_sections['item4']['iteration'];
$this->_sections['item4']['index_prev'] = $this->_sections['item4']['index'] - $this->_sections['item4']['step'];
$this->_sections['item4']['index_next'] = $this->_sections['item4']['index'] + $this->_sections['item4']['step'];
$this->_sections['item4']['first']      = ($this->_sections['item4']['iteration'] == 1);
$this->_sections['item4']['last']       = ($this->_sections['item4']['iteration'] == $this->_sections['item4']['total']);
?>
    <?php echo $this->_tpl_vars['Bhelmets'][$this->_sections['item4']['index']]; ?>

<?php endfor; endif; ?>

<?php unset($this->_sections['item5']);
$this->_sections['item5']['name'] = 'item5';
$this->_sections['item5']['loop'] = is_array($_loop=$this->_tpl_vars['Barmors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item5']['show'] = true;
$this->_sections['item5']['max'] = $this->_sections['item5']['loop'];
$this->_sections['item5']['step'] = 1;
$this->_sections['item5']['start'] = $this->_sections['item5']['step'] > 0 ? 0 : $this->_sections['item5']['loop']-1;
if ($this->_sections['item5']['show']) {
    $this->_sections['item5']['total'] = $this->_sections['item5']['loop'];
    if ($this->_sections['item5']['total'] == 0)
        $this->_sections['item5']['show'] = false;
} else
    $this->_sections['item5']['total'] = 0;
if ($this->_sections['item5']['show']):

            for ($this->_sections['item5']['index'] = $this->_sections['item5']['start'], $this->_sections['item5']['iteration'] = 1;
                 $this->_sections['item5']['iteration'] <= $this->_sections['item5']['total'];
                 $this->_sections['item5']['index'] += $this->_sections['item5']['step'], $this->_sections['item5']['iteration']++):
$this->_sections['item5']['rownum'] = $this->_sections['item5']['iteration'];
$this->_sections['item5']['index_prev'] = $this->_sections['item5']['index'] - $this->_sections['item5']['step'];
$this->_sections['item5']['index_next'] = $this->_sections['item5']['index'] + $this->_sections['item5']['step'];
$this->_sections['item5']['first']      = ($this->_sections['item5']['iteration'] == 1);
$this->_sections['item5']['last']       = ($this->_sections['item5']['iteration'] == $this->_sections['item5']['total']);
?>
    <?php echo $this->_tpl_vars['Barmors'][$this->_sections['item5']['index']]; ?>

<?php endfor; endif; ?>

<?php unset($this->_sections['item6']);
$this->_sections['item6']['name'] = 'item6';
$this->_sections['item6']['loop'] = is_array($_loop=$this->_tpl_vars['Bshields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item6']['show'] = true;
$this->_sections['item6']['max'] = $this->_sections['item6']['loop'];
$this->_sections['item6']['step'] = 1;
$this->_sections['item6']['start'] = $this->_sections['item6']['step'] > 0 ? 0 : $this->_sections['item6']['loop']-1;
if ($this->_sections['item6']['show']) {
    $this->_sections['item6']['total'] = $this->_sections['item6']['loop'];
    if ($this->_sections['item6']['total'] == 0)
        $this->_sections['item6']['show'] = false;
} else
    $this->_sections['item6']['total'] = 0;
if ($this->_sections['item6']['show']):

            for ($this->_sections['item6']['index'] = $this->_sections['item6']['start'], $this->_sections['item6']['iteration'] = 1;
                 $this->_sections['item6']['iteration'] <= $this->_sections['item6']['total'];
                 $this->_sections['item6']['index'] += $this->_sections['item6']['step'], $this->_sections['item6']['iteration']++):
$this->_sections['item6']['rownum'] = $this->_sections['item6']['iteration'];
$this->_sections['item6']['index_prev'] = $this->_sections['item6']['index'] - $this->_sections['item6']['step'];
$this->_sections['item6']['index_next'] = $this->_sections['item6']['index'] + $this->_sections['item6']['step'];
$this->_sections['item6']['first']      = ($this->_sections['item6']['iteration'] == 1);
$this->_sections['item6']['last']       = ($this->_sections['item6']['iteration'] == $this->_sections['item6']['total']);
?>
    <?php echo $this->_tpl_vars['Bshields'][$this->_sections['item6']['index']]; ?>

<?php endfor; endif; ?>

<?php unset($this->_sections['item7']);
$this->_sections['item7']['name'] = 'item7';
$this->_sections['item7']['loop'] = is_array($_loop=$this->_tpl_vars['Bcapes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item7']['show'] = true;
$this->_sections['item7']['max'] = $this->_sections['item7']['loop'];
$this->_sections['item7']['step'] = 1;
$this->_sections['item7']['start'] = $this->_sections['item7']['step'] > 0 ? 0 : $this->_sections['item7']['loop']-1;
if ($this->_sections['item7']['show']) {
    $this->_sections['item7']['total'] = $this->_sections['item7']['loop'];
    if ($this->_sections['item7']['total'] == 0)
        $this->_sections['item7']['show'] = false;
} else
    $this->_sections['item7']['total'] = 0;
if ($this->_sections['item7']['show']):

            for ($this->_sections['item7']['index'] = $this->_sections['item7']['start'], $this->_sections['item7']['iteration'] = 1;
                 $this->_sections['item7']['iteration'] <= $this->_sections['item7']['total'];
                 $this->_sections['item7']['index'] += $this->_sections['item7']['step'], $this->_sections['item7']['iteration']++):
$this->_sections['item7']['rownum'] = $this->_sections['item7']['iteration'];
$this->_sections['item7']['index_prev'] = $this->_sections['item7']['index'] - $this->_sections['item7']['step'];
$this->_sections['item7']['index_next'] = $this->_sections['item7']['index'] + $this->_sections['item7']['step'];
$this->_sections['item7']['first']      = ($this->_sections['item7']['iteration'] == 1);
$this->_sections['item7']['last']       = ($this->_sections['item7']['iteration'] == $this->_sections['item7']['total']);
?>
    <?php echo $this->_tpl_vars['Bcapes'][$this->_sections['item7']['index']]; ?>

<?php endfor; endif; ?>

<?php unset($this->_sections['item8']);
$this->_sections['item8']['name'] = 'item8';
$this->_sections['item8']['loop'] = is_array($_loop=$this->_tpl_vars['Blegs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item8']['show'] = true;
$this->_sections['item8']['max'] = $this->_sections['item8']['loop'];
$this->_sections['item8']['step'] = 1;
$this->_sections['item8']['start'] = $this->_sections['item8']['step'] > 0 ? 0 : $this->_sections['item8']['loop']-1;
if ($this->_sections['item8']['show']) {
    $this->_sections['item8']['total'] = $this->_sections['item8']['loop'];
    if ($this->_sections['item8']['total'] == 0)
        $this->_sections['item8']['show'] = false;
} else
    $this->_sections['item8']['total'] = 0;
if ($this->_sections['item8']['show']):

            for ($this->_sections['item8']['index'] = $this->_sections['item8']['start'], $this->_sections['item8']['iteration'] = 1;
                 $this->_sections['item8']['iteration'] <= $this->_sections['item8']['total'];
                 $this->_sections['item8']['index'] += $this->_sections['item8']['step'], $this->_sections['item8']['iteration']++):
$this->_sections['item8']['rownum'] = $this->_sections['item8']['iteration'];
$this->_sections['item8']['index_prev'] = $this->_sections['item8']['index'] - $this->_sections['item8']['step'];
$this->_sections['item8']['index_next'] = $this->_sections['item8']['index'] + $this->_sections['item8']['step'];
$this->_sections['item8']['first']      = ($this->_sections['item8']['iteration'] == 1);
$this->_sections['item8']['last']       = ($this->_sections['item8']['iteration'] == $this->_sections['item8']['total']);
?>
    <?php echo $this->_tpl_vars['Blegs'][$this->_sections['item8']['index']]; ?>

<?php endfor; endif; ?>

<?php if ($this->_tpl_vars['Rings1'] != ""): ?>
    <?php echo $this->_tpl_vars['Rings1']; ?>

    <?php unset($this->_sections['rings']);
$this->_sections['rings']['name'] = 'rings';
$this->_sections['rings']['loop'] = is_array($_loop=$this->_tpl_vars['Bringid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rings']['show'] = true;
$this->_sections['rings']['max'] = $this->_sections['rings']['loop'];
$this->_sections['rings']['step'] = 1;
$this->_sections['rings']['start'] = $this->_sections['rings']['step'] > 0 ? 0 : $this->_sections['rings']['loop']-1;
if ($this->_sections['rings']['show']) {
    $this->_sections['rings']['total'] = $this->_sections['rings']['loop'];
    if ($this->_sections['rings']['total'] == 0)
        $this->_sections['rings']['show'] = false;
} else
    $this->_sections['rings']['total'] = 0;
if ($this->_sections['rings']['show']):

            for ($this->_sections['rings']['index'] = $this->_sections['rings']['start'], $this->_sections['rings']['iteration'] = 1;
                 $this->_sections['rings']['iteration'] <= $this->_sections['rings']['total'];
                 $this->_sections['rings']['index'] += $this->_sections['rings']['step'], $this->_sections['rings']['iteration']++):
$this->_sections['rings']['rownum'] = $this->_sections['rings']['iteration'];
$this->_sections['rings']['index_prev'] = $this->_sections['rings']['index'] - $this->_sections['rings']['step'];
$this->_sections['rings']['index_next'] = $this->_sections['rings']['index'] + $this->_sections['rings']['step'];
$this->_sections['rings']['first']      = ($this->_sections['rings']['iteration'] == 1);
$this->_sections['rings']['last']       = ($this->_sections['rings']['iteration'] == $this->_sections['rings']['total']);
?>
        <b>(<?php echo $this->_tpl_vars['Amount']; ?>
: <?php echo $this->_tpl_vars['Bringamount'][$this->_sections['rings']['index']]; ?>
)</b> <?php echo $this->_tpl_vars['Brings'][$this->_sections['rings']['index']]; ?>
 (+<?php echo $this->_tpl_vars['Bringpower'][$this->_sections['rings']['index']]; ?>
) [ <a href="equip.php?equip=<?php echo $this->_tpl_vars['Bringid'][$this->_sections['rings']['index']]; ?>
"><?php echo $this->_tpl_vars['Awear']; ?>
</a> | <a href="equip.php?sell=<?php echo $this->_tpl_vars['Bringid'][$this->_sections['rings']['index']]; ?>
"><?php echo $this->_tpl_vars['Asell']; ?>
</a> <?php echo $this->_tpl_vars['Fora']; ?>
 <?php echo $this->_tpl_vars['Bringcost'][$this->_sections['rings']['index']]; ?>
 <?php echo $this->_tpl_vars['Goldcoins']; ?>
 ]<br />
    <?php endfor; endif; ?>
    (<a href="equip.php?sprzedaj=I"><?php echo $this->_tpl_vars['Sellallrings']; ?>
</a>)<br /><br />
<?php endif; ?>

<?php if ($this->_tpl_vars['Potions1'] > '0'): ?>
    <br /><u><?php echo $this->_tpl_vars['Potions2']; ?>
</u>:<br />
    <?php unset($this->_sections['item10']);
$this->_sections['item10']['name'] = 'item10';
$this->_sections['item10']['loop'] = is_array($_loop=$this->_tpl_vars['Pname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item10']['show'] = true;
$this->_sections['item10']['max'] = $this->_sections['item10']['loop'];
$this->_sections['item10']['step'] = 1;
$this->_sections['item10']['start'] = $this->_sections['item10']['step'] > 0 ? 0 : $this->_sections['item10']['loop']-1;
if ($this->_sections['item10']['show']) {
    $this->_sections['item10']['total'] = $this->_sections['item10']['loop'];
    if ($this->_sections['item10']['total'] == 0)
        $this->_sections['item10']['show'] = false;
} else
    $this->_sections['item10']['total'] = 0;
if ($this->_sections['item10']['show']):

            for ($this->_sections['item10']['index'] = $this->_sections['item10']['start'], $this->_sections['item10']['iteration'] = 1;
                 $this->_sections['item10']['iteration'] <= $this->_sections['item10']['total'];
                 $this->_sections['item10']['index'] += $this->_sections['item10']['step'], $this->_sections['item10']['iteration']++):
$this->_sections['item10']['rownum'] = $this->_sections['item10']['iteration'];
$this->_sections['item10']['index_prev'] = $this->_sections['item10']['index'] - $this->_sections['item10']['step'];
$this->_sections['item10']['index_next'] = $this->_sections['item10']['index'] + $this->_sections['item10']['step'];
$this->_sections['item10']['first']      = ($this->_sections['item10']['iteration'] == 1);
$this->_sections['item10']['last']       = ($this->_sections['item10']['iteration'] == $this->_sections['item10']['total']);
?>
        <b>(<?php echo $this->_tpl_vars['Amount']; ?>
: <?php echo $this->_tpl_vars['Pamount1'][$this->_sections['item10']['index']]; ?>
 )</b> <?php echo $this->_tpl_vars['Pname1'][$this->_sections['item10']['index']]; ?>
 (<?php echo $this->_tpl_vars['Peffect1'][$this->_sections['item10']['index']]; ?>
) <?php echo $this->_tpl_vars['Ppower1'][$this->_sections['item10']['index']]; ?>
 <?php echo $this->_tpl_vars['Paction1'][$this->_sections['item10']['index']]; ?>
<br />
    <?php endfor; endif; ?>
    <?php echo $this->_tpl_vars['Asellall']; ?>
 <br />
<?php endif; ?>

<?php if (( isset ( $this->_tpl_vars['2Potions1'] ) )): ?>
    <center>
    <form method="post" action="equip.php?wypijwiele">   
    <table>
        <tr>
            <td colspan="2" align="center">Wypij wiele mikstur naraz:
            <select name="potion">
            <?php unset($this->_sections['item10']);
$this->_sections['item10']['name'] = 'item10';
$this->_sections['item10']['loop'] = is_array($_loop=$this->_tpl_vars['2Pname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item10']['show'] = true;
$this->_sections['item10']['max'] = $this->_sections['item10']['loop'];
$this->_sections['item10']['step'] = 1;
$this->_sections['item10']['start'] = $this->_sections['item10']['step'] > 0 ? 0 : $this->_sections['item10']['loop']-1;
if ($this->_sections['item10']['show']) {
    $this->_sections['item10']['total'] = $this->_sections['item10']['loop'];
    if ($this->_sections['item10']['total'] == 0)
        $this->_sections['item10']['show'] = false;
} else
    $this->_sections['item10']['total'] = 0;
if ($this->_sections['item10']['show']):

            for ($this->_sections['item10']['index'] = $this->_sections['item10']['start'], $this->_sections['item10']['iteration'] = 1;
                 $this->_sections['item10']['iteration'] <= $this->_sections['item10']['total'];
                 $this->_sections['item10']['index'] += $this->_sections['item10']['step'], $this->_sections['item10']['iteration']++):
$this->_sections['item10']['rownum'] = $this->_sections['item10']['iteration'];
$this->_sections['item10']['index_prev'] = $this->_sections['item10']['index'] - $this->_sections['item10']['step'];
$this->_sections['item10']['index_next'] = $this->_sections['item10']['index'] + $this->_sections['item10']['step'];
$this->_sections['item10']['first']      = ($this->_sections['item10']['iteration'] == 1);
$this->_sections['item10']['last']       = ($this->_sections['item10']['iteration'] == $this->_sections['item10']['total']);
?>
                <option value="<?php echo $this->_tpl_vars['2Potionid1'][$this->_sections['item10']['index']]; ?>
"> (<?php echo $this->_tpl_vars['2Amount']; ?>
: <?php echo $this->_tpl_vars['2Pamount1'][$this->_sections['item10']['index']]; ?>
 ) <?php echo $this->_tpl_vars['2Pname1'][$this->_sections['item10']['index']]; ?>
 (<?php echo $this->_tpl_vars['2Peffect1'][$this->_sections['item10']['index']]; ?>
) <?php echo $this->_tpl_vars['2Ppower1'][$this->_sections['item10']['index']]; ?>
</option>
            <?php endfor; endif; ?>
            </select></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Ile:
                <input type="text" name="ile" value="1" />
                <input type="submit" value="Wypij" />
            </td>
        </tr>
    </table>
    </form>
    <br /><br />
    </center>
<?php endif;  echo $this->_tpl_vars['Action']; ?>

-->
<?php if ($this->_tpl_vars['Poison'] > '0'): ?>
    <form method="post" action="equip.php?poison=<?php echo $this->_tpl_vars['Poison']; ?>
&amp;step=poison"><input type="submit" value="<?php echo $this->_tpl_vars['Poisonit']; ?>
" /> <select name="weapon">
    <?php unset($this->_sections['item']);
$this->_sections['item']['name'] = 'item';
$this->_sections['item']['loop'] = is_array($_loop=$this->_tpl_vars['Poisonitem']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['item']['show'] = true;
$this->_sections['item']['max'] = $this->_sections['item']['loop'];
$this->_sections['item']['step'] = 1;
$this->_sections['item']['start'] = $this->_sections['item']['step'] > 0 ? 0 : $this->_sections['item']['loop']-1;
if ($this->_sections['item']['show']) {
    $this->_sections['item']['total'] = $this->_sections['item']['loop'];
    if ($this->_sections['item']['total'] == 0)
        $this->_sections['item']['show'] = false;
} else
    $this->_sections['item']['total'] = 0;
if ($this->_sections['item']['show']):

            for ($this->_sections['item']['index'] = $this->_sections['item']['start'], $this->_sections['item']['iteration'] = 1;
                 $this->_sections['item']['iteration'] <= $this->_sections['item']['total'];
                 $this->_sections['item']['index'] += $this->_sections['item']['step'], $this->_sections['item']['iteration']++):
$this->_sections['item']['rownum'] = $this->_sections['item']['iteration'];
$this->_sections['item']['index_prev'] = $this->_sections['item']['index'] - $this->_sections['item']['step'];
$this->_sections['item']['index_next'] = $this->_sections['item']['index'] + $this->_sections['item']['step'];
$this->_sections['item']['first']      = ($this->_sections['item']['iteration'] == 1);
$this->_sections['item']['last']       = ($this->_sections['item']['iteration'] == $this->_sections['item']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['Poisonid'][$this->_sections['item']['index']]; ?>
"><?php echo $this->_tpl_vars['Poisonitem'][$this->_sections['item']['index']]; ?>
 (<?php echo $this->_tpl_vars['Tamount']; ?>
: <?php echo $this->_tpl_vars['Poisonamount'][$this->_sections['item']['index']]; ?>
)</option>
    <?php endfor; endif; ?>
    </select>
    <input type="hidden" value="<?php echo $this->_tpl_vars['Poison']; ?>
" name="poison" />
    </form>
    <?php if ($this->_tpl_vars['Step'] == 'poison'): ?>
        <?php echo $this->_tpl_vars['Item']; ?>

    <?php endif;  endif; ?>

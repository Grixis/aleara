

<u>{$Equipped}</u>:<br />
{$Weapon}
{$Arrows}
{$Helmet}
{$Armor}
{$Shield}
{$Legs}
{$Ring1}
{$Ring2}
{$Repairequip}
{$Hide}
<br>
<div id="buttons"></div><br>
<div id="equiptabs">
<ul>
	<li><a href="equip_query.php?type=W&owner={$Id}">Broń biała</a></li>
	<li><a href="equip_query.php?type=B&owner={$Id}">Łuki</a></li>
	<li><a href="equip_query.php?type=R&owner={$Id}">Strzały</a></li>
	<li><a href="equip_query.php?type=H&owner={$Id}">Hełmy</a></li>
	<li><a href="equip_query.php?type=A&owner={$Id}">Zbroje</a></li>
	<li><a href="equip_query.php?type=S&owner={$Id}">Tarcze</a></li>
	<li><a href="equip_query.php?type=L&owner={$Id}">Nagolenniki</a></li>
	<li><a href="equip_query.php?type=I&owner={$Id}">Dodatki</a></li>
	<li><a href="equip_query.php?type=T&owner={$Id}">Różdżki</a></li>
	<li><a href="equip_query.php?type=C&owner={$Id}">Szaty</a></li>
	<li><a href="equip_query.php?type=M&owner={$Id}">Mikstury</a></li>

</ul>
</div>
<div id="dialog" style="display: none;" title="Wypij wiele">
    <center>
    <form method="post" action="equip.php?wypijwiele">   
	Wypij wiele mikstur naraz:<br>
            <select name="potion">
            {section name=item10 loop=$2Pname1}
                <option value="{$2Potionid1[item10]}"> ({$2Amount}: {$2Pamount1[item10]} ) {$2Pname1[item10]} {$2Ppower1[item10]}</option>
            {/section}
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
{section name=item1 loop=$Bweapons}
    {$Bweapons[item1]}
{/section}

{section name=item2 loop=$Bstaffs}
    {$Bstaffs[item2]}
{/section}

{if $Arrows1 != ""}
    {$Arrows1}
    {section name=item3 loop=$Barrows}
        {$Barrows[item3]} (+{$Barrpower[item3]}) {$Barrpoison[item3]} ({$Barramount[item3]} {$Tarrows}) [ <a href="equip.php?equip={$Barrid[item3]}">{$Awear}</a> | <a href="equip.php?sell={$Barrid[item3]}">{$Asell}</a> {$Fora} {$Barrcost[item3]} {$Goldcoins} ]<br />
    {/section}
    (<a href="equip.php?sprzedaj=R">{$Sellall}</a>)<br /><br />
{/if}

{section name=item4 loop=$Bhelmets}
    {$Bhelmets[item4]}
{/section}

{section name=item5 loop=$Barmors}
    {$Barmors[item5]}
{/section}

{section name=item6 loop=$Bshields}
    {$Bshields[item6]}
{/section}

{section name=item7 loop=$Bcapes}
    {$Bcapes[item7]}
{/section}

{section name=item8 loop=$Blegs}
    {$Blegs[item8]}
{/section}

{if $Rings1 != ""}
    {$Rings1}
    {section name=rings loop=$Bringid}
        <b>({$Amount}: {$Bringamount[rings]})</b> {$Brings[rings]} (+{$Bringpower[rings]}) [ <a href="equip.php?equip={$Bringid[rings]}">{$Awear}</a> | <a href="equip.php?sell={$Bringid[rings]}">{$Asell}</a> {$Fora} {$Bringcost[rings]} {$Goldcoins} ]<br />
    {/section}
    (<a href="equip.php?sprzedaj=I">{$Sellallrings}</a>)<br /><br />
{/if}

{if $Potions1 > "0"}
    <br /><u>{$Potions2}</u>:<br />
    {section name=item10 loop=$Pname1}
        <b>({$Amount}: {$Pamount1[item10]} )</b> {$Pname1[item10]} ({$Peffect1[item10]}) {$Ppower1[item10]} {$Paction1[item10]}<br />
    {/section}
    {$Asellall} <br />
{/if}

{if (isset($2Potions1))}
    <center>
    <form method="post" action="equip.php?wypijwiele">   
    <table>
        <tr>
            <td colspan="2" align="center">Wypij wiele mikstur naraz:
            <select name="potion">
            {section name=item10 loop=$2Pname1}
                <option value="{$2Potionid1[item10]}"> ({$2Amount}: {$2Pamount1[item10]} ) {$2Pname1[item10]} ({$2Peffect1[item10]}) {$2Ppower1[item10]}</option>
            {/section}
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
{/if}
{$Action}
-->
{if $Poison > "0"}
    <form method="post" action="equip.php?poison={$Poison}&amp;step=poison"><input type="submit" value="{$Poisonit}" /> <select name="weapon">
    {section name=item loop=$Poisonitem}
        <option value="{$Poisonid[item]}">{$Poisonitem[item]} ({$Tamount}: {$Poisonamount[item]})</option>
    {/section}
    </select>
    <input type="hidden" value="{$Poison}" name="poison" />
    </form>
    {if $Step == "poison"}
        {$Item}
    {/if}
{/if}


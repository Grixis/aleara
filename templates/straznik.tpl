{strip}
{if $View == ""}
    <p>{$Awelcome}</p>
<ul>

<li><a href="straznik.php?view=poll">Dodaj Ankietę</a></li><br>
<li><a href="straznik.php?view=czat">Zablokuj/odblokuj wiadomości od gracza na czacie </a></li><br>
<li><a href="straznik.php?view=banmail">Zablokuj/Odblokuj wiadomości od gracza na poczcie  </a></li><br>


<li><a href="straznik.php?view=censorship">Dodaj/usuń słowo do listy słów zabronionych    </a></li><br>
<li><a href="straznik.php?view=jail">Wyślij gracza do więzienia     </a></li><br>
<li><a href="straznik.php?view=jailbreak">Uwolnij gracza z więzienia     </a></li><br>
<li><a href="straznik.php?view=changenick">Zmień graczowi imię lub avek     </a></li><br>
<li><a href="straznik.php?view=poczta">Wyślij wiadomość do wszystkich graczy      </a></li><br>
</ul>



<br>

{/if}
<br>
{if $View == "addreps"}
<form method="post" action="straznik.php?view=addreps">
    {$smarty.const.T_PLAYER_ID}: <input type="text" name="id"><br>
    {$smarty.const.T_AMOUNT}: <input type="text" name="amount"><br>
    {$smarty.const.T_DESC}: <textarea name="description" cols="30" rows="20">
    </textarea><br>
    <input type="submit" value="{$smarty.const.A_SEND}">
</form>
{/if}

{if $View == "addtext"}
    {$Admininfo}<br />
    {$Admininfo2}<br />
    {$Admininfo3}<br />
    {$Admininfo4}<br /><br />
    {$Admininfo5}:
    <table width="100%">
        {section name=straznik2 loop=$Ttitle}
            <tr>
                <td>{$Ttitle[straznik2]} ({$Tauthor2}: {$Tauthor[straznik2]})</td>
                <td><a href="straznik.php?view=addtext&amp;action=modify&amp;text={$Tid[straznik2]}">{$Amodify}</a></td>
                <td><a href="straznik.php?view=addtext&amp;action=add&amp;text={$Tid[straznik2]}">{$Aadd}</a></td>
                <td><a href="straznik.php?view=addtext&amp;action=delete&amp;text={$Tid[straznik2]}">{$Adelete}</a></td>
            </tr>
        {/section}
    </table>

    {if $Action == "modify"}
        <form method="post" action="straznik.php?view=addtext&amp;action=modify&amp;text={$Tid}">
            {$Ttitle2}: <input type="text" name="ttitle" value="{$Ttitle}" /><br />
            {$Tbody2}: <br /><textarea name="body" rows="30" cols="60">{$Tbody}</textarea><br />
            <input type="hidden" name="tid" value="{$Tid}" />
            <input type="submit" value="{$Achange}" />
        </form>
    {/if}
{/if}

{if $smarty.get.view == "bugreport"}
    {if $smarty.get.step != ""}
		{if $Bug[6] == "0"}
			<form method="post" action="">
				<input type="hidden" name="programmer" value=1 />
				<input type="submit" value="{$smarty.const.BUG_REPAIR}" />
			</form>
			{$BugMessage}
		{else}
			<form method="post" action="">
				<input type="hidden" name="programmer" value=0 />
				<input type="submit" value="{$smarty.const.BUG_LEAVE}" />
			</form>
			{$BugMessage}
			<p>{$smarty.const.BUG_PROGRAMMER} <b>{$Programmer}</b></p>
		{/if}
        <b>{$smarty.const.BUG_NAME}:</b> {$Bug[2]}<br />
        <b>{$smarty.const.BUG_TYPE}:</b> {$BugType}<br />
        <b>{$smarty.const.BUG_LOC}:</b> {$Bug[4]}<br />
        <b>{$smarty.const.BUG_DESC}:</b> {$Bug[5]}<br />
        <form method="post" action="straznik.php?view=bugreport&amp;step={$smarty.get.step}"  onsubmit="if (this.bugcomment.value=='') {literal}{{/literal} return confirm('{$smarty.const.EMPTY_COMMENT}') } else {literal}{{/literal} return true; }">
            <b>{$smarty.const.BUG_ACTIONS}:</b> <select name="actions">
                {section name=k loop=$Options}
                    <option value="{$Actions[k]}">{$Options[k]}</option>
                {/section}
            </select><br />
            <b>{$smarty.const.BUG_COMMENT}:</b> <textarea name="bugcomment" rows="5" cols="50"></textarea><br /><br />
            <input type="submit" value="{$smarty.const.A_MAKE}" />
        </form>
    {else}
        <table align="center" width="100%">
            <tr>
                <th width="5%">{$smarty.const.BUG_ID}</th>
                <th width="10%">{$smarty.const.BUG_REPORTER}</th>
                <th width="15%">{$smarty.const.BUG_TYPE}</th>
                <th width="30%">{$smarty.const.BUG_LOC}</th>
                <th width="40%">{$smarty.const.BUG_NAME}</th>
            </tr>
			{section name=k loop=$Bugs}
			<tr {if $Bugs[k][5] != "0"}class="bugrepair"{/if}>
				<td width="5%" align="center"><a {if $Bugs[k][5] != "0"}class="bugrepair" {/if}href="straznik.php?view=bugreport&amp;step={$Bugs[k][0]}">{$Bugs[k][0]}</td>
				<td width="10%" align="center">{$Bugs[k][1]}</td>
				<td width="15%" align="center">{if $Bugs[k][3] == 'text'}{$smarty.const.BUG_TEXT}{else}{$smarty.const.BUG_CODE}{/if}</td>
				<td width="30%" align="center">{$Bugs[k][4]|wordwrap:25:"\n":true}</td>
				<td width="40%" align="center">{$Bugs[k][2]|wordwrap:25:"\n":true}</td>
			</tr>
			{/section}
		</table>
    {/if}
{/if}
{if $View == "pary"}
    <form method="post" action="straznik.php?view=pary&step=add">
    ID Kobiety: <input type="text" name="prisoner"><br>
	ID Mężczyzny: <input type="text" name="prisonerp"><br>
    Przyczyna: <textarea name="verdict"></textarea><br>
    Koszt rozwodu: <input type="text" name="cost"><br>
    <input type="submit" value="Dodaj"></form>
{/if}
{if $View == "banmail"}
    {$Blocklist}<br />
    {section name=banmail loop=$List1}
        ID {$List1[banmail]}<br />
    {/section}
    <form method="post" action="straznik.php?view=banmail&amp;step=mail">
    <select name="mail">
        <option value="blok">{$Ablock}</option>
        <option value="odblok">{$Aunblock}</option>
    </select>
    {$Mailid} <input type="text" name="mail_id" size="5" /><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}

{if $View == "playerquest"}
    <form method="post" action="straznik.php?view=playerquest&amp;step=add">
        <input type="submit" value="{$Aadd}" /> {$Addplayer} <input type="text" name="pid" size="5" /> {$Toquest} <input type="text" name="qid" size="5" />.
    </form>
{/if}

{if $View == "innarchivef"}
    {if $Text[0] != ""}
        {section name=player loop=$Text}
            <b>{$Author[player]} {$Cid}:{$Senderid[player]}</b>: {$Text[player]}<br />
        {/section}
    {/if}
    {$Previous} {$Next}
{/if}

{if $View == "changelog"}
    {$Changeinfo}<br /><br />
    <form method="post" action="straznik.php?view=changelog&amp;step=add">
        {$Changelocation}: <input type="text" name="location" /><br />
        {$Changetext}: <textarea name="changetext" rows="5" cols="30"></textarea><br /><br />
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}


{if $View == "meta"}
    {$Metainfo}
    <form method="post" action="straznik.php?view=meta&amp;step=modify">
        Meta keywords ({$Metakey}): <input type="text" name="metakey" size="30"/><br />
        Meta description ({$Metadesc}): <input type="text" name="metadesc" size="40" /><br />
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "forums"}
    {$Catlist}<br />
    {section name=forum loop=$Catname}
        <a href="straznik.php?view=forums&amp;id={$Catid[forum]}">{$Catname[forum]}</a><br />
    {/section}<br /><br />
    <form method=post action="straznik.php?view=forums&amp;id={$Catid2}&amp;step=add">
        {$Tname}: <input type="text" name="catname" value="{$Tcatname}" /><br />
        {$Tdesc}: <textarea name="catdesc" rows="5" cols="30">{$Tcatdesc}</textarea><br />
        {$Tlang}: <select name="catlang">
            {section name=forum2 loop=$Catlang}
                <option value="{$Catlang[forum2]}" {$Tlangsel[forum2]}>{$Catlang[forum2]}</option>
            {/section}
        </select><br />
        {$Twrite}: <br />
        {section name=forum3 loop=$Toptionname}
            <input type="checkbox" name="{$Toptionw[forum3]}" {$Toptionwsel[forum3]} />{$Toptionname[forum3]}<br />
        {/section}
        {$Tvisit}: <br />
        {section name=forum4 loop=$Toptionname}
            <input type="checkbox" name="{$Toptionv[forum4]}" {$Toptionvsel[forum4]} />{$Toptionname[forum4]}<br />
        {/section}
        <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "mill"}
    <form method="post" action="straznik.php?view=mill&amp;step=mill">
    {$Sname}: <input type="text" name="nazwa" /> <br />
    {$Scost}: <input type="text" name="cena" /> <br />
    {$Samount}: <input type="text" name="amount" /><br />
    {$Slevel}: <input type="text" name="poziom" /> <br />
    {$Stype}: <select name="type" id="type">
    <option value="B">{$Sbow}</option>
    <option value="R">{$Sarrow}</option>
    </select><br />
    <br /><input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "donator"}
    {if $Step == ""}
        {$Donatorinfo}<br />
        <form method="post" action="straznik.php?view=donator&amp;step=add">
            {$Pname}: <input type="text" name="plname" /><br />
            <input type="submit" value="{$Aadd}" />
        </form>
    {/if}
{/if}

{if $View == "clearf"}
    {if $Step == ""}
    {$Fquestion}<br />
    - <a href="straznik.php?view=clearf&amp;step=Y">{$Ayes}</a><br />
    {/if}
{/if}

{if $View == "monster2"}
    {if $Step == ""}
        <form method="post" action="straznik.php?view=monster2&amp;step=next">
            {$Mname}: <select name="mid">
                {section name=monster2 loop=$Mid}
                    <option value="{$Mid[monster2]}">{$Names[monster2]}</option>
                {/section}
            </select><br />
            <input type="submit" value="{$Anext}" />
        </form>
    {/if}
    {if $Step == "next"}
        <form method="post" action="straznik.php?view=monster2&amp;step=monster">
            {$Tmname}: <input type="text" name="name" value="{$Mname}" /> <br />
            {$Tmlevel}: <input type="text" name="level" value="{$Mlvl}" /> <br />
            {$Tmhp}: <input type="text" name="hp" value="{$Mhp}" /> <br />
            {$Tmagi}: <input type="text" name="agility" value="{$Magility}" /> <br />
            {$Tmpower}: <input type="text" name="strength" value="{$Mstrength}" /> <br />
            {$Tmspeed}: <input type="text" name="speed" value="{$Mspeed}" /> <br />
            {$Tmcond}: <input type="text" name="endurance" value="{$Mendurance}" /> <br />
            {$Tmmingold}: <input type="text" name="credits1" value="{$Mcredits1}" /> <br />
            {$Tmmaxgold}: <input type="text" name="credits2" value="{$Mcredits2}" /> <br />
            {$Tmminexp}: <input type="text" name="exp1" value="{$Mexp1}" /> <br />
            {$Tmmaxexp}: <input type="text" name="exp2" value="{$Mexp2}" /> <br />
            {$Tmlocation}: <input type="text" name="location" value="{$Mlocation}" /><br />
            <input type="hidden" name="mid" value="{$Mid}" />
            <input type="submit" value="{$Aedit}" />
        </form>
    {/if}
{/if}

{if $View == "jailbreak"}
    {if $Step == ""}
        <form method="post" action="straznik.php?view=jailbreak&amp;step=next">
            <input type="submit" value="{$Afree}" /> {$Jailid} <input type="text" name="jid" size="5" />
        </form>
    {/if}
{/if}

{if $View == "poll"}
    {if $Step == ""}
        <form method="post" action="straznik.php?view=poll&amp;step=second">
            {$Tquestion}: <input type="text" name="question" /><br />
            {$Tlang}: <select name="lang">
            {section name=poll2 loop=$Llang}
                <option value="{$Llang[poll2]}">{$Llang[poll2]}</option>
            {/section}
            </select><br />
            {$Tamount}: <input type="text" size="5" name="amount" /><br />
            {$Tdays}: <input type="text" size="5" name="days" /><br />
            <input type="submit" value="{$Anext}" />
        </form>
    {/if}
    {if $Step == "second"}
        {$Tquestion}: {$Question} ({$Llang}) ({$Adays} dni)<br />
        <form method="post" action="straznik.php?view=poll&amp;step=add">
            {section name=poll loop=$Answers}
                {$Tanswer}: <input type="text" name="{$Answers[poll]}" /><br />
            {/section}
            <input type="hidden" name="amount" value="{$Amount}" />
            <input type="hidden" name="pid" value="{$Pollid}" />
            <input type="hidden" name="lang" value="{$Llang}" />
            <input type="submit" value="{$Aadd}" />
        </form>
    {/if}
{/if}

{if $View == "censorship"}
    <form method="post" action="straznik.php?view=censorship&amp;step=modify">
        <select name="action">
            <option value="add">{$Aadd}</option>
            <option value="delete">{$Adelete}</option>
        </select>
        {$Tword} <input type="text" name="bword" /><br />
        <input type="submit" value="{$Amake}" />
    </form>
    {$Wordslist}:<br />
    {section name=censor loop=$Words}
        {$Words[censor]}<br />
    {/section}
{/if}

{if $View == "register" || $View == "close"}
    <form method="post" action="straznik.php?view={$View}&amp;step=close">
    <select name="close">
    <option value="close">{$Gclose}</option>
    <option value="open">{$Gopen}</option>
    </select><br />
    {$Ifclose}:<br />
    <textarea name="reason" rows="13" cols="55"></textarea><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}

{if $View == "mail"}
    <form method="post" action="straznik.php?view=mail&amp;step=send">
    {$Mailinfo}<br />
    <textarea name="message"></textarea><br />
    <input type="submit" value="{$Asend}" /></form>
{/if}

{if $View == "bridge"}
    <form method="post" action="straznik.php?view=bridge&amp;step=add">
    {$Bquestion}: <textarea name="question"></textarea><br />
    {$Banswer}: <textarea name="answer"></textarea><br />
    <input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "jail"}
    {if isset($Confirm)}
        {$Fquestion}<br />
        <form method="post" action="straznik.php?view=jail&amp;step=add&amp;confirm=Y">
        <input type="hidden" name="prisoner" value="{$Prisoner}" />
        <input type="hidden" name="verdict" value="{$Verdict}" />
        <input type="hidden" name="time"  value="{$Duration}" />
        <input type="hidden" name="cost"  value="{$Fine}" />
        <input type="submit" value="{$Ayes}" /></form>
    {else}
        <form method="post" action="straznik.php?view=jail&amp;step=add">
        {$Jailid}: <input type="text" name="prisoner" /><br />
        {$Jailreason}: <textarea name="verdict"></textarea><br />
        {$Jailtime}: <input type="text" name="time" /><br />
        {$Jailcost}: <input type="text" name="cost" /><br />
        <input type="submit" value="{$Aadd}" /></form>
    {/if}
{/if}

{if $View == "add"}
    <form method="post" action="straznik.php?view=add&amp;step=add">
    {$Addid} <input type="text" name="aid" /> {$Newrank}
    <select name="rank">
    <option value="Member">{$Rmember}</option>
    <option value="Admin">{$Rking}</option>
    <option value="straznik">{$Rstraznik}</option>
    <option value="Sędzia">{$Rjudge}</option>
    <option value="Ławnik">{$Rjudge2}</option>
    <option value="Prawnik">{$Rlawyer}</option>
    <option value="Żebrak">{$Rbeggar}</option>
    <option value="Magazynier">{$Rbarbarian}</option>
    <option value="Bibliotekarz">{$Rscribe}</option>
    <option value="Rycerz">{$Rknight}</option>
    <option value="Dama">{$Rlady}</option>
    <option value="Marszałek Rady">{$Rcount}</option>
    <option value="Poseł">{$Rcount2}</option>
    <option value="Kanclerz Sądu">{$Rjudge3}</option>
    <option value="Redaktor">{$Rredactor}</option>
    <option value="Karczmarka">{$Rinnkeeper}</option>
    <option value="Prokurator">{$Rprocurator}</option>
    <option value="Ksiądz">{$Rksiadz}</option>
    <option value="Magazynier">{$Rmagazynier}</option>
    <option value="Strażnik Miejski">{$Rstraznik}</option>
    <option value="Magazynier">{$Rmurgrabia}</option>
    <option value="Żul spod mostu">{$Rzul}</option>
	<option value="{$smarty.const.RANK_TECH}">{$smarty.const.RANK_TECH}</option>
    </select>. <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "equipment"}
    <form method="post" action="straznik.php?view=equipment&amp;step=add">
    {$Itemname} <input type="text" name="name" /> {$Hasa}
    <select name="type" id="type">
    <option value="W">{$Iweapon}</option>
    <option value="A">{$Iarmor}</option>
    <option value="H">{$Ihelmet}</option>
    <option value="L">{$Ilegs}</option>
    <option value="S">{$Ishield}</option>
    <option value="B">{$Ibow}</option>
    <option value="R">{$Iarrows}</option>
    <option value="T">{$Istraznik}</option>
    <option value="C">{$Icape}</option>
    </select>
    <br /> {$Iwith}
    <input name="power" type="number" id="power" /> {$Ipower}<br />
    {$Icost} <input type="number" name="cost" />
    <br /> {$Iminlev}
    <input type="number" name="minlev" /><br /> {$Iagi}
    <input name="zr" type="number" /><br /> {$Ispeed}
    <input type="number" name="szyb" /><br />
    {$Idur}<input type="number" name="maxwt" /><br />
    {$Irepair}<input type="number" name="repair" /><br />
    <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "donate"}
    <form method="post" action="straznik.php?view=donate&amp;step=donated">
    {$Donateid}: <input type="text" name="id" /> <br />
	{section name=res loop=$Resources}
		<input type="radio" name="what" {if $smarty.section.res.index == 0} checked="true"{/if}value="{$Resources[res]}"/> {$ResourcesNames[res]}<br/>
	{/section}
    {$Donateamount}: <input type="text" name="amount"/><br/>
    <input type="submit" value="{$Adonate}" /></form>
{/if}


{if $View == "takeaway"}
    {$Takeinfo}<br />
    <form method="post" action="straznik.php?view=takeaway&amp;step=takenaway">
    <table>
        <tr>
            <td>{$Takeid}:</td><td><input type="text" name="id" size="5" /></td>
        </tr>
        <tr>
            <td>{$Takeamount}:</td><td><input type="text" name="taken" /></td>
        </tr>
        <tr>
            <td>{$Treason}</td><td><textarea name="verdict"></textarea></td>
        </tr>
        <tr>
            <td>{$Tinjured}</td><td><input type="text" name="id2" size="5" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="{$Atakeg}" /></td>
        </tr>
    </table>
    </form>
{/if}

{if $View == "monster"}
    <form method="post" action="straznik.php?view=monster&amp;step=monster">
    {$Mname}: <input type="text" name="nazwa" /> <br />
    {$Mlevel}: <input type="text" name="poziom" /> <br />
    {$Mhp}: <input type="text" name="pz" /> <br />
    {$Magi}: <input type="text" name="zr" /> <br />
    {$Mpower}: <input type="text" name="sila" /> <br />
    {$Mspeed}: <input type="text" name="speed" /> <br />
    {$Mcond}: <input type="text" name="endurance" /> <br />
    {$Mmingold}: <input type="text" name="minzl" /> <br />
    {$Mmaxgold}: <input type="text" name="maxzl" /> <br />
    {$Mminexp}: <input type="text" name="minpd" /> <br />
    {$Mmaxexp}: <input type="text" name="maxpd" /> <br />
    {$Mlocation}: <select name="location">
        <option value="Altara">{$Mcity1}</option>
        <option value="Ardulith">{$Mcity2}</option>
        <option value="Cytadela">{$Mcity3}</option>
    </select><br />
    <input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "kowal"}
    <form method="post" action="straznik.php?view=kowal&amp;step=kowal">
    {$Sname}: <input type="text" name="nazwa" /> <br />
    {$Scost}: <input type="text" name="cena" /> <br />
    {$Samount}: <input type="text" name="amount" /><br />
    {$Slevel}: <input type="text" name="poziom" /> <br />
    {$Stype}: <select name="type" id="type">
    <option value="W">{$Sweapon}</option>
    <option value="A">{$Sarmor}</option>
    <option value="H">{$Shelmet}</option>
    <option value="L">{$Slegs}</option>
    <option value="S">{$Sshield}</option>
    </select><br />
    {$Stwohand}: <select name="twohand">
        <option value="N">{$Ano}</option>
        <option value="Y">{$Ayes}</option>
    </select>
    <br /><input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "poczta"}
    <table>
    <form method="post" action="straznik.php?view=poczta&amp;step=send">
    <tr><td>{$Pmsubject}:</td><td><input type="text" name="subject" /></td></tr>
    <tr><td valign="top">{$Pmbody}:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Asend}" /></td></tr>
    </form></table>
{/if}

{if $View == "czat"}
    {$Blocklist}<br />
    {section name=player loop=$List1}
        ID {$List1[player]}<br />
    {/section}
    <form method="post" action="straznik.php?view=czat&amp;step=czat">
    <select name="czat">
        <option value="blok">{$Ablock}</option>
        <option value="odblok">{$Aunblock}</option>
    </select>
    {$Chatid} <input type="text" name="czat_id" size="5" /> {$Ona} <input type="text" size="5" name="duration" value="1" />{$Tdays}<br />
    <textarea name="verdict"></textarea><br />
    <input type="submit" value="{$Amake}" /></form>
{/if}

{if $View == "czary"}
    <form method="post" action="straznik.php?view=czary&amp;step=add">
    {$Spellname} <input type="text" name="name" /> {$Hasas}
    <select name="type">
    <option value="B">{$Sbattle}</option>
    <option value="O">{$Sdefense}</option>
    </select><br />
     {$Swith} <input name="power" type="number" /> {$Spower}<br /> 
    {$Scost} <input type="number" name="cost" /><br /> 
    {$Sminlev} <input type="number" name="minlev" />
    <input type="submit" value="{$Aadd}" /></form>
{/if}

{if $View == "changenick"}
    {if !$Action}
    <p>{$Info}</p>
        <form method="post" action="staff.php?view=changenick&amp;action=nick">
            {$Changename1} <input type="text" name="id" size="5" /> {$Changename2} <input type="text" name="name" size="20" value="{$Defaultname}" /><br />
            {$Changereason}: <br /><textarea name="reason" rows="3" cols="40">{$Reason1}</textarea><br />
        <input type="submit" value="{$Save}" />
        </form>
    <br /><br />
      
      
      
       <form method="post" action="staff.php?view=changenick&amp;action=profile">
            Skasuj avatar gracza. ID gracza: <input type="text" name="id" size="5" /> 
        <input type="submit" value="{$Save}" />
        </form>
      
      
      
      
   
    {else}
        <p>{$Currentinfo} <b><a href="view.php?view={$VictimID}">{$Victimname}</a></b>:</p>
        <p>{$Current}</p>
        <form method="post" action="staff.php?view=changenick&amp;action=profile">
            <textarea name="profile" rows="15" cols="50">{$Editable}</textarea>
            <p>{$Changereason}:</p><textarea name="reason" rows="5" cols="50">{$Reason2} {$Reason3}</textarea><br />
            <input type="hidden" name="id" value="{$VictimID}" />
            <input type="submit" value="{$Save}" />
        </form>
    {/if}
{/if}

{$Message}

{if $View != ""}
    <br />(<a href="straznik.php">{$Aback}</a>)
{/if}
{/strip}


{strip}
{if $View == ""}
    
{* Display main menu.*}
  
    
 
{/if}
























{$Message}

{if $View != ""}

{/if}
{/strip}
<br>
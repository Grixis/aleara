<center><IMG SRC="images/locations/ranking.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}<center>
<p>{$smarty.const.RNEXT} <b>{$smarty.now+500|date_format:"%H:%M"}</b></p>
<br />
<table style="border: 1px solid #636f6b;" cellspacing="0" cellpadding="2">
    <tr>
        <th>{$smarty.const.RCOUNTER}</th>
        <th width="150px;">{$smarty.const.RPLAYER}</th>
        
        <th>{$smarty.const.RPOINTS}</th>
    </tr>
    {section name=i loop=$arrStats}
    <tr {if $smarty.section.i.iteration < 4}bgcolor="#003333"{/if}>
        <td>{$smarty.section.i.iteration}.</td>
        <td>{$arrStats[i][1]}</a> ({$arrStats[i][0]})</td>
       
        <td style="text-align:right"><span style="color: orange;">{$arrStats[i][3]}</span></td>
    </tr>
    {/section}
</table>
{/strip}</center>
{strip}
{$Link}

{if $Step == "run"}

    {if $Health > "0" && ($Chance > "0" || $Chance2 < 4)}
        {$Escapesucc} {$Ename}! {$Escapesucc2} {$Expgain} {$Escapesucc3}<br />
        <br />{$Youwant}<br />
        <a href={$Yes}>{$Ayes}</a><br />
        <a href={$No}>{$Ano}</a><br />
    <br>{/if}
<br>{/if}

{if $Health > "0" && $Location == "Góry" && $Step == "" && $Fight == "0" && $Action == ""}

    {$Minfo}<br /><br />
    <form method="post" action="explore.php?action=moutains">
        {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
        <input type="submit" value="{$Awalk}" />
    </form><br />
    <a href="gory.php">{$Ano}</a><br />
<br>{/if}

{if $Action == "moutains" && $Location == "Góry" && $Step == ""}
 
    {$Youfind}{$Enemy}{$Bridge}<br /><br />
    {if $Health > "0" && $Enemy == "" && $Bridge == ""}
        <form method="post" action="explore.php?action=moutains">
            {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
            <input type="submit" value="{$Awalk}" />
        </form><br />
        <a href="gory.php">{$Ano}</a><br />
    <br>{/if}
    {if $Bridge != ""}
        <form method="post" action="explore.php?action=moutains&amp;step=first">
            <input type="submit" value="{$Ayes}" />
            <input type="hidden" name="check" value="first" />
        </form>
        - <a href="explore.php">{$Ano}</a>
    <br>{/if}
<br>{/if}

{if $Action == "moutains" && $Location == "Góry" && $Step != ""}
 
    {if $Step == "first"}
        {$Fquestion}?</b><br />
        <form method="post" action="explore.php?action=moutains&amp;step=second">
            <input type="text" name="fanswer" /><br />
            <input type="submit" value="{$Anext}" />
        </form>
    <br>{/if}
    {if $Step == "second"}
        {if $Answer == "true"}
            {$Squestion}?</b><br />
            <form method="post" action="explore.php?action=moutains&amp;step=third">
                <input type="text" name="sanswer" /><br />
                <input type="submit" value="{$Anext}" />
            </form>
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
    {if $Step == "third"}
        {if $Answer == "true"}
            {$Tquestion}: <b>{$Question}?</b><br />
            <form method="post" action="explore.php?action=moutains&amp;step=forth">
                <input type="hidden" name="number" value="{$Number}" />
                <input type="text" name="tanswer" /><br />
                <input type="submit" value="{$Anext}" />
            </form>
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
    {if $Step == "forth"}
        {if $Answer == "true"}
            {$Qsucc} {$Item} {$Qsucc2}...</i><br />
            (<a href="explore.php"> {$Arefresh}</a>)
        <br>{/if}
        {if $Answer == "false"}
            {$Qfail}
        <br>{/if}
    <br>{/if}
<br>{/if}

{if $Health > "0" && $Location == "Las" && $Step == "" && $Fight == "0" && $Action == ""}

    {$Finfo}<br /><br />
    <form method="post" action="explore.php?action=forest">
        {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
        <input type="submit" value="{$Awalk}" />
    </form><br />
    &raquo; <a href="las.php">{$Ano}</a><br />
<br>{/if}

{if $Action == "forest" && $Location == "Las"}
<center><IMG SRC="images/locations/city3.png"></center>
    {$Youfind}{$Enemy}<br /><br />
    {if $Health > "0" && $Enemy == ""}
        <form method="post" action="explore.php?action=forest">
            {$Howmuch} <input type="text" name="amount" value="0" size="5" /> {$Tenergy}<br />
            <input type="submit" value="{$Awalk}" />
        </form><br />
    &raquo; <a href="las.php">{$Ano}</a><br />
    <br>{/if}
<br>{/if}
{/strip}

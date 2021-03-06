{if $logged_in}

    {include file="$template/header.tpl"}
    {include file="$template/navigation.tpl"}
    
    {* Location Links *}
    <span class="location">&nbsp;&nbsp;<a href="main.php">{$lang.admin_home}</a> / {$lang.admins_nav_admin_accounts}</span>
    
    <br />
    
    {* Across-Page bar *}
    {include file="$template/bar.tpl"}
      
    <br />
    
    <center>
    <img src="templates/{$template}/img/icons/admin-64px.png" border="0" /><br />
    {$lang.admins_displaying_all_accounts}
    </center>
    
    <br /><br />
    
    {if $infobox}
    <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" class="infobox">
      <tr>
        <td align="center"><br />{$infobox}<br /><br /></td>
      </tr>
    </table><br />
    {/if}
    
    <table border="0" cellpadding="2" cellspacing="0" width="600" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="left">{$lang.username}</td>
        <td align="left" width="100">{$lang.first_name}</td>
        <td align="left" width="100">{$lang.last_name}</td>
        <td align="left">{$lang.email}</td>
        <td align="center">{$lang.status}</td>
      </tr>
  

    {if $admins}
        {section name=db loop=$admins}
          <tr class="normal" bgcolor={if $smarty.section.db.iteration is odd}#e1e1e1{else}#d7d7d7{/if} onClick="window.location='manageadmin.php?id={$admins[db].id}'" onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='{if $smarty.section.db.iteration is odd}#e1e1e1{else}#d7d7d7{/if}'>
            <td align="left">{$admins[db].username|default:'&nbsp;'}</td>
            <td align="left">{$admins[db].first_name|default:'&nbsp;'}</td>
            <td align="left">{$admins[db].last_name|default:'&nbsp;'}</td>
            <td align="left">{$admins[db].email_address|default:'&nbsp;'}</td>
            <td align="center">
            {if $admins[db].status eq "active"}
                <font color=green>{$lang.status_active}</font>
            {elseif $admins[db].status eq "suspended"}
                <font color=red>{$lang.status_suspended}</font>
            {else}
                <font color=orange>{$lang.status_unknown}</font>
            {/if}
            &nbsp;</td>
          </tr>
        {/section}
    {else}
      <tr>
        <td colspan="5" align="center">{$lang.admins_no_admin_accounts}</td>
      </tr>
    {/if}
    </table>
    
    <br /><br />
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="addadmin.php"><img style="padding-bottom:8px" src="templates/{$template}/img/icons/admin_add-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text">{$lang.admins_icon_add_admin}</span></a></td>
      </tr>
    </table>

    {* All icons for this page and theme *}
    <table border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td>
            {section name=page loop=$icons}
                <table border="0" cellpadding="12" cellspacing="5" align="left">
                  <tr>
                    <td align="center">
                        <a href="{$icons[page].href}"><img style="padding-bottom:8px" src="templates/{$template}/img/icons/{$icons[page].image}" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text">{$icons[page].image_text}</a></span>
                    </td>
                  </tr>
                </table>
            {/section}
        </td>
      </tr>
    </table>

    {include file="$template/footer.tpl"}

{/if}

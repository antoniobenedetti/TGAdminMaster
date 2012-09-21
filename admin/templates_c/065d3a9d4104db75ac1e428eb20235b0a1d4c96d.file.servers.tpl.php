<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 22:09:17
         compiled from ".\templates\default\servers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14322505b77ed7ea8f9-58022074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065d3a9d4104db75ac1e428eb20235b0a1d4c96d' => 
    array (
      0 => '.\\templates\\default\\servers.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14322505b77ed7ea8f9-58022074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'type' => 0,
    'template' => 0,
    'lang' => 0,
    'infobox' => 0,
    's_sort' => 0,
    'page' => 0,
    'settings' => 0,
    'highlight' => 0,
    'total_pages' => 0,
    'total_rows' => 0,
    'server_userid' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b77eda7d363_24859249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b77eda7d363_24859249')) {function content_505b77eda7d363_24859249($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <br /><br />
    
    <div align="center">
    <b>
      <?php if ($_smarty_tpl->tpl_vars['type']->value=='game'){?>
          <img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/game-64px.png" name="icon_image" width="64" height="64" border="0"><br />
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_displ_game_srv'];?>

      <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='voip'){?>
          <img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/voice_server.png" name="icon_image" width="64" height="64" border="0"><br />
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_displ_voice_srv'];?>

      <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='other'){?>
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_displ_other_srv'];?>

      <?php }else{ ?>
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_displ_all_srv'];?>

      <?php }?>
    </b>
    </div>
    
    
    <br /><br />
    
    
    <?php if ($_smarty_tpl->tpl_vars['infobox']->value){?>
    <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" class="infobox">
      <tr>
        <td align="center"><br /><?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>
<br /><br /></td>
      </tr>
    </table><br />
    <?php }?>
    
    <div align="center">
        <div id="srv_action_result"></div>
    </div>
    
    <table border="0" cellpadding="2" cellspacing="0" width="95%" align="center" class="tablez" style="border-radius:6px;">
      <tr class="table_title" height="30">
        <td align="left" width="20">&nbsp;</td>
        <td align="left" width="170"><a href="servers.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&order=server&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server'];?>
</a></td>
        <td align="left" width="90"><a href="servers.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&order=username&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</a></td>
        <td align="left" width="150"><a href="servers.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&order=info&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_conn_info'];?>
</a></td>
        <td align="left" width="130"><a href="servers.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&order=description&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</a></td>
        <td align="center" width="60"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</td>
        <td align="center" width="35">&nbsp;</td>
        <td align="center" width="40">&nbsp;</td>
      </tr>
  

    <?php if ($_smarty_tpl->tpl_vars['settings']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['settings']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['db']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['db']['total']);
?>
          
          
          <?php if ($_smarty_tpl->tpl_vars['highlight']->value==$_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id']){?>
            <tr title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['srv_view_info'];?>
" class="normal" style="background:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/highlight_bg.png');" onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='#fbfbef'>
          <?php }else{ ?>
          <tr title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['srv_view_info'];?>
" class="normal" bgcolor=<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?> onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?>'>
          <?php }?>
            <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/servers/small/<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['server'];?>
.png" border="0" width="18" height="18" /></td>
            <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'"><?php echo stripslashes($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['long_name']);?>
</td>
            <td align="left"><a href="manageclient.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['userid'];?>
" title="View User Info"><?php echo (($tmp = @stripslashes($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['username']))===null||$tmp==='' ? '<i>Unknown</i>' : $tmp);?>
</a></td>
            <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" align="left" ><font color="blue"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['ip'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
<b>:</b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['port'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</font></td>
            <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" align="left">
            <?php if (strlen($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['description'])>15){?>
                <?php echo substr(stripslashes($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['description']),0,15);?>
 <i>...</i>
            <?php }else{ ?>
                <?php echo stripslashes($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['description']);?>

            <?php }?>
            </td>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['creation_status']=="complete"){?>
                <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" align="center">
                      <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['current_status']=="online"){?>
                          <font color="green"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_online'];?>
</b></font>
                      <?php }elseif($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['current_status']=="offline"){?>
                          <font color="red"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_offline'];?>
</b></font>
                      <?php }else{ ?>
                          <font color="orange"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_unknown'];?>
</font>
                      <?php }?>
                </td>
                <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" align="center">
                  <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['current_maxplayers']){?>
                    <?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['current_numplayers'];?>
/<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['current_maxplayers'];?>

                  <?php }else{ ?>
                    &nbsp;
                  <?php }?>
                </td>
                <td align="center">
                    <span style="cursor:pointer;" onClick="javascript:confirmStopServer(<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['srv_stop'];?>
">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/manage/stop.png" border="0" width="18" height="18" />
                    </span>&nbsp;
                    <span style="cursor:pointer;" onClick="javascript:confirmRestartServer(<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['srv_restart'];?>
">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/manage/restart.png" border="0" width="18" height="18" />
                    </span>
                </td>
            <?php }else{ ?>
                <td onClick="window.location='manageserver.php?id=<?php echo $_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" colspan="3" style="border-radius:6px;"><font color="blue"><?php echo $_smarty_tpl->tpl_vars['lang']->value['srv_creating'];?>
 ...</font></td>
            <?php }?>
          </tr>
        <?php endfor; endif; ?>
    <?php }else{ ?>
      <tr>
        <td colspan="8" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_displ_no_srv'];?>
</td>
      </tr>
    <?php }?>
    </table>
    
    <br />
    
    
    <!-- PAGING -->
    <div align="center">
        <div style="width:90%;height:50px;text-align:center;">
        <?php if ($_smarty_tpl->tpl_vars['total_pages']->value>1){?>
        Page: 
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['total_pages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->getVariable('smarty')->value['section']['foo']['index']){?>
                    <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>

                <?php }else{ ?>
                    <a href="servers.php?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&p=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
" style="text-decoration:none;font-weight:bold;"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</a> 
                <?php }?>
            <?php endfor; endif; ?>
        <br /><br />
        <?php }?>        
        <span style="font-size:9pt;">Total <?php echo $_smarty_tpl->tpl_vars['lang']->value['servers'];?>
: <?php echo $_smarty_tpl->tpl_vars['total_rows']->value;?>
</span>
        </div>
    </div>
    <!-- /PAGING -->
    
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="createserver.php?<?php if ($_smarty_tpl->tpl_vars['server_userid']->value){?>id=<?php echo $_smarty_tpl->tpl_vars['server_userid']->value;?>
&<?php }?>type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/add_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
server.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clsrv_create_srv'];?>
</span></a></td>
      </tr>
    </table>

    
    <table border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['icons']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
                <table border="0" cellpadding="12" cellspacing="5" align="left">
                  <tr>
                    <td align="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['icons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['href'];?>
"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/<?php echo $_smarty_tpl->tpl_vars['icons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['image'];?>
" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['icons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['image_text'];?>
</a></span>
                    </td>
                  </tr>
                </table>
            <?php endfor; endif; ?>
        </td>
      </tr>
    </table>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>
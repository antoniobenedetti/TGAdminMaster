<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:33:07
         compiled from ".\templates\default\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25879505b6163b75c37-35603426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a288f296c1dc891b550144ab23babfa91d5092' => 
    array (
      0 => '.\\templates\\default\\main.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25879505b6163b75c37-35603426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'template' => 0,
    'lang' => 0,
    'userid' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b6163c341f6_61270940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b6163c341f6_61270940')) {function content_505b6163c341f6_61270940($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    <span class="location">&nbsp;&nbsp;Admin Home</span>
    
    <br />
    
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="servers.php?type=game"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/game-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_game_servers'];?>
</span></a></td>
        <td align="center"><a href="servers.php?type=voip"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/voip-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_voice_servers'];?>
</span></a></td>
        <td align="center"><a href="clients.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/clients-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_clients'];?>
</span></a></td>
        <td align="center"><a href="admins.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/admin-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_admins'];?>
</span></a></td>
        <td align="center"><a href="tickets.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/tickets_64.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_tickets'];?>
</span></a></td>
      </tr>
      <tr align="center">
        <td align="center"><a href="configuration.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/server.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_gp_settings'];?>
</span></a></td>
        <td align="center"><a href="archives.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/template_64.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_templates'];?>
</span></a></td>
        <td align="center"><a href="defaultservers.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/supported_games-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['suppsrv_icon_default_srv'];?>
</span></a></td>
        <td align="center"><a href="network.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/network2.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_network'];?>
</span></a></td>
        <td align="center"><a href="editadmin.php?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/admin-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_settings'];?>
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
<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:38:46
         compiled from ".\templates\default\clients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:677505b62b6350558-98652751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '758873b7386c40dadfcf35aad7308b7c42cf0e38' => 
    array (
      0 => '.\\templates\\default\\clients.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677505b62b6350558-98652751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'template' => 0,
    'infobox' => 0,
    's_sort' => 0,
    'page' => 0,
    'users' => 0,
    'total_pages' => 0,
    'total_rows' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b62b64ea866_87140070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b62b64ea866_87140070')) {function content_505b62b64ea866_87140070($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['clients_nav_client_accounts'];?>
</span>
    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
    <br />
    
    <center>
    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/clients-64px.png" border="0" /><br />
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['clients_displaying_all_accounts'];?>

    </center>
    
    <br /><br />
    
    <?php if ($_smarty_tpl->tpl_vars['infobox']->value){?>
    <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" class="infobox">
      <tr>
        <td align="center"><br /><?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>
<br /><br /></td>
      </tr>
    </table><br />
    <?php }?>
    
    <table border="0" cellpadding="2" cellspacing="0" width="600" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="left"><a href="clients.php?order=username&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</a></td>
        <td align="left" width="100"><a href="clients.php?order=first_name&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['first_name'];?>
</a></td>
        <td align="left" width="100"><a href="clients.php?order=last_name&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_name'];?>
</a></td>
        <td align="left"><a href="clients.php?order=email_address&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</a></td>
        <td align="center"><a href="clients.php?order=status&sort=<?php if ($_smarty_tpl->tpl_vars['s_sort']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>&p=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" style="text-decoration:none;color:#FFF;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</a></td>
      </tr>


    <?php if ($_smarty_tpl->tpl_vars['users']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <tr class="normal" bgcolor=<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?> onClick="window.location='manageclient.php?id=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?>'>
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['username'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['first_name'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['last_name'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['email_address'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['status']=="active"){?>
                <font color=green><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_active'];?>
</font>
            <?php }elseif($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['status']=="suspended"){?>
                <font color=red><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_suspended'];?>
</font>
            <?php }else{ ?>
                <font color=orange><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_unknown'];?>
</font>
            <?php }?>
            &nbsp;</td>
          </tr>
        <?php endfor; endif; ?>
    <?php }else{ ?>
      <tr>
        <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clients_no_client_accounts'];?>
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
                    <a href="clients.php?p=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
" style="text-decoration:none;font-weight:bold;"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'];?>
</a> 
                <?php }?>
            <?php endfor; endif; ?>
        <br /><br />
        <?php }?>        
        <span style="font-size:9pt;">Total <?php echo $_smarty_tpl->tpl_vars['lang']->value['main_clients'];?>
: <?php echo $_smarty_tpl->tpl_vars['total_rows']->value;?>
</span>
        </div>
    </div>
    <!-- /PAGING -->
    
    <br />
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="addclient.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/clients_add-64px.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clients_icon_add_client'];?>
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
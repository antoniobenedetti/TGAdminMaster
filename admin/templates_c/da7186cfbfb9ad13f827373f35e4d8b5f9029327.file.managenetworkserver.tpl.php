<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 22:09:22
         compiled from ".\templates\default\managenetworkserver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15939505b77f2b99d00-62919663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7186cfbfb9ad13f827373f35e4d8b5f9029327' => 
    array (
      0 => '.\\templates\\default\\managenetworkserver.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15939505b77f2b99d00-62919663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'server_details' => 0,
    'template' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b77f2ce3e44_82439063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b77f2ce3e44_82439063')) {function content_505b77f2ce3e44_82439063($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <a href="network.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['network'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_title'];?>

    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
      
    <br /><br />
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['server_details']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    
    
    
    
    <script type="text/javascript">
    <!--
    function confirmation()
    {
        var answer = confirm("<?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_confirm_delete'];?>
")
        if (answer)
        {
            
            window.location = "managenetworkserver.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
"
            
        }
    }
    //-->
    </script>
    
    
    <center><?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_details'];?>
</b></center>
    
    <br />

    <table border="0" cellpadding="1" cellspacing="0" width="600" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><span style="font-weight:normal"><?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['ip'];?>
</span></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['ip_address'];?>
:</b>&nbsp;</td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['ip'];?>
</b></td>
      </tr>
      
      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['date_added'];?>
:</b>&nbsp;</td>
        <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['date_added'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
      </tr>
      
      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['available'];?>
:</b>&nbsp;</td>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['available']=="Y"){?>
              <font color=green><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</b></font>
          <?php }elseif($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['available']=="N"){?>
              <font color=red><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</b></font>
          <?php }else{ ?>
              <font color=orange><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_unknown'];?>
</b></font>
          <?php }?>
        </td>
      </tr>
      
      <tr>
        <td align="right" width="40%"><b>FTP Accounts Directory:</b>&nbsp;</td>
        <td align="left">
            <?php if ($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['accounts_dir']=="invalid"){?>
                <font color=red>Invalid accounts directory;  FTP will not work.</font>
            <?php }elseif($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['accounts_dir']=="valid"){?>
                <font color=green>Correct</font>
            <?php }elseif($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['accounts_dir']=="unknown"){?>
                <font color=orange>Unknown</font>
            <?php }?>
        </td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
:</b>&nbsp;</td>
        <td align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['description']);?>
</td>
      </tr>
      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['location'];?>
:</b>&nbsp;</td>
        <td align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['location']);?>
</td>
      </tr>
      <tr>
        <td align="right" width="40%"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['datacenter'];?>
:</b>&nbsp;</td>
        <td align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['datacenter']);?>
</td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><input type="submit" name="confirm" id="confirm" value=" " onClick="javascript:confirmation()" class="button_delete"></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    <br /><br />
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="editnetworkserver.php?id=<?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/network.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_edit_netsrv'];?>
</span></a></td>
        <td align="center"><a href="remoteinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/info.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['managenetsrv_remote_info'];?>
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
?id=<?php echo $_smarty_tpl->tpl_vars['server_details']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
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
    <?php endfor; endif; ?>
      


    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>
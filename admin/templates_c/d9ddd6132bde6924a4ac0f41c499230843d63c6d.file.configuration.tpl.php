<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:38:40
         compiled from ".\templates\default\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24591505b62b0ee75c3-10942679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ddd6132bde6924a4ac0f41c499230843d63c6d' => 
    array (
      0 => '.\\templates\\default\\configuration.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24591505b62b0ee75c3-10942679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'infobox' => 0,
    'template' => 0,
    'config_version' => 0,
    'languages' => 0,
    'config_language' => 0,
    'config_docroot' => 0,
    'config_company' => 0,
    'config_template' => 0,
    'config_email_pri' => 0,
    'config_email_sec' => 0,
    'config_server_qt' => 0,
    'config_rm_srv_timeout' => 0,
    'config_start_sv_after_create' => 0,
    'config_billing_serverlimit' => 0,
    'config_billing_loadlimit' => 0,
    'config_billing_defports' => 0,
    'api_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b62b10ecb88_03397869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b62b10ecb88_03397869')) {function content_505b62b10ecb88_03397869($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_title'];?>

    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
    <br /><br />
    
    <?php if ($_smarty_tpl->tpl_vars['infobox']->value){?>
    <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" class="infobox">
      <tr>
        <td align="center"><br /><?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>
<br /><br /></td>
      </tr>
    </table><br />
    <?php }?>
    
    
    <form action="configuration.php" method="post" name="testconnection">
    <table border="0" cellpadding="1" cellspacing="0" width="500" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_details'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/network.png" width="64" height="64" border="0" /></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
:&nbsp;</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['config_version']->value;?>
</b></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
:&nbsp;</td>
        <td>
          <select name="lang" style="width:225px">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['langz'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['name'] = 'langz';
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['langz']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['config_language']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']];?>
" selected><?php echo ucwords($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]);?>
</option>
                <?php }else{ ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['langz']['index']]);?>
</option>
                <?php }?>
            <?php endfor; endif; ?>
          </select>
        </td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_docroot'];?>
:&nbsp;</td>
        <td><input type="text" name="docroot" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_docroot']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_company'];?>
:&nbsp;</td>
        <td><input type="text" name="company" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_company']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_template'];?>
:&nbsp;</td>
        <td><input type="text" name="template" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_template']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_prim_email'];?>
:&nbsp;</td>
        <td><input type="text" name="prim_email" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_email_pri']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_sec_email'];?>
:&nbsp;</td>
        <td><input type="text" name="sec_email" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_email_sec']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_server_timeout'];?>
:&nbsp;</td>
        <td><input type="text" name="query_timeout" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_server_qt']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_remote_timeout'];?>
:&nbsp;</td>
        <td><input type="text" name="remote_timeout" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_rm_srv_timeout']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_start_after_create'];?>
:&nbsp;</td>
        <td>
          <select name="start_sv_after_create">
            <?php if ($_smarty_tpl->tpl_vars['config_start_sv_after_create']->value=="Y"){?>
              <option value="Y" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
              <option value="N"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
            <?php }else{ ?>
              <option value="Y"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
              <option value="N" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
            <?php }?>
          </select>
        
        </td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr class="table_title" height="20">
        <td align="center" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_billing_sys'];?>
</td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_billing_srv_limit'];?>
:&nbsp;</td>
        <td><input type="text" name="server_limit" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_billing_serverlimit']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_billing_load_limit'];?>
:&nbsp;</td>
        <td><input type="text" name="load_limit" class="textbox_normal" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['config_billing_loadlimit']->value;?>
"></td>
      </tr>
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_billing_default_ports'];?>
:&nbsp;</td>
        <td>
          <select name="default_ports_only">
            <?php if ($_smarty_tpl->tpl_vars['config_billing_defports']->value=="Y"){?>
              <option value="Y" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
              <option value="N"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
            <?php }else{ ?>
              <option value="Y"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
              <option value="N" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
            <?php }?>
          </select>
        </td>
      </tr>
      
      <tr>
        <td align="right" class="description"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_api_key'];?>
:&nbsp;</td>
        <td><input type="text" name="api_key" class="textbox_important" style="width:220px" value="<?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
" readonly></td>
      </tr>
      
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value=" " class="button_save" /></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    </form>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?>
<?php }} ?>
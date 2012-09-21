<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 22:10:49
         compiled from ".\templates\default\archives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20347505b7849a77761-89849558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e343c474593cf3814d1517d3224303b10f0eb08' => 
    array (
      0 => '.\\templates\\default\\archives.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20347505b7849a77761-89849558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'template' => 0,
    'lang' => 0,
    'archives' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b7849b82a14_01025607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b7849b82a14_01025607')) {function content_505b7849b82a14_01025607($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<br /><br />
<center>
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/template_64.png" border="0" /><br />
<?php echo $_smarty_tpl->tpl_vars['lang']->value['templates_disp_all'];?>

</center>

<br /><br />

<table border="0" cellpadding="2" cellspacing="0" width="700" align="center" class="tablez">
  <tr class="table_title" height="20">
    <td width="30">&nbsp;</td>
    <td align="left" width="200"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server'];?>
</td>
    <td width="200" align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
    <td align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date_added'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</td>
    <td align="center" width="60"><?php echo $_smarty_tpl->tpl_vars['lang']->value['templates_default'];?>
</td>
  </tr>


  <?php if ($_smarty_tpl->tpl_vars['archives']->value){?>
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['archives']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr height="30" bgcolor=<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?> onClick="window.location='managetemplate.php?id=<?php echo $_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?>'>
    <td><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/servers/small/<?php echo $_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['short_name'];?>
.png"></td>
    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['long_name'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['description'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['date_created'];?>
</td>
    <td align="center">
      <?php if ($_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['status']=="complete"){?>
        <font color="green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['managetpl_complete'];?>
</font>
      <?php }elseif($_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['status']=="running"){?>
        <font color="blue"><?php echo $_smarty_tpl->tpl_vars['lang']->value['managetpl_installing'];?>
</font>
      <?php }else{ ?>
        <font color="red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status_unknown'];?>
</font>
      <?php }?>
    </td>
    <td align="center">
      <?php if ($_smarty_tpl->tpl_vars['archives']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['is_default']){?>
        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</b>
      <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>

      <?php }?>
    </td>
  </tr>
  <?php endfor; endif; ?>
  <?php }else{ ?>
    <tr>
      <td colspan="4" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['templates_none_found'];?>
</td>
    </tr>
  <?php }?>
</table>

<br /><br />




<table border="0" cellpadding="2" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
  <tr>
    <td align="center"><a href="createarchive.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/supported_games_add.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['templates_add'];?>
</span></a></td>
  </tr>
</table>





<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }?>
<?php }} ?>
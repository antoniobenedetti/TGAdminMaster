<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:38:39
         compiled from ".\templates\default\tickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16617505b62afa2c034-44765295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fa7b89c3341ef80335443afca50012adbcdf6f' => 
    array (
      0 => '.\\templates\\default\\tickets.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16617505b62afa2c034-44765295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'lang' => 0,
    'template' => 0,
    'ticket_status' => 0,
    'infobox' => 0,
    'tickets' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b62afbbad66_98243454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b62afbbad66_98243454')) {function content_505b62afbbad66_98243454($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    <span class="location">&nbsp;&nbsp;<a href="main.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_home'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_title'];?>
</span>
    
    <br />
    
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
    <br />
    
    <center>
    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/tickets_64.png" border="0" /><br />
    <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_view'];?>
:</b> 
    
    <?php if ($_smarty_tpl->tpl_vars['ticket_status']->value=="open"){?>
      <a href="tickets.php?status=all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_all'];?>
</a> | <a href="tickets.php?status=open"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_open'];?>
</b></a> | <a href="tickets.php?status=closed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_closed'];?>
</a>
    <?php }elseif($_smarty_tpl->tpl_vars['ticket_status']->value=="closed"){?>
      <a href="tickets.php?status=all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_all'];?>
</a> | <a href="tickets.php?status=open"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_open'];?>
</a> | <a href="tickets.php?status=closed"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_closed'];?>
</b></a>
    <?php }elseif($_smarty_tpl->tpl_vars['ticket_status']->value=="all"){?>
      <a href="tickets.php?status=all"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_all'];?>
</b></a> | <a href="tickets.php?status=open"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_open'];?>
</a> | <a href="tickets.php?status=closed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_closed'];?>
</a>
    <?php }else{ ?>
      <a href="tickets.php?status=all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_all'];?>
</a> | <a href="tickets.php?status=open"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_open'];?>
</a> | <a href="tickets.php?status=closed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_closed'];?>
</a>
    <?php }?>
    
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
    
    <table border="0" cellpadding="2" cellspacing="0" width="650" align="center" class="tablez">
      <tr class="table_title" height="20">
        <td align="left" width="160"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_date_created'];?>
</td>
        <td align="left" width="80"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_priority'];?>
</td>
        <td align="left" width="80"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_category'];?>
</td>
        <td align="left" width="130"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_subject'];?>
</td>
      </tr>


    <?php if ($_smarty_tpl->tpl_vars['tickets']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['db'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['db']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['name'] = 'db';
$_smarty_tpl->tpl_vars['smarty']->value['section']['db']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tickets']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <tr height="35" bgcolor=<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?> onClick="window.location='viewticket.php?id=<?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['id'];?>
'" onMouseOver="style.cursor='pointer' ; this.style.backgroundColor='#c3c3c3'" onMouseOut=style.cursor='auto';this.style.backgroundColor='<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['db']['iteration'])){?>#e1e1e1<?php }else{ ?>#d7d7d7<?php }?>'>
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['date_added'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="left">
              <?php if ($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['priority']=="high"){?>
                <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_high'];?>
</b>
              <?php }else{ ?>
                <?php echo ucwords($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['priority']);?>

              <?php }?>
            </td>
            <td align="left"><?php echo ucwords($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['category']);?>
</td>
            
            <td align="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['username'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
            <td align="left"><b>
              <?php if (strlen($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['subject'])>30){?>
                <?php echo substr(stripslashes($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['subject']),0,30);?>

              <?php }else{ ?>
                <?php echo stripslashes($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['db']['index']]['subject']);?>

              <?php }?>
            </b></td>
          </tr>
        <?php endfor; endif; ?>
    <?php }else{ ?>
      <tr>
        <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_none_view'];?>
</td>
      </tr>
    <?php }?>
    </table>
    
    <br /><br />
    
    <table border="0" cellpadding="10" cellspacing="5" align="center" width="500" style="width:500px;table-layout:fixed;word-wrap:break-word;text-align:center">
      <tr align="center">
        <td align="center"><a href="addticket.php"><img style="padding-bottom:8px" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/tickets_add.png" name="icon_image" width="64" height="64" border="0"><br /><span class="icon_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tickets_icon_create'];?>
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
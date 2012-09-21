<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:33:12
         compiled from ".\templates\default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9584505b6168123dc5-73514884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3567ea48d0c6e580f8dfb2c047bf50a0260c5a2' => 
    array (
      0 => '.\\templates\\default\\login.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9584505b6168123dc5-73514884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b6168179167_28075508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b6168179167_28075508')) {function content_505b6168179167_28075508($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<br /><br />

<form method="post" action="login.php">
<table border="0" cellpadding="1" cellspacing="0" align="center" width="400" class="tablez">
  <tr class="table_title">
    <td align="center" height="20" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_title'];?>
</td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <tr>
      <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  <?php }?>
  
  <tr>
    <td align="right" width="40%" style="padding-right:10px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_username'];?>
:</td>
    <td align="left"><input type="text" name="gpx_username" class="textbox_important"></td>
  </tr>
  <tr>
    <td align="right" width="30%" style="padding-right:10px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_password'];?>
:</td>
    <td align="left"><input type="password" name="gpx_password" class="textbox_important"></td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="login" value=" " class="button_login" /></td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
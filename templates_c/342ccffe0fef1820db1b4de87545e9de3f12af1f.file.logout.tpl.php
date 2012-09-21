<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:42:51
         compiled from ".\templates\default\logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19302505b3272862723-58411518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342ccffe0fef1820db1b4de87545e9de3f12af1f' => 
    array (
      0 => '.\\templates\\default\\logout.tpl',
      1 => 1348166043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19302505b3272862723-58411518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b32728b0599_49667390',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b32728b0599_49667390')) {function content_505b32728b0599_49667390($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<meta http-equiv="REFRESH" content="2;url=login.php">

<br /><br />

<table border="0" cellpadding="0" cellspacing="0" align="center" width="400" class="tablez">
  <tr class="table_title">
    <td align="center" height="20" colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout_title'];?>
</td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout_logged_out'];?>
<br /><br /><a href="login.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout_click_to_login'];?>
</a></td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
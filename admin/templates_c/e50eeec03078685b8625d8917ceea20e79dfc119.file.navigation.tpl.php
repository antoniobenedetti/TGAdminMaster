<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:33:07
         compiled from ".\templates\default\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25325505b6163e0a627-26642216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50eeec03078685b8625d8917ceea20e79dfc119' => 
    array (
      0 => '.\\templates\\default\\navigation.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25325505b6163e0a627-26642216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b6163e22325_35064727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b6163e22325_35064727')) {function content_505b6163e22325_35064727($_smarty_tpl) {?><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="20">
  <tr align="center" class="navigation">
    <td align="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_logged_in'];?>
: <b title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_logged_in_current_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></td>
    <td align="right"><a href="logout.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_log_out_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['admin_log_out'];?>
</a>&nbsp;</td>
  </tr>
</table><?php }} ?>
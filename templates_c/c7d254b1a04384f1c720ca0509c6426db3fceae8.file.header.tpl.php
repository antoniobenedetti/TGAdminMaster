<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 21:10:42
         compiled from ".\templates\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2223505b2dda688971-00907407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d254b1a04384f1c720ca0509c6426db3fceae8' => 
    array (
      0 => '.\\templates\\default\\header.tpl',
      1 => 1348168240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2223505b2dda688971-00907407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b2dda6a6de7_32724536',
  'variables' => 
  array (
    'company' => 0,
    'pagetitle' => 0,
    'template' => 0,
    'nonav' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b2dda6a6de7_32724536')) {function content_505b2dda6a6de7_32724536($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/style.css" />
<script type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/scripts/jquery.js"></script>
<script type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/scripts/dd.js"></script>
<script type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/scripts/gpx.js"></script>
</head>

<body>
          
<table border="0" cellpadding="0" cellspacing="0" align="center" width="850" style="border-left:1px solid #999999;border-right:1px solid #999999;border-bottom:1px solid #777;box-shadow:-1px 5px 10px #6D7B8D;-moz-box-shadow:-1px 0px 10px #6D7B8D;-webkit-box-shadow:-1px 0px 10px #6D7B8D;">
  <tr>
    <td align="center" height="80" colspan="6" background="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo_grad.png"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" style="display:block;"></td>
  </tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['nonav']->value!=1){?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="850" id="hdr_nav">
  <tr align="center" height="43" style="vertical-align:middle" valign="middle">
      <td style="vertical-align:middle" valign="middle" colspan="6" height="43" align="center" background="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/bg.png" bgcolor="#053a68">
          <ul id="jsddm" style="vertical-align:middle" width="200">
              <li><a href="main.php" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/main.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_main'];?>
</span></a></li>
	      <li><a href="servers.php?type=game" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/games.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['main_game_servers'];?>
</span></a></li>
	      <li><a href="servers.php?type=voip" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/voip.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['main_voice_servers'];?>
</span></a></li>
              <li><a href="tickets.php" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/support.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['main_tickets'];?>
</span></a></li>
	      <li><a href="editsettings.php" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/settings.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['main_settings'];?>
</span></a></li>
          </ul>
      </td>
  </tr>
</table>
<?php }?>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="847" style="border-bottom:1px solid #999999;border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:-1px 0px 10px #6D7B8D;-moz-box-shadow:-1px 5px 10px #6D7B8D;-webkit-box-shadow:-1px 5px 10px #6D7B8D;">
  <tr>
    <td valign="top" class="center_table" colspan="6" style="border-top:1px solid black">
<?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 20:33:07
         compiled from ".\templates\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15620505b6163c4d7c1-83010832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d254b1a04384f1c720ca0509c6426db3fceae8' => 
    array (
      0 => '.\\templates\\default\\header.tpl',
      1 => 1334478766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15620505b6163c4d7c1-83010832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'pagetitle' => 0,
    'template' => 0,
    'logged_in' => 0,
    'lang' => 0,
    'browser' => 0,
    'browser_ver' => 0,
    'nonav' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505b6163df5ff9_61779234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505b6163df5ff9_61779234')) {function content_505b6163df5ff9_61779234($_smarty_tpl) {?><!DOCTYPE HTML>
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

<?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>

<script type="text/javascript">
$(document).ready(function() {
    // InstantNotifications
    checkNotif();
    $('#divCheckNotify').click(function(event) {
        checkNotif();
        if ($('#boxNotify').is(":visible")) {
            $('#divCheckNotify').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png)");
        }
        else
        {
            getNotif();
            $('#divCheckNotify').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-sel.png)");
        }
        $('#boxNotify').toggle();
    });
    setInterval("checkNotif()", 7000);
    $('#hideNotifyDiv').click(function(event) {
        $('#divCheckNotify').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png)");
        $('#boxNotify').hide();
    });
    // OnlineClients
    onlineClients();
    $('#clientsButton').click(function(event) {
        onlineClients();
        if ($('#boxClients').is(":visible")) {
            $('#clientsButton').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png)");
        }
        else
        {
            getClients()
            $('#clientsButton').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-sel.png)");
        }
        $('#boxClients').toggle();
    });
    setInterval("onlineClients()", 10000);
    $('#hideClientsDiv').click(function(event) {
        $('#clientsButton').css("background-image", "url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png)");
        $('#boxClients').hide();
    });
});
</script>



<table border="0" cellpadding="0" cellspacing="0" align="center" width="344" height="270" id="boxNotify" style="border:1px solid #666;position:fixed;bottom: 0px;right:191px;display:none">
<tr>
  <td style="font-size:8pt;font-weight:bold;color:#444;background-image:url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav_grad_40px.png)" valign="middle" height="20" valign="top" id="hideNotifyDiv" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notify_recent'];?>
</td>
</tr>
<tr>
  <td colspan="3" height="230" style="background-color:#F1F1F1;font-size:10pt" valign="top" id="boxNotifyTd"> </td>
</tr>
</table>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="162" height="270" id="boxClients" style="border:1px solid #666;position:fixed;bottom: 0px;right:30px;display:none">
<tr>
  <td style="font-size:8pt;font-weight:bold;color:#444;background-image:url(templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav_grad_40px.png)" valign="middle" height="20" valign="top" id="hideClientsDiv" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notify_clients'];?>
</td>
</tr>
<tr>
  <td colspan="3" height="230" style="background-color:#F1F1F1;font-size:10pt" valign="top" id="boxClientsTd"> </td>
</tr>
</table>


<?php if ($_smarty_tpl->tpl_vars['browser']->value!="Internet Explorer"||$_smarty_tpl->tpl_vars['browser']->value=="Internet Explorer"&&$_smarty_tpl->tpl_vars['browser_ver']->value>="9"){?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="30" style="border-top:1px solid #888;position:fixed;bottom:0px;left:0px;padding:0px;">
<tr>
  <td height="30" style="background-image:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png')"><a href="main.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/bar_logo.png" border="0" height="26" /></a></td>
  <td height="30" width="342" align="center" style="background-image:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png');cursor:pointer" id="divCheckNotify">&nbsp;</td>
  <td height="30" width="160" align="center" style="background-image:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png');cursor:pointer" id="clientsButton">&nbsp;</td>
  <td height="30" width="30" style="background-image:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/grad_30px-new.png')">&nbsp;</td>
</tr>
</table>
<?php }?>
<?php }?>

<div align="center">
  <div id="hdr_logo" style="background-image:url('templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo_grad.png');"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" border="0" /></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['nonav']->value!=1){?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="850" id="hdr_nav">
  <tr align="center" height="43" style="vertical-align:middle" valign="middle">
      <td style="vertical-align:middle" valign="middle" colspan="6" height="43" align="center" background="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/bg.png" bgcolor="#053a68">
          <ul id="jsddm" style="vertical-align:middle" width="200">
              <li><a href="main.php" style="text-align:center"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/main.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_main'];?>
</span></a></li>
              <li><a href="accounts.php" style="text-align:center"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/clients.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts'];?>
</span></a>
                  <ul>
                      
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/clients.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_clients'];?>
</b></a></li>
                      <li><a href="clients.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_list_client_accounts'];?>
</a></li>
                      <li><a href="addclient.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_create_client_account'];?>
</a></li>
                      
                      
                      
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/admins.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_admins'];?>
</b></a></li>
                      <li><a href="admins.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_list_admin_accounts'];?>
</a></li>
                      <li><a href="addadmin.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_create_admin_account'];?>
</a></li>
                      
                      
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/setup.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_my_account'];?>
</b></a></li>
                      <li><a href="editadmin.php?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/setup.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_accounts_edit_details'];?>
</a></li>
                  </ul>
              </li>
              <li style="vertical-align:middle"><a href="servertypes.php" style="text-align:center;width:100px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/servers.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers'];?>
</span></a>
                  <ul>
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/games.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_game_servers'];?>
</b></a></li>
                      <li><a href="servers.php?type=game" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_list_game_servers'];?>
</a></li>
                      <li><a href="createserver.php?type=game" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_create_game_server'];?>
</a></li>
                      
                      
                      
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/voip.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_voice_servers'];?>
</b></a></li>
                      <li><a href="servers.php?type=voip" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_list_voice_servers'];?>
</a></li>
                      <li><a href="createserver.php?type=voip" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_client_servers_create_voice_server'];?>
</a></li>
                  </ul>
              </li>
              <li><a href="network.php" style="text-align:center;width:75px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/network.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_network'];?>
</span></a>
                  <ul>
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/network.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_network_servers'];?>
</b></a></li>
                      <li><a href="network.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_network_list_servers'];?>
</a></li>
                      <li><a href="addnetworkserver.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_network_create'];?>
</a></li>
                      <li><a href="testconnection.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/cmd.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_network_test'];?>
</a></li>
                  </ul>
              </li>
              <li><a href="tickets.php" style="text-align:center;width:110px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/support.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_tickets'];?>
</span></a>
                  <ul>
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/support.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_tickets'];?>
</b></a></li>
                      <li><a href="tickets.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_tickets_list'];?>
</a></li>
                      <li><a href="addticket.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_tickets_create'];?>
</a></li>
                  </ul>
              </li>
              <li><a href="configuration.php" style="text-align:center;width:100px"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/setup.png" border="0" style="vertical-align:middle"><span class="nav_titles">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_system'];?>
</span></a>
                  <ul>
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/setup.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_system_settings'];?>
</b></a></li>
                      <li><a href="configuration.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/setup.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_configuration_settings'];?>
</a></li>

                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/template.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_templates'];?>
</b></a></li>
                      <li><a href="archives.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_configuration_game_templates'];?>
</a></li>
                      <li><a href="createarchive.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_templates_add'];?>
</a></li>
                  
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/supported.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_suppsrv'];?>
</b></a></li>
                      <li><a href="defaultservers.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['suppsrv_icon_default_srv'];?>
</a></li>
                      <li><a href="addsupportedserver.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/add.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_suppsrv_add'];?>
</a></li>
                      <li><a href="#" style="background-color:#333333;color:white"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/supported.png" border="0" style="vertical-align:middle">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_domains_dns'];?>
</b></a></li>
                      <li><a href="domains.php" style="text-align:left">&nbsp;&nbsp;&nbsp;<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/nav/transparent/list.png" border="0" style="vertical-align:middle">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['nav_domains_manage'];?>
</a></li>
                  </ul>
              </li>
          </ul>
      </td>
  </tr>
</table>
<?php }?>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="847" style="border-bottom:1px solid #999999;border-bottom-left-radius:8px;border-bottom-right-radius:8px;box-shadow:-1px 0px 10px #6D7B8D;-moz-box-shadow:-1px 5px 10px #6D7B8D;-webkit-box-shadow:-1px 5px 10px #6D7B8D;">
  <tr>
    <td valign="top" class="center_table" colspan="6" style="border-top:1px solid black">
<?php }} ?>